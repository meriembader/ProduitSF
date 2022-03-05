<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* frontoffice/login.html.twig */
class __TwigTemplate_13b4eaef6a6a3288c301dd4fd1e731e1f3d66f453c6bb6fac00c0a5da4c5b47e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/login.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "frontoffice/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login | culture";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!--::header part start::-->
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    ";
        // line 9
        echo twig_include($this->env, $context, "includes/frontoffice/navbar.html.twig");
        echo "
                </div>
            </div>
        </div>
        <div class=\"search_input\" id=\"search_input_box\">
            <div class=\"container \">
                <form class=\"d-flex justify-content-between search-inner\">
                    <input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Search Here\">
                    <button type=\"submit\" class=\"btn\"></button>
                    <span class=\"ti-close\" id=\"close_search\" title=\"Close Search\"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    <!-- breadcrumb start-->
    <section class=\"breadcrumb breadcrumb_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"breadcrumb_iner\">
                        <div class=\"breadcrumb_iner_item\">
                            <h2>Tracking Order</h2>
                            <p>Home <span>-</span> Tracking Order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================login_part Area =================-->
    <section class=\"login_part padding_top\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"login_part_text text-center\">
                        <div class=\"login_part_text_iner\">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href=\"#\" class=\"btn_3\">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"login_part_form\">
                        <div class=\"login_part_form_iner\">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
                                <div class=\"col-md-12 form-group p_star\">
                                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"\"
                                        placeholder=\"Username\">
                                </div>
                                <div class=\"col-md-12 form-group p_star\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" value=\"\"
                                        placeholder=\"Password\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"creat_account d-flex align-items-center\">
                                        <input type=\"checkbox\" id=\"f-option\" name=\"selector\">
                                        <label for=\"f-option\">Remember me</label>
                                    </div>
                                    <button type=\"submit\" value=\"submit\" class=\"btn_3\">
                                        log in
                                    </button>
                                    <a class=\"lost_pass\" href=\"#\">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 88
        echo twig_include($this->env, $context, "includes/frontoffice/footer.html.twig");
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 88,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'baseF.html.twig'%}
{% block title %}Login | culture{% endblock %}
{% block content %}
    <!--::header part start::-->
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    {{include('includes/frontoffice/navbar.html.twig') }}
                </div>
            </div>
        </div>
        <div class=\"search_input\" id=\"search_input_box\">
            <div class=\"container \">
                <form class=\"d-flex justify-content-between search-inner\">
                    <input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Search Here\">
                    <button type=\"submit\" class=\"btn\"></button>
                    <span class=\"ti-close\" id=\"close_search\" title=\"Close Search\"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    <!-- breadcrumb start-->
    <section class=\"breadcrumb breadcrumb_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"breadcrumb_iner\">
                        <div class=\"breadcrumb_iner_item\">
                            <h2>Tracking Order</h2>
                            <p>Home <span>-</span> Tracking Order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================login_part Area =================-->
    <section class=\"login_part padding_top\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"login_part_text text-center\">
                        <div class=\"login_part_text_iner\">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href=\"#\" class=\"btn_3\">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"login_part_form\">
                        <div class=\"login_part_form_iner\">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
                                <div class=\"col-md-12 form-group p_star\">
                                    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"\"
                                        placeholder=\"Username\">
                                </div>
                                <div class=\"col-md-12 form-group p_star\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" value=\"\"
                                        placeholder=\"Password\">
                                </div>
                                <div class=\"col-md-12 form-group\">
                                    <div class=\"creat_account d-flex align-items-center\">
                                        <input type=\"checkbox\" id=\"f-option\" name=\"selector\">
                                        <label for=\"f-option\">Remember me</label>
                                    </div>
                                    <button type=\"submit\" value=\"submit\" class=\"btn_3\">
                                        log in
                                    </button>
                                    <a class=\"lost_pass\" href=\"#\">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{include('includes/frontoffice/footer.html.twig')}}
  {% endblock %}", "frontoffice/login.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\frontoffice\\login.html.twig");
    }
}
