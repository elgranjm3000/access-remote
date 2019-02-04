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

use Doctrine\ORM\EntityRepository;

class EnsambleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', EntityType::class, array(    
                        'class' => Productos::class,
                        'choice_label' => 'nombre',
                        'placeholder' => 'Seleccione un producto',
                        'query_builder' => function (EntityRepository $er) {
                            return $er->createQueryBuilder('u')
                            ->where("u.fechaensamble is NULL")
                            ->orderBy('u.nombre', 'ASC');

                        },
                ))         
            ->add('totalemsable')                        
            ->add('precioVenta')
            ->add('comentarios', CKEditorType::class, array(
                        'config' => array('toolbar' => 'basic'),
                ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Productos::class,
        ]);
    }
}
