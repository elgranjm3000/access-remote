<?php

/* ingresos/_form.html.twig */
class __TwigTemplate_0cedcf6082e6dbdd4eb6fd387cf76bd471773ab880648e4a4db97d4cc33f7cd1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingresos/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingresos/_form.html.twig"));

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


   <div class=\"row\">
                      

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "productos", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Correo")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "proveedor", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Fecha de nacimiento")));
        echo "

                            </label>
                          </div>
                        </div>

 \t\t\t\t


                          <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "Almacen", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono movil")));
        echo "

                            </label>
                          </div>
                        </div>
                      
                      </div>

\t\t        \t <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "cantidad", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Cantidad de producto")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "fecha", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "Fecha")));
        echo "

                          </div>
                        </div>


  \t\t\t\t\t\t

                      </div>

                   <div class=\"row\">
                   \t<div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "comentario", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Comentarios")));
        echo "

                            </label>
                          </div>
                        </div>
                   </div>

                      

                      

                      
                     
                          <button class=\"btn btn-success\">";
        // line 91
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 91, $this->source); })()), "Ingresar productos")) : ("Ingresar productos")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->source); })()), 'form_end');
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
        return "ingresos/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 96,  138 => 91,  122 => 78,  105 => 64,  94 => 56,  79 => 44,  64 => 32,  52 => 23,  39 => 13,  29 => 5,);
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


   <div class=\"row\">
                      

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.productos, {'attr': {'class': 'gui-input','placeholder':\"Correo\"}}) }}

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.proveedor, {'attr': {'class': 'gui-input','placeholder':\"Fecha de nacimiento\"}}) }}

                            </label>
                          </div>
                        </div>

 \t\t\t\t


                          <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.Almacen, {'attr': {'class': 'gui-input','placeholder':\"Telefono movil\"}}) }}

                            </label>
                          </div>
                        </div>
                      
                      </div>

\t\t        \t <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.cantidad, {'attr': {'class': 'gui-input','placeholder':\"Cantidad de producto\"}}) }}

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                               {{ form_widget(form.fecha, {'attr': {'class': 'gui-input js-datepicker','placeholder':'Fecha'}}) }}

                          </div>
                        </div>


  \t\t\t\t\t\t

                      </div>

                   <div class=\"row\">
                   \t<div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.comentario, {'attr': {'class': 'gui-input','placeholder':\"Comentarios\"}}) }}

                            </label>
                          </div>
                        </div>
                   </div>

                      

                      

                      
                     
                          <button class=\"btn btn-success\">{{ button_label|default('Ingresar productos') }}</button>

 

\t\t        </div>
{{ form_end(form) }} 

</div>
</div>
</div>

</div>

", "ingresos/_form.html.twig", "/var/www/html/access/templates/ingresos/_form.html.twig");
    }
}
