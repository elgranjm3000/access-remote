<?php

/* movimientos_depositos/show.html.twig */
class __TwigTemplate_62914faeabdeec09169556f5b8bb783bc635099b292ca2cc878264782f712a96 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "movimientos_depositos/show.html.twig", 1);
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
        echo "Detalles deposito";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Deposito</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_index");
        echo "\">Listado de Facturas</a></li>
              <li class=\"active\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["movimientos_deposito"] ?? null), "id", array()), "deposito" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movimientos_deposito"] ?? null), "facturas", array()), "id", array()))), "html", null, true);
        echo "\">Editar Deposito</a></li>

              <li class=\"active\"><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_depositos_new", array("deposito" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movimientos_deposito"] ?? null), "facturas", array()), "id", array()))), "html", null, true);
        echo "\">Crear deposito</a></li>


              
              <li>";
        // line 27
        echo twig_include($this->env, $context, "movimientos_depositos/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de Deposito</span>
                
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
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movimientos_deposito"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FechaMovimiento</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["movimientos_deposito"] ?? null), "fechaMovimiento", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movimientos_deposito"] ?? null), "fechaMovimiento", array()), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Monto</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movimientos_deposito"] ?? null), "monto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Banco</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movimientos_deposito"] ?? null), "banco", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
   </table>
               
                </div>
              </div>
          </div>
      </div>
";
    }

    public function getTemplateName()
    {
        return "movimientos_depositos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 67,  122 => 63,  115 => 59,  108 => 55,  91 => 40,  88 => 39,  75 => 27,  68 => 23,  63 => 21,  59 => 20,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_depositos/show.html.twig", "/var/www/html/access/templates/movimientos_depositos/show.html.twig");
    }
}
