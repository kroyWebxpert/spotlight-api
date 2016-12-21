<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PeopleActions
 *
 * @ORM\Table(name="people_actions", indexes={@ORM\Index(name="fk_campaign_user_id", columns={"people_id"}), @ORM\Index(name="fk_people_campaign_channel_id", columns={"campaign_id"})})
 * @ORM\Entity
 */
class PeopleActions
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
     * @ORM\Column(name="people_id", type="integer", nullable=true)
     */
    private $peopleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="channel_id", type="integer", nullable=true)
     */
    private $channelId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="message_send_date", type="datetime", nullable=true)
     */
    private $messageSendDate;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=true)
     */
    private $action = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

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

