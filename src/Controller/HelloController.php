<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController {

    function hello(Request $request){
        $params = $request->query->all();
        $string = "Les paramètres sont: </br>";
        foreach ($params as $key => $value) {
            $string = $string . '-' . $key . ':' . $value . '</br>';
        }
        return new Response($string);
    }
}