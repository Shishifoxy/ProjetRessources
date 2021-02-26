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
     * @Route("/liste-ressource/test", name="liste-ressource")
     */
    public function liste_ressources() {
        return $this->render('ressources/_liste-ressource.html.twig', [
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

    /**
     * @Route("/page-ressource", name="page-ressource")
     */
    public function page_ressources() {
        return $this->render('ressources/_page-ressource.html.twig', [
            'controller_name' => 'RessourcesController',
        ]);
    }
}