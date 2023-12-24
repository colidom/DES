<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(): Response
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the login credentials from the request body
            $username = $_POST["user"];
            $password = $_POST["password"];

        }

        return $this->render('login/login.html.twig', [
            'title' => 'Login'
        ]);
    }
}
