<?php

/* user/show.html.twig */
class __TwigTemplate_7cae53586d5b04e42b2c499f2d0bf21b4f0eaf6096cb8329d9e4546e5bf0a574 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "user/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Detalles de usuarios";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "
        <header id=\"topbar\" class=\"ph10\">

             <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"#\">Usuarios</a></li>                            
              <li class=\"crumb-trail\">Detalles</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\">Listado de Usuarios</a></li>
              <li class=\"active\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\">Editar Usuario</a></li>
              <li>";
        // line 21
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "</li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"container\">
    <div class=\"panel\">
              <div class=\"panel-heading\"><span class=\"panel-title\"><span class=\"fa fa-info\"></span>Detalles de Usuario</span>
                
              </div>
            </div>
    <div id=\"spy1\" class=\"row\">
<div class=\"col-sm-12\">
                <div class=\"panel\">
                  <div class=\"panel-body pn\">
                    
                      <table class=\"table\">
        <tbody>
          
            <tr>
                <th>Username</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</td>
            </tr>            
            <tr>
                <th>Email</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            
            <tr>
                <th>Roles</th>
                <td>
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 59
            echo "                        ";
            if (($context["user"] == "ROLE_ADMIN")) {
                // line 60
                echo "                           ADMINISTRADOR
                        ";
            }
            // line 62
            echo "
                        ";
            // line 63
            if (($context["user"] == "ROLE_USER")) {
                // line 64
                echo "                           USUARIO
                        ";
            }
            // line 66
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </td>
            </tr>
        </tbody>
   </tbody>
                      </table>
               
                </div>
              </div>
          </div>
      </div>
   
";
    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 67,  137 => 66,  133 => 64,  131 => 63,  128 => 62,  124 => 60,  121 => 59,  117 => 58,  108 => 52,  101 => 48,  83 => 32,  80 => 31,  67 => 21,  63 => 20,  59 => 19,  43 => 5,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/show.html.twig", "/var/www/html/access/templates/user/show.html.twig");
    }
}
