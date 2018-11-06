<?php

/* ensamble/_form.html.twig */
class __TwigTemplate_9e24b7bb2cd2c7706d7c747cc5f28cdcf9df45ee93728f450695d7f48e39e2ac extends Twig_Template
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
                            <label class=\"field\"><b>Precio de venta</b>
                               ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "precioVenta", array()), 'widget', array("attr" => array("class" => "gui-input precioventa", "placeholder" => "Precio de venta", "readonly" => "readonly")));
        echo "

                          </div>
                        </div>
                      </div>

 <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\" title=\"Incluir productos de su preferencia\">
                                  <span class=\" fa fa-plus-square-o\" aria-hidden=\"true\"></span> Agregar Productos a ensamblar
                                </button>
<table class=\"table footable\">
  <thead>
      <th>Producto</th>
      <th>Cantidad</th>
      <th>Precio de venta</th>
      <th>Sub-Total</th>
      <th>Accion</th>
  </thead>
  <tbody>
    ";
        // line 42
        if ((isset($context["ensambleslistado"]) || array_key_exists("ensambleslistado", $context))) {
            // line 43
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ensambleslistado"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ensambles"]) {
                // line 44
                echo "      <tr>
          <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ensambles"], "productoadd", array()), "nombre", array()), "html", null, true);
                echo "
              <input type=\"hidden\" value='";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ensambles"], "productoadd", array()), "id", array()), "html", null, true);
                echo "' name=\"productos[]\">
              <input type=\"hidden\" value='";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "cantidad", array()), "html", null, true);
                echo "' name=\"cantidad[]\">
               <input type=\"hidden\" value='";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "subtotal", array()), "html", null, true);
                echo "' name=\"subtotal[]\">
               <input type=\"hidden\" value='";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "monto", array()), "html", null, true);
                echo "' name=\"precio[]\">
               <input type=\"hidden\" value='";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "id", array()), "html", null, true);
                echo "' name=\"idensamble[]\" class=\"idensamble\">
          </td>
          <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "cantidad", array()), "html", null, true);
                echo "                         
          </td>
          <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "monto", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "subtotal", array()), "html", null, true);
                echo "</td>          
             <td><button type='button' class='btn btn-simple btn-danger btn-icon remove' title='Cancelar pedido'><span class='fa fa-remove'></span></button></td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ensambles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    ";
        }
        // line 60
        echo "  </tbody>
</table> 
  

                      <div class=\"row\">
                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\"><b>Escriba aqui sus comentarios</b>
                              ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Comentarios")));
        echo "

                            </label>
                          </div>
                        </div>
                        
                      </div>

                  

                      
                          <button type=\"submit\" class=\"btn btn-success\">";
        // line 79
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "




<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\"  role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Carga de Productos</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
";
        // line 104
        echo "
        ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form1"] ?? null), 'form_start', array("attr" => array("class" => "ensamble")));
        echo "

      <div class=\"form-group\">
          ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "idproducto", array()), 'widget', array("attr" => array("class" => "gui-input producto form-control", "placeholder" => "COMENTARIOS")));
        echo "

        </div>

        <div class=\"form-group\">

          ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "cantidad", array()), 'widget', array("attr" => array("class" => "gui-input cantidad", "placeholder" => "Cantidad de producto")));
        echo "
        </div>
      <div class=\"form-group\">
          ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "monto", array()), 'widget', array("attr" => array("class" => "gui-input monto", "placeholder" => "Monto", "readonly" => "readonly")));
        echo "

      </div>



<div class=\"form-group\">
          ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "subtotal", array()), 'widget', array("attr" => array("class" => "gui-input subtotal", "placeholder" => "subtotal", "readonly" => "readonly")));
        echo "
  </div>


    
";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form1"] ?? null), 'form_end');
        echo "

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary cerramodal\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary ingresar\">Agregar Ensamble</button>
      </div>
    </div>
  </div>
</div>



</div>
</div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "ensamble/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 129,  217 => 124,  207 => 117,  201 => 114,  192 => 108,  186 => 105,  183 => 104,  164 => 84,  156 => 79,  142 => 68,  132 => 60,  129 => 59,  119 => 55,  115 => 54,  110 => 52,  105 => 50,  101 => 49,  97 => 48,  93 => 47,  89 => 46,  85 => 45,  82 => 44,  77 => 43,  75 => 42,  54 => 24,  42 => 15,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ensamble/_form.html.twig", "/var/www/html/access/templates/ensamble/_form.html.twig");
    }
}
