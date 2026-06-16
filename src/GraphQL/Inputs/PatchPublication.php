<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchPublication extends InputObject
{
    /**
     * @return string
     */
    public function getPublicationId()
    {
        return $this->get('publicationId');
    }

    /**
     * @param string $value
     */
    public function setPublicationId($value): self
    {
        return $this->set('publicationId', $value);
    }

    public function hasPublicationId(): bool
    {
        return $this->has('publicationId');
    }

    public function unsetPublicationId(): self
    {
        return $this->remove('publicationId');
    }

    /**
     * @return string
     */
    public function getPublicationType()
    {
        return $this->get('publicationType');
    }

    /**
     * @param string $value
     */
    public function setPublicationType($value): self
    {
        return $this->set('publicationType', $value);
    }

    public function hasPublicationType(): bool
    {
        return $this->has('publicationType');
    }

    public function unsetPublicationType(): self
    {
        return $this->remove('publicationType');
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
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->get('isbn');
    }

    /**
     * @param string|null $value
     */
    public function setIsbn($value): self
    {
        return $this->set('isbn', $value);
    }

    public function hasIsbn(): bool
    {
        return $this->has('isbn');
    }

    public function unsetIsbn(): self
    {
        return $this->remove('isbn');
    }

    /**
     * @return float|null
     */
    public function getWidthMm()
    {
        return $this->get('widthMm');
    }

    /**
     * @param float|null $value
     */
    public function setWidthMm($value): self
    {
        return $this->set('widthMm', $value);
    }

    public function hasWidthMm(): bool
    {
        return $this->has('widthMm');
    }

    public function unsetWidthMm(): self
    {
        return $this->remove('widthMm');
    }

    /**
     * @return float|null
     */
    public function getWidthIn()
    {
        return $this->get('widthIn');
    }

    /**
     * @param float|null $value
     */
    public function setWidthIn($value): self
    {
        return $this->set('widthIn', $value);
    }

    public function hasWidthIn(): bool
    {
        return $this->has('widthIn');
    }

    public function unsetWidthIn(): self
    {
        return $this->remove('widthIn');
    }

    /**
     * @return float|null
     */
    public function getHeightMm()
    {
        return $this->get('heightMm');
    }

    /**
     * @param float|null $value
     */
    public function setHeightMm($value): self
    {
        return $this->set('heightMm', $value);
    }

    public function hasHeightMm(): bool
    {
        return $this->has('heightMm');
    }

    public function unsetHeightMm(): self
    {
        return $this->remove('heightMm');
    }

    /**
     * @return float|null
     */
    public function getHeightIn()
    {
        return $this->get('heightIn');
    }

    /**
     * @param float|null $value
     */
    public function setHeightIn($value): self
    {
        return $this->set('heightIn', $value);
    }

    public function hasHeightIn(): bool
    {
        return $this->has('heightIn');
    }

    public function unsetHeightIn(): self
    {
        return $this->remove('heightIn');
    }

    /**
     * @return float|null
     */
    public function getDepthMm()
    {
        return $this->get('depthMm');
    }

    /**
     * @param float|null $value
     */
    public function setDepthMm($value): self
    {
        return $this->set('depthMm', $value);
    }

    public function hasDepthMm(): bool
    {
        return $this->has('depthMm');
    }

    public function unsetDepthMm(): self
    {
        return $this->remove('depthMm');
    }

    /**
     * @return float|null
     */
    public function getDepthIn()
    {
        return $this->get('depthIn');
    }

    /**
     * @param float|null $value
     */
    public function setDepthIn($value): self
    {
        return $this->set('depthIn', $value);
    }

    public function hasDepthIn(): bool
    {
        return $this->has('depthIn');
    }

    public function unsetDepthIn(): self
    {
        return $this->remove('depthIn');
    }

    /**
     * @return float|null
     */
    public function getWeightG()
    {
        return $this->get('weightG');
    }

    /**
     * @param float|null $value
     */
    public function setWeightG($value): self
    {
        return $this->set('weightG', $value);
    }

    public function hasWeightG(): bool
    {
        return $this->has('weightG');
    }

    public function unsetWeightG(): self
    {
        return $this->remove('weightG');
    }

    /**
     * @return float|null
     */
    public function getWeightOz()
    {
        return $this->get('weightOz');
    }

    /**
     * @param float|null $value
     */
    public function setWeightOz($value): self
    {
        return $this->set('weightOz', $value);
    }

    public function hasWeightOz(): bool
    {
        return $this->has('weightOz');
    }

    public function unsetWeightOz(): self
    {
        return $this->remove('weightOz');
    }

    /**
     * @return string|null
     */
    public function getAccessibilityStandard()
    {
        return $this->get('accessibilityStandard');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityStandard($value): self
    {
        return $this->set('accessibilityStandard', $value);
    }

    public function hasAccessibilityStandard(): bool
    {
        return $this->has('accessibilityStandard');
    }

    public function unsetAccessibilityStandard(): self
    {
        return $this->remove('accessibilityStandard');
    }

    /**
     * @return string|null
     */
    public function getAccessibilityAdditionalStandard()
    {
        return $this->get('accessibilityAdditionalStandard');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityAdditionalStandard($value): self
    {
        return $this->set('accessibilityAdditionalStandard', $value);
    }

    public function hasAccessibilityAdditionalStandard(): bool
    {
        return $this->has('accessibilityAdditionalStandard');
    }

    public function unsetAccessibilityAdditionalStandard(): self
    {
        return $this->remove('accessibilityAdditionalStandard');
    }

    /**
     * @return string|null
     */
    public function getAccessibilityException()
    {
        return $this->get('accessibilityException');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityException($value): self
    {
        return $this->set('accessibilityException', $value);
    }

    public function hasAccessibilityException(): bool
    {
        return $this->has('accessibilityException');
    }

    public function unsetAccessibilityException(): self
    {
        return $this->remove('accessibilityException');
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
        return new InputObjectTypeDefinition('PatchPublication', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publicationId',
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
                'name' => 'publicationType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'PublicationType',
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
                'name' => 'isbn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Isbn',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'widthMm',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'widthIn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'heightMm',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'heightIn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'depthMm',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'depthIn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'weightG',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'weightOz',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityStandard',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityAdditionalStandard',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityException',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityException',
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
