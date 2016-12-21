<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalizationTags
 *
 * @ORM\Table(name="personalization_tags")
 * @ORM\Entity
 */
class PersonalizationTags
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
     * @ORM\Column(name="key", type="string", length=100, nullable=true)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=150, nullable=true)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="target_fields_name", type="string", length=200, nullable=true)
     */
    private $targetFieldsName;

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

