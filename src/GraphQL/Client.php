<?php

namespace ThothApi\GraphQL;

class Client
{
    private const SCALAR_TYPES = ['Boolean', 'Date', 'Doi', 'Float', 'Int', 'Isbn', 'Orcid', 'Ror', 'String', 'Timestamp', 'Uuid'];

    private Request $request;

    private string $token = '';

    private static array $defaultSelections = [];

    public const THOTH_BASE_URI = 'https://api.thoth.pub/';

    public function __construct(array $httpConfig = [])
    {
        if (!isset($httpConfig['base_uri'])) {
            $httpConfig['base_uri'] = self::THOTH_BASE_URI;
        }
        $this->request = new Request($httpConfig);
    }

    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function rawQuery(string $rawQuery, array $args = []): array
    {
        $response = $this->request->runQuery($rawQuery, $args, $this->token ?: null);
        return $response->getData();
    }

    public function execute(OperationRequest $operation)
    {
        $response = $this->request->runQuery($operation->toGraphQL(), null, $this->token ?: null);
        $data = $response->getData();

        return $data[$operation->getField()->getName()];
    }

    public function __call(string $name, array $arguments)
    {
        $operationClass = $this->getOperationClass($name);
        $field = $operationClass::field();
        $schemaArguments = $field->getArguments();
        $selection = $this->getSelectionArgument($arguments, $schemaArguments);
        $operation = $operationClass::operation(
            $this->getOperationArguments($schemaArguments, $arguments),
            $selection ?: $this->getDefaultSelection($field->getType()->baseName())
        );

        $result = $this->execute($operation);
        $unwrappedResult = $this->unwrapSingleSelection($result, $operation->getSelection());

        if ($unwrappedResult !== $result) {
            return $unwrappedResult;
        }

        return $this->hydrateResult($result, $field->getType());
    }

    private function getOperationClass(string $name): string
    {
        $className = $this->studly($name);
        $mutationClass = '\\ThothApi\\GraphQL\\Mutations\\' . $className . 'Mutation';

        if (class_exists($mutationClass)) {
            return $mutationClass;
        }

        $queryClass = '\\ThothApi\\GraphQL\\Queries\\' . $className . 'Query';

        if (class_exists($queryClass)) {
            return $queryClass;
        }

        throw new \BadMethodCallException("Operation '{$name}' not found.");
    }

    private function getSelectionArgument(array &$arguments, array $schemaArguments): array
    {
        $lastArgument = count($arguments) - 1;

        if ($lastArgument < 0 || !is_array($arguments[$lastArgument])) {
            return [];
        }

        if (count($arguments) > count($schemaArguments) && $this->isSelectionArray($arguments[$lastArgument])) {
            return array_pop($arguments);
        }

        if (
            isset($schemaArguments[$lastArgument])
            && $this->isScalarType($schemaArguments[$lastArgument]->getType())
            && $this->isSelectionArray($arguments[$lastArgument])
        ) {
            return array_pop($arguments);
        }

        if (
            count($arguments) === 2
            && is_array($arguments[0])
            && $this->hasSchemaNamedArguments($arguments[0], $schemaArguments)
            && $this->isSelectionArray($arguments[$lastArgument])
        ) {
            return array_pop($arguments);
        }

        return [];
    }

    private function getOperationArguments(array $schemaArguments, array $arguments): array
    {
        if ($schemaArguments === []) {
            return [];
        }

        if (count($arguments) === 1 && is_array($arguments[0]) && $this->isAssociativeArray($arguments[0])) {
            if (count($schemaArguments) !== 1 || array_key_exists($schemaArguments[0]->getName(), $arguments[0])) {
                return $this->normalizeValue($arguments[0]);
            }
        }

        if (count($schemaArguments) === 1) {
            return [$schemaArguments[0]->getName() => $this->normalizeValue($arguments[0] ?? null)];
        }

        $operationArguments = [];

        foreach ($schemaArguments as $index => $schemaArgument) {
            if (array_key_exists($index, $arguments)) {
                $operationArguments[$schemaArgument->getName()] = $this->normalizeValue($arguments[$index]);
            }
        }

        return $operationArguments;
    }

    private function normalizeValue($value)
    {
        if ($value instanceof EnumValue) {
            return $value;
        }

        if (is_array($value)) {
            return array_map([$this, 'normalizeValue'], $value);
        }

        if (is_object($value)) {
            if (method_exists($value, 'getAllData')) {
                return $this->normalizeValue($value->getAllData());
            }

            if ($value instanceof \JsonSerializable) {
                return $this->normalizeValue($value->jsonSerialize());
            }

            return $this->normalizeValue(get_object_vars($value));
        }

        return $value;
    }

    private function getDefaultSelection(?string $typeName): array
    {
        if ($typeName === null || in_array($typeName, self::SCALAR_TYPES, true)) {
            return [];
        }

        if (array_key_exists($typeName, self::$defaultSelections)) {
            return self::$defaultSelections[$typeName];
        }

        $schemaClass = '\\ThothApi\\GraphQL\\Schemas\\' . ($typeName === 'Abstract' ? 'GraphQLAbstract' : $typeName);

        if (!class_exists($schemaClass)) {
            self::$defaultSelections[$typeName] = [];
            return self::$defaultSelections[$typeName];
        }

        foreach ($schemaClass::definition()->getFields() as $field) {
            if (substr($field->getName(), -2) === 'Id') {
                self::$defaultSelections[$typeName] = [$field->getName()];
                return self::$defaultSelections[$typeName];
            }
        }

        self::$defaultSelections[$typeName] = [];
        return self::$defaultSelections[$typeName];
    }

    private function unwrapSingleSelection($result, array $selection)
    {
        if (!is_array($result) || count($selection) !== 1 || !is_string($selection[0])) {
            return $result;
        }

        return array_key_exists($selection[0], $result) ? $result[$selection[0]] : $result;
    }

    private function hydrateResult($result, $type)
    {
        if ($result === null) {
            return null;
        }

        if ($type->getKind() === 'NON_NULL' && $type->getOfType() !== null) {
            return $this->hydrateResult($result, $type->getOfType());
        }

        if ($type->getKind() === 'LIST' && $type->getOfType() !== null && is_array($result)) {
            return array_map(
                function ($item) use ($type) {
                    return $this->hydrateResult($item, $type->getOfType());
                },
                $result
            );
        }

        if (!is_array($result)) {
            return $result;
        }

        $schemaClass = $this->getSchemaClass($type->baseName());

        if (!class_exists($schemaClass)) {
            return $result;
        }

        return $schemaClass::fromArray($result);
    }

    private function studly(string $value): string
    {
        $value = preg_replace('/[^A-Za-z0-9]+/', ' ', $value);
        $value = preg_replace('/(?<!^)([A-Z])/', ' $1', (string) $value);
        $value = str_replace(' ', '', ucwords(strtolower((string) $value)));

        if ($value === '' || preg_match('/^[0-9]/', $value)) {
            return 'Type' . $value;
        }

        return $value;
    }

    private function isAssociativeArray(array $value): bool
    {
        return $value !== [] && array_keys($value) !== range(0, count($value) - 1);
    }

    private function isSelectionArray(array $value): bool
    {
        foreach ($value as $field => $selection) {
            if (is_array($selection)) {
                if (!is_string($field) || !$this->isSelectionArray($selection)) {
                    return false;
                }

                continue;
            }

            if (!is_string($selection)) {
                return false;
            }
        }

        return true;
    }

    private function hasSchemaNamedArguments(array $arguments, array $schemaArguments): bool
    {
        if (!$this->isAssociativeArray($arguments)) {
            return false;
        }

        foreach ($schemaArguments as $schemaArgument) {
            if (array_key_exists($schemaArgument->getName(), $arguments)) {
                return true;
            }
        }

        return false;
    }

    private function isScalarType($type): bool
    {
        if ($type->getKind() === 'NON_NULL' && $type->getOfType() !== null) {
            return $this->isScalarType($type->getOfType());
        }

        if ($type->getKind() === 'LIST') {
            return false;
        }

        return in_array($type->baseName(), self::SCALAR_TYPES, true);
    }

    private function getSchemaClass(?string $typeName): string
    {
        return '\\ThothApi\\GraphQL\\Schemas\\' . ($typeName === 'Abstract' ? 'GraphQLAbstract' : $typeName);
    }
}
