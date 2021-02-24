<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/consultation-ressource", name="consultation-ressource")
     */
    public function consultation_ressource()
    {
        return $this->render('home/consultation-ressource.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}