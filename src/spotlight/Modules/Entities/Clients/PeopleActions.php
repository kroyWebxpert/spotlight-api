<?php



/**
 * PeopleActions
 */
class PeopleActions
{
    /**
     * @var integer
     */
    private $id;

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
    private $peopleId;

    /**
     * @var integer
     */
    private $channelId;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $messageSendDate;

    /**
     * @var string
     */
    private $action;

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
     * Set userId
     *
     * @param integer $userId
     *
     * @return PeopleActions
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
     * @return PeopleActions
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
     * Set peopleId
     *
     * @param integer $peopleId
     *
     * @return PeopleActions
     */
    public function setPeopleId($peopleId)
    {
        $this->peopleId = $peopleId;

        return $this;
    }

    /**
     * Get peopleId
     *
     * @return integer
     */
    public function getPeopleId()
    {
        return $this->peopleId;
    }

    /**
     * Set channelId
     *
     * @param integer $channelId
     *
     * @return PeopleActions
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
     * Set message
     *
     * @param string $message
     *
     * @return PeopleActions
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
     * Set messageSendDate
     *
     * @param \DateTime $messageSendDate
     *
     * @return PeopleActions
     */
    public function setMessageSendDate($messageSendDate)
    {
        $this->messageSendDate = $messageSendDate;

        return $this;
    }

    /**
     * Get messageSendDate
     *
     * @return \DateTime
     */
    public function getMessageSendDate()
    {
        return $this->messageSendDate;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return PeopleActions
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return PeopleActions
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
     * @return PeopleActions
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
     * @return PeopleActions
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

