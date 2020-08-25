<?php

namespace App\Controller;
use App\Entity\Entreprise;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListeEntrepriseController extends AbstractController
{
    /**
     * @Route("/listeEntreprise", name="liste_entreprise")
     */
    public function index()
    {
        /* $em = $this->getDoctrine()->getManager();
        $data['entreprises'] = $em->getRepository(Liste::class)->findAll(); */
        $liste= $this->getDoctrine()->getRepository(Entreprise::class)->findAll();
        //dd($liste);
        return $this->render('listeEntreprise/listeEntreprise.html.twig', [
        'liste' => $liste
        ]);
    }   
}
