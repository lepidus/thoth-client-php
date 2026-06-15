<?php

namespace ThothApi\GraphQL\Generated\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class BookReview extends ObjectData
{
    public function getBookReviewId()
    {
        return $this->get('bookReviewId');
    }

    public function setBookReviewId($value): self
    {
        return $this->set('bookReviewId', $value);
    }

    public function getWorkId()
    {
        return $this->get('workId');
    }

    public function setWorkId($value): self
    {
        return $this->set('workId', $value);
    }

    public function getTitle()
    {
        return $this->get('title');
    }

    public function setTitle($value): self
    {
        return $this->set('title', $value);
    }

    public function getAuthorName()
    {
        return $this->get('authorName');
    }

    public function setAuthorName($value): self
    {
        return $this->set('authorName', $value);
    }

    public function getReviewerOrcid()
    {
        return $this->get('reviewerOrcid');
    }

    public function setReviewerOrcid($value): self
    {
        return $this->set('reviewerOrcid', $value);
    }

    public function getReviewerInstitutionId()
    {
        return $this->get('reviewerInstitutionId');
    }

    public function setReviewerInstitutionId($value): self
    {
        return $this->set('reviewerInstitutionId', $value);
    }

    public function getUrl()
    {
        return $this->get('url');
    }

    public function setUrl($value): self
    {
        return $this->set('url', $value);
    }

    public function getDoi()
    {
        return $this->get('doi');
    }

    public function setDoi($value): self
    {
        return $this->set('doi', $value);
    }

    public function getReviewDate()
    {
        return $this->get('reviewDate');
    }

    public function setReviewDate($value): self
    {
        return $this->set('reviewDate', $value);
    }

    public function getJournalName()
    {
        return $this->get('journalName');
    }

    public function setJournalName($value): self
    {
        return $this->set('journalName', $value);
    }

    public function getJournalVolume()
    {
        return $this->get('journalVolume');
    }

    public function setJournalVolume($value): self
    {
        return $this->set('journalVolume', $value);
    }

    public function getJournalNumber()
    {
        return $this->get('journalNumber');
    }

    public function setJournalNumber($value): self
    {
        return $this->set('journalNumber', $value);
    }

    public function getJournalIssn()
    {
        return $this->get('journalIssn');
    }

    public function setJournalIssn($value): self
    {
        return $this->set('journalIssn', $value);
    }

    public function getPageRange()
    {
        return $this->get('pageRange');
    }

    public function setPageRange($value): self
    {
        return $this->set('pageRange', $value);
    }

    public function getText()
    {
        return $this->get('text');
    }

    public function setText($value): self
    {
        return $this->set('text', $value);
    }

    public function getReviewOrdinal()
    {
        return $this->get('reviewOrdinal');
    }

    public function setReviewOrdinal($value): self
    {
        return $this->set('reviewOrdinal', $value);
    }

    public function getCreatedAt()
    {
        return $this->get('createdAt');
    }

    public function setCreatedAt($value): self
    {
        return $this->set('createdAt', $value);
    }

    public function getUpdatedAt()
    {
        return $this->get('updatedAt');
    }

    public function setUpdatedAt($value): self
    {
        return $this->set('updatedAt', $value);
    }

    public function getWork()
    {
        return $this->get('work');
    }

    public function setWork($value): self
    {
        return $this->set('work', $value);
    }

    public function getReviewerInstitution()
    {
        return $this->get('reviewerInstitution');
    }

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
