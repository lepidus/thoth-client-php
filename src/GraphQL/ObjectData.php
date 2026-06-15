<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Definition\FieldDefinition;
use ThothApi\GraphQL\Definition\TypeReference;

class ObjectData
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = [];

        foreach ($data as $field => $value) {
            $this->data[$field] = static::hydrateFieldValue((string) $field, $value);
        }
    }

    public static function fromArray(array $data): self
    {
        return new static($data);
    }

    public function toArray(): array
    {
        return $this->normalizeArray($this->data);
    }

    protected function get(string $field)
    {
        return $this->data[$field] ?? null;
    }

    protected function set(string $field, $value): self
    {
        $this->data[$field] = static::hydrateFieldValue($field, $value);
        return $this;
    }

    private static function hydrateFieldValue(string $fieldName, $value)
    {
        $field = static::getFieldDefinition($fieldName);

        if ($field === null) {
            return $value;
        }

        return static::hydrateValue($field->getType(), $value);
    }

    private static function getFieldDefinition(string $fieldName): ?FieldDefinition
    {
        foreach (static::definition()->getFields() as $field) {
            if ($field->getName() === $fieldName) {
                return $field;
            }
        }

        return null;
    }

    private static function hydrateValue(TypeReference $type, $value)
    {
        if ($value === null) {
            return null;
        }

        if ($type->getKind() === 'NON_NULL' && $type->getOfType() !== null) {
            return static::hydrateValue($type->getOfType(), $value);
        }

        if ($type->getKind() === 'LIST' && $type->getOfType() !== null && is_array($value)) {
            return array_map(
                static function ($item) use ($type) {
                    return static::hydrateValue($type->getOfType(), $item);
                },
                $value
            );
        }

        if (!is_array($value)) {
            return $value;
        }

        $schemaClass = static::schemaClassForType($type->baseName());

        if (!class_exists($schemaClass)) {
            return $value;
        }

        return $schemaClass::fromArray($value);
    }

    private static function schemaClassForType(?string $typeName): string
    {
        return '\\ThothApi\\GraphQL\\Generated\\Schemas\\' . ($typeName === 'Abstract' ? 'GraphQLAbstract' : $typeName);
    }

    private function normalizeArray(array $data): array
    {
        return array_map(
            function ($value) {
                if ($value instanceof self) {
                    return $value->toArray();
                }

                if (is_array($value)) {
                    return $this->normalizeArray($value);
                }

                return $value;
            },
            $data
        );
    }
}
