<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController {

    /**
    * @Route("/user")
    */
    function createUserFor(Request $request){
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $userInfos = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($userInfos);
            $entityManager->flush();

            return new Response("Formulaire validé.");
        }

        return $this->render('form.html.twig', ['userForm' => $form->createView()]);
    }
}