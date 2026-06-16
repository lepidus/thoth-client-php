<?php

declare(strict_types=1);

const THOTH_GRAPHQL_ENDPOINT = 'https://api.thoth.pub/graphql';
const GENERATED_DIRECTORIES = ['Queries', 'Mutations', 'Schemas', 'Inputs', 'Enums', 'Scalars'];

main($argv);

function main(array $argv): void
{
    $target = $argv[2] ?? dirname(__DIR__) . '/src/GraphQL';
    $schema = loadIntrospectionSchema($argv[1] ?? null);
    $types = indexTypesByName($schema['types'] ?? []);

    prepareGeneratedDirectories($target);
    generateRootOperations($schema, $types, $target);
    generateSchemaTypes($types, $target);
}

function loadIntrospectionSchema(?string $schemaSource): array
{
    $response = $schemaSource ? loadSchemaFromFile($schemaSource) : fetchSchema(THOTH_GRAPHQL_ENDPOINT);

    if (!isset($response['data']['__schema']) || !is_array($response['data']['__schema'])) {
        fwrite(STDERR, "Invalid GraphQL introspection schema.\n");
        exit(1);
    }

    return $response['data']['__schema'];
}

function loadSchemaFromFile(string $schemaPath): array
{
    $schema = json_decode((string) file_get_contents($schemaPath), true);

    return is_array($schema) ? $schema : [];
}

function fetchSchema(string $endpoint): array
{
    $payload = json_encode(['query' => introspectionQuery()]);
    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/json\r\n",
            'content' => $payload,
        ],
    ]);
    $schema = json_decode((string) file_get_contents($endpoint, false, $context), true);

    return is_array($schema) ? $schema : [];
}

function introspectionQuery(): string
{
    return 'query IntrospectionQuery { __schema { queryType { name } mutationType { name } subscriptionType { name } types { ...FullType } directives { name description locations args { ...InputValue } } } } fragment FullType on __Type { kind name description fields(includeDeprecated: true) { name description args { ...InputValue } type { ...TypeRef } isDeprecated deprecationReason } inputFields { ...InputValue } interfaces { ...TypeRef } enumValues(includeDeprecated: true) { name description isDeprecated deprecationReason } possibleTypes { ...TypeRef } } fragment InputValue on __InputValue { name description type { ...TypeRef } defaultValue } fragment TypeRef on __Type { kind name ofType { kind name ofType { kind name ofType { kind name ofType { kind name ofType { kind name ofType { kind name ofType { kind name } } } } } } } }';
}

function indexTypesByName(array $schemaTypes): array
{
    $types = [];

    foreach ($schemaTypes as $type) {
        if (isset($type['name'])) {
            $types[$type['name']] = $type;
        }
    }

    return $types;
}

function prepareGeneratedDirectories(string $target): void
{
    foreach (GENERATED_DIRECTORIES as $directory) {
        removeDirectory($target . '/' . $directory);
        mkdir($target . '/' . $directory, 0777, true);
    }
}

function generateRootOperations(array $schema, array $types, string $target): void
{
    generateOperations(
        $types[$schema['queryType']['name']] ?? [],
        'query',
        $target . '/Queries',
        'Queries'
    );
    generateOperations(
        $types[$schema['mutationType']['name']] ?? [],
        'mutation',
        $target . '/Mutations',
        'Mutations'
    );
}

function generateSchemaTypes(array $types, string $target): void
{
    foreach ($types as $type) {
        if (isInternalType($type)) {
            continue;
        }

        generateSchemaType($type, $target);
    }
}

function isInternalType(array $type): bool
{
    return isset($type['name']) && strpos($type['name'], '__') === 0;
}

function generateSchemaType(array $type, string $target): void
{
    switch ($type['kind'] ?? '') {
        case 'OBJECT':
            generateObjectType($type, $target . '/Schemas', 'Schemas');
            return;
        case 'INPUT_OBJECT':
            generateInputType($type, $target . '/Inputs', 'Inputs');
            return;
        case 'ENUM':
            generateEnumType($type, $target . '/Enums', 'Enums');
            return;
        case 'SCALAR':
            generateScalarType($type, $target . '/Scalars', 'Scalars');
            return;
    }
}

function generateOperations(array $rootType, string $operationType, string $directory, string $namespacePart): void
{
    foreach ($rootType['fields'] ?? [] as $field) {
        $className = safeClassName(studly($field['name']) . operationClassSuffix($operationType));

        writeGeneratedClass($directory, $className, operationClassCode(
            $namespacePart,
            $className,
            $operationType,
            fieldCode($field)
        ));
    }
}

function operationClassSuffix(string $operationType): string
{
    return $operationType === 'query' ? 'Query' : 'Mutation';
}

function operationClassCode(string $namespacePart, string $className, string $operationType, string $fieldCode): string
{
    return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\FieldDefinition;
use ThothApi\\GraphQL\\OperationRequest;

final class {$className}
{
    public static function field(): FieldDefinition
    {
        return {$fieldCode};
    }

    public static function operation(array \$arguments = [], array \$selection = []): OperationRequest
    {
        return new OperationRequest('{$operationType}', self::field(), \$arguments, \$selection);
    }
}
PHP;
}

function generateObjectType(array $type, string $directory, string $namespacePart): void
{
    $className = safeClassName(studly($type['name']));

    writeGeneratedClass($directory, $className, objectClassCode(
        $namespacePart,
        $className,
        $type['name'],
        objectFieldMethodsCode($type['fields'] ?? []),
        fieldDefinitionListCode($type['fields'] ?? [], 3)
    ));
}

function objectClassCode(
    string $namespacePart,
    string $className,
    string $typeName,
    string $methodsCode,
    string $fieldsCode
): string {
    return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\ObjectTypeDefinition;
use ThothApi\\GraphQL\\ObjectData;

final class {$className} extends ObjectData
{
{$methodsCode}

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('{$typeName}', [
            {$fieldsCode}
        ]);
    }
}
PHP;
}

function objectFieldMethodsCode(array $fields): string
{
    return implode("\n\n", array_map('objectFieldMethods', $fields));
}

function objectFieldMethods(array $field): string
{
    $methodName = studly($field['name']);
    $fieldName = exportPhpValue($field['name']);
    $phpDocType = phpDocType($field['type']);

    return <<<PHP
    /**
     * @return {$phpDocType}
     */
    public function get{$methodName}()
    {
        return \$this->get({$fieldName});
    }

    /**
     * @param {$phpDocType} \$value
     */
    public function set{$methodName}(\$value): self
    {
        return \$this->set({$fieldName}, \$value);
    }
PHP;
}

function generateInputType(array $type, string $directory, string $namespacePart): void
{
    $className = safeClassName(studly($type['name']));

    writeGeneratedClass($directory, $className, inputClassCode(
        $namespacePart,
        $className,
        $type['name'],
        argumentDefinitionListCode($type['inputFields'] ?? [], 3)
    ));
}

function inputClassCode(string $namespacePart, string $className, string $typeName, string $fieldsCode): string
{
    return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\InputObjectTypeDefinition;
use ThothApi\\GraphQL\\InputObject;

final class {$className} extends InputObject
{
    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('{$typeName}', [
            {$fieldsCode}
        ]);
    }
}
PHP;
}

function generateEnumType(array $type, string $directory, string $namespacePart): void
{
    $className = safeClassName(studly($type['name']));
    $values = enumValueNames($type['enumValues'] ?? []);

    writeGeneratedClass($directory, $className, enumClassCode(
        $namespacePart,
        $className,
        $type['name'],
        enumConstantsCode($values),
        exportPhpValue($values, 2)
    ));
}

function enumValueNames(array $enumValues): array
{
    return array_map(
        static function (array $value): string {
            return $value['name'];
        },
        $enumValues
    );
}

function enumConstantsCode(array $values): string
{
    return implode("\n", array_map(
        static function (string $value): string {
            return '    public const ' . sanitizeConstant($value) . ' = ' . exportPhpValue($value) . ';';
        },
        $values
    ));
}

function enumClassCode(
    string $namespacePart,
    string $className,
    string $typeName,
    string $constantsCode,
    string $valuesCode
): string {
    return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\EnumTypeDefinition;
use ThothApi\\GraphQL\\EnumValue;

final class {$className}
{
{$constantsCode}

    public static function value(string \$value): EnumValue
    {
        return new EnumValue(\$value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('{$typeName}', {$valuesCode});
    }
}
PHP;
}

function generateScalarType(array $type, string $directory, string $namespacePart): void
{
    $className = safeClassName(studly($type['name']) . 'Scalar');

    writeGeneratedClass($directory, $className, scalarClassCode(
        $namespacePart,
        $className,
        $type['name'],
        exportPhpValue($type['description'] ?? null, 2)
    ));
}

function scalarClassCode(string $namespacePart, string $className, string $typeName, string $description): string
{
    return <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\ScalarTypeDefinition;

final class {$className}
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('{$typeName}', {$description});
    }
}
PHP;
}

function fieldDefinitionListCode(array $fields, int $level): string
{
    return implode(",\n            ", array_map(
        static function (array $field) use ($level): string {
            return fieldCode($field, $level);
        },
        $fields
    ));
}

function argumentDefinitionListCode(array $arguments, int $level): string
{
    return implode(",\n            ", array_map(
        static function (array $argument) use ($level): string {
            return argumentCode($argument, $level);
        },
        $arguments
    ));
}

function fieldCode(array $field, int $level = 2): string
{
    return definitionFactoryCode('FieldDefinition', 'fromIntrospection', $field, $level);
}

function argumentCode(array $argument, int $level = 2): string
{
    return definitionFactoryCode('ArgumentDefinition', 'fromIntrospection', $argument, $level);
}

function definitionFactoryCode(string $className, string $methodName, array $data, int $level): string
{
    return "\\ThothApi\\GraphQL\\Definition\\{$className}::{$methodName}(" . exportPhpValue($data, $level) . ')';
}

function writeGeneratedClass(string $directory, string $className, string $contents): void
{
    file_put_contents($directory . '/' . $className . '.php', $contents . "\n");
}

function exportPhpValue($value, int $level = 0): string
{
    if (is_array($value)) {
        return exportPhpArray($value, $level);
    }

    if ($value === null) {
        return 'null';
    }

    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }

    return var_export($value, true);
}

function exportPhpArray(array $value, int $level): string
{
    if ($value === []) {
        return '[]';
    }

    $indent = str_repeat('    ', $level);
    $childIndent = str_repeat('    ', $level + 1);
    $isList = isSequentialArray($value);
    $lines = ['['];

    foreach ($value as $key => $childValue) {
        $prefix = $isList ? '' : exportPhpValue($key, 0) . ' => ';
        $lines[] = $childIndent . $prefix . exportPhpValue($childValue, $level + 1) . ',';
    }

    $lines[] = $indent . ']';
    return implode("\n", $lines);
}

function isSequentialArray(array $value): bool
{
    $expected = 0;

    foreach ($value as $key => $_) {
        if ($key !== $expected) {
            return false;
        }

        $expected++;
    }

    return true;
}

function studly(string $value): string
{
    $value = preg_replace('/[^A-Za-z0-9]+/', ' ', $value);
    $value = preg_replace('/(?<!^)([A-Z])/', ' $1', (string) $value);
    $value = str_replace(' ', '', ucwords(strtolower((string) $value)));

    if ($value === '' || preg_match('/^[0-9]/', $value)) {
        return 'Type' . $value;
    }

    return $value;
}

function sanitizeConstant(string $value): string
{
    $constant = preg_replace('/[^A-Za-z0-9_]/', '_', $value);
    $constant = strtoupper((string) $constant);

    if ($constant === '' || preg_match('/^[0-9]/', $constant)) {
        return 'VALUE_' . $constant;
    }

    return $constant;
}

function phpDocType(array $type): string
{
    $nullable = ($type['kind'] ?? null) !== 'NON_NULL';
    $baseType = phpDocBaseType($type);

    return $nullable ? $baseType . '|null' : $baseType;
}

function phpDocBaseType(array $type): string
{
    if (($type['kind'] ?? null) === 'NON_NULL') {
        return phpDocBaseType($type['ofType'] ?? []);
    }

    if (($type['kind'] ?? null) === 'LIST') {
        return 'array';
    }

    if (($type['kind'] ?? null) === 'ENUM') {
        return 'string';
    }

    if (($type['kind'] ?? null) === 'OBJECT' && isset($type['name'])) {
        return safeClassName(studly($type['name']));
    }

    if (($type['kind'] ?? null) === 'SCALAR') {
        return phpDocScalarType((string) ($type['name'] ?? ''));
    }

    return 'mixed';
}

function phpDocScalarType(string $typeName): string
{
    switch ($typeName) {
        case 'Boolean':
            return 'bool';
        case 'Float':
            return 'float';
        case 'Int':
            return 'int';
        case 'String':
        case 'Date':
        case 'Doi':
        case 'Isbn':
        case 'Orcid':
        case 'Ror':
        case 'Timestamp':
        case 'Uuid':
            return 'string';
    }

    return 'mixed';
}

function safeClassName(string $className): string
{
    if (in_array(strtolower($className), reservedWords(), true)) {
        return 'GraphQL' . $className;
    }

    return $className;
}

function reservedWords(): array
{
    return [
        'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class', 'clone', 'const',
        'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty', 'enddeclare',
        'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final',
        'finally', 'fn', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include',
        'include_once', 'instanceof', 'insteadof', 'interface', 'isset', 'list', 'match', 'namespace',
        'new', 'or', 'print', 'private', 'protected', 'public', 'readonly', 'require', 'require_once',
        'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor',
        'yield',
    ];
}

function removeDirectory(string $directory): void
{
    if (!is_dir($directory)) {
        return;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($iterator as $file) {
        if ($file->isDir()) {
            rmdir($file->getPathname());
        } else {
            unlink($file->getPathname());
        }
    }

    rmdir($directory);
}
