<?php

namespace App\Form;

use App\Entity\Commandeur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typecom', TextType::class,[
                'label' => 'Type Commandeur',
            ])
            ->add('designationcom', TextareaType::class,[
                'label' => 'Designation',
            ])
            ->add('crocom', MoneyType::class,[
                'label' => 'CRO',
            ])
            ->add('couplemancom', TextType::class,[
                'label' => 'Couple man',
            ])
            ->add('verpositsercom', TextType::class,[
                'label' => 'Verouillage position/serrure',
            ])
            ->add('normecom', TextType::class,[
                'label' => 'Norme',
            ])
            ->add('materielhomcom', TextType::class,[
                'label' => 'Materiel Homologué',
            ])
            ->add('plagetempadmcom', TextType::class,[
                'label' => 'Plage température admissible',
            ])
            ->add('scndechofcom', TextType::class,[
                'label' => 'Seconde chauffe',
            ])
            ->add('nbcontactauxcom', TextType::class,[
                'label' => 'Nombre contacts auxiliaires',
            ])
            ->add('clscontactauxcom', TextType::class,[
                'label' => 'Classe contacts auxiliaires',
            ])
            ->add('relaisadcom', TextType::class,[
                'label' => 'relais additionnel',
            ])
            ->add('rstceanticondcom', TextType::class,[
        'label' => 'Resistance anti condensation',
    ])
            ->add('verelspcom', TextType::class,[
                'label' => 'Verouillage electrique special',
            ])
            ->add('eclairagecom', TextType::class,[
                'label' => 'Eclairage',
            ])
            ->add('adjonctioncom', TextType::class,[
                'label' => 'Adjonction',
            ])
            ->add('prsecourtcom', TextType::class,[
                'label' => 'Prise de courant',
            ])
            ->add('mcbrstcecom', TextType::class,[
                'label' => 'Disjoncteur sur resistance',
            ])
            ->add('mcbctrlcom', TextType::class,[
                'label' => 'Disjoncteur sur controle',
            ])
            ->add('storquecom', TextType::class,[
                'label' => 'Mesure du couple',
            ])
            ->add('sluxcom', TextType::class,[
                'label' => 'Lampe vert ou rouge',
            ])
            ->add('scomlancom', TextType::class,[
                'label' => 'Module de communication lan',
            ])
            ->add('scomwancom', TextType::class,[
                'label' => 'Module de communication wan',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commandeur::class,
        ]);
    }
}
