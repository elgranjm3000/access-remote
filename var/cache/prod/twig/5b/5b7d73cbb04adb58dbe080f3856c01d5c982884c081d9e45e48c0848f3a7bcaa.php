<?php

/* facturas/index.html.twig */
class __TwigTemplate_198392a373fb03f5c5ba2d98cf787ded61fde4e99d4dc7b81a1f8a9e85857a0e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "facturas/index.html.twig", 1);
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
        echo "Facturas-Listados";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Facturas</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_index");
        echo "\">Clientes</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "  


                <div class=\"alert alert-danger alert-dismissable\">
                  <button type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\" class=\"close\"></button><i class=\"fa fa-remove pr10\"></i><a href=\"#\" class=\"alert-link\">";
            // line 37
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</a> 
                </div>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "   <section id=\"content\" class=\"table-layout animated fadeIn\">
          <!-- begin: .tray-left-->
        
          <!-- begin: .tray-center-->
          <div class=\"tray tray-center\">
            <!-- Panel with: Basic Footable-->
          
            <!-- Panel with: Data Filter-->
     
            <!-- Panel with: Pagination-->
            <div id=\"spy3\" class=\"panel\">
             
              <div class=\"panel-body pn\">
    <table class=\"table facturas\">
        <thead>
            <tr>
                <th>Nro de Factura</th>
                <th>Recibo de Caja</th>
                <th>Orden de Compra</th>
                <th>Fecha</th>
                <th>Comentarios</th>
                <th>Total Factura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["facturas"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 68
            echo "            <tr>
                <td style=\"color:red\">";
            // line 69
            echo twig_escape_filter($this->env, sprintf("%08d", twig_get_attribute($this->env, $this->source, $context["factura"], "id", array())), "html", null, true);
            echo " </td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "reciboCaja", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "ordenCompra", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["factura"], "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "fecha", array()), "d/m/Y")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["factura"], "comentarios", array());
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->ingresomontoFilter(twig_get_attribute($this->env, $this->source, $context["factura"], "detallesFacturas", array())), "html", null, true);
            echo " </td>
                <td>
                    <a title=\"Detalles\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_show", array("id" => twig_get_attribute($this->env, $this->source, $context["factura"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a title=\"Editar Factura\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["factura"], "id", array()), "cliente" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["factura"], "idcliente", array()), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    <a title=\"Crear deposito\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_new", array("deposito" => twig_get_attribute($this->env, $this->source, $context["factura"], "id", array()))), "html", null, true);
            echo "\"><span class=\"fa fa-file\"></span></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </tbody>
        <tfoot>
            <tr>
                <td>Totales <span class=\"totales\"></span></td>
            </tr>
        </tfoot>
    
  </table>

    </div>
</div>
</div>
</section>
";
    }

    // line 102
    public function block_addscript($context, array $blocks = array())
    {
        // line 103
        echo "    <script type=\"text/javascript\">
          jQuery(document).ready(function () {



\$('.facturas').DataTable({
           \"bLengthChange\":false,
                  \"bFilter\":true,
                  \"bInfo\":false,
                  \"bAutoWidth\":false,
        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
        },

         dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                attr: { 
                  'class': 'btn btn-success',
                },
                text:'Imprimir PDF',
                //orientation: 'landscape',
                 //pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0,1,2,3,5]
                },
                 download: 'open',
                 footer: true
                
            }
        ]



    });


  var table = \$('.facturas').DataTable();
  var datossuma =  table.column( 5 ).data().sum();
  console.log(datossuma);
    \$(\".totales\").html(datossuma.toFixed(2));

   });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "facturas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 103,  200 => 102,  183 => 86,  174 => 82,  165 => 78,  161 => 77,  157 => 76,  152 => 74,  148 => 73,  144 => 72,  140 => 71,  136 => 70,  132 => 69,  129 => 68,  124 => 67,  96 => 41,  86 => 37,  80 => 33,  76 => 32,  73 => 31,  60 => 22,  44 => 8,  41 => 7,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "facturas/index.html.twig", "/var/www/html/access/templates/facturas/index.html.twig");
    }
}
