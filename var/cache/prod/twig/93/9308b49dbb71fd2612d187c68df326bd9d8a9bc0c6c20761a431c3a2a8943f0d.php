<?php

/* clientes/_form.html.twig */
class __TwigTemplate_1dc4679b66ae67217ba677d795a8ce7bc45800859d2cb339f08ed1827a6c2438 extends Twig_Template
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
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Nombre de cliente")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nit", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "NIT")));
        echo "

                          </div>
                        </div>


  \t\t\t\t\t\t<div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contactoPrincipal", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Contacto principal")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Correo")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "Fecha de nacimiento")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "IdUsuario", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono movil")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dpto", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Departamento")));
        echo "

                            </label>
                          </div>
                        </div>


                         <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "municipio", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Municipio")));
        echo "

                            </label>
                          </div>
                        </div>


\t\t\t\t\t<div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zona", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Zona")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefonoLocal", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono local")));
        echo "

                            </label>
                          </div>
                        </div>

                           <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefonoMovil", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono movil")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "direccion", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Direccion")));
        echo "

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "comentarios")));
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
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 161
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
        return "clientes/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 161,  218 => 156,  206 => 147,  194 => 138,  178 => 125,  166 => 116,  150 => 103,  137 => 93,  124 => 83,  109 => 71,  94 => 59,  82 => 50,  65 => 36,  53 => 27,  42 => 19,  33 => 13,  23 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "clientes/_form.html.twig", "/var/www/html/access/templates/clientes/_form.html.twig");
    }
}
