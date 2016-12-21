<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Issues
 *
 * @ORM\Table(name="issues")
 * @ORM\Entity
 */
class Issues
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
     * @ORM\Column(name="issue_title", type="string", length=150, nullable=true)
     */
    private $issueTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="issue_description", type="text", length=65535, nullable=true)
     */
    private $issueDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="issue_type", type="string", length=150, nullable=true)
     */
    private $issueType;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=200, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="source_type", type="string", length=255, nullable=true)
     */
    private $sourceType = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer", nullable=true)
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status = '0';

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

