<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Institution extends ObjectData
{
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

    /**
     * @return string
     */
    public function getInstitutionName()
    {
        return $this->get('institutionName');
    }

    /**
     * @param string $value
     */
    public function setInstitutionName($value): self
    {
        return $this->set('institutionName', $value);
    }

    /**
     * @return string|null
     */
    public function getInstitutionDoi()
    {
        return $this->get('institutionDoi');
    }

    /**
     * @param string|null $value
     */
    public function setInstitutionDoi($value): self
    {
        return $this->set('institutionDoi', $value);
    }

    /**
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->get('countryCode');
    }

    /**
     * @param string|null $value
     */
    public function setCountryCode($value): self
    {
        return $this->set('countryCode', $value);
    }

    /**
     * @return string|null
     */
    public function getRor()
    {
        return $this->get('ror');
    }

    /**
     * @param string|null $value
     */
    public function setRor($value): self
    {
        return $this->set('ror', $value);
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

    /**
     * @return Funding[]
     */
    public function getFundings()
    {
        return $this->get('fundings');
    }

    /**
     * @param Funding[] $value
     */
    public function setFundings($value): self
    {
        return $this->set('fundings', $value);
    }

    /**
     * @return Affiliation[]
     */
    public function getAffiliations()
    {
        return $this->get('affiliations');
    }

    /**
     * @param Affiliation[] $value
     */
    public function setAffiliations($value): self
    {
        return $this->set('affiliations', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Institution', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'institutionId',
                'description' => 'Thoth ID of the institution',
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
                'name' => 'institutionName',
                'description' => 'Name of the institution',
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
                'name' => 'institutionDoi',
                'description' => 'Digital Object Identifier of the organisation as full URL, using the HTTPS scheme and the doi.org domain (e.g. https://doi.org/10.13039/100014013)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'countryCode',
                'description' => 'Three-letter ISO 3166-1 code representing the country where this institution is based',
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
                'name' => 'ror',
                'description' => 'Research Organisation Registry identifier of the organisation as full URL, using the HTTPS scheme and the ror.org domain (e.g. https://ror.org/051z6e826)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Ror',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the institution record was created',
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
                'description' => 'Date and time at which the institution record was last updated',
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
                'name' => 'fundings',
                'description' => 'Get fundings linked to this institution',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'FundingOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "PROGRAM", direction: "ASC"}',
                    ],
                ],
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
                                'name' => 'Funding',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'affiliations',
                'description' => 'Get affiliations linked to this institution',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'AffiliationOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "AFFILIATION_ORDINAL", direction: "ASC"}',
                    ],
                ],
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
                                'name' => 'Affiliation',
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
