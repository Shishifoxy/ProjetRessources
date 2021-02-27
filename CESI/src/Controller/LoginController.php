<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{


    public function index(){
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }


    public function logintest() {
        return $this->render('login/login-test.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }


}