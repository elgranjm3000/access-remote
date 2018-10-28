<?php

/* detalles_factura/edit.html.twig */
class __TwigTemplate_bc4cb27d73ee3db4f2beb66dc150f79c3a38b863c4c0c4f297a0290db8ec1940 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "detalles_factura/edit.html.twig", 1);
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
        echo "Edit DetallesFactura";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Edit DetallesFactura</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "detalles_factura/_form.html.twig", array("button_label" => "Update"));
        echo "

    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles_factura_index");
        echo "\">back to list</a>

    ";
        // line 12
        echo twig_include($this->env, $context, "detalles_factura/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "detalles_factura/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  51 => 10,  46 => 8,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "detalles_factura/edit.html.twig", "/var/www/html/access/templates/detalles_factura/edit.html.twig");
    }
}
