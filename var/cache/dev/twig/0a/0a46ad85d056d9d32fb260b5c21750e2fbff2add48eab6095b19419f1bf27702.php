<?php

/* productos/index.html.twig */
class __TwigTemplate_8695b9372474b32dd96c0e0d98e0bedc026d7102b278ec8eab5544033724b3f7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listado de Productos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_addcss($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addcss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addcss"));

        // line 7
        echo "<style type=\"text/css\">
.idancho{
    width: 80px !important;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th class=\"idancho\">Orden de produccion</th>
                <th>Nombre</th>
                <th>Unidad/Medida</th>
                <th>Familia</th>
                ";
        // line 61
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FACTURA") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ALMACEN"))) {
            // line 62
            echo "                ";
        } else {
            // line 63
            echo "                    <th>Costo</th>
                ";
        }
        // line 65
        echo "                <th>Precio de Venta</th>                
                <th>Cantidad de Presentacion</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 72, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 73
            echo "            <tr>
                ";
            // line 74
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "ensambles", array())) == 0)) {
                // line 75
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idmedidas", array()), "unidad", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idfamilia", array()), "nombre", array()), "html", null, true);
                echo "</td>
                ";
                // line 79
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FACTURA") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ALMACEN"))) {
                    // line 80
                    echo "                ";
                } else {
                    // line 81
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "costo", array()), "html", null, true);
                    echo "</td>
                ";
                }
                // line 83
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precioVenta", array()), "html", null, true);
                echo "</td>                
                <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidadPresentacion", array()), "html", null, true);
                echo "</td>
                <td> 
";
                // line 86
                if ((twig_get_attribute($this->env, $this->source, $context["producto"], "brochure", array()) == "")) {
                    echo " 
";
                } else {
                    // line 88
                    echo "                    <img id=\"output\" class=\"img-responsive\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["producto"], "brochure", array()) != "")) {
                        echo " src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "brochure", array()), "html", null, true);
                        echo "\" ";
                    }
                    echo "/>
                    ";
                }
                // line 90
                echo "
</td>
                <td>
                    <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_show", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
                ";
            } else {
                // line 97
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", array()), "html", null, true);
                echo "</td>
                    <td><B>EMSAMBLE</B></td>
                    <td><B>EMSAMBLE</B></td>
                    <td><B>EMSAMBLE</B></td>
                    <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precioVenta", array()), "html", null, true);
                echo "</td>
                    <td><B>EMSAMBLE</B></td>

                     <td> 
";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["producto"], "brochure", array()) == "")) {
                    echo " 
";
                } else {
                    // line 108
                    echo "                    <img id=\"output\" class=\"img-responsive\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["producto"], "brochure", array()) != "")) {
                        echo " src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures"), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "brochure", array()), "html", null, true);
                        echo "\" ";
                    }
                    echo "/>
                    ";
                }
                // line 110
                echo "
</td>
                    <td>
                                           <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_show", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit_ensamble", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    </td>

                ";
            }
            // line 118
            echo "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 120
            echo "            <tr>
                <td colspan=\"8\">No hay registro</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        </tbody>
    </table>

     </div>
            </div>
            <!-- Panel with: Expanding Rows-->
          
            <!-- DEMO - breaks used to extend container - DEMO--><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  333 => 124,  324 => 120,  318 => 118,  311 => 114,  307 => 113,  302 => 110,  290 => 108,  285 => 106,  278 => 102,  271 => 98,  266 => 97,  260 => 94,  256 => 93,  251 => 90,  239 => 88,  234 => 86,  229 => 84,  224 => 83,  218 => 81,  215 => 80,  213 => 79,  209 => 78,  205 => 77,  201 => 76,  196 => 75,  194 => 74,  191 => 73,  186 => 72,  177 => 65,  173 => 63,  170 => 62,  168 => 61,  146 => 41,  137 => 40,  118 => 29,  114 => 28,  98 => 14,  89 => 13,  74 => 7,  65 => 6,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Listado de Productos{% endblock %}


 {% block addcss %}
<style type=\"text/css\">
.idancho{
    width: 80px !important;
}
</style>
{% endblock %}
  {% block header %}

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
              <li class=\"active\"><a href=\"{{ path('productos_new') }}\">Crear nuevo producto</a></li>
              <li class=\"active\"><a href=\"{{ path('productos_new_ensamble') }}\">Crear nuevo ensamble</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
      {% endblock %}


{% block body %}
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
                <th class=\"idancho\">Orden de produccion</th>
                <th>Nombre</th>
                <th>Unidad/Medida</th>
                <th>Familia</th>
                {% if is_granted('ROLE_FACTURA') or is_granted('ROLE_ALMACEN')%}
                {% else %}
                    <th>Costo</th>
                {% endif %}
                <th>Precio de Venta</th>                
                <th>Cantidad de Presentacion</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for producto in productos %}
            <tr>
                {% if producto.ensambles|length == 0  %}
                <td>{{ producto.id }}</td>
                <td>{{ producto.nombre }}</td>
                <td>{{ producto.idmedidas.unidad }}</td>
                <td>{{ producto.idfamilia.nombre }}</td>
                {% if is_granted('ROLE_FACTURA') or is_granted('ROLE_ALMACEN')%}
                {% else %}
                <td>{{ producto.costo }}</td>
                {% endif %}
                <td>{{ producto.precioVenta }}</td>                
                <td>{{ producto.cantidadPresentacion }}</td>
                <td> 
{% if producto.brochure == \"\" %} 
{% else %}
                    <img id=\"output\" class=\"img-responsive\" {% if producto.brochure != \"\" %} src=\"{{ asset('uploads/brochures') }}/{{producto.brochure}}\" {% endif %}/>
                    {% endif %}

</td>
                <td>
                    <a href=\"{{ path('productos_show', {'id': producto.id}) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"{{ path('productos_edit', {'id': producto.id}) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
                {% else %}
                    <td>{{ producto.id }}</td>
                    <td>{{ producto.nombre }}</td>
                    <td><B>EMSAMBLE</B></td>
                    <td><B>EMSAMBLE</B></td>
                    <td><B>EMSAMBLE</B></td>
                    <td>{{ producto.precioVenta }}</td>
                    <td><B>EMSAMBLE</B></td>

                     <td> 
{% if producto.brochure == \"\" %} 
{% else %}
                    <img id=\"output\" class=\"img-responsive\" {% if producto.brochure != \"\" %} src=\"{{ asset('uploads/brochures') }}/{{producto.brochure}}\" {% endif %}/>
                    {% endif %}

</td>
                    <td>
                                           <a href=\"{{ path('productos_show', {'id': producto.id}) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"{{ path('productos_edit_ensamble', {'id': producto.id}) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    </td>

                {% endif %}
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">No hay registro</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

     </div>
            </div>
            <!-- Panel with: Expanding Rows-->
          
            <!-- DEMO - breaks used to extend container - DEMO--><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </section>
{% endblock %}
", "productos/index.html.twig", "/var/www/html/access/templates/productos/index.html.twig");
    }
}
