<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ejemplo4 extends AbstractController
{
    #[Route('/cuadrado/{num}')]
    public function cuadrado($num)
    {
        $route = 'producto';
        $parameters = [
            'num1'=>$num,
            'num2'=>$num
        ];
        return $this->redirectToRoute($route, $parameters);
    }
}