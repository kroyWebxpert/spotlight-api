<?php



use Doctrine\ORM\Mapping as ORM;

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
     * @var integer
     *
     * @ORM\Column(name="field_order", type="integer", nullable=false)
     */
    private $fieldOrder;


}

