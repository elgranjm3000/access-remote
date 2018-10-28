<?php

/* productos/show.html.twig */
class __TwigTemplate_e3ec65f30e769b73e6d73c7520c2bb299f00edc3a77f3a40110f660c2f5a2d94 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Productos-detalles";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
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
              <li class=\"active\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "id", array()))), "html", null, true);
        echo "\">Editar Producto</a></li>
              <li>";
        // line 22
        echo twig_include($this->env, $context, "productos/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
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
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Unidad de Medida</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "idmedidas", array()), "unidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Costo</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "costo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio de venta</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "precioVenta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 67
        echo twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "comentarios", array());
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad de Presentacion</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "cantidadPresentacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                    <th>Familia</th>
                    <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "idfamilia", array()), "nombre", array()), "html", null, true);
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
        return "productos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 75,  141 => 71,  134 => 67,  127 => 63,  120 => 59,  113 => 55,  106 => 51,  99 => 47,  83 => 33,  80 => 32,  67 => 22,  63 => 21,  59 => 20,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "productos/show.html.twig", "/var/www/html/access/templates/productos/show.html.twig");
    }
}
