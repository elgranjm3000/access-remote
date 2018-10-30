<?php

/* user/editperfil.html.twig */
class __TwigTemplate_4efb7f0b78305618a64c94dc510ee02617cf39f2541548539ffb5832c4d8616b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "user/editperfil.html.twig", 1);
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
        echo "Edit Usuario";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_index");
        echo "\">Usuarios</a></li>                            
              <li class=\"crumb-trail\">Editar registro</li>
            </ol>
          </div>
          
        </header>
         

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Editar Usuario</b>
                </h2>
              
              </div>
";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "    
    ";
        // line 29
        echo twig_include($this->env, $context, "user/_perfilform.html.twig", array("button_label" => "Actualizar"));
        echo "

    
";
    }

    public function getTemplateName()
    {
        return "user/editperfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  71 => 28,  68 => 27,  50 => 12,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/editperfil.html.twig", "/var/www/html/access/templates/user/editperfil.html.twig");
    }
}
