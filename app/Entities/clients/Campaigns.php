<?php



use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="admin_campaign_name", type="string", length=255, nullable=true)
     */
    private $adminCampaignName;

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
     * @ORM\Column(name="cta", type="string", length=255, nullable=true)
     */
    private $cta;

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


}

