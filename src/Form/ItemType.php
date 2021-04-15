<?php

namespace App\Form;

use App\Entity\Accessoire;
use App\Entity\Caisson;
use App\Entity\Clients;
use App\Entity\Commandeur;
use App\Entity\Devvi;
use App\Entity\Isolateur;
use App\Entity\Item;
use App\Entity\Sectionneur;
use App\Entity\Tringlerie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroitem')
            ->add('descriptionitem', TextareaType::class,[
                'label' => 'Description Item',
            ])
            ->add('qteitem', IntegerType::class,[
                'label' => "Quantité de l'Item",
            ])
            ->add('id_devvi',EntityType::class, array('class'=>Devvi::class,'choice_label'=>'descriptiondev', 'label'=>'Devvi'))

            ->add('id_sectionneur',EntityType::class, array('class'=>Sectionneur::class,'choice_label'=>'designationsec', 'label'=>'Sectionneur'))
            ->add('nbsectionneuritem', IntegerType::class,[
                'label' => 'Nombre Sectionneur',
            ])

            ->add('id_caisson',EntityType::class, array('class'=>Caisson::class,'choice_label'=>'fonctioncss', 'label'=>'Caisson'))
            ->add('nbcaissonitem', IntegerType::class,[
                'label' => 'Nombre Caisson',
            ])

            ->add('id_isolateur',EntityType::class, array('class'=>Isolateur::class,'choice_label'=>'designationiso', 'label'=>'Isolateur'))
            ->add('nbisoitem', IntegerType::class,[
                'label' => 'Nombre Isolateur',
            ])

            ->add('id_commandeur',EntityType::class, array('class'=>Commandeur::class,'choice_label'=>'designationcom', 'label'=>'Commandeur'))
            ->add('nbcomitem', IntegerType::class,[
                'label' => 'Nombre Commandeur',
            ])

            ->add('id_tringlerie',EntityType::class, array('class'=>Tringlerie::class,'choice_label'=>'designation', 'label'=>'Tringlerie'))
            ->add('nbtringlerieitem', IntegerType::class,[
                'label' => 'Nombre Tringlerie',
            ])

            ->add('id_accessoire',EntityType::class, array('class'=>Accessoire::class,'choice_label'=>'designationace', 'label'=>'Accessoire'))
            ->add('nbaccessitem', IntegerType::class,[
                'label' => 'Nombre Acessoire',
            ])
            ->add('croitem', MoneyType::class,[
        'label' => 'CRO Item',
    ])
            ->add('margecvitem', MoneyType::class,[
                'label' => "Marge sur Cout de revient sur l'Item",
            ])

        ->add('prixventeitem', MoneyType::class,[
            'label' => "Prix de revient Total de l'Item",
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Item::class,
            'method'=>'get',
            'csrf_protection'=> false
        ]);
    }
}
