<?php



/**
 * CampaignTargetMappers
 */
class CampaignTargetMappers
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
    private $targetId;

    /**
     * @var integer
     */
    private $segmentId;

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
     * @return CampaignTargetMappers
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
     * @return CampaignTargetMappers
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
     * @return CampaignTargetMappers
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
     * Set targetId
     *
     * @param integer $targetId
     *
     * @return CampaignTargetMappers
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;

        return $this;
    }

    /**
     * Get targetId
     *
     * @return integer
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Set segmentId
     *
     * @param integer $segmentId
     *
     * @return CampaignTargetMappers
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
     * Set status
     *
     * @param string $status
     *
     * @return CampaignTargetMappers
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
     * @return CampaignTargetMappers
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
     * @return CampaignTargetMappers
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

