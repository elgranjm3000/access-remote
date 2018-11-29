<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/almacen/' => array(array('_route' => 'almacen_index', '_controller' => 'App\\Controller\\AlmacenController::index'), null, array('GET' => 0), null),
                    '/almacen/new' => array(array('_route' => 'almacen_new', '_controller' => 'App\\Controller\\AlmacenController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/clientes/' => array(array('_route' => 'clientes_index', '_controller' => 'App\\Controller\\ClientesController::index'), null, array('GET' => 0), null),
                    '/clientes/new' => array(array('_route' => 'clientes_new', '_controller' => 'App\\Controller\\ClientesController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/descuento/buscardescuento' => array(array('_route' => 'buscardescuento', '_controller' => 'App\\Controller\\DescuentoController::buscardescuento'), null, array('GET' => 0), null),
                    '/descuento/' => array(array('_route' => 'descuento_index', '_controller' => 'App\\Controller\\DescuentoController::index'), null, array('GET' => 0), null),
                    '/descuento/new' => array(array('_route' => 'descuento_new', '_controller' => 'App\\Controller\\DescuentoController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/detalles/factura/detallesproductosremove' => array(array('_route' => 'detallesproductosremove', '_controller' => 'App\\Controller\\DetallesFacturaController::buscarproducto'), null, array('GET' => 0), null),
                    '/detalles/factura/search' => array(array('_route' => 'detalles_factura_search', '_format' => 'json', '_controller' => 'App\\Controller\\DetallesFacturaController::searchAuthor'), null, array('GET' => 0), null),
                    '/detalles/factura/search/author' => array(array('_route' => 'detalles_factura_searchauthor', '_format' => 'json', '_controller' => 'App\\Controller\\DetallesFacturaController::getAuthor'), null, array('GET' => 0), null),
                    '/detalles/factura/' => array(array('_route' => 'detalles_factura_index', '_controller' => 'App\\Controller\\DetallesFacturaController::index'), null, array('GET' => 0), null),
                    '/detalles/factura/new' => array(array('_route' => 'detalles_factura_new', '_controller' => 'App\\Controller\\DetallesFacturaController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/facturas/' => array(array('_route' => 'facturas_index', '_controller' => 'App\\Controller\\FacturasController::index'), null, array('GET' => 0), null),
                    '/familia/' => array(array('_route' => 'familia_index', '_controller' => 'App\\Controller\\FamiliaController::index'), null, array('GET' => 0), null),
                    '/familia/new' => array(array('_route' => 'familia_new', '_controller' => 'App\\Controller\\FamiliaController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null),
                    '/ingresos/' => array(array('_route' => 'ingresos_index', '_controller' => 'App\\Controller\\IngresosController::index'), null, array('GET' => 0), null),
                    '/ingresos/new' => array(array('_route' => 'ingresos_new', '_controller' => 'App\\Controller\\IngresosController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/movimientos/almacen/inventario' => array(array('_route' => 'inventario', '_controller' => 'App\\Controller\\MovimientosAlmacenController::inventario'), null, array('GET' => 0, 'POST' => 1), null),
                    '/movimientos/almacen/' => array(array('_route' => 'movimientos_almacen_index', '_controller' => 'App\\Controller\\MovimientosAlmacenController::index'), null, array('GET' => 0), null),
                    '/movimientos/almacen/new' => array(array('_route' => 'movimientos_almacen_new', '_controller' => 'App\\Controller\\MovimientosAlmacenController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/movimientos/depositos/' => array(array('_route' => 'movimientos_depositos_index', '_controller' => 'App\\Controller\\MovimientosDepositosController::index'), null, array('GET' => 0), null),
                    '/productos/disponibilidad' => array(array('_route' => 'disponibilidad', '_controller' => 'App\\Controller\\ProductosController::disponibilidad'), null, array('GET' => 0), null),
                    '/productos/buscarproducto' => array(array('_route' => 'buscarproducto', '_controller' => 'App\\Controller\\ProductosController::buscarproducto'), null, array('GET' => 0), null),
                    '/productos/' => array(array('_route' => 'productos_index', '_controller' => 'App\\Controller\\ProductosController::index'), null, array('GET' => 0), null),
                    '/productos/emsableremove' => array(array('_route' => 'emsableremove', '_controller' => 'App\\Controller\\ProductosController::emsableremove'), null, array('GET' => 0), null),
                    '/productos/ensable' => array(array('_route' => 'productos_new_ensamble', '_controller' => 'App\\Controller\\ProductosController::newensamble'), null, array('GET' => 0, 'POST' => 1), null),
                    '/productos/new' => array(array('_route' => 'productos_new', '_controller' => 'App\\Controller\\ProductosController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/proveedores/' => array(array('_route' => 'proveedores_index', '_controller' => 'App\\Controller\\ProveedoresController::index'), null, array('GET' => 0), null),
                    '/proveedores/new' => array(array('_route' => 'proveedores_new', '_controller' => 'App\\Controller\\ProveedoresController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register' => array(array('_route' => 'user_registration', '_controller' => 'App\\Controller\\RegistrationController::register'), null, null, null),
                    '/reportes' => array(array('_route' => 'reportes', '_controller' => 'App\\Controller\\ReportesController::index'), null, null, null),
                    '/reportes/ventas' => array(array('_route' => 'reportesventas', '_controller' => 'App\\Controller\\ReportesController::vendedor'), null, null, null),
                    '/reportes/utilidad/productos' => array(array('_route' => 'reportesutilidadproductos', '_controller' => 'App\\Controller\\ReportesController::utilidad'), null, null, null),
                    '/reportes/clientes' => array(array('_route' => 'reportesclientes', '_controller' => 'App\\Controller\\ReportesController::clientes'), null, null, null),
                    '/reportes/productos' => array(array('_route' => 'reportesproductos', '_controller' => 'App\\Controller\\ReportesController::productos'), null, null, null),
                    '/reportes/proveedores' => array(array('_route' => 'reportesproveedores', '_controller' => 'App\\Controller\\ReportesController::proveedores'), null, null, null),
                    '/reportes/ventasfechas' => array(array('_route' => 'reportesventasfechas', '_controller' => 'App\\Controller\\ReportesController::ventasfechas'), null, null, null),
                    '/reportes/cobrar' => array(array('_route' => 'cobrar', '_controller' => 'App\\Controller\\ReportesController::cobrar'), null, null, null),
                    '/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/logout' => array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logoutAction'), null, null, null),
                    '/administrator/admin' => array(array('_route' => 'admin', '_controller' => 'App\\Controller\\SecurityController::admin'), null, null, null),
                    '/user/' => array(array('_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'), null, array('GET' => 0), null),
                    '/user/new' => array(array('_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/almacen/([^/]++)(?'
                        .'|(*:27)'
                        .'|/edit(*:39)'
                        .'|(*:46)'
                    .')'
                    .'|/clientes/(?'
                        .'|([^/]++)(?'
                            .'|(*:78)'
                            .'|/edit(*:90)'
                        .')'
                        .'|delete([^/]++)(*:112)'
                    .')'
                    .'|/de(?'
                        .'|scuento/([^/]++)(?'
                            .'|(*:146)'
                            .'|/edit(*:159)'
                            .'|(*:167)'
                        .')'
                        .'|talles/factura/([^/]++)(?'
                            .'|(*:202)'
                            .'|/edit(*:215)'
                            .'|(*:223)'
                        .')'
                    .')'
                    .'|/fa(?'
                        .'|cturas/(?'
                            .'|factura_pdf/([^/]++)(*:269)'
                            .'|new/([^/]++)(*:289)'
                            .'|([^/]++)(?'
                                .'|(*:308)'
                                .'|/([^/]++)/edit(*:330)'
                            .')'
                            .'|delete/([^/]++)(*:354)'
                        .')'
                        .'|milia/([^/]++)(?'
                            .'|(*:380)'
                            .'|/edit(*:393)'
                            .'|(*:401)'
                        .')'
                    .')'
                    .'|/ingresos/([^/]++)(?'
                        .'|(*:432)'
                        .'|/edit(*:445)'
                        .'|(*:453)'
                    .')'
                    .'|/movimientos/(?'
                        .'|almacen/([^/]++)(?'
                            .'|(*:497)'
                            .'|/edit(*:510)'
                            .'|(*:518)'
                        .')'
                        .'|depositos/(?'
                            .'|new/([^/]++)(*:552)'
                            .'|([^/]++)(?'
                                .'|/([^/]++)(?'
                                    .'|(*:583)'
                                    .'|/edit(*:596)'
                                .')'
                                .'|(*:605)'
                            .')'
                        .')'
                    .')'
                    .'|/pro(?'
                        .'|ductos/([^/]++)(?'
                            .'|/edit(?'
                                .'|/ensamble(*:658)'
                                .'|(*:666)'
                            .')'
                            .'|(*:675)'
                        .')'
                        .'|veedores/([^/]++)(?'
                            .'|(*:704)'
                            .'|/edit(*:717)'
                            .'|(*:725)'
                        .')'
                    .')'
                    .'|/user/(?'
                        .'|([^/]++)(?'
                            .'|(*:755)'
                            .'|/edit(*:768)'
                        .')'
                        .'|perfil/([^/]++)(*:792)'
                        .'|([^/]++)(*:808)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:848)'
                        .'|wdt/([^/]++)(*:868)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:914)'
                                .'|router(*:928)'
                                .'|exception(?'
                                    .'|(*:948)'
                                    .'|\\.css(*:961)'
                                .')'
                            .')'
                            .'|(*:971)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 675:
                        $matches = array('id' => $matches[1] ?? null);

                        // productos_show
                        $ret = $this->mergeDefaults(array('_route' => 'productos_show') + $matches, array('_controller' => 'App\\Controller\\ProductosController::show'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_productos_show;
                        }

                        return $ret;
                        not_productos_show:

                        // productos_delete
                        $ret = $this->mergeDefaults(array('_route' => 'productos_delete') + $matches, array('_controller' => 'App\\Controller\\ProductosController::delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_productos_delete;
                        }

                        return $ret;
                        not_productos_delete:

                        break;
                    default:
                        $routes = array(
                            27 => array(array('_route' => 'almacen_show', '_controller' => 'App\\Controller\\AlmacenController::show'), array('id'), array('GET' => 0), null),
                            39 => array(array('_route' => 'almacen_edit', '_controller' => 'App\\Controller\\AlmacenController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            46 => array(array('_route' => 'almacen_delete', '_controller' => 'App\\Controller\\AlmacenController::delete'), array('id'), array('DELETE' => 0), null),
                            78 => array(array('_route' => 'clientes_show', '_controller' => 'App\\Controller\\ClientesController::show'), array('id'), array('GET' => 0), null),
                            90 => array(array('_route' => 'clientes_edit', '_controller' => 'App\\Controller\\ClientesController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            112 => array(array('_route' => 'clientes_delete', '_controller' => 'App\\Controller\\ClientesController::delete'), array('id'), array('DELETE' => 0), null),
                            146 => array(array('_route' => 'descuento_show', '_controller' => 'App\\Controller\\DescuentoController::show'), array('id'), array('GET' => 0), null),
                            159 => array(array('_route' => 'descuento_edit', '_controller' => 'App\\Controller\\DescuentoController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            167 => array(array('_route' => 'descuento_delete', '_controller' => 'App\\Controller\\DescuentoController::delete'), array('id'), array('DELETE' => 0), null),
                            202 => array(array('_route' => 'detalles_factura_show', '_controller' => 'App\\Controller\\DetallesFacturaController::show'), array('id'), array('GET' => 0), null),
                            215 => array(array('_route' => 'detalles_factura_edit', '_controller' => 'App\\Controller\\DetallesFacturaController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            223 => array(array('_route' => 'detalles_factura_delete', '_controller' => 'App\\Controller\\DetallesFacturaController::delete'), array('id'), array('DELETE' => 0), null),
                            269 => array(array('_route' => 'factura_pdf', '_controller' => 'App\\Controller\\FacturasController::factura_pdf'), array('id'), array('GET' => 0), null),
                            289 => array(array('_route' => 'facturas_new', '_controller' => 'App\\Controller\\FacturasController::new'), array('cliente'), array('GET' => 0, 'POST' => 1), null),
                            308 => array(array('_route' => 'facturas_show', '_controller' => 'App\\Controller\\FacturasController::show'), array('id'), array('GET' => 0), null),
                            330 => array(array('_route' => 'facturas_edit', '_controller' => 'App\\Controller\\FacturasController::edit'), array('id', 'cliente'), array('GET' => 0, 'POST' => 1), null),
                            354 => array(array('_route' => 'facturas_delete', '_controller' => 'App\\Controller\\FacturasController::delete'), array('id'), array('DELETE' => 0), null),
                            380 => array(array('_route' => 'familia_show', '_controller' => 'App\\Controller\\FamiliaController::show'), array('id'), array('GET' => 0), null),
                            393 => array(array('_route' => 'familia_edit', '_controller' => 'App\\Controller\\FamiliaController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            401 => array(array('_route' => 'familia_delete', '_controller' => 'App\\Controller\\FamiliaController::delete'), array('id'), array('DELETE' => 0), null),
                            432 => array(array('_route' => 'ingresos_show', '_controller' => 'App\\Controller\\IngresosController::show'), array('id'), array('GET' => 0), null),
                            445 => array(array('_route' => 'ingresos_edit', '_controller' => 'App\\Controller\\IngresosController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            453 => array(array('_route' => 'ingresos_delete', '_controller' => 'App\\Controller\\IngresosController::delete'), array('id'), array('DELETE' => 0), null),
                            497 => array(array('_route' => 'movimientos_almacen_show', '_controller' => 'App\\Controller\\MovimientosAlmacenController::show'), array('id'), array('GET' => 0), null),
                            510 => array(array('_route' => 'movimientos_almacen_edit', '_controller' => 'App\\Controller\\MovimientosAlmacenController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            518 => array(array('_route' => 'movimientos_almacen_delete', '_controller' => 'App\\Controller\\MovimientosAlmacenController::delete'), array('id'), array('DELETE' => 0), null),
                            552 => array(array('_route' => 'movimientos_depositos_new', '_controller' => 'App\\Controller\\MovimientosDepositosController::new'), array('deposito'), array('GET' => 0, 'POST' => 1), null),
                            583 => array(array('_route' => 'movimientos_depositos_show', '_controller' => 'App\\Controller\\MovimientosDepositosController::show'), array('id', 'deposito'), array('GET' => 0), null),
                            596 => array(array('_route' => 'movimientos_depositos_edit', '_controller' => 'App\\Controller\\MovimientosDepositosController::edit'), array('id', 'deposito'), array('GET' => 0, 'POST' => 1), null),
                            605 => array(array('_route' => 'movimientos_depositos_delete', '_controller' => 'App\\Controller\\MovimientosDepositosController::delete'), array('id'), array('DELETE' => 0), null),
                            658 => array(array('_route' => 'productos_edit_ensamble', '_controller' => 'App\\Controller\\ProductosController::editensamble'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            666 => array(array('_route' => 'productos_edit', '_controller' => 'App\\Controller\\ProductosController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            704 => array(array('_route' => 'proveedores_show', '_controller' => 'App\\Controller\\ProveedoresController::show'), array('id'), array('GET' => 0), null),
                            717 => array(array('_route' => 'proveedores_edit', '_controller' => 'App\\Controller\\ProveedoresController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            725 => array(array('_route' => 'proveedores_delete', '_controller' => 'App\\Controller\\ProveedoresController::delete'), array('id'), array('DELETE' => 0), null),
                            755 => array(array('_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'), array('id'), array('GET' => 0), null),
                            768 => array(array('_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            792 => array(array('_route' => 'user_edit_perfil', '_controller' => 'App\\Controller\\UserController::editperfil'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            808 => array(array('_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'), array('id'), array('DELETE' => 0), null),
                            848 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            868 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            914 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            928 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            948 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            961 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            971 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (971 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
