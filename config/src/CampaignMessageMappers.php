<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignMessageMappers
 *
 * @ORM\Table(name="campaign_message_mappers", indexes={@ORM\Index(name="fk_campaign_message_id", columns={"campaign_id"}), @ORM\Index(name="fk_channel_message_id", columns={"channel_id"}), @ORM\Index(name="fk_segmentl_message_id", columns={"segment_id"})})
 * @ORM\Entity
 */
class CampaignMessageMappers
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
     * @var integer
     *
     * @ORM\Column(name="segment_id", type="integer", nullable=true)
     */
    private $segmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="message_label", type="string", length=50, nullable=true)
     */
    private $messageLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="is_editable", type="string", length=255, nullable=true)
     */
    private $isEditable = '0';

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

