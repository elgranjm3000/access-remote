<?php

namespace App\Form;

use App\Entity\Contratar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContratarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('detalles')
            ->add('fecha')
            ->add('lugar')
            ->add('pagar')
            ->add('nombre')
            ->add('telefono')
            ->add('correo')
            ->add('idservicios')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contratar::class,
        ]);
    }
}
