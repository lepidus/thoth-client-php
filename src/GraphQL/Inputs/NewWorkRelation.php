<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewWorkRelation extends InputObject
{
    /**
     * @return string
     */
    public function getRelatorWorkId()
    {
        return $this->get('relatorWorkId');
    }

    /**
     * @param string $value
     */
    public function setRelatorWorkId($value): self
    {
        return $this->set('relatorWorkId', $value);
    }

    public function hasRelatorWorkId(): bool
    {
        return $this->has('relatorWorkId');
    }

    public function unsetRelatorWorkId(): self
    {
        return $this->remove('relatorWorkId');
    }

    /**
     * @return string
     */
    public function getRelatedWorkId()
    {
        return $this->get('relatedWorkId');
    }

    /**
     * @param string $value
     */
    public function setRelatedWorkId($value): self
    {
        return $this->set('relatedWorkId', $value);
    }

    public function hasRelatedWorkId(): bool
    {
        return $this->has('relatedWorkId');
    }

    public function unsetRelatedWorkId(): self
    {
        return $this->remove('relatedWorkId');
    }

    /**
     * @return string
     */
    public function getRelationType()
    {
        return $this->get('relationType');
    }

    /**
     * @param string $value
     */
    public function setRelationType($value): self
    {
        return $this->set('relationType', $value);
    }

    public function hasRelationType(): bool
    {
        return $this->has('relationType');
    }

    public function unsetRelationType(): self
    {
        return $this->remove('relationType');
    }

    /**
     * @return int
     */
    public function getRelationOrdinal()
    {
        return $this->get('relationOrdinal');
    }

    /**
     * @param int $value
     */
    public function setRelationOrdinal($value): self
    {
        return $this->set('relationOrdinal', $value);
    }

    public function hasRelationOrdinal(): bool
    {
        return $this->has('relationOrdinal');
    }

    public function unsetRelationOrdinal(): self
    {
        return $this->remove('relationOrdinal');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewWorkRelation', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'relatorWorkId',
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
                'name' => 'relatedWorkId',
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
                'name' => 'relationType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'RelationType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'relationOrdinal',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
