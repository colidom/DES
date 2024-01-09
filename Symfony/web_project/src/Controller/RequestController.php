<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RequestController extends AbstractController
{
    #[Route('/testRequest', name: "testRequest")]
    public function testRequest(Request $request)
    {
        $ip = $request->getClientIp();
        return $this->render('/response/response.html.twig', [
            'title' => "Welcome to my app",
            'ip' => $ip
        ]);
    }
}
