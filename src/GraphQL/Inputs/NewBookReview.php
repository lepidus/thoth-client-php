<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewBookReview extends InputObject
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
     * @return string|null
     */
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * @param string|null $value
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
    public function getAuthorName()
    {
        return $this->get('authorName');
    }

    /**
     * @param string|null $value
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
    public function getReviewerOrcid()
    {
        return $this->get('reviewerOrcid');
    }

    /**
     * @param string|null $value
     */
    public function setReviewerOrcid($value): self
    {
        return $this->set('reviewerOrcid', $value);
    }

    public function hasReviewerOrcid(): bool
    {
        return $this->has('reviewerOrcid');
    }

    public function unsetReviewerOrcid(): self
    {
        return $this->remove('reviewerOrcid');
    }

    /**
     * @return string|null
     */
    public function getReviewerInstitutionId()
    {
        return $this->get('reviewerInstitutionId');
    }

    /**
     * @param string|null $value
     */
    public function setReviewerInstitutionId($value): self
    {
        return $this->set('reviewerInstitutionId', $value);
    }

    public function hasReviewerInstitutionId(): bool
    {
        return $this->has('reviewerInstitutionId');
    }

    public function unsetReviewerInstitutionId(): self
    {
        return $this->remove('reviewerInstitutionId');
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
    public function getDoi()
    {
        return $this->get('doi');
    }

    /**
     * @param string|null $value
     */
    public function setDoi($value): self
    {
        return $this->set('doi', $value);
    }

    public function hasDoi(): bool
    {
        return $this->has('doi');
    }

    public function unsetDoi(): self
    {
        return $this->remove('doi');
    }

    /**
     * @return string|null
     */
    public function getReviewDate()
    {
        return $this->get('reviewDate');
    }

    /**
     * @param string|null $value
     */
    public function setReviewDate($value): self
    {
        return $this->set('reviewDate', $value);
    }

    public function hasReviewDate(): bool
    {
        return $this->has('reviewDate');
    }

    public function unsetReviewDate(): self
    {
        return $this->remove('reviewDate');
    }

    /**
     * @return string|null
     */
    public function getJournalName()
    {
        return $this->get('journalName');
    }

    /**
     * @param string|null $value
     */
    public function setJournalName($value): self
    {
        return $this->set('journalName', $value);
    }

    public function hasJournalName(): bool
    {
        return $this->has('journalName');
    }

    public function unsetJournalName(): self
    {
        return $this->remove('journalName');
    }

    /**
     * @return string|null
     */
    public function getJournalVolume()
    {
        return $this->get('journalVolume');
    }

    /**
     * @param string|null $value
     */
    public function setJournalVolume($value): self
    {
        return $this->set('journalVolume', $value);
    }

    public function hasJournalVolume(): bool
    {
        return $this->has('journalVolume');
    }

    public function unsetJournalVolume(): self
    {
        return $this->remove('journalVolume');
    }

    /**
     * @return string|null
     */
    public function getJournalNumber()
    {
        return $this->get('journalNumber');
    }

    /**
     * @param string|null $value
     */
    public function setJournalNumber($value): self
    {
        return $this->set('journalNumber', $value);
    }

    public function hasJournalNumber(): bool
    {
        return $this->has('journalNumber');
    }

    public function unsetJournalNumber(): self
    {
        return $this->remove('journalNumber');
    }

    /**
     * @return string|null
     */
    public function getJournalIssn()
    {
        return $this->get('journalIssn');
    }

    /**
     * @param string|null $value
     */
    public function setJournalIssn($value): self
    {
        return $this->set('journalIssn', $value);
    }

    public function hasJournalIssn(): bool
    {
        return $this->has('journalIssn');
    }

    public function unsetJournalIssn(): self
    {
        return $this->remove('journalIssn');
    }

    /**
     * @return string|null
     */
    public function getPageRange()
    {
        return $this->get('pageRange');
    }

    /**
     * @param string|null $value
     */
    public function setPageRange($value): self
    {
        return $this->set('pageRange', $value);
    }

    public function hasPageRange(): bool
    {
        return $this->has('pageRange');
    }

    public function unsetPageRange(): self
    {
        return $this->remove('pageRange');
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
    public function getReviewOrdinal()
    {
        return $this->get('reviewOrdinal');
    }

    /**
     * @param int $value
     */
    public function setReviewOrdinal($value): self
    {
        return $this->set('reviewOrdinal', $value);
    }

    public function hasReviewOrdinal(): bool
    {
        return $this->has('reviewOrdinal');
    }

    public function unsetReviewOrdinal(): self
    {
        return $this->remove('reviewOrdinal');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewBookReview', [
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
                'name' => 'title',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'authorName',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'reviewerOrcid',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Orcid',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'reviewerInstitutionId',
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
                'name' => 'doi',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'reviewDate',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalName',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalVolume',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalNumber',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalIssn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'pageRange',
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
                'name' => 'reviewOrdinal',
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
