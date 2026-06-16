<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class GraphQLAbstract extends ObjectData
{
    /**
     * @return string
     */
    public function getAbstractId()
    {
        return $this->get('abstractId');
    }

    /**
     * @param string $value
     */
    public function setAbstractId($value): self
    {
        return $this->set('abstractId', $value);
    }

    public function hasAbstractId(): bool
    {
        return $this->has('abstractId');
    }

    public function unsetAbstractId(): self
    {
        return $this->remove('abstractId');
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
    public function getAbstractType()
    {
        return $this->get('abstractType');
    }

    /**
     * @param string $value
     */
    public function setAbstractType($value): self
    {
        return $this->set('abstractType', $value);
    }

    public function hasAbstractType(): bool
    {
        return $this->has('abstractType');
    }

    public function unsetAbstractType(): self
    {
        return $this->remove('abstractType');
    }

    /**
     * @return Work
     */
    public function getWork()
    {
        return $this->get('work');
    }

    /**
     * @param Work $value
     */
    public function setWork($value): self
    {
        return $this->set('work', $value);
    }

    public function hasWork(): bool
    {
        return $this->has('work');
    }

    public function unsetWork(): self
    {
        return $this->remove('work');
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Abstract', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'abstractId',
                'description' => 'Thoth ID of the abstract',
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
                'name' => 'workId',
                'description' => 'Thoth ID of the work to which the abstract is linked',
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
                'name' => 'localeCode',
                'description' => 'Locale code of the abstract',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'LocaleCode',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'content',
                'description' => 'Content of the abstract',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'canonical',
                'description' => 'Whether this is the canonical abstract for the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Boolean',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'abstractType',
                'description' => 'Type of the abstract',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'AbstractType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'work',
                'description' => 'Get the work to which the abstract is linked',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Work',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
