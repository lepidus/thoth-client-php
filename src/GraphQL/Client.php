<?php

namespace ThothApi\GraphQL;

use ThothApi\GraphQL\Operation\OperationCallArguments;

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
        $response = $this->request->runQuery($operation->toGraphQL(), $operation->getVariables(), $this->token ?: null);
        $data = $response->getData();

        return $data[$operation->getField()->getName()];
    }

    public function __call(string $name, array $arguments)
    {
        $operationClass = $this->getOperationClass($name);
        $field = $operationClass::field();
        $operationCall = (new OperationCallArguments())->build($field->getArguments(), $arguments);
        $selection = $operationCall['selection'];
        $operation = $operationClass::operation(
            $operationCall['arguments'],
            $selection ?: $this->getDefaultSelection($field->getType()->baseName())
        );

        $result = $this->execute($operation);
        $unwrappedResult = $this->unwrapSingleSelection($result, $operation->getSelection());

        if ($unwrappedResult !== $result) {
            return $unwrappedResult;
        }

        return (new ValueHydrator())->hydrate($result, $field->getType());
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

}
