<?php

namespace App\Form;

use App\Entity\Tringlerie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TringlerieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation', TextareaType::class,[
                'label' => 'Designation',
            ])
            ->add('typetringlerie', TextType::class,['label'=>'Type de Tringlerie'])
            ->add('cro', MoneyType::class,['label'=>'CRO'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tringlerie::class,
        ]);
    }
}
