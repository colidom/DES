<?php
// src/Controler/ejemplo6.php
namespace App\Controller;

use Symfony\bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ejemplo6 extends AbstractController
{
    #[Route("/saludo/{nombre}", "saludo")]
    public function saludo($nombre)
    {
        return $this->render('saludo.html.twig', array('nombre'=>$nombre));
    }
}