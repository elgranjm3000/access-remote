<?php

/* facturas/_form.html.twig */
class __TwigTemplate_0d635d43bebe1cd39ed2a350c10581cd77f1c2703a0ccbf45b043d1dd5e94048 extends Twig_Template
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
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "reciboCaja", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "RECIBO CAJA")));
        echo "

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "ordenCompra", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "ORDEN DE COMPRA")));
        echo "

                          </div>
                        </div>


  \t\t\t\t\t\t<div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "fecha", array()), 'widget', array("attr" => array("class" => "gui-input js-datepicker", "placeholder" => "FECHA")));
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
                                          <th>Sub-Total</th>
                                          <th>Orden de Produccion</th>
                                          <th>Comentarios</th>
                                          <th>Accion</th>                                          
                                        </tr>
                                  </thead>
                                  <tbody>
                                    ";
        // line 68
        if ((isset($context["productosfacturados"]) || array_key_exists("productosfacturados", $context))) {
            // line 69
            echo "                                          
                                            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productosfacturados"]) || array_key_exists("productosfacturados", $context) ? $context["productosfacturados"] : (function () { throw new Twig_Error_Runtime('Variable "productosfacturados" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
                // line 71
                echo "                                            <tr>
                                              <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "nombre", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value='";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "id", array()), "html", null, true);
                echo "' name=\"productos[]\">

                                                <input type=\"hidden\" value='";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "id", array()), "html", null, true);
                echo "' name=\"'idproducto[]\" class=\"idproducto\">
                                              </td>
                                              <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "\" name=\"cantidad[]\"></td>
                                              <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "<input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "\" name=\"precio[]\"></td>
                                              <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "</td>
                                              <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "\" name=\"total[]\">
                                                <input type=\"hidden\" value=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "\" name=\"promocion[]\"></td>
                                              <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "\" name=\"comentarios[]\"></td>
                                              <td><button type='button' class='btn btn-simple btn-danger btn-icon remove' title='Cancelar pedido'><span class='fa fa-remove'></span></button></td>
                                            </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                          
                                    ";
        }
        // line 91
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
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->source); })()), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "COMENTARIOS")));
        echo "
                            \t\t</label>
                          </div>\t
                      \t\t</div>
                      </div>
                      
                      \t\t 
                      
                          <button class=\"btn btn-success\">";
        // line 110
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 110, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

\t\t        
";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
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
        // line 131
        echo "
        ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 132, $this->source); })()), 'form_start', array("attr" => array("class" => "pedidos")));
        echo "

      <div class=\"form-group\">
          ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 135, $this->source); })()), "idproducto", array()), 'widget', array("attr" => array("class" => "gui-input producto form-control", "placeholder" => "COMENTARIOS")));
        echo "

        </div>

        <div class=\"form-group\">

          ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 141, $this->source); })()), "cantidad", array()), 'widget', array("attr" => array("class" => "gui-input cantidad", "placeholder" => "Cantidad de producto")));
        echo "
        </div>
      <div class=\"form-group\">
          ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 144, $this->source); })()), "ordenPromocion", array()), 'widget', array("attr" => array("class" => "gui-input promocion", "placeholder" => "Orden Promocion")));
        echo "

      </div>

<div class=\"form-group\">
          ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 149, $this->source); })()), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input comentarios", "placeholder" => "Comentarios")));
        echo "
  </div>

  <div class=\"form-group\">
  <label>Precio de venta</label>  
          ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 154, $this->source); })()), "precio", array()), 'widget', array("attr" => array("class" => "gui-input precio", "placeholder" => "Precio", "disabled" => "disabled")));
        echo "
  </div>


<div class=\"form-group\">
  <label>Sub-Total</label>
          ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 160, $this->source); })()), "total", array()), 'widget', array("attr" => array("class" => "gui-input total", "placeholder" => "Sub-Total", "disabled" => "disabled")));
        echo "
  </div>

    
";
        // line 164
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 164, $this->source); })()), 'form_end');
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
        return array (  288 => 164,  281 => 160,  272 => 154,  264 => 149,  256 => 144,  250 => 141,  241 => 135,  235 => 132,  232 => 131,  215 => 113,  209 => 110,  198 => 102,  185 => 91,  181 => 89,  171 => 85,  167 => 84,  163 => 83,  159 => 82,  155 => 81,  151 => 80,  145 => 79,  141 => 78,  137 => 77,  132 => 75,  127 => 73,  123 => 72,  120 => 71,  116 => 70,  113 => 69,  111 => 68,  80 => 40,  68 => 31,  57 => 23,  47 => 16,  42 => 14,  32 => 6,  29 => 1,);
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
                              {{ form_widget(form.reciboCaja, {'attr': {'class': 'gui-input','placeholder':\"RECIBO CAJA\"}}) }}

                            </label>
                          </div>
                        </div>
                        <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                               {{ form_widget(form.ordenCompra, {'attr': {'class': 'gui-input','placeholder':'ORDEN DE COMPRA'}}) }}

                          </div>
                        </div>


  \t\t\t\t\t\t<div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.fecha, {'attr': {'class': 'gui-input js-datepicker','placeholder':\"FECHA\"}}) }}

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
