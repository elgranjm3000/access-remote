<?php

/* reportes/ventas.html.twig */
class __TwigTemplate_e2e3cb2943d62312c82ca05e156aae85846c6d43b19cf3e82e688dc3a58f6de1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "reportes/ventas.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reportes/ventas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reportes/ventas.html.twig"));

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

        echo "Ventas listado";
        
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
              <li class=\"crumb-active\"><a href=\"#\">Ventas</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
       
          
          
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "flashes", array(0 => "notice"), "method"));
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
                <th>FACTURAS</th>
                <th>PRODUCTOS</th>
                <th>CANTIDAD VENDIDAS</th>
                <th>PRECIO DE VENTA</th>
                <th>TOTAL EN MONETARIO</th>
                <th>VENDEDOR</th>
                <th>CLIENTE</th>
                <th>FECHA</th>
             
            </tr>
        </thead>
        <tbody>
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalles_facturas"]) || array_key_exists("detalles_facturas", $context) ? $context["detalles_facturas"] : (function () { throw new Twig_Error_Runtime('Variable "detalles_facturas" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalles_factura"]) {
            // line 76
            echo "            <tr>
         
                <td>";
            // line 78
            echo twig_escape_filter($this->env, sprintf("%08d", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "id", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idproducto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "cantidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "precio", array()), "html", null, true);
            echo "</td>
                <td class=\"montoingreso\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "total", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "idcliente", array()), "idUsuario", array()), "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "idcliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalles_factura"], "idfactura", array()), "fecha", array()), "d/m/Y")) : ("")), "html", null, true);
            echo "</td>
                
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalles_factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </tbody>
        <tfoot>
            <tr>
               <th><h4>Totales en monetario: <span class=\"totales\"></span> </h4></th>
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

    // line 109
    public function block_addscript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        // line 110
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apidatatable/date_range.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script type=\"text/javascript\">
          jQuery(document).ready(function () {



\$('.facturas').DataTable({

   \"order\": [[ 7, \"desc\" ]],
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
            this.api().column(1).each(function () {
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
            this.api().column(5).each(function () {
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
            this.api().column(6).each(function () {
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
    .column( 4 , {page:'current'})
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
        return "reportes/ventas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 110,  249 => 109,  226 => 93,  217 => 89,  208 => 85,  204 => 84,  200 => 83,  196 => 82,  192 => 81,  188 => 80,  184 => 79,  180 => 78,  176 => 76,  171 => 75,  127 => 33,  117 => 29,  111 => 25,  107 => 24,  98 => 23,  74 => 8,  65 => 7,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Ventas listado{% endblock %}



{% block header %}

        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Ventas</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
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
                <th>FACTURAS</th>
                <th>PRODUCTOS</th>
                <th>CANTIDAD VENDIDAS</th>
                <th>PRECIO DE VENTA</th>
                <th>TOTAL EN MONETARIO</th>
                <th>VENDEDOR</th>
                <th>CLIENTE</th>
                <th>FECHA</th>
             
            </tr>
        </thead>
        <tbody>
        {% for detalles_factura in detalles_facturas %}
            <tr>
         
                <td>{{ \"%08d\" | format(detalles_factura.idfactura.id) }}</td>
                <td>{{ detalles_factura.idproducto.nombre }}</td>
                <td>{{ detalles_factura.cantidad }}</td>
                <td>{{ detalles_factura.precio }}</td>
                <td class=\"montoingreso\">{{ detalles_factura.total }}</td>
                <td>{{ detalles_factura.idfactura.idcliente.idUsuario.username }}</td>
                <td>{{ detalles_factura.idfactura.idcliente.nombre }}</td>
                <td>{{detalles_factura.idfactura.fecha ? detalles_factura.idfactura.fecha|date('d/m/Y') : ''  }}</td>
                
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
            <tr>
               <th><h4>Totales en monetario: <span class=\"totales\"></span> </h4></th>
            </tr>
        </tfoot>
    
  </table>

    </div>
</div>
</div>
</section>
{% endblock %}


    {% block addscript %}
    <script type=\"text/javascript\" src=\"{{ asset('apidatatable/date_range.js') }}\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script type=\"text/javascript\">
          jQuery(document).ready(function () {



\$('.facturas').DataTable({

   \"order\": [[ 7, \"desc\" ]],
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
            this.api().column(1).each(function () {
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
            this.api().column(5).each(function () {
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
            this.api().column(6).each(function () {
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
    .column( 4 , {page:'current'})
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
    {% endblock %}", "reportes/ventas.html.twig", "C:\\xampp\\htdocs\\access\\templates\\reportes\\ventas.html.twig");
    }
}
