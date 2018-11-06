<?php

/* productos/index.html.twig */
class __TwigTemplate_5840c1ae351f3906ac8c864411da39964535a53145d6e12218a2b88f9aee47ed extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "productos/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'addcss' => array($this, 'block_addcss'),
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
        echo "Listado de Productos";
    }

    // line 6
    public function block_addcss($context, array $blocks = array())
    {
        // line 7
        echo "<style type=\"text/css\">
.idancho{
    width: 80px !important;
}
</style>
";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Productos</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_new");
        echo "\">Crear nuevo producto</a></li>
              <li class=\"active\"><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_new_ensamble");
        echo "\">Crear nuevo ensamble</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "        <section id=\"content\" class=\"table-layout animated fadeIn\">
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
                <th class=\"idancho\">Id</th>
                <th>Nombre</th>
                <th>Unidad/Medida</th>
                <th>Familia</th>
                <th>Costo</th>
                <th>Precio de Venta</th>                
                <th>Cantidad de Presentacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 69
            echo "            <tr>
                ";
            // line 70
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "ensambles", array())) == 0)) {
                // line 71
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idmedidas", array()), "unidad", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idfamilia", array()), "nombre", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "costo", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precioVenta", array()), "html", null, true);
                echo "</td>                
                <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidadPresentacion", array()), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_show", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
                ";
            } else {
                // line 83
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", array()), "html", null, true);
                echo "</td>
                    <td><B>EMSAMBLE</B></td>
                    <td><B>EMSAMBLE</B></td>
                    <td><B>EMSAMBLE</B></td>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precioVenta", array()), "html", null, true);
                echo "</td>
                    <td><B>EMSAMBLE</B></td>
                    <td>
                                           <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_show", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit_ensamble", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    </td>

                ";
            }
            // line 96
            echo "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 98
            echo "            <tr>
                <td colspan=\"8\">No hay registro</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </tbody>
    </table>

     </div>
            </div>
            <!-- Panel with: Expanding Rows-->
          
            <!-- DEMO - breaks used to extend container - DEMO--><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </section>
";
    }

    public function getTemplateName()
    {
        return "productos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 102,  206 => 98,  200 => 96,  193 => 92,  189 => 91,  183 => 88,  176 => 84,  171 => 83,  165 => 80,  161 => 79,  156 => 77,  152 => 76,  148 => 75,  144 => 74,  140 => 73,  136 => 72,  131 => 71,  129 => 70,  126 => 69,  121 => 68,  92 => 41,  89 => 40,  76 => 29,  72 => 28,  56 => 14,  53 => 13,  44 => 7,  41 => 6,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "productos/index.html.twig", "/var/www/html/access/templates/productos/index.html.twig");
    }
}
