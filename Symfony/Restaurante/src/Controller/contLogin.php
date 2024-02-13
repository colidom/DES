<?php
//src/Controler/contLogin.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class contLogin extends AbstractController
{
    #[Route("/login", "login")]
    public function login()
    {
        return $this->render('plantillaTarea.html.twig', array("ruta" => "login"));
    }
}