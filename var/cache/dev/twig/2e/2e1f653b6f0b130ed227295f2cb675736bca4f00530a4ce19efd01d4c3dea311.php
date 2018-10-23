<?php

/* page_login.html.twig */
class __TwigTemplate_ed3e9d299a4f350eb803bd5894cc442e4bd4ef20d1c215d319f97a9d37513317 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page_login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page_login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Site Title-->
    <title>Login de ingreso</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <link rel=\"icon\" href=\"assets/img/favicon.ico\" type=\"image/x-icon\">
    <!-- Stylesheets-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/admin-tools/admin-forms/css/admin-forms.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Lato:300,400,600,700%7CMontserrat:400,700\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/skin/default_skin/css/theme.css\">
\t\t<!--[if lt IE 10]>
    <div style=\"background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"images/ie8-panel/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
    <script src=\"js/html5shiv.min.js\"></script>
\t\t<![endif]-->
  </head>
  <body class=\"external-page external-alt sb-l-c sb-r-c\">
    ";
        // line 21
        echo "    <!-- Start: Main-->
    <div id=\"main\" class=\"animated fadeIn\">
      <!-- Start: Content-Wrapper-->
      <section id=\"content_wrapper\">
        <!-- Begin: Content-->
        <section id=\"content\">
          <div id=\"login\" class=\"admin-form theme-info mw500\">
            <!-- Login Logo-->
        


   ";
        // line 32
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "
        <div class=\"alert alert-danger dark alert-dismissable\">
          <button type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\" class=\"close\"></button>
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 36, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 36, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 38
        echo "

            <!-- Login Panel/Form-->
            <div class=\"panel mt30 mb25\">
              <form  method=\"post\" action=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
                <div class=\"panel-body bg-light p25 pb15\">
                  <!-- Social Login Buttons-->
                 
                  <!-- Divider-->
                  <div class=\"section-divider mv30\"><span>Acceso</span></div>
                  <!-- Username Input-->
                  <div class=\"section\">
                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Username</label>
                    <label for=\"username\" class=\"field prepend-icon\">
                      <input id=\"username\" type=\"text\" name=\"_username\" placeholder=\"Enter username\" class=\"gui-input\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "\">
                      <label for=\"username\" class=\"field-icon\"><i class=\"fa fa-user\"></i></label>
                    </label>
                  </div>
                  <!-- Password Input-->
                  <div class=\"section\">
                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Password</label>
                    <label for=\"password\" class=\"field prepend-icon\">
                      <input id=\"password\" type=\"password\" name=\"_password\" placeholder=\"Enter password\" class=\"gui-input\">
                      <label for=\"password\" class=\"field-icon\"><i class=\"fa fa-lock\"></i></label>
                    </label>
                  </div>
                </div>
                <div class=\"panel-footer clearfix\">
                   <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proveedores_new");
        echo "\" />
      <input type=\"hidden\" name=\"_failure_path\" value=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" />

                  <button type=\"submit\" class=\"button btn-primary mr10 pull-right\">Ingresar</button>
                  ";
        // line 74
        echo "                </div>
              </form>
            </div>
            <!-- Registration Links-->
            ";
        // line 86
        echo "        </section>
      </section>
    </div>
    <!-- core scripts-->
    <script src=\"plugins/core.min.js\"></script>
    <!-- Theme Javascript-->
    <script src=\"assets/js/utility/utility.js\"></script>
    <script src=\"assets/js/demo/demo.js\"></script>
    <script src=\"assets/js/main.js\"></script>
    <!-- Page Javascript-->
    <script type=\"text/javascript\">
      jQuery(document).ready(function () {
        \"use strict\";
        // Init Theme Core
       // Core.init();
        // Init Demo JS
        //Demo.init();
        
      });
    </script>
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "page_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 86,  121 => 74,  115 => 67,  111 => 66,  94 => 52,  81 => 42,  75 => 38,  70 => 36,  65 => 33,  63 => 32,  50 => 21,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Site Title-->
    <title>Login de ingreso</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <link rel=\"icon\" href=\"assets/img/favicon.ico\" type=\"image/x-icon\">
    <!-- Stylesheets-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/admin-tools/admin-forms/css/admin-forms.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Lato:300,400,600,700%7CMontserrat:400,700\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/skin/default_skin/css/theme.css\">
\t\t<!--[if lt IE 10]>
    <div style=\"background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"images/ie8-panel/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
    <script src=\"js/html5shiv.min.js\"></script>
\t\t<![endif]-->
  </head>
  <body class=\"external-page external-alt sb-l-c sb-r-c\">
    {#<body class=\"sb-r-c mobile-view onload-check\">#}
    <!-- Start: Main-->
    <div id=\"main\" class=\"animated fadeIn\">
      <!-- Start: Content-Wrapper-->
      <section id=\"content_wrapper\">
        <!-- Begin: Content-->
        <section id=\"content\">
          <div id=\"login\" class=\"admin-form theme-info mw500\">
            <!-- Login Logo-->
        


   {% if error %}

        <div class=\"alert alert-danger dark alert-dismissable\">
          <button type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\" class=\"close\"></button>
        {{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


            <!-- Login Panel/Form-->
            <div class=\"panel mt30 mb25\">
              <form  method=\"post\" action=\"{{ path('login') }}\">
                <div class=\"panel-body bg-light p25 pb15\">
                  <!-- Social Login Buttons-->
                 
                  <!-- Divider-->
                  <div class=\"section-divider mv30\"><span>Acceso</span></div>
                  <!-- Username Input-->
                  <div class=\"section\">
                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Username</label>
                    <label for=\"username\" class=\"field prepend-icon\">
                      <input id=\"username\" type=\"text\" name=\"_username\" placeholder=\"Enter username\" class=\"gui-input\" value=\"{{ last_username }}\">
                      <label for=\"username\" class=\"field-icon\"><i class=\"fa fa-user\"></i></label>
                    </label>
                  </div>
                  <!-- Password Input-->
                  <div class=\"section\">
                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Password</label>
                    <label for=\"password\" class=\"field prepend-icon\">
                      <input id=\"password\" type=\"password\" name=\"_password\" placeholder=\"Enter password\" class=\"gui-input\">
                      <label for=\"password\" class=\"field-icon\"><i class=\"fa fa-lock\"></i></label>
                    </label>
                  </div>
                </div>
                <div class=\"panel-footer clearfix\">
                   <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('proveedores_new') }}\" />
      <input type=\"hidden\" name=\"_failure_path\" value=\"{{ path('login') }}\" />

                  <button type=\"submit\" class=\"button btn-primary mr10 pull-right\">Ingresar</button>
                  {# <label class=\"switch ib switch-primary mt10\">
                    <input id=\"remember\" type=\"checkbox\" name=\"remember\" checked=\"\">
                    <label for=\"remember\" data-on=\"YES\" data-off=\"NO\"></label> <span>Remember me</span>
                  </label>#}
                </div>
              </form>
            </div>
            <!-- Registration Links-->
            {#<div class=\"login-links\">
              <p><a href=\"pages_forgotpw(alt).html\" title=\"Sign In\" class=\"active\">Forgot Password?</a></p>
              <p>Haven't yet Registered? <a href=\"pages_register(alt).html\" title=\"Sign In\">Sign up here</a>
              </p>
            </div>
            <!-- Registration Links(alt)-->
            <div class=\"login-links hidden\"><a href=\"pages_login-alt.html\" title=\"Sign In\" class=\"active\">Sign In</a> |<a href=\"pages_register-alt.html\" title=\"Register\">Register</a></div>
          </div>#}
        </section>
      </section>
    </div>
    <!-- core scripts-->
    <script src=\"plugins/core.min.js\"></script>
    <!-- Theme Javascript-->
    <script src=\"assets/js/utility/utility.js\"></script>
    <script src=\"assets/js/demo/demo.js\"></script>
    <script src=\"assets/js/main.js\"></script>
    <!-- Page Javascript-->
    <script type=\"text/javascript\">
      jQuery(document).ready(function () {
        \"use strict\";
        // Init Theme Core
       // Core.init();
        // Init Demo JS
        //Demo.init();
        
      });
    </script>
  </body>
</html>", "page_login.html.twig", "C:\\xampp\\htdocs\\access\\templates\\page_login.html.twig");
    }
}
