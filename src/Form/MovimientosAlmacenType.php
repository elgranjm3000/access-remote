<?php

namespace App\Form;

use App\Entity\MovimientosAlmacen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
class MovimientosAlmacenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Cantidad')
            ->add('Status')
            ->add('Fecha', DateType::class, array(
    'widget' => 'single_text',

    // prevents rendering it as type="date", to avoid HTML5 date pickers
    'html5' => false,

    // adds a class that can be selected in JavaScript
    'attr' => ['class' => 'js-datepicker'],
))
            ->add('Comentarios', CKEditorType::class, array(
                        'config' => array('toolbar' => 'basic'),
                ))
            ->add('IdProducto')
            ->add('Destino')
            ->add('Origen')
            ->add('IdCliente')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MovimientosAlmacen::class,
        ]);
    }
}
