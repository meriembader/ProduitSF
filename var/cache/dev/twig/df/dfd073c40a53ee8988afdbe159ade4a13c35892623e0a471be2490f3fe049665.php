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

/* frontoffice/elements.html.twig */
class __TwigTemplate_c5fb6e876fe33425a07c069a8220ea77e995de84302bfd64ecd6522a57898ca2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/elements.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/elements.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"zxx\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<title>aranoz</title>
\t<link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/favicon.png\">
\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
\t<!-- animate CSS -->
\t<link rel=\"stylesheet\" href=\"css/animate.css\">
\t<!-- owl carousel CSS -->
\t<link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
\t<!-- font awesome CSS -->
\t<link rel=\"stylesheet\" href=\"css/all.css\">
\t<!-- flaticon CSS -->
\t<link rel=\"stylesheet\" href=\"css/flaticon.css\">
\t<link rel=\"stylesheet\" href=\"css/themify-icons.css\">
\t<link rel=\"stylesheet\" href=\"css/nice-select.css\">
\t<!-- font awesome CSS -->
\t<link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
\t<!-- swiper CSS -->
\t<link rel=\"stylesheet\" href=\"css/slick.css\">
\t<!-- style CSS -->
\t<link rel=\"stylesheet\" href=\"css/style.css\">
</head>

<body>
\t<!--::header part start::-->
\t<header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"";
        // line 37
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
                                    <a class=\"nav-link\" href=\"index.html\">Home</a>
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
                                        <a class=\"dropdown-item\" href=\"blog.html\"> blog</a>
                                        <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                    </div>
                                </li>
                                
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"hearer_icon d-flex\">
                            <a id=\"search_1\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                            <a href=\"\"><i class=\"ti-heart\"></i></a>
                            <div class=\"dropdown cart\">
                                <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdown3\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"fas fa-cart-plus\"></i>
                                </a>
                                <!-- <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <div class=\"single_product\">
    
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                    </nav>
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
\t<!-- Header part end-->


\t<!-- breadcrumb start-->
\t<section class=\"breadcrumb breadcrumb_bg\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"breadcrumb_iner text-center\">
\t\t\t\t\t\t<div class=\"breadcrumb_iner_item\">
\t\t\t\t\t\t\t<h2>elements</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- breadcrumb start-->

\t<!-- Start Sample Area -->
\t<section class=\"sample-text-area\">
\t\t<div class=\"container box_1170\">
\t\t\t<h3 class=\"text-heading\">Text Sample</h3>
\t\t\t<p class=\"sample-text\">
\t\t\t\tEvery avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary,
\t\t\t\tor short
\t\t\t\tfilm to show off their creative prowess. Many have great ideas and want to “wow”
\t\t\t\tthe<sup>Superscript</sup> scene,
\t\t\t\tor video renters with their big project. But once you have the<sub>Subscript</sub> “in the can” (no easy
\t\t\t\tfeat), how
\t\t\t\tdo you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked
\t\t\t\thand-written title
\t\t\t\tinside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC
\t\t\t\tbarcodes
\t\t\t\tand polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project
\t\t\t\treplicated.
\t\t\t\tUsing a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is
\t\t\t\tcertainly a
\t\t\t\thelpful option to ensure a professional end result, but to help with your DVD replication project, here
\t\t\t\tare 4 easy
\t\t\t\tsteps to follow for good DVD replication results:

\t\t\t</p>
\t\t</div>
\t</section>
\t<!-- End Sample Area -->

\t<!-- Start Button -->
\t<section class=\"button-area\">
\t\t<div class=\"container box_1170 border-top-generic\">
\t\t\t<h3 class=\"text-heading\">Sample Buttons</h3>
\t\t\t<div class=\"button-group-area\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default-border\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info-border\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning-border\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger-border\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link-border\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-40\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default radius\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary radius\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success radius\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info radius\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning radius\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger radius\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link radius\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable radius\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default-border radius\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border radius\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border radius\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info-border radius\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning-border radius\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger-border radius\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link-border radius\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable radius\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-40\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default circle\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary circle\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success circle\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info circle\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning circle\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger circle\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link circle\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable circle\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default-border circle\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border circle\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border circle\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info-border circle\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning-border circle\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger-border circle\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link-border circle\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable circle\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-40\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default circle arrow\">Default<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary circle arrow\">Primary<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success circle arrow\">Success<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info circle arrow\">Info<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning circle arrow\">Warning<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger circle arrow\">Danger<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default-border circle arrow\">Default<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border circle arrow\">Primary<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border circle arrow\">Success<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info-border circle arrow\">Info<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning-border circle arrow\">Warning<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger-border circle arrow\">Danger<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-40\">
\t\t\t\t<a href=\"#\" class=\"genric-btn primary e-large\">Extra Large</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success large\">Large</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success medium\">Medium</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary small\">Small</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border e-large\">Extra Large</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border large\">Large</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border medium\">Medium</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border small\">Small</a>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Button -->

\t<!-- Start Align Area -->
\t<div class=\"whole-wrap\">
\t\t<div class=\"container box_1170\">
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Left Aligned</h3>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/d.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9 mt-sm-20\">
\t\t\t\t\t\t<p>Recently, the US Federal government banned online casinos from operating in America by making
\t\t\t\t\t\t\tit illegal to
\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law, most
\t\t\t\t\t\t\tof the popular
\t\t\t\t\t\t\tonline casino networks such as Party Gaming and PlayTech left the United States. Overnight,
\t\t\t\t\t\t\tonline casino
\t\t\t\t\t\t\tplayers found themselves being chased by the Federal government. But, after a fortnight, the
\t\t\t\t\t\t\tonline casino
\t\t\t\t\t\t\tindustry came up with a solution and new online casinos started taking root. These began to
\t\t\t\t\t\t\toperate under a
\t\t\t\t\t\t\tdifferent business umbrella, and by doing that, rendered the transfer of money to and from
\t\t\t\t\t\t\tthem legal. A major
\t\t\t\t\t\t\tpart of this was enlisting electronic banking systems that would accept this new
\t\t\t\t\t\t\tclarification and start doing
\t\t\t\t\t\t\tbusiness with me. Listed in this article are the electronic banking systems that accept
\t\t\t\t\t\t\tplayers from the United
\t\t\t\t\t\t\tStates that wish to play in online casinos.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border text-right\">
\t\t\t\t<h3 class=\"mb-30\">Right Aligned</h3>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<p class=\"text-right\">Over time, even the most sophisticated, memory packed computer can begin
\t\t\t\t\t\t\tto run slow if we
\t\t\t\t\t\t\tdon’t do something to prevent it. The reason why has less to do with how computers are made
\t\t\t\t\t\t\tand how they age and
\t\t\t\t\t\t\tmore to do with the way we use them. You see, all of the daily tasks that we do on our PC
\t\t\t\t\t\t\tfrom running programs
\t\t\t\t\t\t\tto downloading and deleting software can make our computer sluggish. To keep this from
\t\t\t\t\t\t\thappening, you need to
\t\t\t\t\t\t\tunderstand the reasons why your PC is getting slower and do something to keep your PC
\t\t\t\t\t\t\trunning at its best. You
\t\t\t\t\t\t\tcan do this through regular maintenance and PC performance optimization programs</p>
\t\t\t\t\t\t<p class=\"text-right\">Before we discuss all of the things that could be affecting your PC’s
\t\t\t\t\t\t\tperformance, let’s
\t\t\t\t\t\t\ttalk a little about what symptoms</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/d.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Definition</h3>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"single-defination\">
\t\t\t\t\t\t\t<h4 class=\"mb-20\">Definition 01</h4>
\t\t\t\t\t\t\t<p>Recently, the US Federal government banned online casinos from operating in America by
\t\t\t\t\t\t\t\tmaking it illegal to
\t\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law,
\t\t\t\t\t\t\t\tmost of the popular
\t\t\t\t\t\t\t\tonline casino networks</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"single-defination\">
\t\t\t\t\t\t\t<h4 class=\"mb-20\">Definition 02</h4>
\t\t\t\t\t\t\t<p>Recently, the US Federal government banned online casinos from operating in America by
\t\t\t\t\t\t\t\tmaking it illegal to
\t\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law,
\t\t\t\t\t\t\t\tmost of the popular
\t\t\t\t\t\t\t\tonline casino networks</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"single-defination\">
\t\t\t\t\t\t\t<h4 class=\"mb-20\">Definition 03</h4>
\t\t\t\t\t\t\t<p>Recently, the US Federal government banned online casinos from operating in America by
\t\t\t\t\t\t\t\tmaking it illegal to
\t\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law,
\t\t\t\t\t\t\t\tmost of the popular
\t\t\t\t\t\t\t\tonline casino networks</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Block Quotes</h3>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<blockquote class=\"generic-blockquote\">
\t\t\t\t\t\t\t“Recently, the US Federal government banned online casinos from operating in America by
\t\t\t\t\t\t\tmaking it illegal to
\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law, most
\t\t\t\t\t\t\tof the popular
\t\t\t\t\t\t\tonline casino networks such as Party Gaming and PlayTech left the United States. Overnight,
\t\t\t\t\t\t\tonline casino
\t\t\t\t\t\t\tplayers found themselves being chased by the Federal government. But, after a fortnight, the
\t\t\t\t\t\t\tonline casino
\t\t\t\t\t\t\tindustry came up with a solution and new online casinos started taking root. These began to
\t\t\t\t\t\t\toperate under a
\t\t\t\t\t\t\tdifferent business umbrella, and by doing that, rendered the transfer of money to and from
\t\t\t\t\t\t\tthem legal. A major
\t\t\t\t\t\t\tpart of this was enlisting electronic banking systems that would accept this new
\t\t\t\t\t\t\tclarification and start doing
\t\t\t\t\t\t\tbusiness with me. Listed in this article are the electronic banking”
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Table</h3>
\t\t\t\t<div class=\"progress-table-wrap\">
\t\t\t\t\t<div class=\"progress-table\">
\t\t\t\t\t\t<div class=\"table-head\">
\t\t\t\t\t\t\t<div class=\"serial\">#</div>
\t\t\t\t\t\t\t<div class=\"country\">Countries</div>
\t\t\t\t\t\t\t<div class=\"visit\">Visits</div>
\t\t\t\t\t\t\t<div class=\"percentage\">Percentages</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">01</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/f1.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-1\" role=\"progressbar\" style=\"width: 80%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">02</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/f2.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-2\" role=\"progressbar\" style=\"width: 30%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">03</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/f3.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-3\" role=\"progressbar\" style=\"width: 55%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">04</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/f4.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-4\" role=\"progressbar\" style=\"width: 60%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">05</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/f5.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-5\" role=\"progressbar\" style=\"width: 40%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">06</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/f6.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-6\" role=\"progressbar\" style=\"width: 70%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">07</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/f7.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-7\" role=\"progressbar\" style=\"width: 30%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">08</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/f8.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-8\" role=\"progressbar\" style=\"width: 60%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3>Image Gallery</h3>
\t\t\t\t<div class=\"row gallery-item\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g1.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url(";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g1.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g2.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url(";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g2.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g3.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url(";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g3.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<a href=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g4.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url(";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g4.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<a href=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g5.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url(";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g5.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g6.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url(";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g6.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g7.jpg\" class=\"img-pop-up img-gal\"\">
\t\t\t\t\t\t\t<div class=\" single-gallery-image\" style=\"background: url(";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g7.jpg);\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g8.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url(";
        // line 525
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/elements/g8.jpg);\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"section-top-border\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h3 class=\"mb-20\">Image Gallery</h3>
\t\t\t\t\t<div class=\"typography\">
\t\t\t\t\t\t<h1>This is header 01</h1>
\t\t\t\t\t\t<h2>This is header 02</h2>
\t\t\t\t\t\t<h3>This is header 03</h3>
\t\t\t\t\t\t<h4>This is header 04</h4>
\t\t\t\t\t\t<h5>This is header 01</h5>
\t\t\t\t\t\t<h6>This is header 01</h6>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 mt-sm-30\">
\t\t\t\t\t<h3 class=\"mb-20\">Unordered List</h3>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<ul class=\"unordered-list\">
\t\t\t\t\t\t\t<li>Fta Keys</li>
\t\t\t\t\t\t\t<li>For Women Only Your Computer Usage</li>
\t\t\t\t\t\t\t<li>Facts Why Inkjet Printing Is Very Appealing
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Addiction When Gambling Becomes
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>Protective Preventative Maintenance</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>Dealing With Technical Support 10 Useful Tips</li>
\t\t\t\t\t\t\t<li>Make Myspace Your Best Designed Space</li>
\t\t\t\t\t\t\t<li>Cleaning And Organizing Your Computer</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 mt-sm-30\">
\t\t\t\t\t<h3 class=\"mb-20\">Ordered List</h3>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<ol class=\"ordered-list\">
\t\t\t\t\t\t\t<li><span>Fta Keys</span></li>
\t\t\t\t\t\t\t<li><span>For Women Only Your Computer Usage</span></li>
\t\t\t\t\t\t\t<li><span>Facts Why Inkjet Printing Is Very Appealing</span>
\t\t\t\t\t\t\t\t<ol class=\"ordered-list-alpha\">
\t\t\t\t\t\t\t\t\t<li><span>Addiction When Gambling Becomes</span>
\t\t\t\t\t\t\t\t\t\t<ol class=\"ordered-list-roman\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>Protective Preventative Maintenance</span></li>
\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><span>Dealing With Technical Support 10 Useful Tips</span></li>
\t\t\t\t\t\t\t<li><span>Make Myspace Your Best Designed Space</span></li>
\t\t\t\t\t\t\t<li><span>Cleaning And Organizing Your Computer</span></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"section-top-border\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t<h3 class=\"mb-30\">Form Element</h3>
\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"First Name\"
\t\t\t\t\t\t\t\tonfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'First Name'\" required
\t\t\t\t\t\t\t\tclass=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" placeholder=\"Last Name\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Last Name'\" required class=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" placeholder=\"Last Name\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Last Name'\" required class=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"EMAIL\" placeholder=\"Email address\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Email address'\" required class=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group-icon mt-10\">
\t\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-thumb-tack\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t\t<input type=\"text\" name=\"address\" placeholder=\"Address\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Address'\" required class=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group-icon mt-10\">
\t\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-plane\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t\t<div class=\"form-select\" id=\"default-select\">
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option value=\" 1\">City</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Dhaka</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Dilli</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Newyork</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Islamabad</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group-icon mt-10\">
\t\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-globe\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t\t<div class=\"form-select\" id=\"default-select_1\">
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option value=\" 1\">Country</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Bangladesh</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">India</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">England</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Srilanka</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<textarea class=\"single-textarea\" placeholder=\"Message\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Message'\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- For Gradient Border Use -->
\t\t\t\t\t\t<!-- <div class=\"mt-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"primary-input\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"primary-input\" type=\"text\" name=\"first_name\" placeholder=\"Primary color\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Primary color'\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"primary-input\"></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"Primary color\"
\t\t\t\t\t\t\t\tonfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Primary color'\" required
\t\t\t\t\t\t\t\tclass=\"single-input-primary\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"Accent color\"
\t\t\t\t\t\t\t\tonfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Accent color'\" required
\t\t\t\t\t\t\t\tclass=\"single-input-accent\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"Secondary color\"
\t\t\t\t\t\t\t\tonfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Secondary color'\" required
\t\t\t\t\t\t\t\tclass=\"single-input-secondary\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-4 mt-sm-30\">
\t\t\t\t\t<div class=\"single-element-widget\">
\t\t\t\t\t\t<h3 class=\"mb-30\">Switches</h3>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>01. Sample Switch</p>
\t\t\t\t\t\t\t<div class=\"primary-switch\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"default-switch\">
\t\t\t\t\t\t\t\t<label for=\"default-switch\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>02. Primary Color Switch</p>
\t\t\t\t\t\t\t<div class=\"primary-switch\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"primary-switch\" checked>
\t\t\t\t\t\t\t\t<label for=\"primary-switch\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>03. Confirm Color Switch</p>
\t\t\t\t\t\t\t<div class=\"confirm-switch\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"confirm-switch\" checked>
\t\t\t\t\t\t\t\t<label for=\"confirm-switch\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-element-widget mt-30\">
\t\t\t\t\t\t<h3 class=\"mb-30\">Selectboxes</h3>
\t\t\t\t\t\t<div class=\"default-select\" id=\"default-select_2\">
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option value=\" 1\">English</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Spanish</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Arabic</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Portuguise</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Bengali</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-element-widget mt-30\">
\t\t\t\t\t\t<h3 class=\"mb-30\">Checkboxes</h3>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>01. Sample Checkbox</p>
\t\t\t\t\t\t\t<div class=\"primary-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"default-checkbox\">
\t\t\t\t\t\t\t\t<label for=\"default-checkbox\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>02. Primary Color Checkbox</p>
\t\t\t\t\t\t\t<div class=\"primary-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"primary-checkbox\" checked>
\t\t\t\t\t\t\t\t<label for=\"primary-checkbox\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>03. Confirm Color Checkbox</p>
\t\t\t\t\t\t\t<div class=\"confirm-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"confirm-checkbox\">
\t\t\t\t\t\t\t\t<label for=\"confirm-checkbox\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>04. Disabled Checkbox</p>
\t\t\t\t\t\t\t<div class=\"disabled-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"disabled-checkbox\" disabled>
\t\t\t\t\t\t\t\t<label for=\"disabled-checkbox\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>05. Disabled Checkbox active</p>
\t\t\t\t\t\t\t<div class=\"disabled-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"disabled-checkbox-active\" checked disabled>
\t\t\t\t\t\t\t\t<label for=\"disabled-checkbox-active\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-element-widget mt-30\">
\t\t\t\t\t\t<h3 class=\"mb-30\">Radios</h3>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>01. Sample radio</p>
\t\t\t\t\t\t\t<div class=\"primary-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"default-radio\">
\t\t\t\t\t\t\t\t<label for=\"default-radio\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>02. Primary Color radio</p>
\t\t\t\t\t\t\t<div class=\"primary-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"primary-radio\" checked>
\t\t\t\t\t\t\t\t<label for=\"primary-radio\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>03. Confirm Color radio</p>
\t\t\t\t\t\t\t<div class=\"confirm-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"confirm-radio\" checked>
\t\t\t\t\t\t\t\t<label for=\"confirm-radio\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>04. Disabled radio</p>
\t\t\t\t\t\t\t<div class=\"disabled-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"disabled-radio\" disabled>
\t\t\t\t\t\t\t\t<label for=\"disabled-radio\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>05. Disabled radio active</p>
\t\t\t\t\t\t\t<div class=\"disabled-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"disabled-radio-active\" checked disabled>
\t\t\t\t\t\t\t\t<label for=\"disabled-radio-active\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
\t<!-- End Align Area -->

\t<!--::footer_part start::-->
\t<footer class=\"footer_part\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"single_footer_part\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"footer_logo_iner\"> <img src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/footer_logo.png\" alt=\"#\"> </a>
\t\t\t\t\t\t<h4>About Us</h4>
\t\t\t\t\t\t<p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"single_footer_part\">
\t\t\t\t\t\t<h4>Contact Info</h4>
\t\t\t\t\t\t<p>Address : Your address goes
\t\t\t\t\t\t\there, your demo address.
\t\t\t\t\t\t\tBsngladesh.</p>
\t\t\t\t\t\t<p>Phone : +8880 44338899</p>
\t\t\t\t\t\t<p>Email : info@colorlib.com</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"single_footer_part\">
\t\t\t\t\t\t<h4>Important Link</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li><a href=\"\"> WHMCS-bridge</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Search Domain</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">My Account</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Shopping Cart</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Our Shop</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"single_footer_part\">
\t\t\t\t\t\t<h4>Newsletter</h4>
\t\t\t\t\t\t<p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days
\t\t\t\t\t\t\topen
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div id=\"mc_embed_signup\">
\t\t\t\t\t\t\t<form target=\"_blank\"
\t\t\t\t\t\t\t\taction=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
\t\t\t\t\t\t\t\tmethod=\"get\" class=\"subscribe_form relative mail_part\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"newsletter-form-email\" placeholder=\"Email Address\"
\t\t\t\t\t\t\t\t\tclass=\"placeholder hide-on-focus\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\t\tonblur=\"this.placeholder = ' Email Address '\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" id=\"newsletter-submit\"
\t\t\t\t\t\t\t\t\tclass=\"email_icon newsletter-submit button-contactForm\"><i
\t\t\t\t\t\t\t\t\t\tclass=\"far fa-paper-plane\"></i></button>
\t\t\t\t\t\t\t\t<div class=\"mt-10 info\"></div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"copyright_text\">
\t\t\t\t\t\t<P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"footer_icon social_icon\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"single_social_icon\"><i class=\"fas fa-globe\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-behance\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!--::footer_part end::-->

\t<!-- jquery plugins here-->
\t<!-- jquery -->
\t<script src=\"js/jquery-1.12.1.min.js\"></script>
\t<!-- popper js -->
\t<script src=\"js/popper.min.js\"></script>
\t<!-- bootstrap js -->
\t<script src=\"js/bootstrap.min.js\"></script>
\t<!-- easing js -->
\t<script src=\"js/jquery.magnific-popup.js\"></script>
\t<!-- swiper js -->
\t<script src=\"js/swiper.min.js\"></script>
\t<!-- swiper js -->
\t<script src=\"js/masonry.pkgd.js\"></script>
\t<!-- particles js -->
\t<script src=\"js/owl.carousel.min.js\"></script>
\t<script src=\"js/jquery.nice-select.min.js\"></script>
\t<!-- slick js -->
\t<script src=\"js/slick.min.js\"></script>
\t<script src=\"js/jquery.counterup.min.js\"></script>
\t<script src=\"js/waypoints.min.js\"></script>
\t<script src=\"js/contact.js\"></script>
\t<script src=\"js/jquery.ajaxchimp.min.js\"></script>
\t<script src=\"js/jquery.form.js\"></script>
\t<script src=\"js/jquery.validate.min.js\"></script>
\t<script src=\"js/mail-script.js\"></script>
\t<!-- custom js -->
\t<script src=\"js/custom.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/elements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  921 => 793,  650 => 525,  646 => 524,  639 => 520,  635 => 519,  628 => 515,  624 => 514,  617 => 510,  613 => 509,  606 => 505,  602 => 504,  595 => 500,  591 => 499,  584 => 495,  580 => 494,  573 => 490,  569 => 489,  550 => 473,  536 => 462,  522 => 451,  508 => 440,  494 => 429,  480 => 418,  466 => 407,  452 => 396,  374 => 321,  328 => 278,  84 => 37,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"zxx\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<title>aranoz</title>
\t<link rel=\"icon\" href=\"{{asset('assetsF/')}}/img/favicon.png\">
\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
\t<!-- animate CSS -->
\t<link rel=\"stylesheet\" href=\"css/animate.css\">
\t<!-- owl carousel CSS -->
\t<link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
\t<!-- font awesome CSS -->
\t<link rel=\"stylesheet\" href=\"css/all.css\">
\t<!-- flaticon CSS -->
\t<link rel=\"stylesheet\" href=\"css/flaticon.css\">
\t<link rel=\"stylesheet\" href=\"css/themify-icons.css\">
\t<link rel=\"stylesheet\" href=\"css/nice-select.css\">
\t<!-- font awesome CSS -->
\t<link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
\t<!-- swiper CSS -->
\t<link rel=\"stylesheet\" href=\"css/slick.css\">
\t<!-- style CSS -->
\t<link rel=\"stylesheet\" href=\"css/style.css\">
</head>

<body>
\t<!--::header part start::-->
\t<header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"{{asset('assetsF/')}}/img/logo.png\" alt=\"logo\"> </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"menu_icon\"><i class=\"fas fa-bars\"></i></span>
                        </button>

                        <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"index.html\">Home</a>
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
                                        <a class=\"dropdown-item\" href=\"blog.html\"> blog</a>
                                        <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                    </div>
                                </li>
                                
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"hearer_icon d-flex\">
                            <a id=\"search_1\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                            <a href=\"\"><i class=\"ti-heart\"></i></a>
                            <div class=\"dropdown cart\">
                                <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdown3\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"fas fa-cart-plus\"></i>
                                </a>
                                <!-- <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <div class=\"single_product\">
    
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                    </nav>
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
\t<!-- Header part end-->


\t<!-- breadcrumb start-->
\t<section class=\"breadcrumb breadcrumb_bg\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"breadcrumb_iner text-center\">
\t\t\t\t\t\t<div class=\"breadcrumb_iner_item\">
\t\t\t\t\t\t\t<h2>elements</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- breadcrumb start-->

\t<!-- Start Sample Area -->
\t<section class=\"sample-text-area\">
\t\t<div class=\"container box_1170\">
\t\t\t<h3 class=\"text-heading\">Text Sample</h3>
\t\t\t<p class=\"sample-text\">
\t\t\t\tEvery avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary,
\t\t\t\tor short
\t\t\t\tfilm to show off their creative prowess. Many have great ideas and want to “wow”
\t\t\t\tthe<sup>Superscript</sup> scene,
\t\t\t\tor video renters with their big project. But once you have the<sub>Subscript</sub> “in the can” (no easy
\t\t\t\tfeat), how
\t\t\t\tdo you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked
\t\t\t\thand-written title
\t\t\t\tinside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC
\t\t\t\tbarcodes
\t\t\t\tand polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project
\t\t\t\treplicated.
\t\t\t\tUsing a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is
\t\t\t\tcertainly a
\t\t\t\thelpful option to ensure a professional end result, but to help with your DVD replication project, here
\t\t\t\tare 4 easy
\t\t\t\tsteps to follow for good DVD replication results:

\t\t\t</p>
\t\t</div>
\t</section>
\t<!-- End Sample Area -->

\t<!-- Start Button -->
\t<section class=\"button-area\">
\t\t<div class=\"container box_1170 border-top-generic\">
\t\t\t<h3 class=\"text-heading\">Sample Buttons</h3>
\t\t\t<div class=\"button-group-area\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default-border\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info-border\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning-border\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger-border\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link-border\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-40\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default radius\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary radius\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success radius\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info radius\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning radius\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger radius\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link radius\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable radius\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default-border radius\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border radius\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border radius\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info-border radius\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning-border radius\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger-border radius\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link-border radius\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable radius\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-40\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default circle\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary circle\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success circle\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info circle\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning circle\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger circle\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link circle\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable circle\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default-border circle\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border circle\">Primary</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border circle\">Success</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info-border circle\">Info</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning-border circle\">Warning</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger-border circle\">Danger</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn link-border circle\">Link</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn disable circle\">Disable</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-40\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default circle arrow\">Default<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary circle arrow\">Primary<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success circle arrow\">Success<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info circle arrow\">Info<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning circle arrow\">Warning<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger circle arrow\">Danger<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn default-border circle arrow\">Default<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border circle arrow\">Primary<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border circle arrow\">Success<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn info-border circle arrow\">Info<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn warning-border circle arrow\">Warning<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t<a href=\"#\" class=\"genric-btn danger-border circle arrow\">Danger<span
\t\t\t\t\t\tclass=\"lnr lnr-arrow-right\"></span></a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-40\">
\t\t\t\t<a href=\"#\" class=\"genric-btn primary e-large\">Extra Large</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success large\">Large</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success medium\">Medium</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary small\">Small</a>
\t\t\t</div>
\t\t\t<div class=\"button-group-area mt-10\">
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border e-large\">Extra Large</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border large\">Large</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border\">Default</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn success-border medium\">Medium</a>
\t\t\t\t<a href=\"#\" class=\"genric-btn primary-border small\">Small</a>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Button -->

\t<!-- Start Align Area -->
\t<div class=\"whole-wrap\">
\t\t<div class=\"container box_1170\">
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Left Aligned</h3>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"{{asset('assetsF/')}}/img/elements/d.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9 mt-sm-20\">
\t\t\t\t\t\t<p>Recently, the US Federal government banned online casinos from operating in America by making
\t\t\t\t\t\t\tit illegal to
\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law, most
\t\t\t\t\t\t\tof the popular
\t\t\t\t\t\t\tonline casino networks such as Party Gaming and PlayTech left the United States. Overnight,
\t\t\t\t\t\t\tonline casino
\t\t\t\t\t\t\tplayers found themselves being chased by the Federal government. But, after a fortnight, the
\t\t\t\t\t\t\tonline casino
\t\t\t\t\t\t\tindustry came up with a solution and new online casinos started taking root. These began to
\t\t\t\t\t\t\toperate under a
\t\t\t\t\t\t\tdifferent business umbrella, and by doing that, rendered the transfer of money to and from
\t\t\t\t\t\t\tthem legal. A major
\t\t\t\t\t\t\tpart of this was enlisting electronic banking systems that would accept this new
\t\t\t\t\t\t\tclarification and start doing
\t\t\t\t\t\t\tbusiness with me. Listed in this article are the electronic banking systems that accept
\t\t\t\t\t\t\tplayers from the United
\t\t\t\t\t\t\tStates that wish to play in online casinos.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border text-right\">
\t\t\t\t<h3 class=\"mb-30\">Right Aligned</h3>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<p class=\"text-right\">Over time, even the most sophisticated, memory packed computer can begin
\t\t\t\t\t\t\tto run slow if we
\t\t\t\t\t\t\tdon’t do something to prevent it. The reason why has less to do with how computers are made
\t\t\t\t\t\t\tand how they age and
\t\t\t\t\t\t\tmore to do with the way we use them. You see, all of the daily tasks that we do on our PC
\t\t\t\t\t\t\tfrom running programs
\t\t\t\t\t\t\tto downloading and deleting software can make our computer sluggish. To keep this from
\t\t\t\t\t\t\thappening, you need to
\t\t\t\t\t\t\tunderstand the reasons why your PC is getting slower and do something to keep your PC
\t\t\t\t\t\t\trunning at its best. You
\t\t\t\t\t\t\tcan do this through regular maintenance and PC performance optimization programs</p>
\t\t\t\t\t\t<p class=\"text-right\">Before we discuss all of the things that could be affecting your PC’s
\t\t\t\t\t\t\tperformance, let’s
\t\t\t\t\t\t\ttalk a little about what symptoms</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<img src=\"{{asset('assetsF/')}}/img/elements/d.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Definition</h3>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"single-defination\">
\t\t\t\t\t\t\t<h4 class=\"mb-20\">Definition 01</h4>
\t\t\t\t\t\t\t<p>Recently, the US Federal government banned online casinos from operating in America by
\t\t\t\t\t\t\t\tmaking it illegal to
\t\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law,
\t\t\t\t\t\t\t\tmost of the popular
\t\t\t\t\t\t\t\tonline casino networks</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"single-defination\">
\t\t\t\t\t\t\t<h4 class=\"mb-20\">Definition 02</h4>
\t\t\t\t\t\t\t<p>Recently, the US Federal government banned online casinos from operating in America by
\t\t\t\t\t\t\t\tmaking it illegal to
\t\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law,
\t\t\t\t\t\t\t\tmost of the popular
\t\t\t\t\t\t\t\tonline casino networks</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"single-defination\">
\t\t\t\t\t\t\t<h4 class=\"mb-20\">Definition 03</h4>
\t\t\t\t\t\t\t<p>Recently, the US Federal government banned online casinos from operating in America by
\t\t\t\t\t\t\t\tmaking it illegal to
\t\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law,
\t\t\t\t\t\t\t\tmost of the popular
\t\t\t\t\t\t\t\tonline casino networks</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Block Quotes</h3>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<blockquote class=\"generic-blockquote\">
\t\t\t\t\t\t\t“Recently, the US Federal government banned online casinos from operating in America by
\t\t\t\t\t\t\tmaking it illegal to
\t\t\t\t\t\t\ttransfer money to them through any US bank or payment system. As a result of this law, most
\t\t\t\t\t\t\tof the popular
\t\t\t\t\t\t\tonline casino networks such as Party Gaming and PlayTech left the United States. Overnight,
\t\t\t\t\t\t\tonline casino
\t\t\t\t\t\t\tplayers found themselves being chased by the Federal government. But, after a fortnight, the
\t\t\t\t\t\t\tonline casino
\t\t\t\t\t\t\tindustry came up with a solution and new online casinos started taking root. These began to
\t\t\t\t\t\t\toperate under a
\t\t\t\t\t\t\tdifferent business umbrella, and by doing that, rendered the transfer of money to and from
\t\t\t\t\t\t\tthem legal. A major
\t\t\t\t\t\t\tpart of this was enlisting electronic banking systems that would accept this new
\t\t\t\t\t\t\tclarification and start doing
\t\t\t\t\t\t\tbusiness with me. Listed in this article are the electronic banking”
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3 class=\"mb-30\">Table</h3>
\t\t\t\t<div class=\"progress-table-wrap\">
\t\t\t\t\t<div class=\"progress-table\">
\t\t\t\t\t\t<div class=\"table-head\">
\t\t\t\t\t\t\t<div class=\"serial\">#</div>
\t\t\t\t\t\t\t<div class=\"country\">Countries</div>
\t\t\t\t\t\t\t<div class=\"visit\">Visits</div>
\t\t\t\t\t\t\t<div class=\"percentage\">Percentages</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">01</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"{{asset('assetsF/')}}/img/elements/f1.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-1\" role=\"progressbar\" style=\"width: 80%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">02</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"{{asset('assetsF/')}}/img/elements/f2.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-2\" role=\"progressbar\" style=\"width: 30%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">03</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"{{asset('assetsF/')}}/img/elements/f3.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-3\" role=\"progressbar\" style=\"width: 55%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">04</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"{{asset('assetsF/')}}/img/elements/f4.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-4\" role=\"progressbar\" style=\"width: 60%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">05</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"{{asset('assetsF/')}}/img/elements/f5.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-5\" role=\"progressbar\" style=\"width: 40%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">06</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"{{asset('assetsF/')}}/img/elements/f6.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-6\" role=\"progressbar\" style=\"width: 70%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">07</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"{{asset('assetsF/')}}/img/elements/f7.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-7\" role=\"progressbar\" style=\"width: 30%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-row\">
\t\t\t\t\t\t\t<div class=\"serial\">08</div>
\t\t\t\t\t\t\t<div class=\"country\"> <img src=\"{{asset('assetsF/')}}/img/elements/f8.jpg\" alt=\"flag\">Canada</div>
\t\t\t\t\t\t\t<div class=\"visit\">645032</div>
\t\t\t\t\t\t\t<div class=\"percentage\">
\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar color-8\" role=\"progressbar\" style=\"width: 60%\"
\t\t\t\t\t\t\t\t\t\taria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"section-top-border\">
\t\t\t\t<h3>Image Gallery</h3>
\t\t\t\t<div class=\"row gallery-item\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"{{asset('assetsF/')}}/img/elements/g1.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url({{asset('assetsF/')}}/img/elements/g1.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"{{asset('assetsF/')}}/img/elements/g2.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url({{asset('assetsF/')}}/img/elements/g2.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"{{asset('assetsF/')}}/img/elements/g3.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url({{asset('assetsF/')}}/img/elements/g3.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<a href=\"{{asset('assetsF/')}}/img/elements/g4.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url({{asset('assetsF/')}}/img/elements/g4.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<a href=\"{{asset('assetsF/')}}/img/elements/g5.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url({{asset('assetsF/')}}/img/elements/g5.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"{{asset('assetsF/')}}/img/elements/g6.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url({{asset('assetsF/')}}/img/elements/g6.jpg);\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"{{asset('assetsF/')}}/img/elements/g7.jpg\" class=\"img-pop-up img-gal\"\">
\t\t\t\t\t\t\t<div class=\" single-gallery-image\" style=\"background: url({{asset('assetsF/')}}/img/elements/g7.jpg);\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"{{asset('assetsF/')}}/img/elements/g8.jpg\" class=\"img-pop-up img-gal\">
\t\t\t\t\t\t<div class=\"single-gallery-image\" style=\"background: url({{asset('assetsF/')}}/img/elements/g8.jpg);\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"section-top-border\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<h3 class=\"mb-20\">Image Gallery</h3>
\t\t\t\t\t<div class=\"typography\">
\t\t\t\t\t\t<h1>This is header 01</h1>
\t\t\t\t\t\t<h2>This is header 02</h2>
\t\t\t\t\t\t<h3>This is header 03</h3>
\t\t\t\t\t\t<h4>This is header 04</h4>
\t\t\t\t\t\t<h5>This is header 01</h5>
\t\t\t\t\t\t<h6>This is header 01</h6>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 mt-sm-30\">
\t\t\t\t\t<h3 class=\"mb-20\">Unordered List</h3>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<ul class=\"unordered-list\">
\t\t\t\t\t\t\t<li>Fta Keys</li>
\t\t\t\t\t\t\t<li>For Women Only Your Computer Usage</li>
\t\t\t\t\t\t\t<li>Facts Why Inkjet Printing Is Very Appealing
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Addiction When Gambling Becomes
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>Protective Preventative Maintenance</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>Dealing With Technical Support 10 Useful Tips</li>
\t\t\t\t\t\t\t<li>Make Myspace Your Best Designed Space</li>
\t\t\t\t\t\t\t<li>Cleaning And Organizing Your Computer</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 mt-sm-30\">
\t\t\t\t\t<h3 class=\"mb-20\">Ordered List</h3>
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<ol class=\"ordered-list\">
\t\t\t\t\t\t\t<li><span>Fta Keys</span></li>
\t\t\t\t\t\t\t<li><span>For Women Only Your Computer Usage</span></li>
\t\t\t\t\t\t\t<li><span>Facts Why Inkjet Printing Is Very Appealing</span>
\t\t\t\t\t\t\t\t<ol class=\"ordered-list-alpha\">
\t\t\t\t\t\t\t\t\t<li><span>Addiction When Gambling Becomes</span>
\t\t\t\t\t\t\t\t\t\t<ol class=\"ordered-list-roman\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>Protective Preventative Maintenance</span></li>
\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><span>Dealing With Technical Support 10 Useful Tips</span></li>
\t\t\t\t\t\t\t<li><span>Make Myspace Your Best Designed Space</span></li>
\t\t\t\t\t\t\t<li><span>Cleaning And Organizing Your Computer</span></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"section-top-border\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t<h3 class=\"mb-30\">Form Element</h3>
\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"First Name\"
\t\t\t\t\t\t\t\tonfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'First Name'\" required
\t\t\t\t\t\t\t\tclass=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" placeholder=\"Last Name\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Last Name'\" required class=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" placeholder=\"Last Name\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Last Name'\" required class=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"EMAIL\" placeholder=\"Email address\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Email address'\" required class=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group-icon mt-10\">
\t\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-thumb-tack\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t\t<input type=\"text\" name=\"address\" placeholder=\"Address\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Address'\" required class=\"single-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group-icon mt-10\">
\t\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-plane\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t\t<div class=\"form-select\" id=\"default-select\">
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option value=\" 1\">City</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Dhaka</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Dilli</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Newyork</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Islamabad</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-group-icon mt-10\">
\t\t\t\t\t\t\t<div class=\"icon\"><i class=\"fa fa-globe\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t\t<div class=\"form-select\" id=\"default-select_1\">
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option value=\" 1\">Country</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Bangladesh</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">India</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">England</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Srilanka</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<textarea class=\"single-textarea\" placeholder=\"Message\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\tonblur=\"this.placeholder = 'Message'\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- For Gradient Border Use -->
\t\t\t\t\t\t<!-- <div class=\"mt-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"primary-input\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"primary-input\" type=\"text\" name=\"first_name\" placeholder=\"Primary color\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Primary color'\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"primary-input\"></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"Primary color\"
\t\t\t\t\t\t\t\tonfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Primary color'\" required
\t\t\t\t\t\t\t\tclass=\"single-input-primary\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"Accent color\"
\t\t\t\t\t\t\t\tonfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Accent color'\" required
\t\t\t\t\t\t\t\tclass=\"single-input-accent\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"Secondary color\"
\t\t\t\t\t\t\t\tonfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Secondary color'\" required
\t\t\t\t\t\t\t\tclass=\"single-input-secondary\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-4 mt-sm-30\">
\t\t\t\t\t<div class=\"single-element-widget\">
\t\t\t\t\t\t<h3 class=\"mb-30\">Switches</h3>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>01. Sample Switch</p>
\t\t\t\t\t\t\t<div class=\"primary-switch\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"default-switch\">
\t\t\t\t\t\t\t\t<label for=\"default-switch\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>02. Primary Color Switch</p>
\t\t\t\t\t\t\t<div class=\"primary-switch\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"primary-switch\" checked>
\t\t\t\t\t\t\t\t<label for=\"primary-switch\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>03. Confirm Color Switch</p>
\t\t\t\t\t\t\t<div class=\"confirm-switch\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"confirm-switch\" checked>
\t\t\t\t\t\t\t\t<label for=\"confirm-switch\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-element-widget mt-30\">
\t\t\t\t\t\t<h3 class=\"mb-30\">Selectboxes</h3>
\t\t\t\t\t\t<div class=\"default-select\" id=\"default-select_2\">
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option value=\" 1\">English</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Spanish</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Arabic</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Portuguise</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Bengali</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-element-widget mt-30\">
\t\t\t\t\t\t<h3 class=\"mb-30\">Checkboxes</h3>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>01. Sample Checkbox</p>
\t\t\t\t\t\t\t<div class=\"primary-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"default-checkbox\">
\t\t\t\t\t\t\t\t<label for=\"default-checkbox\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>02. Primary Color Checkbox</p>
\t\t\t\t\t\t\t<div class=\"primary-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"primary-checkbox\" checked>
\t\t\t\t\t\t\t\t<label for=\"primary-checkbox\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>03. Confirm Color Checkbox</p>
\t\t\t\t\t\t\t<div class=\"confirm-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"confirm-checkbox\">
\t\t\t\t\t\t\t\t<label for=\"confirm-checkbox\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>04. Disabled Checkbox</p>
\t\t\t\t\t\t\t<div class=\"disabled-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"disabled-checkbox\" disabled>
\t\t\t\t\t\t\t\t<label for=\"disabled-checkbox\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>05. Disabled Checkbox active</p>
\t\t\t\t\t\t\t<div class=\"disabled-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"disabled-checkbox-active\" checked disabled>
\t\t\t\t\t\t\t\t<label for=\"disabled-checkbox-active\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-element-widget mt-30\">
\t\t\t\t\t\t<h3 class=\"mb-30\">Radios</h3>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>01. Sample radio</p>
\t\t\t\t\t\t\t<div class=\"primary-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"default-radio\">
\t\t\t\t\t\t\t\t<label for=\"default-radio\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>02. Primary Color radio</p>
\t\t\t\t\t\t\t<div class=\"primary-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"primary-radio\" checked>
\t\t\t\t\t\t\t\t<label for=\"primary-radio\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>03. Confirm Color radio</p>
\t\t\t\t\t\t\t<div class=\"confirm-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"confirm-radio\" checked>
\t\t\t\t\t\t\t\t<label for=\"confirm-radio\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>04. Disabled radio</p>
\t\t\t\t\t\t\t<div class=\"disabled-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"disabled-radio\" disabled>
\t\t\t\t\t\t\t\t<label for=\"disabled-radio\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"switch-wrap d-flex justify-content-between\">
\t\t\t\t\t\t\t<p>05. Disabled radio active</p>
\t\t\t\t\t\t\t<div class=\"disabled-radio\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"disabled-radio-active\" checked disabled>
\t\t\t\t\t\t\t\t<label for=\"disabled-radio-active\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
\t<!-- End Align Area -->

\t<!--::footer_part start::-->
\t<footer class=\"footer_part\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"single_footer_part\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"footer_logo_iner\"> <img src=\"{{asset('assetsF/')}}/img/footer_logo.png\" alt=\"#\"> </a>
\t\t\t\t\t\t<h4>About Us</h4>
\t\t\t\t\t\t<p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"single_footer_part\">
\t\t\t\t\t\t<h4>Contact Info</h4>
\t\t\t\t\t\t<p>Address : Your address goes
\t\t\t\t\t\t\there, your demo address.
\t\t\t\t\t\t\tBsngladesh.</p>
\t\t\t\t\t\t<p>Phone : +8880 44338899</p>
\t\t\t\t\t\t<p>Email : info@colorlib.com</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"single_footer_part\">
\t\t\t\t\t\t<h4>Important Link</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li><a href=\"\"> WHMCS-bridge</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Search Domain</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">My Account</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Shopping Cart</a></li>
\t\t\t\t\t\t\t<li><a href=\"\">Our Shop</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"single_footer_part\">
\t\t\t\t\t\t<h4>Newsletter</h4>
\t\t\t\t\t\t<p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days
\t\t\t\t\t\t\topen
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div id=\"mc_embed_signup\">
\t\t\t\t\t\t\t<form target=\"_blank\"
\t\t\t\t\t\t\t\taction=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
\t\t\t\t\t\t\t\tmethod=\"get\" class=\"subscribe_form relative mail_part\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"newsletter-form-email\" placeholder=\"Email Address\"
\t\t\t\t\t\t\t\t\tclass=\"placeholder hide-on-focus\" onfocus=\"this.placeholder = ''\"
\t\t\t\t\t\t\t\t\tonblur=\"this.placeholder = ' Email Address '\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" id=\"newsletter-submit\"
\t\t\t\t\t\t\t\t\tclass=\"email_icon newsletter-submit button-contactForm\"><i
\t\t\t\t\t\t\t\t\t\tclass=\"far fa-paper-plane\"></i></button>
\t\t\t\t\t\t\t\t<div class=\"mt-10 info\"></div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"copyright_text\">
\t\t\t\t\t\t<P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"footer_icon social_icon\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"single_social_icon\"><i class=\"fas fa-globe\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-behance\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!--::footer_part end::-->

\t<!-- jquery plugins here-->
\t<!-- jquery -->
\t<script src=\"js/jquery-1.12.1.min.js\"></script>
\t<!-- popper js -->
\t<script src=\"js/popper.min.js\"></script>
\t<!-- bootstrap js -->
\t<script src=\"js/bootstrap.min.js\"></script>
\t<!-- easing js -->
\t<script src=\"js/jquery.magnific-popup.js\"></script>
\t<!-- swiper js -->
\t<script src=\"js/swiper.min.js\"></script>
\t<!-- swiper js -->
\t<script src=\"js/masonry.pkgd.js\"></script>
\t<!-- particles js -->
\t<script src=\"js/owl.carousel.min.js\"></script>
\t<script src=\"js/jquery.nice-select.min.js\"></script>
\t<!-- slick js -->
\t<script src=\"js/slick.min.js\"></script>
\t<script src=\"js/jquery.counterup.min.js\"></script>
\t<script src=\"js/waypoints.min.js\"></script>
\t<script src=\"js/contact.js\"></script>
\t<script src=\"js/jquery.ajaxchimp.min.js\"></script>
\t<script src=\"js/jquery.form.js\"></script>
\t<script src=\"js/jquery.validate.min.js\"></script>
\t<script src=\"js/mail-script.js\"></script>
\t<!-- custom js -->
\t<script src=\"js/custom.js\"></script>
</body>

</html>", "frontoffice/elements.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\frontoffice\\elements.html.twig");
    }
}
