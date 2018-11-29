<?php

/* movimientos_depositos/show.html.twig */
class __TwigTemplate_b871c02f9f966bd2365c1c19ce106fe114aa64dc1f01ddaec47ccae1ecbc59f2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "movimientos_depositos/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_depositos/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_depositos/show.html.twig"));

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

        echo "Detalles deposito";
        
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
              <li class=\"crumb-active\"><a href=\"#\">Deposito</a></li>                            
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["movimientos_deposito"]) || array_key_exists("movimientos_deposito", $context) ? $context["movimientos_deposito"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_deposito" does not exist.', 21, $this->source); })()), "id", array()), "deposito" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_deposito"]) || array_key_exists("movimientos_deposito", $context) ? $context["movimientos_deposito"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_deposito" does not exist.', 21, $this->source); })()), "facturas", array()), "id", array()))), "html", null, true);
        echo "\">Editar Deposito</a></li>

              <li class=\"active\"><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_new", array("deposito" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_deposito"]) || array_key_exists("movimientos_deposito", $context) ? $context["movimientos_deposito"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_deposito" does not exist.', 23, $this->source); })()), "facturas", array()), "id", array()))), "html", null, true);
        echo "\">Crear deposito</a></li>


              
              <li>";
        // line 27
        echo twig_include($this->env, $context, "movimientos_depositos/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de Deposito</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
            <tr>
                <th>Numero de deposito</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_deposito"]) || array_key_exists("movimientos_deposito", $context) ? $context["movimientos_deposito"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_deposito" does not exist.', 55, $this->source); })()), "ndeposito", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FechaMovimiento</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["movimientos_deposito"]) || array_key_exists("movimientos_deposito", $context) ? $context["movimientos_deposito"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_deposito" does not exist.', 59, $this->source); })()), "fechaMovimiento", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_deposito"]) || array_key_exists("movimientos_deposito", $context) ? $context["movimientos_deposito"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_deposito" does not exist.', 59, $this->source); })()), "fechaMovimiento", array()), "d/m/Y")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Monto</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_deposito"]) || array_key_exists("movimientos_deposito", $context) ? $context["movimientos_deposito"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_deposito" does not exist.', 63, $this->source); })()), "monto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Banco</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_deposito"]) || array_key_exists("movimientos_deposito", $context) ? $context["movimientos_deposito"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_deposito" does not exist.', 67, $this->source); })()), "banco", array()), "html", null, true);
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
        return "movimientos_depositos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 67,  164 => 63,  157 => 59,  150 => 55,  133 => 40,  124 => 39,  105 => 27,  98 => 23,  93 => 21,  89 => 20,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Detalles deposito{% endblock %}

  {% block header %}

        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Deposito</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"{{ path('facturas_index') }}\">Listado de Facturas</a></li>
              <li class=\"active\"><a href=\"{{ path('movimientos_depositos_edit', {'id': movimientos_deposito.id,'deposito': movimientos_deposito.facturas.id}) }}\">Editar Deposito</a></li>

              <li class=\"active\"><a href=\"{{ path('movimientos_depositos_new', {'deposito': movimientos_deposito.facturas.id}) }}\">Crear deposito</a></li>


              
              <li>{{ include('movimientos_depositos/_delete_form.html.twig') }}</li>
              
            </ul>
          </div>
         
        </header>
          
          
      {% endblock %}



{% block body %}
<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de Deposito</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
            <tr>
                <th>Numero de deposito</th>
                <td>{{ movimientos_deposito.ndeposito }}</td>
            </tr>
            <tr>
                <th>FechaMovimiento</th>
                <td>{{ movimientos_deposito.fechaMovimiento ? movimientos_deposito.fechaMovimiento|date('d/m/Y') : '' }}</td>
            </tr>
            <tr>
                <th>Monto</th>
                <td>{{ movimientos_deposito.monto }}</td>
            </tr>
            <tr>
                <th>Banco</th>
                <td>{{ movimientos_deposito.banco }}</td>
            </tr>
        </tbody>
   </table>
               
                </div>
              </div>
          </div>
      </div>
{% endblock %}
", "movimientos_depositos/show.html.twig", "/var/www/html/access/templates/movimientos_depositos/show.html.twig");
    }
}
