<?php

namespace App\Form;

use App\Entity\Clients;
use App\Entity\Devvi;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomcli', TextType::class,[
                'label' => 'Nom / Raison Sociale',
            ])
            ->add('ruecli', TextType::class,[
                'label' => 'Rue',
            ])
            ->add('villecli', TextType::class,[
                'label' => 'Ville',
            ])
            ->add('codepostalcli', TextType::class,[
                'label' => 'Code Postal',
            ])
            ->add('contactcli', TextType::class,[
                'label' => 'Contact',
            ])
            ->add('telephonecli', NumberType::class,[
                'label' => 'Telephone',
            ])
            ->add('mailcli', EmailType::class,[
                'label' => 'Email',
            ])
            ->add('sitewebcli', UrlType::class,[
                'label' => 'Site web',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Clients::class,
        ]);
    }
}
