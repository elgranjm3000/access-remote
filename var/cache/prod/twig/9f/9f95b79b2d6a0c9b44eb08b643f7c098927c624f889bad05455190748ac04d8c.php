<?php

/* proveedores/edit.html.twig */
class __TwigTemplate_77bbd67ff8580eb9f4b14864774d780039127a96f6caf0bbd15cc74f3df6db29 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "proveedores/edit.html.twig", 1);
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
        echo "Editar proveedor";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "
 <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_index");
        echo "\">Proveedor</a></li>                            
              <li class=\"crumb-trail\">Editar registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_index");
        echo "\">Listado de Proveedores</a></li>
              <li>  ";
        // line 22
        echo twig_include($this->env, $context, "proveedores/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Editar proveedores</b>
                </h2>
              
              </div>
";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "

    ";
        // line 39
        echo twig_include($this->env, $context, "proveedores/_form.html.twig", array("button_label" => "Actualizar"));
        echo "


  
";
    }

    public function getTemplateName()
    {
        return "proveedores/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  86 => 37,  83 => 36,  66 => 22,  62 => 21,  50 => 12,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "proveedores/edit.html.twig", "/var/www/html/access/templates/proveedores/edit.html.twig");
    }
}
