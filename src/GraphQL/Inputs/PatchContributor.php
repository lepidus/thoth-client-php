<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchContributor extends InputObject
{
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
     * @return string|null
     */
    public function getOrcid()
    {
        return $this->get('orcid');
    }

    /**
     * @param string|null $value
     */
    public function setOrcid($value): self
    {
        return $this->set('orcid', $value);
    }

    public function hasOrcid(): bool
    {
        return $this->has('orcid');
    }

    public function unsetOrcid(): self
    {
        return $this->remove('orcid');
    }

    /**
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->get('website');
    }

    /**
     * @param string|null $value
     */
    public function setWebsite($value): self
    {
        return $this->set('website', $value);
    }

    public function hasWebsite(): bool
    {
        return $this->has('website');
    }

    public function unsetWebsite(): self
    {
        return $this->remove('website');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchContributor', [
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
                'name' => 'orcid',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Orcid',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'website',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
