<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Publication extends ObjectData
{
    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    public function setPublicationId($value): self
    {
        return $this->set('publicationId', $value);
    }

    public function getPublicationType()
    {
        return $this->get('publicationType');
    }

    public function setPublicationType($value): self
    {
        return $this->set('publicationType', $value);
    }

    public function getWorkId()
    {
        return $this->get('workId');
    }

    public function setWorkId($value): self
    {
        return $this->set('workId', $value);
    }

    public function getIsbn()
    {
        return $this->get('isbn');
    }

    public function setIsbn($value): self
    {
        return $this->set('isbn', $value);
    }

    public function getCreatedAt()
    {
        return $this->get('createdAt');
    }

    public function setCreatedAt($value): self
    {
        return $this->set('createdAt', $value);
    }

    public function getUpdatedAt()
    {
        return $this->get('updatedAt');
    }

    public function setUpdatedAt($value): self
    {
        return $this->set('updatedAt', $value);
    }

    public function getWidth()
    {
        return $this->get('width');
    }

    public function setWidth($value): self
    {
        return $this->set('width', $value);
    }

    public function getHeight()
    {
        return $this->get('height');
    }

    public function setHeight($value): self
    {
        return $this->set('height', $value);
    }

    public function getDepth()
    {
        return $this->get('depth');
    }

    public function setDepth($value): self
    {
        return $this->set('depth', $value);
    }

    public function getWeight()
    {
        return $this->get('weight');
    }

    public function setWeight($value): self
    {
        return $this->set('weight', $value);
    }

    public function getAccessibilityStandard()
    {
        return $this->get('accessibilityStandard');
    }

    public function setAccessibilityStandard($value): self
    {
        return $this->set('accessibilityStandard', $value);
    }

    public function getAccessibilityAdditionalStandard()
    {
        return $this->get('accessibilityAdditionalStandard');
    }

    public function setAccessibilityAdditionalStandard($value): self
    {
        return $this->set('accessibilityAdditionalStandard', $value);
    }

    public function getAccessibilityException()
    {
        return $this->get('accessibilityException');
    }

    public function setAccessibilityException($value): self
    {
        return $this->set('accessibilityException', $value);
    }

    public function getAccessibilityReportUrl()
    {
        return $this->get('accessibilityReportUrl');
    }

    public function setAccessibilityReportUrl($value): self
    {
        return $this->set('accessibilityReportUrl', $value);
    }

    public function getPrices()
    {
        return $this->get('prices');
    }

    public function setPrices($value): self
    {
        return $this->set('prices', $value);
    }

    public function getLocations()
    {
        return $this->get('locations');
    }

    public function setLocations($value): self
    {
        return $this->set('locations', $value);
    }

    public function getFile()
    {
        return $this->get('file');
    }

    public function setFile($value): self
    {
        return $this->set('file', $value);
    }

    public function getWork()
    {
        return $this->get('work');
    }

    public function setWork($value): self
    {
        return $this->set('work', $value);
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
