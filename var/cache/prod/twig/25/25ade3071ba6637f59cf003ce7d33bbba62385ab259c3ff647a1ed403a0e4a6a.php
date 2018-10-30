<?php

/* detalles_factura/select.json.twig */
class __TwigTemplate_3c87d413a2df46705c31dcaa0d3894fe3ad4866318159add7a041eb0bb7de40e extends Twig_Template
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
        echo "[";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
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
        return array (  61 => 5,  45 => 4,  41 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "detalles_factura/select.json.twig", "/var/www/html/access/templates/detalles_factura/select.json.twig");
    }
}
