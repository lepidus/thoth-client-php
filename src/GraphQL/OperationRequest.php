<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\TypeReference;

final class OperationRequest
{
    private string $operationType;

    private FieldDefinition $field;

    private array $arguments;

    private array $selection;

    public function __construct(string $operationType, FieldDefinition $field, array $arguments = [], array $selection = [])
    {
        if (!in_array($operationType, ['query', 'mutation'], true)) {
            throw new \InvalidArgumentException('Operation type must be query or mutation.');
        }

        $this->operationType = $operationType;
        $this->field = $field;
        $this->arguments = $arguments;
        $this->selection = $selection;
    }

    public static function enum(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public function getField(): FieldDefinition
    {
        return $this->field;
    }

    public function getSelection(): array
    {
        return $this->selection;
    }

    public function getVariables(): array
    {
        return $this->normalizeVariables($this->arguments, $this->getSchemaArgumentsByName());
    }

    public function toGraphQL(): string
    {
        $this->assertIdentifier($this->field->getName());
        $this->getVariables();
        $variableDefinitions = $this->formatVariableDefinitions($this->arguments);
        $arguments = $this->formatVariableArguments($this->arguments);
        $fieldLine = $this->field->getName() . ($arguments === '' ? '' : '(' . $arguments . ')');
        $selection = $this->formatSelection($this->selection, $this->field->getType());

        if ($selection !== '') {
            $fieldLine .= " {\n" . $selection . "\n    }";
        }

        return $this->operationType . ($variableDefinitions === '' ? '' : ' (' . $variableDefinitions . ')')
            . " {\n    " . $fieldLine . "\n}";
    }

    private function formatVariableDefinitions(array $arguments): string
    {
        $formatted = [];
        $schemaArguments = $this->getSchemaArgumentsByName();

        foreach ($arguments as $name => $value) {
            if ($value === null) {
                continue;
            }

            $this->assertIdentifier((string) $name);
            if (isset($schemaArguments[$name])) {
                $formatted[] = '$' . $name . ': ' . $schemaArguments[$name]->toGraphQL();
            }
        }

        return implode(', ', $formatted);
    }

    private function formatVariableArguments(array $arguments): string
    {
        $formatted = [];

        foreach ($arguments as $name => $value) {
            if ($value === null) {
                continue;
            }

            $this->assertIdentifier((string) $name);
            $formatted[] = $name . ': $' . $name;
        }

        return implode(', ', $formatted);
    }

    private function normalizeVariables(array $variables, array $schemaArguments): array
    {
        $normalized = [];

        foreach ($variables as $name => $value) {
            $this->assertIdentifier((string) $name);

            if ($value !== null) {
                $normalized[$name] = $this->normalizeVariableValue($value, $schemaArguments[$name] ?? null);
            }
        }

        return $normalized;
    }

    private function normalizeVariableValue($value, ?TypeReference $type = null)
    {
        if ($value instanceof EnumValue) {
            $this->assertIdentifier((string) $value);
            return (string) $value;
        }

        if (is_array($value)) {
            if ($this->isList($value)) {
                $listType = $this->getListItemType($type);

                return array_map(function ($item) use ($listType) {
                    return $this->normalizeVariableValue($item, $listType);
                }, $value);
            }

            $normalized = [];
            $inputFields = $this->getInputFieldDefinitions($type);

            foreach ($value as $field => $fieldValue) {
                $this->assertIdentifier((string) $field);

                if ($inputFields !== null && !array_key_exists($field, $inputFields)) {
                    throw new \InvalidArgumentException(
                        "Unknown GraphQL input field '{$field}' for '{$type->baseName()}'."
                    );
                }

                if ($fieldValue !== null) {
                    $normalized[$field] = $this->normalizeVariableValue(
                        $fieldValue,
                        $inputFields[$field] ?? $this->getInputFieldType($type, (string) $field)
                    );
                }
            }

            if ($inputFields !== null) {
                foreach ($inputFields as $fieldName => $fieldType) {
                    if ($this->isNonNullType($fieldType) && !array_key_exists($fieldName, $normalized)) {
                        throw new \InvalidArgumentException(
                            "Missing required GraphQL input field '{$fieldName}' for '{$type->baseName()}'."
                        );
                    }
                }
            }

            return $normalized;
        }

        if ($this->isEnumType($type)) {
            $this->assertIdentifier((string) $value);
        }

        return $value;
    }

    private function formatSelection(array $selection, ?TypeReference $type = null): string
    {
        $lines = [];
        $objectFields = $this->getObjectFieldDefinitions($type);

        foreach ($selection as $key => $value) {
            if (is_array($value)) {
                $this->assertIdentifier((string) $key);
                $fieldType = $this->getSelectionFieldType($objectFields, (string) $key, $type);
                $lines[] = '        ' . $key . " {\n"
                    . $this->indent($this->formatSelection($value, $fieldType), 8)
                    . "\n        }";
                continue;
            }

            $this->assertIdentifier((string) $value);
            $this->getSelectionFieldType($objectFields, (string) $value, $type);
            $lines[] = '        ' . $value;
        }

        return implode("\n", $lines);
    }

    private function formatValue($value, ?TypeReference $type = null): string
    {
        if ($value instanceof EnumValue) {
            $this->assertIdentifier((string) $value);
            return (string) $value;
        }

        if (is_array($value)) {
            if ($this->isList($value)) {
                $listType = $this->getListItemType($type);
                return '[' . implode(', ', array_map(function ($item) use ($listType) {
                    return $this->formatValue($item, $listType);
                }, $value)) . ']';
            }

            $fields = [];
            foreach ($value as $field => $fieldValue) {
                if ($fieldValue !== null) {
                    $this->assertIdentifier((string) $field);
                    $fields[] = $field . ': ' . $this->formatValue(
                        $fieldValue,
                        $this->getInputFieldType($type, (string) $field)
                    );
                }
            }

            return '{' . implode(', ', $fields) . '}';
        }

        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        if (is_int($value) || is_float($value)) {
            return (string) $value;
        }

        if ($this->isEnumType($type)) {
            $this->assertIdentifier((string) $value);
            return (string) $value;
        }

        return json_encode((string) $value, JSON_UNESCAPED_UNICODE);
    }

    private function isList(array $value): bool
    {
        if ($value === []) {
            return true;
        }

        return array_keys($value) === range(0, count($value) - 1);
    }

    private function indent(string $value, int $spaces): string
    {
        return str_replace("\n", "\n" . str_repeat(' ', $spaces), $value);
    }

    private function assertIdentifier(string $value): void
    {
        if (!preg_match('/^[_A-Za-z][_0-9A-Za-z]*$/', $value)) {
            throw new \InvalidArgumentException("Invalid GraphQL identifier '{$value}'.");
        }
    }

    private function getSchemaArgumentsByName(): array
    {
        $arguments = [];

        foreach ($this->field->getArguments() as $argument) {
            $arguments[$argument->getName()] = $argument->getType();
        }

        return $arguments;
    }

    private function getListItemType(?TypeReference $type): ?TypeReference
    {
        if ($type === null) {
            return null;
        }

        if ($type->getKind() === 'NON_NULL') {
            return $this->getListItemType($type->getOfType());
        }

        if ($type->getKind() === 'LIST') {
            return $type->getOfType();
        }

        return null;
    }

    private function getInputFieldType(?TypeReference $type, string $fieldName): ?TypeReference
    {
        $inputFields = $this->getInputFieldDefinitions($type);

        if ($inputFields === null) {
            return null;
        }

        return $inputFields[$fieldName] ?? null;
    }

    private function isEnumType(?TypeReference $type): bool
    {
        if ($type === null) {
            return false;
        }

        if ($type->getKind() === 'NON_NULL') {
            return $this->isEnumType($type->getOfType());
        }

        return class_exists($this->getSchemaClassName('Enums', $type->baseName()));
    }

    private function getSchemaClassName(string $namespacePart, ?string $typeName): string
    {
        return '\\ThothApi\\GraphQL\\' . $namespacePart . '\\' . ($typeName === 'Abstract' ? 'GraphQLAbstract' : $typeName);
    }

    private function getSelectionFieldType(?array $objectFields, string $fieldName, ?TypeReference $parentType): ?TypeReference
    {
        if ($objectFields === null) {
            return null;
        }

        if (!array_key_exists($fieldName, $objectFields)) {
            throw new \InvalidArgumentException(
                "Unknown GraphQL field '{$fieldName}' for '{$parentType->baseName()}'."
            );
        }

        return $objectFields[$fieldName];
    }

    private function getObjectFieldDefinitions(?TypeReference $type): ?array
    {
        $schemaClass = $this->getSchemaClassName('Schemas', $type ? $type->baseName() : null);

        if (!class_exists($schemaClass)) {
            return null;
        }

        $fields = [];

        foreach ($schemaClass::definition()->getFields() as $field) {
            $fields[$field->getName()] = $field->getType();
        }

        return $fields;
    }

    private function getInputFieldDefinitions(?TypeReference $type): ?array
    {
        $inputClass = $this->getSchemaClassName('Inputs', $type ? $type->baseName() : null);

        if (!class_exists($inputClass)) {
            return null;
        }

        $fields = [];

        foreach ($inputClass::definition()->getFields() as $field) {
            $fields[$field->getName()] = $field->getType();
        }

        return $fields;
    }

    private function isNonNullType(TypeReference $type): bool
    {
        return $type->getKind() === 'NON_NULL';
    }
}
