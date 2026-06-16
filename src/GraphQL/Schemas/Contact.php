<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Contact extends ObjectData
{
    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->get('contactId');
    }

    /**
     * @param string $value
     */
    public function setContactId($value): self
    {
        return $this->set('contactId', $value);
    }

    public function hasContactId(): bool
    {
        return $this->has('contactId');
    }

    public function unsetContactId(): self
    {
        return $this->remove('contactId');
    }

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
     * @return Publisher
     */
    public function getPublisher()
    {
        return $this->get('publisher');
    }

    /**
     * @param Publisher $value
     */
    public function setPublisher($value): self
    {
        return $this->set('publisher', $value);
    }

    public function hasPublisher(): bool
    {
        return $this->has('publisher');
    }

    public function unsetPublisher(): self
    {
        return $this->remove('publisher');
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Contact', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'contactId',
                'description' => 'Thoth ID of the contact',
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
                'name' => 'publisherId',
                'description' => 'Thoth ID of the publisher to which this contact belongs',
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
                'name' => 'contactType',
                'description' => 'Type of the contact',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'ContactType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'email',
                'description' => 'Email address of the contact',
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
                'name' => 'createdAt',
                'description' => 'Date and time at which the contact record was created',
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
                'description' => 'Date and time at which the contact record was last updated',
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
                'name' => 'publisher',
                'description' => 'Get the publisher to which this contact belongs',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publisher',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
