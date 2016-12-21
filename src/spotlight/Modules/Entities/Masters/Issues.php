<?php



/**
 * Issues
 */
class Issues
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $issueTitle;

    /**
     * @var string
     */
    private $issueDescription;

    /**
     * @var string
     */
    private $issueType;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $sourceType;

    /**
     * @var integer
     */
    private $clientId;

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
     * Set issueTitle
     *
     * @param string $issueTitle
     *
     * @return Issues
     */
    public function setIssueTitle($issueTitle)
    {
        $this->issueTitle = $issueTitle;

        return $this;
    }

    /**
     * Get issueTitle
     *
     * @return string
     */
    public function getIssueTitle()
    {
        return $this->issueTitle;
    }

    /**
     * Set issueDescription
     *
     * @param string $issueDescription
     *
     * @return Issues
     */
    public function setIssueDescription($issueDescription)
    {
        $this->issueDescription = $issueDescription;

        return $this;
    }

    /**
     * Get issueDescription
     *
     * @return string
     */
    public function getIssueDescription()
    {
        return $this->issueDescription;
    }

    /**
     * Set issueType
     *
     * @param string $issueType
     *
     * @return Issues
     */
    public function setIssueType($issueType)
    {
        $this->issueType = $issueType;

        return $this;
    }

    /**
     * Get issueType
     *
     * @return string
     */
    public function getIssueType()
    {
        return $this->issueType;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Issues
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set sourceType
     *
     * @param string $sourceType
     *
     * @return Issues
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;

        return $this;
    }

    /**
     * Get sourceType
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return Issues
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
     * Set status
     *
     * @param string $status
     *
     * @return Issues
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
     * @return Issues
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
     * @return Issues
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

