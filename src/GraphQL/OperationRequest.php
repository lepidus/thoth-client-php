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

    public function toGraphQL(): string
    {
        $this->assertIdentifier($this->field->getName());
        $arguments = $this->formatArguments($this->arguments);
        $fieldLine = $this->field->getName() . ($arguments === '' ? '' : '(' . $arguments . ')');
        $selection = $this->formatSelection($this->selection);

        if ($selection !== '') {
            $fieldLine .= " {\n" . $selection . "\n    }";
        }

        return $this->operationType . " {\n    " . $fieldLine . "\n}";
    }

    private function formatArguments(array $arguments): string
    {
        $formatted = [];
        $schemaArguments = $this->getSchemaArgumentsByName();

        foreach ($arguments as $name => $value) {
            if ($value === null) {
                continue;
            }

            $this->assertIdentifier((string) $name);
            $formatted[] = $name . ': ' . $this->formatValue($value, $schemaArguments[$name] ?? null);
        }

        return implode(', ', $formatted);
    }

    private function formatSelection(array $selection): string
    {
        $lines = [];

        foreach ($selection as $key => $value) {
            if (is_array($value)) {
                $this->assertIdentifier((string) $key);
                $lines[] = '        ' . $key . " {\n" . $this->indent($this->formatSelection($value), 8) . "\n        }";
                continue;
            }

            $this->assertIdentifier((string) $value);
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
        $inputClass = $this->getSchemaClassName('Inputs', $type ? $type->baseName() : null);

        if (!class_exists($inputClass)) {
            return null;
        }

        foreach ($inputClass::definition()->getFields() as $field) {
            if ($field->getName() === $fieldName) {
                return $field->getType();
            }
        }

        return null;
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
}
