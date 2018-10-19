<?php

/* clientes/_delete_form.html.twig */
class __TwigTemplate_58816cac02aec0191a73c85e2d6f054a764cb5db334393312b592a54b04c31f5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clientes_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 1, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Desea eliminar este registro?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new Twig_Error_Runtime('Variable "cliente" does not exist.', 3, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">
    <button class=\"btn btn-danger\">Eliminar registro</button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  35 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"post\" action=\"{{ path('clientes_delete', {'id': cliente.id}) }}\" onsubmit=\"return confirm('¿Desea eliminar este registro?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ cliente.id) }}\">
    <button class=\"btn btn-danger\">Eliminar registro</button>
</form>
", "clientes/_delete_form.html.twig", "C:\\xampp\\htdocs\\access\\templates\\clientes\\_delete_form.html.twig");
    }
}
