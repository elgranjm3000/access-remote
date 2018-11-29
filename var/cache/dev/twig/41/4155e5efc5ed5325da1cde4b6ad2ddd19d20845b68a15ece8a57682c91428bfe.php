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
        echo "<table>
\t<tr>
\t\t\t<th>
\t\t\t
\t\t\t</th>
\t\t\t<th>
\t\t\t
\t\t\t</th>
\t\t\t<th>
\t\t\t
\t\t\t</th>
\t\t\t<th>
\t\t\t
\t\t\t</th>
\t\t\t
\t</tr>

";
        // line 18
        $context["sumatoria"] = 0;
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new Twig_Error_Runtime('Variable "datos" does not exist.', 19, $this->source); })()), "detallesFacturas", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 20
            $context["sumatoria"] = ((isset($context["sumatoria"]) || array_key_exists("sumatoria", $context) ? $context["sumatoria"] : (function () { throw new Twig_Error_Runtime('Variable "sumatoria" does not exist.', 20, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["factura"], "total", array()));
            // line 21
            echo "\t<tr>
\t\t
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factura"], "cantidad", array()), "html", null, true);
            echo "
\t\t</td>
\t\t<td>
\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["factura"], "idproducto", array()), "nombre", array()), "html", null, true);
            echo "
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->nuevoFilter(twig_get_attribute($this->env, $this->source, $context["factura"], "precio", array()), 2, ",", "."), "html", null, true);
            echo "
\t\t</td>\t\t
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->nuevoFilter(twig_get_attribute($this->env, $this->source, $context["factura"], "total", array()), 2, ",", "."), "html", null, true);
            echo "
\t\t</td>
\t</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "<tfoot>
<tr>
\t\t<td colspan=\"3\" style=\"text-align:right\"></td>
\t\t";
        // line 41
        $context["ivap"] = (((isset($context["sumatoria"]) || array_key_exists("sumatoria", $context) ? $context["sumatoria"] : (function () { throw new Twig_Error_Runtime('Variable "sumatoria" does not exist.', 41, $this->source); })()) * (isset($context["iva"]) || array_key_exists("iva", $context) ? $context["iva"] : (function () { throw new Twig_Error_Runtime('Variable "iva" does not exist.', 41, $this->source); })())) / 100);
        // line 42
        echo "\t\t<td style=\"text-align:center\"></td>
</tr>
<tr>
\t\t<td colspan=\"3\" style=\"text-align:right\"></td>
\t\t";
        // line 46
        $context["ivap"] = (((isset($context["sumatoria"]) || array_key_exists("sumatoria", $context) ? $context["sumatoria"] : (function () { throw new Twig_Error_Runtime('Variable "sumatoria" does not exist.', 46, $this->source); })()) * (isset($context["iva"]) || array_key_exists("iva", $context) ? $context["iva"] : (function () { throw new Twig_Error_Runtime('Variable "iva" does not exist.', 46, $this->source); })())) / 100);
        // line 47
        echo "\t\t<td style=\"text-align:center\"></td>
</tr>
<tr>
\t\t<td colspan=\"3\" style=\"text-align:right\">Total Factura:</td>
\t\t";
        // line 51
        $context["sumatoriatotal"] = ((isset($context["sumatoria"]) || array_key_exists("sumatoria", $context) ? $context["sumatoria"] : (function () { throw new Twig_Error_Runtime('Variable "sumatoria" does not exist.', 51, $this->source); })()) + (isset($context["ivap"]) || array_key_exists("ivap", $context) ? $context["ivap"] : (function () { throw new Twig_Error_Runtime('Variable "ivap" does not exist.', 51, $this->source); })()));
        // line 52
        echo "\t\t<td style=\"text-align:center\">";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->nuevoFilter((isset($context["sumatoriatotal"]) || array_key_exists("sumatoriatotal", $context) ? $context["sumatoriatotal"] : (function () { throw new Twig_Error_Runtime('Variable "sumatoriatotal" does not exist.', 52, $this->source); })()), 2, ",", "."), "html", null, true);
        echo "</td>

</tr>

<tr>
\t\t<td colspan=\"3\" style=\"text-align:right\"></td>\t
\t\t<td style=\"text-align:center\"></td>
</tr>
\t<tr>
\t\t";
        // line 61
        $context["montoletra"] = $this->extensions['App\Twig\AppExtension']->priceFilter((isset($context["sumatoriatotal"]) || array_key_exists("sumatoriatotal", $context) ? $context["sumatoriatotal"] : (function () { throw new Twig_Error_Runtime('Variable "sumatoriatotal" does not exist.', 61, $this->source); })()), 2, ".", "");
        // line 62
        echo "
\t<td colspan=\"3\">TOTAL EN LETRAS: ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->letrasFilter((isset($context["montoletra"]) || array_key_exists("montoletra", $context) ? $context["montoletra"] : (function () { throw new Twig_Error_Runtime('Variable "montoletra" does not exist.', 63, $this->source); })())), "html", null, true);
        echo "</td>
\t</tr>
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
        return array (  131 => 63,  128 => 62,  126 => 61,  113 => 52,  111 => 51,  105 => 47,  103 => 46,  97 => 42,  95 => 41,  90 => 38,  79 => 33,  73 => 30,  67 => 27,  61 => 24,  56 => 21,  54 => 20,  50 => 19,  48 => 18,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table>
\t<tr>
\t\t\t<th>
\t\t\t
\t\t\t</th>
\t\t\t<th>
\t\t\t
\t\t\t</th>
\t\t\t<th>
\t\t\t
\t\t\t</th>
\t\t\t<th>
\t\t\t
\t\t\t</th>
\t\t\t
\t</tr>

{% set sumatoria = 0 %}
{% for factura in datos.detallesFacturas %}
{% set sumatoria = sumatoria + factura.total %}
\t<tr>
\t\t
\t\t<td style=\"text-align:center\">
\t\t\t{{ factura.cantidad }}
\t\t</td>
\t\t<td>
\t\t\t{{ factura.idproducto.nombre }}
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t{{ factura.precio|buscador(2, ',', '.') }}
\t\t</td>\t\t
\t\t<td style=\"text-align:center\">
\t\t\t{{ factura.total|buscador(2, ',', '.') }}
\t\t</td>
\t</tr>

{% endfor %}
<tfoot>
<tr>
\t\t<td colspan=\"3\" style=\"text-align:right\"></td>
\t\t{% set ivap = sumatoria*iva/100  %}
\t\t<td style=\"text-align:center\"></td>
</tr>
<tr>
\t\t<td colspan=\"3\" style=\"text-align:right\"></td>
\t\t{% set ivap = sumatoria*iva/100  %}
\t\t<td style=\"text-align:center\"></td>
</tr>
<tr>
\t\t<td colspan=\"3\" style=\"text-align:right\">Total Factura:</td>
\t\t{% set sumatoriatotal = sumatoria+ivap %}
\t\t<td style=\"text-align:center\">{{ sumatoriatotal|buscador(2, ',', '.') }}</td>

</tr>

<tr>
\t\t<td colspan=\"3\" style=\"text-align:right\"></td>\t
\t\t<td style=\"text-align:center\"></td>
</tr>
\t<tr>
\t\t{% set montoletra =  sumatoriatotal|price(2, '.', '') %}

\t<td colspan=\"3\">TOTAL EN LETRAS: {{ montoletra|montoletras }}</td>
\t</tr>
</tfoot>
</table>", "facturas/pdf.html.twig", "/var/www/html/access/templates/facturas/pdf.html.twig");
    }
}
