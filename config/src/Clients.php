<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity
 */
class Clients
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
     * @var string
     *
     * @ORM\Column(name="organization_name", type="string", length=150, nullable=true)
     */
    private $organizationName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=150, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=150, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=150, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=150, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=20, nullable=true)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="db_hostname", type="string", length=100, nullable=true)
     */
    private $dbHostname;

    /**
     * @var string
     *
     * @ORM\Column(name="db_username", type="string", length=255, nullable=true)
     */
    private $dbUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="db_password", type="string", length=255, nullable=true)
     */
    private $dbPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="db_name", type="string", length=150, nullable=true)
     */
    private $dbName;

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

