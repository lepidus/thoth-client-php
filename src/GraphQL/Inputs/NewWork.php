<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewWork extends InputObject
{
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

    public function hasWorkType(): bool
    {
        return $this->has('workType');
    }

    public function unsetWorkType(): self
    {
        return $this->remove('workType');
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

    public function hasWorkStatus(): bool
    {
        return $this->has('workStatus');
    }

    public function unsetWorkStatus(): self
    {
        return $this->remove('workStatus');
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

    public function hasReference(): bool
    {
        return $this->has('reference');
    }

    public function unsetReference(): self
    {
        return $this->remove('reference');
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

    public function hasImprintId(): bool
    {
        return $this->has('imprintId');
    }

    public function unsetImprintId(): self
    {
        return $this->remove('imprintId');
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

    public function hasWithdrawnDate(): bool
    {
        return $this->has('withdrawnDate');
    }

    public function unsetWithdrawnDate(): self
    {
        return $this->remove('withdrawnDate');
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

    public function hasPlace(): bool
    {
        return $this->has('place');
    }

    public function unsetPlace(): self
    {
        return $this->remove('place');
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

    public function hasPageCount(): bool
    {
        return $this->has('pageCount');
    }

    public function unsetPageCount(): self
    {
        return $this->remove('pageCount');
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

    public function hasPageBreakdown(): bool
    {
        return $this->has('pageBreakdown');
    }

    public function unsetPageBreakdown(): self
    {
        return $this->remove('pageBreakdown');
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

    public function hasImageCount(): bool
    {
        return $this->has('imageCount');
    }

    public function unsetImageCount(): self
    {
        return $this->remove('imageCount');
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

    public function hasTableCount(): bool
    {
        return $this->has('tableCount');
    }

    public function unsetTableCount(): self
    {
        return $this->remove('tableCount');
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

    public function hasAudioCount(): bool
    {
        return $this->has('audioCount');
    }

    public function unsetAudioCount(): self
    {
        return $this->remove('audioCount');
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

    public function hasVideoCount(): bool
    {
        return $this->has('videoCount');
    }

    public function unsetVideoCount(): self
    {
        return $this->remove('videoCount');
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

    public function hasLicense(): bool
    {
        return $this->has('license');
    }

    public function unsetLicense(): self
    {
        return $this->remove('license');
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

    public function hasCopyrightHolder(): bool
    {
        return $this->has('copyrightHolder');
    }

    public function unsetCopyrightHolder(): self
    {
        return $this->remove('copyrightHolder');
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

    public function hasLandingPage(): bool
    {
        return $this->has('landingPage');
    }

    public function unsetLandingPage(): self
    {
        return $this->remove('landingPage');
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

    public function hasLccn(): bool
    {
        return $this->has('lccn');
    }

    public function unsetLccn(): self
    {
        return $this->remove('lccn');
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

    public function hasOclc(): bool
    {
        return $this->has('oclc');
    }

    public function unsetOclc(): self
    {
        return $this->remove('oclc');
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

    public function hasGeneralNote(): bool
    {
        return $this->has('generalNote');
    }

    public function unsetGeneralNote(): self
    {
        return $this->remove('generalNote');
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

    public function hasBibliographyNote(): bool
    {
        return $this->has('bibliographyNote');
    }

    public function unsetBibliographyNote(): self
    {
        return $this->remove('bibliographyNote');
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

    public function hasToc(): bool
    {
        return $this->has('toc');
    }

    public function unsetToc(): self
    {
        return $this->remove('toc');
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

    public function hasResourcesDescription(): bool
    {
        return $this->has('resourcesDescription');
    }

    public function unsetResourcesDescription(): self
    {
        return $this->remove('resourcesDescription');
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

    public function hasCoverUrl(): bool
    {
        return $this->has('coverUrl');
    }

    public function unsetCoverUrl(): self
    {
        return $this->remove('coverUrl');
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

    public function hasCoverCaption(): bool
    {
        return $this->has('coverCaption');
    }

    public function unsetCoverCaption(): self
    {
        return $this->remove('coverCaption');
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

    public function hasLastPage(): bool
    {
        return $this->has('lastPage');
    }

    public function unsetLastPage(): self
    {
        return $this->remove('lastPage');
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

    public function hasPageInterval(): bool
    {
        return $this->has('pageInterval');
    }

    public function unsetPageInterval(): self
    {
        return $this->remove('pageInterval');
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewWork', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'workType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'WorkType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'workStatus',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'WorkStatus',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'reference',
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
                'name' => 'imprintId',
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
                'name' => 'withdrawnDate',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'place',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'pageCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'pageBreakdown',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'imageCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'tableCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'audioCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'videoCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'license',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'copyrightHolder',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'landingPage',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'lccn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'oclc',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'generalNote',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'bibliographyNote',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'toc',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'resourcesDescription',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'coverUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'coverCaption',
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
                'name' => 'lastPage',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'pageInterval',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
