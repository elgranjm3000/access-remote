<?php

/* graficos/index.html.twig */
class __TwigTemplate_bb26362b06cfc8addc0d947014ccefca8c4bcecd67cf9ae4d20d1c0d9fd887de extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "graficos/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "graficos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "graficos/index.html.twig"));

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

        echo "Ventas por usuarios";
        
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
        echo "
 <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Graficos</a></li>
              <li class=\"crumb-trail\">Metas</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"#\">Graficos</a></li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Control de graficos</b>
                </h2>
              
              </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "<div id=\"p6\" class=\"panel\">
                    <div class=\"panel-heading\"><span class=\"panel-title\">Column Graph</span></div>
                    <div class=\"panel-body pn\">
                      <div class=\"row table-layout\">
                        <div class=\"col-xs-12 va-m\">
                          <div id=\"usuarios\" style=\"width: 100%; height:400px; margin: 0 auto\"></div>
                        </div>
                       
                      </div>
                    </div>
                  
                  </div>

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
        echo "      <script type=\"text/javascript\">
      jQuery(document).ready(function () {

        
       /* demoHighCharts.init();*/
        
        // Init plugins for \".calendar-widget\"
        // plugins: FullCalendar
        //
          var highColors = [bgInfo, bgPrimary, bgSuccess, bgWarning,
            bgDanger, bgSuccess, bgSystem, bgDark
        ];
        var usuarios = \$('#usuarios');
                  
                    if (usuarios.length) {
                        \$('#usuarios').highcharts({
                         chart: {
    \t\t\t\t\t\ttype: 'column'
  \t\t\t\t\t\t},
\t\t\t\t\t  title: {
\t\t\t\t\t    text: 'Graficos'
\t\t\t\t\t  },
\t\t\t\t\t  subtitle: {
\t\t\t\t\t    text: 'Vendedores respecto a la ventas'
\t\t\t\t\t  },
\t\t\t\t\t  xAxis: {
\t\t\t\t\t    categories: [
                 'ENERO',
                 'FEBRERO',
                 'MARZO',
                 'ABRIL',
                 'MAYO',
                 'JUNIO',
                 'JULIO',
                 'AGOSTO',
                 'SEPTIEMBRE',
                 'OCTUBRE',
                 'NOVIEMBRE',
                 'DICIEMBRE'
                 
        ],
        crosshair: true
\t\t\t\t\t  },
\t\t\t\t\t  yAxis: {
\t\t\t\t\t    min: 0,
\t\t\t\t\t    title: {
\t\t\t\t\t      text: 'Ventas realizadas (Cantidad)'
\t\t\t\t\t    }
\t\t\t\t\t  },
\t\t\t\t  tooltip: {
\t\t\t\t    headerFormat: '<span style=\"font-size:10px\"></span><table>',
\t\t\t\t    pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
\t\t\t\t      '<td style=\"padding:0\"><b>{point.y:.1f} Ventas realizadas</b></td></tr>',
\t\t\t\t    footerFormat: '</table>',
\t\t\t\t    shared: true,
\t\t\t\t    useHTML: true
\t\t\t\t  },
\t\t\t\t  plotOptions: {
\t\t\t\t    column: {
\t\t\t\t      pointPadding: 0.2,
\t\t\t\t      borderWidth: 0
\t\t\t\t    }
\t\t\t\t  },
\t\t\t\t\t\t  series: ";
        // line 114
        echo (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new Twig_Error_Runtime('Variable "series" does not exist.', 114, $this->source); })());
        echo "
                    });
                    }

     
      });
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "graficos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 114,  151 => 51,  142 => 50,  119 => 35,  110 => 34,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}Ventas por usuarios{% endblock %}

{% block header %}

 <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Graficos</a></li>
              <li class=\"crumb-trail\">Metas</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"#\">Graficos</a></li>
              
            </ul>
          </div>
         
        </header>

<div class=\"content-header\">
                <h2><b class=\"text-primary\">Control de graficos</b>
                </h2>
              
              </div>
{% endblock %}

{% block body %}
<div id=\"p6\" class=\"panel\">
                    <div class=\"panel-heading\"><span class=\"panel-title\">Column Graph</span></div>
                    <div class=\"panel-body pn\">
                      <div class=\"row table-layout\">
                        <div class=\"col-xs-12 va-m\">
                          <div id=\"usuarios\" style=\"width: 100%; height:400px; margin: 0 auto\"></div>
                        </div>
                       
                      </div>
                    </div>
                  
                  </div>

{% endblock %}

{% block addscript %}
      <script type=\"text/javascript\">
      jQuery(document).ready(function () {

        
       /* demoHighCharts.init();*/
        
        // Init plugins for \".calendar-widget\"
        // plugins: FullCalendar
        //
          var highColors = [bgInfo, bgPrimary, bgSuccess, bgWarning,
            bgDanger, bgSuccess, bgSystem, bgDark
        ];
        var usuarios = \$('#usuarios');
                  
                    if (usuarios.length) {
                        \$('#usuarios').highcharts({
                         chart: {
    \t\t\t\t\t\ttype: 'column'
  \t\t\t\t\t\t},
\t\t\t\t\t  title: {
\t\t\t\t\t    text: 'Graficos'
\t\t\t\t\t  },
\t\t\t\t\t  subtitle: {
\t\t\t\t\t    text: 'Vendedores respecto a la ventas'
\t\t\t\t\t  },
\t\t\t\t\t  xAxis: {
\t\t\t\t\t    categories: [
                 'ENERO',
                 'FEBRERO',
                 'MARZO',
                 'ABRIL',
                 'MAYO',
                 'JUNIO',
                 'JULIO',
                 'AGOSTO',
                 'SEPTIEMBRE',
                 'OCTUBRE',
                 'NOVIEMBRE',
                 'DICIEMBRE'
                 
        ],
        crosshair: true
\t\t\t\t\t  },
\t\t\t\t\t  yAxis: {
\t\t\t\t\t    min: 0,
\t\t\t\t\t    title: {
\t\t\t\t\t      text: 'Ventas realizadas (Cantidad)'
\t\t\t\t\t    }
\t\t\t\t\t  },
\t\t\t\t  tooltip: {
\t\t\t\t    headerFormat: '<span style=\"font-size:10px\"></span><table>',
\t\t\t\t    pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
\t\t\t\t      '<td style=\"padding:0\"><b>{point.y:.1f} Ventas realizadas</b></td></tr>',
\t\t\t\t    footerFormat: '</table>',
\t\t\t\t    shared: true,
\t\t\t\t    useHTML: true
\t\t\t\t  },
\t\t\t\t  plotOptions: {
\t\t\t\t    column: {
\t\t\t\t      pointPadding: 0.2,
\t\t\t\t      borderWidth: 0
\t\t\t\t    }
\t\t\t\t  },
\t\t\t\t\t\t  series: {{ series|raw() }}
                    });
                    }

     
      });
    </script>
    {% endblock %}", "graficos/index.html.twig", "/var/www/html/access/templates/graficos/index.html.twig");
    }
}
