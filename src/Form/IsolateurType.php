<?php

namespace App\Form;

use App\Entity\Isolateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IsolateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numarticleorigiso', IntegerType::class,[
                'label' => 'Matiere',
            ])
            ->add('matiereiso', TextType::class,[
                'label' => 'Matiere',
            ])
            ->add('marcheiso', TextType::class,[
                'label' => 'Marche',
            ])
            ->add('designationiso', TextareaType::class,[
                'label' => 'Designation',
            ])
            ->add('classeeffortiso', TextType::class,[
                'label' => 'Rue',
            ])
            ->add('biliso', IntegerType::class,[
                'label' => 'Niveau d’isolement',
            ])
            ->add('cliso', TextType::class,[
                'label' => 'Classe de pollution',
            ])
            ->add('crosio', MoneyType::class,[
                'label' => 'CRO',
            ])
            ->add('lfiso', TextType::class,[
                'label' => 'Ligne de fuite',
            ])
            ->add('couleuriso', TextType::class,[
                'label' => 'Couleur',
            ])
            ->add('homologationiso', TextType::class,[
                'label' => 'Homologation',
            ])
            ->add('fixbasiso', IntegerType::class,[
                'label' => 'Fix bas',
            ])
            ->add('fixhautiso', IntegerType::class,[
                'label' => 'Fix haut',
            ])
            ->add('frsiso', TextType::class,[
                'label' => 'FRS',
            ])
            ->add('dimailetiso', IntegerType::class,[
                'label' => 'dimension ailette',
            ])
            ->add('poidsiso', NumberType::class,[
                'label' => 'Poids',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Isolateur::class,
        ]);
    }
}
