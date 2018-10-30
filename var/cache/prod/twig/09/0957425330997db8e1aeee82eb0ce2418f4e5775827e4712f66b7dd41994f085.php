<?php

/* descuento/edit.html.twig */
class __TwigTemplate_33a7871208d45363e1fb3df770acf5c650c67d8812cae92a4a5a98202220f512 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "descuento/edit.html.twig", 1);
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
        echo "Editar Descuento";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descuento_index");
        echo "\">Descuentos</a></li>                            
              <li class=\"crumb-trail\">Editar descuentos</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descuento_index");
        echo "\">Listado de Descuentos</a></li>
              <li>  ";
        // line 22
        echo twig_include($this->env, $context, "descuento/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Editar Descuento</b>
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
        echo twig_include($this->env, $context, "descuento/_form.html.twig", array("button_label" => "Actualizar"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "descuento/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  87 => 37,  84 => 36,  66 => 22,  62 => 21,  50 => 12,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "descuento/edit.html.twig", "/var/www/html/access/templates/descuento/edit.html.twig");
    }
}
