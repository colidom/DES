<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SesionController extends AbstractController
{
    #[Route('/setSesion', name: "setSesion")]
    public function setSesion(SessionInterface $session)
    {
        $session->set("variable", 100);
        return $this->redirectToRoute('getSesion', [
        ]);
    }

    #[Route('/getSesion', name: "getSesion")]
    public function getSesion(SessionInterface $session)
    {
        $session = $session->get("variable");
        return $this->render('/sesion/sesion.html.twig', [
            'session' => $session
        ]);
    }
}
