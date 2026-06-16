<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchIssue extends InputObject
{
    /**
     * @return string
     */
    public function getIssueId()
    {
        return $this->get('issueId');
    }

    /**
     * @param string $value
     */
    public function setIssueId($value): self
    {
        return $this->set('issueId', $value);
    }

    public function hasIssueId(): bool
    {
        return $this->has('issueId');
    }

    public function unsetIssueId(): self
    {
        return $this->remove('issueId');
    }

    /**
     * @return string
     */
    public function getSeriesId()
    {
        return $this->get('seriesId');
    }

    /**
     * @param string $value
     */
    public function setSeriesId($value): self
    {
        return $this->set('seriesId', $value);
    }

    public function hasSeriesId(): bool
    {
        return $this->has('seriesId');
    }

    public function unsetSeriesId(): self
    {
        return $this->remove('seriesId');
    }

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
     * @return int
     */
    public function getIssueOrdinal()
    {
        return $this->get('issueOrdinal');
    }

    /**
     * @param int $value
     */
    public function setIssueOrdinal($value): self
    {
        return $this->set('issueOrdinal', $value);
    }

    public function hasIssueOrdinal(): bool
    {
        return $this->has('issueOrdinal');
    }

    public function unsetIssueOrdinal(): self
    {
        return $this->remove('issueOrdinal');
    }

    /**
     * @return int|null
     */
    public function getIssueNumber()
    {
        return $this->get('issueNumber');
    }

    /**
     * @param int|null $value
     */
    public function setIssueNumber($value): self
    {
        return $this->set('issueNumber', $value);
    }

    public function hasIssueNumber(): bool
    {
        return $this->has('issueNumber');
    }

    public function unsetIssueNumber(): self
    {
        return $this->remove('issueNumber');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchIssue', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'issueId',
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
                'name' => 'seriesId',
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
                'name' => 'issueOrdinal',
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
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'issueNumber',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
