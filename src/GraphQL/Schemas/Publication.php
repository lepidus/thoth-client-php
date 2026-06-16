<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Publication extends ObjectData
{
    /**
     * @return string
     */
    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    /**
     * @param string $value
     */
    public function setPublicationId($value): self
    {
        return $this->set('publicationId', $value);
    }

    public function hasPublicationId(): bool
    {
        return $this->has('publicationId');
    }

    public function unsetPublicationId(): self
    {
        return $this->remove('publicationId');
    }

    /**
     * @return string
     */
    public function getPublicationType()
    {
        return $this->get('publicationType');
    }

    /**
     * @param string $value
     */
    public function setPublicationType($value): self
    {
        return $this->set('publicationType', $value);
    }

    public function hasPublicationType(): bool
    {
        return $this->has('publicationType');
    }

    public function unsetPublicationType(): self
    {
        return $this->remove('publicationType');
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
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->get('isbn');
    }

    /**
     * @param string|null $value
     */
    public function setIsbn($value): self
    {
        return $this->set('isbn', $value);
    }

    public function hasIsbn(): bool
    {
        return $this->has('isbn');
    }

    public function unsetIsbn(): self
    {
        return $this->remove('isbn');
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
     * @return float|null
     */
    public function getWidth()
    {
        return $this->get('width');
    }

    /**
     * @param float|null $value
     */
    public function setWidth($value): self
    {
        return $this->set('width', $value);
    }

    public function hasWidth(): bool
    {
        return $this->has('width');
    }

    public function unsetWidth(): self
    {
        return $this->remove('width');
    }

    /**
     * @return float|null
     */
    public function getHeight()
    {
        return $this->get('height');
    }

    /**
     * @param float|null $value
     */
    public function setHeight($value): self
    {
        return $this->set('height', $value);
    }

    public function hasHeight(): bool
    {
        return $this->has('height');
    }

    public function unsetHeight(): self
    {
        return $this->remove('height');
    }

    /**
     * @return float|null
     */
    public function getDepth()
    {
        return $this->get('depth');
    }

    /**
     * @param float|null $value
     */
    public function setDepth($value): self
    {
        return $this->set('depth', $value);
    }

    public function hasDepth(): bool
    {
        return $this->has('depth');
    }

    public function unsetDepth(): self
    {
        return $this->remove('depth');
    }

    /**
     * @return float|null
     */
    public function getWeight()
    {
        return $this->get('weight');
    }

    /**
     * @param float|null $value
     */
    public function setWeight($value): self
    {
        return $this->set('weight', $value);
    }

    public function hasWeight(): bool
    {
        return $this->has('weight');
    }

    public function unsetWeight(): self
    {
        return $this->remove('weight');
    }

    /**
     * @return string|null
     */
    public function getAccessibilityStandard()
    {
        return $this->get('accessibilityStandard');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityStandard($value): self
    {
        return $this->set('accessibilityStandard', $value);
    }

    public function hasAccessibilityStandard(): bool
    {
        return $this->has('accessibilityStandard');
    }

    public function unsetAccessibilityStandard(): self
    {
        return $this->remove('accessibilityStandard');
    }

    /**
     * @return string|null
     */
    public function getAccessibilityAdditionalStandard()
    {
        return $this->get('accessibilityAdditionalStandard');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityAdditionalStandard($value): self
    {
        return $this->set('accessibilityAdditionalStandard', $value);
    }

    public function hasAccessibilityAdditionalStandard(): bool
    {
        return $this->has('accessibilityAdditionalStandard');
    }

    public function unsetAccessibilityAdditionalStandard(): self
    {
        return $this->remove('accessibilityAdditionalStandard');
    }

    /**
     * @return string|null
     */
    public function getAccessibilityException()
    {
        return $this->get('accessibilityException');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityException($value): self
    {
        return $this->set('accessibilityException', $value);
    }

    public function hasAccessibilityException(): bool
    {
        return $this->has('accessibilityException');
    }

    public function unsetAccessibilityException(): self
    {
        return $this->remove('accessibilityException');
    }

    /**
     * @return string|null
     */
    public function getAccessibilityReportUrl()
    {
        return $this->get('accessibilityReportUrl');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityReportUrl($value): self
    {
        return $this->set('accessibilityReportUrl', $value);
    }

    public function hasAccessibilityReportUrl(): bool
    {
        return $this->has('accessibilityReportUrl');
    }

    public function unsetAccessibilityReportUrl(): self
    {
        return $this->remove('accessibilityReportUrl');
    }

    /**
     * @return Price[]
     */
    public function getPrices()
    {
        return $this->get('prices');
    }

    /**
     * @param Price[] $value
     */
    public function setPrices($value): self
    {
        return $this->set('prices', $value);
    }

    public function hasPrices(): bool
    {
        return $this->has('prices');
    }

    public function unsetPrices(): self
    {
        return $this->remove('prices');
    }

    /**
     * @return Location[]
     */
    public function getLocations()
    {
        return $this->get('locations');
    }

    /**
     * @param Location[] $value
     */
    public function setLocations($value): self
    {
        return $this->set('locations', $value);
    }

    public function hasLocations(): bool
    {
        return $this->has('locations');
    }

    public function unsetLocations(): self
    {
        return $this->remove('locations');
    }

    /**
     * @return File|null
     */
    public function getFile()
    {
        return $this->get('file');
    }

    /**
     * @param File|null $value
     */
    public function setFile($value): self
    {
        return $this->set('file', $value);
    }

    public function hasFile(): bool
    {
        return $this->has('file');
    }

    public function unsetFile(): self
    {
        return $this->remove('file');
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
        return new ObjectTypeDefinition('Publication', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publicationId',
                'description' => 'Thoth ID of the publication',
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
                'name' => 'publicationType',
                'description' => 'Format of this publication',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'PublicationType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => 'Thoth ID of the work to which this publication belongs',
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
                'name' => 'isbn',
                'description' => 'International Standard Book Number of the publication, in ISBN-13 format',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Isbn',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the publication record was created',
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
                'description' => 'Date and time at which the publication record was last updated',
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
                'name' => 'width',
                'description' => 'Width of the physical Publication (in mm, cm or in) (only applicable to non-Chapter Paperbacks and Hardbacks)',
                'args' => [
                    [
                        'name' => 'units',
                        'description' => 'Unit of measurement in which to represent the width (mm, cm or in)',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'LengthUnit',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => '"MM"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'height',
                'description' => 'Height of the physical Publication (in mm, cm or in) (only applicable to non-Chapter Paperbacks and Hardbacks)',
                'args' => [
                    [
                        'name' => 'units',
                        'description' => 'Unit of measurement in which to represent the height (mm, cm or in)',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'LengthUnit',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => '"MM"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'depth',
                'description' => 'Depth of the physical Publication (in mm, cm or in) (only applicable to non-Chapter Paperbacks and Hardbacks)',
                'args' => [
                    [
                        'name' => 'units',
                        'description' => 'Unit of measurement in which to represent the depth (mm, cm or in)',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'LengthUnit',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => '"MM"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'weight',
                'description' => 'Weight of the physical Publication (in g or oz) (only applicable to non-Chapter Paperbacks and Hardbacks)',
                'args' => [
                    [
                        'name' => 'units',
                        'description' => 'Unit of measurement in which to represent the weight (grams or ounces)',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'ENUM',
                                'name' => 'WeightUnit',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => '"G"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'accessibilityStandard',
                'description' => 'WCAG standard accessibility level met by this publication (if any)',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'accessibilityAdditionalStandard',
                'description' => 'EPUB- or PDF-specific standard accessibility level met by this publication, if applicable',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'accessibilityException',
                'description' => 'Reason for this publication not being required to comply with accessibility standards (if any)',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityException',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'accessibilityReportUrl',
                'description' => 'Link to a web page showing detailed accessibility information for this publication',
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
                'name' => 'prices',
                'description' => 'Get prices linked to this publication',
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
                            'name' => 'PriceOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "CURRENCY_CODE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'currencyCodes',
                        'description' => 'Specific currencies to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'CurrencyCode',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
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
                                'name' => 'Price',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'locations',
                'description' => 'Get locations linked to this publication',
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
                            'name' => 'LocationOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "LOCATION_PLATFORM", direction: "ASC"}',
                    ],
                    [
                        'name' => 'locationPlatforms',
                        'description' => 'Specific platforms to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LocationPlatform',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
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
                                'name' => 'Location',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'file',
                'description' => 'Get the publication file for this publication',
                'args' => [],
                'type' => [
                    'kind' => 'OBJECT',
                    'name' => 'File',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'work',
                'description' => 'Get the work to which this publication belongs',
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
