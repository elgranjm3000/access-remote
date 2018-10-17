<?php

namespace App\Form;

use App\Entity\DetallesFactura;
use App\Entity\Productos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class DetallesFacturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad')
            ->add('ordenPromocion')
            ->add('comentarios')
            ->add('precio')
            ->add('total')
            ->add('idproducto', EntityType::class, array(
    // looks for choices from this entity
    'class' => Productos::class,

    // uses the User.username property as the visible option string
    'choice_label' => 'nombre',
     'placeholder' => 'Seleccione un usuario'

    // used to render a select box, check boxes or radios
    // 'multiple' => true,
    // 'expanded' => true,
))
      
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DetallesFactura::class,
        ]);
    }
}
