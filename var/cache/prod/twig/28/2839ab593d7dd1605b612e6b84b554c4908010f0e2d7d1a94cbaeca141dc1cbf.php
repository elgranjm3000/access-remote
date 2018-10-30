<?php

/* movimientos_almacen/index.html.twig */
class __TwigTemplate_3ce0b5697757476fe6bce18de007a8125b45c8e39eb7da37dbeeedd96d4c3bc8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "movimientos_almacen/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "MovimientosAlmacen index";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Movimientos Almacen</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_new");
        echo "\">Realizar Traslado</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "    <h1 style=\"text-align: center;\" > <span  class=\"glyphicon glyphicon-export\"></span> Movimientos Almacen</h1>
        <section id=\"content\" class=\"table-layout animated fadeIn\">
        <!-- begin: .tray-left-->

        <!-- begin: .tray-center-->
        <div class=\"tray tray-center\">
        <!-- Panel with: Basic Footable-->

        <!-- Panel with: Data Filter-->

        <!-- Panel with: Pagination-->
        <div id=\"spy3\" class=\"panel\">

        <div class=\"panel-body pn\">
        <table class=\"table footableproductos\">
        <thead>
            <tr>
                <th style=\"text-align: center;\">Id</th>
                <th style=\"text-align: center;\">Producto</th>
                <th style=\"text-align: center;\">Cantidad</th>
                <th style=\"text-align: center;\">Fecha</th>
                <th style=\"text-align: center;\">actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movimientos_almacens"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movimientos_almacen"]) {
            // line 55
            echo "            <tr>
                <td style=\"text-align: center;\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimientos_almacen"], "id", array()), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimientos_almacen"], "IdProducto", array()), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimientos_almacen"], "Cantidad", array()), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 59
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["movimientos_almacen"], "Fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimientos_almacen"], "Fecha", array()), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_show", array("id" => twig_get_attribute($this->env, $this->source, $context["movimientos_almacen"], "id", array()))), "html", null, true);
            echo "\">Detalles</a>
                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["movimientos_almacen"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "            <tr>
                <td colspan=\"6\" style=\"text-align: center;\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimientos_almacen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>
  </div>
            </div>
          </div>
        </section>
    
";
    }

    public function getTemplateName()
    {
        return "movimientos_almacen/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 70,  140 => 66,  131 => 62,  127 => 61,  122 => 59,  118 => 58,  114 => 57,  110 => 56,  107 => 55,  102 => 54,  75 => 29,  72 => 28,  59 => 19,  43 => 5,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_almacen/index.html.twig", "/var/www/html/access/templates/movimientos_almacen/index.html.twig");
    }
}
