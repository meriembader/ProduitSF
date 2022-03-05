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

/* includes/frontoffice/navbar.html.twig */
class __TwigTemplate_e7b0373d11d27905d7eff458a3e5ff8c1c0183644ff997fea88bb50fdaf4074a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/frontoffice/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/frontoffice/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/logo.png\" alt=\"logo\"> </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"menu_icon\"><i class=\"fas fa-bars\"></i></span>
                        </button>

                        <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Shop
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                        <a class=\"dropdown-item\" href=\"category.html\"> shop category</a>
                                        <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>
                                        
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        pages
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"login.html\"> login</a>
                                        <a class=\"dropdown-item\" href=\"tracking.html\">tracking</a>
                                        <a class=\"dropdown-item\" href=\"checkout.html\">product checkout</a>
                                        <a class=\"dropdown-item\" href=\"cart.html\">shopping cart</a>
                                        <a class=\"dropdown-item\" href=\"confirmation.html\">confirmation</a>
                                        <a class=\"dropdown-item\" href=\"elements.html\">elements</a>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_2\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        blog
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\"> blog</a>
                                        <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                    </div>
                                </li>
                                
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"hearer_icon d-flex\">
                            <a id=\"search_1\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                            <a href=\"\"><i class=\"ti-heart\"></i></a>
                            <a class=\"dropdown-toggle\" href=\" ";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo " \" id=\"navbarDropdown3\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"fas fa-cart-plus\"></i>
                                </a>
                            <div class=\"dropdown cart\">
                                <a class=\"dropdown-toggle\" href=\" ";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo " \" id=\"navbarDropdown3\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"fas fa-cart-plus\"></i>
                                </a>
                            </div>
                        </div>
                    </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/frontoffice/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 63,  114 => 58,  104 => 51,  95 => 45,  59 => 12,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"{{asset('assetsF/')}}/img/logo.png\" alt=\"logo\"> </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"menu_icon\"><i class=\"fas fa-bars\"></i></span>
                        </button>

                        <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{path('home')}}\">Home</a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Shop
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                        <a class=\"dropdown-item\" href=\"category.html\"> shop category</a>
                                        <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>
                                        
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        pages
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"login.html\"> login</a>
                                        <a class=\"dropdown-item\" href=\"tracking.html\">tracking</a>
                                        <a class=\"dropdown-item\" href=\"checkout.html\">product checkout</a>
                                        <a class=\"dropdown-item\" href=\"cart.html\">shopping cart</a>
                                        <a class=\"dropdown-item\" href=\"confirmation.html\">confirmation</a>
                                        <a class=\"dropdown-item\" href=\"elements.html\">elements</a>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_2\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        blog
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"{{path('blog')}}\"> blog</a>
                                        <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                    </div>
                                </li>
                                
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{path('contact')}}\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"hearer_icon d-flex\">
                            <a id=\"search_1\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                            <a href=\"\"><i class=\"ti-heart\"></i></a>
                            <a class=\"dropdown-toggle\" href=\" {{path('cart')}} \" id=\"navbarDropdown3\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"fas fa-cart-plus\"></i>
                                </a>
                            <div class=\"dropdown cart\">
                                <a class=\"dropdown-toggle\" href=\" {{path('cart')}} \" id=\"navbarDropdown3\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"fas fa-cart-plus\"></i>
                                </a>
                            </div>
                        </div>
                    </nav>", "includes/frontoffice/navbar.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\includes\\frontoffice\\navbar.html.twig");
    }
}
