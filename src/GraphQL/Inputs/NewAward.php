<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewAward extends InputObject
{
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewAward', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'title',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'url',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'category',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'year',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'jury',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'country',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CountryCode',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'prizeStatement',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'role',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AwardRole',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'awardOrdinal',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
