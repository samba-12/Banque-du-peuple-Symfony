<?php

namespace App\Form;
use App\Entity\Entreprise;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_entreprise',TextType::class,array('label'=> 'Nom Entreprise :', 'attr'=>array('class'=>'col')))
            ->add('adresse',TextType::class,array('label'=> 'Adresse :', 'attr'=>array('class'=>'')))
            ->add('Email',TextType::class,array('label'=> 'Email', 'attr'=>array('class'=>'')))
            ->add('telephone',TextType::class,array('label'=> 'Telephone', 'attr'=>array('class'=>'')))
            ->add('ninea',TextType::class,array('label'=> 'Ninea', 'attr'=>array('class'=>'')))
            ->add('compte',TextType::class,array('label'=> 'Type de Compte', 'attr'=>array('class'=>'')))
            ->add('numero',TextType::class,array('label'=> 'Numero de compte', 'attr'=>array('class'=>'')))
            ->add('Valider', SubmitType::class, array('attr' => array('class' => 'btn btn-primary')))
           /*  ->add('nom_entreprise')
            ->add('adresse')
            ->add('Email')
            ->add('telephone')
            ->add('ninea')
            ->add('compte')
            ->add('numero')
            ->add('Valider') */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
        ]);
    }
}
