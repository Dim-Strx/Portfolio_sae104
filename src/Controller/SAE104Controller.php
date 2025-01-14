<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SAE104Controller extends AbstractController
{
    #[Route('/s/a/e104', name: 'app_s_a_e104')]
    public function index(): Response
    {
        return $this->render('sae104/index.html.twig', [
            'controller_name' => 'SAE104Controller',
        ]);
    }

    #[Route('/s/a/e104/CV', name: 'app_CV')]
    public function CV(): Response
    {
        return $this->render('sae104/CV.html.twig', [
            'controller_name' => 'SAE104Controller',
        ]);
    }

    #[Route('/s/a/e104/Portfolio', name: 'app_Portfolio')]
    public function Portfolio(): Response
    {
        return $this->render('sae104/Portfolio.html.twig', [
            'controller_name' => 'SAE104Controller',
        ]);
    }

    #[Route('/s/a/e104/About', name: 'app_About')]
    public function About(): Response
    {
        return $this->render('sae104/About.html.twig', [
            'controller_name' => 'SAE104Controller',
        ]);
    }
}
