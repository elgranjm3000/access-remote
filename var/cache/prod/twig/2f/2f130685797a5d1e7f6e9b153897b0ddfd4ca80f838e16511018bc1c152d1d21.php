<?php

/* clientes/index.html.twig */
class __TwigTemplate_de4d5908e63c0bed7fe3fee370eef1ecef4891f29b7e0f31101ff3efeb7068d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "clientes/index.html.twig", 1);
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
        echo "Listado de clientes";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Clientes</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_new");
        echo "\">Crear nuevo cliente</a></li>
              
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
   <table class=\"table footable\" id=\"example\">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>Nit</th>                
                <th>Correo</th>                                
                <th>Zona</th>
                <th>Dpto</th>
                <th>Mcipio.</th>
                <th>Dir.</th>
                <th hidden=\"hidden\">Contacto</th>
                <th hidden=\"hidden\">F.Nac.</th>
                <th hidden=\"hidden\">Notas</th>
                <th>Movil</th>                
                <th hidden=\"hidden\">Local</th>                                
                <th>Acciones</th>
              
            </tr>
        </thead>
        <tbody>
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 67
            echo "            <tr>
                
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nit", array()), "html", null, true);
            echo "</td>                
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "correo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "zona", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "dpto", array()), "html", null, true);
            echo "</td>  
                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "municipio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["cliente"], "direccion", array());
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "contactoPrincipal", array()), "html", null, true);
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 77
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cliente"], "fechaNacimiento", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "fechaNacimiento", array()), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                <td hidden=\"hidden\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "comentarios", array()), "html", null, true);
            echo "</td>  
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "telefonoMovil", array()), "html", null, true);
            echo "</td>  
                <td hidden=\"hidden\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "telefonoLocal", array()), "html", null, true);
            echo "</td>  
                <td>
                    <a title=\"Detalles clientes\" data-toggle=\"tooltip\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a data-toggle=\"tooltip\" title=\"Editar cliente\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                     <a data-toggle=\"tooltip\" title=\"Crear facturas\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_new", array("cliente" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-tasks \"></span></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "            <tr>
                <td colspan=\"6\">No hay registro de clientes</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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
        return "clientes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 92,  186 => 88,  177 => 84,  173 => 83,  169 => 82,  164 => 80,  160 => 79,  156 => 78,  152 => 77,  148 => 76,  144 => 75,  140 => 74,  136 => 73,  132 => 72,  128 => 71,  124 => 70,  120 => 69,  116 => 67,  111 => 66,  75 => 32,  72 => 31,  59 => 20,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "clientes/index.html.twig", "/var/www/html/access/templates/clientes/index.html.twig");
    }
}
