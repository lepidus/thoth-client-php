<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewSubject extends InputObject
{
    /**
     * @return string
     */
    public function getWorkId()
    {
        return $this->get('workId');
    }

    /**
     * @param string $value
     */
    public function setWorkId($value): self
    {
        return $this->set('workId', $value);
    }

    public function hasWorkId(): bool
    {
        return $this->has('workId');
    }

    public function unsetWorkId(): self
    {
        return $this->remove('workId');
    }

    /**
     * @return string
     */
    public function getSubjectType()
    {
        return $this->get('subjectType');
    }

    /**
     * @param string $value
     */
    public function setSubjectType($value): self
    {
        return $this->set('subjectType', $value);
    }

    public function hasSubjectType(): bool
    {
        return $this->has('subjectType');
    }

    public function unsetSubjectType(): self
    {
        return $this->remove('subjectType');
    }

    /**
     * @return string
     */
    public function getSubjectCode()
    {
        return $this->get('subjectCode');
    }

    /**
     * @param string $value
     */
    public function setSubjectCode($value): self
    {
        return $this->set('subjectCode', $value);
    }

    public function hasSubjectCode(): bool
    {
        return $this->has('subjectCode');
    }

    public function unsetSubjectCode(): self
    {
        return $this->remove('subjectCode');
    }

    /**
     * @return int
     */
    public function getSubjectOrdinal()
    {
        return $this->get('subjectOrdinal');
    }

    /**
     * @param int $value
     */
    public function setSubjectOrdinal($value): self
    {
        return $this->set('subjectOrdinal', $value);
    }

    public function hasSubjectOrdinal(): bool
    {
        return $this->has('subjectOrdinal');
    }

    public function unsetSubjectOrdinal(): self
    {
        return $this->remove('subjectOrdinal');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewSubject', [
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
                'name' => 'subjectType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'SubjectType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'subjectCode',
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
                'name' => 'subjectOrdinal',
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
