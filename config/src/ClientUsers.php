<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ClientUsers
 *
 * @ORM\Table(name="client_users", uniqueConstraints={@ORM\UniqueConstraint(name="email_id_2", columns={"email"})}, indexes={@ORM\Index(name="email_id", columns={"email"}), @ORM\Index(name="fk_client_id", columns={"client_id"})})
 * @ORM\Entity
 */
class ClientUsers
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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=75, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nick_name", type="string", length=50, nullable=true)
     */
    private $nickName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_date", type="datetime", nullable=false)
     */
    private $updatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="identities", type="text", length=65535, nullable=true)
     */
    private $identities;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}

