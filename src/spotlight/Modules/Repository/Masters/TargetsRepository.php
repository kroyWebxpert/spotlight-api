<?php
namespace Spotlight\Repository\Masters;

use Spotlight\Entities\Clients\Campaigns;
use Spotlight\Entities\Clients\CampaignMatchfields as CampaignMatchfields;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ManagerRegistry;
use Spotlight\Entities\Masters\Targets;
 
class TargetsRepository
{
    /**
     * @var string
     */
    private $class = 'Spotlight\Entities\Masters\Targets';

    /**
     * @var EntityManager
     */
    private $em;
 
    public function __construct(EntityManager $em, ManagerRegistry $emMaster)
    {
        $this->em = $em;
        $this->emMaster = $emMaster->getManager('masterConnection'); 
    }
    

    public function saveTarget($target)
    {
        
        $this->emMaster->persist($target);
        $this->emMaster->flush();
    }

    public function updateTarget($id)
    {

        return   $this->emMaster->getRepository($this->class)->findOneBytargetUid($id);
           
    }


    public function getTargetResponse($query_string="")
    {
        if(!empty($query_string)){
            $official_response = $this->getResponse("http://cicero.azavea.com/v3.1/official?$query_string");
            if(isset($official_response->response->results)){
                if(count($official_response->response->results) == 0){
                    die('No location found for the given address.');
                }
            }else{
                die('Please check API.');
            }   
            return $official_response;
         }else{
            return false;
        }
    }

     // Function to do our API calls (returns object made from JSON)
    public function getResponse($url, $postfields='')
    {
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, True);
        if($postfields !== ''):
            curl_setopt ($ch, CURLOPT_POST, True);
            curl_setopt ($ch, CURLOPT_POSTFIELDS, $postfields);
        endif;
        $json = curl_exec($ch);
        curl_close($ch);
        return json_decode($json);
    } 
    
    /**
     * create Targets
     * @return Targets
     */
    private function prepareData($data)
    {
        return new Targets($data);
    }


    public function getTargetCity()
    {
        $fieldName = ['target.targetCity as city'];
        $orderBy   = ['target.targetCity'];
        $groupBy   = 'target.targetCity'; 

        $query  = $this->emMaster->createQueryBuilder()->select($fieldName)->from('Spotlight\Entities\Masters\Targets','target');
        $target_city = $query
                        ->where('target.targetCity != :targetCity')
                        ->groupBy($groupBy)
                        ->setParameter('targetCity', "")
                        ->getQuery()
                        ->getArrayResult();
        
         

        return   $target_city; 
    }

    public function getTargetState()
    {
        $fieldName = ['target.representingState as state'];
        $orderBy   = ['target.representingState'];
        $groupBy   = 'target.representingState'; 

        $query  = $this->emMaster->createQueryBuilder()->select($fieldName)->from('Spotlight\Entities\Masters\Targets','target');
        $target_state = $query
                        ->where('target.representingState != :representingState')
                        ->groupBy($groupBy)
                        ->setParameter('representingState', "")
                        ->getQuery()
                        ->getArrayResult();
            
        return   $target_state; 
    }

    public function getTargetParty()
    {
        $fieldName = ['target.party'];
        $orderBy   = ['target.party'];
        $groupBy   = 'target.party'; 

        $query  = $this->emMaster->createQueryBuilder()->select($fieldName)->from('Spotlight\Entities\Masters\Targets','target');
        $target_state = $query
                        ->where('target.party != :party')
                        ->groupBy($groupBy)
                        ->setParameter('party', "")
                        ->getQuery()
                        ->getArrayResult();
            
        return   $target_state; 
    }

    public function getTargetChannel()
    {
            
        $fieldName = ['target.twitterIdentifier','target.twitterIdentifier'];  

        $query  = $this->emMaster->createQueryBuilder()->select($fieldName)->from('Spotlight\Entities\Masters\Targets','target');
        $target_state = $query
                        ->where('target.twitterIdentifier != :twitterIdentifier')
                        ->where('target.facebookIdentifier != :facebookIdentifier')  
                        ->setParameter('twitterIdentifier', "")
                        ->setParameter('facebookIdentifier', "")
                        ->getQuery()
                        ->getArrayResult();
            
        return   $target_state; 
    }
    
}