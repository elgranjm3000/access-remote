<?php

/* movimientos_almacen/_form.html.twig */
class __TwigTemplate_1af6dc24652f7a678f31591a45b897205ff58f5f2c504ece9c08f071267666b3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                          \t<label class=\"field\">Seleccione el Producto</label>
                            <label class=\"field\">
                              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "IdProducto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Producto")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cantidad")));
        echo "

                          </div>
                        </div>


                        <div class=\"col-md-4\">
                          <div class=\"section\">
                          \t<label>Seleccione el Almacen Origen</label>
                            <label class=\"field\">
                               ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Origen", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Almacen de Origen")));
        echo "

                          </div>
                        </div>
                      </div>
                 <div class=\"row\">
                   \t<div class=\"col-md-6\">
                          <div class=\"section\">
                          \t<label>Fecha</label>
                            <label class=\"field\">
                              ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Fecha", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "FECHA")));
        echo "

                            </label>
                          </div>
                        </div>
                     
                     <div class=\"col-md-6\">
                      <div class=\"section\">
                      \t<label>Almacen de Destino</label>
                        <label class=\"field\">
                          ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Destino", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                       </label>
                       </div>
                    </div>    
\t\t\t\t\t
                   
                    <div class=\"row\">
                  <div class=\"col-md-12\">

                    \t <div class=\"section\">
                      \t<label>Comentarios</label>
                        <label class=\"field\">
                          ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Comentarios", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                       </label>
                       </div>
                   </div>
                    </div>
\t\t\t\t</div>
                     
                      
                          <button type=\"submit\" class=\"btn btn-success\" style=\"display: block;margin: auto;\">";
        // line 78
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>
";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Status", array()), 'widget', array("attr" => array("hidden" => "hidden")));
        echo "
";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "IdCliente", array()), 'widget', array("attr" => array("hidden" => "hidden")));
        echo "

 

";
        // line 84
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
        return "movimientos_almacen/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 84,  140 => 80,  136 => 79,  132 => 78,  120 => 69,  104 => 56,  91 => 46,  78 => 36,  65 => 26,  53 => 17,  43 => 10,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_almacen/_form.html.twig", "/var/www/html/access/templates/movimientos_almacen/_form.html.twig");
    }
}
