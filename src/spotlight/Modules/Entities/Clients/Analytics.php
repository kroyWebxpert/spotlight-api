<?php



/**
 * Analytics
 */
class Analytics
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $campaignId;

    /**
     * @var \DateTime
     */
    private $createdData;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $interface;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Clients
     */
    private $client;


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
     * Set campaignId
     *
     * @param integer $campaignId
     *
     * @return Analytics
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
     * Set createdData
     *
     * @param \DateTime $createdData
     *
     * @return Analytics
     */
    public function setCreatedData($createdData)
    {
        $this->createdData = $createdData;

        return $this;
    }

    /**
     * Get createdData
     *
     * @return \DateTime
     */
    public function getCreatedData()
    {
        return $this->createdData;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Analytics
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
     * Set interface
     *
     * @param string $interface
     *
     * @return Analytics
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * Get interface
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Analytics
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
     * @return Analytics
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

    /**
     * Set client
     *
     * @param \Clients $client
     *
     * @return Analytics
     */
    public function setClient(\Clients $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Clients
     */
    public function getClient()
    {
        return $this->client;
    }
}

