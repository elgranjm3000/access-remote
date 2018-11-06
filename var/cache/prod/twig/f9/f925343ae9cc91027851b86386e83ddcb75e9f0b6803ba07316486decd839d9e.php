<?php

/* movimientos_almacen/new.html.twig */
class __TwigTemplate_c6b62c68a23085a0946bb95e3810bb403f29bcfe815476dbd64cab3af1958d3e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "movimientos_almacen/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "New MovimientosAlmacen";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Create new MovimientosAlmacen</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "movimientos_almacen/_form.html.twig");
        echo "

    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_index");
        echo "\">back to list</a>
";
    }

    public function getTemplateName()
    {
        return "movimientos_almacen/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 8,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_almacen/new.html.twig", "/var/www/html/access/templates/movimientos_almacen/new.html.twig");
    }
}
