<?php

namespace App\Form;

use App\Entity\MovimientosDepositos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class MovimientosDepositosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaMovimiento')
            ->add('monto', NumberType::class)
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
