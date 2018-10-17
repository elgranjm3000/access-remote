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
                        'class' => Productos::class,
                        'choice_label' => 'nombre',
                        'placeholder' => 'Seleccione un producto'
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
