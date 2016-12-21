<?php

namespace Spotlight\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\EnumType; 

/**
 * @ORM\Entity
 * @ORM\Table(name="campaigns")
 */

class Campaign
{
    
    /**
     * @var EntityManager
     */
    private $em;
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id; 

     /**
     * @ORM\Column(name="client_id", type="integer", length=11)
     * @ORM\Column(type="integer")
     */
    private $client_id;

     /**
     * @ORM\Column(name="user_id", type="integer", length=11)
     */
    private $user_id;

    /**
     *  @ORM\Column(name="issue_id", type="integer", length=11)
     */
    private $issue_id;


    /**
    * @ORM\Column(name="admin_campaign_name", type="string", length=255)
    */
    private $admin_campaign_name;
    
   /**
     * 
     * @ORM\Column(name="public_campaign_name", type="string", length=255)
     */
    private $public_campaign_name;


    /**
    * @ORM\Column(name="slug", type="string", length=255)
    */
    private $slug;

    /**
    * @ORM\Column(name="headline", type="text")
    */
    private $headline;

    /**
    * @ORM\Column(name="match_criteria_required")
    */
    private $match_criteria_required;

    /**
    * @ORM\Column(name="campaign_url", type="text")
    */
    private $campaign_url;

   /**
    * @ORM\Column(name="published_by", type="integer", length=11)
    */
    private $published_by;


    /**
    * @ORM\Column(name="publish_date", type="datetime")
    */
    private $publish_date;


   /**
    * @ORM\Column(name="status")
    */
    private $status;
 
    /**
    * @ORM\Column(name="status_changed_by", type="integer", length=11)
    */
    private $status_changed_by;
 

    /**
    * @ORM\Column(name="status_changed_date", type="datetime")
    */
    private $status_changed_date;
 

    /**
    * @ORM\Column(name="created_at", type="datetime")
    */
    private $created_at;

     
    /**
    * @ORM\Column(name="updated_at", type="datetime")
    */
    private $updated_at;  
    

    public function __construct($request)
    {

        $this->public_campaign_name = $request->get('public_campaign_name');
        $this->admin_campaign_name = $request->get('admin_campaign_name');
        
           
    }

    public function getId()
    {
        return $this->id;
    }

    public function getClientId()
    {
        return $this->client_id; 
    }

    public function getPublicCampaignName()
    {
        return $this->public_campaign_name;
    }

    public function setPublicCampaignName()
    {
        return $this->public_campaign_name;
    }

    public function getAdminCampaignName()
    {
        return $this->admin_campaign_name;
    }

    public function setAdminCampaignName()
    {
        return $this->admin_campaign_name;
    }

     
}