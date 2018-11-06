<?php

/* ensamble/new.html.twig */
class __TwigTemplate_5b83b3cd3a6049610f6701b9b847288f96336a6c355f8848e00aea16d3b841f0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "ensamble/new.html.twig", 1);
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
        echo "Nuevo Ensamble";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo " <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_index");
        echo "\">Ensamble</a></li>                            
              <li class=\"crumb-trail\">Nuevo registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_index");
        echo "\">Listado de productos</a></li>
              
            </ul>
          </div>
         
        </header>
<div class=\"content-header\">
                <h2><b class=\"text-primary\">Agregar Ensamble</b>
                </h2>
              
              </div>


";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "ensamble/_form.html.twig");
        echo "

";
    }

    // line 42
    public function block_addscript($context, array $blocks = array())
    {
        // line 43
        echo "
<script type=\"text/javascript\">
      jQuery(document).ready(function (){

var total = 0;
var descuento = 0;
 var table = \$('.footable').DataTable();

    \$(\"#ensamble1_idproducto\").change(function() {
       \$.get( \"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buscarproducto");
        echo "\", { iditems:\$(this).val()}).done(function( data ) {

            if(data.length>0){ 
                  \$(\".monto\").val(data[0]['precioventa']);         

                  total = data[0]['precioventa']*\$(\".cantidad\").val();                
                  \$(\".subtotal\").val(total);
                 \$(\".cantidad\").change();
              }
              
           });
    });






      \$(\".cantidad\").change(function() {

          var producto =  \$(\"#ensamble1_idproducto\").val();
          var cantidad = \$(this).val();
            var total = \$(\".monto\").val()*\$(\".cantidad\").val();                
            \$(\".subtotal\").val(total);

            if(cantidad > 0){
        \$.get( \"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disponibilidad");
        echo "\", { producto:producto,cantidad:cantidad}).done(function( data ) {

            if(data.length == 0){ 
               \$(\".cantidad\").val('');
                    \$(\".cantidad\").focus();
                toastr.error( \"Producto <b>\"+ \$(\".producto option:selected\").text()+ '</b> No hay producto disponible');
                
              }else{
                
                  if(cantidad > data[0]['cantidad']){
                    \$(\".cantidad\").val('');
                    \$(\".cantidad\").focus();
                    toastr.error( \"Debe colocar una cantidad menor a \"+ data[0]['cantidad']);
                    
                  }
              }
              
           });
      }

    });

      \$( \".ingresar\" ).click(function() {
          var t = \$('.footable').DataTable();

            var productos =  \$(\".producto\").val();
            var cantidad =  \$(\".cantidad\").val();
            var precio = \$(\".monto\").val();
            var total = \$(\".subtotal\").val();
            

                   t.row.add( [
                  \$(\".producto option:selected\").text()+\"<input type='hidden' value='\"+productos+\"' name='productos[]'><input type='hidden' value='\"+total+\"' name='subtotal[]'>\",
                  \$(\".cantidad\").val(),
                  \$(\".monto\").val()+\"<input type='hidden' value='\"+precio+\"' name='precio[]'><input type='hidden' value='\"+cantidad+\"' name='cantidad[]'>\",
                    \$(\".subtotal\").val(),
                     \"<button type='button' class='btn btn-simple btn-danger btn-icon remove' title='Cancelar pedido'><span class='fa fa-remove'></span></button>\"
                  ] ).draw( false );


                   \$(\".cerramodal\").click();
                   \$(\".ensamble\")[0].reset();

  var datossuma =  table.column( 3 ).data().sum();
  var precio = datossuma/table.column( 1 ).data().sum()
  console.log(precio);
    \$(\".precioventa\").val(precio.toFixed(2));  


          });


       \$('.footable tbody').on('click', '.remove', function () {

      var r = confirm(\"¿Desea quitar este registro?\");
      if(r == true){
            var btn = this;
            \$tr = \$(this).closest('tr');
            var data = table.row(\$tr).data();          
            table.row(\$(btn).parents('tr')).remove().draw(false);


      
 var datossuma =  table.column( 3 ).data().sum();
  var precio = datossuma/table.column( 1 ).data().sum()
  console.log(precio);
    \$(\".precioventa\").val(precio.toFixed(2));  


          }
      });

    
});
    </script>
";
    }

    public function getTemplateName()
    {
        return "ensamble/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 78,  107 => 52,  96 => 43,  93 => 42,  86 => 38,  83 => 37,  80 => 36,  62 => 19,  50 => 10,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ensamble/new.html.twig", "/var/www/html/access/templates/ensamble/new.html.twig");
    }
}
