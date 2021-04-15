<?php

namespace App\Form;

use App\Entity\Caisson;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CaissonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fonctioncss', TextType::class,[
                'label' => 'Fonction',
            ])
            ->add('crocss',MoneyType::class,[
                'label' => 'Cout de Revient Objectif',
            ])
            ->add('disctypecss', TextType::class,[
                'label' => 'Type de sectionneur',
            ])
            ->add('rbcss', TextType::class,[
        'label' => 'Rupture brusque',
    ])
            ->add('positioncss', TextType::class,[
                'label' => 'Position',
            ])
            ->add('positionpolecss', TextType::class,[
                'label' => 'Position Pole',
            ])
            ->add('typephasecss', ChoiceType::class, [
        'choices'  => [
            'Regroupé' => true,
            'Séparé' => false,
            'Regroupé Séparé' => false,
        ]
    ])
            ->add('normecss', TextType::class,[
                'label' => 'Norme',
            ])
            ->add('typemateriaucss', TextType::class,[
                'label' => 'Type Materiau',
            ])
            ->add('eppeintcss', IntegerType::class,[
                'label' => 'Epaisseur peinture ',
            ])
            ->add('typercdrmcss', TextType::class,[
                'label' => 'Type Raccordement',
            ])
            ->add('hublotinfrarcss', TextType::class,[
        'label' => 'Hublot Infra rouge',
    ])
            ->add('epmateriaucss', IntegerType::class,[
                'label' => 'Epaisseur Materiau',
            ])
            ->add('eclairagecss', TextType::class,[
                'label' => 'Eclairage',
            ])
            ->add('chauffagecss', TextType::class,[
                'label' => 'Chauffage',
            ])
            ->add('typepeintcss', TextType::class,[
                'label' => 'Type de peinture',
            ])
            ->add('assblydrwnbcss', TextType::class,[
                'label' => 'Plan d’encombrement',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Caisson::class,
        ]);
    }
}
