<?php



use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="is_required", type="string", length=255, nullable=true)
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


}

