<?php
namespace Spotlight\Entities\Clients;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Type; 

 /**
 * Campaigns
 *
 * @ORM\Table(name="campaigns", uniqueConstraints={@ORM\UniqueConstraint(name="unique_title", columns={"public_campaign_name"}), @ORM\UniqueConstraint(name="unique_slug", columns={"slug"})}, indexes={@ORM\Index(name="fk_campaign_issue", columns={"issue_id"}), @ORM\Index(name="index_campaign_title", columns={"public_campaign_name"}), @ORM\Index(name="index_campaign_slug", columns={"slug"}), @ORM\Index(name="fk_campaign_client", columns={"client_id"}), @ORM\Index(name="fk_campaign_user", columns={"user_id"})})
 * @ORM\Entity
 */
class Campaigns
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
     * @ORM\Column(name="issue_id", type="integer", nullable=true)
     */
    private $issueId;


    /**
     * @var string
     *
     * @ORM\Column(name="public_campaign_name", type="string", length=255, nullable=true)
     */
    private $publicCampaignName;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="text", length=65535, nullable=true)
     */
    private $headline;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="cta_text", type="string", length=500, nullable=true)
     */
    private $ctaText;


    /**
     * @var string
     *
     * @ORM\Column(name="cta_headline", type="string", length=500, nullable=true)
     */
    private $ctaHeadline;

    /**
     * @var string
     *
     * @ORM\Column(name="match_criteria_required", type="string", length=255, nullable=true)
     */
    private $matchCriteriaRequired = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_url", type="text", length=65535, nullable=true)
     */
    private $campaignUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="published_by", type="integer", nullable=true)
     */
    private $publishedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publish_date", type="datetime", nullable=true)
     */
    private $publishDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status_changed_by", type="integer", nullable=true)
     */
    private $statusChangedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_changed_date", type="datetime", nullable=true)
     */
    private $statusChangedDate;

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
     * @var string
     *
     * @ORM\Column(name="interface", type="string", length=255, nullable=true)
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
     * @return Campaigns
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
     * @return Campaigns
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
     * Set issueId
     *
     * @param integer $issueId
     *
     * @return Campaigns
     */
    public function setIssueId($issueId)
    {
        $this->issueId = $issueId;

        return $this;
    }

    /**
     * Get issueId
     *
     * @return integer
     */
    public function getIssueId()
    {
        return $this->issueId;
    }


    /**
     * Set publicCampaignName
     *
     * @param string $publicCampaignName
     *
     * @return Campaigns
     */
    public function setPublicCampaignName($publicCampaignName)
    {
        $this->publicCampaignName = $publicCampaignName;

        return $this;
    }

    /**
     * Get publicCampaignName
     *
     * @return string
     */
    public function getPublicCampaignName()
    {
        return $this->publicCampaignName;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Campaigns
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set headline
     *
     * @param string $headline
     *
     * @return Campaigns
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Campaigns
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Get ctaText
     *
     * @return string
     */
    public function getCtaText()
    {
        return $this->ctaText;
    } 
    /**
     * Set ctaText
     *
     * @param string $ctaText
     *
     * @return Campaigns
     */
    public function setCtaText($ctaText)
    {
        $this->ctaText = $ctaText;

        return $this;
    }

    /**
     * Get ctaHeadline
     *
     * @return string
     */
    public function getCtaHeadline()
    {
        return $this->ctaHeadline;
    }

    /**
     * Set ctaHeadline
     *
     * @param string $ctaHeadline
     *
     * @return Campaigns
     */
    public function setCtaHeadline($ctaHeadline)
    {
        $this->ctaHeadline = $ctaHeadline;

        return $this;
    }

   
    /**
     * Set matchCriteriaRequired
     *
     * @param string $matchCriteriaRequired
     *
     * @return Campaigns
     */
    public function setMatchCriteriaRequired($matchCriteriaRequired)
    {
        $this->matchCriteriaRequired = $matchCriteriaRequired;

        return $this;
    }

    /**
     * Get matchCriteriaRequired
     *
     * @return string
     */
    public function getMatchCriteriaRequired()
    {
        return $this->matchCriteriaRequired;
    }

    /**
     * Set campaignUrl
     *
     * @param string $campaignUrl
     *
     * @return Campaigns
     */
    public function setCampaignUrl($campaignUrl)
    {
        $this->campaignUrl = $campaignUrl;

        return $this;
    }

    /**
     * Get campaignUrl
     *
     * @return string
     */
    public function getCampaignUrl()
    {
        return $this->campaignUrl;
    }

    /**
     * Set publishedBy
     *
     * @param integer $publishedBy
     *
     * @return Campaigns
     */
    public function setPublishedBy($publishedBy)
    {
        $this->publishedBy = $publishedBy;

        return $this;
    }

    /**
     * Get publishedBy
     *
     * @return integer
     */
    public function getPublishedBy()
    {
        return $this->publishedBy;
    }

    /**
     * Set publishDate
     *
     * @param \DateTime $publishDate
     *
     * @return Campaigns
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    /**
     * Get publishDate
     *
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Campaigns
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
     * Set statusChangedBy
     *
     * @param integer $statusChangedBy
     *
     * @return Campaigns
     */
    public function setStatusChangedBy($statusChangedBy)
    {
        $this->statusChangedBy = $statusChangedBy;

        return $this;
    }

    /**
     * Get statusChangedBy
     *
     * @return integer
     */
    public function getStatusChangedBy()
    {
        return $this->statusChangedBy;
    }

    /**
     * Set statusChangedDate
     *
     * @param \DateTime $statusChangedDate
     *
     * @return Campaigns
     */
    public function setStatusChangedDate($statusChangedDate)
    {
        $this->statusChangedDate = $statusChangedDate;

        return $this;
    }

    /**
     * Get statusChangedDate
     *
     * @return \DateTime
     */
    public function getStatusChangedDate()
    {
        return $this->statusChangedDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Campaigns
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
     * @return Campaigns
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
     * @return Campaigns
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

