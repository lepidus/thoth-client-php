<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewAdditionalResourceFileUpload extends InputObject
{
    /**
     * @return string
     */
    public function getAdditionalResourceId()
    {
        return $this->get('additionalResourceId');
    }

    /**
     * @param string $value
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
     * @return string
     */
    public function getDeclaredMimeType()
    {
        return $this->get('declaredMimeType');
    }

    /**
     * @param string $value
     */
    public function setDeclaredMimeType($value): self
    {
        return $this->set('declaredMimeType', $value);
    }

    public function hasDeclaredMimeType(): bool
    {
        return $this->has('declaredMimeType');
    }

    public function unsetDeclaredMimeType(): self
    {
        return $this->remove('declaredMimeType');
    }

    /**
     * @return string
     */
    public function getDeclaredExtension()
    {
        return $this->get('declaredExtension');
    }

    /**
     * @param string $value
     */
    public function setDeclaredExtension($value): self
    {
        return $this->set('declaredExtension', $value);
    }

    public function hasDeclaredExtension(): bool
    {
        return $this->has('declaredExtension');
    }

    public function unsetDeclaredExtension(): self
    {
        return $this->remove('declaredExtension');
    }

    /**
     * @return string
     */
    public function getDeclaredSha256()
    {
        return $this->get('declaredSha256');
    }

    /**
     * @param string $value
     */
    public function setDeclaredSha256($value): self
    {
        return $this->set('declaredSha256', $value);
    }

    public function hasDeclaredSha256(): bool
    {
        return $this->has('declaredSha256');
    }

    public function unsetDeclaredSha256(): self
    {
        return $this->remove('declaredSha256');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewAdditionalResourceFileUpload', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'additionalResourceId',
                'description' => 'Thoth ID of the additional resource linked to this file.',
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'declaredMimeType',
                'description' => 'MIME type declared by the client (used for validation and in the presigned URL).',
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'declaredExtension',
                'description' => 'File extension to use in the final canonical key, e.g. \'jpg\', \'png\', \'mp4\', \'xlsx\'.',
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'declaredSha256',
                'description' => 'SHA-256 checksum of the file, hex-encoded.',
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
