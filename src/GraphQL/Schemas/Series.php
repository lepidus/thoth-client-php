<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Series extends ObjectData
{
    /**
     * @return string
     */
    public function getSeriesId()
    {
        return $this->get('seriesId');
    }

    /**
     * @param string $value
     */
    public function setSeriesId($value): self
    {
        return $this->set('seriesId', $value);
    }

    public function hasSeriesId(): bool
    {
        return $this->has('seriesId');
    }

    public function unsetSeriesId(): self
    {
        return $this->remove('seriesId');
    }

    /**
     * @return string
     */
    public function getSeriesType()
    {
        return $this->get('seriesType');
    }

    /**
     * @param string $value
     */
    public function setSeriesType($value): self
    {
        return $this->set('seriesType', $value);
    }

    public function hasSeriesType(): bool
    {
        return $this->has('seriesType');
    }

    public function unsetSeriesType(): self
    {
        return $this->remove('seriesType');
    }

    /**
     * @return string
     */
    public function getSeriesName()
    {
        return $this->get('seriesName');
    }

    /**
     * @param string $value
     */
    public function setSeriesName($value): self
    {
        return $this->set('seriesName', $value);
    }

    public function hasSeriesName(): bool
    {
        return $this->has('seriesName');
    }

    public function unsetSeriesName(): self
    {
        return $this->remove('seriesName');
    }

    /**
     * @return string|null
     */
    public function getIssnPrint()
    {
        return $this->get('issnPrint');
    }

    /**
     * @param string|null $value
     */
    public function setIssnPrint($value): self
    {
        return $this->set('issnPrint', $value);
    }

    public function hasIssnPrint(): bool
    {
        return $this->has('issnPrint');
    }

    public function unsetIssnPrint(): self
    {
        return $this->remove('issnPrint');
    }

    /**
     * @return string|null
     */
    public function getIssnDigital()
    {
        return $this->get('issnDigital');
    }

    /**
     * @param string|null $value
     */
    public function setIssnDigital($value): self
    {
        return $this->set('issnDigital', $value);
    }

    public function hasIssnDigital(): bool
    {
        return $this->has('issnDigital');
    }

    public function unsetIssnDigital(): self
    {
        return $this->remove('issnDigital');
    }

    /**
     * @return string|null
     */
    public function getSeriesUrl()
    {
        return $this->get('seriesUrl');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesUrl($value): self
    {
        return $this->set('seriesUrl', $value);
    }

    public function hasSeriesUrl(): bool
    {
        return $this->has('seriesUrl');
    }

    public function unsetSeriesUrl(): self
    {
        return $this->remove('seriesUrl');
    }

    /**
     * @return string|null
     */
    public function getSeriesDescription()
    {
        return $this->get('seriesDescription');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesDescription($value): self
    {
        return $this->set('seriesDescription', $value);
    }

    public function hasSeriesDescription(): bool
    {
        return $this->has('seriesDescription');
    }

    public function unsetSeriesDescription(): self
    {
        return $this->remove('seriesDescription');
    }

    /**
     * @return string|null
     */
    public function getSeriesCfpUrl()
    {
        return $this->get('seriesCfpUrl');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesCfpUrl($value): self
    {
        return $this->set('seriesCfpUrl', $value);
    }

    public function hasSeriesCfpUrl(): bool
    {
        return $this->has('seriesCfpUrl');
    }

    public function unsetSeriesCfpUrl(): self
    {
        return $this->remove('seriesCfpUrl');
    }

    /**
     * @return string
     */
    public function getImprintId()
    {
        return $this->get('imprintId');
    }

    /**
     * @param string $value
     */
    public function setImprintId($value): self
    {
        return $this->set('imprintId', $value);
    }

    public function hasImprintId(): bool
    {
        return $this->has('imprintId');
    }

    public function unsetImprintId(): self
    {
        return $this->remove('imprintId');
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
     * @return Imprint
     */
    public function getImprint()
    {
        return $this->get('imprint');
    }

    /**
     * @param Imprint $value
     */
    public function setImprint($value): self
    {
        return $this->set('imprint', $value);
    }

    public function hasImprint(): bool
    {
        return $this->has('imprint');
    }

    public function unsetImprint(): self
    {
        return $this->remove('imprint');
    }

    /**
     * @return Issue[]
     */
    public function getIssues()
    {
        return $this->get('issues');
    }

    /**
     * @param Issue[] $value
     */
    public function setIssues($value): self
    {
        return $this->set('issues', $value);
    }

    public function hasIssues(): bool
    {
        return $this->has('issues');
    }

    public function unsetIssues(): self
    {
        return $this->remove('issues');
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Series', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'seriesId',
                'description' => 'Thoth ID of the series',
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
                'name' => 'seriesType',
                'description' => 'Type of the series',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'SeriesType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'seriesName',
                'description' => 'Name of the series',
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
                'name' => 'issnPrint',
                'description' => 'Print ISSN (International Standard Serial Number) of the series. This represents the print media version.',
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
                'name' => 'issnDigital',
                'description' => 'Electronic ISSN (International Standard Serial Number) of the series. This represents the online version.',
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
                'name' => 'seriesUrl',
                'description' => 'URL of the series\' landing page',
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
                'name' => 'seriesDescription',
                'description' => 'Description of the series',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering series description',
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
                'name' => 'seriesCfpUrl',
                'description' => 'URL of the series\' call for proposals page',
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
                'name' => 'imprintId',
                'description' => 'Thoth ID of the imprint to which this series belongs',
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
                'name' => 'createdAt',
                'description' => 'Date and time at which the series record was created',
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
                'description' => 'Date and time at which the series record was last updated',
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
                'name' => 'imprint',
                'description' => 'Get the imprint linked to this series',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Imprint',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'issues',
                'description' => 'Get issues linked to this series',
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
                            'name' => 'IssueOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "ISSUE_ORDINAL", direction: "ASC"}',
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
                                'name' => 'Issue',
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
