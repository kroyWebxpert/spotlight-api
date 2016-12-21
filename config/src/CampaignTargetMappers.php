<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignTargetMappers
 *
 * @ORM\Table(name="campaign_target_mappers", indexes={@ORM\Index(name="fk_campaing_target_mapper_cid", columns={"campaign_id"}), @ORM\Index(name="fk_campaing_target_mapper_tid", columns={"target_id"})})
 * @ORM\Entity
 */
class CampaignTargetMappers
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
     * @ORM\Column(name="target_id", type="integer", nullable=true)
     */
    private $targetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="segment_id", type="integer", nullable=true)
     */
    private $segmentId;

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

