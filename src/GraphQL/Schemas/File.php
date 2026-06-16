<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class File extends ObjectData
{
    /**
     * @return string
     */
    public function getFileId()
    {
        return $this->get('fileId');
    }

    /**
     * @param string $value
     */
    public function setFileId($value): self
    {
        return $this->set('fileId', $value);
    }

    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->get('fileType');
    }

    /**
     * @param string $value
     */
    public function setFileType($value): self
    {
        return $this->set('fileType', $value);
    }

    /**
     * @return string|null
     */
    public function getWorkId()
    {
        return $this->get('workId');
    }

    /**
     * @param string|null $value
     */
    public function setWorkId($value): self
    {
        return $this->set('workId', $value);
    }

    /**
     * @return string|null
     */
    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    /**
     * @param string|null $value
     */
    public function setPublicationId($value): self
    {
        return $this->set('publicationId', $value);
    }

    /**
     * @return string|null
     */
    public function getAdditionalResourceId()
    {
        return $this->get('additionalResourceId');
    }

    /**
     * @param string|null $value
     */
    public function setAdditionalResourceId($value): self
    {
        return $this->set('additionalResourceId', $value);
    }

    /**
     * @return string|null
     */
    public function getWorkFeaturedVideoId()
    {
        return $this->get('workFeaturedVideoId');
    }

    /**
     * @param string|null $value
     */
    public function setWorkFeaturedVideoId($value): self
    {
        return $this->set('workFeaturedVideoId', $value);
    }

    /**
     * @return string
     */
    public function getObjectKey()
    {
        return $this->get('objectKey');
    }

    /**
     * @param string $value
     */
    public function setObjectKey($value): self
    {
        return $this->set('objectKey', $value);
    }

    /**
     * @return string
     */
    public function getCdnUrl()
    {
        return $this->get('cdnUrl');
    }

    /**
     * @param string $value
     */
    public function setCdnUrl($value): self
    {
        return $this->set('cdnUrl', $value);
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->get('mimeType');
    }

    /**
     * @param string $value
     */
    public function setMimeType($value): self
    {
        return $this->set('mimeType', $value);
    }

    /**
     * @return int
     */
    public function getBytes()
    {
        return $this->get('bytes');
    }

    /**
     * @param int $value
     */
    public function setBytes($value): self
    {
        return $this->set('bytes', $value);
    }

    /**
     * @return string
     */
    public function getSha256()
    {
        return $this->get('sha256');
    }

    /**
     * @param string $value
     */
    public function setSha256($value): self
    {
        return $this->set('sha256', $value);
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
