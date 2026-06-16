<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchFunding extends InputObject
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchFunding', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'fundingId',
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
                'name' => 'institutionId',
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
                'name' => 'program',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'projectName',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'projectShortname',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'grantNumber',
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
