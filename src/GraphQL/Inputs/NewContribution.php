<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewContribution extends InputObject
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
    public function getContributorId()
    {
        return $this->get('contributorId');
    }

    /**
     * @param string $value
     */
    public function setContributorId($value): self
    {
        return $this->set('contributorId', $value);
    }

    public function hasContributorId(): bool
    {
        return $this->has('contributorId');
    }

    public function unsetContributorId(): self
    {
        return $this->remove('contributorId');
    }

    /**
     * @return string
     */
    public function getContributionType()
    {
        return $this->get('contributionType');
    }

    /**
     * @param string $value
     */
    public function setContributionType($value): self
    {
        return $this->set('contributionType', $value);
    }

    public function hasContributionType(): bool
    {
        return $this->has('contributionType');
    }

    public function unsetContributionType(): self
    {
        return $this->remove('contributionType');
    }

    /**
     * @return bool
     */
    public function getMainContribution()
    {
        return $this->get('mainContribution');
    }

    /**
     * @param bool $value
     */
    public function setMainContribution($value): self
    {
        return $this->set('mainContribution', $value);
    }

    public function hasMainContribution(): bool
    {
        return $this->has('mainContribution');
    }

    public function unsetMainContribution(): self
    {
        return $this->remove('mainContribution');
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->get('firstName');
    }

    /**
     * @param string|null $value
     */
    public function setFirstName($value): self
    {
        return $this->set('firstName', $value);
    }

    public function hasFirstName(): bool
    {
        return $this->has('firstName');
    }

    public function unsetFirstName(): self
    {
        return $this->remove('firstName');
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->get('lastName');
    }

    /**
     * @param string $value
     */
    public function setLastName($value): self
    {
        return $this->set('lastName', $value);
    }

    public function hasLastName(): bool
    {
        return $this->has('lastName');
    }

    public function unsetLastName(): self
    {
        return $this->remove('lastName');
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->get('fullName');
    }

    /**
     * @param string $value
     */
    public function setFullName($value): self
    {
        return $this->set('fullName', $value);
    }

    public function hasFullName(): bool
    {
        return $this->has('fullName');
    }

    public function unsetFullName(): self
    {
        return $this->remove('fullName');
    }

    /**
     * @return int
     */
    public function getContributionOrdinal()
    {
        return $this->get('contributionOrdinal');
    }

    /**
     * @param int $value
     */
    public function setContributionOrdinal($value): self
    {
        return $this->set('contributionOrdinal', $value);
    }

    public function hasContributionOrdinal(): bool
    {
        return $this->has('contributionOrdinal');
    }

    public function unsetContributionOrdinal(): self
    {
        return $this->remove('contributionOrdinal');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewContribution', [
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
                'name' => 'contributorId',
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
                'name' => 'contributionType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'ContributionType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'mainContribution',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'firstName',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'lastName',
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
                'name' => 'fullName',
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
                'name' => 'contributionOrdinal',
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
