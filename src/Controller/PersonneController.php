<?php

namespace App\Controller;
use App\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PersonneType;
use Symfony\Component\HttpFoundation\Request;
class PersonneController extends AbstractController
{
    /**
     * @Route("/personne", name="personne")
     */
        public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $P = new Personne();
        $form = $this->createForm(PersonneType::class, $P,  array('action' => $this->generateUrl('personne_add')));
        $data['form'] = $form->createView();
        return $this->render('personne/personne.html.twig', $data);
    }
    /**
     * @Route("Personne/add", name="personne_add")
     */
    public function add(Request $request)
    {
        $P = new Personne();
        $form = $this->createForm(PersonneType::class, $P);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $P = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($P);
            $em->flush();
        }
        return $this->redirectToRoute('liste_personne');

    }
}






//=======================================================
/* public function index()
    {
        if (isset($_POST['envoi'])){ */
    /* var_dump($_POST);
    die(); */
        //extract($_POST);
       /*  $personne = new Personne();
        
        $personne->setPrenom($_POST['prenom']);
        $personne->setNom($_POST['nom']);
        $personne->setAdresse($_POST['adresse']);
        $personne->setEmail($_POST['email']);
        $personne->setTelephone($_POST['telephone']);
        $personne->setCompte($_POST['compte']);  
        $personne->setSalaire($_POST['salaire']);
        $personne->setInfosEmployeur($_POST['infos_employeur']);
        $personne->setIdentification($_POST['identification']);
        $personne->setNumero($_POST['numero']);
        $em = $this->getDoctrine()->getManager();
        $em->persist($personne);
        $em->flush(); */
        /* var_dump($personne);
        die(); */
        /* }
        return $this->render('personne/personne.html.twig');
 */