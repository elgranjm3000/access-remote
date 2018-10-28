<?php

/* movimientos_depositos/index.html.twig */
class __TwigTemplate_4553334a7c2beb44f0e8f97ae327e0ab747a195e6ae5c36109d5369e25534912 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "movimientos_depositos/index.html.twig", 1);
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
        echo "Historico de movimientos";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Depositos</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_new");
        echo "\">Crear clientes</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
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
                <th>Nro de Factura</th>
                <th>Fecha de Movimiento</th>
                <th>Monto</th>
                <th>Banco</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movimientos_depositos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movimientos_deposito"]) {
            // line 57
            echo "            <tr>
                <td style=\"color:red\">";
            // line 58
            echo twig_escape_filter($this->env, sprintf("%08d", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movimientos_deposito"], "facturas", array()), "id", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["movimientos_deposito"], "fechaMovimiento", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimientos_deposito"], "fechaMovimiento", array()), "d/m/Y")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimientos_deposito"], "monto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movimientos_deposito"], "banco", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_show", array("id" => twig_get_attribute($this->env, $this->source, $context["movimientos_deposito"], "id", array()), "deposito" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movimientos_deposito"], "facturas", array()), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["movimientos_deposito"], "id", array()), "deposito" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movimientos_deposito"], "facturas", array()), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "            <tr>
                <td colspan=\"5\">No hay movimientos</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimientos_deposito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        return "movimientos_depositos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 72,  139 => 68,  130 => 64,  126 => 63,  121 => 61,  117 => 60,  113 => 59,  109 => 58,  106 => 57,  101 => 56,  75 => 32,  72 => 31,  59 => 21,  43 => 7,  40 => 6,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_depositos/index.html.twig", "/var/www/html/access/templates/movimientos_depositos/index.html.twig");
    }
}
