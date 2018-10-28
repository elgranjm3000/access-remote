<?php

/* reportes/cobrar.html.twig */
class __TwigTemplate_8981860361f12742ee686d2b4803b51bd235355a38444d733b1077db1f115b83 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "reportes/cobrar.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reportes/cobrar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reportes/cobrar.html.twig"));

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

        echo "Cuentas por cobrar";
        
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
              <li class=\"crumb-active\"><a href=\"#\">Cuentas por cobrar</a></li>                            
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
                
                <th>FECHA</th>
                <th>NUMER DE FACTURA</th>
                <th>CLIENTE</th>
                <th>SUB TOTAL</th>
                <th>FECHA A PAGAR</th>
                <th>DIAS CARTERA</th>
                <th>DIAS DE CREDITO</th>
                
             
            </tr>
        </thead>
        <tbody>
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facturas"]) || array_key_exists("facturas", $context) ? $context["facturas"] : (function () { throw new Twig_Error_Runtime('Variable "facturas" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 77
            echo "
        ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, $context["factura"], "forma", array()) == "CR")) {
                // line 79
                echo "            <tr>
                <td>";
                // line 80
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["factura"], "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "fecha", array()), "d/m/Y")) : ("")), "html", null, true);
                echo "</td>         
                <td>";
                // line 81
                echo twig_escape_filter($this->env, sprintf("%08d", twig_get_attribute($this->env, $this->source, $context["factura"], "id", array())), "html", null, true);
                echo "</td>
                <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["factura"], "idcliente", array()), "nombre", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->ingresomontoFilter(twig_get_attribute($this->env, $this->source, $context["factura"], "detallesFacturas", array())), "html", null, true);
                echo "</td>
                 <td>";
                // line 84
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["factura"], "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "fechavencimiento", array()), "d/m/Y")) : ("")), "html", null, true);
                echo "</td>        
                  <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->diaspagadoFilter(twig_get_attribute($this->env, $this->source, $context["factura"], "movimientosdepositos", array())), "html", null, true);
                echo "</td>
                     <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "dias", array()), "html", null, true);
                echo "</td>
        ";
            }
            // line 88
            echo "
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 91
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
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

    // line 111
    public function block_addscript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        // line 112
        echo "    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script type=\"text/javascript\">
          jQuery(document).ready(function () {


\$.fn.dataTableExt.afnFiltering.push(
  function( oSettings, aData, iDataIndex ) {
    var iFini = document.getElementById('min').value;
    var iFfin = document.getElementById('max').value;
    var iStartDateCol = 0;
    var iEndDateCol = 0;

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

          div.find(\".dataTables_filter\").append('<br><label>Factura<select id=\"idfactura\"><option value=\"\">Factura: </option></select></label>');
            this.api().column(1).each(function () {
                var column = this;
                console.log(column);
                \$('#idfactura').on('change',function(){
                var val=\$(this).val();
                console.log(val);
                column.search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                });

                column.data().unique().sort().each( function ( d, j ) {
                    \$(\"#idfactura\").append( '<option value=\"'+d+'\">'+d+'</option>' )
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
    .column( 3 , {page:'current'})
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
        return "reportes/cobrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 112,  253 => 111,  230 => 95,  221 => 91,  214 => 88,  209 => 86,  205 => 85,  201 => 84,  197 => 83,  193 => 82,  189 => 81,  185 => 80,  182 => 79,  180 => 78,  177 => 77,  172 => 76,  127 => 33,  117 => 29,  111 => 25,  107 => 24,  98 => 23,  74 => 8,  65 => 7,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Cuentas por cobrar{% endblock %}



{% block header %}

        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Cuentas por cobrar</a></li>                            
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
                
                <th>FECHA</th>
                <th>NUMER DE FACTURA</th>
                <th>CLIENTE</th>
                <th>SUB TOTAL</th>
                <th>FECHA A PAGAR</th>
                <th>DIAS CARTERA</th>
                <th>DIAS DE CREDITO</th>
                
             
            </tr>
        </thead>
        <tbody>
        {% for factura in facturas %}

        {% if factura.forma == \"CR\" %}
            <tr>
                <td>{{ factura.fecha ? factura.fecha|date('d/m/Y') : ''  }}</td>         
                <td>{{ \"%08d\" | format(factura.id) }}</td>
                <td>{{ factura.idcliente.nombre }}</td>
                <td>{{ factura.detallesFacturas|ingresomontos }}</td>
                 <td>{{ factura.fecha ? factura.fechavencimiento|date('d/m/Y') : ''  }}</td>        
                  <td>{{ factura.movimientosdepositos|dias }}</td>
                     <td>{{ factura.dias }}</td>
        {% endif %}

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
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script type=\"text/javascript\">
          jQuery(document).ready(function () {


\$.fn.dataTableExt.afnFiltering.push(
  function( oSettings, aData, iDataIndex ) {
    var iFini = document.getElementById('min').value;
    var iFfin = document.getElementById('max').value;
    var iStartDateCol = 0;
    var iEndDateCol = 0;

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

          div.find(\".dataTables_filter\").append('<br><label>Factura<select id=\"idfactura\"><option value=\"\">Factura: </option></select></label>');
            this.api().column(1).each(function () {
                var column = this;
                console.log(column);
                \$('#idfactura').on('change',function(){
                var val=\$(this).val();
                console.log(val);
                column.search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                });

                column.data().unique().sort().each( function ( d, j ) {
                    \$(\"#idfactura\").append( '<option value=\"'+d+'\">'+d+'</option>' )
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
    .column( 3 , {page:'current'})
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
    {% endblock %}", "reportes/cobrar.html.twig", "/var/www/html/access/templates/reportes/cobrar.html.twig");
    }
}
