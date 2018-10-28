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
                    '/productos/buscarproducto' => array(array('_route' => 'buscarproducto', '_controller' => 'App\\Controller\\ProductosController::buscarproducto'), null, array('GET' => 0), null),
                    '/productos/' => array(array('_route' => 'productos_index', '_controller' => 'App\\Controller\\ProductosController::index'), null, array('GET' => 0), null),
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
                    .'|/clientes/([^/]++)(?'
                        .'|(*:75)'
                        .'|/edit(*:87)'
                        .'|(*:94)'
                    .')'
                    .'|/de(?'
                        .'|scuento/([^/]++)(?'
                            .'|(*:127)'
                            .'|/edit(*:140)'
                            .'|(*:148)'
                        .')'
                        .'|talles/factura/([^/]++)(?'
                            .'|(*:183)'
                            .'|/edit(*:196)'
                            .'|(*:204)'
                        .')'
                    .')'
                    .'|/fa(?'
                        .'|cturas/(?'
                            .'|factura_pdf/([^/]++)(*:250)'
                            .'|new/([^/]++)(*:270)'
                            .'|([^/]++)(?'
                                .'|(*:289)'
                                .'|/([^/]++)/edit(*:311)'
                                .'|(*:319)'
                            .')'
                        .')'
                        .'|milia/([^/]++)(?'
                            .'|(*:346)'
                            .'|/edit(*:359)'
                            .'|(*:367)'
                        .')'
                    .')'
                    .'|/ingresos/([^/]++)(?'
                        .'|(*:398)'
                        .'|/edit(*:411)'
                        .'|(*:419)'
                    .')'
                    .'|/movimientos/(?'
                        .'|almacen/([^/]++)(?'
                            .'|(*:463)'
                            .'|/edit(*:476)'
                            .'|(*:484)'
                        .')'
                        .'|depositos/(?'
                            .'|new/([^/]++)(*:518)'
                            .'|([^/]++)(?'
                                .'|/([^/]++)(?'
                                    .'|(*:549)'
                                    .'|/edit(*:562)'
                                .')'
                                .'|(*:571)'
                            .')'
                        .')'
                    .')'
                    .'|/pro(?'
                        .'|ductos/([^/]++)(?'
                            .'|(*:607)'
                            .'|/edit(*:620)'
                            .'|(*:628)'
                        .')'
                        .'|veedores/([^/]++)(?'
                            .'|(*:657)'
                            .'|/edit(*:670)'
                            .'|(*:678)'
                        .')'
                    .')'
                    .'|/user/([^/]++)(?'
                        .'|(*:705)'
                        .'|/(?'
                            .'|edit(*:721)'
                            .'|perfil(*:735)'
                        .')'
                        .'|(*:744)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:784)'
                        .'|wdt/([^/]++)(*:804)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:850)'
                                .'|router(*:864)'
                                .'|exception(?'
                                    .'|(*:884)'
                                    .'|\\.css(*:897)'
                                .')'
                            .')'
                            .'|(*:907)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            27 => array(array('_route' => 'almacen_show', '_controller' => 'App\\Controller\\AlmacenController::show'), array('id'), array('GET' => 0), null),
                            39 => array(array('_route' => 'almacen_edit', '_controller' => 'App\\Controller\\AlmacenController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            46 => array(array('_route' => 'almacen_delete', '_controller' => 'App\\Controller\\AlmacenController::delete'), array('id'), array('DELETE' => 0), null),
                            75 => array(array('_route' => 'clientes_show', '_controller' => 'App\\Controller\\ClientesController::show'), array('id'), array('GET' => 0), null),
                            87 => array(array('_route' => 'clientes_edit', '_controller' => 'App\\Controller\\ClientesController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            94 => array(array('_route' => 'clientes_delete', '_controller' => 'App\\Controller\\ClientesController::delete'), array('id'), array('DELETE' => 0), null),
                            127 => array(array('_route' => 'descuento_show', '_controller' => 'App\\Controller\\DescuentoController::show'), array('id'), array('GET' => 0), null),
                            140 => array(array('_route' => 'descuento_edit', '_controller' => 'App\\Controller\\DescuentoController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            148 => array(array('_route' => 'descuento_delete', '_controller' => 'App\\Controller\\DescuentoController::delete'), array('id'), array('DELETE' => 0), null),
                            183 => array(array('_route' => 'detalles_factura_show', '_controller' => 'App\\Controller\\DetallesFacturaController::show'), array('id'), array('GET' => 0), null),
                            196 => array(array('_route' => 'detalles_factura_edit', '_controller' => 'App\\Controller\\DetallesFacturaController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            204 => array(array('_route' => 'detalles_factura_delete', '_controller' => 'App\\Controller\\DetallesFacturaController::delete'), array('id'), array('DELETE' => 0), null),
                            250 => array(array('_route' => 'factura_pdf', '_controller' => 'App\\Controller\\FacturasController::factura_pdf'), array('id'), array('GET' => 0), null),
                            270 => array(array('_route' => 'facturas_new', '_controller' => 'App\\Controller\\FacturasController::new'), array('cliente'), array('GET' => 0, 'POST' => 1), null),
                            289 => array(array('_route' => 'facturas_show', '_controller' => 'App\\Controller\\FacturasController::show'), array('id'), array('GET' => 0), null),
                            311 => array(array('_route' => 'facturas_edit', '_controller' => 'App\\Controller\\FacturasController::edit'), array('id', 'cliente'), array('GET' => 0, 'POST' => 1), null),
                            319 => array(array('_route' => 'facturas_delete', '_controller' => 'App\\Controller\\FacturasController::delete'), array('id'), array('DELETE' => 0), null),
                            346 => array(array('_route' => 'familia_show', '_controller' => 'App\\Controller\\FamiliaController::show'), array('id'), array('GET' => 0), null),
                            359 => array(array('_route' => 'familia_edit', '_controller' => 'App\\Controller\\FamiliaController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            367 => array(array('_route' => 'familia_delete', '_controller' => 'App\\Controller\\FamiliaController::delete'), array('id'), array('DELETE' => 0), null),
                            398 => array(array('_route' => 'ingresos_show', '_controller' => 'App\\Controller\\IngresosController::show'), array('id'), array('GET' => 0), null),
                            411 => array(array('_route' => 'ingresos_edit', '_controller' => 'App\\Controller\\IngresosController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            419 => array(array('_route' => 'ingresos_delete', '_controller' => 'App\\Controller\\IngresosController::delete'), array('id'), array('DELETE' => 0), null),
                            463 => array(array('_route' => 'movimientos_almacen_show', '_controller' => 'App\\Controller\\MovimientosAlmacenController::show'), array('id'), array('GET' => 0), null),
                            476 => array(array('_route' => 'movimientos_almacen_edit', '_controller' => 'App\\Controller\\MovimientosAlmacenController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            484 => array(array('_route' => 'movimientos_almacen_delete', '_controller' => 'App\\Controller\\MovimientosAlmacenController::delete'), array('id'), array('DELETE' => 0), null),
                            518 => array(array('_route' => 'movimientos_depositos_new', '_controller' => 'App\\Controller\\MovimientosDepositosController::new'), array('deposito'), array('GET' => 0, 'POST' => 1), null),
                            549 => array(array('_route' => 'movimientos_depositos_show', '_controller' => 'App\\Controller\\MovimientosDepositosController::show'), array('id', 'deposito'), array('GET' => 0), null),
                            562 => array(array('_route' => 'movimientos_depositos_edit', '_controller' => 'App\\Controller\\MovimientosDepositosController::edit'), array('id', 'deposito'), array('GET' => 0, 'POST' => 1), null),
                            571 => array(array('_route' => 'movimientos_depositos_delete', '_controller' => 'App\\Controller\\MovimientosDepositosController::delete'), array('id'), array('DELETE' => 0), null),
                            607 => array(array('_route' => 'productos_show', '_controller' => 'App\\Controller\\ProductosController::show'), array('id'), array('GET' => 0), null),
                            620 => array(array('_route' => 'productos_edit', '_controller' => 'App\\Controller\\ProductosController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            628 => array(array('_route' => 'productos_delete', '_controller' => 'App\\Controller\\ProductosController::delete'), array('id'), array('DELETE' => 0), null),
                            657 => array(array('_route' => 'proveedores_show', '_controller' => 'App\\Controller\\ProveedoresController::show'), array('id'), array('GET' => 0), null),
                            670 => array(array('_route' => 'proveedores_edit', '_controller' => 'App\\Controller\\ProveedoresController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            678 => array(array('_route' => 'proveedores_delete', '_controller' => 'App\\Controller\\ProveedoresController::delete'), array('id'), array('DELETE' => 0), null),
                            705 => array(array('_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'), array('id'), array('GET' => 0), null),
                            721 => array(array('_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            735 => array(array('_route' => 'user_edit_perfil', '_controller' => 'App\\Controller\\UserController::editperfil'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            744 => array(array('_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'), array('id'), array('DELETE' => 0), null),
                            784 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            804 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            850 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            864 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            884 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            897 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            907 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
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

                if (907 === $m) {
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
