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

/* frontoffice/home.html.twig */
class __TwigTemplate_f719dd0e1aa96edd2e77048b7917326fad969a6a1a7e682c7ee34a5e3ab9ec70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/home.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "frontoffice/home.html.twig", 1);
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

        echo "Accueil | culture";
        
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

    <!-- banner part start-->
    <section class=\"banner_part\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <div class=\"banner_slider owl-carousel\">
                        <div class=\"single_banner_slider\">
                            <div class=\"row\">
                                <div class=\"col-lg-5 col-md-8\">
                                    <div class=\"banner_text\">
                                        <div class=\"banner_text_iner\">
                                            <h1>Culture</h1>
                                            <p>Tournez le monde en 2 clics
                                            </p>
                                            <a href=\"#\" class=\"btn_2\">buy now</a>

                                        </div>
                                    </div>
                                </div>

    </section>

    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        </tr>
        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
            <tr align=\"center\">

                <th>Image</th>
                <th>Designation</th>
                <th>Prix</th>
                <th>Cathegorie</th>
            </tr>
            </thead>

            <tbody>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 63
            echo "            <tr>

        <td><img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["i"], "image", [], "any", false, false, false, 65))), "html", null, true);
            echo "\">
                     <alt =\"\" style=\"width: 10px:height: 10px\"></td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "designation", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prix", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "cathegorie", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td><a href=\"#\" class=\"btn_2\">buy now</a></td>


            </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "

        </tbody>
    </table>
    <!--::subscribe_area part end::-->
    ";
        // line 81
        echo twig_include($this->env, $context, "includes/frontoffice/footer.html.twig");
        echo "
    <!--::footer_part start::-->
    

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 81,  185 => 76,  172 => 69,  168 => 68,  164 => 67,  159 => 65,  155 => 63,  151 => 62,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'baseF.html.twig'%}
{% block title %}Accueil | culture{% endblock %}
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

    <!-- banner part start-->
    <section class=\"banner_part\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <div class=\"banner_slider owl-carousel\">
                        <div class=\"single_banner_slider\">
                            <div class=\"row\">
                                <div class=\"col-lg-5 col-md-8\">
                                    <div class=\"banner_text\">
                                        <div class=\"banner_text_iner\">
                                            <h1>Culture</h1>
                                            <p>Tournez le monde en 2 clics
                                            </p>
                                            <a href=\"#\" class=\"btn_2\">buy now</a>

                                        </div>
                                    </div>
                                </div>

    </section>

    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        </tr>
        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
            <tr align=\"center\">

                <th>Image</th>
                <th>Designation</th>
                <th>Prix</th>
                <th>Cathegorie</th>
            </tr>
            </thead>

            <tbody>
        {% for i in data %}
            <tr>

        <td><img src=\"{{ asset('images/' ~  i.image) }}\">
                     <alt =\"\" style=\"width: 10px:height: 10px\"></td>
                <td>{{ i.designation }}</td>
                <td>{{ i.prix }}</td>
                <td>{{ i.cathegorie.id }}</td>
                <td><a href=\"#\" class=\"btn_2\">buy now</a></td>


            </tr>

            {% endfor %}


        </tbody>
    </table>
    <!--::subscribe_area part end::-->
    {{include('includes/frontoffice/footer.html.twig')}}
    <!--::footer_part start::-->
    

    {% endblock %}
", "frontoffice/home.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\frontoffice\\home.html.twig");
    }
}
