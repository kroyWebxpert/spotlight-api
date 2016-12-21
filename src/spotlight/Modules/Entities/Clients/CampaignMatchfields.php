<?php

namespace Spotlight\Entities\Clients;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Type; 

/**
 * CampaignMatchfields
 *
 * @ORM\Table(name="campaign_matchfields", indexes={@ORM\Index(name="fk_campaign_matchfield_id", columns={"campaign_id"}), @ORM\Index(name="fk_match_field_id", columns={"field_id"})})
 * @ORM\Entity
 */
class CampaignMatchfields
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
     * @ORM\Column(name="client_id", type="integer", nullable=true)
     */
    private $clientId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="campaign_id", type="integer", nullable=true)
     */
    private $campaignId;

    /**
     * @var integer
     *
     * @ORM\Column(name="field_order", type="integer", nullable=true)
     */
    private $fieldOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="field_id", type="integer", nullable=true)
     */
    private $fieldId;

    /**
     * @var string
     *
     * @ORM\Column(name="field_label", type="text", length=65535, nullable=true)
     */
    private $fieldLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="is_required", type="string", length=1, nullable=true)
     */
    private $isRequired = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

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
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return CampaignMatchfields
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
     * @return CampaignMatchfields
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
     * @return CampaignMatchfields
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
     * Set fieldOrder
     *
     * @param integer $fieldOrder
     *
     * @return CampaignMatchfields
     */
    public function setFieldOrder($fieldOrder)
    {
        $this->fieldOrder = $fieldOrder;

        return $this;
    }

    /**
     * Get fieldOrder
     *
     * @return integer
     */
    public function getFieldOrder()
    {
        return $this->fieldOrder;
    }

    /**
     * Set fieldId
     *
     * @param integer $fieldId
     *
     * @return CampaignMatchfields
     */
    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    /**
     * Get fieldId
     *
     * @return integer
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * Set fieldLabel
     *
     * @param string $fieldLabel
     *
     * @return CampaignMatchfields
     */
    public function setFieldLabel($fieldLabel)
    {
        $this->fieldLabel = $fieldLabel;

        return $this;
    }

    /**
     * Get fieldLabel
     *
     * @return string
     */
    public function getFieldLabel()
    {
        return $this->fieldLabel;
    }

    /**
     * Set isRequired
     *
     * @param string $isRequired
     *
     * @return CampaignMatchfields
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    /**
     * Get isRequired
     *
     * @return string
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CampaignMatchfields
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
     * @return CampaignMatchfields
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

