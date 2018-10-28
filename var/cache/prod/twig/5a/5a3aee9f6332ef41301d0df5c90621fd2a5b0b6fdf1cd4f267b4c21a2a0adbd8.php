<?php

/* template.html.twig */
class __TwigTemplate_deb8f55bbed8a0d7a4e1a296c87ab4003c099a04574ed0e89343640446774662 extends Twig_Template
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

  
        <!--[if lt IE 10]>
    <div style=\"background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"images/ie8-panel/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
    <script src=\"js/html5shiv.min.js\"></script>
        <![endif]-->
 ";
        // line 29
        $this->displayBlock('addcss', $context, $blocks);
        // line 32
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
        // line 63
        echo "        <ul class=\"nav navbar-nav navbar-right\">
          <li><h1>Bienvenido ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "</h1></li>
          <li class=\"dropdown menu-merge\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle fw600 p15\"><span class=\"fa fa-angle-down\"></span> </a>
            <ul role=\"menu\" class=\"dropdown-menu list-group dropdown-persist w250\">
      
            
              <li class=\"list-group-item\"><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit_perfil", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"animated animated-short fadeInUp\"><span class=\"fa fa-user\"></span> Mi perfil</a></li>


              <li class=\"list-group-item\"><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"animated animated-short fadeInUp\"><span class=\"fa fa-user\"></span> Usuarios </a></li>
              
             
              <li class=\"dropdown-footer\"><a href=\"";
        // line 75
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
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_index");
        echo "\" ><span class=\"fa fa-building\"></span><span class=\"sidebar-title\">Proveedores</span><span class=\"caret\"></span></a>
              
                </li>
                
                <li><a title=\"Clientes\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_index");
        echo "\" ><span class=\"fa fa-child\"></span><span class=\"sidebar-title\">Clientes</span><span class=\"caret\"></span></a>
              
                </li>

                 <li><a title=\"Clientes\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_index");
        echo "\" ><span class=\"fa fa-product-hunt\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Productos</span><span class=\"caret\"></span></a>
              
                </li>



                </li>

                <li><a title=\"Clientes\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("familia_index");
        echo "\" ><span class=\"fa fa-users\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Familia</span><span class=\"caret\"></span></a>
              
                </li>

                <li><a title=\"Clientes\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("almacen_index");
        echo "\" ><span class=\"fa fa-cube\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Almacenes</span><span class=\"caret\"></span></a>
              
                </li>

   <li><a title=\"Clientes\" href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_index");
        echo "\" ><span class=\"fa fa-product-hunt\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Ingresar Productos</span><span class=\"caret\"></span></a>
              

                <li><a title=\"Movimientos\" href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_index");
        echo "\" ><span class=\"glyphicon glyphicon-export\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Movimientos Almacenes</span><span class=\"caret\"></span></a>
              
                </li>
                
    <li><a title=\"Clientes\" href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_index");
        echo "\" ><span class=\"fa fa-bookmark\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Facturas</span><span class=\"caret\"></span></a>
              
                </li>


    <li><a title=\"Clientes\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descuento_index");
        echo "\" ><span class=\"fa fa-percent\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Descuentos</span><span class=\"caret\"></span></a>           </li>

                <li><a title=\"Clientes\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_index");
        echo "\" ><span class=\" fa fa-plus-square-o\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Depositos</span><span class=\"caret\"></span></a>
              
                </li>

                <li><a title=\"Clientes\" href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventario");
        echo "\" ><span class=\" fa fa-plus-square-o\" aria-hidden=\"true\"></span><span class=\"sidebar-title\">Control de Inventario</span><span class=\"caret\"></span></a>
              
                </li>

                <li><a href=\"#\" class=\"accordion-toggle\"><span class=\"glyphicon glyphicon-fire\"></span><span class=\"sidebar-title\">Reportes</span><span class=\"caret\"></span></a>
              <ul class=\"nav sub-nav\" style=\"\">
                <li><a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesventas");
        echo "\">
                  <span class=\"glyphicon glyphicon-modal-window\"></span>Ventas</a>
                </li>
                <li>
                  <a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesutilidadproductos");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Utilidad</a>
                </li>
                <li>
                  <a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesclientes");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Clientes y Vendedores</a>
                </li>

                   <li>
                  <a href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesproductos");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Listado de Productos</a>
                </li>

                 <li>
                  <a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesproveedores");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Listado de Proveedores</a>
                </li>


                 <li>
                  <a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reportesventasfechas");
        echo "\">
                    <span class=\"glyphicon glyphicon-modal-window\"></span>Listado de Ventas %</a>
                </li>

                  <li>
                  <a href=\"";
        // line 176
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
        // line 217
        $this->displayBlock('header', $context, $blocks);
        // line 219
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 222
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
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/core.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme Javascript-->
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
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
        // line 263
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

    ";
        // line 389
        $this->displayBlock('addscript', $context, $blocks);
        // line 391
        echo "  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 29
    public function block_addcss($context, array $blocks = array())
    {
        // line 30
        echo "
        ";
    }

    // line 217
    public function block_header($context, array $blocks = array())
    {
        // line 218
        echo "        ";
    }

    // line 219
    public function block_body($context, array $blocks = array())
    {
        // line 220
        echo "
        ";
    }

    // line 389
    public function block_addscript($context, array $blocks = array())
    {
        // line 390
        echo "    ";
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
        return array (  552 => 390,  549 => 389,  544 => 220,  541 => 219,  537 => 218,  534 => 217,  529 => 30,  526 => 29,  521 => 5,  516 => 391,  514 => 389,  385 => 263,  365 => 246,  361 => 245,  357 => 244,  352 => 242,  330 => 222,  327 => 219,  325 => 217,  281 => 176,  273 => 171,  264 => 165,  256 => 160,  248 => 155,  241 => 151,  234 => 147,  225 => 141,  218 => 137,  213 => 135,  205 => 130,  198 => 126,  192 => 123,  185 => 119,  178 => 115,  167 => 107,  160 => 103,  153 => 99,  126 => 75,  120 => 72,  114 => 69,  106 => 64,  103 => 63,  75 => 32,  73 => 29,  58 => 17,  51 => 13,  46 => 11,  41 => 9,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template.html.twig", "/var/www/html/access/templates/template.html.twig");
    }
}
