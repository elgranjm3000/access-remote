<?php

/* user/index.html.twig */
class __TwigTemplate_2b37406242194c7a409e3ed1305af96fe5541b993082e759ea073f2510b0b9c8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "user/index.html.twig", 1);
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
        echo "Listado de Usuarios";
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
              <li class=\"crumb-trail\">Listado</li>
            </ol>
          </div>
          
        </header>
         <header id=\"topbar\" class=\"ph10\">
          <div class=\"topbar-left\">
            <ul class=\"nav nav-list nav-list-topbar pull-left\">
              <li class=\"active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\">Crear nuevo usuario</a></li>
              
            </ul>
          </div>
         
        </header>
          
          
      ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "          <section id=\"content\" class=\"table-layout animated fadeIn\">
        <!-- begin: .tray-left-->

        <!-- begin: .tray-center-->
        <div class=\"tray tray-center\">
        <!-- Panel with: Basic Footable-->

        <!-- Panel with: Data Filter-->

        <!-- Panel with: Pagination-->
        <div id=\"spy3\" class=\"panel\">

        <div class=\"panel-body pn\">
        <table class=\"table footable\">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Roles</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "username", array()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "username", array()))) {
                // line 56
                echo "            <tr>
                <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 61
                    echo "                        ";
                    if (($context["user"] == "ROLE_ADMIN")) {
                        // line 62
                        echo "                           ADMINISTRADOR
                        ";
                    }
                    // line 64
                    echo "
                        ";
                    // line 65
                    if (($context["user"] == "ROLE_USER")) {
                        // line 66
                        echo "                           USUARIO
                        ";
                    }
                    // line 68
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                
                </td>
                <td>
                    <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span></a>
                    <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                </td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 77
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </tbody>
    </table>

   </table>

     </div>
            </div>
            <!-- Panel with: Expanding Rows-->
          
            <!-- DEMO - breaks used to extend container - DEMO--><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </section>
";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 81,  163 => 77,  153 => 73,  149 => 72,  144 => 69,  138 => 68,  134 => 66,  132 => 65,  129 => 64,  125 => 62,  122 => 61,  118 => 60,  113 => 58,  109 => 57,  106 => 56,  100 => 55,  75 => 32,  72 => 31,  59 => 19,  43 => 5,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/index.html.twig", "/var/www/html/access/templates/user/index.html.twig");
    }
}
