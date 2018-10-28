<?php

/* movimientos_almacen/_delete_form.html.twig */
class __TwigTemplate_acc2cb20101d703fde7e3b5ce22467a2b7739744f1ee8f619b0e5abf8acd1386 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movimientos_almacen_delete", array("id" => twig_get_attribute($this->env, $this->source, ($context["movimientos_almacen"] ?? null), "id", array()))), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["movimientos_almacen"] ?? null), "id", array()))), "html", null, true);
        echo "\">
    <button class=\"btn\">Eliminar Movimiento</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "movimientos_almacen/_delete_form.html.twig";
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
        return new Twig_Source("", "movimientos_almacen/_delete_form.html.twig", "/var/www/html/access/templates/movimientos_almacen/_delete_form.html.twig");
    }
}
