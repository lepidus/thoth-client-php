<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewImprint extends InputObject
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
    public function getImprintName()
    {
        return $this->get('imprintName');
    }

    /**
     * @param string $value
     */
    public function setImprintName($value): self
    {
        return $this->set('imprintName', $value);
    }

    public function hasImprintName(): bool
    {
        return $this->has('imprintName');
    }

    public function unsetImprintName(): self
    {
        return $this->remove('imprintName');
    }

    /**
     * @return string|null
     */
    public function getImprintUrl()
    {
        return $this->get('imprintUrl');
    }

    /**
     * @param string|null $value
     */
    public function setImprintUrl($value): self
    {
        return $this->set('imprintUrl', $value);
    }

    public function hasImprintUrl(): bool
    {
        return $this->has('imprintUrl');
    }

    public function unsetImprintUrl(): self
    {
        return $this->remove('imprintUrl');
    }

    /**
     * @return string|null
     */
    public function getCrossmarkDoi()
    {
        return $this->get('crossmarkDoi');
    }

    /**
     * @param string|null $value
     */
    public function setCrossmarkDoi($value): self
    {
        return $this->set('crossmarkDoi', $value);
    }

    public function hasCrossmarkDoi(): bool
    {
        return $this->has('crossmarkDoi');
    }

    public function unsetCrossmarkDoi(): self
    {
        return $this->remove('crossmarkDoi');
    }

    /**
     * @return string|null
     */
    public function getS3Bucket()
    {
        return $this->get('s3Bucket');
    }

    /**
     * @param string|null $value
     */
    public function setS3Bucket($value): self
    {
        return $this->set('s3Bucket', $value);
    }

    public function hasS3Bucket(): bool
    {
        return $this->has('s3Bucket');
    }

    public function unsetS3Bucket(): self
    {
        return $this->remove('s3Bucket');
    }

    /**
     * @return string|null
     */
    public function getCdnDomain()
    {
        return $this->get('cdnDomain');
    }

    /**
     * @param string|null $value
     */
    public function setCdnDomain($value): self
    {
        return $this->set('cdnDomain', $value);
    }

    public function hasCdnDomain(): bool
    {
        return $this->has('cdnDomain');
    }

    public function unsetCdnDomain(): self
    {
        return $this->remove('cdnDomain');
    }

    /**
     * @return string|null
     */
    public function getCloudfrontDistId()
    {
        return $this->get('cloudfrontDistId');
    }

    /**
     * @param string|null $value
     */
    public function setCloudfrontDistId($value): self
    {
        return $this->set('cloudfrontDistId', $value);
    }

    public function hasCloudfrontDistId(): bool
    {
        return $this->has('cloudfrontDistId');
    }

    public function unsetCloudfrontDistId(): self
    {
        return $this->remove('cloudfrontDistId');
    }

    /**
     * @return string|null
     */
    public function getDefaultCurrency()
    {
        return $this->get('defaultCurrency');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultCurrency($value): self
    {
        return $this->set('defaultCurrency', $value);
    }

    public function hasDefaultCurrency(): bool
    {
        return $this->has('defaultCurrency');
    }

    public function unsetDefaultCurrency(): self
    {
        return $this->remove('defaultCurrency');
    }

    /**
     * @return string|null
     */
    public function getDefaultPlace()
    {
        return $this->get('defaultPlace');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultPlace($value): self
    {
        return $this->set('defaultPlace', $value);
    }

    public function hasDefaultPlace(): bool
    {
        return $this->has('defaultPlace');
    }

    public function unsetDefaultPlace(): self
    {
        return $this->remove('defaultPlace');
    }

    /**
     * @return string|null
     */
    public function getDefaultLocale()
    {
        return $this->get('defaultLocale');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultLocale($value): self
    {
        return $this->set('defaultLocale', $value);
    }

    public function hasDefaultLocale(): bool
    {
        return $this->has('defaultLocale');
    }

    public function unsetDefaultLocale(): self
    {
        return $this->remove('defaultLocale');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewImprint', [
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
                'name' => 'imprintName',
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
                'name' => 'imprintUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'crossmarkDoi',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 's3Bucket',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'cdnDomain',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'cloudfrontDistId',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'defaultCurrency',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CurrencyCode',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'defaultPlace',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'defaultLocale',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'LocaleCode',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
