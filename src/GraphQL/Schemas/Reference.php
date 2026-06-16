<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Reference extends ObjectData
{
    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->get('referenceId');
    }

    /**
     * @param string $value
     */
    public function setReferenceId($value): self
    {
        return $this->set('referenceId', $value);
    }

    public function hasReferenceId(): bool
    {
        return $this->has('referenceId');
    }

    public function unsetReferenceId(): self
    {
        return $this->remove('referenceId');
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
     * @return int
     */
    public function getReferenceOrdinal()
    {
        return $this->get('referenceOrdinal');
    }

    /**
     * @param int $value
     */
    public function setReferenceOrdinal($value): self
    {
        return $this->set('referenceOrdinal', $value);
    }

    public function hasReferenceOrdinal(): bool
    {
        return $this->has('referenceOrdinal');
    }

    public function unsetReferenceOrdinal(): self
    {
        return $this->remove('referenceOrdinal');
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
    public function getUnstructuredCitation()
    {
        return $this->get('unstructuredCitation');
    }

    /**
     * @param string|null $value
     */
    public function setUnstructuredCitation($value): self
    {
        return $this->set('unstructuredCitation', $value);
    }

    public function hasUnstructuredCitation(): bool
    {
        return $this->has('unstructuredCitation');
    }

    public function unsetUnstructuredCitation(): self
    {
        return $this->remove('unstructuredCitation');
    }

    /**
     * @return string|null
     */
    public function getIssn()
    {
        return $this->get('issn');
    }

    /**
     * @param string|null $value
     */
    public function setIssn($value): self
    {
        return $this->set('issn', $value);
    }

    public function hasIssn(): bool
    {
        return $this->has('issn');
    }

    public function unsetIssn(): self
    {
        return $this->remove('issn');
    }

    /**
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->get('isbn');
    }

    /**
     * @param string|null $value
     */
    public function setIsbn($value): self
    {
        return $this->set('isbn', $value);
    }

    public function hasIsbn(): bool
    {
        return $this->has('isbn');
    }

    public function unsetIsbn(): self
    {
        return $this->remove('isbn');
    }

    /**
     * @return string|null
     */
    public function getJournalTitle()
    {
        return $this->get('journalTitle');
    }

    /**
     * @param string|null $value
     */
    public function setJournalTitle($value): self
    {
        return $this->set('journalTitle', $value);
    }

    public function hasJournalTitle(): bool
    {
        return $this->has('journalTitle');
    }

    public function unsetJournalTitle(): self
    {
        return $this->remove('journalTitle');
    }

    /**
     * @return string|null
     */
    public function getArticleTitle()
    {
        return $this->get('articleTitle');
    }

    /**
     * @param string|null $value
     */
    public function setArticleTitle($value): self
    {
        return $this->set('articleTitle', $value);
    }

    public function hasArticleTitle(): bool
    {
        return $this->has('articleTitle');
    }

    public function unsetArticleTitle(): self
    {
        return $this->remove('articleTitle');
    }

    /**
     * @return string|null
     */
    public function getSeriesTitle()
    {
        return $this->get('seriesTitle');
    }

    /**
     * @param string|null $value
     */
    public function setSeriesTitle($value): self
    {
        return $this->set('seriesTitle', $value);
    }

    public function hasSeriesTitle(): bool
    {
        return $this->has('seriesTitle');
    }

    public function unsetSeriesTitle(): self
    {
        return $this->remove('seriesTitle');
    }

    /**
     * @return string|null
     */
    public function getVolumeTitle()
    {
        return $this->get('volumeTitle');
    }

    /**
     * @param string|null $value
     */
    public function setVolumeTitle($value): self
    {
        return $this->set('volumeTitle', $value);
    }

    public function hasVolumeTitle(): bool
    {
        return $this->has('volumeTitle');
    }

    public function unsetVolumeTitle(): self
    {
        return $this->remove('volumeTitle');
    }

    /**
     * @return int|null
     */
    public function getEdition()
    {
        return $this->get('edition');
    }

    /**
     * @param int|null $value
     */
    public function setEdition($value): self
    {
        return $this->set('edition', $value);
    }

    public function hasEdition(): bool
    {
        return $this->has('edition');
    }

    public function unsetEdition(): self
    {
        return $this->remove('edition');
    }

    /**
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->get('author');
    }

    /**
     * @param string|null $value
     */
    public function setAuthor($value): self
    {
        return $this->set('author', $value);
    }

    public function hasAuthor(): bool
    {
        return $this->has('author');
    }

    public function unsetAuthor(): self
    {
        return $this->remove('author');
    }

    /**
     * @return string|null
     */
    public function getVolume()
    {
        return $this->get('volume');
    }

    /**
     * @param string|null $value
     */
    public function setVolume($value): self
    {
        return $this->set('volume', $value);
    }

    public function hasVolume(): bool
    {
        return $this->has('volume');
    }

    public function unsetVolume(): self
    {
        return $this->remove('volume');
    }

    /**
     * @return string|null
     */
    public function getIssue()
    {
        return $this->get('issue');
    }

    /**
     * @param string|null $value
     */
    public function setIssue($value): self
    {
        return $this->set('issue', $value);
    }

    public function hasIssue(): bool
    {
        return $this->has('issue');
    }

    public function unsetIssue(): self
    {
        return $this->remove('issue');
    }

    /**
     * @return string|null
     */
    public function getFirstPage()
    {
        return $this->get('firstPage');
    }

    /**
     * @param string|null $value
     */
    public function setFirstPage($value): self
    {
        return $this->set('firstPage', $value);
    }

    public function hasFirstPage(): bool
    {
        return $this->has('firstPage');
    }

    public function unsetFirstPage(): self
    {
        return $this->remove('firstPage');
    }

    /**
     * @return string|null
     */
    public function getComponentNumber()
    {
        return $this->get('componentNumber');
    }

    /**
     * @param string|null $value
     */
    public function setComponentNumber($value): self
    {
        return $this->set('componentNumber', $value);
    }

    public function hasComponentNumber(): bool
    {
        return $this->has('componentNumber');
    }

    public function unsetComponentNumber(): self
    {
        return $this->remove('componentNumber');
    }

    /**
     * @return string|null
     */
    public function getStandardDesignator()
    {
        return $this->get('standardDesignator');
    }

    /**
     * @param string|null $value
     */
    public function setStandardDesignator($value): self
    {
        return $this->set('standardDesignator', $value);
    }

    public function hasStandardDesignator(): bool
    {
        return $this->has('standardDesignator');
    }

    public function unsetStandardDesignator(): self
    {
        return $this->remove('standardDesignator');
    }

    /**
     * @return string|null
     */
    public function getStandardsBodyName()
    {
        return $this->get('standardsBodyName');
    }

    /**
     * @param string|null $value
     */
    public function setStandardsBodyName($value): self
    {
        return $this->set('standardsBodyName', $value);
    }

    public function hasStandardsBodyName(): bool
    {
        return $this->has('standardsBodyName');
    }

    public function unsetStandardsBodyName(): self
    {
        return $this->remove('standardsBodyName');
    }

    /**
     * @return string|null
     */
    public function getStandardsBodyAcronym()
    {
        return $this->get('standardsBodyAcronym');
    }

    /**
     * @param string|null $value
     */
    public function setStandardsBodyAcronym($value): self
    {
        return $this->set('standardsBodyAcronym', $value);
    }

    public function hasStandardsBodyAcronym(): bool
    {
        return $this->has('standardsBodyAcronym');
    }

    public function unsetStandardsBodyAcronym(): self
    {
        return $this->remove('standardsBodyAcronym');
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
    public function getPublicationDate()
    {
        return $this->get('publicationDate');
    }

    /**
     * @param string|null $value
     */
    public function setPublicationDate($value): self
    {
        return $this->set('publicationDate', $value);
    }

    public function hasPublicationDate(): bool
    {
        return $this->has('publicationDate');
    }

    public function unsetPublicationDate(): self
    {
        return $this->remove('publicationDate');
    }

    /**
     * @return string|null
     */
    public function getRetrievalDate()
    {
        return $this->get('retrievalDate');
    }

    /**
     * @param string|null $value
     */
    public function setRetrievalDate($value): self
    {
        return $this->set('retrievalDate', $value);
    }

    public function hasRetrievalDate(): bool
    {
        return $this->has('retrievalDate');
    }

    public function unsetRetrievalDate(): self
    {
        return $this->remove('retrievalDate');
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

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Reference', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'referenceId',
                'description' => 'UUID of the reference.',
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
                'description' => 'UUID of the citing work.',
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
                'name' => 'referenceOrdinal',
                'description' => 'Number used to order references within a work\'s bibliography.',
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
                'name' => 'doi',
                'description' => 'Digital Object Identifier of the cited work as full URL.',
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
                'name' => 'unstructuredCitation',
                'description' => 'Full reference text. When the DOI of the cited work is not known this field is required, and may be used in conjunction with other structured data to help identify the cited work.',
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
                'name' => 'issn',
                'description' => 'ISSN of a series.',
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
                'name' => 'isbn',
                'description' => 'Book ISBN, when the cited work is a book or a chapter.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Isbn',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'journalTitle',
                'description' => 'Title of a journal, when the cited work is an article.',
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
                'name' => 'articleTitle',
                'description' => 'Journal article, conference paper, or book chapter title.',
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
                'name' => 'seriesTitle',
                'description' => 'Title of a book or conference series.',
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
                'name' => 'volumeTitle',
                'description' => 'Title of a book or conference proceeding.',
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
                'name' => 'edition',
                'description' => 'Book edition number.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'author',
                'description' => 'First author of the cited work.',
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
                'name' => 'volume',
                'description' => 'Volume number of a journal or book set.',
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
                'name' => 'issue',
                'description' => 'Journal issue, when the cited work is an article.',
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
                'name' => 'firstPage',
                'description' => 'First page of the cited page range.',
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
                'name' => 'componentNumber',
                'description' => 'The chapter, section or part number, when the cited work is a component of a book.',
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
                'name' => 'standardDesignator',
                'description' => 'Standard identifier (e.g. "14064-1"), when the cited work is a standard.',
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
                'name' => 'standardsBodyName',
                'description' => 'Full name of the standards organisation (e.g. "International Organization for Standardization"), when the cited work is a standard.',
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
                'name' => 'standardsBodyAcronym',
                'description' => 'Acronym of the standards organisation (e.g. "ISO"), when the cited work is a standard.',
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
                'name' => 'url',
                'description' => 'URL of the cited work.',
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
                'name' => 'publicationDate',
                'description' => 'Publication date of the cited work. Day and month should be set to "01" when only the publication year is known.',
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
                'name' => 'retrievalDate',
                'description' => 'Date the cited work was accessed, when citing a website or online article.',
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
                'name' => 'createdAt',
                'description' => 'Timestamp of the creation of this record within Thoth.',
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
                'description' => 'Timestamp of the last update to this record within Thoth.',
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
                'description' => 'The citing work.',
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
