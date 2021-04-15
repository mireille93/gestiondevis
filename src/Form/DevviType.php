<?php

namespace App\Form;

use App\Entity\Clients;
use App\Entity\Devvi;
use Doctrine\DBAL\Types\FloatType;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\Types\Callable_;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\Date;


class DevviType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descriptiondev', TextareaType::class,[
                'label' => 'Description',
            ])
            ->add('datedemande', DateType::class, [
                'widget' => 'single_text',
                // prevents rendering it as type="date", to avoid HTML5 date pickers
                'html5' => true,
                // adds a class that can be selected in JavaScript
                'attr' => ['class' => 'js-datepicker'],
                'label' => "Date de demande",
            ])
            ->add('dateenregdev',DateType::class, [
                'widget' => 'single_text',
                // prevents rendering it as type="date", to avoid HTML5 date pickers
                'html5' => true,
                // adds a class that can be selected in JavaScript
                'attr' => ['class' => 'js-datepicker'],
                'label' => "Date d'enregistrement",
    ])
            ->add('transportdev', MoneyType::class, [
        'label' => "Transport",
    ])
            ->add('commisionsagentdev', MoneyType::class, [
                'label' => "Commission Agent",
            ])
            ->add('emballagedev', MoneyType::class, [
                'label' => "Emballage",
            ])
            ->add('essaisdev', MoneyType::class, [
                'label' => "Essais",
            ])
            ->add('etudesdev',MoneyType::class, [
                'label' => "Etudes",
            ])
            ->add('fraisfiscauxdev', MoneyType::class, [
                'label' => "Frais fiscaux",
            ])
            ->add('crototaldev', MoneyType::class, [
                'label' => "CRO Total",
            ])
            ->add('coutactivitedev', MoneyType::class, [
                'label' => "Cout activites",
            ])
            ->add('remisedev', MoneyType::class, [
                'label' => "Remise",
            ])
            ->add('coutfinalventedev', MoneyType::class, [
                'label' => "Cout Final de vente",
            ])
            ->add('id_clients',EntityType::class, array('class'=>Clients::class,'choice_label'=>'nomcli', 'label'=>'Client'))
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Devvi::class,
        ]);
    }
}
