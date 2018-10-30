<?php

/* reportes/productoutilidad.html.twig */
class __TwigTemplate_90bd0bd0bcbfc301be3b5d37935ee95fe2732d80389659ed94b2992783502fbd extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Productos-Utilidad";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Productos</a></li>                            
              <li class=\"crumb-trail\">Utilidad</li>
            </ol>
          </div>
          
        </header>
         
          
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "  


                <div class=\"alert alert-danger alert-dismissable\">
                  <button type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\" class=\"close\"></button><i class=\"fa fa-remove pr10\"></i><a href=\"#\" class=\"alert-link\">";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</a> 
                </div>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detalles_facturas"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalles_factura"]) {
            // line 75
            echo "            <tr>
              ";
            // line 76
            $context["utilidad"] = (twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "precio", array()) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idproducto", array()), "costo", array()));
            // line 77
            echo "              ";
            $context["extendida"] = (($context["utilidad"] ?? null) * twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "cantidad", array()));
            // line 78
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idproducto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "cantidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "precio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idproducto", array()), "costo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, ($context["utilidad"] ?? null), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, ($context["extendida"] ?? null), "html", null, true);
            echo "</td>                
                <td>";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "fecha", array()), "d/m/Y")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "idcliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "idcliente", array()), "idUsuario", array()), "username", array()), "html", null, true);
            echo "</td>
                
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalles_factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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
    }

    // line 110
    public function block_addscript($context, array $blocks = array())
    {
        // line 111
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
               
        var div=\$('.dataTables_wrapper');

         
          div.find(\".dataTables_filter\").append('<br><label>Productos<select id=\"idproducto\"><option value=\"\"></option></select></label>');
            this.api().column(0).each(function () {
                var column = this;
                console.log(column);
                \$('#idproducto').on('change',function(){
                var val=\$(this).val();
                console.log(val);
                column.search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                });

                column.data().unique().sort().each( function ( d, j ) {
                    \$(\"#idproducto\").append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );

            });


            div.find(\".dataTables_filter\").append('<br><label>Vendedor<select id=\"idvendedor\"><option value=\"\"></option></select></label>');
            this.api().column(8).each(function () {
                var column = this;
                console.log(column);
                \$('#idvendedor').on('change',function(){
                var val=\$(this).val();
                console.log(val);
                column.search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                });

                column.data().unique().sort().each( function ( d, j ) {
                    \$(\"#idvendedor\").append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );

            });


            div.find(\".dataTables_filter\").append('<br><label>Cliente<select id=\"idcliente\"><option value=\"\"></option></select></label>');
            this.api().column(7).each(function () {
                var column = this;
                console.log(column);
                \$('#idcliente').on('change',function(){
                var val=\$(this).val();
                console.log(val);
                column.search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                });

                column.data().unique().sort().each( function ( d, j ) {
                    \$(\"#idcliente\").append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );

            });


          
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
        return array (  212 => 111,  209 => 110,  192 => 94,  183 => 90,  174 => 86,  170 => 85,  166 => 84,  162 => 83,  158 => 82,  154 => 81,  150 => 80,  146 => 79,  141 => 78,  138 => 77,  136 => 76,  133 => 75,  128 => 74,  84 => 32,  74 => 28,  68 => 24,  64 => 23,  61 => 22,  44 => 8,  41 => 7,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reportes/productoutilidad.html.twig", "/var/www/html/access/templates/reportes/productoutilidad.html.twig");
    }
}
