<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Work extends ObjectData
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

    /**
     * @return string
     */
    public function getWorkType()
    {
        return $this->get('workType');
    }

    /**
     * @param string $value
     */
    public function setWorkType($value): self
    {
        return $this->set('workType', $value);
    }

    /**
     * @return string
     */
    public function getWorkStatus()
    {
        return $this->get('workStatus');
    }

    /**
     * @param string $value
     */
    public function setWorkStatus($value): self
    {
        return $this->set('workStatus', $value);
    }

    /**
     * @return string
     */
    public function getFullTitle()
    {
        return $this->get('fullTitle');
    }

    /**
     * @param string $value
     */
    public function setFullTitle($value): self
    {
        return $this->set('fullTitle', $value);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * @param string $value
     */
    public function setTitle($value): self
    {
        return $this->set('title', $value);
    }

    /**
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->get('subtitle');
    }

    /**
     * @param string|null $value
     */
    public function setSubtitle($value): self
    {
        return $this->set('subtitle', $value);
    }

    /**
     * @return string|null
     */
    public function getShortAbstract()
    {
        return $this->get('shortAbstract');
    }

    /**
     * @param string|null $value
     */
    public function setShortAbstract($value): self
    {
        return $this->set('shortAbstract', $value);
    }

    /**
     * @return string|null
     */
    public function getLongAbstract()
    {
        return $this->get('longAbstract');
    }

    /**
     * @param string|null $value
     */
    public function setLongAbstract($value): self
    {
        return $this->set('longAbstract', $value);
    }

    /**
     * @return Title[]
     */
    public function getTitles()
    {
        return $this->get('titles');
    }

    /**
     * @param Title[] $value
     */
    public function setTitles($value): self
    {
        return $this->set('titles', $value);
    }

    /**
     * @return GraphQLAbstract[]
     */
    public function getAbstracts()
    {
        return $this->get('abstracts');
    }

    /**
     * @param GraphQLAbstract[] $value
     */
    public function setAbstracts($value): self
    {
        return $this->set('abstracts', $value);
    }

    /**
     * @return string|null
     */
    public function getReference()
    {
        return $this->get('reference');
    }

    /**
     * @param string|null $value
     */
    public function setReference($value): self
    {
        return $this->set('reference', $value);
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

    /**
     * @return string
     */
    public function getImprintId()
    {
        return $this->get('imprintId');
    }

    /**
     * @param string $value
     */
    public function setImprintId($value): self
    {
        return $this->set('imprintId', $value);
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

    /**
     * @return string|null
     */
    public function getWithdrawnDate()
    {
        return $this->get('withdrawnDate');
    }

    /**
     * @param string|null $value
     */
    public function setWithdrawnDate($value): self
    {
        return $this->set('withdrawnDate', $value);
    }

    /**
     * @return string|null
     */
    public function getPlace()
    {
        return $this->get('place');
    }

    /**
     * @param string|null $value
     */
    public function setPlace($value): self
    {
        return $this->set('place', $value);
    }

    /**
     * @return int|null
     */
    public function getPageCount()
    {
        return $this->get('pageCount');
    }

    /**
     * @param int|null $value
     */
    public function setPageCount($value): self
    {
        return $this->set('pageCount', $value);
    }

    /**
     * @return string|null
     */
    public function getPageBreakdown()
    {
        return $this->get('pageBreakdown');
    }

    /**
     * @param string|null $value
     */
    public function setPageBreakdown($value): self
    {
        return $this->set('pageBreakdown', $value);
    }

    /**
     * @return int|null
     */
    public function getImageCount()
    {
        return $this->get('imageCount');
    }

    /**
     * @param int|null $value
     */
    public function setImageCount($value): self
    {
        return $this->set('imageCount', $value);
    }

    /**
     * @return int|null
     */
    public function getTableCount()
    {
        return $this->get('tableCount');
    }

    /**
     * @param int|null $value
     */
    public function setTableCount($value): self
    {
        return $this->set('tableCount', $value);
    }

    /**
     * @return int|null
     */
    public function getAudioCount()
    {
        return $this->get('audioCount');
    }

    /**
     * @param int|null $value
     */
    public function setAudioCount($value): self
    {
        return $this->set('audioCount', $value);
    }

    /**
     * @return int|null
     */
    public function getVideoCount()
    {
        return $this->get('videoCount');
    }

    /**
     * @param int|null $value
     */
    public function setVideoCount($value): self
    {
        return $this->set('videoCount', $value);
    }

    /**
     * @return string|null
     */
    public function getLicense()
    {
        return $this->get('license');
    }

    /**
     * @param string|null $value
     */
    public function setLicense($value): self
    {
        return $this->set('license', $value);
    }

    /**
     * @return string|null
     */
    public function getCopyrightHolder()
    {
        return $this->get('copyrightHolder');
    }

    /**
     * @param string|null $value
     */
    public function setCopyrightHolder($value): self
    {
        return $this->set('copyrightHolder', $value);
    }

    /**
     * @return string|null
     */
    public function getLandingPage()
    {
        return $this->get('landingPage');
    }

    /**
     * @param string|null $value
     */
    public function setLandingPage($value): self
    {
        return $this->set('landingPage', $value);
    }

    /**
     * @return string|null
     */
    public function getLccn()
    {
        return $this->get('lccn');
    }

    /**
     * @param string|null $value
     */
    public function setLccn($value): self
    {
        return $this->set('lccn', $value);
    }

    /**
     * @return string|null
     */
    public function getOclc()
    {
        return $this->get('oclc');
    }

    /**
     * @param string|null $value
     */
    public function setOclc($value): self
    {
        return $this->set('oclc', $value);
    }

    /**
     * @return string|null
     */
    public function getGeneralNote()
    {
        return $this->get('generalNote');
    }

    /**
     * @param string|null $value
     */
    public function setGeneralNote($value): self
    {
        return $this->set('generalNote', $value);
    }

    /**
     * @return string|null
     */
    public function getBibliographyNote()
    {
        return $this->get('bibliographyNote');
    }

    /**
     * @param string|null $value
     */
    public function setBibliographyNote($value): self
    {
        return $this->set('bibliographyNote', $value);
    }

    /**
     * @return string|null
     */
    public function getToc()
    {
        return $this->get('toc');
    }

    /**
     * @param string|null $value
     */
    public function setToc($value): self
    {
        return $this->set('toc', $value);
    }

    /**
     * @return string|null
     */
    public function getResourcesDescription()
    {
        return $this->get('resourcesDescription');
    }

    /**
     * @param string|null $value
     */
    public function setResourcesDescription($value): self
    {
        return $this->set('resourcesDescription', $value);
    }

    /**
     * @return string|null
     */
    public function getCoverUrl()
    {
        return $this->get('coverUrl');
    }

    /**
     * @param string|null $value
     */
    public function setCoverUrl($value): self
    {
        return $this->set('coverUrl', $value);
    }

    /**
     * @return string|null
     */
    public function getCoverCaption()
    {
        return $this->get('coverCaption');
    }

    /**
     * @param string|null $value
     */
    public function setCoverCaption($value): self
    {
        return $this->set('coverCaption', $value);
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

    /**
     * @return string|null
     */
    public function getLastPage()
    {
        return $this->get('lastPage');
    }

    /**
     * @param string|null $value
     */
    public function setLastPage($value): self
    {
        return $this->set('lastPage', $value);
    }

    /**
     * @return string|null
     */
    public function getPageInterval()
    {
        return $this->get('pageInterval');
    }

    /**
     * @param string|null $value
     */
    public function setPageInterval($value): self
    {
        return $this->set('pageInterval', $value);
    }

    /**
     * @return string
     */
    public function getUpdatedAtWithRelations()
    {
        return $this->get('updatedAtWithRelations');
    }

    /**
     * @param string $value
     */
    public function setUpdatedAtWithRelations($value): self
    {
        return $this->set('updatedAtWithRelations', $value);
    }

    /**
     * @return Imprint
     */
    public function getImprint()
    {
        return $this->get('imprint');
    }

    /**
     * @param Imprint $value
     */
    public function setImprint($value): self
    {
        return $this->set('imprint', $value);
    }

    /**
     * @return Contribution[]
     */
    public function getContributions()
    {
        return $this->get('contributions');
    }

    /**
     * @param Contribution[] $value
     */
    public function setContributions($value): self
    {
        return $this->set('contributions', $value);
    }

    /**
     * @return Language[]
     */
    public function getLanguages()
    {
        return $this->get('languages');
    }

    /**
     * @param Language[] $value
     */
    public function setLanguages($value): self
    {
        return $this->set('languages', $value);
    }

    /**
     * @return Publication[]
     */
    public function getPublications()
    {
        return $this->get('publications');
    }

    /**
     * @param Publication[] $value
     */
    public function setPublications($value): self
    {
        return $this->set('publications', $value);
    }

    /**
     * @return Subject[]
     */
    public function getSubjects()
    {
        return $this->get('subjects');
    }

    /**
     * @param Subject[] $value
     */
    public function setSubjects($value): self
    {
        return $this->set('subjects', $value);
    }

    /**
     * @return Funding[]
     */
    public function getFundings()
    {
        return $this->get('fundings');
    }

    /**
     * @param Funding[] $value
     */
    public function setFundings($value): self
    {
        return $this->set('fundings', $value);
    }

    /**
     * @return Issue[]
     */
    public function getIssues()
    {
        return $this->get('issues');
    }

    /**
     * @param Issue[] $value
     */
    public function setIssues($value): self
    {
        return $this->set('issues', $value);
    }

    /**
     * @return WorkRelation[]
     */
    public function getRelations()
    {
        return $this->get('relations');
    }

    /**
     * @param WorkRelation[] $value
     */
    public function setRelations($value): self
    {
        return $this->set('relations', $value);
    }

    /**
     * @return File|null
     */
    public function getFrontcover()
    {
        return $this->get('frontcover');
    }

    /**
     * @param File|null $value
     */
    public function setFrontcover($value): self
    {
        return $this->set('frontcover', $value);
    }

    /**
     * @return Reference[]
     */
    public function getReferences()
    {
        return $this->get('references');
    }

    /**
     * @param Reference[] $value
     */
    public function setReferences($value): self
    {
        return $this->set('references', $value);
    }

    /**
     * @return WorkResource[]
     */
    public function getAdditionalResources()
    {
        return $this->get('additionalResources');
    }

    /**
     * @param WorkResource[] $value
     */
    public function setAdditionalResources($value): self
    {
        return $this->set('additionalResources', $value);
    }

    /**
     * @return Award[]
     */
    public function getAwards()
    {
        return $this->get('awards');
    }

    /**
     * @param Award[] $value
     */
    public function setAwards($value): self
    {
        return $this->set('awards', $value);
    }

    /**
     * @return Endorsement[]
     */
    public function getEndorsements()
    {
        return $this->get('endorsements');
    }

    /**
     * @param Endorsement[] $value
     */
    public function setEndorsements($value): self
    {
        return $this->set('endorsements', $value);
    }

    /**
     * @return BookReview[]
     */
    public function getBookReviews()
    {
        return $this->get('bookReviews');
    }

    /**
     * @param BookReview[] $value
     */
    public function setBookReviews($value): self
    {
        return $this->set('bookReviews', $value);
    }

    /**
     * @return WorkFeaturedVideo|null
     */
    public function getFeaturedVideo()
    {
        return $this->get('featuredVideo');
    }

    /**
     * @param WorkFeaturedVideo|null $value
     */
    public function setFeaturedVideo($value): self
    {
        return $this->set('featuredVideo', $value);
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Work', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => 'Thoth ID of the work',
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
                'name' => 'workType',
                'description' => 'Type of the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'WorkType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workStatus',
                'description' => 'Publication status of the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'WorkStatus',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fullTitle',
                'description' => 'Concatenation of title and subtitle with punctuation mark',
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
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `titles` field instead to get the correct full title in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'title',
                'description' => 'Main title of the work (excluding subtitle)',
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
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `titles` field instead to get the correct title in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'subtitle',
                'description' => 'Secondary title of the work (excluding main title)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `titles` field instead to get the correct sub_title in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'shortAbstract',
                'description' => 'Short abstract of the work. Where a work has two different versions of the abstract, the truncated version should be entered here. Otherwise, it can be left blank. This field is not output in metadata formats; where relevant, Long Abstract is used instead.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `abstracts` field instead to get the correct short abstract in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'longAbstract',
                'description' => 'Abstract of the work. Where a work has only one abstract, it should be entered here, and Short Abstract can be left blank. Long Abstract is output in metadata formats, and Short Abstract is not.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `abstracts` field instead to get the correct long abstract in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'titles',
                'description' => 'Query titles by work ID',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on title_, subtitle, full_title fields',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'TitleOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "CANONICAL", direction: "DESC"}',
                    ],
                    [
                        'name' => 'localeCodes',
                        'description' => 'If set, only shows results with these locale codes',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LocaleCode',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'markupFormat',
                        'description' => 'If set, only shows results with this markup format',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Title',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'abstracts',
                'description' => 'Query abstracts by work ID',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on title_, subtitle, full_title fields',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'AbstractOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "CANONICAL", direction: "DESC"}',
                    ],
                    [
                        'name' => 'localeCodes',
                        'description' => 'If set, only shows results with these locale codes',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LocaleCode',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'markupFormat',
                        'description' => 'If set, only shows results with this markup format',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Abstract',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'reference',
                'description' => 'Internal reference code',
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
                'description' => 'Edition number of the work (not applicable to chapters)',
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
                'name' => 'imprintId',
                'description' => 'Thoth ID of the work\'s imprint',
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
                'name' => 'doi',
                'description' => 'Digital Object Identifier of the work as full URL, using the HTTPS scheme and the doi.org domain (e.g. https://doi.org/10.11647/obp.0001)',
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
                'name' => 'publicationDate',
                'description' => 'Date the work was published',
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
                'name' => 'withdrawnDate',
                'description' => 'Date the work was withdrawn from publication. Only applies to out of print and withdrawn works.',
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
                'name' => 'place',
                'description' => 'Place of publication of the work',
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
                'name' => 'pageCount',
                'description' => 'Total number of pages in the work. In most cases, unnumbered pages (e.g. endpapers) should be omitted from this count.',
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
                'name' => 'pageBreakdown',
                'description' => 'Breakdown of work\'s page count into front matter, main content, and/or back matter (e.g. \'xi + 140\')',
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
                'name' => 'imageCount',
                'description' => 'Total number of images in the work',
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
                'name' => 'tableCount',
                'description' => 'Total number of tables in the work',
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
                'name' => 'audioCount',
                'description' => 'Total number of audio fragments in the work',
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
                'name' => 'videoCount',
                'description' => 'Total number of video fragments in the work',
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
                'name' => 'license',
                'description' => 'URL of the license which applies to this work (frequently a Creative Commons license for open-access works)',
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
                'name' => 'copyrightHolder',
                'description' => 'Copyright holder of the work',
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
                'name' => 'landingPage',
                'description' => 'URL of the web page of the work',
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
                'name' => 'lccn',
                'description' => 'Library of Congress Control Number of the work (not applicable to chapters)',
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
                'name' => 'oclc',
                'description' => 'OCLC (WorldCat) Control Number of the work (not applicable to chapters)',
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
                'name' => 'generalNote',
                'description' => 'A general-purpose field used to include information that does not have a specific designated field',
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
                'name' => 'bibliographyNote',
                'description' => 'Indicates that the work contains a bibliography or other similar information',
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
                'name' => 'toc',
                'description' => 'Table of contents of the work (not applicable to chapters)',
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
                'name' => 'resourcesDescription',
                'description' => 'Description of additional resources linked to this work',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering resources description',
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
                'name' => 'coverUrl',
                'description' => 'URL of the work\'s cover image',
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
                'name' => 'coverCaption',
                'description' => 'Caption describing the work\'s cover image',
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
                'name' => 'createdAt',
                'description' => 'Date and time at which the work record was created',
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
                'description' => 'Date and time at which the work record was last updated',
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
                'name' => 'firstPage',
                'description' => 'Page number on which the work begins (only applicable to chapters)',
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
                'name' => 'lastPage',
                'description' => 'Page number on which the work ends (only applicable to chapters)',
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
                'name' => 'pageInterval',
                'description' => 'Concatenation of first page and last page with dash (only applicable to chapters)',
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
                'name' => 'updatedAtWithRelations',
                'description' => 'Date and time at which the work record or any of its linked records was last updated',
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
                'name' => 'imprint',
                'description' => 'Get this work\'s imprint',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Imprint',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'contributions',
                'description' => 'Get contributions linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'ContributionOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "CONTRIBUTION_TYPE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'contributionTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'ContributionType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Contribution',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'languages',
                'description' => 'Get languages linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'LanguageOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "LANGUAGE_CODE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'languageCodes',
                        'description' => 'Specific languages to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LanguageCode',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'languageRelation',
                        'description' => '(deprecated) A specific relation to filter by',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'LanguageRelation',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'languageRelations',
                        'description' => 'Specific relations to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LanguageRelation',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Language',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publications',
                'description' => 'Get publications linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on isbn',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'PublicationOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "PUBLICATION_TYPE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'publicationTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'PublicationType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Publication',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'subjects',
                'description' => 'Get subjects linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on subject_code',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'SubjectOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "SUBJECT_TYPE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'subjectTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'SubjectType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Subject',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fundings',
                'description' => 'Get fundings linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'FundingOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "PROGRAM", direction: "ASC"}',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Funding',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'issues',
                'description' => 'Get issues linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'IssueOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "ISSUE_ORDINAL", direction: "ASC"}',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Issue',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'relations',
                'description' => 'Get other works related to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'WorkRelationOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "RELATION_TYPE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'relationTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'RelationType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'WorkRelation',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'frontcover',
                'description' => 'Get the front cover file for this work',
                'args' => [],
                'type' => [
                    'kind' => 'OBJECT',
                    'name' => 'File',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'references',
                'description' => 'Get references cited by this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on doi, unstructured_citation, issn, isbn, journal_title, article_title, series_title, volume_title, author, standard_designator, standards_body_name, and standards_body_acronym',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'ReferenceOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "REFERENCE_ORDINAL", direction: "ASC"}',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Reference',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'additionalResources',
                'description' => 'Get additional resources linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '50',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering textual fields',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'WorkResource',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'awards',
                'description' => 'Get awards linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '50',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Award',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'endorsements',
                'description' => 'Get endorsements linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '50',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Endorsement',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'bookReviews',
                'description' => 'Get book reviews linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '50',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'BookReview',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'featuredVideo',
                'description' => 'Get the featured video linked to this work',
                'args' => [],
                'type' => [
                    'kind' => 'OBJECT',
                    'name' => 'WorkFeaturedVideo',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
