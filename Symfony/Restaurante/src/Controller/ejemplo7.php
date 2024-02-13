<?php
// src/Controler/ejemplo7.php
namespace App\Controller;

use Symfony\bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ejemplo7 extends AbstractController
{
    #[Route("/positivo/{num}", "positivo")]
    public function positivo($num)
    {
        return $this->render('if.html.twig', array('numero' => $num));
    }
}