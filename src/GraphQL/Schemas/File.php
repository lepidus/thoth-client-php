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

    public function hasFileId(): bool
    {
        return $this->has('fileId');
    }

    public function unsetFileId(): self
    {
        return $this->remove('fileId');
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

    public function hasFileType(): bool
    {
        return $this->has('fileType');
    }

    public function unsetFileType(): self
    {
        return $this->remove('fileType');
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

    public function hasPublicationId(): bool
    {
        return $this->has('publicationId');
    }

    public function unsetPublicationId(): self
    {
        return $this->remove('publicationId');
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

    public function hasAdditionalResourceId(): bool
    {
        return $this->has('additionalResourceId');
    }

    public function unsetAdditionalResourceId(): self
    {
        return $this->remove('additionalResourceId');
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

    public function hasWorkFeaturedVideoId(): bool
    {
        return $this->has('workFeaturedVideoId');
    }

    public function unsetWorkFeaturedVideoId(): self
    {
        return $this->remove('workFeaturedVideoId');
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

    public function hasObjectKey(): bool
    {
        return $this->has('objectKey');
    }

    public function unsetObjectKey(): self
    {
        return $this->remove('objectKey');
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

    public function hasCdnUrl(): bool
    {
        return $this->has('cdnUrl');
    }

    public function unsetCdnUrl(): self
    {
        return $this->remove('cdnUrl');
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

    public function hasMimeType(): bool
    {
        return $this->has('mimeType');
    }

    public function unsetMimeType(): self
    {
        return $this->remove('mimeType');
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

    public function hasBytes(): bool
    {
        return $this->has('bytes');
    }

    public function unsetBytes(): self
    {
        return $this->remove('bytes');
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

    public function hasSha256(): bool
    {
        return $this->has('sha256');
    }

    public function unsetSha256(): self
    {
        return $this->remove('sha256');
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
