<?php

/* ingresos/show.html.twig */
class __TwigTemplate_7662a7cd0d9b58abd4380f84b555c09d6a57a9c099c1166be7671c9e30c6c33a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "ingresos/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingresos/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingresos/show.html.twig"));

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

        echo "Detalles - ingresos ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Ingresos</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_index");
        echo "\">Listado de Ingresos</a></li>
              <li class=\"active\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["ingreso"]) || array_key_exists("ingreso", $context) ? $context["ingreso"] : (function () { throw new Twig_Error_Runtime('Variable "ingreso" does not exist.', 22, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Editar Cliente</a></li>
              <li>";
        // line 23
        echo twig_include($this->env, $context, "ingresos/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de Entrada</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
            <tr>
                <th>Producto</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ingreso"]) || array_key_exists("ingreso", $context) ? $context["ingreso"] : (function () { throw new Twig_Error_Runtime('Variable "ingreso" does not exist.', 49, $this->source); })()), "productos", array()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Proveedor</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ingreso"]) || array_key_exists("ingreso", $context) ? $context["ingreso"] : (function () { throw new Twig_Error_Runtime('Variable "ingreso" does not exist.', 53, $this->source); })()), "proveedor", array()), "nombreEmpresa", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Almacen</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ingreso"]) || array_key_exists("ingreso", $context) ? $context["ingreso"] : (function () { throw new Twig_Error_Runtime('Variable "ingreso" does not exist.', 57, $this->source); })()), "almacen", array()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ingreso"]) || array_key_exists("ingreso", $context) ? $context["ingreso"] : (function () { throw new Twig_Error_Runtime('Variable "ingreso" does not exist.', 61, $this->source); })()), "cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["ingreso"]) || array_key_exists("ingreso", $context) ? $context["ingreso"] : (function () { throw new Twig_Error_Runtime('Variable "ingreso" does not exist.', 65, $this->source); })()), "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ingreso"]) || array_key_exists("ingreso", $context) ? $context["ingreso"] : (function () { throw new Twig_Error_Runtime('Variable "ingreso" does not exist.', 65, $this->source); })()), "fecha", array()), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentario</th>
                <td>";
        // line 69
        echo twig_get_attribute($this->env, $this->source, (isset($context["ingreso"]) || array_key_exists("ingreso", $context) ? $context["ingreso"] : (function () { throw new Twig_Error_Runtime('Variable "ingreso" does not exist.', 69, $this->source); })()), "comentario", array());
        echo "</td>
            </tr>
        </tbody>
    </table>
               
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
        return "ingresos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 69,  170 => 65,  163 => 61,  156 => 57,  149 => 53,  142 => 49,  125 => 34,  116 => 33,  97 => 23,  93 => 22,  89 => 21,  73 => 7,  64 => 6,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Detalles - ingresos {% endblock %}


  {% block header %}

        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Ingresos</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"{{ path('ingresos_index') }}\">Listado de Ingresos</a></li>
              <li class=\"active\"><a href=\"{{ path('ingresos_edit', {'id': ingreso.id}) }}\">Editar Cliente</a></li>
              <li>{{ include('ingresos/_delete_form.html.twig') }}</li>
              
            </ul>
          </div>
         
        </header>
          
          
      {% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de Entrada</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
            <tr>
                <th>Producto</th>
                <td>{{ ingreso.productos.nombre }}</td>
            </tr>
            <tr>
                <th>Proveedor</th>
                <td>{{ ingreso.proveedor.nombreEmpresa }}</td>
            </tr>
            <tr>
                <th>Almacen</th>
                <td>{{ ingreso.almacen.nombre }}</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>{{ ingreso.cantidad }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ ingreso.fecha ? ingreso.fecha|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Comentario</th>
                <td>{{ ingreso.comentario|raw }}</td>
            </tr>
        </tbody>
    </table>
               
                </div>
              </div>
          </div>
      </div>
{% endblock %}
", "ingresos/show.html.twig", "C:\\xampp\\htdocs\\access\\templates\\ingresos\\show.html.twig");
    }
}
