<?php

/* detalles_factura/show.html.twig */
class __TwigTemplate_589c8f4c3bd8906e8c32d488a004b2caa18bd08cc978968052f455fe42d25960 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "detalles_factura/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "DetallesFactura";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>DetallesFactura</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detalles_factura"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detalles_factura"] ?? null), "cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>OrdenPromocion</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detalles_factura"] ?? null), "ordenPromocion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detalles_factura"] ?? null), "comentarios", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detalles_factura"] ?? null), "precio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detalles_factura"] ?? null), "total", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles_factura_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles_factura_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["detalles_factura"] ?? null), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "detalles_factura/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "detalles_factura/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  93 => 37,  85 => 32,  78 => 28,  71 => 24,  64 => 20,  57 => 16,  50 => 12,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "detalles_factura/show.html.twig", "/var/www/html/access/templates/detalles_factura/show.html.twig");
    }
}
