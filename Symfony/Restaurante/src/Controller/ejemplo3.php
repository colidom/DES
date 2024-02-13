<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ejemplo3
{
    #[Route("/defecto1/{num}")]

    public function defecto1($num = 0)
    {
        return new Response("<html><body><h1 style='color:gray; text-align:center; margin:50px'>" . $num . "</h1></body></html>");
    }
}