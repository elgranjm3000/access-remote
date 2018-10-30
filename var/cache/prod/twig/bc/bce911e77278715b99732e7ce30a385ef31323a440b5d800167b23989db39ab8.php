<?php

/* movimientos_depositos/_form.html.twig */
class __TwigTemplate_715aefd3f694965f889f66fb3ef3a36db78219e45b92a0891a45042fc0f84207 extends Twig_Template
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
";
        // line 6
        echo "

<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
 ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idfacturarelacion", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "RECIBO CAJA", "value" => ($context["deposito"] ?? null))));
        echo "



                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fechaMovimiento", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "Fecha de movimiento")));
        echo "

                            </label>
                          </div>
                        </div>


                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "monto", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "monto", "max" => ($context["pagare"] ?? null), "step" => "any")));
        echo "

                            </label>
                          </div>
                        </div>

                           <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "banco", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "banco")));
        echo "

                            </label>
                          </div>
                        </div>
                       

                      </div>

                      
                      \t\t 
                      
                          <button class=\"btn btn-success guardar\">";
        // line 55
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        
";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo " 

</div>
</div>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "movimientos_depositos/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 60,  92 => 55,  77 => 43,  65 => 34,  52 => 24,  40 => 15,  36 => 14,  26 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_depositos/_form.html.twig", "/var/www/html/access/templates/movimientos_depositos/_form.html.twig");
    }
}
