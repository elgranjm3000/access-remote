<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_d0f7674c22e14d3c07eb92599e2fbe3b192b4f6570f6e5bc67fce7ad3d9526bc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.atom.twig", "/var/www/html/access/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
