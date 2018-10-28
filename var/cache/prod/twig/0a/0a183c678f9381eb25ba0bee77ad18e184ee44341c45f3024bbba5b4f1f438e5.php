<?php

/* movimientos_almacen/edit.html.twig */
class __TwigTemplate_4ccae41f4445e719cb2166f144d5f2a8177340a163483962665a508773c0a87e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Actualizar";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Editar Movimientos Almacen</h1>

    ";
        // line 7
        echo twig_include($this->env, $context, "movimientos_almacen/_form.html.twig", array("button_label" => "Actualizar"));
        echo "

    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_index");
        echo "\">Volver al Listado</a>

    ";
        // line 11
        echo twig_include($this->env, $context, "movimientos_almacen/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "movimientos_almacen/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  55 => 9,  50 => 7,  46 => 5,  43 => 4,  37 => 2,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_almacen/edit.html.twig", "/var/www/html/access/templates/movimientos_almacen/edit.html.twig");
    }
}
