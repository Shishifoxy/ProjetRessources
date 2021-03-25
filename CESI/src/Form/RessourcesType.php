<?php

namespace App\Form;

use App\Entity\Ressources;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;



class RessourcesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                'placeholder' => 'Choisissez un titre',
                    ]
            ])
            ->add('description', TextAreaType::class, [
                'attr' => [
                    'placeholder' => 'Choisissez une description',
                    'rows' => 5
                    ]
            ])
            ->add('media', TextType::class, [
                'attr' => [

                    'placeholder' => 'Rentrez une URL'
                    ]
            ])
            ->add('private')
            ->add('typesressources')
            ->add('categoriesressources')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ressources::class,
        ]);
    }
}
