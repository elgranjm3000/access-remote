<?php

/* movimientos_almacen/_form.html.twig */
class __TwigTemplate_301a97c84f1690042059861967652e48c1f0698b6e8943983cafc0c3942d7ef7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "movimientos_almacen/_form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_almacen/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_almacen/_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                          \t<label class=\"field\">Seleccione el Producto</label>
                            <label class=\"field\">
                              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "IdProducto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Producto")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                          \t<label class=\"field\">Cantidad</label>
                            <label class=\"field\">
                               ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "Cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cantidad")));
        echo "

                          </div>
                        </div>


                        <div class=\"col-md-4\">
                          <div class=\"section\">
                          \t<label>Seleccione el Almacen Origen</label>
                            <label class=\"field\">
                               ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "Origen", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Almacen de Origen")));
        echo "

                          </div>
                        </div>
                      </div>
                 <div class=\"row\">
                    <div class=\"col-md-4\">
                      <div class=\"section\">

                        <label class=\"field\">
                          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "Fecha", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker")));
        echo "

                       </label>
                       </div>
                    </div>
                  <div class=\"col-md-4\">
                      <div class=\"section\">
                      \t<label>Comentarios</label>
                        <label class=\"field\">
                          ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "Comentarios", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                       </label>
                       </div>
                    </div>
                     <div class=\"col-md-4\">
                      <div class=\"section\">
                      \t<label>Almacen de Destino</label>
                        <label class=\"field\">
                          ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "Destino", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                       </label>
                       </div>
                    </div>    
\t\t\t\t\t
                   
                    
\t\t\t\t</div>
                     
                      
                          <button type=\"submit\" class=\"btn btn-success\" style=\"display: block;margin: auto;\">";
        // line 75
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 75, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "Status", array()), 'widget', array("attr" => array("hidden" => "hidden")));
        echo "
";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "IdCliente", array()), 'widget', array("attr" => array("hidden" => "hidden")));
        echo "

 

";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo " 


</div>
</div>
</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movimientos_almacen/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 81,  155 => 77,  151 => 76,  147 => 75,  133 => 64,  121 => 55,  109 => 46,  96 => 36,  83 => 26,  71 => 17,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block body %}
<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 {{ form_start(form, {'attr': {'id': 'form-ui'}}) }}
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                          \t<label class=\"field\">Seleccione el Producto</label>
                            <label class=\"field\">
                              {{ form_widget(form.IdProducto, {'attr': {'class': 'form-control','placeholder':\"Producto\"}}) }}

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                          \t<label class=\"field\">Cantidad</label>
                            <label class=\"field\">
                               {{ form_widget(form.Cantidad, {'attr': {'class': 'form-control','placeholder':'Cantidad'}}) }}

                          </div>
                        </div>


                        <div class=\"col-md-4\">
                          <div class=\"section\">
                          \t<label>Seleccione el Almacen Origen</label>
                            <label class=\"field\">
                               {{ form_widget(form.Origen, {'attr': {'class': 'form-control','placeholder':'Almacen de Origen'}}) }}

                          </div>
                        </div>
                      </div>
                 <div class=\"row\">
                    <div class=\"col-md-4\">
                      <div class=\"section\">

                        <label class=\"field\">
                          {{ form_widget(form.Fecha, {'attr': {'class': 'gui-input js-datepicker'}}) }}

                       </label>
                       </div>
                    </div>
                  <div class=\"col-md-4\">
                      <div class=\"section\">
                      \t<label>Comentarios</label>
                        <label class=\"field\">
                          {{ form_widget(form.Comentarios, {'attr': {'class': 'form-control'}}) }}

                       </label>
                       </div>
                    </div>
                     <div class=\"col-md-4\">
                      <div class=\"section\">
                      \t<label>Almacen de Destino</label>
                        <label class=\"field\">
                          {{ form_widget(form.Destino, {'attr': {'class': 'form-control'}}) }}

                       </label>
                       </div>
                    </div>    
\t\t\t\t\t
                   
                    
\t\t\t\t</div>
                     
                      
                          <button type=\"submit\" class=\"btn btn-success\" style=\"display: block;margin: auto;\">{{ button_label|default('Guardar') }}</button>
{{ form_widget(form.Status, {'attr': {hidden:'hidden'}}) }}
{{ form_widget(form.IdCliente, {'attr': {hidden:'hidden'}}) }}

 

{{ form_end(form) }} 


</div>
</div>
</div>

</div>
{% endblock %}", "movimientos_almacen/_form.html.twig", "C:\\xampp\\htdocs\\access\\templates\\movimientos_almacen\\_form.html.twig");
    }
}
