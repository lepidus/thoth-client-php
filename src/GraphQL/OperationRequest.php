<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Definition\FieldDefinition;

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

        foreach ($arguments as $name => $value) {
            if ($value === null) {
                continue;
            }

            $formatted[] = $name . ': ' . $this->formatValue($value);
        }

        return implode(', ', $formatted);
    }

    private function formatSelection(array $selection): string
    {
        $lines = [];

        foreach ($selection as $key => $value) {
            if (is_array($value)) {
                $lines[] = '        ' . $key . " {\n" . $this->indent($this->formatSelection($value), 8) . "\n        }";
                continue;
            }

            $lines[] = '        ' . $value;
        }

        return implode("\n", $lines);
    }

    private function formatValue($value): string
    {
        if ($value instanceof EnumValue) {
            return (string) $value;
        }

        if (is_array($value)) {
            if ($this->isList($value)) {
                return '[' . implode(', ', array_map([$this, 'formatValue'], $value)) . ']';
            }

            $fields = [];
            foreach ($value as $field => $fieldValue) {
                if ($fieldValue !== null) {
                    $fields[] = $field . ': ' . $this->formatValue($fieldValue);
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
}
