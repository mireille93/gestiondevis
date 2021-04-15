<?php

namespace App\Form;

use App\Entity\Sectionneur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SectionneurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designationsec', TextareaType::class,[
                'label' => 'Description',
            ])
            ->add('crosec', MoneyType::class,[
                'label' => 'CRO',
            ])
            ->add('typesec', TextType::class,[
                'label' => 'Type',
            ])
            ->add('tensionsec', NumberType::class,[
                'label' => 'Tension',
            ])
            ->add('courantsec', IntegerType::class,[
                'label' => 'Courant',
            ])
            ->add('iccsec', NumberType::class,[
                'label' => 'ICC',
            ])
            ->add('tksec', IntegerType::class,[
                'label' => 'TK',
            ])
            ->add('malt', IntegerType::class,[
                'label' => 'Malt',
            ])
            ->add('typeraccordsec',TextType::class,[
                'label' => 'Type Raccordement',
            ])
            ->add('epglacesec', IntegerType::class,[
                'label' => 'Epaisseur glace',
            ])
            ->add('classecoupsec', TextType::class,[
                'label' => 'Classe de coupure',
            ])
            ->add('pfermiccsec', TextType::class,[
                'label' => 'Pouvoir de Fermeture icc',
            ])
            ->add('fbsec', TextType::class,[
                'label' => 'Fermeture brusque',
            ])
            ->add('rbsec', TextType::class,[
                'label' => 'Rupture brusque',
            ])
            ->add('transfertbarsec', TextType::class,[
                'label' => 'Classe Coup',
            ])
            ->add('endmecsec', IntegerType::class,[
                'label' => 'Endurance mécanique',
            ])
            ->add('normesec', TextType::class,[
                'label' => 'Norme',
            ])
            ->add('annexecsec', TextType::class,[
                'label' => 'Annexe',
            ])
            ->add('nbisolateursec', IntegerType::class,[
                'label' => 'Nombre Isolateur',
            ])
            ->add('isolateur')
            ->add('assemblydnbsec', TextType::class,[
                'label' => 'Plan d’encombrement',
            ])
            ->add('materielhomsec', TextType::class,[
                'label' => 'Materiel Homologué',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sectionneur::class,
        ]);
    }
}
