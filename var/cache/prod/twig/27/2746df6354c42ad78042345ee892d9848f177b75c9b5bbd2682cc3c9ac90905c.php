<?php

/* facturas/pdf.html.twig */
class __TwigTemplate_07efc350842ee87e7136a05275d10d4fe52819efd29fd25c9e08e9d7c10dd9fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table border=\"1\">
\t<tr style=\"background-color:greem\">
\t\t\t<th>
\t\t\t\tNombre de Producto
\t\t\t</th>
\t\t\t<th>
\t\t\t\tCantidad
\t\t\t</th>
\t\t\t<th>
\t\t\t\tPrecio U.
\t\t\t</th>
\t\t\t<th>
\t\t\t\tDescuento
\t\t\t</th>
\t\t\t<th>
\t\t\t\tTotal
\t\t\t</th>
\t</tr>

";
        // line 20
        $context["sumatoria"] = 0;
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["datos"] ?? null), "detallesFacturas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 22
            $context["sumatoria"] = (($context["sumatoria"] ?? null) + twig_get_attribute($this->env, $this->source, $context["factura"], "total", array()));
            // line 23
            echo "\t<tr>
\t\t<td>
\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["factura"], "idproducto", array()), "nombre", array()), "html", null, true);
            echo "
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "cantidad", array()), "html", null, true);
            echo "
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "precio", array()), "html", null, true);
            echo "
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "descuento", array()), "html", null, true);
            echo " %
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "total", array()), "html", null, true);
            echo "
\t\t</td>
\t</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "<tfoot>
<tr>
\t\t<td colspan=\"4\" style=\"text-align:right\">Total General:</td>
\t\t<td style=\"text-align:center\">";
        // line 45
        echo twig_escape_filter($this->env, ($context["sumatoria"] ?? null), "html", null, true);
        echo "</td>
</tr>
</tfoot>
</table>";
    }

    public function getTemplateName()
    {
        return "facturas/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 45,  91 => 42,  80 => 37,  74 => 34,  68 => 31,  62 => 28,  56 => 25,  52 => 23,  50 => 22,  46 => 21,  44 => 20,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "facturas/pdf.html.twig", "/var/www/html/access/templates/facturas/pdf.html.twig");
    }
}
