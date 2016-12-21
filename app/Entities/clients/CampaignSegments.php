<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignSegments
 *
 * @ORM\Table(name="campaign_segments", indexes={@ORM\Index(name="fk_campaign_id_segment", columns={"campaign_id"})})
 * @ORM\Entity
 */
class CampaignSegments
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
     * @ORM\Column(name="channel_id", type="integer", nullable=true)
     */
    private $channelId;

    /**
     * @var string
     *
     * @ORM\Column(name="segment_label", type="string", length=100, nullable=true)
     */
    private $segmentLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

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


}

