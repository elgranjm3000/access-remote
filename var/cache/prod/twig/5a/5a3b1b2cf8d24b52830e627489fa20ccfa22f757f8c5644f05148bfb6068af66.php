<?php

/* @Twig/Exception/error403.html.twig */
class __TwigTemplate_7ee176344c20b0895477f4883ef173d4494b0f868283b75585a345bbe5887a24 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("template.html.twig", "@Twig/Exception/error403.html.twig", 2);
        $this->blocks = array(
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>ACCESO DENEGADO</h1>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error403.html.twig", "/var/www/html/access/templates/bundles/TwigBundle/Exception/error403.html.twig");
    }
}
