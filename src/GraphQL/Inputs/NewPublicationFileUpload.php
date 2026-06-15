<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewPublicationFileUpload extends InputObject
{
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
