<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\NewUser;
use App\Task ;
use JsonSerializable;
use Response;

class TestController extends Controller
{


    public function index(EntityManagerInterface $em,Request $request)
    {
        $user = new Task("name","desc");
        $user->setDescription = "description";
        $user->setName = "Kundan Roy";
        $user->is_done = 1;
     //   $c  = $em->persist($user);
     //   $c = $em->flush();

        $t = $em->getRepository(Task::class)->where('id',1)->get();

      //  $data = $this->getJsonFromTaskEntity($t);

        print_r($t);

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
