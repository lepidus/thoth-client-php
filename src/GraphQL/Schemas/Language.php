<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Language extends ObjectData
{
    /**
     * @return string
     */
    public function getLanguageId()
    {
        return $this->get('languageId');
    }

    /**
     * @param string $value
     */
    public function setLanguageId($value): self
    {
        return $this->set('languageId', $value);
    }

    public function hasLanguageId(): bool
    {
        return $this->has('languageId');
    }

    public function unsetLanguageId(): self
    {
        return $this->remove('languageId');
    }

    /**
     * @return string
     */
    public function getWorkId()
    {
        return $this->get('workId');
    }

    /**
     * @param string $value
     */
    public function setWorkId($value): self
    {
        return $this->set('workId', $value);
    }

    public function hasWorkId(): bool
    {
        return $this->has('workId');
    }

    public function unsetWorkId(): self
    {
        return $this->remove('workId');
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->get('languageCode');
    }

    /**
     * @param string $value
     */
    public function setLanguageCode($value): self
    {
        return $this->set('languageCode', $value);
    }

    public function hasLanguageCode(): bool
    {
        return $this->has('languageCode');
    }

    public function unsetLanguageCode(): self
    {
        return $this->remove('languageCode');
    }

    /**
     * @return string
     */
    public function getLanguageRelation()
    {
        return $this->get('languageRelation');
    }

    /**
     * @param string $value
     */
    public function setLanguageRelation($value): self
    {
        return $this->set('languageRelation', $value);
    }

    public function hasLanguageRelation(): bool
    {
        return $this->has('languageRelation');
    }

    public function unsetLanguageRelation(): self
    {
        return $this->remove('languageRelation');
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->get('createdAt');
    }

    /**
     * @param string $value
     */
    public function setCreatedAt($value): self
    {
        return $this->set('createdAt', $value);
    }

    public function hasCreatedAt(): bool
    {
        return $this->has('createdAt');
    }

    public function unsetCreatedAt(): self
    {
        return $this->remove('createdAt');
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string $value
     */
    public function setUpdatedAt($value): self
    {
        return $this->set('updatedAt', $value);
    }

    public function hasUpdatedAt(): bool
    {
        return $this->has('updatedAt');
    }

    public function unsetUpdatedAt(): self
    {
        return $this->remove('updatedAt');
    }

    /**
     * @return Work
     */
    public function getWork()
    {
        return $this->get('work');
    }

    /**
     * @param Work $value
     */
    public function setWork($value): self
    {
        return $this->set('work', $value);
    }

    public function hasWork(): bool
    {
        return $this->has('work');
    }

    public function unsetWork(): self
    {
        return $this->remove('work');
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
