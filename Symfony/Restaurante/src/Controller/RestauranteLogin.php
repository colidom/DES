<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class RestauranteLogin extends AbstractController
{
    #[Route("/loginbd", "loginbd")]
    public function loginbd()
    {
        $username = "Colidom";
        return $this->render('loginbd.html.twig', [
            'username' => $username
        ]);
    }
}
