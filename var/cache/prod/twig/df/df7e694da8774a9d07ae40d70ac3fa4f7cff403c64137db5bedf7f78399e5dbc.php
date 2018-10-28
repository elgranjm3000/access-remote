<?php

/* clientes/_delete_form.html.twig */
class __TwigTemplate_7ec3f694ed9150e01507d6565518f84d05bdaae3949140380bfaba0d964e29c4 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_delete", array("id" => twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "id", array()))), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Desea eliminar este registro?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "id", array()))), "html", null, true);
        echo "\">
    <button class=\"btn btn-danger\">Eliminar registro</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "clientes/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "clientes/_delete_form.html.twig", "/var/www/html/access/templates/clientes/_delete_form.html.twig");
    }
}
