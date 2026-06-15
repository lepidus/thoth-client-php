<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchInstitution extends InputObject
{
    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchInstitution', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'institutionId',
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
                'name' => 'institutionName',
                'description' => null,
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
                'name' => 'institutionDoi',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'ror',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Ror',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'countryCode',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CountryCode',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
