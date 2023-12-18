<?php

// src/Controller/LoginController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        $title = 'Iniciar Sesión';

        return $this->render('login/index.html.twig', [
            'title' => $title,
        ]);
    }

    /**
     * @Route("/process_login", name="process_login", methods={"POST"})
     */
    public function processLogin(Request $request): Response
    {
        // Aquí se procesa el inicio de sesión
        // ...
    }
}
