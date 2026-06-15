<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Language extends ObjectData
{
    public function getLanguageId()
    {
        return $this->get('languageId');
    }

    public function setLanguageId($value): self
    {
        return $this->set('languageId', $value);
    }

    public function getWorkId()
    {
        return $this->get('workId');
    }

    public function setWorkId($value): self
    {
        return $this->set('workId', $value);
    }

    public function getLanguageCode()
    {
        return $this->get('languageCode');
    }

    public function setLanguageCode($value): self
    {
        return $this->set('languageCode', $value);
    }

    public function getLanguageRelation()
    {
        return $this->get('languageRelation');
    }

    public function setLanguageRelation($value): self
    {
        return $this->set('languageRelation', $value);
    }

    public function getCreatedAt()
    {
        return $this->get('createdAt');
    }

    public function setCreatedAt($value): self
    {
        return $this->set('createdAt', $value);
    }

    public function getUpdatedAt()
    {
        return $this->get('updatedAt');
    }

    public function setUpdatedAt($value): self
    {
        return $this->set('updatedAt', $value);
    }

    public function getWork()
    {
        return $this->get('work');
    }

    public function setWork($value): self
    {
        return $this->set('work', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Language', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'languageId',
                'description' => 'Thoth ID of the language',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => 'Thoth ID of the work which has this language',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'languageCode',
                'description' => 'Three-letter ISO 639 code representing the language',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LanguageCode',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'languageRelation',
                'description' => 'Relation between this language and the original language of the text',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LanguageRelation',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the language record was created',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updatedAt',
                'description' => 'Date and time at which the language record was last updated',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'work',
                'description' => 'Get the work which has this language',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Work',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
