<?php

/* facturas/edit.html.twig */
class __TwigTemplate_698410459c7215c3c02438f27591a06b2dd7af9b6b94ac92266f58abf017a633 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "facturas/edit.html.twig", 1);
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
        echo "Editar  Facturas";
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
        echo "
 <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_index");
        echo "\">Facturas</a></li>                            
              <li class=\"crumb-trail\">Editar registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_index");
        echo "\">Listado de Facturas</a></li>
              <li>  ";
        // line 28
        echo twig_include($this->env, $context, "facturas/_delete_form.html.twig");
        echo "</li>
              <li class=\"active\" ><a target=\"_blank\"  href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("factura_pdf", array("id" => twig_get_attribute($this->env, $this->source, ($context["factura"] ?? null), "id", array()))), "html", null, true);
        echo "\">Imprimir Factura</a></li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Editar Facturas</b>
                </h2>
              
              </div>
";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "  

    ";
        // line 46
        echo twig_include($this->env, $context, "facturas/_form.html.twig", array("button_label" => "Actualizar"));
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


var forma = \$( \"#facturas_forma input:checked\" ).val();
console.log(forma);
if(forma == \"CR\"){
       \$(\"#facturas_dias\").show();
    }else{
      \$ (\"#facturas_dias\"). prop ('selectedIndex', 0);
       \$(\"#facturas_dias\").hide();
    }



\$( \"#facturas_forma input:radio\" ).click(function() {
    if(\$(this).val() == \"CR\"){
       \$(\"#facturas_dias\").show();
    }else{
      \$ (\"#facturas_dias\"). prop ('selectedIndex', 0);
       \$(\"#facturas_dias\").hide();
    }
   });



var table = \$('.footable').DataTable()
 var datossuma =  table.column( 4 ).data().sum();
  console.log(datossuma);
    \$(\".totales\").html(\"Total: \"+datossuma.toFixed(2));

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








    \$(\"#detalles_factura_idproducto\").change(function() {
       \$.get( \"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscarproducto");
        echo "\", { iditems:\$(this).val()}).done(function( data ) {

            if(data.length>0){ 
                  \$(\".precio\").val(data[0]['precioventa']);         

                  var total = data[0]['precioventa']*\$(\".cantidad\").val();                
                  \$(\".total\").val(total);
                                   \$(\".cantidad\").change();

              }
              
          });
    });


    
        \$(\".cantidad\").change(function() {

            var total = \$(\".precio\").val()*\$(\".cantidad\").val();                
            \$(\".total\").val(total);

       \$.get( \"";
        // line 149
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


    var table = \$('.footable').DataTable();

    \$('.footable tbody').on('click', '.remove', function () {

      var r = confirm(\"¿Desea quitar este registro?\");
      if(r == true){
            var btn = this;
            \$tr = \$(this).closest('tr');
            var data = table.row(\$tr).data();          
            table.row(\$(btn).parents('tr')).remove().draw(false);
            var idfound =  \$tr.find(\"td:eq(0)\").find(\".idproducto\").val();
if(idfound > 0){


 \$.ajax({      
      
      url:   '";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("detallesproductosremove");
        echo "',
     type: \"GET\",
      data: { id : idfound },    
      beforeSend: function () {
      },
      success:  function (response) {
        
      }
    }); 

}

  var datossuma =  table.column( 4 ).data().sum();
  
    \$(\".totales\").html(\"Total: \"+datossuma.toFixed(2));

          }
      });

      });

</script>
";
    }

    public function getTemplateName()
    {
        return "facturas/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 186,  222 => 149,  198 => 128,  119 => 51,  116 => 50,  108 => 46,  104 => 44,  101 => 43,  84 => 29,  80 => 28,  76 => 27,  64 => 18,  57 => 13,  54 => 12,  45 => 6,  42 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "facturas/edit.html.twig", "/var/www/html/access/templates/facturas/edit.html.twig");
    }
}
