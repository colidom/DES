<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    #[Route('/login', name:'login')]
    public function index(): Response
    {
        return $this->render('login/login.html.twig', [
            'title' => 'Inicio',
        ]);
    }

    #[Route('/process_login', name:'process_login')]
    public function processLogin(Request $request): Response
    {
        // Aquí se procesa el inicio de sesión
        // ...
    }
}