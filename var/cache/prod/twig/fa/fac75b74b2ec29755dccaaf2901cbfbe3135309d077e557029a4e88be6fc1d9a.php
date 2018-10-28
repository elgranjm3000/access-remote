<?php

/* ingresos/edit.html.twig */
class __TwigTemplate_8e089e3bff0f540e4642234b0521535736d1b3e7755d54ff62a859d377fce90d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "ingresos/edit.html.twig", 1);
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
        echo "Editar Ingresos de productos";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_index");
        echo "\">Productos</a></li>                            
              <li class=\"crumb-trail\">Editar registro</li>
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
              <li>  ";
        // line 22
        echo twig_include($this->env, $context, "ingresos/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Editar Ingresos</b>
                </h2>
                          

              </div>
";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "
    ";
        // line 40
        echo twig_include($this->env, $context, "ingresos/_form.html.twig", array("button_label" => "Actualizar"));
        echo "

  
";
    }

    public function getTemplateName()
    {
        return "ingresos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  87 => 39,  84 => 38,  66 => 22,  62 => 21,  50 => 12,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ingresos/edit.html.twig", "/var/www/html/access/templates/ingresos/edit.html.twig");
    }
}
