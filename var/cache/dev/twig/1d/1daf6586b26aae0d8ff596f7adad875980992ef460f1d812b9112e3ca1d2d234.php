<?php

/* reportes/productoutilidad.html.twig */
class __TwigTemplate_a9cd7bbe59942caf7fe0b3545c0f8117ed32aa64d59db5ecf1d61c4a951261d6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "reportes/productoutilidad.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reportes/productoutilidad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reportes/productoutilidad.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Productos-Utilidad";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->source); })()), "flashes", array(0 => "notice"), "method"));
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

                <div class=\"row\">
                  <div class=\"container\">
                    <div class=\"col-md-4\">
                      <h4>Busqueda por rango de fecha</h4>
                <label>Desde</label>
                <input type=\"text\" id=\"min\" name=\"min\" class=\"form-control js-datepickertable\">
                <label>Hasta</label>
                <input type=\"text\" id=\"max\" name=\"max\" class=\"form-control js-datepickertable\">
</div>
</div>
</div>
<br>

    <table class=\"table facturas\">
        <thead>
            <tr>
                <th>PRODUCTOS</th>
                <th>CANTIDAD VENDIDAS</th>
                <th>PRECIO DE VENTA</th>
                <th>COSTO DE PRODUCTO</th>
                <th>UTILIDAD</th>
                <th>UTILIDAD EXTENDIDA</th>                
                <th>FECHA</th>
                <th>CLIENTE</th>
                <th>VENDEDOR</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalles_facturas"]) || array_key_exists("detalles_facturas", $context) ? $context["detalles_facturas"] : (function () { throw new Twig_Error_Runtime('Variable "detalles_facturas" does not exist.', 83, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalles_factura"]) {
            // line 84
            echo "            <tr>
              ";
            // line 85
            $context["utilidad"] = (twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "precio", array()) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idproducto", array()), "costo", array()));
            // line 86
            echo "              ";
            $context["extendida"] = ((isset($context["utilidad"]) || array_key_exists("utilidad", $context) ? $context["utilidad"] : (function () { throw new Twig_Error_Runtime('Variable "utilidad" does not exist.', 86, $this->source); })()) * twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "cantidad", array()));
            // line 87
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idproducto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "cantidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "precio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idproducto", array()), "costo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["utilidad"]) || array_key_exists("utilidad", $context) ? $context["utilidad"] : (function () { throw new Twig_Error_Runtime('Variable "utilidad" does not exist.', 91, $this->source); })()), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["extendida"]) || array_key_exists("extendida", $context) ? $context["extendida"] : (function () { throw new Twig_Error_Runtime('Variable "extendida" does not exist.', 92, $this->source); })()), "html", null, true);
            echo "</td>                
                <td>";
            // line 93
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "fecha", array()), "d/m/Y")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "idcliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "idcliente", array()), "idUsuario", array()), "username", array()), "html", null, true);
            echo "</td>
                
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 99
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalles_factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        </tbody>
        <tfoot>
            <tr>
               <th><h4>Utilidad Extendidas: <span class=\"totales\"></span> </h4></th>
            </tr>
        </tfoot>
    
  </table>

    </div>
</div>
</div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_addscript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        // line 120
        echo "s    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script type=\"text/javascript\">
          jQuery(document).ready(function () {


\$.fn.dataTableExt.afnFiltering.push(
  function( oSettings, aData, iDataIndex ) {
    var iFini = document.getElementById('min').value;
    var iFfin = document.getElementById('max').value;
    var iStartDateCol = 6;
    var iEndDateCol = 6;

    iFini=iFini.substring(6,10) + iFini.substring(3,5)+ iFini.substring(0,2);
    iFfin=iFfin.substring(6,10) + iFfin.substring(3,5)+ iFfin.substring(0,2);
    console.log(iFini);

    var datofini=aData[iStartDateCol].substring(6,10) + aData[iStartDateCol].substring(3,5)+ aData[iStartDateCol].substring(0,2);
    var datoffin=aData[iEndDateCol].substring(6,10) + aData[iEndDateCol].substring(3,5)+ aData[iEndDateCol].substring(0,2);

    if ( iFini === \"\" && iFfin === \"\" )
    {
      return true;
    }
    else if ( iFini <= datofini && iFfin === \"\")
    {
      return true;
    }
    else if ( iFfin >= datoffin && iFini === \"\")
    {
      return true;
    }
    else if (iFini <= datofini && iFfin >= datoffin)
    {
      return true;
    }
    return false;
  }
);



\$('.facturas').DataTable({

   \"order\": [[ 6, \"desc\" ]],
 \"iDisplayLength\": 1000,
           \"bLengthChange\":false,
                  \"bFilter\":true,
                  \"bInfo\":false,
                  \"bAutoWidth\":false,


        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
        },
        initComplete: function () {
            this.api().columns(0).every( function () {
                var column = this;
                var select = \$('<select class=\"form-control\"><option value=\"\">Producto: </option></select>')
                    .appendTo( \$(column.header()).empty() )
                    .on( 'change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );
            } );

            this.api().columns(7).every( function () {
                var column = this;
                var select = \$('<select class=\"form-control\"><option value=\"\">Cliente: </option></select>')
                    .appendTo( \$(column.header()).empty() )
                    .on( 'change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );
            } );


this.api().columns(8).every( function () {
                var column = this;
                var select = \$('<select class=\"form-control\"><option value=\"\">Vendedor: </option></select>')
                    .appendTo( \$(column.header()).empty() )
                    .on( 'change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );
            } );

          

          
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
            columns: ':visible',
            search: 'applied',
            order: 'applied'
          },
                 download: 'open',
                 footer: true
                
            },

            { 
              extend: 'excelHtml5', 
              footer: true,
               attr: { 
                  'class': 'btn btn-success',
                },
                text:'Excel',
                exportOptions: {
                    columns: ':visible',
                    search: 'applied',
                    order: 'applied'
              }

             },
            {
              extend: 'colvis',
                collectionLayout: 'fixed two-column',
                 attr: { 
                  'class': 'btn btn-success',
                },
                text:'Selecciona columnas'
            },

            

        ]



    });


  var table = \$('.facturas').DataTable();



    //\$(\".totales\").html(datossuma.toFixed(2));


      \$('#min').change( function() {
           table.draw(); 
          

        } );
      \$('#max').change( function() { 
        table.draw(); 
      
      } );

      function funcAvisa(){
        var totalmonto = 0;

   table
    .column( 5 , {page:'current'})
    .data()
    .each( function ( value, index ) {
      totalmonto = totalmonto + parseFloat(value);
       // console.log( 'Data in index: '+index+' is: '+value );
       console.log(value);
    } );

    console.log(totalmonto);
    \$(\".totales\").html(totalmonto.toFixed(2));

  
}
/*se la llama a los 10 segundos*/
setInterval(funcAvisa,1000);

   });




    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reportes/productoutilidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 120,  269 => 119,  246 => 103,  237 => 99,  228 => 95,  224 => 94,  220 => 93,  216 => 92,  212 => 91,  208 => 90,  204 => 89,  200 => 88,  195 => 87,  192 => 86,  190 => 85,  187 => 84,  182 => 83,  138 => 41,  128 => 37,  122 => 33,  118 => 32,  109 => 31,  90 => 22,  74 => 8,  65 => 7,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Productos-Utilidad{% endblock %}



{% block header %}

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
              <li class=\"active\"><a href=\"{{ path('clientes_index') }}\">Clientes</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
{% endblock %}
{% block body %}
{% for message in app.flashes('notice') %}
  


                <div class=\"alert alert-danger alert-dismissable\">
                  <button type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\" class=\"close\"></button><i class=\"fa fa-remove pr10\"></i><a href=\"#\" class=\"alert-link\">{{ message }}</a> 
                </div>
    
{% endfor %}
   <section id=\"content\" class=\"table-layout animated fadeIn\">
          <!-- begin: .tray-left-->
        
          <!-- begin: .tray-center-->
          <div class=\"tray tray-center\">
            <!-- Panel with: Basic Footable-->
          
            <!-- Panel with: Data Filter-->
     
            <!-- Panel with: Pagination-->
            <div id=\"spy3\" class=\"panel\">
             
              <div class=\"panel-body pn\">

                <div class=\"row\">
                  <div class=\"container\">
                    <div class=\"col-md-4\">
                      <h4>Busqueda por rango de fecha</h4>
                <label>Desde</label>
                <input type=\"text\" id=\"min\" name=\"min\" class=\"form-control js-datepickertable\">
                <label>Hasta</label>
                <input type=\"text\" id=\"max\" name=\"max\" class=\"form-control js-datepickertable\">
</div>
</div>
</div>
<br>

    <table class=\"table facturas\">
        <thead>
            <tr>
                <th>PRODUCTOS</th>
                <th>CANTIDAD VENDIDAS</th>
                <th>PRECIO DE VENTA</th>
                <th>COSTO DE PRODUCTO</th>
                <th>UTILIDAD</th>
                <th>UTILIDAD EXTENDIDA</th>                
                <th>FECHA</th>
                <th>CLIENTE</th>
                <th>VENDEDOR</th>
            </tr>
        </thead>
        <tbody>
        {% for detalles_factura in detalles_facturas %}
            <tr>
              {% set utilidad = detalles_factura.precio - detalles_factura.idproducto.costo %}
              {% set extendida = utilidad * detalles_factura.cantidad  %}
                <td>{{ detalles_factura.idproducto.nombre }}</td>
                <td>{{ detalles_factura.cantidad }}</td>
                <td>{{ detalles_factura.precio }}</td>
                <td>{{ detalles_factura.idproducto.costo }}</td>
                <td>{{ utilidad }}</td>
                <td>{{ extendida }}</td>                
                <td>{{detalles_factura.idfactura.fecha ? detalles_factura.idfactura.fecha|date('d/m/Y') : ''  }}</td>
                <td>{{ detalles_factura.idfactura.idcliente.nombre }}</td>
                <td>{{ detalles_factura.idfactura.idcliente.idUsuario.username }}</td>
                
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
            <tr>
               <th><h4>Utilidad Extendidas: <span class=\"totales\"></span> </h4></th>
            </tr>
        </tfoot>
    
  </table>

    </div>
</div>
</div>
</section>
{% endblock %}


    {% block addscript %}
s    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script type=\"text/javascript\">
          jQuery(document).ready(function () {


\$.fn.dataTableExt.afnFiltering.push(
  function( oSettings, aData, iDataIndex ) {
    var iFini = document.getElementById('min').value;
    var iFfin = document.getElementById('max').value;
    var iStartDateCol = 6;
    var iEndDateCol = 6;

    iFini=iFini.substring(6,10) + iFini.substring(3,5)+ iFini.substring(0,2);
    iFfin=iFfin.substring(6,10) + iFfin.substring(3,5)+ iFfin.substring(0,2);
    console.log(iFini);

    var datofini=aData[iStartDateCol].substring(6,10) + aData[iStartDateCol].substring(3,5)+ aData[iStartDateCol].substring(0,2);
    var datoffin=aData[iEndDateCol].substring(6,10) + aData[iEndDateCol].substring(3,5)+ aData[iEndDateCol].substring(0,2);

    if ( iFini === \"\" && iFfin === \"\" )
    {
      return true;
    }
    else if ( iFini <= datofini && iFfin === \"\")
    {
      return true;
    }
    else if ( iFfin >= datoffin && iFini === \"\")
    {
      return true;
    }
    else if (iFini <= datofini && iFfin >= datoffin)
    {
      return true;
    }
    return false;
  }
);



\$('.facturas').DataTable({

   \"order\": [[ 6, \"desc\" ]],
 \"iDisplayLength\": 1000,
           \"bLengthChange\":false,
                  \"bFilter\":true,
                  \"bInfo\":false,
                  \"bAutoWidth\":false,


        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
        },
        initComplete: function () {
            this.api().columns(0).every( function () {
                var column = this;
                var select = \$('<select class=\"form-control\"><option value=\"\">Producto: </option></select>')
                    .appendTo( \$(column.header()).empty() )
                    .on( 'change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );
            } );

            this.api().columns(7).every( function () {
                var column = this;
                var select = \$('<select class=\"form-control\"><option value=\"\">Cliente: </option></select>')
                    .appendTo( \$(column.header()).empty() )
                    .on( 'change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );
            } );


this.api().columns(8).every( function () {
                var column = this;
                var select = \$('<select class=\"form-control\"><option value=\"\">Vendedor: </option></select>')
                    .appendTo( \$(column.header()).empty() )
                    .on( 'change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );
            } );

          

          
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
            columns: ':visible',
            search: 'applied',
            order: 'applied'
          },
                 download: 'open',
                 footer: true
                
            },

            { 
              extend: 'excelHtml5', 
              footer: true,
               attr: { 
                  'class': 'btn btn-success',
                },
                text:'Excel',
                exportOptions: {
                    columns: ':visible',
                    search: 'applied',
                    order: 'applied'
              }

             },
            {
              extend: 'colvis',
                collectionLayout: 'fixed two-column',
                 attr: { 
                  'class': 'btn btn-success',
                },
                text:'Selecciona columnas'
            },

            

        ]



    });


  var table = \$('.facturas').DataTable();



    //\$(\".totales\").html(datossuma.toFixed(2));


      \$('#min').change( function() {
           table.draw(); 
          

        } );
      \$('#max').change( function() { 
        table.draw(); 
      
      } );

      function funcAvisa(){
        var totalmonto = 0;

   table
    .column( 5 , {page:'current'})
    .data()
    .each( function ( value, index ) {
      totalmonto = totalmonto + parseFloat(value);
       // console.log( 'Data in index: '+index+' is: '+value );
       console.log(value);
    } );

    console.log(totalmonto);
    \$(\".totales\").html(totalmonto.toFixed(2));

  
}
/*se la llama a los 10 segundos*/
setInterval(funcAvisa,1000);

   });




    </script>
    {% endblock %}", "reportes/productoutilidad.html.twig", "/var/www/html/access/templates/reportes/productoutilidad.html.twig");
    }
}
