<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $variable = "Hola Mundo";

        return $this->render('home/home.html.twig', [
            'title' => 'Inicio',
            'variable' => $variable
        ]);
    }
}
