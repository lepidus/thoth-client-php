<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class UploadRequestHeader extends ObjectData
{
    /**
     * @return string
     */
    public function getName()
    {
        return $this->get('name');
    }

    /**
     * @param string $value
     */
    public function setName($value): self
    {
        return $this->set('name', $value);
    }

    public function hasName(): bool
    {
        return $this->has('name');
    }

    public function unsetName(): self
    {
        return $this->remove('name');
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->get('value');
    }

    /**
     * @param string $value
     */
    public function setValue($value): self
    {
        return $this->set('value', $value);
    }

    public function hasValue(): bool
    {
        return $this->has('value');
    }

    public function unsetValue(): self
    {
        return $this->remove('value');
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('UploadRequestHeader', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'name',
                'description' => 'HTTP header name.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'value',
                'description' => 'HTTP header value.',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
