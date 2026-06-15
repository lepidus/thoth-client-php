<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Me extends ObjectData
{
    public function getUserId()
    {
        return $this->get('userId');
    }

    public function setUserId($value): self
    {
        return $this->set('userId', $value);
    }

    public function getEmail()
    {
        return $this->get('email');
    }

    public function setEmail($value): self
    {
        return $this->set('email', $value);
    }

    public function getFirstName()
    {
        return $this->get('firstName');
    }

    public function setFirstName($value): self
    {
        return $this->set('firstName', $value);
    }

    public function getLastName()
    {
        return $this->get('lastName');
    }

    public function setLastName($value): self
    {
        return $this->set('lastName', $value);
    }

    public function getIsSuperuser()
    {
        return $this->get('isSuperuser');
    }

    public function setIsSuperuser($value): self
    {
        return $this->set('isSuperuser', $value);
    }

    public function getPublisherContexts()
    {
        return $this->get('publisherContexts');
    }

    public function setPublisherContexts($value): self
    {
        return $this->set('publisherContexts', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Me', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'userId',
                'description' => null,
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
                'name' => 'email',
                'description' => null,
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'firstName',
                'description' => null,
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'lastName',
                'description' => null,
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'isSuperuser',
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
                'name' => 'publisherContexts',
                'description' => null,
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'PublisherContext',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
