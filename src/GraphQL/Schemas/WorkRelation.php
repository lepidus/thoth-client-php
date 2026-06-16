<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class WorkRelation extends ObjectData
{
    /**
     * @return string
     */
    public function getWorkRelationId()
    {
        return $this->get('workRelationId');
    }

    /**
     * @param string $value
     */
    public function setWorkRelationId($value): self
    {
        return $this->set('workRelationId', $value);
    }

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

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->get('createdAt');
    }

    /**
     * @param string $value
     */
    public function setCreatedAt($value): self
    {
        return $this->set('createdAt', $value);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string $value
     */
    public function setUpdatedAt($value): self
    {
        return $this->set('updatedAt', $value);
    }

    /**
     * @return Work
     */
    public function getRelatedWork()
    {
        return $this->get('relatedWork');
    }

    /**
     * @param Work $value
     */
    public function setRelatedWork($value): self
    {
        return $this->set('relatedWork', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('WorkRelation', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workRelationId',
                'description' => 'Thoth ID of the work relation',
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
                'name' => 'relatorWorkId',
                'description' => 'Thoth ID of the work to which this work relation belongs',
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
                'name' => 'relatedWorkId',
                'description' => 'Thoth ID of the other work in the relationship',
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
                'name' => 'relationType',
                'description' => 'Nature of the relationship',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'RelationType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'relationOrdinal',
                'description' => 'Number representing this work relation\'s position in an ordered list of relations of the same type within the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the work relation record was created',
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
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updatedAt',
                'description' => 'Date and time at which the work relation record was last updated',
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
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'relatedWork',
                'description' => 'Get the other work in the relationship',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Work',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
