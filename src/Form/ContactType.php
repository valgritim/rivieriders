<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, ['label' => 'Prénom', 'attr' => ['placeholder' => 'votre prénom']])
            ->add('lastname', TextType::class, ['label' => 'Nom', 'attr' => ['placeholder' => 'votre nom']])
            ->add('phoneNumber', TextType::class, ['label' => 'Téléphone', 'attr' => ['placeholder' => 'votre numéro de téléphone']])
            ->add('email', EmailType::class, ['label' => 'Email', 'attr' => ['placeholder' => 'votre email']])
            ->add('Message', TextareaType::class, ['label' => 'Message', 'attr' => ['placeholder' => 'votre message']])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);
    }
}
