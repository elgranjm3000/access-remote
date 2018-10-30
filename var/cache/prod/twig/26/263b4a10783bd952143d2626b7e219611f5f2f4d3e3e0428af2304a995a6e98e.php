<?php

/* facturas/new.html.twig */
class __TwigTemplate_5b5af8b0e38936cd0567d7eb916f3dc047531785f53a47c3aa6d74868439a97f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "facturas/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'addcss' => array($this, 'block_addcss'),
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
        echo "Crear Facturas";
    }

    // line 5
    public function block_addcss($context, array $blocks = array())
    {
        // line 6
        echo "  <style type=\"text/css\">
    .precio,.total,.descuento{
      color:red !important;
    }
  </style>
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo " <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_index");
        echo "\">Facturas</a></li>                            
              <li class=\"crumb-trail\">Nueva Factura</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_index");
        echo "\">Historico Factura</a></li>
              
            </ul>
          </div>
         
        </header>
<div class=\"content-header\">
                <h2><b class=\"text-primary\">Facturación</b>
                </h2>
              
              </div>


";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "    

    ";
        // line 44
        echo twig_include($this->env, $context, "facturas/_form.html.twig");
        echo "


";
    }

    // line 50
    public function block_addscript($context, array $blocks = array())
    {
        // line 51
        echo "




<script type=\"text/javascript\">
      jQuery(document).ready(function (){

\$('#facturas_dias').removeAttr('required');
       \$(\"#facturas_dias\").hide();

\$( \"#facturas_forma input:radio\" ).click(function() {
    if(\$(this).val() == \"CR\"){
       \$(\"#facturas_dias\").show();
    }else{
      \$ (\"#facturas_dias\"). prop ('selectedIndex', 0);
       \$(\"#facturas_dias\").hide();
    }
   });
      \$( \".ingresar\" ).click(function() {
          var t = \$('.footable').DataTable();

            var productos =  \$(\".producto\").val();
            var cantidad =  \$(\".cantidad\").val();
            var precio = \$(\".precio\").val();
            var total = \$(\".total\").val();
            var promocion = \$(\".promocion\").val();
            var comentarios = \$(\".comentarios\").val();
            var porcentaje = \$(\".descuento\").val();

                   t.row.add( [
                    \$(\".producto option:selected\").text()+\"<input type='hidden' value='\"+productos+\"' name='productos[]'>\",
                    \$(\".cantidad\").val()+\"<input type='hidden' value='\"+cantidad+\"' name='cantidad[]'>\",
                    \$(\".precio\").val()+\"<input type='hidden' value='\"+precio+\"' name='precio[]'>\",
                    \$(\".descuento\").val()+\"<input type='hidden' value='\"+porcentaje+\"' name='descuento[]'>\",
                    \$(\".total\").val(),
                    \$(\".promocion\").val()+\"<input type='hidden' value='\"+promocion+\"' name='promocion[]'>\"+\" \"+\"<input type='hidden' value='\"+total+\"' name='total[]'>\",
                    \$(\".comentarios\").val()+\"<input type='hidden' value='\"+comentarios+\"' name='comentarios[]'>\",
                     \"<button type='button' class='btn btn-simple btn-danger btn-icon remove' title='Cancelar pedido'><span class='fa fa-remove'></span></button>\"
                  ] ).draw( false );


                   \$(\".cerramodal\").click();
                   \$(\".pedidos\")[0].reset();

   var table = \$('.footable').DataTable();
  var datossuma =  table.column( 4 ).data().sum();
  console.log(datossuma);
    \$(\".totales\").html(\"Total: \"+datossuma.toFixed(2));


          });





var total = 0;
var descuento = 0;

    \$(\"#detalles_factura_idproducto\").change(function() {
       \$.get( \"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscarproducto");
        echo "\", { iditems:\$(this).val()}).done(function( data ) {

            if(data.length>0){ 
                  \$(\".precio\").val(data[0]['precioventa']);         

                  total = data[0]['precioventa']*\$(\".cantidad\").val();                
                  \$(\".total\").val(total);
                 \$(\".cantidad\").change();
              }
              
          });
    });

        \$(\".cantidad\").change(function() {

            var total = \$(\".precio\").val()*\$(\".cantidad\").val();                
            \$(\".total\").val(total);

       \$.get( \"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscardescuento");
        echo "\", { id:\$(this).val()}).done(function( data ) {

            if(data.length>0){ 
              console.log(\"total \"+\$(\".total\").val());

                  //\$(\".descuento\").val(data[0]['porcentaje']);         
                 var totaldescuento = (total*data[0]['porcentaje'])/100;
                   descuento = \$(\".total\").val()-totaldescuento;
                  \$(\".descuento\").val(data[0]['porcentaje']);         
                  //var total = data[0]['precioventa']*\$(\".cantidad\").val();                
                  \$(\".total\").val(descuento);

              }else{
                 \$(\".total\").val(total);
                \$(\".descuento\").val(0);                         
              }
              
          });
    });


    /*\$(\".cantidad\").change(function() {
          var total = \$(\".precio\").val()*\$(\".cantidad\").val();                
          \$(\".total\").val(total);
    });*/

    var table = \$('.footable').DataTable();

    \$('.footable tbody').on('click', '.remove', function () {

      var r = confirm(\"¿Desea quitar este registro?\");
      if(r == true){
            var btn = this;
            \$tr = \$(this).closest('tr');
            var data = table.row(\$tr).data();          
            table.row(\$(btn).parents('tr')).remove().draw(false);


      
  var datossuma =  table.column( 4).data().sum();
  console.log(datossuma);
    \$(\".totales\").html(\"Total: \"+datossuma.toFixed(2));

          }
      });

      });

</script>
";
    }

    public function getTemplateName()
    {
        return "facturas/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 130,  174 => 112,  111 => 51,  108 => 50,  100 => 44,  96 => 42,  93 => 41,  75 => 26,  63 => 17,  57 => 13,  54 => 12,  45 => 6,  42 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "facturas/new.html.twig", "/var/www/html/access/templates/facturas/new.html.twig");
    }
}
