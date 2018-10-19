<?php

/* contratar/show.html.twig */
class __TwigTemplate_6b0b6935334fcc351e37b2d9f2731f684db2b8b8696ac17b50f5d808e1c66918 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contratar/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contratar/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contratar/show.html.twig"));

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

        echo "Contratar";
        
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
        echo "    <h1>Contratar</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Detalles</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 16, $this->source); })()), "detalles", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 20, $this->source); })()), "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 20, $this->source); })()), "fecha", array()), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lugar</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 24, $this->source); })()), "lugar", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pagar</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 28, $this->source); })()), "pagar", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 32, $this->source); })()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 36, $this->source); })()), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 40, $this->source); })()), "correo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contratar_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contratar_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["contratar"]) || array_key_exists("contratar", $context) ? $context["contratar"] : (function () { throw new Twig_Error_Runtime('Variable "contratar" does not exist.', 47, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "contratar/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contratar/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 49,  142 => 47,  137 => 45,  129 => 40,  122 => 36,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Contratar{% endblock %}

{% block body %}
    <h1>Contratar</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contratar.id }}</td>
            </tr>
            <tr>
                <th>Detalles</th>
                <td>{{ contratar.detalles }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ contratar.fecha ? contratar.fecha|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Lugar</th>
                <td>{{ contratar.lugar }}</td>
            </tr>
            <tr>
                <th>Pagar</th>
                <td>{{ contratar.pagar }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ contratar.nombre }}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{ contratar.telefono }}</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>{{ contratar.correo }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('contratar_index') }}\">back to list</a>

    <a href=\"{{ path('contratar_edit', {'id': contratar.id}) }}\">edit</a>

    {{ include('contratar/_delete_form.html.twig') }}
{% endblock %}
", "contratar/show.html.twig", "C:\\xampp\\htdocs\\access\\templates\\contratar\\show.html.twig");
    }
}
