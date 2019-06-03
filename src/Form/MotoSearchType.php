<?php

namespace App\Form;

use App\Entity\MotoSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class MotoSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', ChoiceType::class, ['label' => 'Catégories',
                'choices'  => [
                    'Touring' => 2,
                    'Sportster' => 1,
                    'H-D street' => 4,
                    'Softail' => 3,
                    'CVO' => 5,
                    'Trike' => 6]
                ]         
            )
            ->add('passenger', CheckboxType::class, ['required' => false, 'label' => 'Siège passager', 'attr' => ['placeholder' => 'Passager']])
            ->add('saddlebags', CheckboxType::class, ['required' => false, 'label' => 'Avec sacoches', 'attr' => ['placeholder' => 'Sacoches']])
            ->add('maxPrice', IntegerType::class, ['required' => false, 'label' => false, 'attr' => ['placeholder' => 'Prix maxi']])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MotoSearch::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }
}
