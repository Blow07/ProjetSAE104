<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoyeController extends AbstractController
{
    #[Route('/boye', name: 'app_boye')]
    public function index(): Response
    {
        return $this->render('boye/index.html.twig', [
            'controller_name' => 'BoyeController',
        ]);
    }
    #[Route('/portfolio', name: 'app_boye2')]
    Public function versportfolio(){
    return $this->render('boye/portfolio.html.twig');
    }
    #[Route('/cv', name: 'app_boye3')]
    Public function verscv(){
    return $this->render('boye/cv.html.twig');
    }
    #[Route('/contact', name: 'app_boye4')]
    Public function verscontact(){
    return $this->render('boye/contact.html.twig');
    }
    #[Route('/autres', name: 'app_boye5')]
    Public function versautres(){
    return $this->render('boye/autres.html.twig');
    }
}
