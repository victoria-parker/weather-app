<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(CallApiService $callApiService): Response
    {
        // dd($callApiService->getWeather());
        return $this->render('home/index.html.twig', [
            
            'data' => $callApiService->getWeather(),
            'path' => 'src/Controller/HomeController.php'
                ]
            );
    }
}
