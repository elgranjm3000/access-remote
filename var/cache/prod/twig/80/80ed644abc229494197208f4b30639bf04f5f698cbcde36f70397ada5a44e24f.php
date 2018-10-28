<?php

/* productos/new.html.twig */
class __TwigTemplate_eddefb53e683eeaaf3940841780a4e8e0ec2f85e8e5042834c11db73bbe4bfb1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "productos/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'addscript' => array($this, 'block_addscript'),
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
        echo "Nuevo Productos";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_index");
        echo "\">Productos</a></li>                            
              <li class=\"crumb-trail\">Nuevo registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_index");
        echo "\">Listado de productos</a></li>
              
            </ul>
          </div>
         
        </header>
<div class=\"content-header\">
                <h2><b class=\"text-primary\">Agregar Productos</b>
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
        echo twig_include($this->env, $context, "productos/_form.html.twig");
        echo "

";
    }

    // line 42
    public function block_addscript($context, array $blocks = array())
    {
        // line 43
        echo " <script type=\"text/javascript\">
jQuery(document).ready(function () {
   \$('.filearchivo').removeAttr(\"required\");
   });
 </script>
    ";
    }

    public function getTemplateName()
    {
        return "productos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  93 => 42,  86 => 38,  83 => 37,  80 => 36,  62 => 19,  50 => 10,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "productos/new.html.twig", "/var/www/html/access/templates/productos/new.html.twig");
    }
}
