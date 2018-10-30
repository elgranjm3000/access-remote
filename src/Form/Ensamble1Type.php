<?php

namespace App\Form;

use App\Entity\Ensamble;
use App\Entity\Familia;
use App\Entity\Medidas;
use App\Entity\Productos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class Ensamble1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idproducto', EntityType::class, array(    
                        'class' => Productos::class,
                        'choice_label' => 'nombre',
                        'placeholder' => 'Seleccione un producto'
                ))                        
            ->add('cantidad')
            ->add('monto')
            ->add('subtotal')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ensamble::class,
        ]);
    }
}
