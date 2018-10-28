<?php

/* reportes/producto.html.twig */
class __TwigTemplate_9c7599575562f5b1e130d5e228b00679db6c94f6a92a1f47bd8efe711288f4b5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "reportes/producto.html.twig", 1);
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
        echo "Productos";
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
              <li class=\"crumb-trail\">Reportes</li>
            </ol>
          </div>
          
        </header>
         
          
          
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "  


                <div class=\"alert alert-danger alert-dismissable\">
                  <button type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\" class=\"close\"></button><i class=\"fa fa-remove pr10\"></i><a href=\"#\" class=\"alert-link\">";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</a> 
                </div>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "   <section id=\"content\" class=\"table-layout animated fadeIn\">
          <!-- begin: .tray-left-->
        
          <!-- begin: .tray-center-->
          <div class=\"tray tray-center\">
            <!-- Panel with: Basic Footable-->
          
            <!-- Panel with: Data Filter-->
     
            <!-- Panel with: Pagination-->
            <div id=\"spy3\" class=\"panel\">
             
              <div class=\"panel-body pn\">

                ";
        // line 59
        echo "
    <table class=\"table facturas\">
        <thead>
            <tr>
                <th>Productos</th>
                <th>Precios Asignado</th>                
                <th>Familia</th>                                
                <th>Existencia</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 71
            echo "
        ";
            // line 72
            if (($this->extensions['App\Twig\AppExtension']->ingresosFilter(twig_get_attribute($this->env, $this->source, $context["producto"], "ingresos", array())) > 0)) {
                // line 73
                echo "            <tr>
         
                <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precioVenta", array()), "html", null, true);
                echo "</td>                
                <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "idfamilia", array()), "nombre", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->ingresosFilter(twig_get_attribute($this->env, $this->source, $context["producto"], "ingresos", array())), "html", null, true);
                echo "</td>
                      </tr>
      ";
            }
            // line 81
            echo "                
      
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </tbody>
        <tfoot>
            <tr>
               <th><h4>Totales de productos: <span class=\"totales\"></span> </h4></th>
            </tr>
        </tfoot>
    
  </table>

    </div>
</div>
</div>
</section>
";
    }

    // line 104
    public function block_addscript($context, array $blocks = array())
    {
        // line 105
        echo "    
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script type=\"text/javascript\">
          jQuery(document).ready(function () {



\$('.facturas').DataTable({

   \"order\": [[ 0, \"desc\" ]],
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

         
          div.find(\".dataTables_filter\").append('<br><label>Productos<select id=\"idfamilia\"><option value=\"\"></option></select></label>');
            this.api().column(2).each(function () {
                var column = this;
                console.log(column);
                \$('#idfamilia').on('change',function(){
                var val=\$(this).val();
                console.log(val);
                column.search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                });

                column.data().unique().sort().each( function ( d, j ) {
                    \$(\"#idfamilia\").append( '<option value=\"'+d+'\">'+d+'</option>' )
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




      function funcAvisa(){
        var totalmonto = 0;

   table
    .column( 0 , {page:'current'})
    .data()
    .each( function ( value, index ) {
      totalmonto = totalmonto + 1;
       // console.log( 'Data in index: '+index+' is: '+value );
       console.log(value);
    } );

    console.log(totalmonto);
    \$(\".totales\").html(totalmonto.toFixed(0));

  
}
/*se la llama a los 10 segundos*/
setInterval(funcAvisa,1000);

   });




    </script>
    ";
    }

    public function getTemplateName()
    {
        return "reportes/producto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 105,  179 => 104,  162 => 88,  153 => 84,  146 => 81,  140 => 78,  136 => 77,  132 => 76,  128 => 75,  124 => 73,  122 => 72,  119 => 71,  114 => 70,  101 => 59,  85 => 33,  75 => 29,  69 => 25,  65 => 24,  62 => 23,  44 => 8,  41 => 7,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reportes/producto.html.twig", "/var/www/html/access/templates/reportes/producto.html.twig");
    }
}
