<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController {

    function hello(){
        return $this->render('base.html.twig');
    }
}