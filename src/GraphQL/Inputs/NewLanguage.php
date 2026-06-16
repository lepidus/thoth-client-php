<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewLanguage extends InputObject
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
    public function getLanguageCode()
    {
        return $this->get('languageCode');
    }

    /**
     * @param string $value
     */
    public function setLanguageCode($value): self
    {
        return $this->set('languageCode', $value);
    }

    public function hasLanguageCode(): bool
    {
        return $this->has('languageCode');
    }

    public function unsetLanguageCode(): self
    {
        return $this->remove('languageCode');
    }

    /**
     * @return string
     */
    public function getLanguageRelation()
    {
        return $this->get('languageRelation');
    }

    /**
     * @param string $value
     */
    public function setLanguageRelation($value): self
    {
        return $this->set('languageRelation', $value);
    }

    public function hasLanguageRelation(): bool
    {
        return $this->has('languageRelation');
    }

    public function unsetLanguageRelation(): self
    {
        return $this->remove('languageRelation');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewLanguage', [
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
                'name' => 'languageCode',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LanguageCode',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'languageRelation',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LanguageRelation',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
