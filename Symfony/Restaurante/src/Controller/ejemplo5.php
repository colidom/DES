<?php
// src/Controler/EjemploRutaBase.php
//para utilizarlo habra que poner localhost:8000/base/hola2
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route('/base', 'base')]
class ejemplo5 extends AbstractController
{
    #[Route('/hola2', 'hola2')]
    public function hola2()
    {
        return new Response('<html><body>Hola</body></html>');
    }
}