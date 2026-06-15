<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$schemaSource = $argv[1] ?? null;
$target = $argv[2] ?? $root . '/src/GraphQL';
$generatedDirectories = ['Queries', 'Mutations', 'Schemas', 'Inputs', 'Enums', 'Scalars'];

$schema = $schemaSource ? loadSchemaFromFile($schemaSource) : fetchSchema('https://api.thoth.pub/graphql');
if (!isset($schema['data']['__schema'])) {
    fwrite(STDERR, "Invalid GraphQL introspection schema.\n");
    exit(1);
}

$schema = $schema['data']['__schema'];
$types = [];
foreach ($schema['types'] as $type) {
    if (isset($type['name'])) {
        $types[$type['name']] = $type;
    }
}

foreach ($generatedDirectories as $directory) {
    removeDirectory($target . '/' . $directory);
    mkdir($target . '/' . $directory, 0777, true);
}

generateOperations($types[$schema['queryType']['name']], 'query', $target . '/Queries', 'Queries');
generateOperations($types[$schema['mutationType']['name']], 'mutation', $target . '/Mutations', 'Mutations');

foreach ($types as $type) {
    if (strpos($type['name'], '__') === 0) {
        continue;
    }

    switch ($type['kind']) {
        case 'OBJECT':
            generateObjectType($type, $target . '/Schemas', 'Schemas');
            break;
        case 'INPUT_OBJECT':
            generateInputType($type, $target . '/Inputs', 'Inputs');
            break;
        case 'ENUM':
            generateEnumType($type, $target . '/Enums', 'Enums');
            break;
        case 'SCALAR':
            generateScalarType($type, $target . '/Scalars', 'Scalars');
            break;
    }
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

function generateOperations(array $rootType, string $operationType, string $directory, string $namespacePart): void
{
    foreach ($rootType['fields'] ?? [] as $field) {
        $className = safeClassName(studly($field['name']) . ($operationType === 'query' ? 'Query' : 'Mutation'));
        $fieldCode = fieldCode($field);
        $contents = <<<PHP
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
        file_put_contents($directory . '/' . $className . '.php', $contents . "\n");
    }
}

function generateObjectType(array $type, string $directory, string $namespacePart): void
{
    $className = safeClassName(studly($type['name']));
    $methods = array_map(
        static function (array $field): string {
            return objectFieldMethods($field);
        },
        $type['fields'] ?? []
    );
    $fields = array_map(
        static function (array $field): string {
            return fieldCode($field, 3);
        },
        $type['fields'] ?? []
    );
    $methodsCode = implode("\n\n", array_filter($methods));
    $fieldsCode = implode(",\n            ", $fields);
    $contents = <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\ObjectTypeDefinition;
use ThothApi\\GraphQL\\ObjectData;

final class {$className} extends ObjectData
{
{$methodsCode}

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('{$type['name']}', [
            {$fieldsCode}
        ]);
    }
}
PHP;
    file_put_contents($directory . '/' . $className . '.php', $contents . "\n");
}

function objectFieldMethods(array $field): string
{
    $methodName = studly($field['name']);
    $fieldName = exportPhpValue($field['name']);

    return <<<PHP
    public function get{$methodName}()
    {
        return \$this->get({$fieldName});
    }

    public function set{$methodName}(\$value): self
    {
        return \$this->set({$fieldName}, \$value);
    }
PHP;
}

function generateInputType(array $type, string $directory, string $namespacePart): void
{
    $className = safeClassName(studly($type['name']));
    $fields = array_map(
        static function (array $argument): string {
            return argumentCode($argument, 3);
        },
        $type['inputFields'] ?? []
    );
    $fieldsCode = implode(",\n            ", $fields);
    $contents = <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\InputObjectTypeDefinition;
use ThothApi\\GraphQL\\InputObject;

final class {$className} extends InputObject
{
    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('{$type['name']}', [
            {$fieldsCode}
        ]);
    }
}
PHP;
    file_put_contents($directory . '/' . $className . '.php', $contents . "\n");
}

function generateEnumType(array $type, string $directory, string $namespacePart): void
{
    $className = safeClassName(studly($type['name']));
    $values = [];
    $constants = [];
    foreach ($type['enumValues'] ?? [] as $value) {
        $values[] = $value['name'];
        $constantName = sanitizeConstant($value['name']);
        $constants[] = "    public const {$constantName} = '{$value['name']}';";
    }

    $valuesCode = exportPhpValue($values, 2);
    $constantsCode = implode("\n", $constants);
    $contents = <<<PHP
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
        return new EnumTypeDefinition('{$type['name']}', {$valuesCode});
    }
}
PHP;
    file_put_contents($directory . '/' . $className . '.php', $contents . "\n");
}

function generateScalarType(array $type, string $directory, string $namespacePart): void
{
    $className = safeClassName(studly($type['name']) . 'Scalar');
    $description = exportPhpValue($type['description'] ?? null, 2);
    $contents = <<<PHP
<?php

namespace ThothApi\\GraphQL\\{$namespacePart};

use ThothApi\\GraphQL\\Definition\\ScalarTypeDefinition;

final class {$className}
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('{$type['name']}', {$description});
    }
}
PHP;
    file_put_contents($directory . '/' . $className . '.php', $contents . "\n");
}

function fieldCode(array $field, int $level = 2): string
{
    $fieldExport = exportPhpValue($field, $level);
    return "\\ThothApi\\GraphQL\\Definition\\FieldDefinition::fromIntrospection({$fieldExport})";
}

function argumentCode(array $argument, int $level = 2): string
{
    $argumentExport = exportPhpValue($argument, $level);
    return "\\ThothApi\\GraphQL\\Definition\\ArgumentDefinition::fromIntrospection({$argumentExport})";
}

function exportPhpValue($value, int $level = 0): string
{
    if (is_array($value)) {
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

    if ($value === null) {
        return 'null';
    }

    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }

    return var_export($value, true);
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

function safeClassName(string $className): string
{
    $reserved = [
        'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class', 'clone', 'const',
        'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty', 'enddeclare',
        'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final',
        'finally', 'fn', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include',
        'include_once', 'instanceof', 'insteadof', 'interface', 'isset', 'list', 'match', 'namespace',
        'new', 'or', 'print', 'private', 'protected', 'public', 'readonly', 'require', 'require_once',
        'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor',
        'yield',
    ];

    if (in_array(strtolower($className), $reserved, true)) {
        return 'GraphQL' . $className;
    }

    return $className;
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
