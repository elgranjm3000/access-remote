<?php

/* productos/show.html.twig */
class __TwigTemplate_e3ec65f30e769b73e6d73c7520c2bb299f00edc3a77f3a40110f660c2f5a2d94 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "productos/show.html.twig", 1);
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
        echo "Productos-detalles";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Productos</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_new");
        echo "\">Crear de Productos</a></li>
               ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "ensambles", array())) == 0)) {
            // line 22
            echo "              <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "id", array()))), "html", null, true);
            echo "\">Editar Producto</a></li>
              ";
        } else {
            // line 24
            echo "              <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos_edit_ensamble", array("id" => twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "id", array()))), "html", null, true);
            echo "\">Editar Producto</a></li>
              ";
        }
        // line 26
        echo "              <li>";
        echo twig_include($this->env, $context, "productos/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de productos</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
        
            <tr>
                <th>Id</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
                ";
        // line 58
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "ensambles", array())) == 0)) {
            // line 59
            echo "            <tr>
                <th>Unidad de Medida</th>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "idmedidas", array()), "unidad", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Costo</th>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "costo", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Precio de venta</th>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "precioVenta", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
            // line 73
            echo twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "comentarios", array());
            echo "</td>
            </tr>
            <tr>
                <th>Cantidad de Presentacion</th>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "cantidadPresentacion", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                    <th>Familia</th>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "idfamilia", array()), "nombre", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        } else {
            // line 84
            echo "             <tr>
                <th>Precio de venta</th>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "precioVenta", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
            // line 90
            echo twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "comentarios", array());
            echo "</td>
            </tr>
                  <tr>
                      <td colspan=\"4\"><h1>PRODUCTOS ENSAMBLADOS</h1></td>
                  </tr>
                  <tr>
                      <td>Producto</td>
                      <td>Cantidad</td>
                      <td>Monto</td>
                      <td>Subtotal</td>
                  </tr>

                  ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["producto"] ?? null), "ensambles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ensambles"]) {
                // line 103
                echo "                  <tr>
                      <td>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ensambles"], "productoadd", array()), "nombre", array()), "html", null, true);
                echo "</td>
                      <td>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "cantidad", array()), "html", null, true);
                echo "</td>
                      <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "monto", array()), "html", null, true);
                echo "</td>
                      <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ensambles"], "subtotal", array()), "html", null, true);
                echo "</td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ensambles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "            ";
        }
        // line 111
        echo "        </tbody>
    </table>
               
                </div>
              </div>
          </div>
      </div>
";
    }

    public function getTemplateName()
    {
        return "productos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 111,  224 => 110,  215 => 107,  211 => 106,  207 => 105,  203 => 104,  200 => 103,  196 => 102,  181 => 90,  174 => 86,  170 => 84,  164 => 81,  157 => 77,  150 => 73,  143 => 69,  136 => 65,  129 => 61,  125 => 59,  123 => 58,  118 => 56,  111 => 52,  94 => 37,  91 => 36,  77 => 26,  71 => 24,  65 => 22,  63 => 21,  59 => 20,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "productos/show.html.twig", "/var/www/html/access/templates/productos/show.html.twig");
    }
}
