<?php

/* movimientos_depositos/edit.html.twig */
class __TwigTemplate_fed3264a99d87223ff102034c09c82a3605097cd20f73d440b1ad1e5e115331b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "movimientos_depositos/edit.html.twig", 1);
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
        echo "Editar Movimientos";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "
 <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_index");
        echo "\">Depositos</a></li>                            
              <li class=\"crumb-trail\">Editar registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_index");
        echo "\">Listado de Depositos</a></li>
              <li>  ";
        // line 23
        echo twig_include($this->env, $context, "movimientos_depositos/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Editar Depositos</b>
                </h2>
                              <h4><b>Cuentas por pagar: ";
        // line 33
        echo twig_escape_filter($this->env, ($context["pagare"] ?? null), "html", null, true);
        echo "</b></h4>

              </div>
";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "
    ";
        // line 41
        echo twig_include($this->env, $context, "movimientos_depositos/_form.html.twig", array("button_label" => "Actualizar"));
        echo "

    
";
    }

    // line 45
    public function block_addscript($context, array $blocks = array())
    {
        // line 46
        echo "    <script type=\"text/javascript\">
      jQuery(document).ready(function () {

        \$( \".guardar\" ).click(function() {
var monto = ";
        // line 50
        echo twig_escape_filter($this->env, ($context["pagare"] ?? null), "html", null, true);
        echo ";
  if(\$(\"#movimientos_depositos1_monto\").val() > monto){
    alert(\"El monto que esta colocando es mayor a \"+monto);
  \$(\"#movimientos_depositos1_monto\").focus();
  return false;
}
});
        });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "movimientos_depositos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 50,  105 => 46,  102 => 45,  94 => 41,  91 => 40,  88 => 39,  80 => 33,  67 => 23,  63 => 22,  51 => 13,  44 => 8,  41 => 7,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_depositos/edit.html.twig", "/var/www/html/access/templates/movimientos_depositos/edit.html.twig");
    }
}
