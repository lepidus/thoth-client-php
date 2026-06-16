<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchAdditionalResource extends InputObject
{
    /**
     * @return string
     */
    public function getAdditionalResourceId()
    {
        return $this->get('additionalResourceId');
    }

    /**
     * @param string $value
     */
    public function setAdditionalResourceId($value): self
    {
        return $this->set('additionalResourceId', $value);
    }

    public function hasAdditionalResourceId(): bool
    {
        return $this->has('additionalResourceId');
    }

    public function unsetAdditionalResourceId(): self
    {
        return $this->remove('additionalResourceId');
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
     * @return string
     */
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * @param string $value
     */
    public function setTitle($value): self
    {
        return $this->set('title', $value);
    }

    public function hasTitle(): bool
    {
        return $this->has('title');
    }

    public function unsetTitle(): self
    {
        return $this->remove('title');
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get('description');
    }

    /**
     * @param string|null $value
     */
    public function setDescription($value): self
    {
        return $this->set('description', $value);
    }

    public function hasDescription(): bool
    {
        return $this->has('description');
    }

    public function unsetDescription(): self
    {
        return $this->remove('description');
    }

    /**
     * @return string|null
     */
    public function getAttribution()
    {
        return $this->get('attribution');
    }

    /**
     * @param string|null $value
     */
    public function setAttribution($value): self
    {
        return $this->set('attribution', $value);
    }

    public function hasAttribution(): bool
    {
        return $this->has('attribution');
    }

    public function unsetAttribution(): self
    {
        return $this->remove('attribution');
    }

    /**
     * @return string
     */
    public function getResourceType()
    {
        return $this->get('resourceType');
    }

    /**
     * @param string $value
     */
    public function setResourceType($value): self
    {
        return $this->set('resourceType', $value);
    }

    public function hasResourceType(): bool
    {
        return $this->has('resourceType');
    }

    public function unsetResourceType(): self
    {
        return $this->remove('resourceType');
    }

    /**
     * @return string|null
     */
    public function getDoi()
    {
        return $this->get('doi');
    }

    /**
     * @param string|null $value
     */
    public function setDoi($value): self
    {
        return $this->set('doi', $value);
    }

    public function hasDoi(): bool
    {
        return $this->has('doi');
    }

    public function unsetDoi(): self
    {
        return $this->remove('doi');
    }

    /**
     * @return string|null
     */
    public function getHandle()
    {
        return $this->get('handle');
    }

    /**
     * @param string|null $value
     */
    public function setHandle($value): self
    {
        return $this->set('handle', $value);
    }

    public function hasHandle(): bool
    {
        return $this->has('handle');
    }

    public function unsetHandle(): self
    {
        return $this->remove('handle');
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->get('url');
    }

    /**
     * @param string|null $value
     */
    public function setUrl($value): self
    {
        return $this->set('url', $value);
    }

    public function hasUrl(): bool
    {
        return $this->has('url');
    }

    public function unsetUrl(): self
    {
        return $this->remove('url');
    }

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->get('date');
    }

    /**
     * @param string|null $value
     */
    public function setDate($value): self
    {
        return $this->set('date', $value);
    }

    public function hasDate(): bool
    {
        return $this->has('date');
    }

    public function unsetDate(): self
    {
        return $this->remove('date');
    }

    /**
     * @return int
     */
    public function getResourceOrdinal()
    {
        return $this->get('resourceOrdinal');
    }

    /**
     * @param int $value
     */
    public function setResourceOrdinal($value): self
    {
        return $this->set('resourceOrdinal', $value);
    }

    public function hasResourceOrdinal(): bool
    {
        return $this->has('resourceOrdinal');
    }

    public function unsetResourceOrdinal(): self
    {
        return $this->remove('resourceOrdinal');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchAdditionalResource', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'additionalResourceId',
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
                'name' => 'title',
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
                'name' => 'description',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'attribution',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'resourceType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'ResourceType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'doi',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'handle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'url',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'date',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'resourceOrdinal',
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
