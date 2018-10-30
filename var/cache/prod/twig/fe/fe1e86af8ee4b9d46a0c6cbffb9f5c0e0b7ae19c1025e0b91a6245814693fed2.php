<?php

/* movimientos_depositos/new.html.twig */
class __TwigTemplate_9fa2002fa6aae15ca844b80d444921f4324c0fb0c774b6c4c5f10d23097f3df2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "movimientos_depositos/new.html.twig", 1);
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
        echo "Crear deposito";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_index");
        echo "\">Facturas</a></li>                            
              <li class=\"crumb-trail\">Deposito</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_index");
        echo "\">Historico deposito</a></li>
              
            </ul>
          </div>
         
        </header>
<div class=\"content-header\">
                <h2><b class=\"text-primary\">Deposito </b>
                </h2>
                <h4><b>Cuentas por pagar: ";
        // line 28
        echo twig_escape_filter($this->env, ($context["pagare"] ?? null), "html", null, true);
        echo "</b></h4>
              
              </div>


";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "

    ";
        // line 38
        echo twig_include($this->env, $context, "movimientos_depositos/_form.html.twig");
        echo "

";
    }

    // line 43
    public function block_addscript($context, array $blocks = array())
    {
        // line 44
        echo "    <script type=\"text/javascript\">
      jQuery(document).ready(function () {

        \$( \".guardar\" ).click(function() {
var monto = ";
        // line 48
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
        return "movimientos_depositos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 48,  101 => 44,  98 => 43,  91 => 38,  87 => 36,  84 => 35,  74 => 28,  62 => 19,  50 => 10,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_depositos/new.html.twig", "/var/www/html/access/templates/movimientos_depositos/new.html.twig");
    }
}
