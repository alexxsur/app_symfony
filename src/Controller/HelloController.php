<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Greeter;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController {

    /**
    * @Route("hello")
    */
    function hello(Greeter $greeter){
        $message = $greeter->greet();
        return new Response($message);
    }

}