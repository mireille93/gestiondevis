<?php

namespace App\Form;

use App\Entity\Accessoire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccessoireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designationace', TextareaType::class,[
                'label' => 'Designation',
            ])
            ->add('typeace', TextType::class,[
                'label' => 'Type Accessoire',
            ])
            ->add('croace', MoneyType::class,[
                'label' => 'CRO',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Accessoire::class,
        ]);
    }
}
