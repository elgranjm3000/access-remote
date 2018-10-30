<?php

/* security/denegado.html.twig */
class __TwigTemplate_2cec46c48d0e054cc7ad0e00af41e832b927bc478b105bf3e8ad6eab2e572836 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "security/denegado.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "ACCESO DENEGADO PARA ESTE MODULO";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "   ";
        // line 45
        echo "  <!-- Begin: Content-->
        <section id=\"content\" class=\"table-layout animated fadeIn\">
          <!-- begin: .tray-left-->
        
          <!-- begin: .tray-center-->
          <div class=\"tray tray-center\">
            <!-- Panel with: Basic Footable-->
          
            <!-- Panel with: Data Filter-->
     
            <!-- Panel with: Pagination-->
            <div id=\"spy3\" class=\"panel\">
             
              <div class=\"panel-body pn\">
                      <h1>ACCESO DENEGADO</h1>
              </div>
            </div>
            <!-- Panel with: Expanding Rows-->
          
            
          </div>
        </section>
";
    }

    public function getTemplateName()
    {
        return "security/denegado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 45,  42 => 7,  39 => 6,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/denegado.html.twig", "/var/www/html/access/templates/security/denegado.html.twig");
    }
}
