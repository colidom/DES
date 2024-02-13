<?php
//src/Controler/contIndex.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class contIndex extends AbstractController
{
    #[Route("/index", "index")]
    public function index()
    {
        return $this->render('plantillaTarea.html.twig', array("ruta" => "index"));
    }
}