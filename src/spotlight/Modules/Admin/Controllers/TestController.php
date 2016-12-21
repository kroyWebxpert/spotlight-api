<?php

namespace Spotlight\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Log\Writer;
use Monolog\Logger as Monolog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Encryption\DecryptException;
use Spotlight\Helpers\Helper as Helper;
use Config;
use View;
use Redirect; 
use Validator;
use Response;
use Auth;
use Crypt;
use Cookie;
use Hash;
use Lang;
use Input;
use Closure;
use URL; 


use Doctrine\ORM\EntityManagerInterface;

use Spotlight\Admin\Entities\Compaign; 
  

class TestController extends Controller
{


    public function index(EntityManagerInterface $em,Request $request)
    {
         die('fd');
        $users = $em->getRepository(Compaign::class)->findBy(['id'=>1]);

         $user = $em->getRepository(Compaign::class)->find(1);
 
        dd($user);

      /*  $user = new Compaign("name");
        $user->setDescription = "description";
        $user->setName = "Kundan Roy";
        $user->is_done = 1;*/
     //   $c  = $em->persist($user);
     //   $c = $em->flush();

      //  $t = $em->getRepository(Task::class)->where('id',1)->get();

      //  $data = $this->getJsonFromTaskEntity($t);

     //   print_r($t);

    }

    public  function getJsonFromTaskEntity($t)
    {
        $arr = array();
        $a = [];
        foreach ($t as $key => $value)
        {
            $arr['id'] =  $value->getId();
            $arr['name'] = $value->getName();
            $arr['description'] = $value->getDescription();

            $respose_data[]  =  $arr;
        }

        return  json_encode(array(
                'status' => 200,
                'message' => 'success',
                'data'  =>  $respose_data
            )
        );
    }
}
