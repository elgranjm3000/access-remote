<?php

/* proveedores/show.html.twig */
class __TwigTemplate_85cf65067b9ea944aebd51abbb514306ce0cdb190c9a00733ec8a4c04cfae145 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "proveedores/show.html.twig", 1);
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
        echo "Proveedores";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Proveedor</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_new");
        echo "\">Listado de Proveedores</a></li>
              <li class=\"active\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["proveedore"] ?? null), "id", array()))), "html", null, true);
        echo "\">Editar Proveedor</a></li>
              <li>";
        // line 23
        echo twig_include($this->env, $context, "proveedores/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de proveedores</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
                    
                        <tbody>
                         
            <tr>
                <th>Nombre de empresa</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proveedore"] ?? null), "nombreEmpresa", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contacto</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proveedore"] ?? null), "contacto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono Movil</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proveedore"] ?? null), "telefonoMovil", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono Oficina</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proveedore"] ?? null), "telefonoOfic", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono Particular</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["proveedore"] ?? null), "telefonoParticular", array()), "html", null, true);
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
        return "proveedores/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 68,  123 => 64,  116 => 60,  109 => 56,  102 => 52,  83 => 35,  80 => 34,  67 => 23,  63 => 22,  59 => 21,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "proveedores/show.html.twig", "/var/www/html/access/templates/proveedores/show.html.twig");
    }
}
