<?php

namespace App\Form;

use App\Entity\Facturas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class FacturasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dias', ChoiceType::class, array(
                    'choices'  => array(
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                    '11' => 11,
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                    '15' => 15,
                    '16' => 16,
                    '17' => 17,
                    '18' => 18,
                    '19' => 19,
                    '20' => 20,
                    '21' => 21,
                    '22' => 22,
                    '23' => 23,
                    '24' => 24,
                    '25' => 25,
                    '26' => 26,
                    '27' => 27,
                    '28' => 28,
                    '29' => 29,
                    '30' => 30,
                ),
                    "placeholder"=>"Dia de credito"
            ))

            ->add('forma', ChoiceType::class, array(
                    'choices'  => array(
                    'Contado' => "CC",
                    'Credito' => "CR"
                ),
                     'expanded' => true,
                     'attr' => array('class' => 'formadepago'),
            ))
            ->add('reciboCaja')
            ->add('numfactura')
            ->add('serie', ChoiceType::class, array(
                    'choices'  => array(
                    'A' => 'A',
                    'B' => 'B',
                    'C' => 'C'                    
                ),
                    "placeholder"=>"SERIE"
            ))
            ->add('idclientesrelacion',HiddenType::class)
            ->add('ordenCompra')
            ->add('fecha', DateType::class, array(
    'widget' => 'single_text',

    // prevents rendering it as type="date", to avoid HTML5 date pickers
    'html5' => false,

    // adds a class that can be selected in JavaScript
    'attr' => ['class' => 'js-datepicker'],
))
            ->add('comentarios', CKEditorType::class, array(
                        'config' => array('toolbar' => 'basic'),
                ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Facturas::class,
        ]);
    }
}
