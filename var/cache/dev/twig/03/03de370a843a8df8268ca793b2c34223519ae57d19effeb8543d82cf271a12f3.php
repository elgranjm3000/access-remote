<?php

/* user/_perfilform.html.twig */
class __TwigTemplate_8863b0f94ac11f1d1513f5507fc7547e03115dad4b6a6e8129f146d445e248ff extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/_perfilform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/_perfilform.html.twig"));

        // line 1
        echo "


<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "gui-input ", "placeholder" => "Contraseña")));
        echo "

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "gui-input ", "placeholder" => "Repetir contraseña")));
        echo "

                            </label>
                          </div>
                        </div>

                        

                        
                      
                      </div>



                      
                          <button type=\"submit\" class=\"btn btn-success\">";
        // line 42
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 42, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo " 

</div>
</div>
</div>

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  89 => 47,  81 => 42,  63 => 27,  51 => 18,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("


<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 {{ form_start(form, {'attr': {'id': 'form-ui'}}) }}
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.plainPassword.first, {'attr': {'class': 'gui-input ','placeholder':\"Contraseña\"}}) }}

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.plainPassword.second, {'attr': {'class': 'gui-input ','placeholder':\"Repetir contraseña\"}}) }}

                            </label>
                          </div>
                        </div>

                        

                        
                      
                      </div>



                      
                          <button type=\"submit\" class=\"btn btn-success\">{{ button_label|default('Guardar') }}</button>

 

\t\t        </div>
{{ form_end(form) }} 

</div>
</div>
</div>

</div>", "user/_perfilform.html.twig", "/var/www/html/access/templates/user/_perfilform.html.twig");
    }
}
