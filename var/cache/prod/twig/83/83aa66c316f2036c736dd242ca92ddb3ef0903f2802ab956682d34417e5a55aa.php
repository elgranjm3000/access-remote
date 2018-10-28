<?php

/* facturas/_form.html.twig */
class __TwigTemplate_4a7ad0749f877c5aaca3e3c5619a31f3bdd015abe1af4b8471bd28f0990df56f extends Twig_Template
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
";
        // line 6
        echo "

<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "

  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idclientesrelacion", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "RECIBO CAJA", "value" => ($context["cliente"] ?? null))));
        echo "

                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reciboCaja", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "RECIBO CAJA")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ordenCompra", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "ORDEN DE COMPRA")));
        echo "

                          </div>
                        </div>


  \t\t\t\t\t\t<div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fecha", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "FECHA")));
        echo "

                            </label>
                          </div>
                        </div>

                      </div>

                      <div class=\"row\">
                            <div class=\"col-md-6\">
                          <div class=\"section\">
                            <label class=\"field\">
                              Forma de pago
                                  ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "forma", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "forma de pago")));
        echo "
                              ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dias", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "fecha")));
        echo "

                            </label>
                          </div>
                        </div>
                      </div>

                <div class=\"row\">
                          <div class=\"col-md-12\">
                            <div class=\"section\">
                              <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\" title=\"Incluir productos de su preferencia\">
                                  <span class=\" fa fa-plus-square-o\" aria-hidden=\"true\"></span> Agregar Productos
                                </button>
                                <label class=\"btn btn-danger totales animated animated-short fadeInUp\" >Total: 0</label>
                                <table class=\"table footable\" id=\"data\">
                                  <thead>
                                        <tr>
                                          <th>Producto</th>
                                          <th>Cantidad</th>
                                          <th>Precio</th>
                                          <th>Descuento %</th>
                                          <th>Sub-Total</th>
                                          <th>Orden de Produccion</th>
                                          <th>Comentarios</th>
                                          <th>Accion</th>                                          
                                        </tr>
                                  </thead>
                                  <tbody>
                                    ";
        // line 82
        if ((isset($context["productosfacturados"]) || array_key_exists("productosfacturados", $context))) {
            // line 83
            echo "                                          
                                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productosfacturados"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
                // line 85
                echo "                                            <tr>
                                              <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "nombre", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value='";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "id", array()), "html", null, true);
                echo "' name=\"productos[]\">

                                                <input type=\"hidden\" value='";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "id", array()), "html", null, true);
                echo "' name=\"'idproducto[]\" class=\"idproducto\">
                                              </td>
                                              <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "\" name=\"cantidad[]\"></td>
                                              <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "<input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "\" name=\"precio[]\"></td>
                                               <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "descuento", array()), "html", null, true);
                echo " <input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "descuento", array()), "html", null, true);
                echo "\" name=\"descuento[]\"></td>
                                              <td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "</td>
                                              <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "\" name=\"total[]\">
                                                <input type=\"hidden\" value=\"";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "\" name=\"promocion[]\"></td>
                                              <td>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "\" name=\"comentarios[]\"></td>
                                              <td><button type='button' class='btn btn-simple btn-danger btn-icon remove' title='Cancelar pedido'><span class='fa fa-remove'></span></button></td>
                                            </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                                          
                                    ";
        }
        // line 106
        echo "                                  </tbody>
                                </table>
                          </div>  
                          </div>
                      </div>


                      <div class=\"row\">
                      \t\t<div class=\"col-md-12\">
                      \t\t\t<div class=\"section\">
                            \t\t<label class=\"field\">
                              \t\t";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "COMENTARIOS")));
        echo "
                            \t\t</label>
                          </div>\t
                      \t\t</div>
                      </div>
                      
                      \t\t 
                      
                          <button class=\"btn btn-success\">";
        // line 125
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

\t\t        
";
        // line 128
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
        // line 146
        echo "
        ";
        // line 147
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form1"] ?? null), 'form_start', array("attr" => array("class" => "pedidos")));
        echo "

      <div class=\"form-group\">
          ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "idproducto", array()), 'widget', array("attr" => array("class" => "gui-input producto form-control", "placeholder" => "COMENTARIOS")));
        echo "

        </div>

        <div class=\"form-group\">

          ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "cantidad", array()), 'widget', array("attr" => array("class" => "gui-input cantidad", "placeholder" => "Cantidad de producto")));
        echo "
        </div>
      <div class=\"form-group\">
          ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "ordenPromocion", array()), 'widget', array("attr" => array("class" => "gui-input promocion", "placeholder" => "Orden Promocion")));
        echo "

      </div>

<div class=\"form-group\">
          ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input comentarios", "placeholder" => "Comentarios")));
        echo "
  </div>

  <div class=\"form-group\">
  <label>Precio de venta</label>  
          ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "precio", array()), 'widget', array("attr" => array("class" => "gui-input precio", "placeholder" => "Precio", "disabled" => "disabled")));
        echo "
  </div>

<div class=\"form-group\">
  <label>Descuento %</label>
          ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "descuento", array()), 'widget', array("attr" => array("class" => "gui-input descuento", "placeholder" => "Descuento", "disabled" => "disabled")));
        echo "
  </div>


<div class=\"form-group\">
  <label>Sub-Total</label>
          ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form1"] ?? null), "total", array()), 'widget', array("attr" => array("class" => "gui-input total", "placeholder" => "Sub-Total", "disabled" => "disabled")));
        echo "
  </div>




    
";
        // line 187
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form1"] ?? null), 'form_end');
        echo "

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary cerramodal\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary ingresar\">Agregar a factura</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "facturas/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 187,  309 => 180,  300 => 174,  292 => 169,  284 => 164,  276 => 159,  270 => 156,  261 => 150,  255 => 147,  252 => 146,  235 => 128,  229 => 125,  218 => 117,  205 => 106,  201 => 104,  191 => 100,  187 => 99,  183 => 98,  179 => 97,  175 => 96,  171 => 95,  165 => 94,  159 => 93,  155 => 92,  151 => 91,  146 => 89,  141 => 87,  137 => 86,  134 => 85,  130 => 84,  127 => 83,  125 => 82,  94 => 54,  90 => 53,  74 => 40,  62 => 31,  51 => 23,  41 => 16,  36 => 14,  26 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "facturas/_form.html.twig", "/var/www/html/access/templates/facturas/_form.html.twig");
    }
}
