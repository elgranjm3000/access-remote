<?php

/* facturas/_form.html.twig */
class __TwigTemplate_2a5e9c95f04cd602edc269ea8f344f65b5d6889044f25b2d50301913bde41121 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/_form.html.twig"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "

  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "idclientesrelacion", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "RECIBO CAJA", "value" => (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 16, $this->source); })()))));
        echo "

                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">



                      <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "fecha", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "FECHA")));
        echo "

                            </label>
                          </div>
                        </div>


                      <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "numfactura", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "NUMERO DE FACTURA")));
        echo "

                            </label>
                          </div>
                        </div>




                      <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "serie", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "NUMERO DE FACTURA")));
        echo "

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "reciboCaja", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "RECIBO CAJA")));
        echo "

                            </label>
                          </div>
                        </div>


                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "forma", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "ORDEN DE COMPRA")));
        echo "

                          </div>
                        </div>

                        
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "ordenCompra", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "ORDEN DE COMPRA")));
        echo "

                          </div>
                        </div>


                          <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "dias", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "ORDEN DE COMPRA")));
        echo "

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
        // line 121
        if ((isset($context["productosfacturados"]) || array_key_exists("productosfacturados", $context))) {
            // line 122
            echo "                                          
                                            ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productosfacturados"]) || array_key_exists("productosfacturados", $context) ? $context["productosfacturados"] : (function () { throw new Twig_Error_Runtime('Variable "productosfacturados" does not exist.', 123, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
                // line 124
                echo "                                            <tr>
                                              <td>";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "nombre", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value='";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "id", array()), "html", null, true);
                echo "' name=\"productos[]\">

                                                <input type=\"hidden\" value='";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "id", array()), "html", null, true);
                echo "' name=\"'idproducto[]\" class=\"idproducto\">
                                              </td>
                                              <td>";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "\" name=\"cantidad[]\"></td>
                                              <td>";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "<input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "\" name=\"precio[]\"></td>
                                               <td>";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "descuento", array()), "html", null, true);
                echo " <input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "descuento", array()), "html", null, true);
                echo "\" name=\"descuento[]\"></td>
                                              <td>";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "</td>
                                              <td>";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "\" name=\"total[]\">
                                                <input type=\"hidden\" value=\"";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "\" name=\"promocion[]\"></td>
                                              <td>";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "\" name=\"comentarios[]\"></td>
                                              <td><button type='button' class='btn btn-simple btn-danger btn-icon remove' title='Cancelar pedido'><span class='fa fa-remove'></span></button></td>
                                            </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                                          
                                    ";
        }
        // line 145
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
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->source); })()), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "COMENTARIOS")));
        echo "
                            \t\t</label>
                          </div>\t
                      \t\t</div>
                      </div>
                      
                      \t\t 
                      
                          <button class=\"btn btn-success\">";
        // line 164
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 164, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

\t\t        
";
        // line 167
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->source); })()), 'form_end');
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
        // line 185
        echo "
        ";
        // line 186
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 186, $this->source); })()), 'form_start', array("attr" => array("class" => "pedidos")));
        echo "

      <div class=\"form-group\">
          ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 189, $this->source); })()), "idproducto", array()), 'widget', array("attr" => array("class" => "gui-input producto form-control", "placeholder" => "COMENTARIOS")));
        echo "

        </div>

        <div class=\"form-group\">

          ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 195, $this->source); })()), "cantidad", array()), 'widget', array("attr" => array("class" => "gui-input cantidad", "placeholder" => "Cantidad de producto")));
        echo "
        </div>
      <div class=\"form-group\">
          ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 198, $this->source); })()), "ordenPromocion", array()), 'widget', array("attr" => array("class" => "gui-input promocion", "placeholder" => "Orden Promocion")));
        echo "

      </div>

<div class=\"form-group\">
          ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 203, $this->source); })()), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input comentarios", "placeholder" => "Comentarios")));
        echo "
  </div>

  <div class=\"form-group\">
  <label>Precio de venta</label>  
          ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 208, $this->source); })()), "precio", array()), 'widget', array("attr" => array("class" => "gui-input precio", "placeholder" => "Precio", "disabled" => "disabled")));
        echo "
  </div>

<div class=\"form-group\">
  <label>Descuento %</label>
          ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 213, $this->source); })()), "descuento", array()), 'widget', array("attr" => array("class" => "gui-input descuento", "placeholder" => "Descuento", "disabled" => "disabled")));
        echo "
  </div>


<div class=\"form-group\">
  <label>Sub-Total</label>
          ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 219, $this->source); })()), "total", array()), 'widget', array("attr" => array("class" => "gui-input total", "placeholder" => "Sub-Total", "disabled" => "disabled")));
        echo "
  </div>




    
";
        // line 226
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 226, $this->source); })()), 'form_end');
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  370 => 226,  360 => 219,  351 => 213,  343 => 208,  335 => 203,  327 => 198,  321 => 195,  312 => 189,  306 => 186,  303 => 185,  286 => 167,  280 => 164,  269 => 156,  256 => 145,  252 => 143,  242 => 139,  238 => 138,  234 => 137,  230 => 136,  226 => 135,  222 => 134,  216 => 133,  210 => 132,  206 => 131,  202 => 130,  197 => 128,  192 => 126,  188 => 125,  185 => 124,  181 => 123,  178 => 122,  176 => 121,  137 => 85,  125 => 76,  113 => 67,  100 => 57,  88 => 48,  73 => 36,  60 => 26,  47 => 16,  42 => 14,  32 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{#{{ form_start(form) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}#}


<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 {{ form_start(form, {'attr': {'id': 'form-ui'}}) }}

  {{ form_widget(form.idclientesrelacion, {'attr': {'class': 'gui-input','placeholder':\"RECIBO CAJA\",'value': cliente }}) }}

                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">



                      <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.fecha, {'attr': {'class': 'gui-input js-datepicker','placeholder':\"FECHA\"}}) }}

                            </label>
                          </div>
                        </div>


                      <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.numfactura, {'attr': {'class': 'gui-input','placeholder':\"NUMERO DE FACTURA\"}}) }}

                            </label>
                          </div>
                        </div>




                      <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.serie, {'attr': {'class': 'gui-input','placeholder':\"NUMERO DE FACTURA\"}}) }}

                            </label>
                          </div>
                        </div>

                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.reciboCaja, {'attr': {'class': 'gui-input','placeholder':\"RECIBO CAJA\"}}) }}

                            </label>
                          </div>
                        </div>


                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               {{ form_widget(form.forma, {'attr': {'class': 'gui-input','placeholder':'ORDEN DE COMPRA'}}) }}

                          </div>
                        </div>

                        
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               {{ form_widget(form.ordenCompra, {'attr': {'class': 'gui-input','placeholder':'ORDEN DE COMPRA'}}) }}

                          </div>
                        </div>


                          <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               {{ form_widget(form.dias, {'attr': {'class': 'gui-input','placeholder':'ORDEN DE COMPRA'}}) }}

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
                                    {% if productosfacturados is defined %}
                                          
                                            {% for productos in productosfacturados %}
                                            <tr>
                                              <td>{{ productos.idproducto.nombre }}
                                                <input type=\"hidden\" value='{{ productos.idproducto.id }}' name=\"productos[]\">

                                                <input type=\"hidden\" value='{{ productos.id }}' name=\"'idproducto[]\" class=\"idproducto\">
                                              </td>
                                              <td>{{ productos.cantidad }}
                                                <input type=\"hidden\" value=\"{{ productos.cantidad }}\" name=\"cantidad[]\"></td>
                                              <td>{{ productos.precio }}<input type=\"hidden\" value=\"{{ productos.precio }}\" name=\"precio[]\"></td>
                                               <td>{{ productos.descuento }} <input type=\"hidden\" value=\"{{ productos.descuento }}\" name=\"descuento[]\"></td>
                                              <td>{{ productos.total }}</td>
                                              <td>{{ productos.ordenPromocion }}
                                                <input type=\"hidden\" value=\"{{ productos.total }}\" name=\"total[]\">
                                                <input type=\"hidden\" value=\"{{ productos.ordenPromocion }}\" name=\"promocion[]\"></td>
                                              <td>{{ productos.comentarios }}
                                                <input type=\"hidden\" value=\"{{ productos.comentarios }}\" name=\"comentarios[]\"></td>
                                              <td><button type='button' class='btn btn-simple btn-danger btn-icon remove' title='Cancelar pedido'><span class='fa fa-remove'></span></button></td>
                                            </tr>
                                            {% endfor %}
                                          
                                    {% endif %}
                                  </tbody>
                                </table>
                          </div>  
                          </div>
                      </div>


                      <div class=\"row\">
                      \t\t<div class=\"col-md-12\">
                      \t\t\t<div class=\"section\">
                            \t\t<label class=\"field\">
                              \t\t{{ form_widget(form.comentarios, {'attr': {'class': 'gui-input','placeholder':\"COMENTARIOS\"}}) }}
                            \t\t</label>
                          </div>\t
                      \t\t</div>
                      </div>
                      
                      \t\t 
                      
                          <button class=\"btn btn-success\">{{ button_label|default('Guardar') }}</button>

\t\t        
{{ form_end(form) }} 


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
{#        <div class=\"form-group\">
            <label></label>
            <input class=\"form-control\" type=\"number\" name=\"cantidad\" id=\"cantidad\" placeholder=\"Cantidad de producto\">
        </div>#}

        {{ form_start(form1, {'attr': {'class': 'pedidos'}}) }}

      <div class=\"form-group\">
          {{ form_widget(form1.idproducto, {'attr': {'class': 'gui-input producto form-control','placeholder':\"COMENTARIOS\"}}) }}

        </div>

        <div class=\"form-group\">

          {{ form_widget(form1.cantidad, {'attr': {'class': 'gui-input cantidad','placeholder':\"Cantidad de producto\"}}) }}
        </div>
      <div class=\"form-group\">
          {{ form_widget(form1.ordenPromocion, {'attr': {'class': 'gui-input promocion','placeholder':\"Orden Promocion\"}}) }}

      </div>

<div class=\"form-group\">
          {{ form_widget(form1.comentarios, {'attr': {'class': 'gui-input comentarios','placeholder':\"Comentarios\"}}) }}
  </div>

  <div class=\"form-group\">
  <label>Precio de venta</label>  
          {{ form_widget(form1.precio, {'attr': {'class': 'gui-input precio','placeholder':\"Precio\",\"disabled\":\"disabled\"}}) }}
  </div>

<div class=\"form-group\">
  <label>Descuento %</label>
          {{ form_widget(form1.descuento, {'attr': {'class': 'gui-input descuento','placeholder':\"Descuento\",\"disabled\":\"disabled\"}}) }}
  </div>


<div class=\"form-group\">
  <label>Sub-Total</label>
          {{ form_widget(form1.total, {'attr': {'class': 'gui-input total','placeholder':\"Sub-Total\",\"disabled\":\"disabled\"}}) }}
  </div>




    
{{ form_end(form1) }}

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
", "facturas/_form.html.twig", "C:\\xampp\\htdocs\\access\\templates\\facturas\\_form.html.twig");
    }
}
