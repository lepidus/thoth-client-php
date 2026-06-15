<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class File extends ObjectData
{
    public function getFileId()
    {
        return $this->get('fileId');
    }

    public function setFileId($value): self
    {
        return $this->set('fileId', $value);
    }

    public function getFileType()
    {
        return $this->get('fileType');
    }

    public function setFileType($value): self
    {
        return $this->set('fileType', $value);
    }

    public function getWorkId()
    {
        return $this->get('workId');
    }

    public function setWorkId($value): self
    {
        return $this->set('workId', $value);
    }

    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    public function setPublicationId($value): self
    {
        return $this->set('publicationId', $value);
    }

    public function getAdditionalResourceId()
    {
        return $this->get('additionalResourceId');
    }

    public function setAdditionalResourceId($value): self
    {
        return $this->set('additionalResourceId', $value);
    }

    public function getWorkFeaturedVideoId()
    {
        return $this->get('workFeaturedVideoId');
    }

    public function setWorkFeaturedVideoId($value): self
    {
        return $this->set('workFeaturedVideoId', $value);
    }

    public function getObjectKey()
    {
        return $this->get('objectKey');
    }

    public function setObjectKey($value): self
    {
        return $this->set('objectKey', $value);
    }

    public function getCdnUrl()
    {
        return $this->get('cdnUrl');
    }

    public function setCdnUrl($value): self
    {
        return $this->set('cdnUrl', $value);
    }

    public function getMimeType()
    {
        return $this->get('mimeType');
    }

    public function setMimeType($value): self
    {
        return $this->set('mimeType', $value);
    }

    public function getBytes()
    {
        return $this->get('bytes');
    }

    public function setBytes($value): self
    {
        return $this->set('bytes', $value);
    }

    public function getSha256()
    {
        return $this->get('sha256');
    }

    public function setSha256($value): self
    {
        return $this->set('sha256', $value);
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

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('File', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fileId',
                'description' => 'Thoth ID of the file',
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
                'name' => 'fileType',
                'description' => 'Type of file (publication, frontcover, additional_resource, or work_featured_video)',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'FileType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => 'Thoth ID of the work (for frontcovers)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publicationId',
                'description' => 'Thoth ID of the publication (for publication files)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'additionalResourceId',
                'description' => 'Thoth ID of the additional resource (for additional resource files)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workFeaturedVideoId',
                'description' => 'Thoth ID of the featured video (for featured video files)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'objectKey',
                'description' => 'S3 object key (canonical DOI-based path)',
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
                'name' => 'cdnUrl',
                'description' => 'Public CDN URL',
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
                'name' => 'mimeType',
                'description' => 'MIME type used when serving the file',
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
                'name' => 'bytes',
                'description' => 'Size of the file in bytes',
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
                'name' => 'sha256',
                'description' => 'SHA-256 checksum of the stored file',
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
                'name' => 'createdAt',
                'description' => 'Date and time at which the file record was created',
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
                'description' => 'Date and time at which the file record was last updated',
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
            ])
        ]);
    }
}
