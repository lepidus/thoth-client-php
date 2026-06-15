[English](/README.md) | **Español** | [Português Brasileiro](/docs/README-pt_BR.md)

# Thoth Cliente PHP

Cliente PHP para las API GraphQL y REST de Thoth.

## Instalación

Esta biblioteca se puede instalar con Composer:

```bash
composer require thoth-pub/thoth-client-php
```

## Uso

### GraphQL

Documentación de la API: https://api.thoth.pub/graphiql

```php
$client = new \ThothApi\GraphQL\Client();
```

#### Consultas

Las clases de consultas, mutaciones, schemas, inputs, enums y scalars se generan a partir del schema
de introspección GraphQL de Thoth. La API más simple es llamar en el cliente al método con el mismo
nombre de la operación GraphQL.

```php
$works = $client->works(5, [
    'workId',
    'fullTitle',
]);

echo $works[0]->getWorkId();
echo $works[0]->getFullTitle();
```

Los argumentos pueden pasarse por posición o por nombre. Los valores enum pueden pasarse directamente
con constantes de las clases enum generadas. `OperationRequest::enum()` sigue disponible para
operaciones personalizadas.

```php
use ThothApi\GraphQL\Generated\Enums\Direction;
use ThothApi\GraphQL\Generated\Enums\WorkField;

$works = $client->works([
    'publishers' => ['71faf1c3-900a-4b8c-bca7-4f927699fb90'],
    'limit' => 5,
    'order' => [
        'field' => WorkField::PUBLICATION_DATE,
        'direction' => Direction::DESC,
    ],
], [
    'workId',
    'fullTitle',
    'doi',
]);
```

La selección puede incluir campos anidados. Los campos que devuelven objetos o listas se hidratan en
clases generadas de schema.

```php
$work = $client->work('5a5b0fe3-03a9-444b-b221-ecae5370ff30', [
    'workId',
    'fullTitle',
    'titles' => [
        'titleId',
        'fullTitle',
    ],
    'imprint' => [
        'imprintId',
        'publisher' => [
            'publisherId',
            'publisherName',
        ],
    ],
]);

echo $work->getImprint()->getPublisher()->getPublisherName();
echo $work->getTitles()[0]->getFullTitle();
```

El ejecutor genérico sigue disponible cuando sea mejor usar directamente las clases generadas de
operación. Devuelve arrays sin hidratar objetos de schema.

```php
use ThothApi\GraphQL\Generated\Queries\WorksQuery;

$works = $client->execute(WorksQuery::operation([
    'limit' => 5,
], [
    'workId',
    'fullTitle',
]));
```

También es posible ejecutar GraphQL bruto. El token configurado con `setToken()` se usa en este camino.

```php
$data = $client->rawQuery('query { workCount }');
```

#### Mutaciones

Para ejecutar mutaciones, proporcione al cliente un personal access token valido.

```php
$client->setToken($token);
```

Los inputs se generan a partir del schema. Se pueden crear con arrays, a partir de DTOs que exponen
`getAllData()` o con objetos `JsonSerializable`.

```php
use ThothApi\GraphQL\Generated\Enums\SubjectType;
use ThothApi\GraphQL\Generated\Inputs\NewSubject;

$newSubject = new NewSubject([
    'workId' => '5a5b0fe3-03a9-444b-b221-ecae5370ff30',
    'subjectType' => SubjectType::BIC,
    'subjectCode' => '1D',
    'subjectOrdinal' => 3,
]);

$subjectId = $client->createSubject($newSubject);
```

Por defecto, las mutaciones que devuelven objetos seleccionan el primer campo `*Id` y devuelven ese
valor escalar.

```php
$subjectId = $client->createSubject($newSubject);
```

Indique una selección explícita cuando quiera recibir un objeto de schema hidratado con getters,
setters y `toArray()`.

```php
$subject = $client->createSubject($newSubject, [
    'subjectId',
    'subjectCode',
]);

echo $subject->getSubjectId();
echo $subject->getSubjectCode();
print_r($subject->toArray());
```

Las clases de schema también pueden instanciarse y poblarse manualmente.

```php
use ThothApi\GraphQL\Generated\Schemas\Work;

$work = (new Work())
    ->setWorkId('5a5b0fe3-03a9-444b-b221-ecae5370ff30')
    ->setFullTitle('Titulo de ejemplo');

echo $work->getFullTitle();
print_r($work->toArray());
```

Regenera las clases GraphQL a partir del schema actual de Thoth:

```bash
composer generate-graphql-client
```

#### Excepciones

Se lanza una excepción del tipo *QueryException* en caso de error en la solicitud a la API GraphQL. Es posible recuperar el mensaje, los detalles, la query y las variables enviadas.

```php
try {
    $client->createWork(new \ThothApi\GraphQL\Generated\Inputs\NewWork([
        'doi' => 'https://doi.org/10.00000/00000000',
    ]));
} catch (\ThothApi\Exception\QueryException $exception) {
    echo $exception->getMessage();
    echo print_r($exception->getDetails(), true);
    echo $exception->getQuery();
    echo print_r($exception->getVariables(), true);
}
```

### REST

Documentación de la API: https://export.thoth.pub/

```php
$client = new \ThothApi\Rest\Client();

echo(print_r($client->work('doideposit::crossref', 'e0f748b2-984f-45cc-8b9e-13989c31dda4'), true));
/**
 * <?xml version="1.0" encoding="utf-8"?>
 * <doi_batch version="5.3.1" xmlns="http://www.crossref.org/schema/5.3.1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.crossref.org/schema/5.3.1 http://www.crossref.org/schemas/crossref5.3.1.xsd" xmlns:ai="http://www.crossref.org/AccessIndicators.xsd" xmlns:jats="http://www.ncbi.nlm.nih.gov/JATS1" xmlns:fr="http://www.crossref.org/fundref.xsd">
 *  <head>
 *      <doi_batch_id>e0f748b2-984f-45cc-8b9e-13989c31dda4_20241010195624</doi_batch_id>
 *      <timestamp>20241010195624</timestamp>
 *      <depositor>
 *          <depositor_name>Thoth</depositor_name>
 *          <email_address>distribution@thoth.pub</email_address>
 *      </depositor>
 *      <registrant>Thoth</registrant>
 *  </head>
 *  <body>
 *      <book book_type="monograph">
 *          <book_metadata language="en">
 *          <contributors>
 *              <person_name sequence="first" contributor_role="author">
 *                  <given_name>Ammiel</given_name>
 *                  <surname>Alcalay</surname>
 *                  <affiliations>
 *                      <institution>
 *                          <institution_name>Queens College, CUNY</institution_name>
 *                          <institution_id type="ror">https://ror.org/03v8adn41</institution_id>
 *                      </institution>
 *                      <institution>
 *                          <institution_name>The Graduate Center, CUNY</institution_name>
 *                          <institution_id type="ror">https://ror.org/00awd9g61</institution_id>
 *                      </institution>
 *                  </affiliations>
 *              </person_name>
 *          </contributors>
 *          <titles>
 *              <title>A Bibliography for After Jews and Arabs</title>
 *          </titles>
 *          ...
 */
```

#### Excepciones

```php
try {
    $result = $client->publisher('foo', '42b3315e-07e9-4e23-92ae-86932e4ef0e3');
} catch (\ThothApi\Exception\RestException $exception) {
    echo $exception->getMessage(); // "foo is not a valid metadata specification"
}
```

### Construcción del Cliente

El constructor de ambos Clientes puede recibir un array opcional para agregar configuraciones personalizadas de [solicitudes del Cliente HTTP Guzzle](https://docs.guzzlephp.org/en/latest/request-options.html).

```php
$client = new Client([
    'allow_redirects' => false,
    'connect_timeout' => 3.14,
    'timeout' => 3.14,
    'proxy' => [
        'http' => 'http://localhost:8125',
        'https' => 'http://localhost:9124',
        'no' => ['.mit.edu', 'foo.com'],
    ],
    'debug' => true,
]);
```

Los clientes realizan solicitudes a las direcciones predeterminadas de las APIs de Thoth: https://api.thoth.pub/ para la API GraphQL y https://export.thoth.pub/ para la API REST. Si deseas utilizar una dirección diferente (como "localhost" para pruebas), simplemente agrega la opción "base_uri" con la nueva dirección en el constructor del cliente.

```php
$client = new Client(['base_uri' => 'localhost:8000']);
```

## Créditos

Idealizado y patrocinado por [Thoth](https://thoth.pub/).

Desarrollado por [Lepidus Tecnologia](https://github.com/lepidus).

## Licencia

Licenciado bajo la Licencia Apache, Versión 2.0 - [Consulta el archivo de licencia.](/LICENSE)

Copyright (c) 2024-2026 Lepidus Tecnologia

Copyright (c) 2024-2026 Thoth Open Metadata
