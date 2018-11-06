<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcEnvDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'almacen_index' => array(array(), array('_controller' => 'App\\Controller\\AlmacenController::index'), array(), array(array('text', '/almacen/')), array(), array()),
        'almacen_new' => array(array(), array('_controller' => 'App\\Controller\\AlmacenController::new'), array(), array(array('text', '/almacen/new')), array(), array()),
        'almacen_show' => array(array('id'), array('_controller' => 'App\\Controller\\AlmacenController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/almacen')), array(), array()),
        'almacen_edit' => array(array('id'), array('_controller' => 'App\\Controller\\AlmacenController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/almacen')), array(), array()),
        'almacen_delete' => array(array('id'), array('_controller' => 'App\\Controller\\AlmacenController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/almacen')), array(), array()),
        'clientes_index' => array(array(), array('_controller' => 'App\\Controller\\ClientesController::index'), array(), array(array('text', '/clientes/')), array(), array()),
        'clientes_new' => array(array(), array('_controller' => 'App\\Controller\\ClientesController::new'), array(), array(array('text', '/clientes/new')), array(), array()),
        'clientes_show' => array(array('id'), array('_controller' => 'App\\Controller\\ClientesController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/clientes')), array(), array()),
        'clientes_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ClientesController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/clientes')), array(), array()),
        'clientes_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ClientesController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/clientes')), array(), array()),
        'buscardescuento' => array(array(), array('_controller' => 'App\\Controller\\DescuentoController::buscardescuento'), array(), array(array('text', '/descuento/buscardescuento')), array(), array()),
        'descuento_index' => array(array(), array('_controller' => 'App\\Controller\\DescuentoController::index'), array(), array(array('text', '/descuento/')), array(), array()),
        'descuento_new' => array(array(), array('_controller' => 'App\\Controller\\DescuentoController::new'), array(), array(array('text', '/descuento/new')), array(), array()),
        'descuento_show' => array(array('id'), array('_controller' => 'App\\Controller\\DescuentoController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/descuento')), array(), array()),
        'descuento_edit' => array(array('id'), array('_controller' => 'App\\Controller\\DescuentoController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/descuento')), array(), array()),
        'descuento_delete' => array(array('id'), array('_controller' => 'App\\Controller\\DescuentoController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/descuento')), array(), array()),
        'detallesproductosremove' => array(array(), array('_controller' => 'App\\Controller\\DetallesFacturaController::buscarproducto'), array(), array(array('text', '/detalles/factura/detallesproductosremove')), array(), array()),
        'detalles_factura_search' => array(array(), array('_format' => 'json', '_controller' => 'App\\Controller\\DetallesFacturaController::searchAuthor'), array(), array(array('text', '/detalles/factura/search')), array(), array()),
        'detalles_factura_searchauthor' => array(array(), array('_format' => 'json', '_controller' => 'App\\Controller\\DetallesFacturaController::getAuthor'), array(), array(array('text', '/detalles/factura/search/author')), array(), array()),
        'detalles_factura_index' => array(array(), array('_controller' => 'App\\Controller\\DetallesFacturaController::index'), array(), array(array('text', '/detalles/factura/')), array(), array()),
        'detalles_factura_new' => array(array(), array('_controller' => 'App\\Controller\\DetallesFacturaController::new'), array(), array(array('text', '/detalles/factura/new')), array(), array()),
        'detalles_factura_show' => array(array('id'), array('_controller' => 'App\\Controller\\DetallesFacturaController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/detalles/factura')), array(), array()),
        'detalles_factura_edit' => array(array('id'), array('_controller' => 'App\\Controller\\DetallesFacturaController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/detalles/factura')), array(), array()),
        'detalles_factura_delete' => array(array('id'), array('_controller' => 'App\\Controller\\DetallesFacturaController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/detalles/factura')), array(), array()),
        'factura_pdf' => array(array('id'), array('_controller' => 'App\\Controller\\FacturasController::factura_pdf'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/facturas/factura_pdf')), array(), array()),
        'facturas_index' => array(array(), array('_controller' => 'App\\Controller\\FacturasController::index'), array(), array(array('text', '/facturas/')), array(), array()),
        'facturas_new' => array(array('cliente'), array('_controller' => 'App\\Controller\\FacturasController::new'), array(), array(array('variable', '/', '[^/]++', 'cliente'), array('text', '/facturas/new')), array(), array()),
        'facturas_show' => array(array('id'), array('_controller' => 'App\\Controller\\FacturasController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/facturas')), array(), array()),
        'facturas_edit' => array(array('id', 'cliente'), array('_controller' => 'App\\Controller\\FacturasController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'cliente'), array('variable', '/', '[^/]++', 'id'), array('text', '/facturas')), array(), array()),
        'facturas_delete' => array(array('id'), array('_controller' => 'App\\Controller\\FacturasController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/facturas')), array(), array()),
        'familia_index' => array(array(), array('_controller' => 'App\\Controller\\FamiliaController::index'), array(), array(array('text', '/familia/')), array(), array()),
        'familia_new' => array(array(), array('_controller' => 'App\\Controller\\FamiliaController::new'), array(), array(array('text', '/familia/new')), array(), array()),
        'familia_show' => array(array('id'), array('_controller' => 'App\\Controller\\FamiliaController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/familia')), array(), array()),
        'familia_edit' => array(array('id'), array('_controller' => 'App\\Controller\\FamiliaController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/familia')), array(), array()),
        'familia_delete' => array(array('id'), array('_controller' => 'App\\Controller\\FamiliaController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/familia')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/')), array(), array()),
        'ingresos_index' => array(array(), array('_controller' => 'App\\Controller\\IngresosController::index'), array(), array(array('text', '/ingresos/')), array(), array()),
        'ingresos_new' => array(array(), array('_controller' => 'App\\Controller\\IngresosController::new'), array(), array(array('text', '/ingresos/new')), array(), array()),
        'ingresos_show' => array(array('id'), array('_controller' => 'App\\Controller\\IngresosController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/ingresos')), array(), array()),
        'ingresos_edit' => array(array('id'), array('_controller' => 'App\\Controller\\IngresosController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/ingresos')), array(), array()),
        'ingresos_delete' => array(array('id'), array('_controller' => 'App\\Controller\\IngresosController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/ingresos')), array(), array()),
        'inventario' => array(array(), array('_controller' => 'App\\Controller\\MovimientosAlmacenController::inventario'), array(), array(array('text', '/movimientos/almacen/inventario')), array(), array()),
        'movimientos_almacen_index' => array(array(), array('_controller' => 'App\\Controller\\MovimientosAlmacenController::index'), array(), array(array('text', '/movimientos/almacen/')), array(), array()),
        'movimientos_almacen_new' => array(array(), array('_controller' => 'App\\Controller\\MovimientosAlmacenController::new'), array(), array(array('text', '/movimientos/almacen/new')), array(), array()),
        'movimientos_almacen_show' => array(array('id'), array('_controller' => 'App\\Controller\\MovimientosAlmacenController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/movimientos/almacen')), array(), array()),
        'movimientos_almacen_edit' => array(array('id'), array('_controller' => 'App\\Controller\\MovimientosAlmacenController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/movimientos/almacen')), array(), array()),
        'movimientos_almacen_delete' => array(array('id'), array('_controller' => 'App\\Controller\\MovimientosAlmacenController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/movimientos/almacen')), array(), array()),
        'movimientos_depositos_index' => array(array(), array('_controller' => 'App\\Controller\\MovimientosDepositosController::index'), array(), array(array('text', '/movimientos/depositos/')), array(), array()),
        'movimientos_depositos_new' => array(array('deposito'), array('_controller' => 'App\\Controller\\MovimientosDepositosController::new'), array(), array(array('variable', '/', '[^/]++', 'deposito'), array('text', '/movimientos/depositos/new')), array(), array()),
        'movimientos_depositos_show' => array(array('id', 'deposito'), array('_controller' => 'App\\Controller\\MovimientosDepositosController::show'), array(), array(array('variable', '/', '[^/]++', 'deposito'), array('variable', '/', '[^/]++', 'id'), array('text', '/movimientos/depositos')), array(), array()),
        'movimientos_depositos_edit' => array(array('id', 'deposito'), array('_controller' => 'App\\Controller\\MovimientosDepositosController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'deposito'), array('variable', '/', '[^/]++', 'id'), array('text', '/movimientos/depositos')), array(), array()),
        'movimientos_depositos_delete' => array(array('id'), array('_controller' => 'App\\Controller\\MovimientosDepositosController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/movimientos/depositos')), array(), array()),
        'disponibilidad' => array(array(), array('_controller' => 'App\\Controller\\ProductosController::disponibilidad'), array(), array(array('text', '/productos/disponibilidad')), array(), array()),
        'buscarproducto' => array(array(), array('_controller' => 'App\\Controller\\ProductosController::buscarproducto'), array(), array(array('text', '/productos/buscarproducto')), array(), array()),
        'productos_index' => array(array(), array('_controller' => 'App\\Controller\\ProductosController::index'), array(), array(array('text', '/productos/')), array(), array()),
        'emsableremove' => array(array(), array('_controller' => 'App\\Controller\\ProductosController::emsableremove'), array(), array(array('text', '/productos/emsableremove')), array(), array()),
        'productos_edit_ensamble' => array(array('id'), array('_controller' => 'App\\Controller\\ProductosController::editensamble'), array(), array(array('text', '/edit/ensamble'), array('variable', '/', '[^/]++', 'id'), array('text', '/productos')), array(), array()),
        'productos_new_ensamble' => array(array(), array('_controller' => 'App\\Controller\\ProductosController::newensamble'), array(), array(array('text', '/productos/ensable')), array(), array()),
        'productos_new' => array(array(), array('_controller' => 'App\\Controller\\ProductosController::new'), array(), array(array('text', '/productos/new')), array(), array()),
        'productos_show' => array(array('id'), array('_controller' => 'App\\Controller\\ProductosController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/productos')), array(), array()),
        'productos_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ProductosController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/productos')), array(), array()),
        'productos_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ProductosController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/productos')), array(), array()),
        'proveedores_index' => array(array(), array('_controller' => 'App\\Controller\\ProveedoresController::index'), array(), array(array('text', '/proveedores/')), array(), array()),
        'proveedores_new' => array(array(), array('_controller' => 'App\\Controller\\ProveedoresController::new'), array(), array(array('text', '/proveedores/new')), array(), array()),
        'proveedores_show' => array(array('id'), array('_controller' => 'App\\Controller\\ProveedoresController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/proveedores')), array(), array()),
        'proveedores_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ProveedoresController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/proveedores')), array(), array()),
        'proveedores_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ProveedoresController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/proveedores')), array(), array()),
        'user_registration' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::register'), array(), array(array('text', '/register')), array(), array()),
        'reportes' => array(array(), array('_controller' => 'App\\Controller\\ReportesController::index'), array(), array(array('text', '/reportes')), array(), array()),
        'reportesventas' => array(array(), array('_controller' => 'App\\Controller\\ReportesController::vendedor'), array(), array(array('text', '/reportes/ventas')), array(), array()),
        'reportesutilidadproductos' => array(array(), array('_controller' => 'App\\Controller\\ReportesController::utilidad'), array(), array(array('text', '/reportes/utilidad/productos')), array(), array()),
        'reportesclientes' => array(array(), array('_controller' => 'App\\Controller\\ReportesController::clientes'), array(), array(array('text', '/reportes/clientes')), array(), array()),
        'reportesproductos' => array(array(), array('_controller' => 'App\\Controller\\ReportesController::productos'), array(), array(array('text', '/reportes/productos')), array(), array()),
        'reportesproveedores' => array(array(), array('_controller' => 'App\\Controller\\ReportesController::proveedores'), array(), array(array('text', '/reportes/proveedores')), array(), array()),
        'reportesventasfechas' => array(array(), array('_controller' => 'App\\Controller\\ReportesController::ventasfechas'), array(), array(array('text', '/reportes/ventasfechas')), array(), array()),
        'cobrar' => array(array(), array('_controller' => 'App\\Controller\\ReportesController::cobrar'), array(), array(array('text', '/reportes/cobrar')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'security_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        'admin' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::admin'), array(), array(array('text', '/administrator/admin')), array(), array()),
        'user_index' => array(array(), array('_controller' => 'App\\Controller\\UserController::index'), array(), array(array('text', '/user/')), array(), array()),
        'user_new' => array(array(), array('_controller' => 'App\\Controller\\UserController::new'), array(), array(array('text', '/user/new')), array(), array()),
        'user_show' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/user')), array(), array()),
        'user_edit' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/user')), array(), array()),
        'user_edit_perfil' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::editperfil'), array(), array(array('text', '/perfil'), array('variable', '/', '[^/]++', 'id'), array('text', '/user')), array(), array()),
        'user_delete' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/user')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
