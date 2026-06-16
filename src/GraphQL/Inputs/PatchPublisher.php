<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchPublisher extends InputObject
{
    /**
     * @return string
     */
    public function getPublisherId()
    {
        return $this->get('publisherId');
    }

    /**
     * @param string $value
     */
    public function setPublisherId($value): self
    {
        return $this->set('publisherId', $value);
    }

    public function hasPublisherId(): bool
    {
        return $this->has('publisherId');
    }

    public function unsetPublisherId(): self
    {
        return $this->remove('publisherId');
    }

    /**
     * @return string
     */
    public function getPublisherName()
    {
        return $this->get('publisherName');
    }

    /**
     * @param string $value
     */
    public function setPublisherName($value): self
    {
        return $this->set('publisherName', $value);
    }

    public function hasPublisherName(): bool
    {
        return $this->has('publisherName');
    }

    public function unsetPublisherName(): self
    {
        return $this->remove('publisherName');
    }

    /**
     * @return string|null
     */
    public function getPublisherShortname()
    {
        return $this->get('publisherShortname');
    }

    /**
     * @param string|null $value
     */
    public function setPublisherShortname($value): self
    {
        return $this->set('publisherShortname', $value);
    }

    public function hasPublisherShortname(): bool
    {
        return $this->has('publisherShortname');
    }

    public function unsetPublisherShortname(): self
    {
        return $this->remove('publisherShortname');
    }

    /**
     * @return string|null
     */
    public function getPublisherUrl()
    {
        return $this->get('publisherUrl');
    }

    /**
     * @param string|null $value
     */
    public function setPublisherUrl($value): self
    {
        return $this->set('publisherUrl', $value);
    }

    public function hasPublisherUrl(): bool
    {
        return $this->has('publisherUrl');
    }

    public function unsetPublisherUrl(): self
    {
        return $this->remove('publisherUrl');
    }

    /**
     * @return string|null
     */
    public function getZitadelId()
    {
        return $this->get('zitadelId');
    }

    /**
     * @param string|null $value
     */
    public function setZitadelId($value): self
    {
        return $this->set('zitadelId', $value);
    }

    public function hasZitadelId(): bool
    {
        return $this->has('zitadelId');
    }

    public function unsetZitadelId(): self
    {
        return $this->remove('zitadelId');
    }

    /**
     * @return string|null
     */
    public function getAccessibilityStatement()
    {
        return $this->get('accessibilityStatement');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityStatement($value): self
    {
        return $this->set('accessibilityStatement', $value);
    }

    public function hasAccessibilityStatement(): bool
    {
        return $this->has('accessibilityStatement');
    }

    public function unsetAccessibilityStatement(): self
    {
        return $this->remove('accessibilityStatement');
    }

    /**
     * @return string|null
     */
    public function getAccessibilityReportUrl()
    {
        return $this->get('accessibilityReportUrl');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityReportUrl($value): self
    {
        return $this->set('accessibilityReportUrl', $value);
    }

    public function hasAccessibilityReportUrl(): bool
    {
        return $this->has('accessibilityReportUrl');
    }

    public function unsetAccessibilityReportUrl(): self
    {
        return $this->remove('accessibilityReportUrl');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchPublisher', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publisherId',
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
                'name' => 'publisherName',
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
                'name' => 'publisherShortname',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publisherUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'zitadelId',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityStatement',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
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
