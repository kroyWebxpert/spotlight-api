<?php



/**
 * PersonalizationTags
 */
class PersonalizationTags
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $targetFieldsName;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return PersonalizationTags
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return PersonalizationTags
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set targetFieldsName
     *
     * @param string $targetFieldsName
     *
     * @return PersonalizationTags
     */
    public function setTargetFieldsName($targetFieldsName)
    {
        $this->targetFieldsName = $targetFieldsName;

        return $this;
    }

    /**
     * Get targetFieldsName
     *
     * @return string
     */
    public function getTargetFieldsName()
    {
        return $this->targetFieldsName;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return PersonalizationTags
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return PersonalizationTags
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

