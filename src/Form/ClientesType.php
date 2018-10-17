<?php

namespace App\Form;

use App\Entity\Clientes;
use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class ClientesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('nit')
            ->add('contactoPrincipal')
            ->add('correo')
            ->add('fechaNacimiento', DateType::class, array(
    'widget' => 'single_text',

    // prevents rendering it as type="date", to avoid HTML5 date pickers
    'html5' => false,

    // adds a class that can be selected in JavaScript
    'attr' => ['class' => 'js-datepicker'],
))
            ->add('comentarios', CKEditorType::class, array(
                        'config' => array('toolbar' => 'basic'),
                ))
            ->add('zona')
            ->add('dpto')
            ->add('municipio')
            ->add('telefonoMovil')
            ->add('telefonoLocal')
            ->add('direccion', CKEditorType::class, array(
                        'config' => array('toolbar' => 'basic'),
                ))
            ->add('IdUsuario', EntityType::class, array(
    // looks for choices from this entity
    'class' => User::class,

    // uses the User.username property as the visible option string
    'choice_label' => 'username',
     'placeholder' => 'Seleccione un producto',

    // used to render a select box, check boxes or radios
    // 'multiple' => true,
     'expanded' => true,
))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Clientes::class,
        ]);
    }
}
