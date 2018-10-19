<?php

namespace App\Form;

use App\Entity\MovimientosAlmacen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovimientosAlmacenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Cantidad')
            ->add('Status')
            ->add('Fecha')
            ->add('Comentarios')
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
