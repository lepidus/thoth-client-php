<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Affiliation extends ObjectData
{
    /**
     * @return string
     */
    public function getAffiliationId()
    {
        return $this->get('affiliationId');
    }

    /**
     * @param string $value
     */
    public function setAffiliationId($value): self
    {
        return $this->set('affiliationId', $value);
    }

    public function hasAffiliationId(): bool
    {
        return $this->has('affiliationId');
    }

    public function unsetAffiliationId(): self
    {
        return $this->remove('affiliationId');
    }

    /**
     * @return string
     */
    public function getContributionId()
    {
        return $this->get('contributionId');
    }

    /**
     * @param string $value
     */
    public function setContributionId($value): self
    {
        return $this->set('contributionId', $value);
    }

    public function hasContributionId(): bool
    {
        return $this->has('contributionId');
    }

    public function unsetContributionId(): self
    {
        return $this->remove('contributionId');
    }

    /**
     * @return string
     */
    public function getInstitutionId()
    {
        return $this->get('institutionId');
    }

    /**
     * @param string $value
     */
    public function setInstitutionId($value): self
    {
        return $this->set('institutionId', $value);
    }

    public function hasInstitutionId(): bool
    {
        return $this->has('institutionId');
    }

    public function unsetInstitutionId(): self
    {
        return $this->remove('institutionId');
    }

    /**
     * @return int
     */
    public function getAffiliationOrdinal()
    {
        return $this->get('affiliationOrdinal');
    }

    /**
     * @param int $value
     */
    public function setAffiliationOrdinal($value): self
    {
        return $this->set('affiliationOrdinal', $value);
    }

    public function hasAffiliationOrdinal(): bool
    {
        return $this->has('affiliationOrdinal');
    }

    public function unsetAffiliationOrdinal(): self
    {
        return $this->remove('affiliationOrdinal');
    }

    /**
     * @return string|null
     */
    public function getPosition()
    {
        return $this->get('position');
    }

    /**
     * @param string|null $value
     */
    public function setPosition($value): self
    {
        return $this->set('position', $value);
    }

    public function hasPosition(): bool
    {
        return $this->has('position');
    }

    public function unsetPosition(): self
    {
        return $this->remove('position');
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
     * @return Institution
     */
    public function getInstitution()
    {
        return $this->get('institution');
    }

    /**
     * @param Institution $value
     */
    public function setInstitution($value): self
    {
        return $this->set('institution', $value);
    }

    public function hasInstitution(): bool
    {
        return $this->has('institution');
    }

    public function unsetInstitution(): self
    {
        return $this->remove('institution');
    }

    /**
     * @return Contribution
     */
    public function getContribution()
    {
        return $this->get('contribution');
    }

    /**
     * @param Contribution $value
     */
    public function setContribution($value): self
    {
        return $this->set('contribution', $value);
    }

    public function hasContribution(): bool
    {
        return $this->has('contribution');
    }

    public function unsetContribution(): self
    {
        return $this->remove('contribution');
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Affiliation', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'affiliationId',
                'description' => 'Thoth ID of the affiliation',
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
                'name' => 'contributionId',
                'description' => 'Thoth ID of the contribution linked to this affiliation',
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
                'name' => 'institutionId',
                'description' => 'Thoth ID of the institution linked to this affiliation',
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
                'name' => 'affiliationOrdinal',
                'description' => 'Number representing this affiliation\'s position in an ordered list of affiliations within the contribution',
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
                'name' => 'position',
                'description' => 'Position of the contributor at the institution at the time of contribution',
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
                'name' => 'createdAt',
                'description' => 'Date and time at which the affiliation record was created',
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
                'description' => 'Date and time at which the affiliation record was last updated',
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
                'name' => 'institution',
                'description' => 'Get the institution linked to this affiliation',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Institution',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'contribution',
                'description' => 'Get the contribution linked to this affiliation',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contribution',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
