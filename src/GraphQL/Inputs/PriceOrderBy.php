<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PriceOrderBy extends InputObject
{
    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PriceOrderBy', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'field',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'PriceField',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'direction',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'Direction',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
