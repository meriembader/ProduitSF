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

/* frontoffice/blog.html.twig */
class __TwigTemplate_ced97353ec5d196b5494dda05f47d963d5db68e6a75467e45dc1313e6f88024e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/blog.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>aranoz</title>
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/favicon.png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"css/animate.css\">
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"css/all.css\">
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/themify-icons.css\">
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
    <!-- swiper CSS -->
    <link rel=\"stylesheet\" href=\"css/slick.css\">
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"css/style.css\">
</head>

<body>
    <!--::header part start::-->
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"";
        // line 36
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
    <!-- Header part end-->

    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class=\"breadcrumb breadcrumb_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"breadcrumb_iner\">
                        <div class=\"breadcrumb_iner_item\">
                            <h2>Shop Single</h2>
                            <p>Home <span>-</span> Shop Single</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class=\"blog_area padding_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-5 mb-lg-0\">
                    <div class=\"blog_left_sidebar\">
                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/blog/single_blog_1.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/blog/single_blog_2.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/blog/single_blog_3.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/blog/single_blog_4.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/blog/single_blog_5.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <nav class=\"blog-pagination justify-content-center d-flex\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\" aria-label=\"Previous\">
                                        <i class=\"ti-angle-left\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">1</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a href=\"#\" class=\"page-link\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\" aria-label=\"Next\">
                                        <i class=\"ti-angle-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                            onfocus=\"this.placeholder = ''\"
                                            onblur=\"this.placeholder = 'Search Keyword'\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn\" type=\"button\"><i class=\"ti-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1\"
                                    type=\"submit\">Search</button>
                            </form>
                        </aside>

                        <aside class=\"single_sidebar_widget post_category_widget\">
                            <h4 class=\"widget_title\">Category</h4>
                            <ul class=\"list cat-list\">
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Inspiration</p>
                                        <p>21</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Health Care (21)</p>
                                        <p>09</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class=\"single_sidebar_widget popular_post_widget\">
                            <h3 class=\"widget_title\">Recent Post</h3>
                            <div class=\"media post_item\">
                                <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_1.png\" alt=\"post\">
                                <div class=\"media-body\">
                                    <a href=\"single-blog.html\">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class=\"media post_item\">
                                <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_2.png\" alt=\"post\">
                                <div class=\"media-body\">
                                    <a href=\"single-blog.html\">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class=\"media post_item\">
                                <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_3.png\" alt=\"post\">
                                <div class=\"media-body\">
                                    <a href=\"single-blog.html\">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class=\"media post_item\">
                                <img src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_4.png\" alt=\"post\">
                                <div class=\"media-body\">
                                    <a href=\"single-blog.html\">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        </aside>
                        <aside class=\"single_sidebar_widget tag_cloud_widget\">
                            <h4 class=\"widget_title\">Tag Clouds</h4>
                            <ul class=\"list\">
                                <li>
                                    <a href=\"#\">project</a>
                                </li>
                                <li>
                                    <a href=\"#\">love</a>
                                </li>
                                <li>
                                    <a href=\"#\">technology</a>
                                </li>
                                <li>
                                    <a href=\"#\">travel</a>
                                </li>
                                <li>
                                    <a href=\"#\">restaurant</a>
                                </li>
                                <li>
                                    <a href=\"#\">life style</a>
                                </li>
                                <li>
                                    <a href=\"#\">design</a>
                                </li>
                                <li>
                                    <a href=\"#\">illustration</a>
                                </li>
                            </ul>
                        </aside>


                        <aside class=\"single_sidebar_widget instagram_feeds\">
                            <h4 class=\"widget_title\">Instagram Feeds</h4>
                            <ul class=\"instagram_row flex-wrap\">
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_5.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_6.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_7.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_8.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_9.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/post/post_10.png\" alt=\"\">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class=\"single_sidebar_widget newsletter_widget\">
                            <h4 class=\"widget_title\">Newsletter</h4>

                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" onfocus=\"this.placeholder = ''\"
                                        onblur=\"this.placeholder = 'Enter email'\" placeholder='Enter email' required>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1\"
                                    type=\"submit\">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--::footer_part start::-->
    <footer class=\"footer_part\">
        <div class=\"container\">
            <div class=\"row justify-content-around\">
                <div class=\"col-sm-6 col-lg-2\">
                    <div class=\"single_footer_part\">
                        <h4>Top Products</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Managed Website</a></li>
                            <li><a href=\"\">Manage Reputation</a></li>
                            <li><a href=\"\">Power Tools</a></li>
                            <li><a href=\"\">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-2\">
                    <div class=\"single_footer_part\">
                        <h4>Quick Links</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Jobs</a></li>
                            <li><a href=\"\">Brand Assets</a></li>
                            <li><a href=\"\">Investor Relations</a></li>
                            <li><a href=\"\">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-2\">
                    <div class=\"single_footer_part\">
                        <h4>Features</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Jobs</a></li>
                            <li><a href=\"\">Brand Assets</a></li>
                            <li><a href=\"\">Investor Relations</a></li>
                            <li><a href=\"\">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-2\">
                    <div class=\"single_footer_part\">
                        <h4>Resources</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Guides</a></li>
                            <li><a href=\"\">Research</a></li>
                            <li><a href=\"\">Experts</a></li>
                            <li><a href=\"\">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"single_footer_part\">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div id=\"mc_embed_signup\">
                            <form target=\"_blank\"
                                action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                method=\"get\" class=\"subscribe_form relative mail_part\">
                                <input type=\"email\" name=\"email\" id=\"newsletter-form-email\" placeholder=\"Email Address\"
                                    class=\"placeholder hide-on-focus\" onfocus=\"this.placeholder = ''\"
                                    onblur=\"this.placeholder = ' Email Address '\">
                                <button type=\"submit\" name=\"submit\" id=\"newsletter-submit\"
                                    class=\"email_icon newsletter-submit button-contactForm\">subscribe</button>
                                <div class=\"mt-10 info\"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"copyright_part\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <div class=\"copyright_text\">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"footer_icon social_icon\">
                            <ul class=\"list-unstyled\">
                                <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-twitter\"></i></a></li>
                                <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fas fa-globe\"></i></a></li>
                                <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src=\"js/jquery-1.12.1.min.js\"></script>
    <!-- popper js -->
    <script src=\"js/popper.min.js\"></script>
    <!-- bootstrap js -->
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- easing js -->
    <script src=\"js/jquery.magnific-popup.js\"></script>
    <!-- swiper js -->
    <script src=\"js/swiper.min.js\"></script>
    <!-- swiper js -->
    <script src=\"js/masonry.pkgd.js\"></script>
    <!-- particles js -->
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/jquery.nice-select.min.js\"></script>
    <!-- slick js -->
    <script src=\"js/slick.min.js\"></script>
    <script src=\"js/jquery.counterup.min.js\"></script>
    <script src=\"js/waypoints.min.js\"></script>
    <script src=\"js/contact.js\"></script>
    <script src=\"js/jquery.ajaxchimp.min.js\"></script>
    <script src=\"js/jquery.form.js\"></script>
    <script src=\"js/jquery.validate.min.js\"></script>
    <script src=\"js/mail-script.js\"></script>
    <!-- custom js -->
    <script src=\"js/custom.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 438,  522 => 433,  514 => 428,  506 => 423,  498 => 418,  490 => 413,  442 => 368,  430 => 359,  418 => 350,  406 => 341,  297 => 235,  272 => 213,  247 => 191,  222 => 169,  197 => 147,  83 => 36,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>aranoz</title>
    <link rel=\"icon\" href=\"{{asset('assetsF/')}}/img/favicon.png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"css/animate.css\">
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"css/all.css\">
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/themify-icons.css\">
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
    <!-- swiper CSS -->
    <link rel=\"stylesheet\" href=\"css/slick.css\">
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"css/style.css\">
</head>

<body>
    <!--::header part start::-->
    <header class=\"main_menu home_menu\">
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
    <!-- Header part end-->

    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class=\"breadcrumb breadcrumb_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"breadcrumb_iner\">
                        <div class=\"breadcrumb_iner_item\">
                            <h2>Shop Single</h2>
                            <p>Home <span>-</span> Shop Single</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class=\"blog_area padding_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-5 mb-lg-0\">
                    <div class=\"blog_left_sidebar\">
                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"{{asset('assetsF/')}}/img/blog/single_blog_1.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"{{asset('assetsF/')}}/img/blog/single_blog_2.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"{{asset('assetsF/')}}/img/blog/single_blog_3.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"{{asset('assetsF/')}}/img/blog/single_blog_4.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"{{asset('assetsF/')}}/img/blog/single_blog_5.png\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"far fa-user\"></i> Travel, Lifestyle</a></li>
                                    <li><a href=\"#\"><i class=\"far fa-comments\"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <nav class=\"blog-pagination justify-content-center d-flex\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\" aria-label=\"Previous\">
                                        <i class=\"ti-angle-left\"></i>
                                    </a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">1</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a href=\"#\" class=\"page-link\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\" aria-label=\"Next\">
                                        <i class=\"ti-angle-right\"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                            onfocus=\"this.placeholder = ''\"
                                            onblur=\"this.placeholder = 'Search Keyword'\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn\" type=\"button\"><i class=\"ti-search\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1\"
                                    type=\"submit\">Search</button>
                            </form>
                        </aside>

                        <aside class=\"single_sidebar_widget post_category_widget\">
                            <h4 class=\"widget_title\">Category</h4>
                            <ul class=\"list cat-list\">
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Inspiration</p>
                                        <p>21</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Health Care (21)</p>
                                        <p>09</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class=\"single_sidebar_widget popular_post_widget\">
                            <h3 class=\"widget_title\">Recent Post</h3>
                            <div class=\"media post_item\">
                                <img src=\"{{asset('assetsF/')}}/img/post/post_1.png\" alt=\"post\">
                                <div class=\"media-body\">
                                    <a href=\"single-blog.html\">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class=\"media post_item\">
                                <img src=\"{{asset('assetsF/')}}/img/post/post_2.png\" alt=\"post\">
                                <div class=\"media-body\">
                                    <a href=\"single-blog.html\">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class=\"media post_item\">
                                <img src=\"{{asset('assetsF/')}}/img/post/post_3.png\" alt=\"post\">
                                <div class=\"media-body\">
                                    <a href=\"single-blog.html\">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class=\"media post_item\">
                                <img src=\"{{asset('assetsF/')}}/img/post/post_4.png\" alt=\"post\">
                                <div class=\"media-body\">
                                    <a href=\"single-blog.html\">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        </aside>
                        <aside class=\"single_sidebar_widget tag_cloud_widget\">
                            <h4 class=\"widget_title\">Tag Clouds</h4>
                            <ul class=\"list\">
                                <li>
                                    <a href=\"#\">project</a>
                                </li>
                                <li>
                                    <a href=\"#\">love</a>
                                </li>
                                <li>
                                    <a href=\"#\">technology</a>
                                </li>
                                <li>
                                    <a href=\"#\">travel</a>
                                </li>
                                <li>
                                    <a href=\"#\">restaurant</a>
                                </li>
                                <li>
                                    <a href=\"#\">life style</a>
                                </li>
                                <li>
                                    <a href=\"#\">design</a>
                                </li>
                                <li>
                                    <a href=\"#\">illustration</a>
                                </li>
                            </ul>
                        </aside>


                        <aside class=\"single_sidebar_widget instagram_feeds\">
                            <h4 class=\"widget_title\">Instagram Feeds</h4>
                            <ul class=\"instagram_row flex-wrap\">
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"{{asset('assetsF/')}}/img/post/post_5.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"{{asset('assetsF/')}}/img/post/post_6.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"{{asset('assetsF/')}}/img/post/post_7.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"{{asset('assetsF/')}}/img/post/post_8.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"{{asset('assetsF/')}}/img/post/post_9.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"{{asset('assetsF/')}}/img/post/post_10.png\" alt=\"\">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class=\"single_sidebar_widget newsletter_widget\">
                            <h4 class=\"widget_title\">Newsletter</h4>

                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" onfocus=\"this.placeholder = ''\"
                                        onblur=\"this.placeholder = 'Enter email'\" placeholder='Enter email' required>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1\"
                                    type=\"submit\">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--::footer_part start::-->
    <footer class=\"footer_part\">
        <div class=\"container\">
            <div class=\"row justify-content-around\">
                <div class=\"col-sm-6 col-lg-2\">
                    <div class=\"single_footer_part\">
                        <h4>Top Products</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Managed Website</a></li>
                            <li><a href=\"\">Manage Reputation</a></li>
                            <li><a href=\"\">Power Tools</a></li>
                            <li><a href=\"\">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-2\">
                    <div class=\"single_footer_part\">
                        <h4>Quick Links</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Jobs</a></li>
                            <li><a href=\"\">Brand Assets</a></li>
                            <li><a href=\"\">Investor Relations</a></li>
                            <li><a href=\"\">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-2\">
                    <div class=\"single_footer_part\">
                        <h4>Features</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Jobs</a></li>
                            <li><a href=\"\">Brand Assets</a></li>
                            <li><a href=\"\">Investor Relations</a></li>
                            <li><a href=\"\">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-2\">
                    <div class=\"single_footer_part\">
                        <h4>Resources</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"\">Guides</a></li>
                            <li><a href=\"\">Research</a></li>
                            <li><a href=\"\">Experts</a></li>
                            <li><a href=\"\">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-4\">
                    <div class=\"single_footer_part\">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div id=\"mc_embed_signup\">
                            <form target=\"_blank\"
                                action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                method=\"get\" class=\"subscribe_form relative mail_part\">
                                <input type=\"email\" name=\"email\" id=\"newsletter-form-email\" placeholder=\"Email Address\"
                                    class=\"placeholder hide-on-focus\" onfocus=\"this.placeholder = ''\"
                                    onblur=\"this.placeholder = ' Email Address '\">
                                <button type=\"submit\" name=\"submit\" id=\"newsletter-submit\"
                                    class=\"email_icon newsletter-submit button-contactForm\">subscribe</button>
                                <div class=\"mt-10 info\"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"copyright_part\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <div class=\"copyright_text\">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"footer_icon social_icon\">
                            <ul class=\"list-unstyled\">
                                <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-twitter\"></i></a></li>
                                <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fas fa-globe\"></i></a></li>
                                <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src=\"js/jquery-1.12.1.min.js\"></script>
    <!-- popper js -->
    <script src=\"js/popper.min.js\"></script>
    <!-- bootstrap js -->
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- easing js -->
    <script src=\"js/jquery.magnific-popup.js\"></script>
    <!-- swiper js -->
    <script src=\"js/swiper.min.js\"></script>
    <!-- swiper js -->
    <script src=\"js/masonry.pkgd.js\"></script>
    <!-- particles js -->
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/jquery.nice-select.min.js\"></script>
    <!-- slick js -->
    <script src=\"js/slick.min.js\"></script>
    <script src=\"js/jquery.counterup.min.js\"></script>
    <script src=\"js/waypoints.min.js\"></script>
    <script src=\"js/contact.js\"></script>
    <script src=\"js/jquery.ajaxchimp.min.js\"></script>
    <script src=\"js/jquery.form.js\"></script>
    <script src=\"js/jquery.validate.min.js\"></script>
    <script src=\"js/mail-script.js\"></script>
    <!-- custom js -->
    <script src=\"js/custom.js\"></script>
</body>

</html>", "frontoffice/blog.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\frontoffice\\blog.html.twig");
    }
}