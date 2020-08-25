<?php

namespace App\Controller;
use App\Entity\Entreprise;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\EntrepriseType;
use Symfony\Component\HttpFoundation\Request;

class EntrepriseController extends AbstractController
{
    /**
     * @Route("/entreprise", name="entreprise")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $E = new Entreprise();
       /*  $E->setNomEntreprise('Bathie'); */
        $form = $this->createForm(EntrepriseType::class, $E,  array('action' => $this->generateUrl('entreprise_add')));
        $data['form'] = $form->createView();
        return $this->render('entreprise/entreprise.html.twig', $data);
    }
    /**
     * @Route("Entreprise/add", name="entreprise_add")
     */
    public function add(Request $request)
    {
        $E = new Entreprise();
        $form = $this->createForm(EntrepriseType::class, $E);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $E = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($E);
            $em->flush();
        }
        return $this->redirectToRoute('liste_entreprise');

    }
}
