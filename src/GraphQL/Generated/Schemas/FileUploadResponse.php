<?php

namespace ThothApi\GraphQL\Generated\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class FileUploadResponse extends ObjectData
{
    public function getFileUploadId()
    {
        return $this->get('fileUploadId');
    }

    public function setFileUploadId($value): self
    {
        return $this->set('fileUploadId', $value);
    }

    public function getUploadUrl()
    {
        return $this->get('uploadUrl');
    }

    public function setUploadUrl($value): self
    {
        return $this->set('uploadUrl', $value);
    }

    public function getUploadHeaders()
    {
        return $this->get('uploadHeaders');
    }

    public function setUploadHeaders($value): self
    {
        return $this->set('uploadHeaders', $value);
    }

    public function getExpiresAt()
    {
        return $this->get('expiresAt');
    }

    public function setExpiresAt($value): self
    {
        return $this->set('expiresAt', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('FileUploadResponse', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fileUploadId',
                'description' => 'ID of the upload session.',
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
                'name' => 'uploadUrl',
                'description' => 'Presigned S3 PUT URL for uploading the file.',
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
                'name' => 'uploadHeaders',
                'description' => 'Headers that must be sent with the HTTP PUT request to uploadUrl.',
                'args' => [],
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
                                'name' => 'UploadRequestHeader',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'expiresAt',
                'description' => 'Time when the upload URL expires.',
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
