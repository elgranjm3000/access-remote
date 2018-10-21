<?php

namespace App\Form;

use App\Entity\MovimientosDepositos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class MovimientosDepositos1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaMovimiento', DateType::class, array(
    'widget' => 'single_text',

    // prevents rendering it as type="date", to avoid HTML5 date pickers
    'html5' => false,

    // adds a class that can be selected in JavaScript
    'attr' => ['class' => 'js-datepicker'],
))
            ->add('monto', NumberType::class)
            ->add('banco', ChoiceType::class, array(
    'choices'  => array(
        'Gyt Continental' => 'Gyt Continental',
        'Banrural' => 'Banrural',
        'Banco Industrial' => 'Banco Industrial',
        'Banco America Cental(BAC)' =>'Banco America Cental(BAC)',
        'Banco Promerica' => 'Banco Promerica'
    ),
    'placeholder' => 'Seleccione Banco',
))
            //->add('facturas')
            ->add('idfacturarelacion',HiddenType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MovimientosDepositos::class,
        ]);
    }
}
