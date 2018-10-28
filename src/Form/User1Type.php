<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class User1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array(
            'required' => true)
        )
            ->add('plainPassword', RepeatedType::class, array(                
                'type' => PasswordType::class,
                'invalid_message' => 'El campo de contraseña debe coincidir',
                'first_options'  => array('label' => 'Contraseña'),
                'second_options' => array('label' => 'Repetir contraseña'),
            ))
            ->add('email')            
            ->add('roles', ChoiceType::class, array(
                'choices' => User::$possibleRoles,
                'multiple' => true, 'expanded' => true, 'required' => true
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
