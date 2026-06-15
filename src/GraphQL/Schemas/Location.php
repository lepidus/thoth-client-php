<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Location extends ObjectData
{
    public function getLocationId()
    {
        return $this->get('locationId');
    }

    public function setLocationId($value): self
    {
        return $this->set('locationId', $value);
    }

    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    public function setPublicationId($value): self
    {
        return $this->set('publicationId', $value);
    }

    public function getLandingPage()
    {
        return $this->get('landingPage');
    }

    public function setLandingPage($value): self
    {
        return $this->set('landingPage', $value);
    }

    public function getFullTextUrl()
    {
        return $this->get('fullTextUrl');
    }

    public function setFullTextUrl($value): self
    {
        return $this->set('fullTextUrl', $value);
    }

    public function getLocationPlatform()
    {
        return $this->get('locationPlatform');
    }

    public function setLocationPlatform($value): self
    {
        return $this->set('locationPlatform', $value);
    }

    public function getCanonical()
    {
        return $this->get('canonical');
    }

    public function setCanonical($value): self
    {
        return $this->set('canonical', $value);
    }

    public function getChecksum()
    {
        return $this->get('checksum');
    }

    public function setChecksum($value): self
    {
        return $this->set('checksum', $value);
    }

    public function getChecksumAlgorithm()
    {
        return $this->get('checksumAlgorithm');
    }

    public function setChecksumAlgorithm($value): self
    {
        return $this->set('checksumAlgorithm', $value);
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

    public function getPublication()
    {
        return $this->get('publication');
    }

    public function setPublication($value): self
    {
        return $this->set('publication', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Location', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'locationId',
                'description' => 'Thoth ID of the location',
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
                'name' => 'publicationId',
                'description' => 'Thoth ID of the publication linked to this location',
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
                'name' => 'landingPage',
                'description' => 'Public-facing URL via which the publication can be accessed',
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
                'name' => 'fullTextUrl',
                'description' => 'Direct link to the full text file',
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
                'name' => 'locationPlatform',
                'description' => 'Platform where the publication is hosted or can be acquired',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LocationPlatform',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'canonical',
                'description' => 'Whether this is the canonical location for this specific publication (e.g. the main platform on which the print version is sold, or the official version of record hosted on the publisher\'s own web server)',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'checksum',
                'description' => 'Checksum of the full text file as returned by the platform',
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
                'name' => 'checksumAlgorithm',
                'description' => 'Algorithm used to generate the checksum (MD5, SHA-256 or SHA-1)',
                'args' => [],
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'ChecksumAlgorithm',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the location record was created',
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
                'description' => 'Date and time at which the location record was last updated',
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
                'name' => 'publication',
                'description' => 'Get the publication linked to this location',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publication',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
