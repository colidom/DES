<?php
// src/Controller/Ejemplo1.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ejemplo1
{
    #[Route("/hola")]
    public function hola()
    {
        return new Response('<html><body><h1 style="color:blue; text-align:center;">Hola</h1></body></html>');
    }
}