<?php

/* facturas/show.html.twig */
class __TwigTemplate_4d15dc2ecc50c420f52de548477aa7338944e24bf91ef0d610daeaf52c2d3124 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "facturas/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'addscript' => array($this, 'block_addscript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/show.html.twig"));

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

        echo "Detalles - Facturas";
        
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
              <li class=\"crumb-active\"><a href=\"#\">Facturas</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_index");
        echo "\">Listado de Facturas</a></li>
              <li class=\"active\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 21, $this->source); })()), "id", array()), "cliente" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 21, $this->source); })()), "idcliente", array()), "id", array()))), "html", null, true);
        echo "\">Editar Factura</a></li>
  ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 22, $this->source); })()), "forma", array()) == "CR")) {
            // line 23
            echo "              <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_new", array("deposito" => twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 23, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Crear deposito</a></li>
";
        }
        // line 25
        echo " <li class=\"active\" ><a target=\"_blank\"  href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("factura_pdf", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 25, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Imprimir Factura</a></li>
              
              <li>";
        // line 27
        echo twig_include($this->env, $context, "facturas/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de Facturas ==> Forma de Pago
                ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 42, $this->source); })()), "forma", array()) == "CC")) {
            // line 43
            echo "                    <b>CONTADO</b>
                ";
        } else {
            // line 45
            echo "                    CREDITO, <b>Fecha de vencimiento: </b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 45, $this->source); })()), "fechavencimiento", array()), "d/m/Y"), "html", null, true);
            echo "
                ";
        }
        // line 47
        echo "              </span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
            <tr>
                <th style=\"font-weight:bold;font-size:25px !important\">Numero de factura</th>
                <td style=\"color:red;font-weight:bold;font-size:25px !important\">";
        // line 60
        echo twig_escape_filter($this->env, sprintf("%08d", twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 60, $this->source); })()), "id", array())), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Recibo Caja</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 64, $this->source); })()), "reciboCaja", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Orden de Compra</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 68, $this->source); })()), "ordenCompra", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 72, $this->source); })()), "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 72, $this->source); })()), "fecha", array()), "d/m/Y")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 76
        echo twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 76, $this->source); })()), "comentarios", array());
        echo "</td>
            </tr>
        </tbody>
   </table>
               
                </div>
              </div>
          </div>
      </div>
</div>

   <table class=\"table footable\" id=\"data\">
                                  <thead>
                                        <tr>
                                          <th>Producto</th>
                                          <th>Cantidad</th>
                                          <th>Precio</th>
                                          <th>Sub-Total</th>
                                          <th>Orden de Produccion</th>
                                          <th>Comentarios</th>
                                        </tr>
                                  </thead>
                                  <tbody>
                                    ";
        // line 99
        if ((isset($context["productosfacturados"]) || array_key_exists("productosfacturados", $context))) {
            // line 100
            echo "                                          
                                            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productosfacturados"]) || array_key_exists("productosfacturados", $context) ? $context["productosfacturados"] : (function () { throw new Twig_Error_Runtime('Variable "productosfacturados" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
                // line 102
                echo "                                            <tr>
                                              <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "nombre", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value='";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "id", array()), "html", null, true);
                echo "' name=\"productos[]\">

                                                <input type=\"hidden\" value='";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "id", array()), "html", null, true);
                echo "' name=\"'idproducto[]\" class=\"idproducto\">
                                              </td>
                                              <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "\" name=\"cantidad[]\"></td>
                                              <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "<input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "\" name=\"precio[]\"></td>
                                              <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "</td>
                                              <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "\" name=\"total[]\">
                                                <input type=\"hidden\" value=\"";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "\" name=\"promocion[]\"></td>
                                              <td>";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "\" name=\"comentarios[]\"></td>
                                             
                                            </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                                          
                                    ";
        }
        // line 122
        echo "                                  </tbody>
                                </table>
<h1>Sub-Total: <label class=\"totales\" style=\"color:red\"></label></h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_addscript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        // line 128
        echo "  <script type=\"text/javascript\">

jQuery(document).ready(function (){
        var table = \$('.footable').DataTable();

    var datossuma =  table.column( 3 ).data().sum();
    \$(\".totales\").html(datossuma.toFixed(2));

          
      
});
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facturas/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 128,  313 => 127,  300 => 122,  296 => 120,  286 => 116,  282 => 115,  278 => 114,  274 => 113,  270 => 112,  266 => 111,  260 => 110,  256 => 109,  252 => 108,  247 => 106,  242 => 104,  238 => 103,  235 => 102,  231 => 101,  228 => 100,  226 => 99,  200 => 76,  193 => 72,  186 => 68,  179 => 64,  172 => 60,  157 => 47,  151 => 45,  147 => 43,  145 => 42,  140 => 39,  131 => 38,  112 => 27,  106 => 25,  100 => 23,  98 => 22,  94 => 21,  90 => 20,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Detalles - Facturas{% endblock %}

  {% block header %}

        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Facturas</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"{{ path('facturas_index') }}\">Listado de Facturas</a></li>
              <li class=\"active\"><a href=\"{{ path('facturas_edit', {'id': factura.id,'cliente':factura.idcliente.id}) }}\">Editar Factura</a></li>
  {% if factura.forma == \"CR\" %}
              <li class=\"active\"><a href=\"{{ path('movimientos_depositos_new', {'deposito': factura.id}) }}\">Crear deposito</a></li>
{% endif %}
 <li class=\"active\" ><a target=\"_blank\"  href=\"{{ path('factura_pdf', {'id': factura.id}) }}\">Imprimir Factura</a></li>
              
              <li>{{ include('facturas/_delete_form.html.twig') }}</li>
              
            </ul>
          </div>
         
        </header>
          
          
      {% endblock %}


{% block body %}
<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de Facturas ==> Forma de Pago
                {% if factura.forma == \"CC\" %}
                    <b>CONTADO</b>
                {% else %}
                    CREDITO, <b>Fecha de vencimiento: </b>{{factura.fechavencimiento|date('d/m/Y')}}
                {% endif %}
              </span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
            <tr>
                <th style=\"font-weight:bold;font-size:25px !important\">Numero de factura</th>
                <td style=\"color:red;font-weight:bold;font-size:25px !important\">{{ \"%08d\" | format(factura.id) }}</td>
            </tr>
            <tr>
                <th>Recibo Caja</th>
                <td>{{ factura.reciboCaja }}</td>
            </tr>
            <tr>
                <th>Orden de Compra</th>
                <td>{{ factura.ordenCompra }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ factura.fecha ? factura.fecha|date('d/m/Y') : '' }}</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>{{ factura.comentarios|raw }}</td>
            </tr>
        </tbody>
   </table>
               
                </div>
              </div>
          </div>
      </div>
</div>

   <table class=\"table footable\" id=\"data\">
                                  <thead>
                                        <tr>
                                          <th>Producto</th>
                                          <th>Cantidad</th>
                                          <th>Precio</th>
                                          <th>Sub-Total</th>
                                          <th>Orden de Produccion</th>
                                          <th>Comentarios</th>
                                        </tr>
                                  </thead>
                                  <tbody>
                                    {% if productosfacturados is defined %}
                                          
                                            {% for productos in productosfacturados %}
                                            <tr>
                                              <td>{{ productos.idproducto.nombre }}
                                                <input type=\"hidden\" value='{{ productos.idproducto.id }}' name=\"productos[]\">

                                                <input type=\"hidden\" value='{{ productos.id }}' name=\"'idproducto[]\" class=\"idproducto\">
                                              </td>
                                              <td>{{ productos.cantidad }}
                                                <input type=\"hidden\" value=\"{{ productos.cantidad }}\" name=\"cantidad[]\"></td>
                                              <td>{{ productos.precio }}<input type=\"hidden\" value=\"{{ productos.precio }}\" name=\"precio[]\"></td>
                                              <td>{{ productos.total }}</td>
                                              <td>{{ productos.ordenPromocion }}
                                                <input type=\"hidden\" value=\"{{ productos.total }}\" name=\"total[]\">
                                                <input type=\"hidden\" value=\"{{ productos.ordenPromocion }}\" name=\"promocion[]\"></td>
                                              <td>{{ productos.comentarios }}
                                                <input type=\"hidden\" value=\"{{ productos.comentarios }}\" name=\"comentarios[]\"></td>
                                             
                                            </tr>
                                            {% endfor %}
                                          
                                    {% endif %}
                                  </tbody>
                                </table>
<h1>Sub-Total: <label class=\"totales\" style=\"color:red\"></label></h1>
{% endblock %}

{% block addscript %}
  <script type=\"text/javascript\">

jQuery(document).ready(function (){
        var table = \$('.footable').DataTable();

    var datossuma =  table.column( 3 ).data().sum();
    \$(\".totales\").html(datossuma.toFixed(2));

          
      
});
  </script>
{% endblock %}", "facturas/show.html.twig", "/var/www/html/access/templates/facturas/show.html.twig");
    }
}
