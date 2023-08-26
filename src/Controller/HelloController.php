<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class HelloController extends AbstractController {

    /**
    * @Route("hello")
    */
    function hello(LoggerInterface $logger){
        $logger->alert('logger!');
        return $this->render('hello.html.twig');
    }

}