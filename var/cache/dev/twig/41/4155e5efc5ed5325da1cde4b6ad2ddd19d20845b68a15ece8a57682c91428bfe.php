<?php

/* facturas/pdf.html.twig */
class __TwigTemplate_80510e42380e0a3df06b67f3599b6c1a172697fccc2e131924ae574a70c56cc3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/pdf.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new Twig_Error_Runtime('Variable "datos" does not exist.', 21, $this->source); })()), "detallesFacturas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 22
            $context["sumatoria"] = ((isset($context["sumatoria"]) || array_key_exists("sumatoria", $context) ? $context["sumatoria"] : (function () { throw new Twig_Error_Runtime('Variable "sumatoria" does not exist.', 22, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["factura"], "total", array()));
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
        echo twig_escape_filter($this->env, (isset($context["sumatoria"]) || array_key_exists("sumatoria", $context) ? $context["sumatoria"] : (function () { throw new Twig_Error_Runtime('Variable "sumatoria" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "</td>
</tr>
</tfoot>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  102 => 45,  97 => 42,  86 => 37,  80 => 34,  74 => 31,  68 => 28,  62 => 25,  58 => 23,  56 => 22,  52 => 21,  50 => 20,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table border=\"1\">
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

{% set sumatoria = 0 %}
{% for factura in datos.detallesFacturas %}
{% set sumatoria = sumatoria + factura.total %}
\t<tr>
\t\t<td>
\t\t\t{{ factura.idproducto.nombre }}
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t{{ factura.cantidad }}
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t{{ factura.precio }}
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t{{ factura.descuento }} %
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t{{ factura.total }}
\t\t</td>
\t</tr>

{% endfor %}
<tfoot>
<tr>
\t\t<td colspan=\"4\" style=\"text-align:right\">Total General:</td>
\t\t<td style=\"text-align:center\">{{ sumatoria }}</td>
</tr>
</tfoot>
</table>", "facturas/pdf.html.twig", "/var/www/html/access/templates/facturas/pdf.html.twig");
    }
}
