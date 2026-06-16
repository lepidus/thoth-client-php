<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchBiography extends InputObject
{
    /**
     * @return string
     */
    public function getBiographyId()
    {
        return $this->get('biographyId');
    }

    /**
     * @param string $value
     */
    public function setBiographyId($value): self
    {
        return $this->set('biographyId', $value);
    }

    public function hasBiographyId(): bool
    {
        return $this->has('biographyId');
    }

    public function unsetBiographyId(): self
    {
        return $this->remove('biographyId');
    }

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
        return new InputObjectTypeDefinition('PatchBiography', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'biographyId',
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
