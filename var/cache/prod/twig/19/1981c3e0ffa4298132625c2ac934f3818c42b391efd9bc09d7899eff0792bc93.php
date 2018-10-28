<?php

/* ingresos/new.html.twig */
class __TwigTemplate_800eb25f5a9d5626621b39e06cfe9bfd5bd5262c59b9c4391b851f7a27652e65 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "ingresos/new.html.twig", 1);
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
        echo "Nuevo ingreso de producto";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo " <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_index");
        echo "\">Ingresos</a></li>                            
              <li class=\"crumb-trail\">Nuevo ingreso</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_index");
        echo "\">Listado de Ingresos</a></li>
              
            </ul>
          </div>
         
        </header>
<div class=\"content-header\">
                <h2><b class=\"text-primary\">Agregar Ingresos - Productos</b>
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
        // line 38
        echo twig_include($this->env, $context, "ingresos/_form.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "ingresos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  82 => 37,  79 => 36,  61 => 19,  49 => 10,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ingresos/new.html.twig", "/var/www/html/access/templates/ingresos/new.html.twig");
    }
}
