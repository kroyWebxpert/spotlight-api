<?php

namespace Spotlight\Entities;

/**
 * Campaign
 */
class Campaign
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $client_id;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var integer
     */
    private $issue_id;

    /**
     * @var string
     */
    private $admin_campaign_name;

    /**
     * @var string
     */
    private $public_campaign_name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $headline;

    /**
     * @var string
     */
    private $match_criteria_required;

    /**
     * @var string
     */
    private $campaign_url;

    /**
     * @var integer
     */
    private $published_by;

    /**
     * @var \DateTime
     */
    private $publish_date;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $status_changed_by;

    /**
     * @var \DateTime
     */
    private $status_changed_date;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return Campaign
     */
    public function setClientId($clientId)
    {
        $this->client_id = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return integer
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Campaign
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set issueId
     *
     * @param integer $issueId
     *
     * @return Campaign
     */
    public function setIssueId($issueId)
    {
        $this->issue_id = $issueId;

        return $this;
    }

    /**
     * Get issueId
     *
     * @return integer
     */
    public function getIssueId()
    {
        return $this->issue_id;
    }

    /**
     * Set adminCampaignName
     *
     * @param string $adminCampaignName
     *
     * @return Campaign
     */
    public function setAdminCampaignName($adminCampaignName)
    {
        $this->admin_campaign_name = $adminCampaignName;

        return $this;
    }

    /**
     * Get adminCampaignName
     *
     * @return string
     */
    public function getAdminCampaignName()
    {
        return $this->admin_campaign_name;
    }

    /**
     * Set publicCampaignName
     *
     * @param string $publicCampaignName
     *
     * @return Campaign
     */
    public function setPublicCampaignName($publicCampaignName)
    {
        $this->public_campaign_name = $publicCampaignName;

        return $this;
    }

    /**
     * Get publicCampaignName
     *
     * @return string
     */
    public function getPublicCampaignName()
    {
        return $this->public_campaign_name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Campaign
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set headline
     *
     * @param string $headline
     *
     * @return Campaign
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set matchCriteriaRequired
     *
     * @param string $matchCriteriaRequired
     *
     * @return Campaign
     */
    public function setMatchCriteriaRequired($matchCriteriaRequired)
    {
        $this->match_criteria_required = $matchCriteriaRequired;

        return $this;
    }

    /**
     * Get matchCriteriaRequired
     *
     * @return string
     */
    public function getMatchCriteriaRequired()
    {
        return $this->match_criteria_required;
    }

    /**
     * Set campaignUrl
     *
     * @param string $campaignUrl
     *
     * @return Campaign
     */
    public function setCampaignUrl($campaignUrl)
    {
        $this->campaign_url = $campaignUrl;

        return $this;
    }

    /**
     * Get campaignUrl
     *
     * @return string
     */
    public function getCampaignUrl()
    {
        return $this->campaign_url;
    }

    /**
     * Set publishedBy
     *
     * @param integer $publishedBy
     *
     * @return Campaign
     */
    public function setPublishedBy($publishedBy)
    {
        $this->published_by = $publishedBy;

        return $this;
    }

    /**
     * Get publishedBy
     *
     * @return integer
     */
    public function getPublishedBy()
    {
        return $this->published_by;
    }

    /**
     * Set publishDate
     *
     * @param \DateTime $publishDate
     *
     * @return Campaign
     */
    public function setPublishDate($publishDate)
    {
        $this->publish_date = $publishDate;

        return $this;
    }

    /**
     * Get publishDate
     *
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->publish_date;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Campaign
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statusChangedBy
     *
     * @param integer $statusChangedBy
     *
     * @return Campaign
     */
    public function setStatusChangedBy($statusChangedBy)
    {
        $this->status_changed_by = $statusChangedBy;

        return $this;
    }

    /**
     * Get statusChangedBy
     *
     * @return integer
     */
    public function getStatusChangedBy()
    {
        return $this->status_changed_by;
    }

    /**
     * Set statusChangedDate
     *
     * @param \DateTime $statusChangedDate
     *
     * @return Campaign
     */
    public function setStatusChangedDate($statusChangedDate)
    {
        $this->status_changed_date = $statusChangedDate;

        return $this;
    }

    /**
     * Get statusChangedDate
     *
     * @return \DateTime
     */
    public function getStatusChangedDate()
    {
        return $this->status_changed_date;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Campaign
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Campaign
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}

