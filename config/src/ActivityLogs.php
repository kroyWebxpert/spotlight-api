<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityLogs
 *
 * @ORM\Table(name="activity_logs", indexes={@ORM\Index(name="fk_client", columns={"client_id"}), @ORM\Index(name="fk_user_activity_log", columns={"user_id"}), @ORM\Index(name="fk_action_by_activity_log", columns={"action_by"})})
 * @ORM\Entity
 */
class ActivityLogs
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
     * @var string
     *
     * @ORM\Column(name="action_table", type="string", length=150, nullable=false)
     */
    private $actionTable;

    /**
     * @var string
     *
     * @ORM\Column(name="action_module", type="string", length=150, nullable=false)
     */
    private $actionModule;

    /**
     * @var integer
     *
     * @ORM\Column(name="action_item", type="integer", nullable=false)
     */
    private $actionItem;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=false)
     */
    private $action = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="action_date", type="datetime", nullable=false)
     */
    private $actionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="interface", type="string", length=255, nullable=true)
     */
    private $interface;

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
     * @var \ClientUsers
     *
     * @ORM\ManyToOne(targetEntity="ClientUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_by", referencedColumnName="id")
     * })
     */
    private $actionBy;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;


}

