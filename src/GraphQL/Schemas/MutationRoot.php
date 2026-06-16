<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class MutationRoot extends ObjectData
{
    /**
     * @return Work
     */
    public function getCreateWork()
    {
        return $this->get('createWork');
    }

    /**
     * @param Work $value
     */
    public function setCreateWork($value): self
    {
        $this->set('createWork', $value);
        return $this;
    }

    public function hasCreateWork(): bool
    {
        return $this->has('createWork');
    }

    public function unsetCreateWork(): self
    {
        $this->remove('createWork');
        return $this;
    }

    /**
     * @return Publisher
     */
    public function getCreatePublisher()
    {
        return $this->get('createPublisher');
    }

    /**
     * @param Publisher $value
     */
    public function setCreatePublisher($value): self
    {
        $this->set('createPublisher', $value);
        return $this;
    }

    public function hasCreatePublisher(): bool
    {
        return $this->has('createPublisher');
    }

    public function unsetCreatePublisher(): self
    {
        $this->remove('createPublisher');
        return $this;
    }

    /**
     * @return Imprint
     */
    public function getCreateImprint()
    {
        return $this->get('createImprint');
    }

    /**
     * @param Imprint $value
     */
    public function setCreateImprint($value): self
    {
        $this->set('createImprint', $value);
        return $this;
    }

    public function hasCreateImprint(): bool
    {
        return $this->has('createImprint');
    }

    public function unsetCreateImprint(): self
    {
        $this->remove('createImprint');
        return $this;
    }

    /**
     * @return Contributor
     */
    public function getCreateContributor()
    {
        return $this->get('createContributor');
    }

    /**
     * @param Contributor $value
     */
    public function setCreateContributor($value): self
    {
        $this->set('createContributor', $value);
        return $this;
    }

    public function hasCreateContributor(): bool
    {
        return $this->has('createContributor');
    }

    public function unsetCreateContributor(): self
    {
        $this->remove('createContributor');
        return $this;
    }

    /**
     * @return Contribution
     */
    public function getCreateContribution()
    {
        return $this->get('createContribution');
    }

    /**
     * @param Contribution $value
     */
    public function setCreateContribution($value): self
    {
        $this->set('createContribution', $value);
        return $this;
    }

    public function hasCreateContribution(): bool
    {
        return $this->has('createContribution');
    }

    public function unsetCreateContribution(): self
    {
        $this->remove('createContribution');
        return $this;
    }

    /**
     * @return Publication
     */
    public function getCreatePublication()
    {
        return $this->get('createPublication');
    }

    /**
     * @param Publication $value
     */
    public function setCreatePublication($value): self
    {
        $this->set('createPublication', $value);
        return $this;
    }

    public function hasCreatePublication(): bool
    {
        return $this->has('createPublication');
    }

    public function unsetCreatePublication(): self
    {
        $this->remove('createPublication');
        return $this;
    }

    /**
     * @return Series
     */
    public function getCreateSeries()
    {
        return $this->get('createSeries');
    }

    /**
     * @param Series $value
     */
    public function setCreateSeries($value): self
    {
        $this->set('createSeries', $value);
        return $this;
    }

    public function hasCreateSeries(): bool
    {
        return $this->has('createSeries');
    }

    public function unsetCreateSeries(): self
    {
        $this->remove('createSeries');
        return $this;
    }

    /**
     * @return Issue
     */
    public function getCreateIssue()
    {
        return $this->get('createIssue');
    }

    /**
     * @param Issue $value
     */
    public function setCreateIssue($value): self
    {
        $this->set('createIssue', $value);
        return $this;
    }

    public function hasCreateIssue(): bool
    {
        return $this->has('createIssue');
    }

    public function unsetCreateIssue(): self
    {
        $this->remove('createIssue');
        return $this;
    }

    /**
     * @return Language
     */
    public function getCreateLanguage()
    {
        return $this->get('createLanguage');
    }

    /**
     * @param Language $value
     */
    public function setCreateLanguage($value): self
    {
        $this->set('createLanguage', $value);
        return $this;
    }

    public function hasCreateLanguage(): bool
    {
        return $this->has('createLanguage');
    }

    public function unsetCreateLanguage(): self
    {
        $this->remove('createLanguage');
        return $this;
    }

    /**
     * @return Title
     */
    public function getCreateTitle()
    {
        return $this->get('createTitle');
    }

    /**
     * @param Title $value
     */
    public function setCreateTitle($value): self
    {
        $this->set('createTitle', $value);
        return $this;
    }

    public function hasCreateTitle(): bool
    {
        return $this->has('createTitle');
    }

    public function unsetCreateTitle(): self
    {
        $this->remove('createTitle');
        return $this;
    }

    /**
     * @return GraphQLAbstract
     */
    public function getCreateAbstract()
    {
        return $this->get('createAbstract');
    }

    /**
     * @param GraphQLAbstract $value
     */
    public function setCreateAbstract($value): self
    {
        $this->set('createAbstract', $value);
        return $this;
    }

    public function hasCreateAbstract(): bool
    {
        return $this->has('createAbstract');
    }

    public function unsetCreateAbstract(): self
    {
        $this->remove('createAbstract');
        return $this;
    }

    /**
     * @return Biography
     */
    public function getCreateBiography()
    {
        return $this->get('createBiography');
    }

    /**
     * @param Biography $value
     */
    public function setCreateBiography($value): self
    {
        $this->set('createBiography', $value);
        return $this;
    }

    public function hasCreateBiography(): bool
    {
        return $this->has('createBiography');
    }

    public function unsetCreateBiography(): self
    {
        $this->remove('createBiography');
        return $this;
    }

    /**
     * @return Institution
     */
    public function getCreateInstitution()
    {
        return $this->get('createInstitution');
    }

    /**
     * @param Institution $value
     */
    public function setCreateInstitution($value): self
    {
        $this->set('createInstitution', $value);
        return $this;
    }

    public function hasCreateInstitution(): bool
    {
        return $this->has('createInstitution');
    }

    public function unsetCreateInstitution(): self
    {
        $this->remove('createInstitution');
        return $this;
    }

    /**
     * @return Funding
     */
    public function getCreateFunding()
    {
        return $this->get('createFunding');
    }

    /**
     * @param Funding $value
     */
    public function setCreateFunding($value): self
    {
        $this->set('createFunding', $value);
        return $this;
    }

    public function hasCreateFunding(): bool
    {
        return $this->has('createFunding');
    }

    public function unsetCreateFunding(): self
    {
        $this->remove('createFunding');
        return $this;
    }

    /**
     * @return Location
     */
    public function getCreateLocation()
    {
        return $this->get('createLocation');
    }

    /**
     * @param Location $value
     */
    public function setCreateLocation($value): self
    {
        $this->set('createLocation', $value);
        return $this;
    }

    public function hasCreateLocation(): bool
    {
        return $this->has('createLocation');
    }

    public function unsetCreateLocation(): self
    {
        $this->remove('createLocation');
        return $this;
    }

    /**
     * @return Price
     */
    public function getCreatePrice()
    {
        return $this->get('createPrice');
    }

    /**
     * @param Price $value
     */
    public function setCreatePrice($value): self
    {
        $this->set('createPrice', $value);
        return $this;
    }

    public function hasCreatePrice(): bool
    {
        return $this->has('createPrice');
    }

    public function unsetCreatePrice(): self
    {
        $this->remove('createPrice');
        return $this;
    }

    /**
     * @return Subject
     */
    public function getCreateSubject()
    {
        return $this->get('createSubject');
    }

    /**
     * @param Subject $value
     */
    public function setCreateSubject($value): self
    {
        $this->set('createSubject', $value);
        return $this;
    }

    public function hasCreateSubject(): bool
    {
        return $this->has('createSubject');
    }

    public function unsetCreateSubject(): self
    {
        $this->remove('createSubject');
        return $this;
    }

    /**
     * @return Affiliation
     */
    public function getCreateAffiliation()
    {
        return $this->get('createAffiliation');
    }

    /**
     * @param Affiliation $value
     */
    public function setCreateAffiliation($value): self
    {
        $this->set('createAffiliation', $value);
        return $this;
    }

    public function hasCreateAffiliation(): bool
    {
        return $this->has('createAffiliation');
    }

    public function unsetCreateAffiliation(): self
    {
        $this->remove('createAffiliation');
        return $this;
    }

    /**
     * @return WorkRelation
     */
    public function getCreateWorkRelation()
    {
        return $this->get('createWorkRelation');
    }

    /**
     * @param WorkRelation $value
     */
    public function setCreateWorkRelation($value): self
    {
        $this->set('createWorkRelation', $value);
        return $this;
    }

    public function hasCreateWorkRelation(): bool
    {
        return $this->has('createWorkRelation');
    }

    public function unsetCreateWorkRelation(): self
    {
        $this->remove('createWorkRelation');
        return $this;
    }

    /**
     * @return Reference
     */
    public function getCreateReference()
    {
        return $this->get('createReference');
    }

    /**
     * @param Reference $value
     */
    public function setCreateReference($value): self
    {
        $this->set('createReference', $value);
        return $this;
    }

    public function hasCreateReference(): bool
    {
        return $this->has('createReference');
    }

    public function unsetCreateReference(): self
    {
        $this->remove('createReference');
        return $this;
    }

    /**
     * @return WorkResource
     */
    public function getCreateAdditionalResource()
    {
        return $this->get('createAdditionalResource');
    }

    /**
     * @param WorkResource $value
     */
    public function setCreateAdditionalResource($value): self
    {
        $this->set('createAdditionalResource', $value);
        return $this;
    }

    public function hasCreateAdditionalResource(): bool
    {
        return $this->has('createAdditionalResource');
    }

    public function unsetCreateAdditionalResource(): self
    {
        $this->remove('createAdditionalResource');
        return $this;
    }

    /**
     * @return Award
     */
    public function getCreateAward()
    {
        return $this->get('createAward');
    }

    /**
     * @param Award $value
     */
    public function setCreateAward($value): self
    {
        $this->set('createAward', $value);
        return $this;
    }

    public function hasCreateAward(): bool
    {
        return $this->has('createAward');
    }

    public function unsetCreateAward(): self
    {
        $this->remove('createAward');
        return $this;
    }

    /**
     * @return Endorsement
     */
    public function getCreateEndorsement()
    {
        return $this->get('createEndorsement');
    }

    /**
     * @param Endorsement $value
     */
    public function setCreateEndorsement($value): self
    {
        $this->set('createEndorsement', $value);
        return $this;
    }

    public function hasCreateEndorsement(): bool
    {
        return $this->has('createEndorsement');
    }

    public function unsetCreateEndorsement(): self
    {
        $this->remove('createEndorsement');
        return $this;
    }

    /**
     * @return BookReview
     */
    public function getCreateBookReview()
    {
        return $this->get('createBookReview');
    }

    /**
     * @param BookReview $value
     */
    public function setCreateBookReview($value): self
    {
        $this->set('createBookReview', $value);
        return $this;
    }

    public function hasCreateBookReview(): bool
    {
        return $this->has('createBookReview');
    }

    public function unsetCreateBookReview(): self
    {
        $this->remove('createBookReview');
        return $this;
    }

    /**
     * @return WorkFeaturedVideo
     */
    public function getCreateWorkFeaturedVideo()
    {
        return $this->get('createWorkFeaturedVideo');
    }

    /**
     * @param WorkFeaturedVideo $value
     */
    public function setCreateWorkFeaturedVideo($value): self
    {
        $this->set('createWorkFeaturedVideo', $value);
        return $this;
    }

    public function hasCreateWorkFeaturedVideo(): bool
    {
        return $this->has('createWorkFeaturedVideo');
    }

    public function unsetCreateWorkFeaturedVideo(): self
    {
        $this->remove('createWorkFeaturedVideo');
        return $this;
    }

    /**
     * @return Contact
     */
    public function getCreateContact()
    {
        return $this->get('createContact');
    }

    /**
     * @param Contact $value
     */
    public function setCreateContact($value): self
    {
        $this->set('createContact', $value);
        return $this;
    }

    public function hasCreateContact(): bool
    {
        return $this->has('createContact');
    }

    public function unsetCreateContact(): self
    {
        $this->remove('createContact');
        return $this;
    }

    /**
     * @return Work
     */
    public function getUpdateWork()
    {
        return $this->get('updateWork');
    }

    /**
     * @param Work $value
     */
    public function setUpdateWork($value): self
    {
        $this->set('updateWork', $value);
        return $this;
    }

    public function hasUpdateWork(): bool
    {
        return $this->has('updateWork');
    }

    public function unsetUpdateWork(): self
    {
        $this->remove('updateWork');
        return $this;
    }

    /**
     * @return Publisher
     */
    public function getUpdatePublisher()
    {
        return $this->get('updatePublisher');
    }

    /**
     * @param Publisher $value
     */
    public function setUpdatePublisher($value): self
    {
        $this->set('updatePublisher', $value);
        return $this;
    }

    public function hasUpdatePublisher(): bool
    {
        return $this->has('updatePublisher');
    }

    public function unsetUpdatePublisher(): self
    {
        $this->remove('updatePublisher');
        return $this;
    }

    /**
     * @return Imprint
     */
    public function getUpdateImprint()
    {
        return $this->get('updateImprint');
    }

    /**
     * @param Imprint $value
     */
    public function setUpdateImprint($value): self
    {
        $this->set('updateImprint', $value);
        return $this;
    }

    public function hasUpdateImprint(): bool
    {
        return $this->has('updateImprint');
    }

    public function unsetUpdateImprint(): self
    {
        $this->remove('updateImprint');
        return $this;
    }

    /**
     * @return Contributor
     */
    public function getUpdateContributor()
    {
        return $this->get('updateContributor');
    }

    /**
     * @param Contributor $value
     */
    public function setUpdateContributor($value): self
    {
        $this->set('updateContributor', $value);
        return $this;
    }

    public function hasUpdateContributor(): bool
    {
        return $this->has('updateContributor');
    }

    public function unsetUpdateContributor(): self
    {
        $this->remove('updateContributor');
        return $this;
    }

    /**
     * @return Contribution
     */
    public function getUpdateContribution()
    {
        return $this->get('updateContribution');
    }

    /**
     * @param Contribution $value
     */
    public function setUpdateContribution($value): self
    {
        $this->set('updateContribution', $value);
        return $this;
    }

    public function hasUpdateContribution(): bool
    {
        return $this->has('updateContribution');
    }

    public function unsetUpdateContribution(): self
    {
        $this->remove('updateContribution');
        return $this;
    }

    /**
     * @return Publication
     */
    public function getUpdatePublication()
    {
        return $this->get('updatePublication');
    }

    /**
     * @param Publication $value
     */
    public function setUpdatePublication($value): self
    {
        $this->set('updatePublication', $value);
        return $this;
    }

    public function hasUpdatePublication(): bool
    {
        return $this->has('updatePublication');
    }

    public function unsetUpdatePublication(): self
    {
        $this->remove('updatePublication');
        return $this;
    }

    /**
     * @return Series
     */
    public function getUpdateSeries()
    {
        return $this->get('updateSeries');
    }

    /**
     * @param Series $value
     */
    public function setUpdateSeries($value): self
    {
        $this->set('updateSeries', $value);
        return $this;
    }

    public function hasUpdateSeries(): bool
    {
        return $this->has('updateSeries');
    }

    public function unsetUpdateSeries(): self
    {
        $this->remove('updateSeries');
        return $this;
    }

    /**
     * @return Issue
     */
    public function getUpdateIssue()
    {
        return $this->get('updateIssue');
    }

    /**
     * @param Issue $value
     */
    public function setUpdateIssue($value): self
    {
        $this->set('updateIssue', $value);
        return $this;
    }

    public function hasUpdateIssue(): bool
    {
        return $this->has('updateIssue');
    }

    public function unsetUpdateIssue(): self
    {
        $this->remove('updateIssue');
        return $this;
    }

    /**
     * @return Language
     */
    public function getUpdateLanguage()
    {
        return $this->get('updateLanguage');
    }

    /**
     * @param Language $value
     */
    public function setUpdateLanguage($value): self
    {
        $this->set('updateLanguage', $value);
        return $this;
    }

    public function hasUpdateLanguage(): bool
    {
        return $this->has('updateLanguage');
    }

    public function unsetUpdateLanguage(): self
    {
        $this->remove('updateLanguage');
        return $this;
    }

    /**
     * @return Institution
     */
    public function getUpdateInstitution()
    {
        return $this->get('updateInstitution');
    }

    /**
     * @param Institution $value
     */
    public function setUpdateInstitution($value): self
    {
        $this->set('updateInstitution', $value);
        return $this;
    }

    public function hasUpdateInstitution(): bool
    {
        return $this->has('updateInstitution');
    }

    public function unsetUpdateInstitution(): self
    {
        $this->remove('updateInstitution');
        return $this;
    }

    /**
     * @return Funding
     */
    public function getUpdateFunding()
    {
        return $this->get('updateFunding');
    }

    /**
     * @param Funding $value
     */
    public function setUpdateFunding($value): self
    {
        $this->set('updateFunding', $value);
        return $this;
    }

    public function hasUpdateFunding(): bool
    {
        return $this->has('updateFunding');
    }

    public function unsetUpdateFunding(): self
    {
        $this->remove('updateFunding');
        return $this;
    }

    /**
     * @return Location
     */
    public function getUpdateLocation()
    {
        return $this->get('updateLocation');
    }

    /**
     * @param Location $value
     */
    public function setUpdateLocation($value): self
    {
        $this->set('updateLocation', $value);
        return $this;
    }

    public function hasUpdateLocation(): bool
    {
        return $this->has('updateLocation');
    }

    public function unsetUpdateLocation(): self
    {
        $this->remove('updateLocation');
        return $this;
    }

    /**
     * @return Price
     */
    public function getUpdatePrice()
    {
        return $this->get('updatePrice');
    }

    /**
     * @param Price $value
     */
    public function setUpdatePrice($value): self
    {
        $this->set('updatePrice', $value);
        return $this;
    }

    public function hasUpdatePrice(): bool
    {
        return $this->has('updatePrice');
    }

    public function unsetUpdatePrice(): self
    {
        $this->remove('updatePrice');
        return $this;
    }

    /**
     * @return Subject
     */
    public function getUpdateSubject()
    {
        return $this->get('updateSubject');
    }

    /**
     * @param Subject $value
     */
    public function setUpdateSubject($value): self
    {
        $this->set('updateSubject', $value);
        return $this;
    }

    public function hasUpdateSubject(): bool
    {
        return $this->has('updateSubject');
    }

    public function unsetUpdateSubject(): self
    {
        $this->remove('updateSubject');
        return $this;
    }

    /**
     * @return Affiliation
     */
    public function getUpdateAffiliation()
    {
        return $this->get('updateAffiliation');
    }

    /**
     * @param Affiliation $value
     */
    public function setUpdateAffiliation($value): self
    {
        $this->set('updateAffiliation', $value);
        return $this;
    }

    public function hasUpdateAffiliation(): bool
    {
        return $this->has('updateAffiliation');
    }

    public function unsetUpdateAffiliation(): self
    {
        $this->remove('updateAffiliation');
        return $this;
    }

    /**
     * @return WorkRelation
     */
    public function getUpdateWorkRelation()
    {
        return $this->get('updateWorkRelation');
    }

    /**
     * @param WorkRelation $value
     */
    public function setUpdateWorkRelation($value): self
    {
        $this->set('updateWorkRelation', $value);
        return $this;
    }

    public function hasUpdateWorkRelation(): bool
    {
        return $this->has('updateWorkRelation');
    }

    public function unsetUpdateWorkRelation(): self
    {
        $this->remove('updateWorkRelation');
        return $this;
    }

    /**
     * @return Reference
     */
    public function getUpdateReference()
    {
        return $this->get('updateReference');
    }

    /**
     * @param Reference $value
     */
    public function setUpdateReference($value): self
    {
        $this->set('updateReference', $value);
        return $this;
    }

    public function hasUpdateReference(): bool
    {
        return $this->has('updateReference');
    }

    public function unsetUpdateReference(): self
    {
        $this->remove('updateReference');
        return $this;
    }

    /**
     * @return WorkResource
     */
    public function getUpdateAdditionalResource()
    {
        return $this->get('updateAdditionalResource');
    }

    /**
     * @param WorkResource $value
     */
    public function setUpdateAdditionalResource($value): self
    {
        $this->set('updateAdditionalResource', $value);
        return $this;
    }

    public function hasUpdateAdditionalResource(): bool
    {
        return $this->has('updateAdditionalResource');
    }

    public function unsetUpdateAdditionalResource(): self
    {
        $this->remove('updateAdditionalResource');
        return $this;
    }

    /**
     * @return Award
     */
    public function getUpdateAward()
    {
        return $this->get('updateAward');
    }

    /**
     * @param Award $value
     */
    public function setUpdateAward($value): self
    {
        $this->set('updateAward', $value);
        return $this;
    }

    public function hasUpdateAward(): bool
    {
        return $this->has('updateAward');
    }

    public function unsetUpdateAward(): self
    {
        $this->remove('updateAward');
        return $this;
    }

    /**
     * @return Endorsement
     */
    public function getUpdateEndorsement()
    {
        return $this->get('updateEndorsement');
    }

    /**
     * @param Endorsement $value
     */
    public function setUpdateEndorsement($value): self
    {
        $this->set('updateEndorsement', $value);
        return $this;
    }

    public function hasUpdateEndorsement(): bool
    {
        return $this->has('updateEndorsement');
    }

    public function unsetUpdateEndorsement(): self
    {
        $this->remove('updateEndorsement');
        return $this;
    }

    /**
     * @return BookReview
     */
    public function getUpdateBookReview()
    {
        return $this->get('updateBookReview');
    }

    /**
     * @param BookReview $value
     */
    public function setUpdateBookReview($value): self
    {
        $this->set('updateBookReview', $value);
        return $this;
    }

    public function hasUpdateBookReview(): bool
    {
        return $this->has('updateBookReview');
    }

    public function unsetUpdateBookReview(): self
    {
        $this->remove('updateBookReview');
        return $this;
    }

    /**
     * @return WorkFeaturedVideo
     */
    public function getUpdateWorkFeaturedVideo()
    {
        return $this->get('updateWorkFeaturedVideo');
    }

    /**
     * @param WorkFeaturedVideo $value
     */
    public function setUpdateWorkFeaturedVideo($value): self
    {
        $this->set('updateWorkFeaturedVideo', $value);
        return $this;
    }

    public function hasUpdateWorkFeaturedVideo(): bool
    {
        return $this->has('updateWorkFeaturedVideo');
    }

    public function unsetUpdateWorkFeaturedVideo(): self
    {
        $this->remove('updateWorkFeaturedVideo');
        return $this;
    }

    /**
     * @return Contact
     */
    public function getUpdateContact()
    {
        return $this->get('updateContact');
    }

    /**
     * @param Contact $value
     */
    public function setUpdateContact($value): self
    {
        $this->set('updateContact', $value);
        return $this;
    }

    public function hasUpdateContact(): bool
    {
        return $this->has('updateContact');
    }

    public function unsetUpdateContact(): self
    {
        $this->remove('updateContact');
        return $this;
    }

    /**
     * @return Title
     */
    public function getUpdateTitle()
    {
        return $this->get('updateTitle');
    }

    /**
     * @param Title $value
     */
    public function setUpdateTitle($value): self
    {
        $this->set('updateTitle', $value);
        return $this;
    }

    public function hasUpdateTitle(): bool
    {
        return $this->has('updateTitle');
    }

    public function unsetUpdateTitle(): self
    {
        $this->remove('updateTitle');
        return $this;
    }

    /**
     * @return GraphQLAbstract
     */
    public function getUpdateAbstract()
    {
        return $this->get('updateAbstract');
    }

    /**
     * @param GraphQLAbstract $value
     */
    public function setUpdateAbstract($value): self
    {
        $this->set('updateAbstract', $value);
        return $this;
    }

    public function hasUpdateAbstract(): bool
    {
        return $this->has('updateAbstract');
    }

    public function unsetUpdateAbstract(): self
    {
        $this->remove('updateAbstract');
        return $this;
    }

    /**
     * @return Biography
     */
    public function getUpdateBiography()
    {
        return $this->get('updateBiography');
    }

    /**
     * @param Biography $value
     */
    public function setUpdateBiography($value): self
    {
        $this->set('updateBiography', $value);
        return $this;
    }

    public function hasUpdateBiography(): bool
    {
        return $this->has('updateBiography');
    }

    public function unsetUpdateBiography(): self
    {
        $this->remove('updateBiography');
        return $this;
    }

    /**
     * @return Work
     */
    public function getDeleteWork()
    {
        return $this->get('deleteWork');
    }

    /**
     * @param Work $value
     */
    public function setDeleteWork($value): self
    {
        $this->set('deleteWork', $value);
        return $this;
    }

    public function hasDeleteWork(): bool
    {
        return $this->has('deleteWork');
    }

    public function unsetDeleteWork(): self
    {
        $this->remove('deleteWork');
        return $this;
    }

    /**
     * @return Publisher
     */
    public function getDeletePublisher()
    {
        return $this->get('deletePublisher');
    }

    /**
     * @param Publisher $value
     */
    public function setDeletePublisher($value): self
    {
        $this->set('deletePublisher', $value);
        return $this;
    }

    public function hasDeletePublisher(): bool
    {
        return $this->has('deletePublisher');
    }

    public function unsetDeletePublisher(): self
    {
        $this->remove('deletePublisher');
        return $this;
    }

    /**
     * @return Imprint
     */
    public function getDeleteImprint()
    {
        return $this->get('deleteImprint');
    }

    /**
     * @param Imprint $value
     */
    public function setDeleteImprint($value): self
    {
        $this->set('deleteImprint', $value);
        return $this;
    }

    public function hasDeleteImprint(): bool
    {
        return $this->has('deleteImprint');
    }

    public function unsetDeleteImprint(): self
    {
        $this->remove('deleteImprint');
        return $this;
    }

    /**
     * @return Contributor
     */
    public function getDeleteContributor()
    {
        return $this->get('deleteContributor');
    }

    /**
     * @param Contributor $value
     */
    public function setDeleteContributor($value): self
    {
        $this->set('deleteContributor', $value);
        return $this;
    }

    public function hasDeleteContributor(): bool
    {
        return $this->has('deleteContributor');
    }

    public function unsetDeleteContributor(): self
    {
        $this->remove('deleteContributor');
        return $this;
    }

    /**
     * @return Contribution
     */
    public function getDeleteContribution()
    {
        return $this->get('deleteContribution');
    }

    /**
     * @param Contribution $value
     */
    public function setDeleteContribution($value): self
    {
        $this->set('deleteContribution', $value);
        return $this;
    }

    public function hasDeleteContribution(): bool
    {
        return $this->has('deleteContribution');
    }

    public function unsetDeleteContribution(): self
    {
        $this->remove('deleteContribution');
        return $this;
    }

    /**
     * @return Publication
     */
    public function getDeletePublication()
    {
        return $this->get('deletePublication');
    }

    /**
     * @param Publication $value
     */
    public function setDeletePublication($value): self
    {
        $this->set('deletePublication', $value);
        return $this;
    }

    public function hasDeletePublication(): bool
    {
        return $this->has('deletePublication');
    }

    public function unsetDeletePublication(): self
    {
        $this->remove('deletePublication');
        return $this;
    }

    /**
     * @return Series
     */
    public function getDeleteSeries()
    {
        return $this->get('deleteSeries');
    }

    /**
     * @param Series $value
     */
    public function setDeleteSeries($value): self
    {
        $this->set('deleteSeries', $value);
        return $this;
    }

    public function hasDeleteSeries(): bool
    {
        return $this->has('deleteSeries');
    }

    public function unsetDeleteSeries(): self
    {
        $this->remove('deleteSeries');
        return $this;
    }

    /**
     * @return Issue
     */
    public function getDeleteIssue()
    {
        return $this->get('deleteIssue');
    }

    /**
     * @param Issue $value
     */
    public function setDeleteIssue($value): self
    {
        $this->set('deleteIssue', $value);
        return $this;
    }

    public function hasDeleteIssue(): bool
    {
        return $this->has('deleteIssue');
    }

    public function unsetDeleteIssue(): self
    {
        $this->remove('deleteIssue');
        return $this;
    }

    /**
     * @return Language
     */
    public function getDeleteLanguage()
    {
        return $this->get('deleteLanguage');
    }

    /**
     * @param Language $value
     */
    public function setDeleteLanguage($value): self
    {
        $this->set('deleteLanguage', $value);
        return $this;
    }

    public function hasDeleteLanguage(): bool
    {
        return $this->has('deleteLanguage');
    }

    public function unsetDeleteLanguage(): self
    {
        $this->remove('deleteLanguage');
        return $this;
    }

    /**
     * @return Title
     */
    public function getDeleteTitle()
    {
        return $this->get('deleteTitle');
    }

    /**
     * @param Title $value
     */
    public function setDeleteTitle($value): self
    {
        $this->set('deleteTitle', $value);
        return $this;
    }

    public function hasDeleteTitle(): bool
    {
        return $this->has('deleteTitle');
    }

    public function unsetDeleteTitle(): self
    {
        $this->remove('deleteTitle');
        return $this;
    }

    /**
     * @return Institution
     */
    public function getDeleteInstitution()
    {
        return $this->get('deleteInstitution');
    }

    /**
     * @param Institution $value
     */
    public function setDeleteInstitution($value): self
    {
        $this->set('deleteInstitution', $value);
        return $this;
    }

    public function hasDeleteInstitution(): bool
    {
        return $this->has('deleteInstitution');
    }

    public function unsetDeleteInstitution(): self
    {
        $this->remove('deleteInstitution');
        return $this;
    }

    /**
     * @return Funding
     */
    public function getDeleteFunding()
    {
        return $this->get('deleteFunding');
    }

    /**
     * @param Funding $value
     */
    public function setDeleteFunding($value): self
    {
        $this->set('deleteFunding', $value);
        return $this;
    }

    public function hasDeleteFunding(): bool
    {
        return $this->has('deleteFunding');
    }

    public function unsetDeleteFunding(): self
    {
        $this->remove('deleteFunding');
        return $this;
    }

    /**
     * @return Location
     */
    public function getDeleteLocation()
    {
        return $this->get('deleteLocation');
    }

    /**
     * @param Location $value
     */
    public function setDeleteLocation($value): self
    {
        $this->set('deleteLocation', $value);
        return $this;
    }

    public function hasDeleteLocation(): bool
    {
        return $this->has('deleteLocation');
    }

    public function unsetDeleteLocation(): self
    {
        $this->remove('deleteLocation');
        return $this;
    }

    /**
     * @return Price
     */
    public function getDeletePrice()
    {
        return $this->get('deletePrice');
    }

    /**
     * @param Price $value
     */
    public function setDeletePrice($value): self
    {
        $this->set('deletePrice', $value);
        return $this;
    }

    public function hasDeletePrice(): bool
    {
        return $this->has('deletePrice');
    }

    public function unsetDeletePrice(): self
    {
        $this->remove('deletePrice');
        return $this;
    }

    /**
     * @return Subject
     */
    public function getDeleteSubject()
    {
        return $this->get('deleteSubject');
    }

    /**
     * @param Subject $value
     */
    public function setDeleteSubject($value): self
    {
        $this->set('deleteSubject', $value);
        return $this;
    }

    public function hasDeleteSubject(): bool
    {
        return $this->has('deleteSubject');
    }

    public function unsetDeleteSubject(): self
    {
        $this->remove('deleteSubject');
        return $this;
    }

    /**
     * @return Affiliation
     */
    public function getDeleteAffiliation()
    {
        return $this->get('deleteAffiliation');
    }

    /**
     * @param Affiliation $value
     */
    public function setDeleteAffiliation($value): self
    {
        $this->set('deleteAffiliation', $value);
        return $this;
    }

    public function hasDeleteAffiliation(): bool
    {
        return $this->has('deleteAffiliation');
    }

    public function unsetDeleteAffiliation(): self
    {
        $this->remove('deleteAffiliation');
        return $this;
    }

    /**
     * @return WorkRelation
     */
    public function getDeleteWorkRelation()
    {
        return $this->get('deleteWorkRelation');
    }

    /**
     * @param WorkRelation $value
     */
    public function setDeleteWorkRelation($value): self
    {
        $this->set('deleteWorkRelation', $value);
        return $this;
    }

    public function hasDeleteWorkRelation(): bool
    {
        return $this->has('deleteWorkRelation');
    }

    public function unsetDeleteWorkRelation(): self
    {
        $this->remove('deleteWorkRelation');
        return $this;
    }

    /**
     * @return Reference
     */
    public function getDeleteReference()
    {
        return $this->get('deleteReference');
    }

    /**
     * @param Reference $value
     */
    public function setDeleteReference($value): self
    {
        $this->set('deleteReference', $value);
        return $this;
    }

    public function hasDeleteReference(): bool
    {
        return $this->has('deleteReference');
    }

    public function unsetDeleteReference(): self
    {
        $this->remove('deleteReference');
        return $this;
    }

    /**
     * @return WorkResource
     */
    public function getDeleteAdditionalResource()
    {
        return $this->get('deleteAdditionalResource');
    }

    /**
     * @param WorkResource $value
     */
    public function setDeleteAdditionalResource($value): self
    {
        $this->set('deleteAdditionalResource', $value);
        return $this;
    }

    public function hasDeleteAdditionalResource(): bool
    {
        return $this->has('deleteAdditionalResource');
    }

    public function unsetDeleteAdditionalResource(): self
    {
        $this->remove('deleteAdditionalResource');
        return $this;
    }

    /**
     * @return Award
     */
    public function getDeleteAward()
    {
        return $this->get('deleteAward');
    }

    /**
     * @param Award $value
     */
    public function setDeleteAward($value): self
    {
        $this->set('deleteAward', $value);
        return $this;
    }

    public function hasDeleteAward(): bool
    {
        return $this->has('deleteAward');
    }

    public function unsetDeleteAward(): self
    {
        $this->remove('deleteAward');
        return $this;
    }

    /**
     * @return Endorsement
     */
    public function getDeleteEndorsement()
    {
        return $this->get('deleteEndorsement');
    }

    /**
     * @param Endorsement $value
     */
    public function setDeleteEndorsement($value): self
    {
        $this->set('deleteEndorsement', $value);
        return $this;
    }

    public function hasDeleteEndorsement(): bool
    {
        return $this->has('deleteEndorsement');
    }

    public function unsetDeleteEndorsement(): self
    {
        $this->remove('deleteEndorsement');
        return $this;
    }

    /**
     * @return BookReview
     */
    public function getDeleteBookReview()
    {
        return $this->get('deleteBookReview');
    }

    /**
     * @param BookReview $value
     */
    public function setDeleteBookReview($value): self
    {
        $this->set('deleteBookReview', $value);
        return $this;
    }

    public function hasDeleteBookReview(): bool
    {
        return $this->has('deleteBookReview');
    }

    public function unsetDeleteBookReview(): self
    {
        $this->remove('deleteBookReview');
        return $this;
    }

    /**
     * @return WorkFeaturedVideo
     */
    public function getDeleteWorkFeaturedVideo()
    {
        return $this->get('deleteWorkFeaturedVideo');
    }

    /**
     * @param WorkFeaturedVideo $value
     */
    public function setDeleteWorkFeaturedVideo($value): self
    {
        $this->set('deleteWorkFeaturedVideo', $value);
        return $this;
    }

    public function hasDeleteWorkFeaturedVideo(): bool
    {
        return $this->has('deleteWorkFeaturedVideo');
    }

    public function unsetDeleteWorkFeaturedVideo(): self
    {
        $this->remove('deleteWorkFeaturedVideo');
        return $this;
    }

    /**
     * @return GraphQLAbstract
     */
    public function getDeleteAbstract()
    {
        return $this->get('deleteAbstract');
    }

    /**
     * @param GraphQLAbstract $value
     */
    public function setDeleteAbstract($value): self
    {
        $this->set('deleteAbstract', $value);
        return $this;
    }

    public function hasDeleteAbstract(): bool
    {
        return $this->has('deleteAbstract');
    }

    public function unsetDeleteAbstract(): self
    {
        $this->remove('deleteAbstract');
        return $this;
    }

    /**
     * @return Biography
     */
    public function getDeleteBiography()
    {
        return $this->get('deleteBiography');
    }

    /**
     * @param Biography $value
     */
    public function setDeleteBiography($value): self
    {
        $this->set('deleteBiography', $value);
        return $this;
    }

    public function hasDeleteBiography(): bool
    {
        return $this->has('deleteBiography');
    }

    public function unsetDeleteBiography(): self
    {
        $this->remove('deleteBiography');
        return $this;
    }

    /**
     * @return Affiliation
     */
    public function getMoveAffiliation()
    {
        return $this->get('moveAffiliation');
    }

    /**
     * @param Affiliation $value
     */
    public function setMoveAffiliation($value): self
    {
        $this->set('moveAffiliation', $value);
        return $this;
    }

    public function hasMoveAffiliation(): bool
    {
        return $this->has('moveAffiliation');
    }

    public function unsetMoveAffiliation(): self
    {
        $this->remove('moveAffiliation');
        return $this;
    }

    /**
     * @return Contribution
     */
    public function getMoveContribution()
    {
        return $this->get('moveContribution');
    }

    /**
     * @param Contribution $value
     */
    public function setMoveContribution($value): self
    {
        $this->set('moveContribution', $value);
        return $this;
    }

    public function hasMoveContribution(): bool
    {
        return $this->has('moveContribution');
    }

    public function unsetMoveContribution(): self
    {
        $this->remove('moveContribution');
        return $this;
    }

    /**
     * @return Issue
     */
    public function getMoveIssue()
    {
        return $this->get('moveIssue');
    }

    /**
     * @param Issue $value
     */
    public function setMoveIssue($value): self
    {
        $this->set('moveIssue', $value);
        return $this;
    }

    public function hasMoveIssue(): bool
    {
        return $this->has('moveIssue');
    }

    public function unsetMoveIssue(): self
    {
        $this->remove('moveIssue');
        return $this;
    }

    /**
     * @return Reference
     */
    public function getMoveReference()
    {
        return $this->get('moveReference');
    }

    /**
     * @param Reference $value
     */
    public function setMoveReference($value): self
    {
        $this->set('moveReference', $value);
        return $this;
    }

    public function hasMoveReference(): bool
    {
        return $this->has('moveReference');
    }

    public function unsetMoveReference(): self
    {
        $this->remove('moveReference');
        return $this;
    }

    /**
     * @return WorkResource
     */
    public function getMoveAdditionalResource()
    {
        return $this->get('moveAdditionalResource');
    }

    /**
     * @param WorkResource $value
     */
    public function setMoveAdditionalResource($value): self
    {
        $this->set('moveAdditionalResource', $value);
        return $this;
    }

    public function hasMoveAdditionalResource(): bool
    {
        return $this->has('moveAdditionalResource');
    }

    public function unsetMoveAdditionalResource(): self
    {
        $this->remove('moveAdditionalResource');
        return $this;
    }

    /**
     * @return Award
     */
    public function getMoveAward()
    {
        return $this->get('moveAward');
    }

    /**
     * @param Award $value
     */
    public function setMoveAward($value): self
    {
        $this->set('moveAward', $value);
        return $this;
    }

    public function hasMoveAward(): bool
    {
        return $this->has('moveAward');
    }

    public function unsetMoveAward(): self
    {
        $this->remove('moveAward');
        return $this;
    }

    /**
     * @return Endorsement
     */
    public function getMoveEndorsement()
    {
        return $this->get('moveEndorsement');
    }

    /**
     * @param Endorsement $value
     */
    public function setMoveEndorsement($value): self
    {
        $this->set('moveEndorsement', $value);
        return $this;
    }

    public function hasMoveEndorsement(): bool
    {
        return $this->has('moveEndorsement');
    }

    public function unsetMoveEndorsement(): self
    {
        $this->remove('moveEndorsement');
        return $this;
    }

    /**
     * @return BookReview
     */
    public function getMoveBookReview()
    {
        return $this->get('moveBookReview');
    }

    /**
     * @param BookReview $value
     */
    public function setMoveBookReview($value): self
    {
        $this->set('moveBookReview', $value);
        return $this;
    }

    public function hasMoveBookReview(): bool
    {
        return $this->has('moveBookReview');
    }

    public function unsetMoveBookReview(): self
    {
        $this->remove('moveBookReview');
        return $this;
    }

    /**
     * @return Subject
     */
    public function getMoveSubject()
    {
        return $this->get('moveSubject');
    }

    /**
     * @param Subject $value
     */
    public function setMoveSubject($value): self
    {
        $this->set('moveSubject', $value);
        return $this;
    }

    public function hasMoveSubject(): bool
    {
        return $this->has('moveSubject');
    }

    public function unsetMoveSubject(): self
    {
        $this->remove('moveSubject');
        return $this;
    }

    /**
     * @return WorkRelation
     */
    public function getMoveWorkRelation()
    {
        return $this->get('moveWorkRelation');
    }

    /**
     * @param WorkRelation $value
     */
    public function setMoveWorkRelation($value): self
    {
        $this->set('moveWorkRelation', $value);
        return $this;
    }

    public function hasMoveWorkRelation(): bool
    {
        return $this->has('moveWorkRelation');
    }

    public function unsetMoveWorkRelation(): self
    {
        $this->remove('moveWorkRelation');
        return $this;
    }

    /**
     * @return FileUploadResponse
     */
    public function getInitPublicationFileUpload()
    {
        return $this->get('initPublicationFileUpload');
    }

    /**
     * @param FileUploadResponse $value
     */
    public function setInitPublicationFileUpload($value): self
    {
        $this->set('initPublicationFileUpload', $value);
        return $this;
    }

    public function hasInitPublicationFileUpload(): bool
    {
        return $this->has('initPublicationFileUpload');
    }

    public function unsetInitPublicationFileUpload(): self
    {
        $this->remove('initPublicationFileUpload');
        return $this;
    }

    /**
     * @return FileUploadResponse
     */
    public function getInitFrontcoverFileUpload()
    {
        return $this->get('initFrontcoverFileUpload');
    }

    /**
     * @param FileUploadResponse $value
     */
    public function setInitFrontcoverFileUpload($value): self
    {
        $this->set('initFrontcoverFileUpload', $value);
        return $this;
    }

    public function hasInitFrontcoverFileUpload(): bool
    {
        return $this->has('initFrontcoverFileUpload');
    }

    public function unsetInitFrontcoverFileUpload(): self
    {
        $this->remove('initFrontcoverFileUpload');
        return $this;
    }

    /**
     * @return FileUploadResponse
     */
    public function getInitAdditionalResourceFileUpload()
    {
        return $this->get('initAdditionalResourceFileUpload');
    }

    /**
     * @param FileUploadResponse $value
     */
    public function setInitAdditionalResourceFileUpload($value): self
    {
        $this->set('initAdditionalResourceFileUpload', $value);
        return $this;
    }

    public function hasInitAdditionalResourceFileUpload(): bool
    {
        return $this->has('initAdditionalResourceFileUpload');
    }

    public function unsetInitAdditionalResourceFileUpload(): self
    {
        $this->remove('initAdditionalResourceFileUpload');
        return $this;
    }

    /**
     * @return FileUploadResponse
     */
    public function getInitWorkFeaturedVideoFileUpload()
    {
        return $this->get('initWorkFeaturedVideoFileUpload');
    }

    /**
     * @param FileUploadResponse $value
     */
    public function setInitWorkFeaturedVideoFileUpload($value): self
    {
        $this->set('initWorkFeaturedVideoFileUpload', $value);
        return $this;
    }

    public function hasInitWorkFeaturedVideoFileUpload(): bool
    {
        return $this->has('initWorkFeaturedVideoFileUpload');
    }

    public function unsetInitWorkFeaturedVideoFileUpload(): self
    {
        $this->remove('initWorkFeaturedVideoFileUpload');
        return $this;
    }

    /**
     * @return File
     */
    public function getCompleteFileUpload()
    {
        return $this->get('completeFileUpload');
    }

    /**
     * @param File $value
     */
    public function setCompleteFileUpload($value): self
    {
        $this->set('completeFileUpload', $value);
        return $this;
    }

    public function hasCompleteFileUpload(): bool
    {
        return $this->has('completeFileUpload');
    }

    public function unsetCompleteFileUpload(): self
    {
        $this->remove('completeFileUpload');
        return $this;
    }

    /**
     * @return Contact
     */
    public function getDeleteContact()
    {
        return $this->get('deleteContact');
    }

    /**
     * @param Contact $value
     */
    public function setDeleteContact($value): self
    {
        $this->set('deleteContact', $value);
        return $this;
    }

    public function hasDeleteContact(): bool
    {
        return $this->has('deleteContact');
    }

    public function unsetDeleteContact(): self
    {
        $this->remove('deleteContact');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('MutationRoot', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createWork',
                'description' => 'Create a new work with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for work to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewWork',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
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
                'name' => 'createPublisher',
                'description' => 'Create a new publisher with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for publisher to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewPublisher',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publisher',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createImprint',
                'description' => 'Create a new imprint with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for imprint to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewImprint',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
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
                'name' => 'createContributor',
                'description' => 'Create a new contributor with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for contributor to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewContributor',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contributor',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createContribution',
                'description' => 'Create a new contribution with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for contribution to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewContribution',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contribution',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createPublication',
                'description' => 'Create a new publication with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for publication to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewPublication',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publication',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createSeries',
                'description' => 'Create a new series with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the series description',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values for series to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewSeries',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Series',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createIssue',
                'description' => 'Create a new issue with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for issue to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewIssue',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Issue',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createLanguage',
                'description' => 'Create a new language with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for language to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewLanguage',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Language',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createTitle',
                'description' => 'Create a new title with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the title',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values for title to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewTitle',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Title',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createAbstract',
                'description' => 'Create a new abstract with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the abstract',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values for abstract to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewAbstract',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Abstract',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createBiography',
                'description' => 'Create a new biography with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the biography',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values for biography to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewBiography',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Biography',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createInstitution',
                'description' => 'Create a new institution with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for institution to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewInstitution',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Institution',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createFunding',
                'description' => 'Create a new funding with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for funding to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewFunding',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Funding',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createLocation',
                'description' => 'Create a new location with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for location to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewLocation',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Location',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createPrice',
                'description' => 'Create a new price with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for price to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewPrice',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Price',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createSubject',
                'description' => 'Create a new subject with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for subject to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewSubject',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Subject',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createAffiliation',
                'description' => 'Create a new affiliation with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for affiliation to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewAffiliation',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Affiliation',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createWorkRelation',
                'description' => 'Create a new work relation with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for work relation to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewWorkRelation',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkRelation',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createReference',
                'description' => 'Create a new reference with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for reference to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewReference',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Reference',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createAdditionalResource',
                'description' => 'Create a new additional resource with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the additional resource text fields',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values for additional resource to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewAdditionalResource',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkResource',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createAward',
                'description' => 'Create a new award with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the award text fields',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values for award to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewAward',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Award',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createEndorsement',
                'description' => 'Create a new endorsement with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the endorsement rich-text fields',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values for endorsement to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewEndorsement',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Endorsement',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createBookReview',
                'description' => 'Create a new book review with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the book review text field',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values for book review to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewBookReview',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'BookReview',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createWorkFeaturedVideo',
                'description' => 'Create a new featured video with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for featured video to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewWorkFeaturedVideo',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkFeaturedVideo',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createContact',
                'description' => 'Create a new contact with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values for contact to be created',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewContact',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contact',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateWork',
                'description' => 'Update an existing work with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing work',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchWork',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
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
                'name' => 'updatePublisher',
                'description' => 'Update an existing publisher with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing publisher',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchPublisher',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publisher',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateImprint',
                'description' => 'Update an existing imprint with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing imprint',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchImprint',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
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
                'name' => 'updateContributor',
                'description' => 'Update an existing contributor with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing contributor',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchContributor',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contributor',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateContribution',
                'description' => 'Update an existing contribution with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing contribution',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchContribution',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contribution',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updatePublication',
                'description' => 'Update an existing publication with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing publication',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchPublication',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publication',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateSeries',
                'description' => 'Update an existing series with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the series description',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing series',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchSeries',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Series',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateIssue',
                'description' => 'Update an existing issue with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing issue',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchIssue',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Issue',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateLanguage',
                'description' => 'Update an existing language with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing language',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchLanguage',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Language',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateInstitution',
                'description' => 'Update an existing institution with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing institution',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchInstitution',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Institution',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateFunding',
                'description' => 'Update an existing funding with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing funding',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchFunding',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Funding',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateLocation',
                'description' => 'Update an existing location with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing location',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchLocation',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Location',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updatePrice',
                'description' => 'Update an existing price with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing price',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchPrice',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Price',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateSubject',
                'description' => 'Update an existing subject with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing subject',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchSubject',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Subject',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateAffiliation',
                'description' => 'Update an existing affiliation with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing affiliation',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchAffiliation',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Affiliation',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateWorkRelation',
                'description' => 'Update an existing work relation with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing work relation',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchWorkRelation',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkRelation',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateReference',
                'description' => 'Update an existing reference with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing reference',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchReference',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Reference',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateAdditionalResource',
                'description' => 'Update an existing additional resource with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the additional resource text fields',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing additional resource',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchAdditionalResource',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkResource',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateAward',
                'description' => 'Update an existing award with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the award text fields',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing award',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchAward',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Award',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateEndorsement',
                'description' => 'Update an existing endorsement with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the endorsement rich-text fields',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing endorsement',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchEndorsement',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Endorsement',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateBookReview',
                'description' => 'Update an existing book review with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the book review text field',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing book review',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchBookReview',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'BookReview',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateWorkFeaturedVideo',
                'description' => 'Update an existing featured video with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing featured video',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchWorkFeaturedVideo',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkFeaturedVideo',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateContact',
                'description' => 'Update an existing contact with the specified values',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing contact',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchContact',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contact',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateTitle',
                'description' => 'Update an existing title with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the title',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing title',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchTitle',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Title',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateAbstract',
                'description' => 'Update an existing abstract with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the abstract',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing abstract',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchAbstract',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Abstract',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updateBiography',
                'description' => 'Update an existing biography with the specified values',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'The markup format of the biography',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'data',
                        'description' => 'Values to apply to existing biography',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'PatchBiography',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Biography',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteWork',
                'description' => 'Delete a single work using its ID',
                'args' => [
                    [
                        'name' => 'workId',
                        'description' => 'Thoth ID of work to be deleted',
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
                    ],
                ],
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
                'name' => 'deletePublisher',
                'description' => 'Delete a single publisher using its ID',
                'args' => [
                    [
                        'name' => 'publisherId',
                        'description' => 'Thoth ID of publisher to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publisher',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteImprint',
                'description' => 'Delete a single imprint using its ID',
                'args' => [
                    [
                        'name' => 'imprintId',
                        'description' => 'Thoth ID of imprint to be deleted',
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
                    ],
                ],
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
                'name' => 'deleteContributor',
                'description' => 'Delete a single contributor using its ID',
                'args' => [
                    [
                        'name' => 'contributorId',
                        'description' => 'Thoth ID of contributor to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contributor',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteContribution',
                'description' => 'Delete a single contribution using its ID',
                'args' => [
                    [
                        'name' => 'contributionId',
                        'description' => 'Thoth ID of contribution to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contribution',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deletePublication',
                'description' => 'Delete a single publication using its ID',
                'args' => [
                    [
                        'name' => 'publicationId',
                        'description' => 'Thoth ID of publication to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Publication',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteSeries',
                'description' => 'Delete a single series using its ID',
                'args' => [
                    [
                        'name' => 'seriesId',
                        'description' => 'Thoth ID of series to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Series',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteIssue',
                'description' => 'Delete a single issue using its ID',
                'args' => [
                    [
                        'name' => 'issueId',
                        'description' => 'Thoth ID of issue to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Issue',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteLanguage',
                'description' => 'Delete a single language using its ID',
                'args' => [
                    [
                        'name' => 'languageId',
                        'description' => 'Thoth ID of language to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Language',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteTitle',
                'description' => 'Delete a single title using its ID',
                'args' => [
                    [
                        'name' => 'titleId',
                        'description' => 'Thoth ID of title to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Title',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteInstitution',
                'description' => 'Delete a single institution using its ID',
                'args' => [
                    [
                        'name' => 'institutionId',
                        'description' => 'Thoth ID of institution to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Institution',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteFunding',
                'description' => 'Delete a single funding using its ID',
                'args' => [
                    [
                        'name' => 'fundingId',
                        'description' => 'Thoth ID of funding to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Funding',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteLocation',
                'description' => 'Delete a single location using its ID',
                'args' => [
                    [
                        'name' => 'locationId',
                        'description' => 'Thoth ID of location to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Location',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deletePrice',
                'description' => 'Delete a single price using its ID',
                'args' => [
                    [
                        'name' => 'priceId',
                        'description' => 'Thoth ID of price to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Price',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteSubject',
                'description' => 'Delete a single subject using its ID',
                'args' => [
                    [
                        'name' => 'subjectId',
                        'description' => 'Thoth ID of subject to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Subject',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteAffiliation',
                'description' => 'Delete a single affiliation using its ID',
                'args' => [
                    [
                        'name' => 'affiliationId',
                        'description' => 'Thoth ID of affiliation to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Affiliation',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteWorkRelation',
                'description' => 'Delete a single work relation using its ID',
                'args' => [
                    [
                        'name' => 'workRelationId',
                        'description' => 'Thoth ID of work relation to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkRelation',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteReference',
                'description' => 'Delete a single reference using its ID',
                'args' => [
                    [
                        'name' => 'referenceId',
                        'description' => 'Thoth ID of reference to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Reference',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteAdditionalResource',
                'description' => 'Delete a single additional resource using its ID',
                'args' => [
                    [
                        'name' => 'additionalResourceId',
                        'description' => 'Thoth ID of additional resource to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkResource',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteAward',
                'description' => 'Delete a single award using its ID',
                'args' => [
                    [
                        'name' => 'awardId',
                        'description' => 'Thoth ID of award to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Award',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteEndorsement',
                'description' => 'Delete a single endorsement using its ID',
                'args' => [
                    [
                        'name' => 'endorsementId',
                        'description' => 'Thoth ID of endorsement to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Endorsement',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteBookReview',
                'description' => 'Delete a single book review using its ID',
                'args' => [
                    [
                        'name' => 'bookReviewId',
                        'description' => 'Thoth ID of book review to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'BookReview',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteWorkFeaturedVideo',
                'description' => 'Delete a single featured video using its ID',
                'args' => [
                    [
                        'name' => 'workFeaturedVideoId',
                        'description' => 'Thoth ID of featured video to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkFeaturedVideo',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteAbstract',
                'description' => 'Delete a single abstract using its ID',
                'args' => [
                    [
                        'name' => 'abstractId',
                        'description' => 'Thoth ID of abstract to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Abstract',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteBiography',
                'description' => 'Delete a single biography using its ID',
                'args' => [
                    [
                        'name' => 'biographyId',
                        'description' => 'Thoth ID of biography to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Biography',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveAffiliation',
                'description' => 'Change the ordering of an affiliation within a contribution',
                'args' => [
                    [
                        'name' => 'affiliationId',
                        'description' => 'Thoth ID of affiliation to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which affiliation should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Affiliation',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveContribution',
                'description' => 'Change the ordering of a contribution within a work',
                'args' => [
                    [
                        'name' => 'contributionId',
                        'description' => 'Thoth ID of contribution to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which contribution should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contribution',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveIssue',
                'description' => 'Change the ordering of an issue within a series',
                'args' => [
                    [
                        'name' => 'issueId',
                        'description' => 'Thoth ID of issue to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which issue should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Issue',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveReference',
                'description' => 'Change the ordering of a reference within a work',
                'args' => [
                    [
                        'name' => 'referenceId',
                        'description' => 'Thoth ID of reference to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which reference should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Reference',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveAdditionalResource',
                'description' => 'Change the ordering of an additional resource within a work',
                'args' => [
                    [
                        'name' => 'additionalResourceId',
                        'description' => 'Thoth ID of additional resource to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which additional resource should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkResource',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveAward',
                'description' => 'Change the ordering of an award within a work',
                'args' => [
                    [
                        'name' => 'awardId',
                        'description' => 'Thoth ID of award to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which award should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Award',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveEndorsement',
                'description' => 'Change the ordering of an endorsement within a work',
                'args' => [
                    [
                        'name' => 'endorsementId',
                        'description' => 'Thoth ID of endorsement to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which endorsement should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Endorsement',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveBookReview',
                'description' => 'Change the ordering of a book review within a work',
                'args' => [
                    [
                        'name' => 'bookReviewId',
                        'description' => 'Thoth ID of book review to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which book review should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'BookReview',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveSubject',
                'description' => 'Change the ordering of a subject within a work',
                'args' => [
                    [
                        'name' => 'subjectId',
                        'description' => 'Thoth ID of subject to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which subject should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Subject',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'moveWorkRelation',
                'description' => 'Change the ordering of a work relation within a work',
                'args' => [
                    [
                        'name' => 'workRelationId',
                        'description' => 'Thoth ID of work relation to be moved',
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
                    ],
                    [
                        'name' => 'newOrdinal',
                        'description' => 'Ordinal representing position to which work relation should be moved',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'WorkRelation',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'initPublicationFileUpload',
                'description' => 'Start uploading a publication file (e.g. PDF, EPUB, XML) for a given publication. Returns an upload session ID, a presigned S3 PUT URL, and required PUT headers.',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Input for starting a publication file upload',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewPublicationFileUpload',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'FileUploadResponse',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'initFrontcoverFileUpload',
                'description' => 'Start uploading a front cover image for a given work. Returns an upload session ID, a presigned S3 PUT URL, and required PUT headers.',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Input for starting a front cover upload',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewFrontcoverFileUpload',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'FileUploadResponse',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'initAdditionalResourceFileUpload',
                'description' => 'Start uploading a file for an additional resource. Supported resource types include AUDIO, VIDEO, IMAGE, DOCUMENT, DATASET, and SPREADSHEET.',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Input for starting an additional resource upload',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewAdditionalResourceFileUpload',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'FileUploadResponse',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'initWorkFeaturedVideoFileUpload',
                'description' => 'Start uploading a hosted featured video for a work. The uploaded file is promoted to a DOI-scoped resource path.',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Input for starting a featured video upload',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'NewWorkFeaturedVideoFileUpload',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'FileUploadResponse',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'completeFileUpload',
                'description' => 'Complete a file upload, validate it, and promote it to its final DOI-based location.',
                'args' => [
                    [
                        'name' => 'data',
                        'description' => 'Input for completing a file upload',
                        'type' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'INPUT_OBJECT',
                                'name' => 'CompleteFileUpload',
                                'ofType' => null,
                            ],
                        ],
                        'defaultValue' => null,
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'File',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'deleteContact',
                'description' => 'Delete a single contact using its ID',
                'args' => [
                    [
                        'name' => 'contactId',
                        'description' => 'Thoth ID of contact to be deleted',
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
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Contact',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
