<?php

/* facturas/_delete_form.html.twig */
class __TwigTemplate_4a920f6345a327c617e5dd49c7f99760202553d2ebfae220d620c3ec2a29964c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facturas/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturas_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 1, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" onsubmit=\"return confirm('¿Desea borrar y eliminar esta factura?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["factura"]) || array_key_exists("factura", $context) ? $context["factura"] : (function () { throw new Twig_Error_Runtime('Variable "factura" does not exist.', 3, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">
    <button class=\"btn btn-danger\">Eliminar</button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facturas/_delete_form.html.twig";
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
        return new Twig_Source("<form method=\"post\" action=\"{{ path('facturas_delete', {'id': factura.id}) }}\" onsubmit=\"return confirm('¿Desea borrar y eliminar esta factura?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ factura.id) }}\">
    <button class=\"btn btn-danger\">Eliminar</button>
</form>
", "facturas/_delete_form.html.twig", "C:\\xampp\\htdocs\\access\\templates\\facturas\\_delete_form.html.twig");
    }
}
