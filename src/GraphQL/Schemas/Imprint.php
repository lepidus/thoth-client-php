<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Imprint extends ObjectData
{
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
    public function getPublisherId()
    {
        return $this->get('publisherId');
    }

    /**
     * @param string $value
     */
    public function setPublisherId($value): self
    {
        return $this->set('publisherId', $value);
    }

    public function hasPublisherId(): bool
    {
        return $this->has('publisherId');
    }

    public function unsetPublisherId(): self
    {
        return $this->remove('publisherId');
    }

    /**
     * @return string
     */
    public function getImprintName()
    {
        return $this->get('imprintName');
    }

    /**
     * @param string $value
     */
    public function setImprintName($value): self
    {
        return $this->set('imprintName', $value);
    }

    public function hasImprintName(): bool
    {
        return $this->has('imprintName');
    }

    public function unsetImprintName(): self
    {
        return $this->remove('imprintName');
    }

    /**
     * @return string|null
     */
    public function getImprintUrl()
    {
        return $this->get('imprintUrl');
    }

    /**
     * @param string|null $value
     */
    public function setImprintUrl($value): self
    {
        return $this->set('imprintUrl', $value);
    }

    public function hasImprintUrl(): bool
    {
        return $this->has('imprintUrl');
    }

    public function unsetImprintUrl(): self
    {
        return $this->remove('imprintUrl');
    }

    /**
     * @return string|null
     */
    public function getCrossmarkDoi()
    {
        return $this->get('crossmarkDoi');
    }

    /**
     * @param string|null $value
     */
    public function setCrossmarkDoi($value): self
    {
        return $this->set('crossmarkDoi', $value);
    }

    public function hasCrossmarkDoi(): bool
    {
        return $this->has('crossmarkDoi');
    }

    public function unsetCrossmarkDoi(): self
    {
        return $this->remove('crossmarkDoi');
    }

    /**
     * @return string|null
     */
    public function getS3Bucket()
    {
        return $this->get('s3Bucket');
    }

    /**
     * @param string|null $value
     */
    public function setS3Bucket($value): self
    {
        return $this->set('s3Bucket', $value);
    }

    public function hasS3Bucket(): bool
    {
        return $this->has('s3Bucket');
    }

    public function unsetS3Bucket(): self
    {
        return $this->remove('s3Bucket');
    }

    /**
     * @return string|null
     */
    public function getCdnDomain()
    {
        return $this->get('cdnDomain');
    }

    /**
     * @param string|null $value
     */
    public function setCdnDomain($value): self
    {
        return $this->set('cdnDomain', $value);
    }

    public function hasCdnDomain(): bool
    {
        return $this->has('cdnDomain');
    }

    public function unsetCdnDomain(): self
    {
        return $this->remove('cdnDomain');
    }

    /**
     * @return string|null
     */
    public function getCloudfrontDistId()
    {
        return $this->get('cloudfrontDistId');
    }

    /**
     * @param string|null $value
     */
    public function setCloudfrontDistId($value): self
    {
        return $this->set('cloudfrontDistId', $value);
    }

    public function hasCloudfrontDistId(): bool
    {
        return $this->has('cloudfrontDistId');
    }

    public function unsetCloudfrontDistId(): self
    {
        return $this->remove('cloudfrontDistId');
    }

    /**
     * @return string|null
     */
    public function getDefaultCurrency()
    {
        return $this->get('defaultCurrency');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultCurrency($value): self
    {
        return $this->set('defaultCurrency', $value);
    }

    public function hasDefaultCurrency(): bool
    {
        return $this->has('defaultCurrency');
    }

    public function unsetDefaultCurrency(): self
    {
        return $this->remove('defaultCurrency');
    }

    /**
     * @return string|null
     */
    public function getDefaultPlace()
    {
        return $this->get('defaultPlace');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultPlace($value): self
    {
        return $this->set('defaultPlace', $value);
    }

    public function hasDefaultPlace(): bool
    {
        return $this->has('defaultPlace');
    }

    public function unsetDefaultPlace(): self
    {
        return $this->remove('defaultPlace');
    }

    /**
     * @return string|null
     */
    public function getDefaultLocale()
    {
        return $this->get('defaultLocale');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultLocale($value): self
    {
        return $this->set('defaultLocale', $value);
    }

    public function hasDefaultLocale(): bool
    {
        return $this->has('defaultLocale');
    }

    public function unsetDefaultLocale(): self
    {
        return $this->remove('defaultLocale');
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
     * @return Publisher
     */
    public function getPublisher()
    {
        return $this->get('publisher');
    }

    /**
     * @param Publisher $value
     */
    public function setPublisher($value): self
    {
        return $this->set('publisher', $value);
    }

    public function hasPublisher(): bool
    {
        return $this->has('publisher');
    }

    public function unsetPublisher(): self
    {
        return $this->remove('publisher');
    }

    /**
     * @return Work[]
     */
    public function getWorks()
    {
        return $this->get('works');
    }

    /**
     * @param Work[] $value
     */
    public function setWorks($value): self
    {
        return $this->set('works', $value);
    }

    public function hasWorks(): bool
    {
        return $this->has('works');
    }

    public function unsetWorks(): self
    {
        return $this->remove('works');
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Imprint', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'imprintId',
                'description' => 'Thoth ID of the imprint',
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
                'name' => 'publisherId',
                'description' => 'Thoth ID of the publisher to which this imprint belongs',
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
                'name' => 'imprintName',
                'description' => 'Name of the imprint',
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
                'name' => 'imprintUrl',
                'description' => 'URL of the imprint\'s landing page',
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
                'name' => 'crossmarkDoi',
                'description' => 'DOI of the imprint\'s Crossmark policy page, if publisher participates. Crossmark \'gives readers quick and easy access to the
    current status of an item of content, including any corrections, retractions, or updates\'. More: https://www.crossref.org/services/crossmark/',
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
                'name' => 's3Bucket',
                'description' => 'S3 bucket used for files belonging to this imprint',
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
                'name' => 'cdnDomain',
                'description' => 'CDN domain used for files belonging to this imprint',
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
                'name' => 'cloudfrontDistId',
                'description' => 'CloudFront distribution ID used for files belonging to this imprint',
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
                'name' => 'defaultCurrency',
                'description' => 'Default currency code for works under this imprint',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CurrencyCode',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'defaultPlace',
                'description' => 'Default publication place for works under this imprint',
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
                'name' => 'defaultLocale',
                'description' => 'Default locale code for works under this imprint',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'LocaleCode',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the imprint record was created',
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
                'description' => 'Date and time at which the imprint record was last updated',
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
                'name' => 'publisher',
                'description' => 'Get the publisher to which this imprint belongs',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publisher',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'works',
                'description' => 'Get works linked to this imprint',
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
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on full_title, doi, reference, short_abstract, long_abstract, and landing_page',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'WorkOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "FULL_TITLE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'workTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'WorkType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'workStatus',
                        'description' => '(deprecated) A specific status to filter by',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'WorkStatus',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'workStatuses',
                        'description' => 'Specific statuses to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'WorkStatus',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'publicationDate',
                        'description' => 'Only show results updated either before (less than) or after (greater than) the specified timestamp',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'TimeExpression',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'updatedAtWithRelations',
                        'description' => 'Only show results with a publication date either before (less than) or after (greater than) the specified timestamp',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'TimeExpression',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
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
                                'name' => 'Work',
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
