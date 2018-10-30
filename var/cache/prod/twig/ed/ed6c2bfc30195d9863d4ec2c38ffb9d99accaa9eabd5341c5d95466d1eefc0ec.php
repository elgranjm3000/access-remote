<?php

/* clientes/show.html.twig */
class __TwigTemplate_af2fef4a615a318568cf174f2e31991014ea25abfe548e8f6664b8535c09ad2b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "clientes/show.html.twig", 1);
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
        echo "Detalles - Clientes";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Clientes</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_index");
        echo "\">Listado de Clientes</a></li>
              <li class=\"active\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "id", array()))), "html", null, true);
        echo "\">Editar Cliente</a></li>
              <li>";
        // line 23
        echo twig_include($this->env, $context, "clientes/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de clientes</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
           
            <tr>
                <th>Nombre</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NIT</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "nit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contacto Principal</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "contactoPrincipal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "correo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha de nacimiento</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "fechaNacimiento", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "fechaNacimiento", array()), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "comentarios", array());
        echo "</td>
            </tr>
            <tr>
                <th>Zona</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "zona", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departament</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "dpto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Municipio</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "municipio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono Movil</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "telefonoMovil", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono Local</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "telefonoLocal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 94
        echo twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "direccion", array());
        echo "</td>
            </tr>
        </tbody>
    </table>
               
                </div>
              </div>
          </div>
      </div>
";
    }

    public function getTemplateName()
    {
        return "clientes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 94,  171 => 90,  164 => 86,  157 => 82,  150 => 78,  143 => 74,  136 => 70,  129 => 66,  122 => 62,  115 => 58,  108 => 54,  101 => 50,  83 => 34,  80 => 33,  67 => 23,  63 => 22,  59 => 21,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "clientes/show.html.twig", "/var/www/html/access/templates/clientes/show.html.twig");
    }
}
