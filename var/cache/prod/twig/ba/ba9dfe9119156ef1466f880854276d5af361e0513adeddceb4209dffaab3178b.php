<?php

/* ingresos/_form.html.twig */
class __TwigTemplate_d4edda41dce30977b3aa08f74d0b9977eb2cdc5134f23f7f9d79fb31802a2809 extends Twig_Template
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
        // line 5
        echo "

<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>


   <div class=\"row\">
                      

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "productos", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Correo")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "proveedor", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Fecha de nacimiento")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Almacen", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono movil")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cantidad", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Cantidad de producto")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fecha", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "Fecha")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comentario", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Comentarios")));
        echo "

                            </label>
                          </div>
                        </div>
                   </div>

                      

                      

                      
                     
                          <button class=\"btn btn-success\">";
        // line 91
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Ingresar productos")) : ("Ingresar productos")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 96
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
        return "ingresos/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 96,  132 => 91,  116 => 78,  99 => 64,  88 => 56,  73 => 44,  58 => 32,  46 => 23,  33 => 13,  23 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ingresos/_form.html.twig", "/var/www/html/access/templates/ingresos/_form.html.twig");
    }
}
