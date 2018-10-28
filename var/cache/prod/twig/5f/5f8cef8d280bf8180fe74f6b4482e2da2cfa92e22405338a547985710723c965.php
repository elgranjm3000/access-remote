<?php

/* familia/new.html.twig */
class __TwigTemplate_efadba9589514e4a0f61b5bbc85c014f6940c44db955f9412fc66f6f529dfddc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "familia/new.html.twig", 1);
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
        echo "Nuevo registro - Familia";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo " <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("familia_index");
        echo "\">Familia</a></li>                            
              <li class=\"crumb-trail\">Nuevo registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("familia_index");
        echo "\">Listado de famiia</a></li>
              
            </ul>
          </div>
         
        </header>
<div class=\"content-header\">
                <h2><b class=\"text-primary\">Agregar Familia</b>
                </h2>
              
              </div>


";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "    

    ";
        // line 37
        echo twig_include($this->env, $context, "familia/_form.html.twig");
        echo "

    
";
    }

    public function getTemplateName()
    {
        return "familia/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 37,  82 => 35,  79 => 34,  61 => 18,  49 => 9,  43 => 5,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "familia/new.html.twig", "/var/www/html/access/templates/familia/new.html.twig");
    }
}
