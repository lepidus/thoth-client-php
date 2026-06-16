<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Publisher extends ObjectData
{
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

    /**
     * @return string
     */
    public function getPublisherName()
    {
        return $this->get('publisherName');
    }

    /**
     * @param string $value
     */
    public function setPublisherName($value): self
    {
        return $this->set('publisherName', $value);
    }

    /**
     * @return string|null
     */
    public function getPublisherShortname()
    {
        return $this->get('publisherShortname');
    }

    /**
     * @param string|null $value
     */
    public function setPublisherShortname($value): self
    {
        return $this->set('publisherShortname', $value);
    }

    /**
     * @return string|null
     */
    public function getPublisherUrl()
    {
        return $this->get('publisherUrl');
    }

    /**
     * @param string|null $value
     */
    public function setPublisherUrl($value): self
    {
        return $this->set('publisherUrl', $value);
    }

    /**
     * @return string|null
     */
    public function getZitadelId()
    {
        return $this->get('zitadelId');
    }

    /**
     * @param string|null $value
     */
    public function setZitadelId($value): self
    {
        return $this->set('zitadelId', $value);
    }

    /**
     * @return string|null
     */
    public function getAccessibilityStatement()
    {
        return $this->get('accessibilityStatement');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityStatement($value): self
    {
        return $this->set('accessibilityStatement', $value);
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
     * @return Imprint[]
     */
    public function getImprints()
    {
        return $this->get('imprints');
    }

    /**
     * @param Imprint[] $value
     */
    public function setImprints($value): self
    {
        return $this->set('imprints', $value);
    }

    /**
     * @return Contact[]
     */
    public function getContacts()
    {
        return $this->get('contacts');
    }

    /**
     * @param Contact[] $value
     */
    public function setContacts($value): self
    {
        return $this->set('contacts', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Publisher', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publisherId',
                'description' => 'Thoth ID of the publisher',
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
                'name' => 'publisherName',
                'description' => 'Name of the publisher',
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
                'name' => 'publisherShortname',
                'description' => 'Short name of the publisher, if any (e.g. an abbreviation)',
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
                'name' => 'publisherUrl',
                'description' => 'URL of the publisher\'s website',
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
                'name' => 'zitadelId',
                'description' => 'Zitadel organisation ID associated with the publisher',
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
                'name' => 'accessibilityStatement',
                'description' => 'Statement from the publisher on the accessibility of its texts for readers with impairments',
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
                'name' => 'accessibilityReportUrl',
                'description' => 'URL of the publisher\'s report on the accessibility of its texts for readers with impairments',
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
                'description' => 'Date and time at which the publisher record was created',
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
                'description' => 'Date and time at which the publisher record was last updated',
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
                'name' => 'imprints',
                'description' => 'Get imprints linked to this publisher',
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
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on imprint_name and imprint_url',
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
                            'name' => 'ImprintOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "IMPRINT_NAME", direction: "ASC"}',
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
                                'name' => 'Imprint',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'contacts',
                'description' => 'Get contacts linked to this publisher',
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
                            'name' => 'ContactOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "EMAIL", direction: "ASC"}',
                    ],
                    [
                        'name' => 'contactTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'ContactType',
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
                                'name' => 'Contact',
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
