<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Route;

class RestauranteLogin extends AbstractController
{

    #[Route("/login", "login")]
    public function login()
    {
        return $this->render('login.html.twig');
    }
}
