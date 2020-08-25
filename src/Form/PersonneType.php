<?php

namespace App\Form;
use App\Entity\Personne;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom')
            ->add('nom')
            ->add('adresse')
            ->add('email')
            ->add('telephone')
            ->add('compte')
            ->add('identification')
            ->add('numero')
            ->add('salaire')
            ->add('infos_employeur')
            ->add('Valider', SubmitType::class, array('attr' => array('class' => 'btn btn-primary')))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}
