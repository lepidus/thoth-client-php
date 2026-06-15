<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Reference extends ObjectData
{
    public function getReferenceId()
    {
        return $this->get('referenceId');
    }

    public function setReferenceId($value): self
    {
        return $this->set('referenceId', $value);
    }

    public function getWorkId()
    {
        return $this->get('workId');
    }

    public function setWorkId($value): self
    {
        return $this->set('workId', $value);
    }

    public function getReferenceOrdinal()
    {
        return $this->get('referenceOrdinal');
    }

    public function setReferenceOrdinal($value): self
    {
        return $this->set('referenceOrdinal', $value);
    }

    public function getDoi()
    {
        return $this->get('doi');
    }

    public function setDoi($value): self
    {
        return $this->set('doi', $value);
    }

    public function getUnstructuredCitation()
    {
        return $this->get('unstructuredCitation');
    }

    public function setUnstructuredCitation($value): self
    {
        return $this->set('unstructuredCitation', $value);
    }

    public function getIssn()
    {
        return $this->get('issn');
    }

    public function setIssn($value): self
    {
        return $this->set('issn', $value);
    }

    public function getIsbn()
    {
        return $this->get('isbn');
    }

    public function setIsbn($value): self
    {
        return $this->set('isbn', $value);
    }

    public function getJournalTitle()
    {
        return $this->get('journalTitle');
    }

    public function setJournalTitle($value): self
    {
        return $this->set('journalTitle', $value);
    }

    public function getArticleTitle()
    {
        return $this->get('articleTitle');
    }

    public function setArticleTitle($value): self
    {
        return $this->set('articleTitle', $value);
    }

    public function getSeriesTitle()
    {
        return $this->get('seriesTitle');
    }

    public function setSeriesTitle($value): self
    {
        return $this->set('seriesTitle', $value);
    }

    public function getVolumeTitle()
    {
        return $this->get('volumeTitle');
    }

    public function setVolumeTitle($value): self
    {
        return $this->set('volumeTitle', $value);
    }

    public function getEdition()
    {
        return $this->get('edition');
    }

    public function setEdition($value): self
    {
        return $this->set('edition', $value);
    }

    public function getAuthor()
    {
        return $this->get('author');
    }

    public function setAuthor($value): self
    {
        return $this->set('author', $value);
    }

    public function getVolume()
    {
        return $this->get('volume');
    }

    public function setVolume($value): self
    {
        return $this->set('volume', $value);
    }

    public function getIssue()
    {
        return $this->get('issue');
    }

    public function setIssue($value): self
    {
        return $this->set('issue', $value);
    }

    public function getFirstPage()
    {
        return $this->get('firstPage');
    }

    public function setFirstPage($value): self
    {
        return $this->set('firstPage', $value);
    }

    public function getComponentNumber()
    {
        return $this->get('componentNumber');
    }

    public function setComponentNumber($value): self
    {
        return $this->set('componentNumber', $value);
    }

    public function getStandardDesignator()
    {
        return $this->get('standardDesignator');
    }

    public function setStandardDesignator($value): self
    {
        return $this->set('standardDesignator', $value);
    }

    public function getStandardsBodyName()
    {
        return $this->get('standardsBodyName');
    }

    public function setStandardsBodyName($value): self
    {
        return $this->set('standardsBodyName', $value);
    }

    public function getStandardsBodyAcronym()
    {
        return $this->get('standardsBodyAcronym');
    }

    public function setStandardsBodyAcronym($value): self
    {
        return $this->set('standardsBodyAcronym', $value);
    }

    public function getUrl()
    {
        return $this->get('url');
    }

    public function setUrl($value): self
    {
        return $this->set('url', $value);
    }

    public function getPublicationDate()
    {
        return $this->get('publicationDate');
    }

    public function setPublicationDate($value): self
    {
        return $this->set('publicationDate', $value);
    }

    public function getRetrievalDate()
    {
        return $this->get('retrievalDate');
    }

    public function setRetrievalDate($value): self
    {
        return $this->set('retrievalDate', $value);
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
