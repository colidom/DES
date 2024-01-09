<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/*
 * Escribe un controlador que reciba un numero y muestre su factorial utilizadno una plantilla. La plantilla recibira el
 * resultado y un parámetro llamado error. Si error es TRUE, en lugar del resultado hay que mostrar un mensaje apropiado.
 */
class FactorialController extends AbstractController
{
    #[Route('/factorial/{numero}', name: "factorial")]
    public function factorial($numero)
    {
        $resultado = $this->calcula_factorial($numero);
        return $this->render('factorial/factorial.html.twig', [
            'title' => "Factorial",
            'numero' => $numero,
            'resultado' => $resultado
        ]);
    }

    public function calcula_factorial($numero)
    {
        if ($numero < 0) {
            return false;
        }
        if (0 == $numero) {
            return 1;
        } else {
            return $numero * $this->calcula_factorial($numero - 1);
        }

    }
}
