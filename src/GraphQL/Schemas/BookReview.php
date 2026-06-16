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
