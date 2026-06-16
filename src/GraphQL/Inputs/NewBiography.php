<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewBiography extends InputObject
{
    /**
     * @return string
     */
    public function getContributionId()
    {
        return $this->get('contributionId');
    }

    /**
     * @param string $value
     */
    public function setContributionId($value): self
    {
        return $this->set('contributionId', $value);
    }

    public function hasContributionId(): bool
    {
        return $this->has('contributionId');
    }

    public function unsetContributionId(): self
    {
        return $this->remove('contributionId');
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->get('content');
    }

    /**
     * @param string $value
     */
    public function setContent($value): self
    {
        return $this->set('content', $value);
    }

    public function hasContent(): bool
    {
        return $this->has('content');
    }

    public function unsetContent(): self
    {
        return $this->remove('content');
    }

    /**
     * @return bool
     */
    public function getCanonical()
    {
        return $this->get('canonical');
    }

    /**
     * @param bool $value
     */
    public function setCanonical($value): self
    {
        return $this->set('canonical', $value);
    }

    public function hasCanonical(): bool
    {
        return $this->has('canonical');
    }

    public function unsetCanonical(): self
    {
        return $this->remove('canonical');
    }

    /**
     * @return string
     */
    public function getLocaleCode()
    {
        return $this->get('localeCode');
    }

    /**
     * @param string $value
     */
    public function setLocaleCode($value): self
    {
        return $this->set('localeCode', $value);
    }

    public function hasLocaleCode(): bool
    {
        return $this->has('localeCode');
    }

    public function unsetLocaleCode(): self
    {
        return $this->remove('localeCode');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewBiography', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'contributionId',
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
                'name' => 'content',
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
                'name' => 'canonical',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'localeCode',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LocaleCode',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
