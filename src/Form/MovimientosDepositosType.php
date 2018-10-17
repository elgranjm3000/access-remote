<?php

namespace App\Form;

use App\Entity\MovimientosDepositos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovimientosDepositosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaMovimiento')
            ->add('monto')
            ->add('banco')
            ->add('idfactura')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MovimientosDepositos::class,
        ]);
    }
}
