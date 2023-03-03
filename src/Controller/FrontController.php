<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[Route('/vet', name: 'app_vet')]
    public function vet(): Response
    {
        return $this->render('vet.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('services.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/produits', name: 'app_produits')]
    public function produits(): Response
    {
        return $this->render('produits.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/rec', name: 'app_rec')]
    public function reclamations(): Response
    {
        return $this->render('reclamations.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/adoption', name: 'app_adoption')]
    public function adoption(): Response
    {
        return $this->render('adoption.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/adop', name: 'app_adop')]
    public function adop(): Response
    {
        return $this->render('adoption.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/accoup', name: 'app_accoup')]
    public function accoup(): Response
    {
        return $this->render('accouplement.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/register', name: 'register_front')]
    public function register(): Response
    {
        return $this->render('back/register.html.twig', [
            'controller_name' => 'FrontController',
        ]);

    }

    #[Route('/login', name: 'login_front')]
    public function login(): Response
    {
        return $this->render('back/login.html.twig', [
            'controller_name' => 'FrontController',
        ]);

    }

}
