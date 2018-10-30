<?php

/* movimientos_almacen/pdf.html.twig */
class __TwigTemplate_b459be66b91e45c4d9e55d7df12d7b5d8278cbbc88723af8d37dc0909bca27f6 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["datos"] ?? null));
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
            $context["suma1"] = (($context["suma1"] ?? null) + $this->extensions['App\Twig\AppExtension']->ingresomontoFilter(twig_get_attribute($this->env, $this->source, $context["dato"], "detallesFacturas", array())));
            // line 42
            $context["suma2"] = (($context["suma2"] ?? null) + $this->extensions['App\Twig\AppExtension']->cobrarFilter(twig_get_attribute($this->env, $this->source, $context["dato"], "detallesFacturas", array())));
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
        echo twig_escape_filter($this->env, ($context["suma1"] ?? null), "html", null, true);
        echo "</td>
</tr>

<tr>
\t\t<td colspan=\"4\" style=\"text-align:right\">Total general por Cuentas por cobrar:</td>
\t\t<td style=\"text-align:center\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["suma2"] ?? null), "html", null, true);
        echo "</td>
</tr>
</tfoot>
</table>";
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
        return array (  111 => 53,  103 => 48,  98 => 45,  91 => 43,  89 => 42,  87 => 41,  81 => 38,  75 => 35,  69 => 32,  63 => 29,  57 => 26,  53 => 24,  49 => 23,  47 => 22,  45 => 21,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "movimientos_almacen/pdf.html.twig", "/var/www/html/access/templates/movimientos_almacen/pdf.html.twig");
    }
}
