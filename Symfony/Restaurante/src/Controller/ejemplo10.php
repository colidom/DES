<?php
// src/Controler/ejemplo10.php
namespace App\Controller;

use Symfony\bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class ejemplo10 extends AbstractController
{
    #[Route("/include", "include")]
    public function include()
    {
        return $this->render('includeCabecera.html.twig');

    }
}