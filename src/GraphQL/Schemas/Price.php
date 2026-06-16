<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Price extends ObjectData
{
    /**
     * @return string
     */
    public function getPriceId()
    {
        return $this->get('priceId');
    }

    /**
     * @param string $value
     */
    public function setPriceId($value): self
    {
        return $this->set('priceId', $value);
    }

    public function hasPriceId(): bool
    {
        return $this->has('priceId');
    }

    public function unsetPriceId(): self
    {
        return $this->remove('priceId');
    }

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
    public function getCurrencyCode()
    {
        return $this->get('currencyCode');
    }

    /**
     * @param string $value
     */
    public function setCurrencyCode($value): self
    {
        return $this->set('currencyCode', $value);
    }

    public function hasCurrencyCode(): bool
    {
        return $this->has('currencyCode');
    }

    public function unsetCurrencyCode(): self
    {
        return $this->remove('currencyCode');
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->get('unitPrice');
    }

    /**
     * @param float $value
     */
    public function setUnitPrice($value): self
    {
        return $this->set('unitPrice', $value);
    }

    public function hasUnitPrice(): bool
    {
        return $this->has('unitPrice');
    }

    public function unsetUnitPrice(): self
    {
        return $this->remove('unitPrice');
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

    public function hasCreatedAt(): bool
    {
        return $this->has('createdAt');
    }

    public function unsetCreatedAt(): self
    {
        return $this->remove('createdAt');
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

    public function hasUpdatedAt(): bool
    {
        return $this->has('updatedAt');
    }

    public function unsetUpdatedAt(): self
    {
        return $this->remove('updatedAt');
    }

    /**
     * @return Publication
     */
    public function getPublication()
    {
        return $this->get('publication');
    }

    /**
     * @param Publication $value
     */
    public function setPublication($value): self
    {
        return $this->set('publication', $value);
    }

    public function hasPublication(): bool
    {
        return $this->has('publication');
    }

    public function unsetPublication(): self
    {
        return $this->remove('publication');
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Price', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'priceId',
                'description' => 'Thoth ID of the price',
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
                'name' => 'publicationId',
                'description' => 'Thoth ID of the publication linked to this price',
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
                'name' => 'currencyCode',
                'description' => 'Three-letter ISO 4217 code representing the currency used in this price',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'CurrencyCode',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'unitPrice',
                'description' => 'Value of the publication in the specified currency',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Float',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the price record was created',
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
                'description' => 'Date and time at which the price record was last updated',
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
                'name' => 'publication',
                'description' => 'Get the publication linked to this price',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publication',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
