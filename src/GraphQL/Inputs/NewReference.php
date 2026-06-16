<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewReference extends InputObject
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

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewReference', [
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
                'name' => 'referenceOrdinal',
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
                'name' => 'unstructuredCitation',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'issn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'isbn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Isbn',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'journalTitle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'articleTitle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'seriesTitle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'volumeTitle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'edition',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'author',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'volume',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'issue',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'firstPage',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'componentNumber',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'standardDesignator',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'standardsBodyName',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'standardsBodyAcronym',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
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
                'name' => 'publicationDate',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'retrievalDate',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
