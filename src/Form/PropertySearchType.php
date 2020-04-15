<?php

namespace App\Form;

use App\Entity\Option;
use App\Entity\Property;
use App\Entity\PropertySearch;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertySearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('minSurface', IntegerType::class, [
                'required' => false,
                // 'attr' => [
                //     'placeholder' => 'm²'
                // ]
            ])
            ->add('maxPrice', IntegerType::class, [
                'required' => false,
                // 'attr' => [
                //     'placeholder' => '€'
                // ]
            ])
            ->add('options', EntityType::class, [
                'required' => false,
                'class' => Option::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
            ->add('address', null, [
                'required' => false,
                'label'       => false,
             ])
            ->add('distance', ChoiceType::class, [
                'choices' => [
                    '10km' => 10,
                    '1000km' => 1000,
                ]
            ])
            ->add('lat', HiddenType::class)
            ->add('lng', HiddenType::class)
            // ->add('submit', SubmitType::class, [
            //     'label' => "Rechercher",
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PropertySearch::class,
            'method' => 'get',
            'csrf_protection' => false,
            'translation_domain' => 'forms',
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
