<?php

/* proveedores/index.html.twig */
class __TwigTemplate_6f8710d6cad0063dbfda5a1248a0364a1328eb649b02f91c4e992fc152120d7a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "proveedores/index.html.twig", 1);
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
        echo "Listado de Proveedores";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Proveedor</a></li>                            
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_new");
        echo "\">Crear nuevo proveedor</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "   ";
        // line 70
        echo "  <!-- Begin: Content-->
        <section id=\"content\" class=\"table-layout animated fadeIn\">
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
                        <th>Id</th>
                <th>NombreEmpresa</th>
                <th>Contacto</th>
                <th>TelefonoMovil</th>
                <th>TelefonoOfic</th>
                <th>Correo</th>
                <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["proveedores"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["proveedore"]) {
            // line 99
            echo "            <tr>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "nombreEmpresa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "contacto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "telefonoMovil", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "telefonoOfic", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedore"], "correo", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_show", array("id" => twig_get_attribute($this->env, $this->source, $context["proveedore"], "id", array()))), "html", null, true);
            echo "\" title=\"Visualizar\" ><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["proveedore"], "id", array()))), "html", null, true);
            echo "\" title=\"Editar\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedore'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                  </tbody>
                  <tfoot class=\"footer-menu\">
                    <tr>
                      <td colspan=\"7\">
                        <nav class=\"text-center\">
                          <ul class=\"pagination hide-if-no-paging\"></ul>
                        </nav>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- Panel with: Expanding Rows-->
          
            <!-- DEMO - breaks used to extend container - DEMO--><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </section>
";
    }

    public function getTemplateName()
    {
        return "proveedores/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 116,  153 => 112,  144 => 108,  140 => 107,  135 => 105,  131 => 104,  127 => 103,  123 => 102,  119 => 101,  115 => 100,  112 => 99,  107 => 98,  77 => 70,  75 => 32,  72 => 31,  59 => 19,  43 => 5,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "proveedores/index.html.twig", "/var/www/html/access/templates/proveedores/index.html.twig");
    }
}
