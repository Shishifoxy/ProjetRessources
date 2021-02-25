<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RessourcesController extends AbstractController
{

    /**
     * @Route("/consultation-ressource", name="index")
     */
    public function index()
    {
        return $this->render('ressources/index.html.twig', [
            'controller_name' => 'RessourcesController',
        ]);
    }
    
    /**
     * @Route("/consultation-ressource/test", name="consultation-ressource")
     */
    public function consultation_ressources() {
        return $this->render('ressources/_consultation-ressource.html.twig', [
            'controller_name' => 'RessourcesController',
        ]);
    }

    /**
     * @Route("/soumettre-ressource", name="soumettre-ressource")
     */
    public function soumettre_ressources() {
        return $this->render('ressources/_soumettre-ressource.html.twig', [
            'controller_name' => 'RessourcesController',
        ]);
    }
}