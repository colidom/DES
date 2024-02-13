<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ejemplo2
{
    #[Route("/product/{num1}/{num2}")]
    public function producto($num1, $num2)
    {
        $producto = $num1 * $num2;
        return new Response("<html><body><h1 style='color:gray; text-align:center; margin:50px'>" . $producto . "</h1></body></html>");
    }
}