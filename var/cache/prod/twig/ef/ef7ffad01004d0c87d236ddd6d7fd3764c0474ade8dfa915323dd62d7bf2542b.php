<?php

/* user/_perfilform.html.twig */
class __TwigTemplate_cd46ce857fd29372b05ed665f4461f0bf48665bf7215d3a55b3eaf21bacd6e6a extends Twig_Template
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
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "gui-input ", "placeholder" => "Contraseña")));
        echo "

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "gui-input ", "placeholder" => "Repetir contraseña")));
        echo "

                            </label>
                          </div>
                        </div>

                        

                        
                      
                      </div>



                      
                          <button type=\"submit\" class=\"btn btn-success\">";
        // line 42
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo " 

</div>
</div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "user/_perfilform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 47,  75 => 42,  57 => 27,  45 => 18,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/_perfilform.html.twig", "/var/www/html/access/templates/user/_perfilform.html.twig");
    }
}
