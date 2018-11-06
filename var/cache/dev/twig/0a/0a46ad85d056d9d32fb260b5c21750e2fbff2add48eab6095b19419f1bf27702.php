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
                <th class=\"idancho\">Id</th>
                <th>Nombre</th>
                <th>Unidad/Medida</th>
                <th>Familia</th>
                <th>Costo</th>
                <th>Precio de Venta</th>                
                <th>Cantidad de Presentacion</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new Twig_Error_Runtime('Variable "productos" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 70
            echo "            <tr>
                ";
            // line 71
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "ensambles", array())) == 0)) {
                // line 72
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idmedidas", array()), "unidad", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idfamilia", array()), "nombre", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "costo", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precioVenta", array()), "html", null, true);
                echo "</td>                
                <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "cantidadPresentacion", array()), "html", null, true);
                echo "</td>
                <td> 
";
                // line 80
                if ((twig_get_attribute($this->env, $this->source, $context["producto"], "brochure", array()) == "")) {
                    echo " 
";
                } else {
                    // line 82
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
                // line 84
                echo "
</td>
                <td>
                    <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_show", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
                ";
            } else {
                // line 91
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", array()), "html", null, true);
                echo "</td>
                    <td><B>EMSAMBLE</B></td>
                    <td><B>EMSAMBLE</B></td>
                    <td><B>EMSAMBLE</B></td>
                    <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precioVenta", array()), "html", null, true);
                echo "</td>
                    <td><B>EMSAMBLE</B></td>

                     <td> 
";
                // line 100
                if ((twig_get_attribute($this->env, $this->source, $context["producto"], "brochure", array()) == "")) {
                    echo " 
";
                } else {
                    // line 102
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
                // line 104
                echo "
</td>
                    <td>
                                           <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_show", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit_ensamble", array("id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    </td>

                ";
            }
            // line 112
            echo "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 114
            echo "            <tr>
                <td colspan=\"8\">No hay registro</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
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
        return array (  315 => 118,  306 => 114,  300 => 112,  293 => 108,  289 => 107,  284 => 104,  272 => 102,  267 => 100,  260 => 96,  253 => 92,  248 => 91,  242 => 88,  238 => 87,  233 => 84,  221 => 82,  216 => 80,  211 => 78,  207 => 77,  203 => 76,  199 => 75,  195 => 74,  191 => 73,  186 => 72,  184 => 71,  181 => 70,  176 => 69,  146 => 41,  137 => 40,  118 => 29,  114 => 28,  98 => 14,  89 => 13,  74 => 7,  65 => 6,  47 => 3,  15 => 1,);
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
                <th class=\"idancho\">Id</th>
                <th>Nombre</th>
                <th>Unidad/Medida</th>
                <th>Familia</th>
                <th>Costo</th>
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
                <td>{{ producto.costo }}</td>
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
