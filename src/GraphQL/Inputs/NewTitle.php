<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewTitle extends InputObject
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

    /**
     * @return string
     */
    public function getFullTitle()
    {
        return $this->get('fullTitle');
    }

    /**
     * @param string $value
     */
    public function setFullTitle($value): self
    {
        return $this->set('fullTitle', $value);
    }

    public function hasFullTitle(): bool
    {
        return $this->has('fullTitle');
    }

    public function unsetFullTitle(): self
    {
        return $this->remove('fullTitle');
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
    public function getSubtitle()
    {
        return $this->get('subtitle');
    }

    /**
     * @param string|null $value
     */
    public function setSubtitle($value): self
    {
        return $this->set('subtitle', $value);
    }

    public function hasSubtitle(): bool
    {
        return $this->has('subtitle');
    }

    public function unsetSubtitle(): self
    {
        return $this->remove('subtitle');
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewTitle', [
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
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'fullTitle',
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
                'name' => 'subtitle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
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
            ])
        ]);
    }
}
