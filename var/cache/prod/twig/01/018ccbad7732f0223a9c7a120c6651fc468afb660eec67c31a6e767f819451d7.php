<?php

/* proveedores/_form.html.twig */
class __TwigTemplate_4c61fdbabcd8099c1b48abcd7e407d66d3c1a8b344bb443686bed0a30e975f0a extends Twig_Template
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
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-8\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombreEmpresa", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Nombre de empresa")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contacto", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Contacto")));
        echo "

                          </div>
                        </div>
                      </div>

                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefonoMovil", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono Movil")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefonoOfic", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono de Oficina")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefonoParticular", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Telefono Particular")));
        echo "

                            </label>
                          </div>
                        </div>
                      
                      </div>
                          <button type=\"submit\" class=\"btn btn-success\">";
        // line 57
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo " 

</div>
</div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "proveedores/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 62,  99 => 57,  89 => 50,  77 => 41,  65 => 32,  52 => 22,  41 => 14,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "proveedores/_form.html.twig", "/var/www/html/access/templates/proveedores/_form.html.twig");
    }
}
