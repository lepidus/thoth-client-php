**English** | [Español](/docs/README-es.md) | [Português Brasileiro](/docs/README-pt_BR.md)

# Thoth Client PHP

PHP client for the Thoth GraphQL and REST APIs.

## Install

This library is installable via Composer:

```bash
composer require thoth-pub/thoth-client-php
```

## Usage

### GraphQL

API Documentation: https://api.thoth.pub/graphiql

```php
$client = new \ThothApi\GraphQL\Client();
```

#### Queries

Query, mutation, schema, input, enum and scalar classes are generated from the Thoth GraphQL
introspection schema. The most convenient API is the dynamic client method named after the GraphQL
operation.

```php
$works = $client->works(5, [
    'workId',
    'fullTitle',
]);

echo $works[0]->getWorkId();
echo $works[0]->getFullTitle();
```

Arguments can be passed positionally or by name. Enum values can be passed directly using generated
enum constants. `OperationRequest::enum()` is still supported for custom operations.

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

Selections can include nested fields. Returned object fields and lists are hydrated into generated
schema classes.

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

The generic executor is still available when you want to use the generated operation classes
directly. It returns raw arrays instead of hydrated schema objects.

```php
use ThothApi\GraphQL\Generated\Queries\WorksQuery;

$works = $client->execute(WorksQuery::operation([
    'limit' => 5,
], [
    'workId',
    'fullTitle',
]));
```

Raw GraphQL queries are supported and use the configured token.

```php
$data = $client->rawQuery('query { workCount }');
```

#### Mutations

To execute mutations, provide a valid personal access token to the client.

```php
$client->setToken($token);
```

Inputs are generated from the schema. They can be created from arrays, from DTOs that expose
`getAllData()`, or from `JsonSerializable` objects.

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

By default, mutations returning objects select the first `*Id` field and return that scalar value, so
existing calls stay short.

```php
$subjectId = $client->createSubject($newSubject);
```

Pass an explicit selection when you want a hydrated schema object with getters, setters and `toArray()`.

```php
$subject = $client->createSubject($newSubject, [
    'subjectId',
    'subjectCode',
]);

echo $subject->getSubjectId();
echo $subject->getSubjectCode();
print_r($subject->toArray());
```

Generated schema objects can also be instantiated and populated manually.

```php
use ThothApi\GraphQL\Generated\Schemas\Work;

$work = (new Work())
    ->setWorkId('5a5b0fe3-03a9-444b-b221-ecae5370ff30')
    ->setFullTitle('Example title');

echo $work->getFullTitle();
print_r($work->toArray());
```

Regenerate the GraphQL classes from the current Thoth GraphQL schema:

```bash
composer generate-graphql-client
```

#### Exceptions

A QueryException is thrown in case of an error in the request to the GraphQL API. It's possible to retrieve the error message and a more detailed description from the exception.

```php
try {
    $client->execute(\ThothApi\GraphQL\Generated\Mutations\CreateWorkMutation::operation([
        'data' => [
            'doi' => 'https://doi.org/10.00000/00000000',
        ],
    ], ['workId']));
} catch (\ThothApi\Exception\QueryException $exception) {
    echo $exception->getMessage();
    /**
     * Invalid value for argument "data", reason:
     * "NewWork" is missing fields: "imprintId", "workStatus", "workType"
    */
    echo print_r($exception->getDetails());
    /**
     *  Array (
     *      [message] => Invalid value for argument "data", reason: "NewWork" is missing fields: "imprintId", "workStatus", "workType"
     *      [locations] => Array (
     *          [0] => Array (
     *              [line] => 3
     *              [column] => 15
     *          )
     *      )
     * )
    */
    echo $exception->getQuery();
    echo print_r($exception->getVariables(), true);
}
```

### REST

API Documentation: https://export.thoth.pub/

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

#### Exceptions

```php
try {
    $result = $client->publisher('foo', '42b3315e-07e9-4e23-92ae-86932e4ef0e3');
} catch (\ThothApi\Exception\RestException $exception) {
    echo $exception->getMessage(); // "foo is not a valid metadata specification"
}
```

### Client Construction

The constructor of both Clients can receive an optional array to add custom [Guzzle HTTP Client request options](https://docs.guzzlephp.org/en/latest/request-options.html).

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

Clients make requests to the default addresses of the Thoth APIs: https://api.thoth.pub/ for the GraphQL API and https://export.thoth.pub/ for the REST API. If you want to use a different address (such as "localhost" for testing), just add the "base_uri" option with the new address in the client's constructor.

```php
$client = new Client(['base_uri' => 'localhost:8000']);
```

## Credits

Idealized and sponsored by  [Thoth](https://thoth.pub/).

Developed by [Lepidus Tecnologia](https://github.com/lepidus).

## License

Licensed under the Apache License, Version 2.0 - [See the License file.](/LICENSE)

Copyright (c) 2024-2026 Lepidus Tecnologia

Copyright (c) 2024-2026 Thoth Open Metadata
