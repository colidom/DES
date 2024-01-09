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
    public function saludar(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('nombre', TextType::class)
            ->add('apellido', TextType::class)
            ->add('enviar', SubmitType::class, ['label' => 'Enviar'])
            ->getForm();
        $form->handleRequest($request);

        $mostrarFormulario = true;
        $mensaje = '';
        $mostrarBotonVolver = false;

        if ($form->isSubmitted() && $form->isValid()) {
            $datos = $form->getData();
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $mensaje = "Hola $nombre $apellido";
            $mostrarFormulario = false;
            $mostrarBotonVolver = true;
        }

        return $this->render('/saludar/saludar.html.twig', [
            'title' => 'Saludar',
            'form' => $form->createView(),
            'mensaje' => $mensaje,
            'mostrarFormulario' => $mostrarFormulario,
            'mostrarBotonVolver' => $mostrarBotonVolver
        ]);
    }
}
