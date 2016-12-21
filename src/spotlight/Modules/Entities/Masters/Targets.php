<?php

namespace Spotlight\Entities\Masters;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\ArrayCollection;
//use Doctrine\DBAL\Types\Type; 



/**
 * Targets
 *
 * @ORM\Table(name="targets", indexes={@ORM\Index(name="index_f_name", columns={"first_name"}), @ORM\Index(name="index_l_name", columns={"last_name"}), @ORM\Index(name="index_target_uid", columns={"target_uid"})})
 * @ORM\Entity
 */
class Targets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="target_uid", type="bigint", nullable=true)
     */
    private $targetUid;

    /**
     * @var string
     *
     * @ORM\Column(name="name_suffix", type="string", length=30, nullable=true)
     */
    private $nameSuffix;

    

     /**
     * @var string
     *
     * @ORM\Column(name="name_formal", type="string", length=500, nullable=true)
     */
    private $nameFormal;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=100, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="middle_initial", type="string", length=30, nullable=true)
     */
    private $middleInitial;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="nick_name", type="string", length=70, nullable=true)
     */
    private $nickName;

    /**
     * @var string
     *
     * @ORM\Column(name="salutation", type="string", length=50, nullable=true)
     */
    private $salutation;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_1", type="string", length=20, nullable=true)
     */
    private $phone1;

    
    /**
     * @var string
     *
     * @ORM\Column(name="target_city", type="string", length=500, nullable=true)
     */
    private $targetCity;

    /**
     * @var string
     *
     * @ORM\Column(name="ofc_country", type="string", length=50, nullable=true)
     */
    private $ofcCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="representing_state", type="string", length=50, nullable=true)
     */
    private $representingState;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_origin_url", type="string", length=255, nullable=true)
     */
    private $photoOriginUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="party", type="string", length=150, nullable=true)
     */
    private $party;

    /**
     * @var string
     *
     * @ORM\Column(name="committees", type="text", length=65535, nullable=true)
     */
    private $committees;

    /**
     * @var string
     *
     * @ORM\Column(name="target_address1", type="text", length=65535, nullable=true)
     */
    private $targetAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="target_address2", type="text", length=65535, nullable=true)
     */
    private $targetAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="web_form_url", type="string", length=150, nullable=true)
     */
    private $webFormUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update_date", type="datetime", nullable=true)
     */
    private $lastUpdateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="chamber_name_formal", type="string", length=100, nullable=true)
     */
    private $chamberNameFormal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_from", type="datetime", nullable=true)
     */
    private $validFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_to", type="datetime", nullable=true)
     */
    private $validTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="term_end_date", type="datetime", nullable=true)
     */
    private $termEndDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sk", type="integer", nullable=true)
     */
    private $sk;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=100, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_identifier", type="text", length=65535, nullable=true)
     */
    private $twitterIdentifier;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_identifier_value", type="string", length=255, nullable=true)
     */
    private $twitterIdentifierValue;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_identifier", type="text", length=65535, nullable=true)
     */
    private $facebookIdentifier;

    /**
     * @var integer
     *
     * @ORM\Column(name="facebook_id", type="bigint", nullable=true)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
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
     * Set targetUid
     *
     * @param integer $targetUid
     *
     * @return Targets
     */
    public function setTargetUid($targetUid)
    {
        $this->targetUid = $targetUid;

        return $this;
    }

    /**
     * Get targetUid
     *
     * @return integer
     */
    public function getTargetUid()
    {
        return $this->targetUid;
    }

    /**
     * Set nameSuffix
     *
     * @param string $nameSuffix
     *
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * Set targetCity
     *
     * @param string $targetCity
     *
     * @return Targets
     */
    public function setTargetCity($targetCity)
    {
        $this->targetCity = $targetCity;

        return $this;
    }

    /**
     * Get targetCity
     *
     * @return string
     */
    public function getTargetCity()
    {
        return $this->targetCity;
    } 

    /**
     * Set ofcCountry
     *
     * @param string $ofcCountry
     *
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * Set source
     *
     * @param string $source
     *
     * @return Targets
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
     * Set targetAddress1
     *
     * @param string $targetAddress1
     *
     * @return Targets
     */
    public function setTargetAddress1($targetAddress1)
    {
        $this->targetAddress1 = $targetAddress1;

        return $this;
    }

    /**
     * Get targetAddress1
     *
     * @return string
     */
    public function getTargetAddress1()
    {
        return $this->targetAddress1;
    }
    /**
     * Set targetAddress2
     *
     * @param string $targetAddress2
     *
     * @return Targets
     */
    public function setTargetAddress2($targetAddress2)
    {
        $this->targetAddress2 = $targetAddress2;

        return $this;
    }

    /**
     * Get targetAddress2
     *
     * @return targetAddress2
     */
    public function getTargetAddress2()
    {
        return $this->targetAddress2;
    }
   

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Targets
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
     * Set nameFormal
     *
     * @param string $nameFormal
     *
     * @return Targets
     */
    public function setNameFormal($nameFormal)
    {
        $this->status = $nameFormal;

        return $this;
    }

    /**
     * Get nameFormal
     *
     * @return string
     */
    public function getNameFormal()
    {
        return $this->nameFormal;
    }
       /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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
     * @return Targets
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

