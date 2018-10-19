<?php

/* contratar/index.html.twig */
class __TwigTemplate_2ef08f1d5ae471c093a52c15b36df0853fe04815efe29c952a3d139c715d4f65 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contratar/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contratar/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contratar/index.html.twig"));

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

        echo "Contratar index";
        
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
        echo "    <h1>Contratar index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Detalles</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Pagar</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contratars"]) || array_key_exists("contratars", $context) ? $context["contratars"] : (function () { throw new Twig_Error_Runtime('Variable "contratars" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contratar"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contratar"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contratar"], "detalles", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["contratar"], "fecha", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contratar"], "fecha", array()), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contratar"], "lugar", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contratar"], "pagar", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contratar"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contratar"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contratar"], "correo", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contratar_show", array("id" => twig_get_attribute($this->env, $this->source, $context["contratar"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contratar_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["contratar"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contratar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contratar_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contratar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 46,  154 => 43,  145 => 39,  136 => 35,  132 => 34,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  96 => 24,  91 => 23,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Contratar index{% endblock %}

{% block body %}
    <h1>Contratar index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Detalles</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Pagar</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contratar in contratars %}
            <tr>
                <td>{{ contratar.id }}</td>
                <td>{{ contratar.detalles }}</td>
                <td>{{ contratar.fecha ? contratar.fecha|date('Y-m-d') : '' }}</td>
                <td>{{ contratar.lugar }}</td>
                <td>{{ contratar.pagar }}</td>
                <td>{{ contratar.nombre }}</td>
                <td>{{ contratar.telefono }}</td>
                <td>{{ contratar.correo }}</td>
                <td>
                    <a href=\"{{ path('contratar_show', {'id': contratar.id}) }}\">show</a>
                    <a href=\"{{ path('contratar_edit', {'id': contratar.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('contratar_new') }}\">Create new</a>
{% endblock %}
", "contratar/index.html.twig", "C:\\xampp\\htdocs\\access\\templates\\contratar\\index.html.twig");
    }
}
