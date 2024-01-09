<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SaludarController extends AbstractController
{
    #[Route('/saludar', name: "saludar")]
    public function saludar(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('nombre', TextType::class)
            ->add('apellido', TextType::class)
            ->add('enviar', SubmitType::class, array('label' => 'Enviar'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $datos = $form->getData();
            return new Response("Hola " . $datos['nombre'] . ' ' . $datos['apellido']);
        }

        return $this->render('/saludar/saludar.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
