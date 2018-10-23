<?php

/* clientes/index.html.twig */
class __TwigTemplate_5ed8493d226dca7ec3d6b524e2dfa003c0afe8c848bea96c288c9be5a1e0723e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "clientes/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/index.html.twig"));

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

        echo "Listado de clientes";
        
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
              <li class=\"crumb-active\"><a href=\"#\">Clientes</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_new");
        echo "\">Crear nuevo cliente</a></li>
              
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
        echo "   <section id=\"content\" class=\"table-layout animated fadeIn\">
          <!-- begin: .tray-left-->
        
          <!-- begin: .tray-center-->
          <div class=\"tray tray-center\">
            <!-- Panel with: Basic Footable-->
          
            <!-- Panel with: Data Filter-->
     
            <!-- Panel with: Pagination-->
            <div id=\"spy3\" class=\"panel\">
             
              <div class=\"panel-body pn\">
   <table class=\"table footable\" id=\"example\">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>Nit</th>                
                <th>Correo</th>                                
                <th>Zona</th>
                <th>Dpto</th>
                <th>Mcipio.</th>
                <th>Dir.</th>
                <th hidden=\"hidden\">Contacto</th>
                <th hidden=\"hidden\">F.Nac.</th>
                <th hidden=\"hidden\">Notas</th>
                <th>Movil</th>                
                <th hidden=\"hidden\">Local</th>                                
                <th>Acciones</th>
              
            </tr>
        </thead>
        <tbody>
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 67
            echo "            <tr>
                
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nit", array()), "html", null, true);
            echo "</td>                
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "correo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "zona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "dpto", array()), "html", null, true);
            echo "</td>  
                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "municipio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["cliente"], "direccion", array());
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "contactoPrincipal", array()), "html", null, true);
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 77
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cliente"], "fechaNacimiento", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "fechaNacimiento", array()), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                <td hidden=\"hidden\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "comentarios", array()), "html", null, true);
            echo "</td>  
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "telefonoMovil", array()), "html", null, true);
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "telefonoLocal", array()), "html", null, true);
            echo "</td>  
                <td>
                    <a title=\"Detalles clientes\" data-toggle=\"tooltip\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a data-toggle=\"tooltip\" title=\"Editar cliente\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                     <a data-toggle=\"tooltip\" title=\"Crear facturas\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_new", array("cliente" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-tasks \"></span></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "            <tr>
                <td colspan=\"6\">No hay registro de clientes</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </tbody>
    </table>

    </div>
</div>
</div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "clientes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 92,  228 => 88,  219 => 84,  215 => 83,  211 => 82,  206 => 80,  202 => 79,  198 => 78,  194 => 77,  190 => 76,  186 => 75,  182 => 74,  178 => 73,  174 => 72,  170 => 71,  166 => 70,  162 => 69,  158 => 67,  153 => 66,  117 => 32,  108 => 31,  89 => 20,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Listado de clientes{% endblock %}

{% block header %}

        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Clientes</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"{{ path('clientes_new') }}\">Crear nuevo cliente</a></li>
              
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
   <table class=\"table footable\" id=\"example\">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>Nit</th>                
                <th>Correo</th>                                
                <th>Zona</th>
                <th>Dpto</th>
                <th>Mcipio.</th>
                <th>Dir.</th>
                <th hidden=\"hidden\">Contacto</th>
                <th hidden=\"hidden\">F.Nac.</th>
                <th hidden=\"hidden\">Notas</th>
                <th>Movil</th>                
                <th hidden=\"hidden\">Local</th>                                
                <th>Acciones</th>
              
            </tr>
        </thead>
        <tbody>
        {% for cliente in clientes %}
            <tr>
                
                <td>{{ cliente.nombre }}</td>
                <td>{{ cliente.nit }}</td>                
                <td>{{ cliente.correo }}</td>
                <td>{{ cliente.zona }}</td>
                <td>{{ cliente.dpto }}</td>  
                <td>{{ cliente.municipio }}</td>
                <td>{{ cliente.direccion|raw }}</td>  
                <td hidden=\"hidden\">{{ cliente.contactoPrincipal }}</td>  
                <td hidden=\"hidden\">{{ cliente.fechaNacimiento ? cliente.fechaNacimiento|date('Y-m-d') : '' }}</td>
                <td hidden=\"hidden\">{{ cliente.comentarios }}</td>  
                <td>{{ cliente.telefonoMovil }}</td>  
                <td hidden=\"hidden\">{{ cliente.telefonoLocal }}</td>  
                <td>
                    <a title=\"Detalles clientes\" data-toggle=\"tooltip\" href=\"{{ path('clientes_show', {'id': cliente.id}) }}\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a data-toggle=\"tooltip\" title=\"Editar cliente\" href=\"{{ path('clientes_edit', {'id': cliente.id}) }}\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                     <a data-toggle=\"tooltip\" title=\"Crear facturas\" href=\"{{ path('facturas_new', {'cliente': cliente.id}) }}\"><span class=\"glyphicon glyphicon-tasks \"></span></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">No hay registro de clientes</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    </div>
</div>
</div>
</section>
{% endblock %}
", "clientes/index.html.twig", "/var/www/html/access/templates/clientes/index.html.twig");
    }
}
