<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Funding extends ObjectData
{
    /**
     * @return string
     */
    public function getFundingId()
    {
        return $this->get('fundingId');
    }

    /**
     * @param string $value
     */
    public function setFundingId($value): self
    {
        return $this->set('fundingId', $value);
    }

    public function hasFundingId(): bool
    {
        return $this->has('fundingId');
    }

    public function unsetFundingId(): self
    {
        return $this->remove('fundingId');
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
     * @return string|null
     */
    public function getProgram()
    {
        return $this->get('program');
    }

    /**
     * @param string|null $value
     */
    public function setProgram($value): self
    {
        return $this->set('program', $value);
    }

    public function hasProgram(): bool
    {
        return $this->has('program');
    }

    public function unsetProgram(): self
    {
        return $this->remove('program');
    }

    /**
     * @return string|null
     */
    public function getProjectName()
    {
        return $this->get('projectName');
    }

    /**
     * @param string|null $value
     */
    public function setProjectName($value): self
    {
        return $this->set('projectName', $value);
    }

    public function hasProjectName(): bool
    {
        return $this->has('projectName');
    }

    public function unsetProjectName(): self
    {
        return $this->remove('projectName');
    }

    /**
     * @return string|null
     */
    public function getProjectShortname()
    {
        return $this->get('projectShortname');
    }

    /**
     * @param string|null $value
     */
    public function setProjectShortname($value): self
    {
        return $this->set('projectShortname', $value);
    }

    public function hasProjectShortname(): bool
    {
        return $this->has('projectShortname');
    }

    public function unsetProjectShortname(): self
    {
        return $this->remove('projectShortname');
    }

    /**
     * @return string|null
     */
    public function getGrantNumber()
    {
        return $this->get('grantNumber');
    }

    /**
     * @param string|null $value
     */
    public function setGrantNumber($value): self
    {
        return $this->set('grantNumber', $value);
    }

    public function hasGrantNumber(): bool
    {
        return $this->has('grantNumber');
    }

    public function unsetGrantNumber(): self
    {
        return $this->remove('grantNumber');
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

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Funding', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fundingId',
                'description' => 'Thoth ID of the funding',
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
                'description' => 'Thoth ID of the funded work',
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
                'description' => 'Thoth ID of the funding institution',
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
                'name' => 'program',
                'description' => 'Name of the funding program',
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
                'name' => 'projectName',
                'description' => 'Name of the funding project',
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
                'name' => 'projectShortname',
                'description' => 'Short name of the funding project',
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
                'name' => 'grantNumber',
                'description' => 'Grant number of the award',
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
                'description' => 'Date and time at which the funding record was created',
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
                'description' => 'Date and time at which the funding record was last updated',
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
                'description' => 'Get the funded work',
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
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'institution',
                'description' => 'Get the funding institution',
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
            ])
        ]);
    }
}
