<?php

/* detalles_factura/select.json.twig */
class __TwigTemplate_50d0e3cd077f7e2ed42a759ac924ddf6d8ad42545948e21b70561930caa884d3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "detalles_factura/select.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "detalles_factura/select.json.twig"));

        // line 1
        echo "[";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new Twig_Error_Runtime('Variable "results" does not exist.', 1, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 2
            echo json_encode(array("id" => twig_get_attribute($this->env, $this->source, $context["author"], "id", array()), "label" => twig_get_attribute($this->env, $this->source, $context["author"], "nombre", array()), "value" => twig_get_attribute($this->env, $this->source, $context["author"], "nombre", array())));
            echo "
    ";
            // line 4
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "]";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "detalles_factura/select.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 5,  51 => 4,  47 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("[{% for author in results -%}
    {{ {id: author.id, label: author.nombre, value: author.nombre}|json_encode|raw }}
    {# use \"value\" instead of \"id\" key, if you use jquery-ui #}
    {%- if not loop.last %},{% endif -%}
{%- endfor %}]", "detalles_factura/select.json.twig", "C:\\xampp\\htdocs\\access\\templates\\detalles_factura\\select.json.twig");
    }
}
