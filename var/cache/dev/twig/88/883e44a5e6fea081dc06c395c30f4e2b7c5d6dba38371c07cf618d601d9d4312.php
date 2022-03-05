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

/* frontoffice/checkout.html.twig */
class __TwigTemplate_29b23275d73bf4e5817bf745205e3cdca1ce811ae31c35377583a4f09ee86ad7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/checkout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"zxx\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>aranaz</title>
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
  <!-- nice select CSS -->
  <link rel=\"stylesheet\" href=\"css/nice-select.css\">
  <!-- font awesome CSS -->
  <link rel=\"stylesheet\" href=\"css/all.css\">
  <!-- flaticon CSS -->
  <link rel=\"stylesheet\" href=\"css/flaticon.css\">
  <link rel=\"stylesheet\" href=\"css/themify-icons.css\">
  <!-- font awesome CSS -->
  <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
  <!-- swiper CSS -->
  <link rel=\"stylesheet\" href=\"css/slick.css\">
  <link rel=\"stylesheet\" href=\"css/price_rangs.css\">
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
        // line 39
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
              <h2>Producta Checkout</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class=\"checkout_area padding_top\">
    <div class=\"container\">
      <div class=\"returning_customer\">
        <div class=\"check_title\">
          <h2>
            Returning Customer?
            <a href=\"#\">Click here to login</a>
          </h2>
        </div>
        <p>
          If you have shopped with us before, please enter your details in the
          boxes below. If you are a new customer, please proceed to the
          Billing & Shipping section.
        </p>
        <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
          <div class=\"col-md-6 form-group p_star\">
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\" \" />
            <span class=\"placeholder\" data-placeholder=\"Username or Email\"></span>
          </div>
          <div class=\"col-md-6 form-group p_star\">
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" value=\"\" />
            <span class=\"placeholder\" data-placeholder=\"Password\"></span>
          </div>
          <div class=\"col-md-12 form-group\">
            <button type=\"submit\" value=\"submit\" class=\"btn_3\">
              log in
            </button>
            <div class=\"creat_account\">
              <input type=\"checkbox\" id=\"f-option\" name=\"selector\" />
              <label for=\"f-option\">Remember me</label>
            </div>
            <a class=\"lost_pass\" href=\"#\">Lost your password?</a>
          </div>
        </form>
      </div>
      <div class=\"cupon_area\">
        <div class=\"check_title\">
          <h2>
            Have a coupon?
            <a href=\"#\">Click here to enter your code</a>
          </h2>
        </div>
        <input type=\"text\" placeholder=\"Enter coupon code\" />
        <a class=\"tp_btn\" href=\"#\">Apply Coupon</a>
      </div>
      <div class=\"billing_details\">
        <div class=\"row\">
          <div class=\"col-lg-8\">
            <h3>Billing Details</h3>
            <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
              <div class=\"col-md-6 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"first\" name=\"name\" />
                <span class=\"placeholder\" data-placeholder=\"First name\"></span>
              </div>
              <div class=\"col-md-6 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"last\" name=\"name\" />
                <span class=\"placeholder\" data-placeholder=\"Last name\"></span>
              </div>
              <div class=\"col-md-12 form-group\">
                <input type=\"text\" class=\"form-control\" id=\"company\" name=\"company\" placeholder=\"Company name\" />
              </div>
              <div class=\"col-md-6 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"number\" name=\"number\" />
                <span class=\"placeholder\" data-placeholder=\"Phone number\"></span>
              </div>
              <div class=\"col-md-6 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"compemailany\" />
                <span class=\"placeholder\" data-placeholder=\"Email Address\"></span>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <select class=\"country_select\">
                  <option value=\"1\">Country</option>
                  <option value=\"2\">Country</option>
                  <option value=\"4\">Country</option>
                </select>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"add1\" name=\"add1\" />
                <span class=\"placeholder\" data-placeholder=\"Address line 01\"></span>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"add2\" name=\"add2\" />
                <span class=\"placeholder\" data-placeholder=\"Address line 02\"></span>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" />
                <span class=\"placeholder\" data-placeholder=\"Town/City\"></span>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <select class=\"country_select\">
                  <option value=\"1\">District</option>
                  <option value=\"2\">District</option>
                  <option value=\"4\">District</option>
                </select>
              </div>
              <div class=\"col-md-12 form-group\">
                <input type=\"text\" class=\"form-control\" id=\"zip\" name=\"zip\" placeholder=\"Postcode/ZIP\" />
              </div>
              <div class=\"col-md-12 form-group\">
                <div class=\"creat_account\">
                  <input type=\"checkbox\" id=\"f-option2\" name=\"selector\" />
                  <label for=\"f-option2\">Create an account?</label>
                </div>
              </div>
              <div class=\"col-md-12 form-group\">
                <div class=\"creat_account\">
                  <h3>Shipping Details</h3>
                  <input type=\"checkbox\" id=\"f-option3\" name=\"selector\" />
                  <label for=\"f-option3\">Ship to a different address?</label>
                </div>
                <textarea class=\"form-control\" name=\"message\" id=\"message\" rows=\"1\"
                  placeholder=\"Order Notes\"></textarea>
              </div>
            </form>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"order_box\">
              <h2>Your Order</h2>
              <ul class=\"list\">
                <li>
                  <a href=\"#\">Product
                    <span>Total</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Fresh Blackberry
                    <span class=\"middle\">x 02</span>
                    <span class=\"last\">\$720.00</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Fresh Tomatoes
                    <span class=\"middle\">x 02</span>
                    <span class=\"last\">\$720.00</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Fresh Brocoli
                    <span class=\"middle\">x 02</span>
                    <span class=\"last\">\$720.00</span>
                  </a>
                </li>
              </ul>
              <ul class=\"list list_2\">
                <li>
                  <a href=\"#\">Subtotal
                    <span>\$2160.00</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Shipping
                    <span>Flat rate: \$50.00</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Total
                    <span>\$2210.00</span>
                  </a>
                </li>
              </ul>
              <div class=\"payment_item\">
                <div class=\"radion_btn\">
                  <input type=\"radio\" id=\"f-option5\" name=\"selector\" />
                  <label for=\"f-option5\">Check payments</label>
                  <div class=\"check\"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class=\"payment_item active\">
                <div class=\"radion_btn\">
                  <input type=\"radio\" id=\"f-option6\" name=\"selector\" />
                  <label for=\"f-option6\">Paypal </label>
                  <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/product/single-product/card.jpg\" alt=\"\" />
                  <div class=\"check\"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class=\"creat_account\">
                <input type=\"checkbox\" id=\"f-option4\" name=\"selector\" />
                <label for=\"f-option4\">I’ve read and accept the </label>
                <a href=\"#\">terms & conditions*</a>
              </div>
              <a class=\"btn_3\" href=\"#\">Proceed to Paypal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

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
  <script src=\"js/stellar.js\"></script>
  <script src=\"js/price_rangs.js\"></script>
  <!-- custom js -->
  <script src=\"js/custom.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 318,  86 => 39,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"zxx\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>aranaz</title>
  <link rel=\"icon\" href=\"{{asset('assetsF/')}}/img/favicon.png\">
  <!-- Bootstrap CSS -->
  <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
  <!-- animate CSS -->
  <link rel=\"stylesheet\" href=\"css/animate.css\">
  <!-- owl carousel CSS -->
  <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
  <!-- nice select CSS -->
  <link rel=\"stylesheet\" href=\"css/nice-select.css\">
  <!-- font awesome CSS -->
  <link rel=\"stylesheet\" href=\"css/all.css\">
  <!-- flaticon CSS -->
  <link rel=\"stylesheet\" href=\"css/flaticon.css\">
  <link rel=\"stylesheet\" href=\"css/themify-icons.css\">
  <!-- font awesome CSS -->
  <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
  <!-- swiper CSS -->
  <link rel=\"stylesheet\" href=\"css/slick.css\">
  <link rel=\"stylesheet\" href=\"css/price_rangs.css\">
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
              <h2>Producta Checkout</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class=\"checkout_area padding_top\">
    <div class=\"container\">
      <div class=\"returning_customer\">
        <div class=\"check_title\">
          <h2>
            Returning Customer?
            <a href=\"#\">Click here to login</a>
          </h2>
        </div>
        <p>
          If you have shopped with us before, please enter your details in the
          boxes below. If you are a new customer, please proceed to the
          Billing & Shipping section.
        </p>
        <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
          <div class=\"col-md-6 form-group p_star\">
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\" \" />
            <span class=\"placeholder\" data-placeholder=\"Username or Email\"></span>
          </div>
          <div class=\"col-md-6 form-group p_star\">
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" value=\"\" />
            <span class=\"placeholder\" data-placeholder=\"Password\"></span>
          </div>
          <div class=\"col-md-12 form-group\">
            <button type=\"submit\" value=\"submit\" class=\"btn_3\">
              log in
            </button>
            <div class=\"creat_account\">
              <input type=\"checkbox\" id=\"f-option\" name=\"selector\" />
              <label for=\"f-option\">Remember me</label>
            </div>
            <a class=\"lost_pass\" href=\"#\">Lost your password?</a>
          </div>
        </form>
      </div>
      <div class=\"cupon_area\">
        <div class=\"check_title\">
          <h2>
            Have a coupon?
            <a href=\"#\">Click here to enter your code</a>
          </h2>
        </div>
        <input type=\"text\" placeholder=\"Enter coupon code\" />
        <a class=\"tp_btn\" href=\"#\">Apply Coupon</a>
      </div>
      <div class=\"billing_details\">
        <div class=\"row\">
          <div class=\"col-lg-8\">
            <h3>Billing Details</h3>
            <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
              <div class=\"col-md-6 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"first\" name=\"name\" />
                <span class=\"placeholder\" data-placeholder=\"First name\"></span>
              </div>
              <div class=\"col-md-6 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"last\" name=\"name\" />
                <span class=\"placeholder\" data-placeholder=\"Last name\"></span>
              </div>
              <div class=\"col-md-12 form-group\">
                <input type=\"text\" class=\"form-control\" id=\"company\" name=\"company\" placeholder=\"Company name\" />
              </div>
              <div class=\"col-md-6 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"number\" name=\"number\" />
                <span class=\"placeholder\" data-placeholder=\"Phone number\"></span>
              </div>
              <div class=\"col-md-6 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"compemailany\" />
                <span class=\"placeholder\" data-placeholder=\"Email Address\"></span>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <select class=\"country_select\">
                  <option value=\"1\">Country</option>
                  <option value=\"2\">Country</option>
                  <option value=\"4\">Country</option>
                </select>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"add1\" name=\"add1\" />
                <span class=\"placeholder\" data-placeholder=\"Address line 01\"></span>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"add2\" name=\"add2\" />
                <span class=\"placeholder\" data-placeholder=\"Address line 02\"></span>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" />
                <span class=\"placeholder\" data-placeholder=\"Town/City\"></span>
              </div>
              <div class=\"col-md-12 form-group p_star\">
                <select class=\"country_select\">
                  <option value=\"1\">District</option>
                  <option value=\"2\">District</option>
                  <option value=\"4\">District</option>
                </select>
              </div>
              <div class=\"col-md-12 form-group\">
                <input type=\"text\" class=\"form-control\" id=\"zip\" name=\"zip\" placeholder=\"Postcode/ZIP\" />
              </div>
              <div class=\"col-md-12 form-group\">
                <div class=\"creat_account\">
                  <input type=\"checkbox\" id=\"f-option2\" name=\"selector\" />
                  <label for=\"f-option2\">Create an account?</label>
                </div>
              </div>
              <div class=\"col-md-12 form-group\">
                <div class=\"creat_account\">
                  <h3>Shipping Details</h3>
                  <input type=\"checkbox\" id=\"f-option3\" name=\"selector\" />
                  <label for=\"f-option3\">Ship to a different address?</label>
                </div>
                <textarea class=\"form-control\" name=\"message\" id=\"message\" rows=\"1\"
                  placeholder=\"Order Notes\"></textarea>
              </div>
            </form>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"order_box\">
              <h2>Your Order</h2>
              <ul class=\"list\">
                <li>
                  <a href=\"#\">Product
                    <span>Total</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Fresh Blackberry
                    <span class=\"middle\">x 02</span>
                    <span class=\"last\">\$720.00</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Fresh Tomatoes
                    <span class=\"middle\">x 02</span>
                    <span class=\"last\">\$720.00</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Fresh Brocoli
                    <span class=\"middle\">x 02</span>
                    <span class=\"last\">\$720.00</span>
                  </a>
                </li>
              </ul>
              <ul class=\"list list_2\">
                <li>
                  <a href=\"#\">Subtotal
                    <span>\$2160.00</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Shipping
                    <span>Flat rate: \$50.00</span>
                  </a>
                </li>
                <li>
                  <a href=\"#\">Total
                    <span>\$2210.00</span>
                  </a>
                </li>
              </ul>
              <div class=\"payment_item\">
                <div class=\"radion_btn\">
                  <input type=\"radio\" id=\"f-option5\" name=\"selector\" />
                  <label for=\"f-option5\">Check payments</label>
                  <div class=\"check\"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class=\"payment_item active\">
                <div class=\"radion_btn\">
                  <input type=\"radio\" id=\"f-option6\" name=\"selector\" />
                  <label for=\"f-option6\">Paypal </label>
                  <img src=\"{{asset('assetsF/')}}/img/product/single-product/card.jpg\" alt=\"\" />
                  <div class=\"check\"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class=\"creat_account\">
                <input type=\"checkbox\" id=\"f-option4\" name=\"selector\" />
                <label for=\"f-option4\">I’ve read and accept the </label>
                <a href=\"#\">terms & conditions*</a>
              </div>
              <a class=\"btn_3\" href=\"#\">Proceed to Paypal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

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
  <script src=\"js/stellar.js\"></script>
  <script src=\"js/price_rangs.js\"></script>
  <!-- custom js -->
  <script src=\"js/custom.js\"></script>
</body>

</html>", "frontoffice/checkout.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\frontoffice\\checkout.html.twig");
    }
}
