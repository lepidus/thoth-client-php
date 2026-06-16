<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewPublicationFileUpload extends InputObject
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
        return new InputObjectTypeDefinition('NewPublicationFileUpload', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publicationId',
                'description' => 'Thoth ID of the publication linked to this file.',
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
                'description' => 'File extension to use in the final canonical key, e.g. \'pdf\', \'epub\', \'xml\'.',
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
