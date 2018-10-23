<?php

/* movimientos_almacen/pdf.html.twig */
class __TwigTemplate_49a2e533f1f13bdd651051b992e7a21e180c682ecc4fa6e659752f44550dd97f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_almacen/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_almacen/pdf.html.twig"));

        // line 1
        echo "<table border=\"1\">
\t<tr style=\"background-color:greem\">
\t\t\t<th>
\t\t\t\tNombre de Producto
\t\t\t</th>
\t\t\t<th>
\t\t\t\tEntrada
\t\t\t</th>
\t\t\t<th>
\t\t\t\tSalida
\t\t\t</th>
\t\t\t<th>
\t\t\t\tMonto de Ingreso
\t\t\t</th>
\t\t\t<th>
\t\t\t\tCuentas por cobrar
\t\t\t</th>
\t\t\t
\t</tr>

";
        // line 21
        $context["suma1"] = 0;
        // line 22
        $context["suma2"] = 0;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new Twig_Error_Runtime('Variable "datos" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 24
            echo "\t<tr>
\t\t<td>
\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "nombre", array()), "html", null, true);
            echo "
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->ingresosFilter(twig_get_attribute($this->env, $this->source, $context["dato"], "ingresos", array())), "html", null, true);
            echo "
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->egresosFilter(twig_get_attribute($this->env, $this->source, $context["dato"], "detallesFacturas", array())), "html", null, true);
            echo "
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->ingresomontoFilter(twig_get_attribute($this->env, $this->source, $context["dato"], "detallesFacturas", array())), "html", null, true);
            echo "\t
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->cobrarFilter(twig_get_attribute($this->env, $this->source, $context["dato"], "detallesFacturas", array())), "html", null, true);
            echo "\t
\t\t</td>
\t</tr>
";
            // line 41
            $context["suma1"] = ((isset($context["suma1"]) || array_key_exists("suma1", $context) ? $context["suma1"] : (function () { throw new Twig_Error_Runtime('Variable "suma1" does not exist.', 41, $this->source); })()) + $this->extensions['App\Twig\AppExtension']->ingresomontoFilter(twig_get_attribute($this->env, $this->source, $context["dato"], "detallesFacturas", array())));
            // line 42
            $context["suma2"] = ((isset($context["suma2"]) || array_key_exists("suma2", $context) ? $context["suma2"] : (function () { throw new Twig_Error_Runtime('Variable "suma2" does not exist.', 42, $this->source); })()) + $this->extensions['App\Twig\AppExtension']->cobrarFilter(twig_get_attribute($this->env, $this->source, $context["dato"], "detallesFacturas", array())));
            // line 43
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "<tfoot>
<tr>
\t\t<td colspan=\"4\" style=\"text-align:right\">Total general Ingreso:</td>
\t\t<td style=\"text-align:center\">";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["suma1"]) || array_key_exists("suma1", $context) ? $context["suma1"] : (function () { throw new Twig_Error_Runtime('Variable "suma1" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "</td>
</tr>

<tr>
\t\t<td colspan=\"4\" style=\"text-align:right\">Total general por Cuentas por cobrar:</td>
\t\t<td style=\"text-align:center\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["suma2"]) || array_key_exists("suma2", $context) ? $context["suma2"] : (function () { throw new Twig_Error_Runtime('Variable "suma2" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "</td>
</tr>
</tfoot>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "movimientos_almacen/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 53,  109 => 48,  104 => 45,  97 => 43,  95 => 42,  93 => 41,  87 => 38,  81 => 35,  75 => 32,  69 => 29,  63 => 26,  59 => 24,  55 => 23,  53 => 22,  51 => 21,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table border=\"1\">
\t<tr style=\"background-color:greem\">
\t\t\t<th>
\t\t\t\tNombre de Producto
\t\t\t</th>
\t\t\t<th>
\t\t\t\tEntrada
\t\t\t</th>
\t\t\t<th>
\t\t\t\tSalida
\t\t\t</th>
\t\t\t<th>
\t\t\t\tMonto de Ingreso
\t\t\t</th>
\t\t\t<th>
\t\t\t\tCuentas por cobrar
\t\t\t</th>
\t\t\t
\t</tr>

{% set suma1  = 0 %}
{% set suma2  = 0 %}
{% for dato in datos %}
\t<tr>
\t\t<td>
\t\t\t{{ dato.nombre }}
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t{{ dato.ingresos|ingresoproductos }}
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t{{ dato.detallesFacturas|egresosproductos }}
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t\t{{ dato.detallesFacturas|ingresomontos }}\t
\t\t</td>
\t\t<td style=\"text-align:center\">
\t\t{{ dato.detallesFacturas|cobrar }}\t
\t\t</td>
\t</tr>
{% set suma1 = suma1 + dato.detallesFacturas|ingresomontos %}
{% set suma2 = suma2 + dato.detallesFacturas|cobrar %}

{% endfor %}
<tfoot>
<tr>
\t\t<td colspan=\"4\" style=\"text-align:right\">Total general Ingreso:</td>
\t\t<td style=\"text-align:center\">{{ suma1 }}</td>
</tr>

<tr>
\t\t<td colspan=\"4\" style=\"text-align:right\">Total general por Cuentas por cobrar:</td>
\t\t<td style=\"text-align:center\">{{ suma2 }}</td>
</tr>
</tfoot>
</table>", "movimientos_almacen/pdf.html.twig", "C:\\xampp\\htdocs\\access\\templates\\movimientos_almacen\\pdf.html.twig");
    }
}
