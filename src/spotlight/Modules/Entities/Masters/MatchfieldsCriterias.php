<?php

namespace Spotlight\Entities\Masters;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Type; 




/**
 * MatchfieldsCriterias
 *
 * @ORM\Table(name="matchfields_criterias")
 * @ORM\Entity
 */
class MatchfieldsCriterias
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
     * @ORM\Column(name="field_key", type="string", length=100, nullable=true)
     */
    private $fieldKey;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type = 'text';

    /**
     * @var string
     *
     * @ORM\Column(name="field_label", type="string", length=150, nullable=true)
     */
    private $fieldLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="is_geo_field", type="string", length=255, nullable=true)
     */
    private $isGeoField = '0';


     /**
     * @var string
     *
     * @ORM\Column(name="is_required", type="integer", length=1, nullable=true)
     */
    private $isRequired = '1';


    /**
     * @var integer
     *
     * @ORM\Column(name="field_order", type="integer", nullable=false)
     */
    private $fieldOrder;



    /**
     * @var integer
     *
     * @ORM\Column(name="field_group", type="integer", nullable=false)
     */
    private $fieldGroup; 


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
     * Set fieldKey
     *
     * @param string $fieldKey
     *
     * @return MatchfieldsCriterias
     */
    public function setFieldKey($fieldKey)
    {
        $this->fieldKey = $fieldKey;

        return $this;
    }

    /**
     * Get fieldKey
     *
     * @return string
     */
    public function getFieldKey()
    {
        return $this->fieldKey;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return MatchfieldsCriterias
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set fieldLabel
     *
     * @param string $fieldLabel
     *
     * @return MatchfieldsCriterias
     */
    public function setFieldLabel($fieldLabel)
    {
        $this->fieldLabel = $fieldLabel;

        return $this;
    }

    /**
     * Get fieldLabel
     *
     * @return string
     */
    public function getFieldLabel()
    {
        return $this->fieldLabel;
    }

    /**
     * Set isGeoField
     *
     * @param string $isGeoField
     *
     * @return MatchfieldsCriterias
     */
    public function setIsGeoField($isGeoField)
    {
        $this->isGeoField = $isGeoField;

        return $this;
    }

    /**
     * Get isGeoField
     *
     * @return string
     */
    public function getIsGeoField()
    {
        return $this->isGeoField;
    }

    /**
     * Set fieldOrder
     *
     * @param integer $fieldOrder
     *
     * @return MatchfieldsCriterias
     */
    public function setFieldOrder($fieldOrder)
    {
        $this->fieldOrder = $fieldOrder;

        return $this;
    }

    /**
     * Get fieldOrder
     *
     * @return integer
     */
    public function getFieldOrder()
    {
        return $this->fieldOrder;
    }
    
    /**
     * Set fieldGroup
     *
     * @param integer $fieldGroup
     *
     * @return MatchfieldsCriterias
     */
    public function setFieldGroup($fieldGroup)
    {
        $this->fieldGroup = $fieldGroup;

        return $this;
    }

    /**
     * Get fieldGroup
     *
     * @return integer
     */
    public function getFieldGroup()
    {
        return $this->fieldGroup;
    }
 
 
    /**
     * Set isRequired
     *
     * @param integer $isRequired
     *
     * @return MatchfieldsCriterias
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    /**
     * Get isRequired
     *
     * @return integer
     */
    public function getIsRequired()
    {
        return $this->fieldOrder;
    }
}

