<?php

/* facturas/show.html.twig */
class __TwigTemplate_35296ba3deefa2c99abd0bff4166e20c015067e85a38de3f69b74f49e380b638 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "facturas/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'addscript' => array($this, 'block_addscript'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Detalles - Facturas";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Facturas</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_index");
        echo "\">Listado de Facturas</a></li>
              <li class=\"active\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "id", array()), "cliente" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "idcliente", array()), "id", array()))), "html", null, true);
        echo "\">Editar Factura</a></li>
  ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "forma", array()) == "CR")) {
            // line 23
            echo "              <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_new", array("deposito" => twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "id", array()))), "html", null, true);
            echo "\">Crear deposito</a></li>
";
        }
        // line 25
        echo " <li class=\"active\" ><a target=\"_blank\"  href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("factura_pdf", array("id" => twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "id", array()))), "html", null, true);
        echo "\">Imprimir Factura</a></li>
              
              <li>";
        // line 27
        echo twig_include($this->env, $context, "facturas/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de Facturas ==> Forma de Pago
                ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "forma", array()) == "CC")) {
            // line 43
            echo "                    <b>CONTADO</b>
                ";
        } else {
            // line 45
            echo "                    CREDITO, <b>Fecha de vencimiento: </b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "fechavencimiento", array()), "d/m/Y"), "html", null, true);
            echo "
                ";
        }
        // line 47
        echo "              </span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
            <tr>
                <th style=\"font-weight:bold;font-size:25px !important\">Numero de factura</th>
                <td style=\"color:red;font-weight:bold;font-size:25px !important\">";
        // line 60
        echo twig_escape_filter($this->env, sprintf("%08d", twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "id", array())), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Recibo Caja</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "reciboCaja", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Orden de Compra</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "ordenCompra", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "fecha", array()), "d/m/Y")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "comentarios", array());
        echo "</td>
            </tr>
        </tbody>
   </table>
               
                </div>
              </div>
          </div>
      </div>
</div>

   <table class=\"table footable\" id=\"data\">
                                  <thead>
                                        <tr>
                                          <th>Producto</th>
                                          <th>Cantidad</th>
                                          <th>Precio</th>
                                          <th>Sub-Total</th>
                                          <th>Orden de Produccion</th>
                                          <th>Comentarios</th>
                                        </tr>
                                  </thead>
                                  <tbody>
                                    ";
        // line 99
        if ((isset($context["productosfacturados"]) || array_key_exists("productosfacturados", $context))) {
            // line 100
            echo "                                          
                                            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productosfacturados"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["productos"]) {
                // line 102
                echo "                                            <tr>
                                              <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "nombre", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value='";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productos"], "idproducto", array()), "id", array()), "html", null, true);
                echo "' name=\"productos[]\">

                                                <input type=\"hidden\" value='";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "id", array()), "html", null, true);
                echo "' name=\"'idproducto[]\" class=\"idproducto\">
                                              </td>
                                              <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "cantidad", array()), "html", null, true);
                echo "\" name=\"cantidad[]\"></td>
                                              <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "<input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "precio", array()), "html", null, true);
                echo "\" name=\"precio[]\"></td>
                                              <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "</td>
                                              <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "total", array()), "html", null, true);
                echo "\" name=\"total[]\">
                                                <input type=\"hidden\" value=\"";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "ordenPromocion", array()), "html", null, true);
                echo "\" name=\"promocion[]\"></td>
                                              <td>";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "
                                                <input type=\"hidden\" value=\"";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productos"], "comentarios", array()), "html", null, true);
                echo "\" name=\"comentarios[]\"></td>
                                             
                                            </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                                          
                                    ";
        }
        // line 122
        echo "                                  </tbody>
                                </table>
<h1>Sub-Total: <label class=\"totales\" style=\"color:red\"></label></h1>
";
    }

    // line 127
    public function block_addscript($context, array $blocks = array())
    {
        // line 128
        echo "  <script type=\"text/javascript\">

jQuery(document).ready(function (){
        var table = \$('.footable').DataTable();

    var datossuma =  table.column( 3 ).data().sum();
    \$(\".totales\").html(datossuma.toFixed(2));

          
      
});
  </script>
";
    }

    public function getTemplateName()
    {
        return "facturas/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 128,  265 => 127,  258 => 122,  254 => 120,  244 => 116,  240 => 115,  236 => 114,  232 => 113,  228 => 112,  224 => 111,  218 => 110,  214 => 109,  210 => 108,  205 => 106,  200 => 104,  196 => 103,  193 => 102,  189 => 101,  186 => 100,  184 => 99,  158 => 76,  151 => 72,  144 => 68,  137 => 64,  130 => 60,  115 => 47,  109 => 45,  105 => 43,  103 => 42,  98 => 39,  95 => 38,  82 => 27,  76 => 25,  70 => 23,  68 => 22,  64 => 21,  60 => 20,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "facturas/show.html.twig", "/var/www/html/access/templates/facturas/show.html.twig");
    }
}
