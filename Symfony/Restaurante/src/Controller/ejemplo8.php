<?php
// src/Controler/ejemplo8.php
namespace App\Controller;

use Symfony\bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ejemplo8 extends AbstractController
{
    public function fact($num)
    {
        if ($num < 0) {
            return false;
        }
        if ($num == 0) {
            return 1;
        } else {
            return $num * $this->fact($num - 1);
        }
    }
    #[Route("/factorial/{num}", "factorial")]
    public function factorial($num)
    {
        $resultado = $this->fact($num);
        return $this->render(
            'if2.html.twig',
            array('numero' => $num, 'resultado' => $resultado)
        );
    }
}