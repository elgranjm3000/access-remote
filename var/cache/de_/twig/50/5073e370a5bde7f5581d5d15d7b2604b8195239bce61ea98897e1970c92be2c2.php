<?php

/* user/_perfilform.html.twig */
class __TwigTemplate_2476302aafec0cc5a8da0c45f98fa7abb351b26378db31bb42e6e1c31e813dee extends Twig_Template
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
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), array(0 => "form/fields.html.twig"), true);
        // line 10
        echo "
 ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">


<div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "dpi", array()), 'row', array("attr" => array("class" => "gui-input", "placeholder" => "DPI")));
        echo "

                            </label>
                          </div>
                        </div>


                             <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "email", array()), 'row', array("attr" => array("class" => "gui-input", "placeholder" => "DPI")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "telefono", array()), 'row', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono")));
        echo "

                            </label>
                          </div>
                        </div>
                        
                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "direccion", array()), 'row', array("attr" => array("class" => "gui-input", "placeholder" => "Direccion")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "contactoEmergencia", array()), 'row', array("attr" => array("class" => "gui-input", "placeholder" => "Contacto emergencia")));
        echo "

                            </label>
                          </div>
                        </div>
                        

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "gui-input ", "placeholder" => "Contraseña")));
        echo "

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "gui-input ", "placeholder" => "Repetir contraseña")));
        echo "

                            </label>
                          </div>
                        </div>

                        

                        
                      
                      </div>



                      
                          <button type=\"submit\" class=\"btn btn-success\">";
        // line 90
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 90, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
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
        return array (  155 => 95,  147 => 90,  129 => 75,  117 => 66,  104 => 56,  92 => 47,  80 => 38,  68 => 29,  55 => 19,  44 => 11,  41 => 10,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("


<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">

{% form_theme form 'form/fields.html.twig' %}

 {{ form_start(form, {'attr': {'id': 'form-ui'}}) }}
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">


<div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_row(form.dpi, {'attr': {'class': 'gui-input','placeholder':\"DPI\"}}) }}

                            </label>
                          </div>
                        </div>


                             <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_row(form.email, {'attr': {'class': 'gui-input','placeholder':\"DPI\"}}) }}

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_row(form.telefono, {'attr': {'class': 'gui-input','placeholder':\"Telefono\"}}) }}

                            </label>
                          </div>
                        </div>
                        
                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_row(form.direccion, {'attr': {'class': 'gui-input','placeholder':\"Direccion\"}}) }}

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_row(form.contactoEmergencia, {'attr': {'class': 'gui-input','placeholder':\"Contacto emergencia\"}}) }}

                            </label>
                          </div>
                        </div>
                        

                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_row(form.plainPassword.first, {'attr': {'class': 'gui-input ','placeholder':\"Contraseña\"}}) }}

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_row(form.plainPassword.second, {'attr': {'class': 'gui-input ','placeholder':\"Repetir contraseña\"}}) }}

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

</div>", "user/_perfilform.html.twig", "C:\\xampp\\htdocs\\access\\templates\\user\\_perfilform.html.twig");
    }
}
