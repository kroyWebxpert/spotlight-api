<?php
namespace Spotlight\Repository\Maters;

use Spotlight\Entities\Clients\Campaigns;
use Spotlight\Entities\Clients\CampaignMatchfields as CampaignMatchfields;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ManagerRegistry;
 
class TargetsRepository
{
 
    /**
     * @var string
     */
    private $class = 'Spotlight\Entities\Clients\Campaigns';

    /**
     * @var string
     */
    private $classCampaignMatchfields = 'Spotlight\Entities\Clients\CampaignMatchfields';


    /**
     * @var ManagerRegistry
     */
    private $classMatchfieldsCriterias = 'Spotlight\Entities\Masters\MatchfieldsCriterias';
    

    /**
     * @var EntityManager
     */
    private $em;
 
 
    public function __construct(EntityManager $em,ManagerRegistry $emMaster)
    {
        $this->em = $em;
        $this->emMaster = $emMaster->getManager('masterConnection'); 
    }
    
    
    public function getMatchFields()
    {
        return $this->emMaster->getRepository($this->classMatchfieldsCriterias)->findAll();
    }

    public function getAllCampaign()
    {
        return $this->em->getRepository($this->class)->findAll();
    }      

    public function filterCampaignByFieldName($data,$record=null)
    {
        if($record==1)
        {
            return $this->em->getRepository($this->class)->findOneBy($data);
        }else{
            return $this->em->getRepository($this->class)->findBy($data);
        }
    } 
  
    public function setDefaultTitle(Campaigns $campaign)
    {
         $result    =   $this->em->getRepository($this->class)->findOneBy(array(), array('id' => 'DESC'),1);
         if($result!=null){
             $total_campaign =   $result->getId()+1;
         }else{
             $total_campaign =   1;
         }
        
         $title     =   "Untitled-$total_campaign";
        
         return $title;
    }
 
    public function createCampaign(Campaigns $campaign)
    {
        $this->em->persist($campaign);
        $this->em->flush();
    }
 
    public function updateCampaign(Campaigns $campaign, $request)
    {
       $field_name     =   '';
       foreach ($request->except('campaign_id') as $key => $value) {
           $field_name = $key;
       }
        $default_title = $this->setDefaultTitle($campaign);
        $title = $request->get('public_campaign_name');
       switch ($field_name) {
            case 'public_campaign_name':
                $title =  (isset($title) && !empty($title))?$title:$default_title;
                $campaign->setPublicCampaignName($title); 
                break;
            case 'headline':
                 $campaign->setHeadline($request->get('headline')); 
                break;
            case 'description':
                $campaign->setDescription($request->get('description')); 
                break;
            case 'cta_text':
                $campaign->setCtaText($request->get('cta_text')); 
                break;
            case 'cta_headline':
                $campaign->setCtaHeadline($request->get('cta_headline')); 
                break;
            default:
                # code...
                break;
        }  
         
        $this->em->persist($campaign);
        $this->em->flush();
    }
 	
 	public function validateCampaignTitle($title)
    {
        return $this->em->getRepository($this->class)->findOneByPublicCampaignName($title);
    }

    public function getCampaignById($id)
    {
        return $this->em->getRepository($this->class)->findOneBy(['id'=>$id]);
    }
 
    public function deleteCampaign(Campaigns $campaign)
    {
        $this->em->remove($post);
        $this->em->flush();
    }


    /**
     * update  Campaigns Match Criteria
     * @return Campaigns
     */
    public function updateCampaignMatchfields($campaign_id, $request)
    {   
        $campaign_match_field = new CampaignMatchfields;
        
        foreach ($request->input('match_field') as $key => $result) {
            $campaign_match_field = new CampaignMatchfields;
            $data   =   ['campaignId'=>$campaign_id,'fieldId'=>$result['field_id']]; 
            $id     =   $this->em->getRepository($this->classCampaignMatchfields)->findOneBy($data);
           
            if($id!=null)
            {    
                $id = $id->getId();
                $campaign_match_field = $this->em->getRepository($this->classCampaignMatchfields)->findOneById($id);
                $campaign_match_field->setCampaignId($campaign_id);  
                $campaign_match_field->setFieldOrder($result['field_order']);
                $campaign_match_field->setFieldId($result['field_id']);
                $campaign_match_field->setFieldLabel($result['field_label']);
                $campaign_match_field->setIsRequired($result['is_required']);
                $this->em->persist($campaign_match_field);
                $this->em->flush();
            }else{
                
                $campaign_match_field->setCampaignId($campaign_id);  
                $campaign_match_field->setFieldOrder($result['field_order']);
                $campaign_match_field->setFieldId($result['field_id']);
                $campaign_match_field->setFieldLabel($result['field_label']);
                $campaign_match_field->setIsRequired($result['is_required']);
                $this->em->persist($campaign_match_field);
                $this->em->flush();
            } 
        } 
    }

 
    /**
     * create Campaigns
     * @return Campaigns
     */
    private function prepareData($data)
    {
        return new Campaigns($data);
    }
    
}