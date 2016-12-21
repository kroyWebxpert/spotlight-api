<?php



/**
 * CampaignSegments
 */
class CampaignSegments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $campaignId;

    /**
     * @var integer
     */
    private $channelId;

    /**
     * @var string
     */
    private $segmentLabel;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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
     * @return CampaignSegments
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return integer
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return CampaignSegments
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set campaignId
     *
     * @param integer $campaignId
     *
     * @return CampaignSegments
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get campaignId
     *
     * @return integer
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set channelId
     *
     * @param integer $channelId
     *
     * @return CampaignSegments
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * Get channelId
     *
     * @return integer
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * Set segmentLabel
     *
     * @param string $segmentLabel
     *
     * @return CampaignSegments
     */
    public function setSegmentLabel($segmentLabel)
    {
        $this->segmentLabel = $segmentLabel;

        return $this;
    }

    /**
     * Get segmentLabel
     *
     * @return string
     */
    public function getSegmentLabel()
    {
        return $this->segmentLabel;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return CampaignSegments
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CampaignSegments
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return CampaignSegments
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

