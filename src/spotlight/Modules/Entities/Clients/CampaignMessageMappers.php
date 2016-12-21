<?php



/**
 * CampaignMessageMappers
 */
class CampaignMessageMappers
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
     * @var integer
     */
    private $segmentId;

    /**
     * @var string
     */
    private $messageLabel;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $isEditable;

    /**
     * @var string
     */
    private $status;

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
     * @return CampaignMessageMappers
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
     * @return CampaignMessageMappers
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
     * @return CampaignMessageMappers
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
     * @return CampaignMessageMappers
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
     * Set segmentId
     *
     * @param integer $segmentId
     *
     * @return CampaignMessageMappers
     */
    public function setSegmentId($segmentId)
    {
        $this->segmentId = $segmentId;

        return $this;
    }

    /**
     * Get segmentId
     *
     * @return integer
     */
    public function getSegmentId()
    {
        return $this->segmentId;
    }

    /**
     * Set messageLabel
     *
     * @param string $messageLabel
     *
     * @return CampaignMessageMappers
     */
    public function setMessageLabel($messageLabel)
    {
        $this->messageLabel = $messageLabel;

        return $this;
    }

    /**
     * Get messageLabel
     *
     * @return string
     */
    public function getMessageLabel()
    {
        return $this->messageLabel;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return CampaignMessageMappers
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set isEditable
     *
     * @param string $isEditable
     *
     * @return CampaignMessageMappers
     */
    public function setIsEditable($isEditable)
    {
        $this->isEditable = $isEditable;

        return $this;
    }

    /**
     * Get isEditable
     *
     * @return string
     */
    public function getIsEditable()
    {
        return $this->isEditable;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return CampaignMessageMappers
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CampaignMessageMappers
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
     * @return CampaignMessageMappers
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

