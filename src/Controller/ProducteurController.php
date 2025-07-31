<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProducteurController extends AbstractController
{
    #[Route('/producteur', name: 'app_producteur')]
    public function index(): Response
    {
        return $this->render('producteur/index.html.twig', [
            'controller_name' => 'ProducteurController',
        ]);
    }
}
