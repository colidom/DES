<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class producto
{
    #[Route('/producto/{num1}/{num2}', "producto")]
    public function producto($num1, $num2)
    {
        return new Response("<html><body><h1 style='color:gray; text-align:center; margin:50px'>" .
            ($num1 * $num2) . "</h1></body></html>");
    }
}