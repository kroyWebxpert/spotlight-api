<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignChannelMappers
 *
 * @ORM\Table(name="campaign_channel_mappers", indexes={@ORM\Index(name="index_campaign_id", columns={"campaign_id"}), @ORM\Index(name="fk_campaign_channel_id", columns={"channel_id"})})
 * @ORM\Entity
 */
class CampaignChannelMappers
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
     * @ORM\Column(name="campaign_id", type="integer", nullable=false)
     */
    private $campaignId;

    /**
     * @var integer
     *
     * @ORM\Column(name="channel_id", type="integer", nullable=true)
     */
    private $channelId;

    /**
     * @var integer
     *
     * @ORM\Column(name="goal", type="bigint", nullable=true)
     */
    private $goal;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status = '1';

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

