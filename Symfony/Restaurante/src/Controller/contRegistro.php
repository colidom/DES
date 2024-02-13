<?php
//src/Controler/contRegistro.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class contRegistro extends AbstractController
{
    #[Route("/registro", "registro")]
    public function login()
    {
        return $this->render('plantillaTarea.html.twig', array("ruta" => "registro"));
    }
}