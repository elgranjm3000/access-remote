<?php

/* almacen/_delete_form.html.twig */
class __TwigTemplate_38d9a69a767446d574da2e07536e288f7d142c9efd7b5631ddc57a300cc7541c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("almacen_delete", array("id" => twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", array()))), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Desea eliminar este registro?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["almacen"] ?? null), "id", array()))), "html", null, true);
        echo "\">
    <button class=\"btn btn-danger\">ELiminar registro</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "almacen/_delete_form.html.twig";
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
        return new Twig_Source("", "almacen/_delete_form.html.twig", "/var/www/html/access/templates/almacen/_delete_form.html.twig");
    }
}
