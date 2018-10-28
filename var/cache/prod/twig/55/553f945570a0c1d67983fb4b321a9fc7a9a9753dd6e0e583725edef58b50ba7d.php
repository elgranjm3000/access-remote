<?php

/* clientes/edit.html.twig */
class __TwigTemplate_4f2b5c524ee55a4017edf3a317b883f8732ee84ba26ec82e7fb4dcfc694e6bfa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "clientes/edit.html.twig", 1);
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
        echo "Editar Registro - Clientes";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_index");
        echo "\">Clientes</a></li>                            
              <li class=\"crumb-trail\">Editar registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_index");
        echo "\">Listado de Clientes</a></li>
              <li>  ";
        // line 22
        echo twig_include($this->env, $context, "clientes/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Editar Clientes</b>
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
        // line 41
        echo twig_include($this->env, $context, "clientes/_form.html.twig", array("button_label" => "Actualizar"));
        echo "


";
    }

    public function getTemplateName()
    {
        return "clientes/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 41,  87 => 39,  84 => 38,  66 => 22,  62 => 21,  50 => 12,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "clientes/edit.html.twig", "/var/www/html/access/templates/clientes/edit.html.twig");
    }
}
