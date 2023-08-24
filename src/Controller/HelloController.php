<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController {

    /**
    * @Route("hello")
    */
    function hello(){
        return $this->render('hello.html.twig');
    }

    /**
    * @Route("hello/{name}", name="helloWithName")
    */
    function helloWithName($name){
        return new Response('Hello ' . $name);
    }
}