<?php

/* movimientos_depositos/_form.html.twig */
class __TwigTemplate_08c6bd8c101690b99c1042a01f1d2216beb0dc1efb9c125fa84c4447355b9fcf extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_depositos/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_depositos/_form.html.twig"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
 ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "idfacturarelacion", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "RECIBO CAJA", "value" => (isset($context["deposito"]) || array_key_exists("deposito", $context) ? $context["deposito"] : (function () { throw new Twig_Error_Runtime('Variable "deposito" does not exist.', 15, $this->source); })()))));
        echo "



                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "fechaMovimiento", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "Fecha de movimiento")));
        echo "

                            </label>
                          </div>
                        </div>


                      <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "ndeposito", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Numero de deposito")));
        echo "

                            </label>
                          </div>
                        </div>


                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "monto", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "monto", "max" => (isset($context["pagare"]) || array_key_exists("pagare", $context) ? $context["pagare"] : (function () { throw new Twig_Error_Runtime('Variable "pagare" does not exist.', 44, $this->source); })()), "step" => "any")));
        echo "

                            </label>
                          </div>
                        </div>

                           <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "banco", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "banco")));
        echo "

                            </label>
                          </div>
                        </div>
                       

                      </div>

                      
                      \t\t 
                      
                          <button class=\"btn btn-success guardar\">";
        // line 65
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 65, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        
";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo " 

</div>
</div>
</div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  119 => 70,  111 => 65,  96 => 53,  84 => 44,  71 => 34,  58 => 24,  46 => 15,  42 => 14,  32 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{#{{ form_start(form) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}#}


<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 {{ form_start(form, {'attr': {'id': 'form-ui'}}) }}
 {{ form_widget(form.idfacturarelacion, {'attr': {'class': 'gui-input','placeholder':\"RECIBO CAJA\",'value': deposito }}) }}



                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.fechaMovimiento, {'attr': {'class': 'gui-input js-datepicker','placeholder':\"Fecha de movimiento\" }}) }}

                            </label>
                          </div>
                        </div>


                      <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.ndeposito, {'attr': {'class': 'gui-input','placeholder':\"Numero de deposito\" }}) }}

                            </label>
                          </div>
                        </div>


                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.monto, {'attr': {'class': 'gui-input','placeholder':\"monto\",\"max\":pagare,\"step\":\"any\" }}) }}

                            </label>
                          </div>
                        </div>

                           <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.banco, {'attr': {'class': 'gui-input','placeholder':\"banco\" }}) }}

                            </label>
                          </div>
                        </div>
                       

                      </div>

                      
                      \t\t 
                      
                          <button class=\"btn btn-success guardar\">{{ button_label|default('Guardar') }}</button>

 

\t\t        
{{ form_end(form) }} 

</div>
</div>
</div>

</div>
", "movimientos_depositos/_form.html.twig", "C:\\xampp\\htdocs\\access\\templates\\movimientos_depositos\\_form.html.twig");
    }
}
