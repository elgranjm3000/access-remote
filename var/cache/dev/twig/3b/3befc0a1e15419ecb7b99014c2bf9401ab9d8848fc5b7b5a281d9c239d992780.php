<?php

/* movimientos_almacen/show.html.twig */
class __TwigTemplate_b90d18bb61ce010b3cebb661e6c99c84938044126a97733847c2d65a164480e7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_almacen/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientos_almacen/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MovimientosAlmacen";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 style=\"text-align: center;\">MovimientosAlmacen</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_almacen"]) || array_key_exists("movimientos_almacen", $context) ? $context["movimientos_almacen"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_almacen" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_almacen"]) || array_key_exists("movimientos_almacen", $context) ? $context["movimientos_almacen"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_almacen" does not exist.', 16, $this->source); })()), "Cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 20
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["movimientos_almacen"]) || array_key_exists("movimientos_almacen", $context) ? $context["movimientos_almacen"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_almacen" does not exist.', 20, $this->source); })()), "Status", array())) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["movimientos_almacen"]) || array_key_exists("movimientos_almacen", $context) ? $context["movimientos_almacen"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_almacen" does not exist.', 24, $this->source); })()), "Fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_almacen"]) || array_key_exists("movimientos_almacen", $context) ? $context["movimientos_almacen"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_almacen" does not exist.', 24, $this->source); })()), "Fecha", array()), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movimientos_almacen"]) || array_key_exists("movimientos_almacen", $context) ? $context["movimientos_almacen"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_almacen" does not exist.', 28, $this->source); })()), "Comentarios", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["movimientos_almacen"]) || array_key_exists("movimientos_almacen", $context) ? $context["movimientos_almacen"] : (function () { throw new Twig_Error_Runtime('Variable "movimientos_almacen" does not exist.', 35, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Editar</a>
<div style=\"text-align: center;\">
    ";
        // line 37
        echo twig_include($this->env, $context, "movimientos_almacen/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  126 => 37,  121 => 35,  116 => 33,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %}MovimientosAlmacen{% endblock %}

{% block body %}
    <h1 style=\"text-align: center;\">MovimientosAlmacen</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ movimientos_almacen.id }}</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>{{ movimientos_almacen.Cantidad }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ movimientos_almacen.Status ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ movimientos_almacen.Fecha ? movimientos_almacen.Fecha|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>{{ movimientos_almacen.Comentarios }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('movimientos_almacen_index') }}\">Volver al Listado</a>
    <br>
    <a href=\"{{ path('movimientos_almacen_edit', {'id': movimientos_almacen.id}) }}\">Editar</a>
<div style=\"text-align: center;\">
    {{ include('movimientos_almacen/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "movimientos_almacen/show.html.twig", "/var/www/html/access/templates/movimientos_almacen/show.html.twig");
    }
}
