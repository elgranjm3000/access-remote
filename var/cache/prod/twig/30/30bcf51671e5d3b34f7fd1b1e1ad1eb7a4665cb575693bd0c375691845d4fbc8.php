<?php

/* proveedores/new.html.twig */
class __TwigTemplate_3427b65043f001c884576e2c990b1fcc7d3cd0aab314dbef5f5f21e9a4e82db9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "proveedores/new.html.twig", 1);
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
        echo "Nuevo proveedor";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo " <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_index");
        echo "\">Proveedor</a></li>                            
              <li class=\"crumb-trail\">Nuevo registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_index");
        echo "\">Listado de Proveedores</a></li>
              
            </ul>
          </div>
         
        </header>
<div class=\"content-header\">
                <h2><b class=\"text-primary\">Agregar proveedores</b>
                </h2>
              
              </div>


";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "    

    ";
        // line 38
        echo twig_include($this->env, $context, "proveedores/_form.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "proveedores/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  82 => 36,  79 => 35,  61 => 20,  49 => 11,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "proveedores/new.html.twig", "/var/www/html/access/templates/proveedores/new.html.twig");
    }
}
