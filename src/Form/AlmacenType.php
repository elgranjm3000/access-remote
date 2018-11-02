<?php

namespace App\Form;

use App\Entity\Almacen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class AlmacenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('contacto')
            ->add('telefono')
            ->add('correo')
            ->add('direccion', CKEditorType::class, array(
                        'config' => array('toolbar' => 'basic'),
                ))
            ->add('comentarios', CKEditorType::class, array(
                        'config' => array('toolbar' => 'basic'),
                ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Almacen::class,
        ]);
    }
}
