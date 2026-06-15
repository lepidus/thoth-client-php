<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class PublisherPermissions extends ObjectData
{
    public function getPublisherAdmin()
    {
        return $this->get('publisherAdmin');
    }

    public function setPublisherAdmin($value): self
    {
        return $this->set('publisherAdmin', $value);
    }

    public function getWorkLifecycle()
    {
        return $this->get('workLifecycle');
    }

    public function setWorkLifecycle($value): self
    {
        return $this->set('workLifecycle', $value);
    }

    public function getCdnWrite()
    {
        return $this->get('cdnWrite');
    }

    public function setCdnWrite($value): self
    {
        return $this->set('cdnWrite', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('PublisherPermissions', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publisherAdmin',
                'description' => null,
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workLifecycle',
                'description' => null,
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'cdnWrite',
                'description' => null,
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
