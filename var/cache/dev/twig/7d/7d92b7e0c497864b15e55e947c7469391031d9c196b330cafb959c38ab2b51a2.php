<?php

/* facturas/new.html.twig */
class __TwigTemplate_946b5d2471d16a0f71e00bcabdcf2e172deef48be12c710763a4df93a0326578 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/new.html.twig"));

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

        echo "Crear Facturas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_addcss($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addcss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addcss"));

        // line 6
        echo "  <style type=\"text/css\">
    .precio,.total,.descuento{
      color:red !important;
    }
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "    

    ";
        // line 44
        echo twig_include($this->env, $context, "facturas/_form.html.twig");
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_addscript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  261 => 130,  240 => 112,  177 => 51,  168 => 50,  154 => 44,  150 => 42,  141 => 41,  117 => 26,  105 => 17,  99 => 13,  90 => 12,  75 => 6,  66 => 5,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Crear Facturas{% endblock %}

 {% block addcss %}
  <style type=\"text/css\">
    .precio,.total,.descuento{
      color:red !important;
    }
  </style>
{% endblock %}
{% block header %}
 <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"{{ path('facturas_index') }}\">Facturas</a></li>                            
              <li class=\"crumb-trail\">Nueva Factura</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"{{ path('facturas_index') }}\">Historico Factura</a></li>
              
            </ul>
          </div>
         
        </header>
<div class=\"content-header\">
                <h2><b class=\"text-primary\">Facturación</b>
                </h2>
              
              </div>


{% endblock %}

{% block body %}
    

    {{ include('facturas/_form.html.twig') }}


{% endblock %}


{% block addscript %}





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
       \$.get( \"{{ path('buscarproducto') }}\", { iditems:\$(this).val()}).done(function( data ) {

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

       \$.get( \"{{ path('buscardescuento') }}\", { id:\$(this).val()}).done(function( data ) {

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
{% endblock %}
", "facturas/new.html.twig", "C:\\xampp\\htdocs\\access\\templates\\facturas\\new.html.twig");
    }
}
