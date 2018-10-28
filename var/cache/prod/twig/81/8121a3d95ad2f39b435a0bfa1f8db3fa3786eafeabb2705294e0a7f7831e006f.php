<?php

/* almacen/show.html.twig */
class __TwigTemplate_d11d2e4ada8d4361d2f9e4786766222182f40b4308d354f12cc40aa98f1c07cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "almacen/show.html.twig", 1);
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
        echo "Detalles - Almacen";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Almacen</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("almacen_index");
        echo "\">Listado de Almacen</a></li>
              <li class=\"active\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("almacen_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", array()))), "html", null, true);
        echo "\">Editar Almacen</a></li>
              <li>";
        // line 22
        echo twig_include($this->env, $context, "almacen/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
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
                <th>Id</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "comentarios", array());
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
        return "almacen/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 55,  107 => 51,  100 => 47,  83 => 32,  80 => 31,  67 => 22,  63 => 21,  59 => 20,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "almacen/show.html.twig", "/var/www/html/access/templates/almacen/show.html.twig");
    }
}
