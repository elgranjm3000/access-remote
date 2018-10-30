<?php

/* productos/edit.html.twig */
class __TwigTemplate_439aef0d760a7933df1895a54d85b94cbcfbc6d2fa7cedb3a2575c898a798b50 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "productos/edit.html.twig", 1);
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
        echo "Editar Productos";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_index");
        echo "\">Listado de Productos</a></li>
              <li>  ";
        // line 22
        echo twig_include($this->env, $context, "productos/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Editar Productos</b>
                </h2>
              
              </div>
";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "
    ";
        // line 39
        echo twig_include($this->env, $context, "productos/_form.html.twig", array("button_label" => "Actualizar"));
        echo "



";
    }

    // line 44
    public function block_addscript($context, array $blocks = array())
    {
        // line 45
        echo " <script type=\"text/javascript\">
jQuery(document).ready(function () {
   \$('.filearchivo').removeAttr(\"required\");
   });
 </script>
    ";
    }

    public function getTemplateName()
    {
        return "productos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 45,  99 => 44,  90 => 39,  87 => 38,  84 => 37,  67 => 22,  63 => 21,  51 => 12,  44 => 7,  41 => 6,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "productos/edit.html.twig", "/var/www/html/access/templates/productos/edit.html.twig");
    }
}
