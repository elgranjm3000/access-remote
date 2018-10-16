<?php

/* home/inicio.html.twig */
class __TwigTemplate_2603c73e284ffe6eefc77eb7c69446bf98541baa642d26a0ef2e15b63e169a3a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "home/inicio.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/inicio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo " <header id=\"topbar\" class=\"alt\">
          <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"index.html\">Dashboard</a></li>
              <li class=\"crumb-icon\"><a href=\"index.html\"><span class=\"glyphicon glyphicon-home\"></span></a></li>
              <li class=\"crumb-link\"><a href=\"index.html\">Home</a></li>
              <li class=\"crumb-trail\">Dashboard</li>
            </ol>
          </div>
          <div class=\"topbar-right\">
            <div class=\"ib topbar-dropdown\">
              <label for=\"topbar-multiple\" class=\"control-label pr10 fs15 text-muted\">Reporting Period</label>
              <select id=\"topbar-multiple\" class=\"hidden\">
                <optgroup label=\"Filter By:\">
                  <option value=\"1-1\">Last 30 Days</option>
                  <option value=\"1-2\" selected=\"selected\">Last 60 Days</option>
                  <option value=\"1-3\">Last Year</option>
                </optgroup>
              </select>
            </div>
            <div id=\"toggle_sidemenu_r\" class=\"ml15 ib va-m\"><a href=\"#\" class=\"pl5\"><i class=\"fa fa-sign-in fs22 text-primary\"></i><span class=\"badge badge-hero badge-danger\">3</span></a></div>
          </div>
        </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "     <section id=\"content\" class=\"animated fadeIn\">
          <!-- Demo Content: Center Column Text-->
          <div class=\"ph10\">
            <h4> Example Center Content</h4>
            <hr class=\"alt short\">
            <p class=\"text-muted\">Lorem ipsum dolor sit amet,  is nisi ut aliquip ex ea commodo consectetur adipi sicing elit, sed do eiusmod tempor incididu ut labore et is nisi ut aliquip ex ea commodo dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exetation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </section>
      </section>
      <!-- Start: Right Sidebar-->
      <aside id=\"sidebar_right\" class=\"nano affix\">
        <!-- Start: Sidebar Right Content-->
        <div class=\"sidebar-right-content nano-content p15\">
          <h5 class=\"title-divider text-muted mb20\">Server Statistics<span class=\"pull-right\">2013<i class=\"fa fa-caret-down ml5\"></i></span></h5>
          <div class=\"progress mh5\">
            <div role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 44%\" class=\"progress-bar progress-bar-primary\"><span class=\"fs11\">DB Request</span></div>
          </div>
          <div class=\"progress mh5\">
            <div role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 84%\" class=\"progress-bar progress-bar-info\"><span class=\"fs11 text-left\">Server Load</span></div>
          </div>
          <div class=\"progress mh5\">
            <div role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 61%\" class=\"progress-bar progress-bar-warning\"><span class=\"fs11 text-left\">Server Connections</span></div>
          </div>
          <h5 class=\"title-divider text-muted mt30 mb10\">Traffic Margins</h5>
          <div class=\"row\">
            <div class=\"col-xs-5\">
              <h3 class=\"text-primary mn pl5\">132</h3>
            </div>
            <div class=\"col-xs-7 text-right\">
              <h3 class=\"text-success-dark mn\"><i class=\"fa fa-caret-up\"></i> 13.2%</h3>
            </div>
          </div>
          <h5 class=\"title-divider text-muted mt25 mb10\">Database Request</h5>
          <div class=\"row\">
            <div class=\"col-xs-5\">
              <h3 class=\"text-primary mn pl5\">212</h3>
            </div>
            <div class=\"col-xs-7 text-right\">
              <h3 class=\"text-success-dark mn\"><i class=\"fa fa-caret-up\"></i> 25.6%</h3>
            </div>
          </div>
          <h5 class=\"title-divider text-muted mt25 mb10\">Server Response</h5>
          <div class=\"row\">
            <div class=\"col-xs-5\">
              <h3 class=\"text-primary mn pl5\">82.5</h3>
            </div>
            <div class=\"col-xs-7 text-right\">
              <h3 class=\"text-danger mn\"><i class=\"fa fa-caret-down\"></i> 17.9%</h3>
            </div>
          </div>
          <h5 class=\"title-divider text-muted mt40 mb20\">Server Statistics<span class=\"pull-right text-primary fw600\">USA</span></h5>
        </div>
      </aside>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  87 => 30,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block header %}
 <header id=\"topbar\" class=\"alt\">
          <div class=\"topbar-left\">
            <ol class=\"breadcrumb\">
              <li class=\"crumb-active\"><a href=\"index.html\">Dashboard</a></li>
              <li class=\"crumb-icon\"><a href=\"index.html\"><span class=\"glyphicon glyphicon-home\"></span></a></li>
              <li class=\"crumb-link\"><a href=\"index.html\">Home</a></li>
              <li class=\"crumb-trail\">Dashboard</li>
            </ol>
          </div>
          <div class=\"topbar-right\">
            <div class=\"ib topbar-dropdown\">
              <label for=\"topbar-multiple\" class=\"control-label pr10 fs15 text-muted\">Reporting Period</label>
              <select id=\"topbar-multiple\" class=\"hidden\">
                <optgroup label=\"Filter By:\">
                  <option value=\"1-1\">Last 30 Days</option>
                  <option value=\"1-2\" selected=\"selected\">Last 60 Days</option>
                  <option value=\"1-3\">Last Year</option>
                </optgroup>
              </select>
            </div>
            <div id=\"toggle_sidemenu_r\" class=\"ml15 ib va-m\"><a href=\"#\" class=\"pl5\"><i class=\"fa fa-sign-in fs22 text-primary\"></i><span class=\"badge badge-hero badge-danger\">3</span></a></div>
          </div>
        </header>
{% endblock %}


{% block body %}
     <section id=\"content\" class=\"animated fadeIn\">
          <!-- Demo Content: Center Column Text-->
          <div class=\"ph10\">
            <h4> Example Center Content</h4>
            <hr class=\"alt short\">
            <p class=\"text-muted\">Lorem ipsum dolor sit amet,  is nisi ut aliquip ex ea commodo consectetur adipi sicing elit, sed do eiusmod tempor incididu ut labore et is nisi ut aliquip ex ea commodo dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exetation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </section>
      </section>
      <!-- Start: Right Sidebar-->
      <aside id=\"sidebar_right\" class=\"nano affix\">
        <!-- Start: Sidebar Right Content-->
        <div class=\"sidebar-right-content nano-content p15\">
          <h5 class=\"title-divider text-muted mb20\">Server Statistics<span class=\"pull-right\">2013<i class=\"fa fa-caret-down ml5\"></i></span></h5>
          <div class=\"progress mh5\">
            <div role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 44%\" class=\"progress-bar progress-bar-primary\"><span class=\"fs11\">DB Request</span></div>
          </div>
          <div class=\"progress mh5\">
            <div role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 84%\" class=\"progress-bar progress-bar-info\"><span class=\"fs11 text-left\">Server Load</span></div>
          </div>
          <div class=\"progress mh5\">
            <div role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 61%\" class=\"progress-bar progress-bar-warning\"><span class=\"fs11 text-left\">Server Connections</span></div>
          </div>
          <h5 class=\"title-divider text-muted mt30 mb10\">Traffic Margins</h5>
          <div class=\"row\">
            <div class=\"col-xs-5\">
              <h3 class=\"text-primary mn pl5\">132</h3>
            </div>
            <div class=\"col-xs-7 text-right\">
              <h3 class=\"text-success-dark mn\"><i class=\"fa fa-caret-up\"></i> 13.2%</h3>
            </div>
          </div>
          <h5 class=\"title-divider text-muted mt25 mb10\">Database Request</h5>
          <div class=\"row\">
            <div class=\"col-xs-5\">
              <h3 class=\"text-primary mn pl5\">212</h3>
            </div>
            <div class=\"col-xs-7 text-right\">
              <h3 class=\"text-success-dark mn\"><i class=\"fa fa-caret-up\"></i> 25.6%</h3>
            </div>
          </div>
          <h5 class=\"title-divider text-muted mt25 mb10\">Server Response</h5>
          <div class=\"row\">
            <div class=\"col-xs-5\">
              <h3 class=\"text-primary mn pl5\">82.5</h3>
            </div>
            <div class=\"col-xs-7 text-right\">
              <h3 class=\"text-danger mn\"><i class=\"fa fa-caret-down\"></i> 17.9%</h3>
            </div>
          </div>
          <h5 class=\"title-divider text-muted mt40 mb20\">Server Statistics<span class=\"pull-right text-primary fw600\">USA</span></h5>
        </div>
      </aside>
{% endblock %}", "home/inicio.html.twig", "C:\\xampp\\htdocs\\lamya_Web\\templates\\home\\inicio.html.twig");
    }
}
