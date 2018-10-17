<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'admin' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::admin'), array(), array(array('text', '/admin')), array(), array()),
        'facturas_index' => array(array(), array('_controller' => 'App\\Controller\\FacturasController::index'), array(), array(array('text', '/facturas/')), array(), array()),
        'facturas_new' => array(array(), array('_controller' => 'App\\Controller\\FacturasController::new'), array(), array(array('text', '/facturas/new')), array(), array()),
        'facturas_show' => array(array('id'), array('_controller' => 'App\\Controller\\FacturasController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/facturas')), array(), array()),
        'facturas_edit' => array(array('id'), array('_controller' => 'App\\Controller\\FacturasController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/facturas')), array(), array()),
        'facturas_delete' => array(array('id'), array('_controller' => 'App\\Controller\\FacturasController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/facturas')), array(), array()),
        'familia_index' => array(array(), array('_controller' => 'App\\Controller\\FamiliaController::index'), array(), array(array('text', '/familia/')), array(), array()),
        'familia_new' => array(array(), array('_controller' => 'App\\Controller\\FamiliaController::new'), array(), array(array('text', '/familia/new')), array(), array()),
        'familia_show' => array(array('id'), array('_controller' => 'App\\Controller\\FamiliaController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/familia')), array(), array()),
        'familia_edit' => array(array('id'), array('_controller' => 'App\\Controller\\FamiliaController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/familia')), array(), array()),
        'familia_delete' => array(array('id'), array('_controller' => 'App\\Controller\\FamiliaController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/familia')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/')), array(), array()),
        'movimientos_depositos_index' => array(array(), array('_controller' => 'App\\Controller\\MovimientosDepositosController::index'), array(), array(array('text', '/movimientos/depositos/')), array(), array()),
        'movimientos_depositos_new' => array(array('deposito'), array('_controller' => 'App\\Controller\\MovimientosDepositosController::new'), array(), array(array('variable', '/', '[^/]++', 'deposito'), array('text', '/movimientos/depositos/new')), array(), array()),
        'movimientos_depositos_show' => array(array('id', 'deposito'), array('_controller' => 'App\\Controller\\MovimientosDepositosController::show'), array(), array(array('variable', '/', '[^/]++', 'deposito'), array('variable', '/', '[^/]++', 'id'), array('text', '/movimientos/depositos')), array(), array()),
        'movimientos_depositos_edit' => array(array('id', 'deposito'), array('_controller' => 'App\\Controller\\MovimientosDepositosController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'deposito'), array('variable', '/', '[^/]++', 'id'), array('text', '/movimientos/depositos')), array(), array()),
        'movimientos_depositos_delete' => array(array('id'), array('_controller' => 'App\\Controller\\MovimientosDepositosController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/movimientos/depositos')), array(), array()),
        'productos_index' => array(array(), array('_controller' => 'App\\Controller\\ProductosController::index'), array(), array(array('text', '/productos/')), array(), array()),
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
        'login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'security_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
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
