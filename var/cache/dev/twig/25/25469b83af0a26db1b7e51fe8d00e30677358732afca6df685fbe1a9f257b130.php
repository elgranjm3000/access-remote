<?php

/* template.html.twig */
class __TwigTemplate_5a30821d379b09423e0aa4efbd546d804823a3772a104df3c1ace93bb7d3aa38 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'addcss' => array($this, 'block_addcss'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'addscript' => array($this, 'block_addscript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Site Title-->
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!-- Stylesheets-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-tools/admin-forms/css/admin-forms.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/css/footable.core.min.css"), "html", null, true);
        echo " \">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Lato:300,400,600,700%7CMontserrat:400,700\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">

     <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\" rel=\"stylesheet\"> 

  
        <!--[if lt IE 10]>
    <div style=\"background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"images/ie8-panel/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
    <script src=\"js/html5shiv.min.js\"></script>
        <![endif]-->
 ";
        // line 30
        $this->displayBlock('addcss', $context, $blocks);
        // line 33
        echo " 
  </head>
  <body>
    <!-- Start: Main-->
    <div id=\"main\">
      <!-- Page Header-->
      <!--
      ---------------------------------------------------------------+
      \".navbar\" Helper Classes:
      -------------------------------------------------------------------+
      * Positioning Classes:
      '.navbar-static-top' - Static top positioned navbar
      '.navbar-static-top' - Fixed top positioned navbar
      * Available Skin Classes:
      .bg-dark    .bg-primary   .bg-success
      .bg-info    .bg-warning   .bg-danger
      .bg-alert   .bg-system
      -------------------------------------------------------------------+
      Example: <header class=\"navbar navbar-fixed-top bg-primary\">
      Results: Fixed top navbar with primary background
      -----------------------------------------------------------------
      -->
      <!-- Start: Header-->
      <header class=\"navbar undefined\">
        <div class=\"navbar-branding\"><a href=\"index.html\" class=\"navbar-brand text-uppercase\">Sistema</a><span id=\"toggle_sidemenu_l\" class=\"fa fa-bars\"></span></div>
        <ul class=\"nav navbar-nav navbar-left\"></ul>
       ";
        // line 64
        echo "        <ul class=\"nav navbar-nav navbar-right\">
          <li><h1>Bienvenido ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->source); })()), "user", array()), "username", array()), "html", null, true);
        echo "</h1></li>
          <li class=\"dropdown menu-merge\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle fw600 p15\"><span class=\"fa fa-angle-down\"></span> </a>
            <ul role=\"menu\" class=\"dropdown-menu list-group dropdown-persist w250\">
      
            
              <li class=\"list-group-item\"><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit_perfil", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 70, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"animated animated-short fadeInUp\"><span class=\"fa fa-user\"></span> Mi perfil</a></li>


              <li class=\"list-group-item\"><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"animated animated-short fadeInUp\"><span class=\"fa fa-user\"></span> Usuarios </a></li>
              
             
              <li class=\"dropdown-footer\"><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\"><span class=\"fa fa-power-off pr5\"></span> Cerrar sistema</a></li>
            </ul>
          </li>
        </ul>
      </header>
      <!-- Start: Sidebar-->
      <aside id=\"sidebar_left\" class=\"nano nano-light affix\">
        <!-- Start: Sidebar Left Content-->
        <div class=\"sidebar-left-content nano-content\">
          <!-- Start: Sidebar Header-->
          <header class=\"sidebar-header\">
            <!-- Sidebar Widget - Search (hidden)-->
            <div class=\"sidebar-widget search-widget hidden\">
              <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input id=\"sidebar-search\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"/>
              </div>
            </div>
          </header>
          <ul class=\"nav sidebar-menu\">
            <li class=\"sidebar-label pt35\"></li>
            
            <li class=\"sidebar-label pt35\"></li>
            
            
            <li><a title=\"Proveedores\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_index");
        echo "\" ><span class=\"fa fa-building\"></span><span class=\"sidebar-title\">Proveedores</span><span class=\"caret\"></span></a>
              
                </li>
                
                <li><a title=\"Clientes\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_index");
        echo "\" ><span class=\"fa fa-child\"></span><span class=\"sidebar-title\">Clientes</span><span class=\"caret\"></span></a>
              
                </li>

                 <li><a title=\"Clientes\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_index");
        echo "\" ><span class=\"fa fa-product-hunt\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Productos</span><span class=\"caret\"></span></a>
              
                </li>



                </li>

                <li><a title=\"Clientes\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("familia_index");
        echo "\" ><span class=\"fa fa-users\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Familia</span><span class=\"caret\"></span></a>
              
                </li>

                <li><a title=\"Clientes\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("almacen_index");
        echo "\" ><span class=\"fa fa-cube\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Almacenes</span><span class=\"caret\"></span></a>
              
                </li>

   <li><a title=\"Clientes\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_index");
        echo "\" ><span class=\"fa fa-product-hunt\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Ingresar Productos</span><span class=\"caret\"></span></a>
              

                <li><a title=\"Movimientos\" href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_index");
        echo "\" ><span class=\"glyphicon glyphicon-export\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Movimientos Almacenes</span><span class=\"caret\"></span></a>
              
                </li>
                
    <li><a title=\"Clientes\" href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_index");
        echo "\" ><span class=\"fa fa-bookmark\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Facturas</span><span class=\"caret\"></span></a>
              
                </li>


    <li><a title=\"Clientes\" href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descuento_index");
        echo "\" ><span class=\"fa fa-percent\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Descuentos</span><span class=\"caret\"></span></a>           </li>

                <li><a title=\"Clientes\" href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_index");
        echo "\" ><span class=\" fa fa-plus-square-o\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Depositos</span><span class=\"caret\"></span></a>
              
                </li>

                <li><a title=\"Clientes\" href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventario");
        echo "\" ><span class=\" fa fa-plus-square-o\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Control de Inventario</span><span class=\"caret\"></span></a>
              
                </li>

                <li><a href=\"#\" class=\"accordion-toggle\"><span class=\"glyphicon glyphicon-fire\"></span><span class=\"sidebar-title\">Reportes</span><span class=\"caret\"></span></a>
              <ul class=\"nav sub-nav\" style=\"\">
                <li><a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesventas");
        echo "\">
                  <span class=\"glyphicon glyphicon-modal-window\"></span>Ventas</a>
                </li>
                <li>
                  <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesutilidadproductos");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Utilidad</a>
                </li>
                <li>
                  <a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesclientes");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Clientes y Vendedores</a>
                </li>

                   <li>
                  <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesproductos");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Listado de Productos</a>
                </li>

                 <li>
                  <a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesproveedores");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Listado de Proveedores</a>
                </li>


                 <li>
                  <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesventasfechas");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Listado de Ventas %</a>
                </li>

                  <li>
                  <a href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cobrar");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Cuentas por cobrar</a>
                </li>
              </ul>
            </li>
                
                
            
             
               
              </ul>
            </li>
            <li class=\"sidebar-label pt35\"></li>
            
           
         
          
            
         
            <!-- sidebar bullets-->
         
          </ul>
          <!-- Start: Sidebar Collapse Button-->
          <div class=\"sidebar-toggle-mini\"><a href=\"#\"><span class=\"fa fa-sign-out\"></span></a></div>
        </div>
      </aside>
      <!-- Start: Content-Wrapper-->
      <section id=\"content_wrapper\">
        <!-- Start: Topbar-Dropdown-->
        <div id=\"topbar-dropmenu\" class=\"alt\">
          <div class=\"topbar-menu row\">
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-primary light\"><span class=\"glyphicon glyphicon-inbox text-muted\"></span><span class=\"metro-title\">Messages</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-info light\"><span class=\"glyphicon glyphicon-user text-muted\"></span><span class=\"metro-title\">Users</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-success light\"><span class=\"glyphicon glyphicon-headphones text-muted\"></span><span class=\"metro-title\">Support</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-system light\"><span class=\"glyphicon glyphicon-facetime-video text-muted\"></span><span class=\"metro-title\">Videos</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-warning light\"><span class=\"fa fa-gears text-muted\"></span><span class=\"metro-title\">Settings</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-alert light\"><span class=\"glyphicon glyphicon-picture text-muted\"></span><span class=\"metro-title\">Pictures</span></a></div>
          </div>
        </div>
        <!-- Start: Topbar-->

        ";
        // line 218
        $this->displayBlock('header', $context, $blocks);
        // line 220
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 223
        echo "       
        <!-- Begin: Content-->
       
    </div>

    <style type=\"text/css\">
  
      .ladda-button[data-loading] {
        overflow: visible;
      }
      
      .ladda-button[data-style=contract][data-loading] {
        width: 35px;
      }


</style>
    <!-- core scripts-->

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script> 
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/core.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme Javascript-->
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"https://fooplugins.github.io/FooTable/compiled/footable.min.js\"></script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js\"></script>

    

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js\"></script>

<script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js\"></script>
     <script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js\"></script>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css\">
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js\"></script>
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />

<script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apidatatable/sum.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      jQuery(document).ready(function () {
        \"use strict\";
        // Init Theme Core
        Core.init();
        // Init Demo JS
               Demo.init();
 Ladda.bind('.ladda-button', {
          timeout: 2000
        });

        // Init FooTable Examples
       /* \$('.footable').footable({
\"filtering\": {
        \"enabled\": true
      }
    });*/

   Ladda.bind('.progress-button', {
          callback: function (instance) {
            var progress = 0;
            var interval = setInterval(function () {
              progress = Math.min(progress + Math.random() * 0.1, 1);
              instance.setProgress(progress);
              if (progress === 1) {
                instance.stop();
                clearInterval(interval);
              }
            }, 200);
          }
        });

 \$(\"body\").removeClass(\"sb-l-m\");


  
 \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });


\$('.js-datepickertable').datepicker({
            format: 'dd/mm/yyyy'
        });

        \$('.footable').DataTable({
           \"bLengthChange\":false,
                  \"bFilter\":true,
                  \"bInfo\":false,
                  \"bAutoWidth\":false,
        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
        }




    });

 \$('.familia').DataTable({
           \"bLengthChange\":false,
                  \"bFilter\":true,
                  \"bInfo\":false,
                  \"bAutoWidth\":false,
        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
        },
    });

        


        \$('.footableproductos').DataTable({
           
        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
        },initComplete: function () {
            this.api().columns(3).every( function () {
                var column = this;
                var select = \$('<select class=\"form-control\"><option value=\"\"></option></select>')
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

            this.api().columns(0).every( function () {
                var column = this;
                var select = \$('<input type=\"text\" class=\"form-control\"  placeholder=\"Id producto\">')
                    .appendTo( \$(column.header()).empty() )
                    .on( 'keyup change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search(  \$(this).val() )
                            .draw();
                    } ); 
          
            } );
        }
    });

 // Bind progress buttons and simulate loading progress. Note: Button still requires \".ladda-button\" clas


\$('.producto').select2();

       


      });
    </script>
    <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

    ";
        // line 391
        $this->displayBlock('addscript', $context, $blocks);
        // line 393
        echo "    <script type=\"text/javascript\">
    toastr.options = {
  \"closeButton\": false,
  \"debug\": false,
  \"newestOnTop\": false,
  \"progressBar\": true,
  \"positionClass\": \"toast-top-center\",
  \"preventDuplicates\": true,
  \"onclick\": null,
  \"showDuration\": \"300\",
  \"hideDuration\": \"1000\",
  \"timeOut\": \"5000\",
  \"extendedTimeOut\": \"1000\",
  \"showEasing\": \"swing\",
  \"hideEasing\": \"linear\",
  \"showMethod\": \"fadeIn\",
  \"hideMethod\": \"fadeOut\"
}
    </script>
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_addcss($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addcss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addcss"));

        // line 31
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 219
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 220
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 221
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 391
    public function block_addscript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        // line 392
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 392,  630 => 391,  619 => 221,  610 => 220,  600 => 219,  591 => 218,  580 => 31,  571 => 30,  554 => 5,  524 => 393,  522 => 391,  392 => 264,  372 => 247,  368 => 246,  364 => 245,  359 => 243,  337 => 223,  334 => 220,  332 => 218,  288 => 177,  280 => 172,  271 => 166,  263 => 161,  255 => 156,  248 => 152,  241 => 148,  232 => 142,  225 => 138,  220 => 136,  212 => 131,  205 => 127,  199 => 124,  192 => 120,  185 => 116,  174 => 108,  167 => 104,  160 => 100,  133 => 76,  127 => 73,  121 => 70,  113 => 65,  110 => 64,  82 => 33,  80 => 30,  64 => 17,  57 => 13,  52 => 11,  47 => 9,  40 => 5,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Site Title-->
    <title>{% block title %}{% endblock %}</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <link rel=\"icon\" href=\"{{ asset('img/favicon.ico') }}\" type=\"image/x-icon\">
    <!-- Stylesheets-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}\">

            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/css/footable.core.min.css')}} \">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Lato:300,400,600,700%7CMontserrat:400,700\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/skin/default_skin/css/theme.css') }}\">

     <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\" rel=\"stylesheet\"> 

  
        <!--[if lt IE 10]>
    <div style=\"background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"images/ie8-panel/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
    <script src=\"js/html5shiv.min.js\"></script>
        <![endif]-->
 {% block addcss %}

        {% endblock %}
 
  </head>
  <body>
    <!-- Start: Main-->
    <div id=\"main\">
      <!-- Page Header-->
      <!--
      ---------------------------------------------------------------+
      \".navbar\" Helper Classes:
      -------------------------------------------------------------------+
      * Positioning Classes:
      '.navbar-static-top' - Static top positioned navbar
      '.navbar-static-top' - Fixed top positioned navbar
      * Available Skin Classes:
      .bg-dark    .bg-primary   .bg-success
      .bg-info    .bg-warning   .bg-danger
      .bg-alert   .bg-system
      -------------------------------------------------------------------+
      Example: <header class=\"navbar navbar-fixed-top bg-primary\">
      Results: Fixed top navbar with primary background
      -----------------------------------------------------------------
      -->
      <!-- Start: Header-->
      <header class=\"navbar undefined\">
        <div class=\"navbar-branding\"><a href=\"index.html\" class=\"navbar-brand text-uppercase\">Sistema</a><span id=\"toggle_sidemenu_l\" class=\"fa fa-bars\"></span></div>
        <ul class=\"nav navbar-nav navbar-left\"></ul>
       {# <form role=\"search\" class=\"navbar-form navbar-left navbar-search alt\"><span class=\"hide visible-md-inline-block visible-lg-inline-block fa fa-search fs18\"></span>
          <div class=\"form-group\">
            <input type=\"text\" placeholder=\"Search...\" class=\"form-control\">
          </div>
        </form> #}
        <ul class=\"nav navbar-nav navbar-right\">
          <li><h1>Bienvenido {{ app.user.username }}</h1></li>
          <li class=\"dropdown menu-merge\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle fw600 p15\"><span class=\"fa fa-angle-down\"></span> </a>
            <ul role=\"menu\" class=\"dropdown-menu list-group dropdown-persist w250\">
      
            
              <li class=\"list-group-item\"><a href=\"{{ path('user_edit_perfil', {'id': app.user.id}) }}\" class=\"animated animated-short fadeInUp\"><span class=\"fa fa-user\"></span> Mi perfil</a></li>


              <li class=\"list-group-item\"><a href=\"{{ path ('user_index') }}\" class=\"animated animated-short fadeInUp\"><span class=\"fa fa-user\"></span> Usuarios </a></li>
              
             
              <li class=\"dropdown-footer\"><a href=\"{{path('security_logout')}}\"><span class=\"fa fa-power-off pr5\"></span> Cerrar sistema</a></li>
            </ul>
          </li>
        </ul>
      </header>
      <!-- Start: Sidebar-->
      <aside id=\"sidebar_left\" class=\"nano nano-light affix\">
        <!-- Start: Sidebar Left Content-->
        <div class=\"sidebar-left-content nano-content\">
          <!-- Start: Sidebar Header-->
          <header class=\"sidebar-header\">
            <!-- Sidebar Widget - Search (hidden)-->
            <div class=\"sidebar-widget search-widget hidden\">
              <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input id=\"sidebar-search\" type=\"text\" placeholder=\"Search...\" class=\"form-control\"/>
              </div>
            </div>
          </header>
          <ul class=\"nav sidebar-menu\">
            <li class=\"sidebar-label pt35\"></li>
            
            <li class=\"sidebar-label pt35\"></li>
            
            
            <li><a title=\"Proveedores\" href=\"{{ path('proveedores_index') }}\" ><span class=\"fa fa-building\"></span><span class=\"sidebar-title\">Proveedores</span><span class=\"caret\"></span></a>
              
                </li>
                
                <li><a title=\"Clientes\" href=\"{{ path('clientes_index') }}\" ><span class=\"fa fa-child\"></span><span class=\"sidebar-title\">Clientes</span><span class=\"caret\"></span></a>
              
                </li>

                 <li><a title=\"Clientes\" href=\"{{ path('productos_index') }}\" ><span class=\"fa fa-product-hunt\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Productos</span><span class=\"caret\"></span></a>
              
                </li>



                </li>

                <li><a title=\"Clientes\" href=\"{{ path('familia_index') }}\" ><span class=\"fa fa-users\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Familia</span><span class=\"caret\"></span></a>
              
                </li>

                <li><a title=\"Clientes\" href=\"{{ path('almacen_index') }}\" ><span class=\"fa fa-cube\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Almacenes</span><span class=\"caret\"></span></a>
              
                </li>

   <li><a title=\"Clientes\" href=\"{{ path('ingresos_index') }}\" ><span class=\"fa fa-product-hunt\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Ingresar Productos</span><span class=\"caret\"></span></a>
              

                <li><a title=\"Movimientos\" href=\"{{ path('movimientos_almacen_index') }}\" ><span class=\"glyphicon glyphicon-export\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Movimientos Almacenes</span><span class=\"caret\"></span></a>
              
                </li>
                
    <li><a title=\"Clientes\" href=\"{{ path('facturas_index') }}\" ><span class=\"fa fa-bookmark\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Facturas</span><span class=\"caret\"></span></a>
              
                </li>


    <li><a title=\"Clientes\" href=\"{{ path('descuento_index') }}\" ><span class=\"fa fa-percent\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Descuentos</span><span class=\"caret\"></span></a>           </li>

                <li><a title=\"Clientes\" href=\"{{ path('movimientos_depositos_index') }}\" ><span class=\" fa fa-plus-square-o\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Depositos</span><span class=\"caret\"></span></a>
              
                </li>

                <li><a title=\"Clientes\" href=\"{{ path('inventario') }}\" ><span class=\" fa fa-plus-square-o\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Control de Inventario</span><span class=\"caret\"></span></a>
              
                </li>

                <li><a href=\"#\" class=\"accordion-toggle\"><span class=\"glyphicon glyphicon-fire\"></span><span class=\"sidebar-title\">Reportes</span><span class=\"caret\"></span></a>
              <ul class=\"nav sub-nav\" style=\"\">
                <li><a href=\"{{ path('reportesventas') }}\">
                  <span class=\"glyphicon glyphicon-modal-window\"></span>Ventas</a>
                </li>
                <li>
                  <a href=\"{{ path('reportesutilidadproductos') }}\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Utilidad</a>
                </li>
                <li>
                  <a href=\"{{ path('reportesclientes') }}\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Clientes y Vendedores</a>
                </li>

                   <li>
                  <a href=\"{{ path('reportesproductos') }}\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Listado de Productos</a>
                </li>

                 <li>
                  <a href=\"{{ path('reportesproveedores') }}\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Listado de Proveedores</a>
                </li>


                 <li>
                  <a href=\"{{ path('reportesventasfechas') }}\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Listado de Ventas %</a>
                </li>

                  <li>
                  <a href=\"{{ path('cobrar') }}\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Cuentas por cobrar</a>
                </li>
              </ul>
            </li>
                
                
            
             
               
              </ul>
            </li>
            <li class=\"sidebar-label pt35\"></li>
            
           
         
          
            
         
            <!-- sidebar bullets-->
         
          </ul>
          <!-- Start: Sidebar Collapse Button-->
          <div class=\"sidebar-toggle-mini\"><a href=\"#\"><span class=\"fa fa-sign-out\"></span></a></div>
        </div>
      </aside>
      <!-- Start: Content-Wrapper-->
      <section id=\"content_wrapper\">
        <!-- Start: Topbar-Dropdown-->
        <div id=\"topbar-dropmenu\" class=\"alt\">
          <div class=\"topbar-menu row\">
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-primary light\"><span class=\"glyphicon glyphicon-inbox text-muted\"></span><span class=\"metro-title\">Messages</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-info light\"><span class=\"glyphicon glyphicon-user text-muted\"></span><span class=\"metro-title\">Users</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-success light\"><span class=\"glyphicon glyphicon-headphones text-muted\"></span><span class=\"metro-title\">Support</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-system light\"><span class=\"glyphicon glyphicon-facetime-video text-muted\"></span><span class=\"metro-title\">Videos</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-warning light\"><span class=\"fa fa-gears text-muted\"></span><span class=\"metro-title\">Settings</span></a></div>
            <div class=\"col-xs-4 col-sm-2\"><a href=\"#\" class=\"metro-tile bg-alert light\"><span class=\"glyphicon glyphicon-picture text-muted\"></span><span class=\"metro-title\">Pictures</span></a></div>
          </div>
        </div>
        <!-- Start: Topbar-->

        {% block header %}
        {% endblock %}
        {% block body %}

        {% endblock %}
       
        <!-- Begin: Content-->
       
    </div>

    <style type=\"text/css\">
  
      .ladda-button[data-loading] {
        overflow: visible;
      }
      
      .ladda-button[data-style=contract][data-loading] {
        width: 35px;
      }


</style>
    <!-- core scripts-->

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script> 
    <script src=\"{{ asset('plugins/core.min.js') }}\"></script>
    <!-- Theme Javascript-->
    <script src=\"{{ asset('assets/js/utility/utility.js') }}\"></script>
    <script src=\"{{ asset('assets/js/demo/demo.js') }}\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
    <script type=\"text/javascript\" src=\"https://fooplugins.github.io/FooTable/compiled/footable.min.js\"></script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js\"></script>

    

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js\"></script>

<script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js\"></script>
     <script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js\"></script>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css\">
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js\"></script>
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />

<script type=\"text/javascript\" src=\"{{ asset('apidatatable/sum.js') }}\"></script>
    <script type=\"text/javascript\">
      jQuery(document).ready(function () {
        \"use strict\";
        // Init Theme Core
        Core.init();
        // Init Demo JS
               Demo.init();
 Ladda.bind('.ladda-button', {
          timeout: 2000
        });

        // Init FooTable Examples
       /* \$('.footable').footable({
\"filtering\": {
        \"enabled\": true
      }
    });*/

   Ladda.bind('.progress-button', {
          callback: function (instance) {
            var progress = 0;
            var interval = setInterval(function () {
              progress = Math.min(progress + Math.random() * 0.1, 1);
              instance.setProgress(progress);
              if (progress === 1) {
                instance.stop();
                clearInterval(interval);
              }
            }, 200);
          }
        });

 \$(\"body\").removeClass(\"sb-l-m\");


  
 \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });


\$('.js-datepickertable').datepicker({
            format: 'dd/mm/yyyy'
        });

        \$('.footable').DataTable({
           \"bLengthChange\":false,
                  \"bFilter\":true,
                  \"bInfo\":false,
                  \"bAutoWidth\":false,
        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
        }




    });

 \$('.familia').DataTable({
           \"bLengthChange\":false,
                  \"bFilter\":true,
                  \"bInfo\":false,
                  \"bAutoWidth\":false,
        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
        },
    });

        


        \$('.footableproductos').DataTable({
           
        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
        },initComplete: function () {
            this.api().columns(3).every( function () {
                var column = this;
                var select = \$('<select class=\"form-control\"><option value=\"\"></option></select>')
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

            this.api().columns(0).every( function () {
                var column = this;
                var select = \$('<input type=\"text\" class=\"form-control\"  placeholder=\"Id producto\">')
                    .appendTo( \$(column.header()).empty() )
                    .on( 'keyup change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search(  \$(this).val() )
                            .draw();
                    } ); 
          
            } );
        }
    });

 // Bind progress buttons and simulate loading progress. Note: Button still requires \".ladda-button\" clas


\$('.producto').select2();

       


      });
    </script>
    <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

    {% block addscript %}
    {% endblock %}
    <script type=\"text/javascript\">
    toastr.options = {
  \"closeButton\": false,
  \"debug\": false,
  \"newestOnTop\": false,
  \"progressBar\": true,
  \"positionClass\": \"toast-top-center\",
  \"preventDuplicates\": true,
  \"onclick\": null,
  \"showDuration\": \"300\",
  \"hideDuration\": \"1000\",
  \"timeOut\": \"5000\",
  \"extendedTimeOut\": \"1000\",
  \"showEasing\": \"swing\",
  \"hideEasing\": \"linear\",
  \"showMethod\": \"fadeIn\",
  \"hideMethod\": \"fadeOut\"
}
    </script>
  </body>
</html>", "template.html.twig", "/var/www/html/access/templates/template.html.twig");
    }
}
