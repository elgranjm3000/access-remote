<?php

/* productos/show.html.twig */
class __TwigTemplate_611a26b10e934d08a4e0d72d27c1a35906a958ff884bc49164e5937e4bc9bafb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "productos/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/show.html.twig"));

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

        echo "Productos-detalles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Productos</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_new");
        echo "\">Crear de Productos</a></li>
               ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 21, $this->source); })()), "ensambles", array())) == 0)) {
            // line 22
            echo "              <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 22, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Editar Producto</a></li>
              ";
        } else {
            // line 24
            echo "              <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit_ensamble", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 24, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Editar Producto</a></li>
              ";
        }
        // line 26
        echo "              <li>";
        echo twig_include($this->env, $context, "productos/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de productos</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
        
            <tr>
                <th>Id</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 52, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 56, $this->source); })()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
                ";
        // line 58
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 58, $this->source); })()), "ensambles", array())) == 0)) {
            // line 59
            echo "            <tr>
                <th>Unidad de Medida</th>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 61, $this->source); })()), "idmedidas", array()), "unidad", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Costo</th>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 65, $this->source); })()), "costo", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Precio de venta</th>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 69, $this->source); })()), "precioVenta", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
            // line 73
            echo twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 73, $this->source); })()), "comentarios", array());
            echo "</td>
            </tr>
            <tr>
                <th>Cantidad de Presentacion</th>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 77, $this->source); })()), "cantidadPresentacion", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                    <th>Familia</th>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 81, $this->source); })()), "idfamilia", array()), "nombre", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        } else {
            // line 84
            echo "             <tr>
                <th>Precio de venta</th>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 86, $this->source); })()), "precioVenta", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
            // line 90
            echo twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 90, $this->source); })()), "comentarios", array());
            echo "</td>
            </tr>
                  <tr>
                      <td colspan=\"4\"><h1>PRODUCTOS ENSAMBLADOS</h1></td>
                  </tr>
                  <tr>
                      <td>Producto</td>
                      <td>Cantidad</td>
                      <td>Monto</td>
                      <td>Subtotal</td>
                  </tr>

                  ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 102, $this->source); })()), "ensambles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ensambles"]) {
                // line 103
                echo "                  <tr>
                      <td>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ensambles"], "productoadd", array()), "nombre", array()), "html", null, true);
                echo "</td>
                      <td>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "cantidad", array()), "html", null, true);
                echo "</td>
                      <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "monto", array()), "html", null, true);
                echo "</td>
                      <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "subtotal", array()), "html", null, true);
                echo "</td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ensambles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "            ";
        }
        // line 111
        echo "        </tbody>
    </table>
    ";
        // line 113
        if ((twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 113, $this->source); })()), "brochure", array()) == "")) {
            echo " 
";
        } else {
            // line 115
            echo "                    <img id=\"output\" class=\"img-responsive\" ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 115, $this->source); })()), "brochure", array()) != "")) {
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 115, $this->source); })()), "brochure", array()), "html", null, true);
                echo "\" ";
            }
            echo "/>
                    ";
        }
        // line 117
        echo "               
                </div>
              </div>
          </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "productos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 117,  278 => 115,  273 => 113,  269 => 111,  266 => 110,  257 => 107,  253 => 106,  249 => 105,  245 => 104,  242 => 103,  238 => 102,  223 => 90,  216 => 86,  212 => 84,  206 => 81,  199 => 77,  192 => 73,  185 => 69,  178 => 65,  171 => 61,  167 => 59,  165 => 58,  160 => 56,  153 => 52,  136 => 37,  127 => 36,  107 => 26,  101 => 24,  95 => 22,  93 => 21,  89 => 20,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Productos-detalles{% endblock %}

  {% block header %}

        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Productos</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"{{ path('productos_new') }}\">Crear de Productos</a></li>
               {% if producto.ensambles|length == 0  %}
              <li class=\"active\"><a href=\"{{ path('productos_edit', {'id': producto.id}) }}\">Editar Producto</a></li>
              {% else %}
              <li class=\"active\"><a href=\"{{ path('productos_edit_ensamble', {'id': producto.id}) }}\">Editar Producto</a></li>
              {% endif %}
              <li>{{ include('productos/_delete_form.html.twig') }}</li>
              
            </ul>
          </div>
         
        </header>
          
          
      {% endblock %}

{% block body %}
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de productos</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
        
            <tr>
                <th>Id</th>
                <td>{{ producto.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ producto.nombre }}</td>
            </tr>
                {% if producto.ensambles|length == 0  %}
            <tr>
                <th>Unidad de Medida</th>
                <td>{{ producto.idmedidas.unidad }}</td>
            </tr>
            <tr>
                <th>Costo</th>
                <td>{{ producto.costo }}</td>
            </tr>
            <tr>
                <th>Precio de venta</th>
                <td>{{ producto.precioVenta }}</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>{{ producto.comentarios|raw }}</td>
            </tr>
            <tr>
                <th>Cantidad de Presentacion</th>
                <td>{{ producto.cantidadPresentacion }}</td>
            </tr>
            <tr>
                    <th>Familia</th>
                    <td>{{ producto.idfamilia.nombre }}</td>
            </tr>
            {% else %}
             <tr>
                <th>Precio de venta</th>
                <td>{{ producto.precioVenta }}</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>{{ producto.comentarios|raw }}</td>
            </tr>
                  <tr>
                      <td colspan=\"4\"><h1>PRODUCTOS ENSAMBLADOS</h1></td>
                  </tr>
                  <tr>
                      <td>Producto</td>
                      <td>Cantidad</td>
                      <td>Monto</td>
                      <td>Subtotal</td>
                  </tr>

                  {% for ensambles in producto.ensambles %}
                  <tr>
                      <td>{{ ensambles.productoadd.nombre  }}</td>
                      <td>{{ ensambles.cantidad  }}</td>
                      <td>{{ ensambles.monto  }}</td>
                      <td>{{ ensambles.subtotal  }}</td>
                  </tr>
                  {% endfor %}
            {% endif %}
        </tbody>
    </table>
    {% if producto.brochure == \"\" %} 
{% else %}
                    <img id=\"output\" class=\"img-responsive\" {% if producto.brochure != \"\" %} src=\"{{ asset('uploads/brochures') }}/{{producto.brochure}}\" {% endif %}/>
                    {% endif %}
               
                </div>
              </div>
          </div>
      </div>
{% endblock %}
", "productos/show.html.twig", "/var/www/html/access/templates/productos/show.html.twig");
    }
}
