<?php

namespace App\Controller;
use App\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListePersonneController extends AbstractController
{
    /**
     * @Route("/listePersonne", name="liste_personne")
     */
    public function index()
    {
        $listeP= $this->getDoctrine()->getRepository(Personne::class)->findAll();
        //dd($listeP);
        return $this->render('listePersonne/listePersonne.html.twig', [
        'listeP' => $listeP
        ]);
    }
}
