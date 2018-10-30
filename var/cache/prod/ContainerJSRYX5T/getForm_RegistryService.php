<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactory.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteType' => function () {
    return ($this->services['pugx_autocompleter.autocomplete'] ?? $this->load('getPugxAutocompleter_AutocompleteService.php'));
}, 'PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteFilterType' => function () {
    return ($this->services['pugx_autocompleter.filter_autocomplete'] ?? $this->load('getPugxAutocompleter_FilterAutocompleteService.php'));
}, 'App\\Form\\AlmacenType' => function () {
    return ($this->privates['App\Form\AlmacenType'] ?? $this->privates['App\Form\AlmacenType'] = new \App\Form\AlmacenType());
}, 'App\\Form\\ClientesType' => function () {
    return ($this->privates['App\Form\ClientesType'] ?? $this->privates['App\Form\ClientesType'] = new \App\Form\ClientesType());
}, 'App\\Form\\ContratarType' => function () {
    return ($this->privates['App\Form\ContratarType'] ?? $this->privates['App\Form\ContratarType'] = new \App\Form\ContratarType());
}, 'App\\Form\\DescuentoType' => function () {
    return ($this->privates['App\Form\DescuentoType'] ?? $this->privates['App\Form\DescuentoType'] = new \App\Form\DescuentoType());
}, 'App\\Form\\DetallesFacturaType' => function () {
    return ($this->privates['App\Form\DetallesFacturaType'] ?? $this->privates['App\Form\DetallesFacturaType'] = new \App\Form\DetallesFacturaType());
}, 'App\\Form\\FacturasType' => function () {
    return ($this->privates['App\Form\FacturasType'] ?? $this->privates['App\Form\FacturasType'] = new \App\Form\FacturasType());
}, 'App\\Form\\FamiliaType' => function () {
    return ($this->privates['App\Form\FamiliaType'] ?? $this->privates['App\Form\FamiliaType'] = new \App\Form\FamiliaType());
}, 'App\\Form\\IngresosType' => function () {
    return ($this->privates['App\Form\IngresosType'] ?? $this->privates['App\Form\IngresosType'] = new \App\Form\IngresosType());
}, 'App\\Form\\MovimientosAlmacen1Type' => function () {
    return ($this->privates['App\Form\MovimientosAlmacen1Type'] ?? $this->privates['App\Form\MovimientosAlmacen1Type'] = new \App\Form\MovimientosAlmacen1Type());
}, 'App\\Form\\MovimientosAlmacenType' => function () {
    return ($this->privates['App\Form\MovimientosAlmacenType'] ?? $this->privates['App\Form\MovimientosAlmacenType'] = new \App\Form\MovimientosAlmacenType());
}, 'App\\Form\\MovimientosDepositos1Type' => function () {
    return ($this->privates['App\Form\MovimientosDepositos1Type'] ?? $this->privates['App\Form\MovimientosDepositos1Type'] = new \App\Form\MovimientosDepositos1Type());
}, 'App\\Form\\MovimientosDepositosType' => function () {
    return ($this->privates['App\Form\MovimientosDepositosType'] ?? $this->privates['App\Form\MovimientosDepositosType'] = new \App\Form\MovimientosDepositosType());
}, 'App\\Form\\ProductosType' => function () {
    return ($this->privates['App\Form\ProductosType'] ?? $this->privates['App\Form\ProductosType'] = new \App\Form\ProductosType());
}, 'App\\Form\\ProveedoresType' => function () {
    return ($this->privates['App\Form\ProveedoresType'] ?? $this->privates['App\Form\ProveedoresType'] = new \App\Form\ProveedoresType());
}, 'App\\Form\\User1Type' => function () {
    return ($this->privates['App\Form\User1Type'] ?? $this->privates['App\Form\User1Type'] = new \App\Form\User1Type());
}, 'App\\Form\\UserType' => function () {
    return ($this->privates['App\Form\UserType'] ?? $this->privates['App\Form\UserType'] = new \App\Form\UserType());
}, 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => function () {
    return ($this->privates['fos_ck_editor.form.type'] ?? $this->load('getFosCkEditor_Form_TypeService.php'));
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ($this->privates['form.type.entity'] ?? $this->load('getForm_Type_EntityService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ($this->privates['form.type.choice'] ?? $this->load('getForm_Type_ChoiceService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ($this->privates['form.type.form'] ?? $this->load('getForm_Type_FormService.php'));
})), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 1 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 2 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 3 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
}, 4), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? $this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? $this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
}, 1)), new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
}, 2))), ($this->privates['form.resolved_type_factory'] ?? $this->privates['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory()));
