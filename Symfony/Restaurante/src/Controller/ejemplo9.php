<?php
// src/Controler/ejemplo9.php
namespace App\Controller;

use Symfony\bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class ejemplo9 extends AbstractController
{
    #[Route("/tabla", "tabla")]
    public function tabla()
    {
        $filas = array(
            array('codigo' => '1', 'nombre' => 'Sevilla'),
            array(
                'codigo' => '2',
                'nombre' => 'Madrid'
            )
        );
        return $this->render('tabla.html.twig', array('filas' => $filas));
    }
}