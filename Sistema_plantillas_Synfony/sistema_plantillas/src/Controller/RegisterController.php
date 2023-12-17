<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function index(): Response
    {
        $title = 'Registrarse';
        $user = '';
        $email = '';
        $password = '';
        $password2 = '';
        $passwords_match = false;
        $message = '';

        if ($password === $password2) {
            $passwords_match = true;
            $message = 'Las contraseñas coinciden';
        } else {
            $message = 'Las contraseñas no coinciden';
        }

        return $this->render('register/index.html.twig', [
            'title' => $title,
            'user' => $user,
            'email' => $email,
            'password' => $password,
            'password2' => $password2,
            'passwords_match' => $passwords_match,
            'message' => $message,
        ]);
    }
}
