<?php

/* contratar/edit.html.twig */
class __TwigTemplate_2ef5623b2c5f32a50668401dc15a5e7b0e4d29ce65572c3f9abe31d4530c9e7b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contratar/edit.html.twig", 1);
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
        echo "Edit Contratar";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Edit Contratar</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "contratar/_form.html.twig", array("button_label" => "Update"));
        echo "

    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contratar_index");
        echo "\">back to list</a>

    ";
        // line 12
        echo twig_include($this->env, $context, "contratar/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "contratar/edit.html.twig";
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
        return new Twig_Source("", "contratar/edit.html.twig", "/var/www/html/access/templates/contratar/edit.html.twig");
    }
}
