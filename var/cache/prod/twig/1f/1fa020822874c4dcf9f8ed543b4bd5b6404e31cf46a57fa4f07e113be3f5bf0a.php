<?php

/* productos/_form.html.twig */
class __TwigTemplate_deba6e12a86bf06f134dec914d2b4d8e7beb2b13872114327e7593de1abab5f3 extends Twig_Template
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
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-8\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Nombre de producto")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idmedidas", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Unidad/Medidas")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "costo", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Costo")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "precioVenta", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Precio de venta")));
        echo "

                          </div>
                        </div>


                          <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cantidadPresentacion", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Cantidad de presentacion")));
        echo "

                            </label>
                          </div>
                        </div>


                          <div class=\"col-md-3\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idfamilia", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Familia")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Comentarios")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "brochure", array()), 'widget', array("attr" => array("class" => "gui-input filearchivo", "placeholder" => "Imagen de producto", "onchange" => "loadFile(event)")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-6\">

                          <img id=\"output\" class=\"img-responsive\" ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "brochure", array()) != "")) {
            echo " src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "brochure", array()), "html", null, true);
            echo "\" ";
        }
        echo "/>

                        </div>
                        
                      </div>

                      
                          <button type=\"submit\" class=\"btn btn-success\">";
        // line 98
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  166 => 103,  158 => 98,  142 => 91,  132 => 84,  117 => 72,  103 => 61,  90 => 51,  78 => 42,  67 => 34,  53 => 23,  42 => 15,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "productos/_form.html.twig", "/var/www/html/access/templates/productos/_form.html.twig");
    }
}
