<?php



/**
 * CustomTargets
 */
class CustomTargets
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
     * @var string
     */
    private $nameSuffix;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $middleInitial;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $nickName;

    /**
     * @var string
     */
    private $salutation;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $phone1;

    /**
     * @var string
     */
    private $ofcCountry;

    /**
     * @var string
     */
    private $representingState;

    /**
     * @var string
     */
    private $photoOriginUrl;

    /**
     * @var string
     */
    private $party;

    /**
     * @var string
     */
    private $committees;

    /**
     * @var string
     */
    private $webFormUrl;

    /**
     * @var \DateTime
     */
    private $lastUpdateDate;

    /**
     * @var string
     */
    private $chamberNameFormal;

    /**
     * @var \DateTime
     */
    private $validFrom;

    /**
     * @var \DateTime
     */
    private $validTo;

    /**
     * @var \DateTime
     */
    private $termEndDate;

    /**
     * @var integer
     */
    private $sk;

    /**
     * @var string
     */
    private $contactEmail;

    /**
     * @var string
     */
    private $twitterIdentifier;

    /**
     * @var string
     */
    private $twitterIdentifierValue;

    /**
     * @var string
     */
    private $facebookIdentifier;

    /**
     * @var integer
     */
    private $facebookId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $updatedBy;

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
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return CustomTargets
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
     * @return CustomTargets
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
     * Set nameSuffix
     *
     * @param string $nameSuffix
     *
     * @return CustomTargets
     */
    public function setNameSuffix($nameSuffix)
    {
        $this->nameSuffix = $nameSuffix;

        return $this;
    }

    /**
     * Get nameSuffix
     *
     * @return string
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return CustomTargets
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set middleInitial
     *
     * @param string $middleInitial
     *
     * @return CustomTargets
     */
    public function setMiddleInitial($middleInitial)
    {
        $this->middleInitial = $middleInitial;

        return $this;
    }

    /**
     * Get middleInitial
     *
     * @return string
     */
    public function getMiddleInitial()
    {
        return $this->middleInitial;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return CustomTargets
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set nickName
     *
     * @param string $nickName
     *
     * @return CustomTargets
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }

    /**
     * Get nickName
     *
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * Set salutation
     *
     * @param string $salutation
     *
     * @return CustomTargets
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Get salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return CustomTargets
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
     * Set phone1
     *
     * @param string $phone1
     *
     * @return CustomTargets
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set ofcCountry
     *
     * @param string $ofcCountry
     *
     * @return CustomTargets
     */
    public function setOfcCountry($ofcCountry)
    {
        $this->ofcCountry = $ofcCountry;

        return $this;
    }

    /**
     * Get ofcCountry
     *
     * @return string
     */
    public function getOfcCountry()
    {
        return $this->ofcCountry;
    }

    /**
     * Set representingState
     *
     * @param string $representingState
     *
     * @return CustomTargets
     */
    public function setRepresentingState($representingState)
    {
        $this->representingState = $representingState;

        return $this;
    }

    /**
     * Get representingState
     *
     * @return string
     */
    public function getRepresentingState()
    {
        return $this->representingState;
    }

    /**
     * Set photoOriginUrl
     *
     * @param string $photoOriginUrl
     *
     * @return CustomTargets
     */
    public function setPhotoOriginUrl($photoOriginUrl)
    {
        $this->photoOriginUrl = $photoOriginUrl;

        return $this;
    }

    /**
     * Get photoOriginUrl
     *
     * @return string
     */
    public function getPhotoOriginUrl()
    {
        return $this->photoOriginUrl;
    }

    /**
     * Set party
     *
     * @param string $party
     *
     * @return CustomTargets
     */
    public function setParty($party)
    {
        $this->party = $party;

        return $this;
    }

    /**
     * Get party
     *
     * @return string
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Set committees
     *
     * @param string $committees
     *
     * @return CustomTargets
     */
    public function setCommittees($committees)
    {
        $this->committees = $committees;

        return $this;
    }

    /**
     * Get committees
     *
     * @return string
     */
    public function getCommittees()
    {
        return $this->committees;
    }

    /**
     * Set webFormUrl
     *
     * @param string $webFormUrl
     *
     * @return CustomTargets
     */
    public function setWebFormUrl($webFormUrl)
    {
        $this->webFormUrl = $webFormUrl;

        return $this;
    }

    /**
     * Get webFormUrl
     *
     * @return string
     */
    public function getWebFormUrl()
    {
        return $this->webFormUrl;
    }

    /**
     * Set lastUpdateDate
     *
     * @param \DateTime $lastUpdateDate
     *
     * @return CustomTargets
     */
    public function setLastUpdateDate($lastUpdateDate)
    {
        $this->lastUpdateDate = $lastUpdateDate;

        return $this;
    }

    /**
     * Get lastUpdateDate
     *
     * @return \DateTime
     */
    public function getLastUpdateDate()
    {
        return $this->lastUpdateDate;
    }

    /**
     * Set chamberNameFormal
     *
     * @param string $chamberNameFormal
     *
     * @return CustomTargets
     */
    public function setChamberNameFormal($chamberNameFormal)
    {
        $this->chamberNameFormal = $chamberNameFormal;

        return $this;
    }

    /**
     * Get chamberNameFormal
     *
     * @return string
     */
    public function getChamberNameFormal()
    {
        return $this->chamberNameFormal;
    }

    /**
     * Set validFrom
     *
     * @param \DateTime $validFrom
     *
     * @return CustomTargets
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Get validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Set validTo
     *
     * @param \DateTime $validTo
     *
     * @return CustomTargets
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;

        return $this;
    }

    /**
     * Get validTo
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Set termEndDate
     *
     * @param \DateTime $termEndDate
     *
     * @return CustomTargets
     */
    public function setTermEndDate($termEndDate)
    {
        $this->termEndDate = $termEndDate;

        return $this;
    }

    /**
     * Get termEndDate
     *
     * @return \DateTime
     */
    public function getTermEndDate()
    {
        return $this->termEndDate;
    }

    /**
     * Set sk
     *
     * @param integer $sk
     *
     * @return CustomTargets
     */
    public function setSk($sk)
    {
        $this->sk = $sk;

        return $this;
    }

    /**
     * Get sk
     *
     * @return integer
     */
    public function getSk()
    {
        return $this->sk;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     *
     * @return CustomTargets
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set twitterIdentifier
     *
     * @param string $twitterIdentifier
     *
     * @return CustomTargets
     */
    public function setTwitterIdentifier($twitterIdentifier)
    {
        $this->twitterIdentifier = $twitterIdentifier;

        return $this;
    }

    /**
     * Get twitterIdentifier
     *
     * @return string
     */
    public function getTwitterIdentifier()
    {
        return $this->twitterIdentifier;
    }

    /**
     * Set twitterIdentifierValue
     *
     * @param string $twitterIdentifierValue
     *
     * @return CustomTargets
     */
    public function setTwitterIdentifierValue($twitterIdentifierValue)
    {
        $this->twitterIdentifierValue = $twitterIdentifierValue;

        return $this;
    }

    /**
     * Get twitterIdentifierValue
     *
     * @return string
     */
    public function getTwitterIdentifierValue()
    {
        return $this->twitterIdentifierValue;
    }

    /**
     * Set facebookIdentifier
     *
     * @param string $facebookIdentifier
     *
     * @return CustomTargets
     */
    public function setFacebookIdentifier($facebookIdentifier)
    {
        $this->facebookIdentifier = $facebookIdentifier;

        return $this;
    }

    /**
     * Get facebookIdentifier
     *
     * @return string
     */
    public function getFacebookIdentifier()
    {
        return $this->facebookIdentifier;
    }

    /**
     * Set facebookId
     *
     * @param integer $facebookId
     *
     * @return CustomTargets
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return integer
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return CustomTargets
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
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return CustomTargets
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CustomTargets
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
     * Set updatedBy
     *
     * @param integer $updatedBy
     *
     * @return CustomTargets
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return integer
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return CustomTargets
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
     * @return CustomTargets
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

