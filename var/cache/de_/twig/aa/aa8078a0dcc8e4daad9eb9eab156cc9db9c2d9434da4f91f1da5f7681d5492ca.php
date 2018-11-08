<?php

/* ensamble/new.html.twig */
class __TwigTemplate_836ec30e1cbb33cf93e968165dab3d4dee4f55aa0f526c3937e610be3e7b63ae extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ensamble/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ensamble/new.html.twig"));

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

        echo "Nuevo Ensamble";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "ensamble/_form.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_addscript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addscript"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  190 => 78,  161 => 52,  150 => 43,  141 => 42,  128 => 38,  125 => 37,  116 => 36,  92 => 19,  80 => 10,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Nuevo Ensamble{% endblock %}

{% block header %}
 <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"{{ path('productos_index') }}\">Ensamble</a></li>                            
              <li class=\"crumb-trail\">Nuevo registro</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"{{ path('productos_index') }}\">Listado de productos</a></li>
              
            </ul>
          </div>
         
        </header>
<div class=\"content-header\">
                <h2><b class=\"text-primary\">Agregar Ensamble</b>
                </h2>
              
              </div>


{% endblock %}



{% block body %}

    {{ include('ensamble/_form.html.twig') }}

{% endblock %}

{% block addscript %}

<script type=\"text/javascript\">
      jQuery(document).ready(function (){

var total = 0;
var descuento = 0;
 var table = \$('.footable').DataTable();

    \$(\"#ensamble1_idproducto\").change(function() {
       \$.get( \"{{ path('buscarproducto') }}\", { iditems:\$(this).val()}).done(function( data ) {

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
        \$.get( \"{{ path('disponibilidad') }}\", { producto:producto,cantidad:cantidad}).done(function( data ) {

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
{% endblock %}", "ensamble/new.html.twig", "C:\\xampp\\htdocs\\access\\templates\\ensamble\\new.html.twig");
    }
}
