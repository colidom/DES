<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function index(): Response
    {
        $title = 'Catálogo';

        return $this->render('catalog/index.html.twig', [
            'title' => $title,
        ]);
    }
}
