<?php

/* movimientos_almacen/inventario.html.twig */
class __TwigTemplate_377d33d7ca93bc2702dd9aad25721b4d890d00c491aeb1fccf857601aef06df7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "movimientos_almacen/inventario.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form-ui", "target" => "_blank")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-6\">
                          <div class=\"section\">
                          \t<label class=\"field\">Desde</label>
                            <label class=\"field\">
                              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "desde", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker", "placeholder" => "Desde")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-6\">
                          <div class=\"section\">
                          \t<label class=\"field\">Hasta</label>
                            <label class=\"field\">
                               ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hasta", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker", "placeholder" => "Hasta")));
        echo "

                          </div>
                        </div>


                      </div>
                 
                     
                      
                          <button type=\"submit\" class=\"btn btn-success\" style=\"display: block;margin: auto;\">Visualizar</button>


 

";
        // line 41
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
        return "movimientos_almacen/inventario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 41,  65 => 26,  53 => 17,  43 => 10,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_almacen/inventario.html.twig", "/var/www/html/access/templates/movimientos_almacen/inventario.html.twig");
    }
}
