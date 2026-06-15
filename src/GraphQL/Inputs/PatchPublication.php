<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchPublication extends InputObject
{
    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchPublication', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publicationId',
                'description' => null,
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
                'name' => 'publicationType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'PublicationType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => null,
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
                'name' => 'isbn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Isbn',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'widthMm',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'widthIn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'heightMm',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'heightIn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'depthMm',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'depthIn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'weightG',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'weightOz',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityStandard',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityAdditionalStandard',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityException',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityException',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityReportUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
