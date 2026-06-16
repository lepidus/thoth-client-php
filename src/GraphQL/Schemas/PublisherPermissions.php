<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class PublisherPermissions extends ObjectData
{
    /**
     * @return bool
     */
    public function getPublisherAdmin()
    {
        return $this->get('publisherAdmin');
    }

    /**
     * @param bool $value
     */
    public function setPublisherAdmin($value): self
    {
        return $this->set('publisherAdmin', $value);
    }

    public function hasPublisherAdmin(): bool
    {
        return $this->has('publisherAdmin');
    }

    public function unsetPublisherAdmin(): self
    {
        return $this->remove('publisherAdmin');
    }

    /**
     * @return bool
     */
    public function getWorkLifecycle()
    {
        return $this->get('workLifecycle');
    }

    /**
     * @param bool $value
     */
    public function setWorkLifecycle($value): self
    {
        return $this->set('workLifecycle', $value);
    }

    public function hasWorkLifecycle(): bool
    {
        return $this->has('workLifecycle');
    }

    public function unsetWorkLifecycle(): self
    {
        return $this->remove('workLifecycle');
    }

    /**
     * @return bool
     */
    public function getCdnWrite()
    {
        return $this->get('cdnWrite');
    }

    /**
     * @param bool $value
     */
    public function setCdnWrite($value): self
    {
        return $this->set('cdnWrite', $value);
    }

    public function hasCdnWrite(): bool
    {
        return $this->has('cdnWrite');
    }

    public function unsetCdnWrite(): self
    {
        return $this->remove('cdnWrite');
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
