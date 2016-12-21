<?php



/**
 * Clients
 */
class Clients
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $organizationName;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $dbHostname;

    /**
     * @var string
     */
    private $dbUsername;

    /**
     * @var string
     */
    private $dbPassword;

    /**
     * @var string
     */
    private $dbName;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $interface;


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
     * Set organizationName
     *
     * @param string $organizationName
     *
     * @return Clients
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;

        return $this;
    }

    /**
     * Get organizationName
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Clients
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Clients
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Clients
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Clients
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Clients
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Clients
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
     * Set dbHostname
     *
     * @param string $dbHostname
     *
     * @return Clients
     */
    public function setDbHostname($dbHostname)
    {
        $this->dbHostname = $dbHostname;

        return $this;
    }

    /**
     * Get dbHostname
     *
     * @return string
     */
    public function getDbHostname()
    {
        return $this->dbHostname;
    }

    /**
     * Set dbUsername
     *
     * @param string $dbUsername
     *
     * @return Clients
     */
    public function setDbUsername($dbUsername)
    {
        $this->dbUsername = $dbUsername;

        return $this;
    }

    /**
     * Get dbUsername
     *
     * @return string
     */
    public function getDbUsername()
    {
        return $this->dbUsername;
    }

    /**
     * Set dbPassword
     *
     * @param string $dbPassword
     *
     * @return Clients
     */
    public function setDbPassword($dbPassword)
    {
        $this->dbPassword = $dbPassword;

        return $this;
    }

    /**
     * Get dbPassword
     *
     * @return string
     */
    public function getDbPassword()
    {
        return $this->dbPassword;
    }

    /**
     * Set dbName
     *
     * @param string $dbName
     *
     * @return Clients
     */
    public function setDbName($dbName)
    {
        $this->dbName = $dbName;

        return $this;
    }

    /**
     * Get dbName
     *
     * @return string
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Clients
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
     * @return Clients
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
     * Set interface
     *
     * @param string $interface
     *
     * @return Clients
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
}

