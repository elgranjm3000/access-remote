<?php

namespace App\Form;

use App\Entity\Metas;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MetasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('desde', DateType::class, array(
                           'widget' => 'single_text',
                            'html5' => false,
                            'attr' => ['class' => 'js-datepicker'],
                    ))
            ->add('hasta', DateType::class, array(
                           'widget' => 'single_text',
                            'html5' => false,
                            'attr' => ['class' => 'js-datepicker'],
                    ))
            ->add('montoventas')
            ->add('usuario', EntityType::class, array(
    // looks for choices from this entity
    'class' => User::class,

    // uses the User.username property as the visible option string
    'choice_label' => 'username',
     'placeholder' => 'Seleccione un vendedor',

    // used to render a select box, check boxes or radios
    // 'multiple' => true,
    // 'expanded' => true,
))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Metas::class,
        ]);
    }
}
