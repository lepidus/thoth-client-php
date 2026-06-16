<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchSeries extends InputObject
{
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
    public function getSeriesType()
    {
        return $this->get('seriesType');
    }

    /**
     * @param string $value
     */
    public function setSeriesType($value): self
    {
        return $this->set('seriesType', $value);
    }

    public function hasSeriesType(): bool
    {
        return $this->has('seriesType');
    }

    public function unsetSeriesType(): self
    {
        return $this->remove('seriesType');
    }

    /**
     * @return string
     */
    public function getSeriesName()
    {
        return $this->get('seriesName');
    }

    /**
     * @param string $value
     */
    public function setSeriesName($value): self
    {
        return $this->set('seriesName', $value);
    }

    public function hasSeriesName(): bool
    {
        return $this->has('seriesName');
    }

    public function unsetSeriesName(): self
    {
        return $this->remove('seriesName');
    }

    /**
     * @return string|null
     */
    public function getIssnPrint()
    {
        return $this->get('issnPrint');
    }

    /**
     * @param string|null $value
     */
    public function setIssnPrint($value): self
    {
        return $this->set('issnPrint', $value);
    }

    public function hasIssnPrint(): bool
    {
        return $this->has('issnPrint');
    }

    public function unsetIssnPrint(): self
    {
        return $this->remove('issnPrint');
    }

    /**
     * @return string|null
     */
    public function getIssnDigital()
    {
        return $this->get('issnDigital');
    }

    /**
     * @param string|null $value
     */
    public function setIssnDigital($value): self
    {
        return $this->set('issnDigital', $value);
    }

    public function hasIssnDigital(): bool
    {
        return $this->has('issnDigital');
    }

    public function unsetIssnDigital(): self
    {
        return $this->remove('issnDigital');
    }

    /**
     * @return string|null
     */
    public function getSeriesUrl()
    {
        return $this->get('seriesUrl');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesUrl($value): self
    {
        return $this->set('seriesUrl', $value);
    }

    public function hasSeriesUrl(): bool
    {
        return $this->has('seriesUrl');
    }

    public function unsetSeriesUrl(): self
    {
        return $this->remove('seriesUrl');
    }

    /**
     * @return string|null
     */
    public function getSeriesDescription()
    {
        return $this->get('seriesDescription');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesDescription($value): self
    {
        return $this->set('seriesDescription', $value);
    }

    public function hasSeriesDescription(): bool
    {
        return $this->has('seriesDescription');
    }

    public function unsetSeriesDescription(): self
    {
        return $this->remove('seriesDescription');
    }

    /**
     * @return string|null
     */
    public function getSeriesCfpUrl()
    {
        return $this->get('seriesCfpUrl');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesCfpUrl($value): self
    {
        return $this->set('seriesCfpUrl', $value);
    }

    public function hasSeriesCfpUrl(): bool
    {
        return $this->has('seriesCfpUrl');
    }

    public function unsetSeriesCfpUrl(): self
    {
        return $this->remove('seriesCfpUrl');
    }

    /**
     * @return string
     */
    public function getImprintId()
    {
        return $this->get('imprintId');
    }

    /**
     * @param string $value
     */
    public function setImprintId($value): self
    {
        return $this->set('imprintId', $value);
    }

    public function hasImprintId(): bool
    {
        return $this->has('imprintId');
    }

    public function unsetImprintId(): self
    {
        return $this->remove('imprintId');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchSeries', [
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
                'name' => 'seriesType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'SeriesType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesName',
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
                'name' => 'issnPrint',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'issnDigital',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesDescription',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesCfpUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'imprintId',
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
            ])
        ]);
    }
}
