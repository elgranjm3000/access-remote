<?php

namespace App\Form;

use App\Entity\Productos;
use App\Entity\Familia;
use App\Entity\Medidas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ProductosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('idmedidas', EntityType::class, array(
    // looks for choices from this entity
    'class' => Medidas::class,

    // uses the User.username property as the visible option string
    'choice_label' => 'unidad',
     'placeholder' => 'Seleccione tipo de unidad'

    // used to render a select box, check boxes or radios
    // 'multiple' => true,
    // 'expanded' => true,
))
            ->add('costo')
            ->add('precioVenta')
            ->add('comentarios', CKEditorType::class, array(
                        'config' => array('toolbar' => 'basic'),
                ))
            ->add('cantidadPresentacion')
            ->add('idfamilia', EntityType::class, array(
    // looks for choices from this entity
    'class' => Familia::class,

    // uses the User.username property as the visible option string
    'choice_label' => 'nombre',
     'placeholder' => 'Seleccione familia'

    // used to render a select box, check boxes or radios
    // 'multiple' => true,
    // 'expanded' => true,
))
            ->add('brochure', FileType::class, array('data_class' => null))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Productos::class,
        ]);
    }
}
