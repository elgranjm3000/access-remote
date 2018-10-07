<?php

namespace App\Form;

use App\Entity\Clientes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('nit')
            ->add('contactoPrincipal')
            ->add('correo')
            ->add('fechaNacimiento')
            ->add('comentarios')
            ->add('zona')
            ->add('dpto')
            ->add('municipio')
            ->add('telefonoMovil')
            ->add('telefonoLocal')
            ->add('direccion')
            ->add('IdUsuario')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Clientes::class,
        ]);
    }
}
