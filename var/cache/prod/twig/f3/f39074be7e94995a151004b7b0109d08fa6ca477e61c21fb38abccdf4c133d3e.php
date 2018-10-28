<?php

/* ingresos/index.html.twig */
class __TwigTemplate_d078c8d9aa561e63dcfa1486e9bee283a43982502f7113871080a68c580b56b6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "ingresos/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
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
        echo "Ingresos de productos";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Ingresos</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_new");
        echo "\">Ingresar Productos</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
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
    <table class=\"table footable\">
        <thead>
            <tr>
                <th>Nombre de producto</th>
                <th>Cantidad Ingresada</th>
                <th>Fecha</th>
                <th>Comentario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingresos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ingreso"]) {
            // line 58
            echo "            <tr>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ingreso"], "productos", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingreso"], "cantidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ingreso"], "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingreso"], "fecha", array()), "d/m/Y")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["ingreso"], "comentario", array());
            echo "</td>
                <td>
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_show", array("id" => twig_get_attribute($this->env, $this->source, $context["ingreso"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingresos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["ingreso"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingreso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>

    </div>
</div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "ingresos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 73,  139 => 69,  130 => 65,  126 => 64,  121 => 62,  117 => 61,  113 => 60,  109 => 59,  106 => 58,  101 => 57,  75 => 33,  72 => 32,  59 => 20,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ingresos/index.html.twig", "/var/www/html/access/templates/ingresos/index.html.twig");
    }
}
