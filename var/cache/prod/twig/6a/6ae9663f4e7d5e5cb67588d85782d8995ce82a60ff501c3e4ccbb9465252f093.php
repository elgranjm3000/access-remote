<?php

/* familia/edit.html.twig */
class __TwigTemplate_3b2a9097bb48e5ae747dbe796f79f1c9c88802f3e0b2dcc93bcbbb29cbceb887 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "familia/edit.html.twig", 1);
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
        echo "Editar Familia";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "
 <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("familia_index");
        echo "\">Familia</a></li>                            
              <li class=\"crumb-trail\">Editar registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("familia_index");
        echo "\">Listado de Familia</a></li>
              <li>  ";
        // line 20
        echo twig_include($this->env, $context, "familia/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Editar Familia</b>
                </h2>
              
              </div>
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "
    ";
        // line 35
        echo twig_include($this->env, $context, "familia/_form.html.twig", array("button_label" => "Actualizar"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "familia/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  86 => 34,  83 => 33,  66 => 20,  62 => 19,  50 => 10,  43 => 5,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "familia/edit.html.twig", "/var/www/html/access/templates/familia/edit.html.twig");
    }
}
