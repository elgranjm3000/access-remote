<?php

/* ensamble/_form.html.twig */
class __TwigTemplate_d02b9727395bfea34ceb295174dd48facc955ffb30ab0be4d94ef4376d409312 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ensamble/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ensamble/_form.html.twig"));

        // line 1
        echo "

<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', array("attr" => array("id" => "form-ui")));
        echo "
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-8\">
                          <div class=\"section\">
                            <label class=\"field\">
                              ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "nombre", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Nombre de producto")));
        echo "

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\"><b>Precio de venta</b>
                               ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "precioVenta", array()), 'widget', array("attr" => array("class" => "gui-input precioventa", "placeholder" => "Precio de venta", "readonly" => "readonly")));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["ensambleslistado"]) || array_key_exists("ensambleslistado", $context) ? $context["ensambleslistado"] : (function () { throw new Twig_Error_Runtime('Variable "ensambleslistado" does not exist.', 43, $this->source); })()));
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
                            <label class=\"field\">
                              ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "comentarios", array()), 'widget', array("attr" => array("class" => "gui-input", "placeholder" => "Comentarios")));
        echo "

                            </label>
                          </div>
                        </div>
                        
                      </div>

                  

                      
                          <button type=\"submit\" class=\"btn btn-success\">";
        // line 79
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 79, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        echo "</button>

 

\t\t        </div>
";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 105, $this->source); })()), 'form_start', array("attr" => array("class" => "ensamble")));
        echo "

      <div class=\"form-group\">
          ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 108, $this->source); })()), "idproducto", array()), 'widget', array("attr" => array("class" => "gui-input producto form-control", "placeholder" => "COMENTARIOS")));
        echo "

        </div>

        <div class=\"form-group\">

          ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 114, $this->source); })()), "cantidad", array()), 'widget', array("attr" => array("class" => "gui-input cantidad", "placeholder" => "Cantidad de producto")));
        echo "
        </div>
      <div class=\"form-group\">
          ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 117, $this->source); })()), "monto", array()), 'widget', array("attr" => array("class" => "gui-input monto", "placeholder" => "Monto", "readonly" => "readonly")));
        echo "

      </div>



<div class=\"form-group\">
          ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 124, $this->source); })()), "subtotal", array()), 'widget', array("attr" => array("class" => "gui-input subtotal", "placeholder" => "subtotal", "readonly" => "readonly")));
        echo "
  </div>


    
";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new Twig_Error_Runtime('Variable "form1" does not exist.', 129, $this->source); })()), 'form_end');
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  231 => 129,  223 => 124,  213 => 117,  207 => 114,  198 => 108,  192 => 105,  189 => 104,  170 => 84,  162 => 79,  148 => 68,  138 => 60,  135 => 59,  125 => 55,  121 => 54,  116 => 52,  111 => 50,  107 => 49,  103 => 48,  99 => 47,  95 => 46,  91 => 45,  88 => 44,  83 => 43,  81 => 42,  60 => 24,  48 => 15,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div class=\"mw1000 center-block\">
 <div class=\"admin-form theme-primary\">
                <div class=\"panel heading-border panel-primary\">
                  <div class=\"panel-body bg-light\">


 {{ form_start(form, {'attr': {'id': 'form-ui'}}) }}
                 <div id=\"spy1\" class=\"section-divider mb40\"><span></span></div>
\t\t        \t <div class=\"row\">
                        <div class=\"col-md-8\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.nombre, {'attr': {'class': 'gui-input','placeholder':\"Nombre de producto\"}}) }}

                            </label>
                          </div>
                        </div>

                         <div class=\"col-md-4\">
                          <div class=\"section\">
                            <label class=\"field\"><b>Precio de venta</b>
                               {{ form_widget(form.precioVenta, {'attr': {'class': 'gui-input precioventa','placeholder':'Precio de venta','readonly':'readonly'}}) }}

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
    {% if ensambleslistado is defined %}
    {% for ensambles in ensambleslistado %}
      <tr>
          <td>{{ ensambles.productoadd.nombre }}
              <input type=\"hidden\" value='{{ ensambles.productoadd.id }}' name=\"productos[]\">
              <input type=\"hidden\" value='{{ ensambles.cantidad }}' name=\"cantidad[]\">
               <input type=\"hidden\" value='{{ ensambles.subtotal }}' name=\"subtotal[]\">
               <input type=\"hidden\" value='{{ ensambles.monto }}' name=\"precio[]\">
               <input type=\"hidden\" value='{{ ensambles.id }}' name=\"idensamble[]\" class=\"idensamble\">
          </td>
          <td>{{ ensambles.cantidad }}                         
          </td>
          <td>{{ ensambles.monto }}</td>
          <td>{{ ensambles.subtotal }}</td>          
             <td><button type='button' class='btn btn-simple btn-danger btn-icon remove' title='Cancelar pedido'><span class='fa fa-remove'></span></button></td>
      </tr>
      {% endfor %}
    {% endif %}
  </tbody>
</table> 
  

                      <div class=\"row\">
                        <div class=\"col-md-12\">
                          <div class=\"section\">
                            <label class=\"field\">
                              {{ form_widget(form.comentarios, {'attr': {'class': 'gui-input','placeholder':\"Comentarios\"}}) }}

                            </label>
                          </div>
                        </div>
                        
                      </div>

                  

                      
                          <button type=\"submit\" class=\"btn btn-success\">{{ button_label|default('Guardar') }}</button>

 

\t\t        </div>
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

        {{ form_start(form1, {'attr': {'class': 'ensamble'}}) }}

      <div class=\"form-group\">
          {{ form_widget(form1.idproducto, {'attr': {'class': 'gui-input producto form-control','placeholder':\"COMENTARIOS\"}}) }}

        </div>

        <div class=\"form-group\">

          {{ form_widget(form1.cantidad, {'attr': {'class': 'gui-input cantidad','placeholder':\"Cantidad de producto\"}}) }}
        </div>
      <div class=\"form-group\">
          {{ form_widget(form1.monto, {'attr': {'class': 'gui-input monto','placeholder':\"Monto\",'readonly':'readonly'}}) }}

      </div>



<div class=\"form-group\">
          {{ form_widget(form1.subtotal, {'attr': {'class': 'gui-input subtotal','placeholder':\"subtotal\",'readonly':'readonly'}}) }}
  </div>


    
{{ form_end(form1) }}

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

</div>", "ensamble/_form.html.twig", "/var/www/html/access/templates/ensamble/_form.html.twig");
    }
}
