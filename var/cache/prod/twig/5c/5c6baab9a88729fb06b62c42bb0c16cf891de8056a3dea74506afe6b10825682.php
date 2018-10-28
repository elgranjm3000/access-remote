<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7e06a9c5385a4ddc4493b3bb72e8051c34c987e35d4bd06781f825a7abb246bc extends Twig_Template
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
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "/var/www/html/access/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
