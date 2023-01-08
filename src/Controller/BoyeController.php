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
    #[Route('/cv', name: 'app_boye2')]
    Public function verstheme(){
    return $this->render('boye/cv.html.twig');
    }
    #[Route('/blog', name: 'app_boye3')]
    Public function versblog(){
    return $this->render('boye/blog.twig');
    }
}
