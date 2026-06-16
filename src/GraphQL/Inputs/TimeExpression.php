<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class TimeExpression extends InputObject
{
    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->get('timestamp');
    }

    /**
     * @param string $value
     */
    public function setTimestamp($value): self
    {
        return $this->set('timestamp', $value);
    }

    public function hasTimestamp(): bool
    {
        return $this->has('timestamp');
    }

    public function unsetTimestamp(): self
    {
        return $this->remove('timestamp');
    }

    /**
     * @return string
     */
    public function getExpression()
    {
        return $this->get('expression');
    }

    /**
     * @param string $value
     */
    public function setExpression($value): self
    {
        return $this->set('expression', $value);
    }

    public function hasExpression(): bool
    {
        return $this->has('expression');
    }

    public function unsetExpression(): self
    {
        return $this->remove('expression');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('TimeExpression', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'timestamp',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'expression',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'Expression',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
