<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Award extends ObjectData
{
    /**
     * @return string
     */
    public function getAwardId()
    {
        return $this->get('awardId');
    }

    /**
     * @param string $value
     */
    public function setAwardId($value): self
    {
        return $this->set('awardId', $value);
    }

    public function hasAwardId(): bool
    {
        return $this->has('awardId');
    }

    public function unsetAwardId(): self
    {
        return $this->remove('awardId');
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
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * @param string $value
     */
    public function setTitle($value): self
    {
        return $this->set('title', $value);
    }

    public function hasTitle(): bool
    {
        return $this->has('title');
    }

    public function unsetTitle(): self
    {
        return $this->remove('title');
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->get('url');
    }

    /**
     * @param string|null $value
     */
    public function setUrl($value): self
    {
        return $this->set('url', $value);
    }

    public function hasUrl(): bool
    {
        return $this->has('url');
    }

    public function unsetUrl(): self
    {
        return $this->remove('url');
    }

    /**
     * @return string|null
     */
    public function getCategory()
    {
        return $this->get('category');
    }

    /**
     * @param string|null $value
     */
    public function setCategory($value): self
    {
        return $this->set('category', $value);
    }

    public function hasCategory(): bool
    {
        return $this->has('category');
    }

    public function unsetCategory(): self
    {
        return $this->remove('category');
    }

    /**
     * @return string|null
     */
    public function getYear()
    {
        return $this->get('year');
    }

    /**
     * @param string|null $value
     */
    public function setYear($value): self
    {
        return $this->set('year', $value);
    }

    public function hasYear(): bool
    {
        return $this->has('year');
    }

    public function unsetYear(): self
    {
        return $this->remove('year');
    }

    /**
     * @return string|null
     */
    public function getJury()
    {
        return $this->get('jury');
    }

    /**
     * @param string|null $value
     */
    public function setJury($value): self
    {
        return $this->set('jury', $value);
    }

    public function hasJury(): bool
    {
        return $this->has('jury');
    }

    public function unsetJury(): self
    {
        return $this->remove('jury');
    }

    /**
     * @return string|null
     */
    public function getCountry()
    {
        return $this->get('country');
    }

    /**
     * @param string|null $value
     */
    public function setCountry($value): self
    {
        return $this->set('country', $value);
    }

    public function hasCountry(): bool
    {
        return $this->has('country');
    }

    public function unsetCountry(): self
    {
        return $this->remove('country');
    }

    /**
     * @return string|null
     */
    public function getRole()
    {
        return $this->get('role');
    }

    /**
     * @param string|null $value
     */
    public function setRole($value): self
    {
        return $this->set('role', $value);
    }

    public function hasRole(): bool
    {
        return $this->has('role');
    }

    public function unsetRole(): self
    {
        return $this->remove('role');
    }

    /**
     * @return string|null
     */
    public function getPrizeStatement()
    {
        return $this->get('prizeStatement');
    }

    /**
     * @param string|null $value
     */
    public function setPrizeStatement($value): self
    {
        return $this->set('prizeStatement', $value);
    }

    public function hasPrizeStatement(): bool
    {
        return $this->has('prizeStatement');
    }

    public function unsetPrizeStatement(): self
    {
        return $this->remove('prizeStatement');
    }

    /**
     * @return int
     */
    public function getAwardOrdinal()
    {
        return $this->get('awardOrdinal');
    }

    /**
     * @param int $value
     */
    public function setAwardOrdinal($value): self
    {
        return $this->set('awardOrdinal', $value);
    }

    public function hasAwardOrdinal(): bool
    {
        return $this->has('awardOrdinal');
    }

    public function unsetAwardOrdinal(): self
    {
        return $this->remove('awardOrdinal');
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
        return new ObjectTypeDefinition('Award', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'awardId',
                'description' => 'Thoth ID of the award',
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
                'description' => 'Thoth ID of the work to which this award belongs',
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
                'name' => 'title',
                'description' => 'Title of the award',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering title',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
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
                'name' => 'url',
                'description' => 'URL of the award page',
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
                'name' => 'category',
                'description' => 'Category of the award',
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
                'name' => 'year',
                'description' => 'Year or year span associated with the award',
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
                'name' => 'jury',
                'description' => 'Jury associated with the award',
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
                'name' => 'country',
                'description' => 'Country associated with the award',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CountryCode',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'role',
                'description' => 'Role of the work in this award',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AwardRole',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'prizeStatement',
                'description' => 'Prize statement for this award',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering prize statement',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'awardOrdinal',
                'description' => 'Number representing this award\'s position in an ordered list of awards within the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the award record was created',
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
                'description' => 'Date and time at which the award record was last updated',
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
                'description' => 'Get the work linked to this award',
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
