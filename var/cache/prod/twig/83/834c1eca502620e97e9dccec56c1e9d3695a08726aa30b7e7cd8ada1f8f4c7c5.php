<?php

/* ingresos/show.html.twig */
class __TwigTemplate_2b48e18682fe53db296b4a49a9ef4e783b3f92b685afa003a4c2f8a60324a8fa extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Detalles - ingresos ";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["ingreso"] ?? null), "id", array()))), "html", null, true);
        echo "\">Editar Cliente</a></li>
              <li>";
        // line 23
        echo twig_include($this->env, $context, "ingresos/_delete_form.html.twig");
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ingreso"] ?? null), "productos", array()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Proveedor</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ingreso"] ?? null), "proveedor", array()), "nombreEmpresa", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Almacen</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ingreso"] ?? null), "almacen", array()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ingreso"] ?? null), "cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["ingreso"] ?? null), "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ingreso"] ?? null), "fecha", array()), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentario</th>
                <td>";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["ingreso"] ?? null), "comentario", array());
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
        return "ingresos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 69,  128 => 65,  121 => 61,  114 => 57,  107 => 53,  100 => 49,  83 => 34,  80 => 33,  67 => 23,  63 => 22,  59 => 21,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ingresos/show.html.twig", "/var/www/html/access/templates/ingresos/show.html.twig");
    }
}
