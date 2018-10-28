<?php

/* almacen/_form.html.twig */
class __TwigTemplate_609b60859fa3b3b9e3b9eaad8993a0f84f7e2804025f35478d677b0ab3289456 extends Twig_Template
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
        echo "



<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Nombre de almacen")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">Comentarios
                              ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input ", "placeholder" => "Comentarios")));
        echo "

                            </label>
                          </div>
                        </div>
                      
                      </div>



                      
                          <button type=\"submit\" class=\"btn btn-success\">";
        // line 37
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo " 

</div>
</div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "almacen/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 42,  70 => 37,  56 => 26,  44 => 17,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "almacen/_form.html.twig", "/var/www/html/access/templates/almacen/_form.html.twig");
    }
}
