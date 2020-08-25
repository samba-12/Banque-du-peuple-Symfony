<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilListeController extends AbstractController
{
    /**
     * @Route("/accueil/liste", name="accueil_liste")
     */
    public function index()
    {
        return $this->render('accueil_liste/index.html.twig', [
            'controller_name' => 'AccueilListeController',
        ]);
    }
}
