<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewContact extends InputObject
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
    public function getContactType()
    {
        return $this->get('contactType');
    }

    /**
     * @param string $value
     */
    public function setContactType($value): self
    {
        return $this->set('contactType', $value);
    }

    public function hasContactType(): bool
    {
        return $this->has('contactType');
    }

    public function unsetContactType(): self
    {
        return $this->remove('contactType');
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->get('email');
    }

    /**
     * @param string $value
     */
    public function setEmail($value): self
    {
        return $this->set('email', $value);
    }

    public function hasEmail(): bool
    {
        return $this->has('email');
    }

    public function unsetEmail(): self
    {
        return $this->remove('email');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewContact', [
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
                'name' => 'contactType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'ContactType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'email',
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
            ])
        ]);
    }
}
