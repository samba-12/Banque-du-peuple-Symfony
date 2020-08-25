<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
   
    /**
     * @Route("/", name="index")
     */
    public function Accueil()
    {   
        return $this->render('accueil/index.html.twig', [
            'message' => 'Accueil',
        ]);
    }
}
