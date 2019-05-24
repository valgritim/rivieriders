<?php

namespace App\Form;

use App\Entity\Moto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class MotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('model', TextType::class, ['label' => 'Modèle'])
            ->add('price', NumberType::class, ['label' => 'Prix'])
            ->add('coverImg', TextType::class, ['label' => 'Image de présentation'])
            ->add('moteur', TextType::class, ['label' => 'Moteur'])
            ->add('tank', TextType::class, ['label' => 'Capacité du réservoir (l)'])
            ->add('saddlebags', CheckboxType::class, ['label' =>'Présence de sacoches', 'required' => false])
            ->add('saddleheight', TextType::class, ['label' => 'Hauteur de la selle (mm)'])
            ->add('weight', TextType::class, ['label' => 'Poids total (Kg)'])
            ->add('description', TextareaType::class, ['label' => 'Description', 'attr'=> ['rows' => 8]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Moto::class,
        ]);
    }
}
