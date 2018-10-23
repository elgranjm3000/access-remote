<?php

/* clientes/_form.html.twig */
class __TwigTemplate_5cc8badab2e0d026ad89fa61c3aad1ae8e99d882a6c39bc6e41154277e565096 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/_form.html.twig"));

        // line 5
        echo "

<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "nombre", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Nombre de cliente")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "nit", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "NIT")));
        echo "

                          </div>
                        </div>


  \t\t\t\t\t\t<div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "contactoPrincipal", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Contacto principal")));
        echo "

                            </label>
                          </div>
                        </div>

                      </div>

                      <div class=\"row\">
                      

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "correo", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Correo")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "Fecha de nacimiento")));
        echo "

                            </label>
                          </div>
                        </div>

 \t\t\t\t


                          <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "IdUsuario", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono movil")));
        echo "

                            </label>
                          </div>
                        </div>
                      
                      </div>

                      <div class=\"row\">
                      \t\t <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "dpto", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Departamento")));
        echo "

                            </label>
                          </div>
                        </div>


                         <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), "municipio", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Municipio")));
        echo "

                            </label>
                          </div>
                        </div>


\t\t\t\t\t<div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->source); })()), "zona", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Zona")));
        echo "

                            </label>
                          </div>
                        </div>

                      
                      </div>

                      <div class=\"row\">
                      \t\t <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->source); })()), "telefonoLocal", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono local")));
        echo "

                            </label>
                          </div>
                        </div>

                           <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 125, $this->source); })()), "telefonoMovil", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono movil")));
        echo "

                            </label>
                          </div>
                        </div>

                       
                      </div>

                      <div class=\"row\">
                      \t  <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->source); })()), "direccion", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Direccion")));
        echo "

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->source); })()), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "comentarios")));
        echo "

                            </label>
                          </div>
                        </div>
                      </div>
                      <div class=\"row\">
                      \t\t 
                      </div>
                          <button class=\"btn btn-success\">";
        // line 156
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 156, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 161
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->source); })()), 'form_end');
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
        return "clientes/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 161,  224 => 156,  212 => 147,  200 => 138,  184 => 125,  172 => 116,  156 => 103,  143 => 93,  130 => 83,  115 => 71,  100 => 59,  88 => 50,  71 => 36,  59 => 27,  48 => 19,  39 => 13,  29 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{{ form_start(form) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}#}


<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 {{ form_start(form, {'attr': {'id': 'form-ui'}}) }}
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.nombre, {'attr': {'class': 'gui-input','placeholder':\"Nombre de cliente\"}}) }}

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               {{ form_widget(form.nit, {'attr': {'class': 'gui-input','placeholder':'NIT'}}) }}

                          </div>
                        </div>


  \t\t\t\t\t\t<div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.contactoPrincipal, {'attr': {'class': 'gui-input','placeholder':\"Contacto principal\"}}) }}

                            </label>
                          </div>
                        </div>

                      </div>

                      <div class=\"row\">
                      

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.correo, {'attr': {'class': 'gui-input','placeholder':\"Correo\"}}) }}

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.fechaNacimiento, {'attr': {'class': 'gui-input js-datepicker','placeholder':\"Fecha de nacimiento\"}}) }}

                            </label>
                          </div>
                        </div>

 \t\t\t\t


                          <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.IdUsuario, {'attr': {'class': 'gui-input','placeholder':\"Telefono movil\"}}) }}

                            </label>
                          </div>
                        </div>
                      
                      </div>

                      <div class=\"row\">
                      \t\t <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.dpto, {'attr': {'class': 'gui-input','placeholder':\"Departamento\"}}) }}

                            </label>
                          </div>
                        </div>


                         <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.municipio, {'attr': {'class': 'gui-input','placeholder':\"Municipio\"}}) }}

                            </label>
                          </div>
                        </div>


\t\t\t\t\t<div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.zona, {'attr': {'class': 'gui-input','placeholder':\"Zona\"}}) }}

                            </label>
                          </div>
                        </div>

                      
                      </div>

                      <div class=\"row\">
                      \t\t <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.telefonoLocal, {'attr': {'class': 'gui-input','placeholder':\"Telefono local\"}}) }}

                            </label>
                          </div>
                        </div>

                           <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.telefonoMovil, {'attr': {'class': 'gui-input','placeholder':\"Telefono movil\"}}) }}

                            </label>
                          </div>
                        </div>

                       
                      </div>

                      <div class=\"row\">
                      \t  <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.direccion, {'attr': {'class': 'gui-input','placeholder':\"Direccion\"}}) }}

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.comentarios, {'attr': {'class': 'gui-input','placeholder':\"comentarios\"}}) }}

                            </label>
                          </div>
                        </div>
                      </div>
                      <div class=\"row\">
                      \t\t 
                      </div>
                          <button class=\"btn btn-success\">{{ button_label|default('Guardar') }}</button>

 

\t\t        </div>
{{ form_end(form) }} 

</div>
</div>
</div>

</div>
", "clientes/_form.html.twig", "/var/www/html/access/templates/clientes/_form.html.twig");
    }
}
