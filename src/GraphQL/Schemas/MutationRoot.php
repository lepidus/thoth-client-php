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
        return $this->set('createWork', $value);
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
        return $this->set('createPublisher', $value);
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
        return $this->set('createImprint', $value);
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
        return $this->set('createContributor', $value);
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
        return $this->set('createContribution', $value);
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
        return $this->set('createPublication', $value);
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
        return $this->set('createSeries', $value);
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
        return $this->set('createIssue', $value);
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
        return $this->set('createLanguage', $value);
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
        return $this->set('createTitle', $value);
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
        return $this->set('createAbstract', $value);
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
        return $this->set('createBiography', $value);
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
        return $this->set('createInstitution', $value);
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
        return $this->set('createFunding', $value);
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
        return $this->set('createLocation', $value);
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
        return $this->set('createPrice', $value);
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
        return $this->set('createSubject', $value);
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
        return $this->set('createAffiliation', $value);
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
        return $this->set('createWorkRelation', $value);
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
        return $this->set('createReference', $value);
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
        return $this->set('createAdditionalResource', $value);
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
        return $this->set('createAward', $value);
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
        return $this->set('createEndorsement', $value);
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
        return $this->set('createBookReview', $value);
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
        return $this->set('createWorkFeaturedVideo', $value);
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
        return $this->set('createContact', $value);
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
        return $this->set('updateWork', $value);
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
        return $this->set('updatePublisher', $value);
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
        return $this->set('updateImprint', $value);
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
        return $this->set('updateContributor', $value);
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
        return $this->set('updateContribution', $value);
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
        return $this->set('updatePublication', $value);
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
        return $this->set('updateSeries', $value);
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
        return $this->set('updateIssue', $value);
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
        return $this->set('updateLanguage', $value);
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
        return $this->set('updateInstitution', $value);
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
        return $this->set('updateFunding', $value);
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
        return $this->set('updateLocation', $value);
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
        return $this->set('updatePrice', $value);
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
        return $this->set('updateSubject', $value);
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
        return $this->set('updateAffiliation', $value);
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
        return $this->set('updateWorkRelation', $value);
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
        return $this->set('updateReference', $value);
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
        return $this->set('updateAdditionalResource', $value);
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
        return $this->set('updateAward', $value);
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
        return $this->set('updateEndorsement', $value);
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
        return $this->set('updateBookReview', $value);
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
        return $this->set('updateWorkFeaturedVideo', $value);
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
        return $this->set('updateContact', $value);
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
        return $this->set('updateTitle', $value);
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
        return $this->set('updateAbstract', $value);
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
        return $this->set('updateBiography', $value);
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
        return $this->set('deleteWork', $value);
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
        return $this->set('deletePublisher', $value);
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
        return $this->set('deleteImprint', $value);
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
        return $this->set('deleteContributor', $value);
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
        return $this->set('deleteContribution', $value);
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
        return $this->set('deletePublication', $value);
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
        return $this->set('deleteSeries', $value);
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
        return $this->set('deleteIssue', $value);
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
        return $this->set('deleteLanguage', $value);
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
        return $this->set('deleteTitle', $value);
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
        return $this->set('deleteInstitution', $value);
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
        return $this->set('deleteFunding', $value);
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
        return $this->set('deleteLocation', $value);
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
        return $this->set('deletePrice', $value);
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
        return $this->set('deleteSubject', $value);
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
        return $this->set('deleteAffiliation', $value);
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
        return $this->set('deleteWorkRelation', $value);
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
        return $this->set('deleteReference', $value);
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
        return $this->set('deleteAdditionalResource', $value);
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
        return $this->set('deleteAward', $value);
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
        return $this->set('deleteEndorsement', $value);
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
        return $this->set('deleteBookReview', $value);
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
        return $this->set('deleteWorkFeaturedVideo', $value);
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
        return $this->set('deleteAbstract', $value);
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
        return $this->set('deleteBiography', $value);
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
        return $this->set('moveAffiliation', $value);
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
        return $this->set('moveContribution', $value);
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
        return $this->set('moveIssue', $value);
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
        return $this->set('moveReference', $value);
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
        return $this->set('moveAdditionalResource', $value);
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
        return $this->set('moveAward', $value);
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
        return $this->set('moveEndorsement', $value);
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
        return $this->set('moveBookReview', $value);
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
        return $this->set('moveSubject', $value);
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
        return $this->set('moveWorkRelation', $value);
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
        return $this->set('initPublicationFileUpload', $value);
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
        return $this->set('initFrontcoverFileUpload', $value);
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
        return $this->set('initAdditionalResourceFileUpload', $value);
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
        return $this->set('initWorkFeaturedVideoFileUpload', $value);
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
        return $this->set('completeFileUpload', $value);
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
        return $this->set('deleteContact', $value);
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
