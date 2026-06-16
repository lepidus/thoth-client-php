<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class SeriesOrderBy extends InputObject
{
    /**
     * @return string
     */
    public function getField()
    {
        return $this->get('field');
    }

    /**
     * @param string $value
     */
    public function setField($value): self
    {
        return $this->set('field', $value);
    }

    public function hasField(): bool
    {
        return $this->has('field');
    }

    public function unsetField(): self
    {
        return $this->remove('field');
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->get('direction');
    }

    /**
     * @param string $value
     */
    public function setDirection($value): self
    {
        return $this->set('direction', $value);
    }

    public function hasDirection(): bool
    {
        return $this->has('direction');
    }

    public function unsetDirection(): self
    {
        return $this->remove('direction');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('SeriesOrderBy', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'field',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'SeriesField',
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
