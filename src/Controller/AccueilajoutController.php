<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilajoutController extends AbstractController
{
    /**
     * @Route("/accueilajout", name="accueilajout")
     */
    public function accueilajout()
    {
        return $this->render('accueilajout/accueilajout.html.twig', [
            'controller_name' => 'AccueilajoutController',
        ]);
    }
}
