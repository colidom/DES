<?php
//src/Controler/contCatalogo.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class contCatalogo extends AbstractController
{
    #[Route("/catalogo", "catalogo")]
    public function login()
    {
        return $this->render('plantillaTarea.html.twig', array("ruta" => "catalogo"));
    }
}