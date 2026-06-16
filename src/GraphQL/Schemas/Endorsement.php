<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Endorsement extends ObjectData
{
    /**
     * @return string
     */
    public function getEndorsementId()
    {
        return $this->get('endorsementId');
    }

    /**
     * @param string $value
     */
    public function setEndorsementId($value): self
    {
        return $this->set('endorsementId', $value);
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

    /**
     * @return string
     */
    public function getAuthorName()
    {
        return $this->get('authorName');
    }

    /**
     * @param string $value
     */
    public function setAuthorName($value): self
    {
        return $this->set('authorName', $value);
    }

    /**
     * @return string|null
     */
    public function getAuthorRole()
    {
        return $this->get('authorRole');
    }

    /**
     * @param string|null $value
     */
    public function setAuthorRole($value): self
    {
        return $this->set('authorRole', $value);
    }

    /**
     * @return string|null
     */
    public function getAuthorOrcid()
    {
        return $this->get('authorOrcid');
    }

    /**
     * @param string|null $value
     */
    public function setAuthorOrcid($value): self
    {
        return $this->set('authorOrcid', $value);
    }

    /**
     * @return string|null
     */
    public function getAuthorInstitutionId()
    {
        return $this->get('authorInstitutionId');
    }

    /**
     * @param string|null $value
     */
    public function setAuthorInstitutionId($value): self
    {
        return $this->set('authorInstitutionId', $value);
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->get('url');
    }

    /**
     * @param string|null $value
     */
    public function setUrl($value): self
    {
        return $this->set('url', $value);
    }

    /**
     * @return string|null
     */
    public function getText()
    {
        return $this->get('text');
    }

    /**
     * @param string|null $value
     */
    public function setText($value): self
    {
        return $this->set('text', $value);
    }

    /**
     * @return int
     */
    public function getEndorsementOrdinal()
    {
        return $this->get('endorsementOrdinal');
    }

    /**
     * @param int $value
     */
    public function setEndorsementOrdinal($value): self
    {
        return $this->set('endorsementOrdinal', $value);
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

    /**
     * @return Institution|null
     */
    public function getAuthorInstitution()
    {
        return $this->get('authorInstitution');
    }

    /**
     * @param Institution|null $value
     */
    public function setAuthorInstitution($value): self
    {
        return $this->set('authorInstitution', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Endorsement', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'endorsementId',
                'description' => 'Thoth ID of the endorsement',
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
                'description' => 'Thoth ID of the work to which this endorsement belongs',
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
                'name' => 'authorName',
                'description' => 'Name of the endorsement author',
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
                'name' => 'authorRole',
                'description' => 'Role of the endorsement author',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering endorsement author role',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'authorOrcid',
                'description' => 'ORCID (Open Researcher and Contributor ID) of the endorsement author as full URL, using the HTTPS scheme and the orcid.org domain',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Orcid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'authorInstitutionId',
                'description' => 'Thoth ID of the endorsement author\'s institution',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'url',
                'description' => 'URL associated with this endorsement',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'text',
                'description' => 'Text of the endorsement',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering endorsement text',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'endorsementOrdinal',
                'description' => 'Number representing this endorsement\'s position in an ordered list of endorsements within the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the endorsement record was created',
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
                'description' => 'Date and time at which the endorsement record was last updated',
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
                'name' => 'work',
                'description' => 'Get the work linked to this endorsement',
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
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'authorInstitution',
                'description' => 'Get the endorsement author\'s institution',
                'args' => [],
                'type' => [
                    'kind' => 'OBJECT',
                    'name' => 'Institution',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
