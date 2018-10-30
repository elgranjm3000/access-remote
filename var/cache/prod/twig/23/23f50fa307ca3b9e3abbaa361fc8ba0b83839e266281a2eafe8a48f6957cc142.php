<?php

/* movimientos_almacen/show.html.twig */
class __TwigTemplate_d112c4121b8af71b5dc0adf5e9551d29ced0020ef8e164b244af444cc09bea90 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "movimientos_almacen/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "MovimientosAlmacen";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 style=\"text-align: center;\">MovimientosAlmacen</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movimientos_almacen"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movimientos_almacen"] ?? null), "Cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 20
        echo ((twig_get_attribute($this->env, $this->source, ($context["movimientos_almacen"] ?? null), "Status", array())) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["movimientos_almacen"] ?? null), "Fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movimientos_almacen"] ?? null), "Fecha", array()), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movimientos_almacen"] ?? null), "Comentarios", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_index");
        echo "\">Volver al Listado</a>
    <br>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["movimientos_almacen"] ?? null), "id", array()))), "html", null, true);
        echo "\">Editar</a>
<div style=\"text-align: center;\">
    ";
        // line 37
        echo twig_include($this->env, $context, "movimientos_almacen/_delete_form.html.twig");
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "movimientos_almacen/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  86 => 33,  78 => 28,  71 => 24,  64 => 20,  57 => 16,  50 => 12,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_almacen/show.html.twig", "/var/www/html/access/templates/movimientos_almacen/show.html.twig");
    }
}
