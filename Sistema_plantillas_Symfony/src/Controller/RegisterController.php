<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegisterController extends AbstractController
{
    #[Route('/register', name:'register')]
    public function index(): Response
    {
        return $this->render('register/register.html.twig', [
            'title' => 'Register',
        ]);
    }
}