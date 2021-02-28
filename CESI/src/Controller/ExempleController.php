<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExempleController extends AbstractController
{
    /**
     * @Route("/exemple", name="fichierExemple")
     */
    public function index()
    {
        return $this->render('repertoireExemple/_fichierExemple.html.twig', [
            'controller_name' => 'ExempleController',
        ]);
    }
}
