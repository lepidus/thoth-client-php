<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class BookReview extends ObjectData
{
    /**
     * @return string
     */
    public function getBookReviewId()
    {
        return $this->get('bookReviewId');
    }

    /**
     * @param string $value
     */
    public function setBookReviewId($value): self
    {
        return $this->set('bookReviewId', $value);
    }

    public function hasBookReviewId(): bool
    {
        return $this->has('bookReviewId');
    }

    public function unsetBookReviewId(): self
    {
        return $this->remove('bookReviewId');
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

    /**
     * @return Institution|null
     */
    public function getReviewerInstitution()
    {
        return $this->get('reviewerInstitution');
    }

    /**
     * @param Institution|null $value
     */
    public function setReviewerInstitution($value): self
    {
        return $this->set('reviewerInstitution', $value);
    }

    public function hasReviewerInstitution(): bool
    {
        return $this->has('reviewerInstitution');
    }

    public function unsetReviewerInstitution(): self
    {
        return $this->remove('reviewerInstitution');
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('BookReview', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'bookReviewId',
                'description' => 'Thoth ID of the book review',
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
                'description' => 'Thoth ID of the work to which this review belongs',
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
                'name' => 'title',
                'description' => 'Title of the review',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering review title',
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
                'name' => 'authorName',
                'description' => 'Name of the review author',
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
                'name' => 'reviewerOrcid',
                'description' => 'ORCID (Open Researcher and Contributor ID) of the reviewer as full URL, using the HTTPS scheme and the orcid.org domain',
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
                'name' => 'reviewerInstitutionId',
                'description' => 'Thoth ID of the reviewer\'s institution',
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
                'description' => 'URL of the review publication',
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
                'name' => 'doi',
                'description' => 'DOI of the review as full URL, using the HTTPS scheme and the doi.org domain',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'reviewDate',
                'description' => 'Publication date of the review',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'journalName',
                'description' => 'Name of the journal where the review was published',
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
                'name' => 'journalVolume',
                'description' => 'Volume of the journal where the review was published',
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
                'name' => 'journalNumber',
                'description' => 'Number of the journal where the review was published',
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
                'name' => 'journalIssn',
                'description' => 'ISSN of the journal where the review was published',
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
                'name' => 'pageRange',
                'description' => 'Page range of the review',
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
                'description' => 'Text of the review',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering review text',
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
                'name' => 'reviewOrdinal',
                'description' => 'Number representing this review\'s position in an ordered list of reviews within the work',
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
                'description' => 'Date and time at which the review record was created',
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
                'description' => 'Date and time at which the review record was last updated',
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
                'description' => 'Get the work linked to this review',
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
                'name' => 'reviewerInstitution',
                'description' => 'Get the reviewer\'s institution',
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
