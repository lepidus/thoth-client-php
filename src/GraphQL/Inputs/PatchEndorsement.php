<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchEndorsement extends InputObject
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

    public function hasEndorsementId(): bool
    {
        return $this->has('endorsementId');
    }

    public function unsetEndorsementId(): self
    {
        return $this->remove('endorsementId');
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

    public function hasAuthorName(): bool
    {
        return $this->has('authorName');
    }

    public function unsetAuthorName(): self
    {
        return $this->remove('authorName');
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

    public function hasAuthorRole(): bool
    {
        return $this->has('authorRole');
    }

    public function unsetAuthorRole(): self
    {
        return $this->remove('authorRole');
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

    public function hasAuthorOrcid(): bool
    {
        return $this->has('authorOrcid');
    }

    public function unsetAuthorOrcid(): self
    {
        return $this->remove('authorOrcid');
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

    public function hasAuthorInstitutionId(): bool
    {
        return $this->has('authorInstitutionId');
    }

    public function unsetAuthorInstitutionId(): self
    {
        return $this->remove('authorInstitutionId');
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

    public function hasUrl(): bool
    {
        return $this->has('url');
    }

    public function unsetUrl(): self
    {
        return $this->remove('url');
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

    public function hasText(): bool
    {
        return $this->has('text');
    }

    public function unsetText(): self
    {
        return $this->remove('text');
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

    public function hasEndorsementOrdinal(): bool
    {
        return $this->has('endorsementOrdinal');
    }

    public function unsetEndorsementOrdinal(): self
    {
        return $this->remove('endorsementOrdinal');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchEndorsement', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'endorsementId',
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
                'name' => 'authorName',
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
                'name' => 'authorRole',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'authorOrcid',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Orcid',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'authorInstitutionId',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Uuid',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'url',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'text',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'endorsementOrdinal',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
