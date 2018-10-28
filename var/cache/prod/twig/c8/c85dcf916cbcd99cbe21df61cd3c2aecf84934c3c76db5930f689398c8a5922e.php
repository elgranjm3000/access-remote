<?php

/* reportes/clientes.html.twig */
class __TwigTemplate_c5d59bcde25f8a5beecaaee583109e27ca0fd71eabebbdb846585ad978b1e82f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "reportes/clientes.html.twig", 1);
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
        echo "Clientes";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Clientes</a></li>                            
              <li class=\"crumb-trail\">Reporte</li>
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

                ";
        // line 58
        echo "
    <table class=\"table facturas\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nit</th>                
                <th>Correo</th>                                
                <th>Zona</th>
                <th>Dpto</th>
                <th>Mcipio.</th>
                <th>Dir.</th>
                <th hidden=\"hidden\">Contacto</th>
                <th hidden=\"hidden\">F.Nac.</th>
                <th hidden=\"hidden\">Notas</th>
                <th hidden=\"hidden\">Movil</th>                
                <th hidden=\"hidden\">Local</th>  
                 <th>Vendedor</th>           
             
            </tr>
        </thead>
        <tbody>
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 80
            echo "            <tr>
         
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nit", array()), "html", null, true);
            echo "</td>                
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "correo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "zona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "dpto", array()), "html", null, true);
            echo "</td>  
                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "municipio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["cliente"], "direccion", array());
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "contactoPrincipal", array()), "html", null, true);
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 90
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cliente"], "fechaNacimiento", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "fechaNacimiento", array()), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                <td hidden=\"hidden\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "comentarios", array()), "html", null, true);
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "telefonoMovil", array()), "html", null, true);
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "telefonoLocal", array()), "html", null, true);
            echo "</td>  
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cliente"], "idUsuario", array()), "username", array()), "html", null, true);
            echo "</td>
                
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 98
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </tbody>
        <tfoot>
            <tr>
               <th><h4>Totales de clientes: <span class=\"totales\"></span> </h4></th>
            </tr>
        </tfoot>
    
  </table>

    </div>
</div>
</div>
</section>
";
    }

    // line 118
    public function block_addscript($context, array $blocks = array())
    {
        // line 119
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apidatatable/date_range.js"), "html", null, true);
        echo "\"></script>
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
            this.api().columns(12).every( function () {
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


  var datossuma =  table.column( 4 ).data().sum();
  console.log(datossuma);
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
        return "reportes/clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 119,  215 => 118,  198 => 102,  189 => 98,  180 => 94,  176 => 93,  172 => 92,  168 => 91,  164 => 90,  160 => 89,  156 => 88,  152 => 87,  148 => 86,  144 => 85,  140 => 84,  136 => 83,  132 => 82,  128 => 80,  123 => 79,  100 => 58,  84 => 32,  74 => 28,  68 => 24,  64 => 23,  61 => 22,  44 => 8,  41 => 7,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reportes/clientes.html.twig", "/var/www/html/access/templates/reportes/clientes.html.twig");
    }
}
