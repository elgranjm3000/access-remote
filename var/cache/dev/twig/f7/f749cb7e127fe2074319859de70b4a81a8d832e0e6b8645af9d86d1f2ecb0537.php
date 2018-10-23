<?php

/* productos/_form.html.twig */
class __TwigTemplate_e2224713a50d33b286bacea039a54867793aa5ec11cf068dced3169ef04c7a22 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/_form.html.twig"));

        // line 1
        echo "

<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-8\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "nombre", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Nombre de producto")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "idmedidas", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Unidad/Medidas")));
        echo "

                          </div>
                        </div>
                      </div>


                      <div class=\"row\">
                      <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "costo", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Costo")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "precioVenta", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Precio de venta")));
        echo "

                          </div>
                        </div>


                          <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "cantidadPresentacion", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Cantidad de presentacion")));
        echo "

                            </label>
                          </div>
                        </div>


                          <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "idfamilia", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Familia")));
        echo "

                            </label>
                          </div>
                        </div>
                      </div>

                      <div class=\"row\">
                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Comentarios")));
        echo "

                            </label>
                          </div>
                        </div>
                        
                      </div>

                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">Imagen del Producto
                              ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "brochure", array()), 'widget', array("attr" => array("class" => "gui-input filearchivo", "placeholder" => "Imagen de producto", "onchange" => "loadFile(event)")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-6\">

                          <img id=\"output\" class=\"img-responsive\" ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 91, $this->source); })()), "brochure", array()) != "")) {
            echo " src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new Twig_Error_Runtime('Variable "producto" does not exist.', 91, $this->source); })()), "brochure", array()), "html", null, true);
            echo "\" ";
        }
        echo "/>

                        </div>
                        
                      </div>

                      
                          <button type=\"submit\" class=\"btn btn-success\">";
        // line 98
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 98, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo " 


<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
</div>
</div>
</div>

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "productos/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 103,  164 => 98,  148 => 91,  138 => 84,  123 => 72,  109 => 61,  96 => 51,  84 => 42,  73 => 34,  59 => 23,  48 => 15,  39 => 9,  29 => 1,);
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
                        <div class=\"col-md-8\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.nombre, {'attr': {'class': 'gui-input','placeholder':\"Nombre de producto\"}}) }}

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               {{ form_widget(form.idmedidas, {'attr': {'class': 'gui-input','placeholder':'Unidad/Medidas'}}) }}

                          </div>
                        </div>
                      </div>


                      <div class=\"row\">
                      <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.costo, {'attr': {'class': 'gui-input','placeholder':\"Costo\"}}) }}

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                               {{ form_widget(form.precioVenta, {'attr': {'class': 'gui-input','placeholder':'Precio de venta'}}) }}

                          </div>
                        </div>


                          <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.cantidadPresentacion, {'attr': {'class': 'gui-input','placeholder':\"Cantidad de presentacion\"}}) }}

                            </label>
                          </div>
                        </div>


                          <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.idfamilia, {'attr': {'class': 'gui-input','placeholder':\"Familia\"}}) }}

                            </label>
                          </div>
                        </div>
                      </div>

                      <div class=\"row\">
                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.comentarios, {'attr': {'class': 'gui-input','placeholder':\"Comentarios\"}}) }}

                            </label>
                          </div>
                        </div>
                        
                      </div>

                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">Imagen del Producto
                              {{ form_widget(form.brochure, {'attr': {'class': 'gui-input filearchivo','placeholder':\"Imagen de producto\",\"onchange\":\"loadFile(event)\" }}) }}

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-6\">

                          <img id=\"output\" class=\"img-responsive\" {% if producto.brochure != \"\" %} src=\"{{ asset('uploads/brochures') }}/{{producto.brochure}}\" {% endif %}/>

                        </div>
                        
                      </div>

                      
                          <button type=\"submit\" class=\"btn btn-success\">{{ button_label|default('Guardar') }}</button>

 

\t\t        </div>
{{ form_end(form) }} 


<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
</div>
</div>
</div>

</div>", "productos/_form.html.twig", "C:\\xampp\\htdocs\\access\\templates\\productos\\_form.html.twig");
    }
}
