<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    #[Route('/')]
    public function index(): Response
    {

        return new Response(
            '<html><body><h1>Welcome to Symfony WebApp </h1></body></html>'
        );
    }
}