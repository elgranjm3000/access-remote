<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\AlmacenController::delete' => function () {
    return ($this->privates['.service_locator.GhCUbNg'] ?? $this->load('get_ServiceLocator_GhCUbNgService.php'));
}, 'App\\Controller\\AlmacenController::edit' => function () {
    return ($this->privates['.service_locator.GhCUbNg'] ?? $this->load('get_ServiceLocator_GhCUbNgService.php'));
}, 'App\\Controller\\AlmacenController::index' => function () {
    return ($this->privates['.service_locator.DQnPz.p'] ?? $this->load('get_ServiceLocator_DQnPz_PService.php'));
}, 'App\\Controller\\AlmacenController::show' => function () {
    return ($this->privates['.service_locator.GhCUbNg'] ?? $this->load('get_ServiceLocator_GhCUbNgService.php'));
}, 'App\\Controller\\ClientesController::delete' => function () {
    return ($this->privates['.service_locator.PGhsZLE'] ?? $this->load('get_ServiceLocator_PGhsZLEService.php'));
}, 'App\\Controller\\ClientesController::edit' => function () {
    return ($this->privates['.service_locator.PGhsZLE'] ?? $this->load('get_ServiceLocator_PGhsZLEService.php'));
}, 'App\\Controller\\ClientesController::index' => function () {
    return ($this->privates['.service_locator.ohh9a7M'] ?? $this->load('get_ServiceLocator_Ohh9a7MService.php'));
}, 'App\\Controller\\ClientesController::show' => function () {
    return ($this->privates['.service_locator.PGhsZLE'] ?? $this->load('get_ServiceLocator_PGhsZLEService.php'));
}, 'App\\Controller\\DescuentoController::delete' => function () {
    return ($this->privates['.service_locator.yk9zACf'] ?? $this->load('get_ServiceLocator_Yk9zACfService.php'));
}, 'App\\Controller\\DescuentoController::edit' => function () {
    return ($this->privates['.service_locator.yk9zACf'] ?? $this->load('get_ServiceLocator_Yk9zACfService.php'));
}, 'App\\Controller\\DescuentoController::index' => function () {
    return ($this->privates['.service_locator.A73gQXU'] ?? $this->load('get_ServiceLocator_A73gQXUService.php'));
}, 'App\\Controller\\DescuentoController::show' => function () {
    return ($this->privates['.service_locator.yk9zACf'] ?? $this->load('get_ServiceLocator_Yk9zACfService.php'));
}, 'App\\Controller\\DetallesFacturaController::delete' => function () {
    return ($this->privates['.service_locator.0fqA5K5'] ?? $this->load('get_ServiceLocator_0fqA5K5Service.php'));
}, 'App\\Controller\\DetallesFacturaController::edit' => function () {
    return ($this->privates['.service_locator.0fqA5K5'] ?? $this->load('get_ServiceLocator_0fqA5K5Service.php'));
}, 'App\\Controller\\DetallesFacturaController::index' => function () {
    return ($this->privates['.service_locator.kFI1I3_'] ?? $this->load('get_ServiceLocator_KFI1I3Service.php'));
}, 'App\\Controller\\DetallesFacturaController::show' => function () {
    return ($this->privates['.service_locator.0fqA5K5'] ?? $this->load('get_ServiceLocator_0fqA5K5Service.php'));
}, 'App\\Controller\\FacturasController::delete' => function () {
    return ($this->privates['.service_locator.YU.8.TJ'] ?? $this->load('get_ServiceLocator_YU_8_TJService.php'));
}, 'App\\Controller\\FacturasController::edit' => function () {
    return ($this->privates['.service_locator.YU.8.TJ'] ?? $this->load('get_ServiceLocator_YU_8_TJService.php'));
}, 'App\\Controller\\FacturasController::factura_pdf' => function () {
    return ($this->privates['.service_locator.fAmOCKw'] ?? $this->load('get_ServiceLocator_FAmOCKwService.php'));
}, 'App\\Controller\\FacturasController::index' => function () {
    return ($this->privates['.service_locator.fAmOCKw'] ?? $this->load('get_ServiceLocator_FAmOCKwService.php'));
}, 'App\\Controller\\FacturasController::show' => function () {
    return ($this->privates['.service_locator.YU.8.TJ'] ?? $this->load('get_ServiceLocator_YU_8_TJService.php'));
}, 'App\\Controller\\FamiliaController::delete' => function () {
    return ($this->privates['.service_locator.Af7ADn2'] ?? $this->load('get_ServiceLocator_Af7ADn2Service.php'));
}, 'App\\Controller\\FamiliaController::edit' => function () {
    return ($this->privates['.service_locator.Af7ADn2'] ?? $this->load('get_ServiceLocator_Af7ADn2Service.php'));
}, 'App\\Controller\\FamiliaController::index' => function () {
    return ($this->privates['.service_locator.oTyE6Eq'] ?? $this->load('get_ServiceLocator_OTyE6EqService.php'));
}, 'App\\Controller\\FamiliaController::show' => function () {
    return ($this->privates['.service_locator.Af7ADn2'] ?? $this->load('get_ServiceLocator_Af7ADn2Service.php'));
}, 'App\\Controller\\IngresosController::delete' => function () {
    return ($this->privates['.service_locator.9Dq1.6i'] ?? $this->load('get_ServiceLocator_9Dq1_6iService.php'));
}, 'App\\Controller\\IngresosController::edit' => function () {
    return ($this->privates['.service_locator.9Dq1.6i'] ?? $this->load('get_ServiceLocator_9Dq1_6iService.php'));
}, 'App\\Controller\\IngresosController::index' => function () {
    return ($this->privates['.service_locator.rw17rhD'] ?? $this->load('get_ServiceLocator_Rw17rhDService.php'));
}, 'App\\Controller\\IngresosController::show' => function () {
    return ($this->privates['.service_locator.9Dq1.6i'] ?? $this->load('get_ServiceLocator_9Dq1_6iService.php'));
}, 'App\\Controller\\MovimientosAlmacenController::delete' => function () {
    return ($this->privates['.service_locator.A4AyGBH'] ?? $this->load('get_ServiceLocator_A4AyGBHService.php'));
}, 'App\\Controller\\MovimientosAlmacenController::edit' => function () {
    return ($this->privates['.service_locator.A4AyGBH'] ?? $this->load('get_ServiceLocator_A4AyGBHService.php'));
}, 'App\\Controller\\MovimientosAlmacenController::index' => function () {
    return ($this->privates['.service_locator.qINb0kK'] ?? $this->load('get_ServiceLocator_QINb0kKService.php'));
}, 'App\\Controller\\MovimientosAlmacenController::show' => function () {
    return ($this->privates['.service_locator.A4AyGBH'] ?? $this->load('get_ServiceLocator_A4AyGBHService.php'));
}, 'App\\Controller\\MovimientosDepositosController::delete' => function () {
    return ($this->privates['.service_locator.wTK5wS5'] ?? $this->load('get_ServiceLocator_WTK5wS5Service.php'));
}, 'App\\Controller\\MovimientosDepositosController::edit' => function () {
    return ($this->privates['.service_locator.UGPvOKO'] ?? $this->load('get_ServiceLocator_UGPvOKOService.php'));
}, 'App\\Controller\\MovimientosDepositosController::index' => function () {
    return ($this->privates['.service_locator.6BMcKXC'] ?? $this->load('get_ServiceLocator_6BMcKXCService.php'));
}, 'App\\Controller\\MovimientosDepositosController::new' => function () {
    return ($this->privates['.service_locator.6BMcKXC'] ?? $this->load('get_ServiceLocator_6BMcKXCService.php'));
}, 'App\\Controller\\MovimientosDepositosController::show' => function () {
    return ($this->privates['.service_locator.wTK5wS5'] ?? $this->load('get_ServiceLocator_WTK5wS5Service.php'));
}, 'App\\Controller\\ProductosController::delete' => function () {
    return ($this->privates['.service_locator.MpabvJx'] ?? $this->load('get_ServiceLocator_MpabvJxService.php'));
}, 'App\\Controller\\ProductosController::edit' => function () {
    return ($this->privates['.service_locator.MpabvJx'] ?? $this->load('get_ServiceLocator_MpabvJxService.php'));
}, 'App\\Controller\\ProductosController::index' => function () {
    return ($this->privates['.service_locator.lqzR2D3'] ?? $this->load('get_ServiceLocator_LqzR2D3Service.php'));
}, 'App\\Controller\\ProductosController::show' => function () {
    return ($this->privates['.service_locator.MpabvJx'] ?? $this->load('get_ServiceLocator_MpabvJxService.php'));
}, 'App\\Controller\\ProveedoresController::delete' => function () {
    return ($this->privates['.service_locator.ug26py1'] ?? $this->load('get_ServiceLocator_Ug26py1Service.php'));
}, 'App\\Controller\\ProveedoresController::edit' => function () {
    return ($this->privates['.service_locator.ug26py1'] ?? $this->load('get_ServiceLocator_Ug26py1Service.php'));
}, 'App\\Controller\\ProveedoresController::index' => function () {
    return ($this->privates['.service_locator.yfKiB9f'] ?? $this->load('get_ServiceLocator_YfKiB9fService.php'));
}, 'App\\Controller\\ProveedoresController::show' => function () {
    return ($this->privates['.service_locator.ug26py1'] ?? $this->load('get_ServiceLocator_Ug26py1Service.php'));
}, 'App\\Controller\\RegistrationController::register' => function () {
    return ($this->privates['.service_locator.cPEJcDm'] ?? $this->load('get_ServiceLocator_CPEJcDmService.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['.service_locator.ypl2DZZ'] ?? $this->load('get_ServiceLocator_Ypl2DZZService.php'));
}, 'App\\Controller\\AlmacenController:delete' => function () {
    return ($this->privates['.service_locator.GhCUbNg'] ?? $this->load('get_ServiceLocator_GhCUbNgService.php'));
}, 'App\\Controller\\AlmacenController:edit' => function () {
    return ($this->privates['.service_locator.GhCUbNg'] ?? $this->load('get_ServiceLocator_GhCUbNgService.php'));
}, 'App\\Controller\\AlmacenController:index' => function () {
    return ($this->privates['.service_locator.DQnPz.p'] ?? $this->load('get_ServiceLocator_DQnPz_PService.php'));
}, 'App\\Controller\\AlmacenController:show' => function () {
    return ($this->privates['.service_locator.GhCUbNg'] ?? $this->load('get_ServiceLocator_GhCUbNgService.php'));
}, 'App\\Controller\\ClientesController:delete' => function () {
    return ($this->privates['.service_locator.PGhsZLE'] ?? $this->load('get_ServiceLocator_PGhsZLEService.php'));
}, 'App\\Controller\\ClientesController:edit' => function () {
    return ($this->privates['.service_locator.PGhsZLE'] ?? $this->load('get_ServiceLocator_PGhsZLEService.php'));
}, 'App\\Controller\\ClientesController:index' => function () {
    return ($this->privates['.service_locator.ohh9a7M'] ?? $this->load('get_ServiceLocator_Ohh9a7MService.php'));
}, 'App\\Controller\\ClientesController:show' => function () {
    return ($this->privates['.service_locator.PGhsZLE'] ?? $this->load('get_ServiceLocator_PGhsZLEService.php'));
}, 'App\\Controller\\DescuentoController:delete' => function () {
    return ($this->privates['.service_locator.yk9zACf'] ?? $this->load('get_ServiceLocator_Yk9zACfService.php'));
}, 'App\\Controller\\DescuentoController:edit' => function () {
    return ($this->privates['.service_locator.yk9zACf'] ?? $this->load('get_ServiceLocator_Yk9zACfService.php'));
}, 'App\\Controller\\DescuentoController:index' => function () {
    return ($this->privates['.service_locator.A73gQXU'] ?? $this->load('get_ServiceLocator_A73gQXUService.php'));
}, 'App\\Controller\\DescuentoController:show' => function () {
    return ($this->privates['.service_locator.yk9zACf'] ?? $this->load('get_ServiceLocator_Yk9zACfService.php'));
}, 'App\\Controller\\DetallesFacturaController:delete' => function () {
    return ($this->privates['.service_locator.0fqA5K5'] ?? $this->load('get_ServiceLocator_0fqA5K5Service.php'));
}, 'App\\Controller\\DetallesFacturaController:edit' => function () {
    return ($this->privates['.service_locator.0fqA5K5'] ?? $this->load('get_ServiceLocator_0fqA5K5Service.php'));
}, 'App\\Controller\\DetallesFacturaController:index' => function () {
    return ($this->privates['.service_locator.kFI1I3_'] ?? $this->load('get_ServiceLocator_KFI1I3Service.php'));
}, 'App\\Controller\\DetallesFacturaController:show' => function () {
    return ($this->privates['.service_locator.0fqA5K5'] ?? $this->load('get_ServiceLocator_0fqA5K5Service.php'));
}, 'App\\Controller\\FacturasController:delete' => function () {
    return ($this->privates['.service_locator.YU.8.TJ'] ?? $this->load('get_ServiceLocator_YU_8_TJService.php'));
}, 'App\\Controller\\FacturasController:edit' => function () {
    return ($this->privates['.service_locator.YU.8.TJ'] ?? $this->load('get_ServiceLocator_YU_8_TJService.php'));
}, 'App\\Controller\\FacturasController:factura_pdf' => function () {
    return ($this->privates['.service_locator.fAmOCKw'] ?? $this->load('get_ServiceLocator_FAmOCKwService.php'));
}, 'App\\Controller\\FacturasController:index' => function () {
    return ($this->privates['.service_locator.fAmOCKw'] ?? $this->load('get_ServiceLocator_FAmOCKwService.php'));
}, 'App\\Controller\\FacturasController:show' => function () {
    return ($this->privates['.service_locator.YU.8.TJ'] ?? $this->load('get_ServiceLocator_YU_8_TJService.php'));
}, 'App\\Controller\\FamiliaController:delete' => function () {
    return ($this->privates['.service_locator.Af7ADn2'] ?? $this->load('get_ServiceLocator_Af7ADn2Service.php'));
}, 'App\\Controller\\FamiliaController:edit' => function () {
    return ($this->privates['.service_locator.Af7ADn2'] ?? $this->load('get_ServiceLocator_Af7ADn2Service.php'));
}, 'App\\Controller\\FamiliaController:index' => function () {
    return ($this->privates['.service_locator.oTyE6Eq'] ?? $this->load('get_ServiceLocator_OTyE6EqService.php'));
}, 'App\\Controller\\FamiliaController:show' => function () {
    return ($this->privates['.service_locator.Af7ADn2'] ?? $this->load('get_ServiceLocator_Af7ADn2Service.php'));
}, 'App\\Controller\\IngresosController:delete' => function () {
    return ($this->privates['.service_locator.9Dq1.6i'] ?? $this->load('get_ServiceLocator_9Dq1_6iService.php'));
}, 'App\\Controller\\IngresosController:edit' => function () {
    return ($this->privates['.service_locator.9Dq1.6i'] ?? $this->load('get_ServiceLocator_9Dq1_6iService.php'));
}, 'App\\Controller\\IngresosController:index' => function () {
    return ($this->privates['.service_locator.rw17rhD'] ?? $this->load('get_ServiceLocator_Rw17rhDService.php'));
}, 'App\\Controller\\IngresosController:show' => function () {
    return ($this->privates['.service_locator.9Dq1.6i'] ?? $this->load('get_ServiceLocator_9Dq1_6iService.php'));
}, 'App\\Controller\\MovimientosAlmacenController:delete' => function () {
    return ($this->privates['.service_locator.A4AyGBH'] ?? $this->load('get_ServiceLocator_A4AyGBHService.php'));
}, 'App\\Controller\\MovimientosAlmacenController:edit' => function () {
    return ($this->privates['.service_locator.A4AyGBH'] ?? $this->load('get_ServiceLocator_A4AyGBHService.php'));
}, 'App\\Controller\\MovimientosAlmacenController:index' => function () {
    return ($this->privates['.service_locator.qINb0kK'] ?? $this->load('get_ServiceLocator_QINb0kKService.php'));
}, 'App\\Controller\\MovimientosAlmacenController:show' => function () {
    return ($this->privates['.service_locator.A4AyGBH'] ?? $this->load('get_ServiceLocator_A4AyGBHService.php'));
}, 'App\\Controller\\MovimientosDepositosController:delete' => function () {
    return ($this->privates['.service_locator.wTK5wS5'] ?? $this->load('get_ServiceLocator_WTK5wS5Service.php'));
}, 'App\\Controller\\MovimientosDepositosController:edit' => function () {
    return ($this->privates['.service_locator.UGPvOKO'] ?? $this->load('get_ServiceLocator_UGPvOKOService.php'));
}, 'App\\Controller\\MovimientosDepositosController:index' => function () {
    return ($this->privates['.service_locator.6BMcKXC'] ?? $this->load('get_ServiceLocator_6BMcKXCService.php'));
}, 'App\\Controller\\MovimientosDepositosController:new' => function () {
    return ($this->privates['.service_locator.6BMcKXC'] ?? $this->load('get_ServiceLocator_6BMcKXCService.php'));
}, 'App\\Controller\\MovimientosDepositosController:show' => function () {
    return ($this->privates['.service_locator.wTK5wS5'] ?? $this->load('get_ServiceLocator_WTK5wS5Service.php'));
}, 'App\\Controller\\ProductosController:delete' => function () {
    return ($this->privates['.service_locator.MpabvJx'] ?? $this->load('get_ServiceLocator_MpabvJxService.php'));
}, 'App\\Controller\\ProductosController:edit' => function () {
    return ($this->privates['.service_locator.MpabvJx'] ?? $this->load('get_ServiceLocator_MpabvJxService.php'));
}, 'App\\Controller\\ProductosController:index' => function () {
    return ($this->privates['.service_locator.lqzR2D3'] ?? $this->load('get_ServiceLocator_LqzR2D3Service.php'));
}, 'App\\Controller\\ProductosController:show' => function () {
    return ($this->privates['.service_locator.MpabvJx'] ?? $this->load('get_ServiceLocator_MpabvJxService.php'));
}, 'App\\Controller\\ProveedoresController:delete' => function () {
    return ($this->privates['.service_locator.ug26py1'] ?? $this->load('get_ServiceLocator_Ug26py1Service.php'));
}, 'App\\Controller\\ProveedoresController:edit' => function () {
    return ($this->privates['.service_locator.ug26py1'] ?? $this->load('get_ServiceLocator_Ug26py1Service.php'));
}, 'App\\Controller\\ProveedoresController:index' => function () {
    return ($this->privates['.service_locator.yfKiB9f'] ?? $this->load('get_ServiceLocator_YfKiB9fService.php'));
}, 'App\\Controller\\ProveedoresController:show' => function () {
    return ($this->privates['.service_locator.ug26py1'] ?? $this->load('get_ServiceLocator_Ug26py1Service.php'));
}, 'App\\Controller\\RegistrationController:register' => function () {
    return ($this->privates['.service_locator.cPEJcDm'] ?? $this->load('get_ServiceLocator_CPEJcDmService.php'));
}, 'App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['.service_locator.ypl2DZZ'] ?? $this->load('get_ServiceLocator_Ypl2DZZService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
