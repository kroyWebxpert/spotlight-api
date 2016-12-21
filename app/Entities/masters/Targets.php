<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Targets
 *
 * @ORM\Table(name="targets", indexes={@ORM\Index(name="index_f_name", columns={"first_name"}), @ORM\Index(name="index_l_name", columns={"last_name"}), @ORM\Index(name="index_target_uid", columns={"target_uid"})})
 * @ORM\Entity
 */
class Targets
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
     * @ORM\Column(name="target_uid", type="bigint", nullable=true)
     */
    private $targetUid;

    /**
     * @var string
     *
     * @ORM\Column(name="name_suffix", type="string", length=30, nullable=true)
     */
    private $nameSuffix;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=100, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="middle_initial", type="string", length=30, nullable=true)
     */
    private $middleInitial;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="nick_name", type="string", length=70, nullable=true)
     */
    private $nickName;

    /**
     * @var string
     *
     * @ORM\Column(name="salutation", type="string", length=50, nullable=true)
     */
    private $salutation;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_1", type="string", length=20, nullable=true)
     */
    private $phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="ofc_country", type="string", length=50, nullable=true)
     */
    private $ofcCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="representing_state", type="string", length=50, nullable=true)
     */
    private $representingState;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_origin_url", type="string", length=255, nullable=true)
     */
    private $photoOriginUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="party", type="string", length=150, nullable=true)
     */
    private $party;

    /**
     * @var string
     *
     * @ORM\Column(name="committees", type="text", length=65535, nullable=true)
     */
    private $committees;

    /**
     * @var string
     *
     * @ORM\Column(name="web_form_url", type="string", length=150, nullable=true)
     */
    private $webFormUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update_date", type="datetime", nullable=true)
     */
    private $lastUpdateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="chamber_name_formal", type="string", length=100, nullable=true)
     */
    private $chamberNameFormal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_from", type="datetime", nullable=true)
     */
    private $validFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_to", type="datetime", nullable=true)
     */
    private $validTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="term_end_date", type="datetime", nullable=true)
     */
    private $termEndDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sk", type="integer", nullable=true)
     */
    private $sk;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=100, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_identifier", type="text", length=65535, nullable=true)
     */
    private $twitterIdentifier;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_identifier_value", type="string", length=255, nullable=true)
     */
    private $twitterIdentifierValue;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_identifier", type="text", length=65535, nullable=true)
     */
    private $facebookIdentifier;

    /**
     * @var integer
     *
     * @ORM\Column(name="facebook_id", type="bigint", nullable=true)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}

