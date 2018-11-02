<?php

namespace App\Form;

use App\Entity\Ingresos;
use App\Entity\Productos;
use App\Entity\Proveedores;
use App\Entity\Almacen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class IngresosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad')
            ->add('fecha', DateType::class, array(
    'widget' => 'single_text',

    // prevents rendering it as type="date", to avoid HTML5 date pickers
    'html5' => false,

    // adds a class that can be selected in JavaScript
    'attr' => ['class' => 'js-datepicker'],
))
                        ->add('vencimiento', DateType::class, array(
    'widget' => 'single_text',

    // prevents rendering it as type="date", to avoid HTML5 date pickers
    'html5' => false,

    // adds a class that can be selected in JavaScript
    'attr' => ['class' => 'js-datepicker'],
))
            ->add('comentario', CKEditorType::class, array(
                        'config' => array('toolbar' => 'basic'),
                ))
            ->add('productos', EntityType::class, array(
    // looks for choices from this entity
    'class' => Productos::class,

    // uses the User.username property as the visible option string
    'choice_label' => 'nombre',
     'placeholder' => 'Seleccione su producto'

    // used to render a select box, check boxes or radios
    // 'multiple' => true,
    // 'expanded' => true,
))
            ->add('proveedor',EntityType::class, array(
    // looks for choices from this entity
    'class' => Proveedores::class,

    // uses the User.username property as the visible option string
    'choice_label' => 'nombreEmpresa',
     'placeholder' => 'Seleccione su proveedor'

    // used to render a select box, check boxes or radios
    // 'multiple' => true,
    // 'expanded' => true,
))
            ->add('Almacen',EntityType::class, array(
    // looks for choices from this entity
    'class' => Almacen::class,

    // uses the User.username property as the visible option string
    'choice_label' => 'nombre',
     'placeholder' => 'Seleccione su almacen'

    // used to render a select box, check boxes or radios
    // 'multiple' => true,
    // 'expanded' => true,
))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ingresos::class,
        ]);
    }
}
