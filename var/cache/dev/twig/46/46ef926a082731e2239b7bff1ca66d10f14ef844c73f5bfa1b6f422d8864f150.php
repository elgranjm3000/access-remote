<?php

/* proveedores/index.html.twig */
class __TwigTemplate_03abe093e18125da52737bc2b773956d83375fe0c06cf375bb0fc7725c1f990e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "proveedores/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedores/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedores/index.html.twig"));

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

        echo "Listado de Proveedores";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Proveedor</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_new");
        echo "\">Crear nuevo proveedor</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "   ";
        // line 70
        echo "  <!-- Begin: Content-->
        <section id=\"content\" class=\"table-layout animated fadeIn\">
          <!-- begin: .tray-left-->
        
          <!-- begin: .tray-center-->
          <div class=\"tray tray-center\">
            <!-- Panel with: Basic Footable-->
          
            <!-- Panel with: Data Filter-->
     
            <!-- Panel with: Pagination-->
            <div id=\"spy3\" class=\"panel\">
             
              <div class=\"panel-body pn\">
                <table class=\"table footable\">

                  <thead>
                    <tr>
                        <th>Id</th>
                <th>NombreEmpresa</th>
                <th>Contacto</th>
                <th>TelefonoMovil</th>
                <th>TelefonoOfic</th>
                <th>Correo</th>
                <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new Twig_Error_Runtime('Variable "proveedores" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["proveedore"]) {
            // line 99
            echo "            <tr>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "nombreEmpresa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "contacto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "telefonoMovil", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "telefonoOfic", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "correo", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_show", array("id" => twig_get_attribute($this->env, $this->source, $context["proveedore"], "id", array()))), "html", null, true);
            echo "\" title=\"Visualizar\" ><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["proveedore"], "id", array()))), "html", null, true);
            echo "\" title=\"Editar\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedore'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                  </tbody>
                  <tfoot class=\"footer-menu\">
                    <tr>
                      <td colspan=\"7\">
                        <nav class=\"text-center\">
                          <ul class=\"pagination hide-if-no-paging\"></ul>
                        </nav>
                      </td>
                    </tr>
                  </tfoot>
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
        return "proveedores/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 116,  195 => 112,  186 => 108,  182 => 107,  177 => 105,  173 => 104,  169 => 103,  165 => 102,  161 => 101,  157 => 100,  154 => 99,  149 => 98,  119 => 70,  117 => 32,  108 => 31,  89 => 19,  73 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Listado de Proveedores{% endblock %}
  {% block header %}

        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Proveedor</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"{{ path('proveedores_new') }}\">Crear nuevo proveedor</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
      {% endblock %}



{% block body %}
   {# <h1>Proveedores index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>NombreEmpresa</th>
                <th>Contacto</th>
                <th>TelefonoMovil</th>
                <th>TelefonoOfic</th>
                <th>TelefonoParticular</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for proveedore in proveedores %}
            <tr>
                <td>{{ proveedore.id }}</td>
                <td>{{ proveedore.nombreEmpresa }}</td>
                <td>{{ proveedore.contacto }}</td>
                <td>{{ proveedore.telefonoMovil }}</td>
                <td>{{ proveedore.telefonoOfic }}</td>
                <td>{{ proveedore.telefonoParticular }}</td>
                <td>
                    <a href=\"{{ path('proveedores_show', {'id': proveedore.id}) }}\">show</a>
                    <a href=\"{{ path('proveedores_edit', {'id': proveedore.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('proveedores_new') }}\">Create new</a>
    #}
  <!-- Begin: Content-->
        <section id=\"content\" class=\"table-layout animated fadeIn\">
          <!-- begin: .tray-left-->
        
          <!-- begin: .tray-center-->
          <div class=\"tray tray-center\">
            <!-- Panel with: Basic Footable-->
          
            <!-- Panel with: Data Filter-->
     
            <!-- Panel with: Pagination-->
            <div id=\"spy3\" class=\"panel\">
             
              <div class=\"panel-body pn\">
                <table class=\"table footable\">

                  <thead>
                    <tr>
                        <th>Id</th>
                <th>NombreEmpresa</th>
                <th>Contacto</th>
                <th>TelefonoMovil</th>
                <th>TelefonoOfic</th>
                <th>Correo</th>
                <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     {% for proveedore in proveedores %}
            <tr>
                <td>{{ proveedore.id }}</td>
                <td>{{ proveedore.nombreEmpresa }}</td>
                <td>{{ proveedore.contacto }}</td>
                <td>{{ proveedore.telefonoMovil }}</td>
                <td>{{ proveedore.telefonoOfic }}</td>
                <td>{{ proveedore.correo }}</td>
                <td>
                    <a href=\"{{ path('proveedores_show', {'id': proveedore.id}) }}\" title=\"Visualizar\" ><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"{{ path('proveedores_edit', {'id': proveedore.id}) }}\" title=\"Editar\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
                  </tbody>
                  <tfoot class=\"footer-menu\">
                    <tr>
                      <td colspan=\"7\">
                        <nav class=\"text-center\">
                          <ul class=\"pagination hide-if-no-paging\"></ul>
                        </nav>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- Panel with: Expanding Rows-->
          
            <!-- DEMO - breaks used to extend container - DEMO--><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </section>
{% endblock %}


", "proveedores/index.html.twig", "/var/www/html/access/templates/proveedores/index.html.twig");
    }
}
