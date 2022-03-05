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

/* frontoffice/cart.html.twig */
class __TwigTemplate_fe038ec34772f8f1f271b87260cc05442d5ef9c22d9aaa8a6771b72c52e967c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/cart.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "frontoffice/cart.html.twig", 1);
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

        echo "Panier | culture";
        
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
        echo "
<body>
  <!--::header part start::-->
  <header class=\"main_menu home_menu\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12\">
                ";
        // line 11
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


  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class=\"breadcrumb breadcrumb_bg\">
    <div class=\"container\">
      <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
          <div class=\"breadcrumb_iner\">
            <div class=\"breadcrumb_iner_item\">
              <h2>Cart Products</h2>
              <p>Home <span>-</span>Cart Products</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <section class=\"cart_area padding_top\">
    <div class=\"container\">
      <div class=\"cart_inner\">
        <div class=\"table-responsive\">
          <table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\">Product</th>
                <th scope=\"col\">Price</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class=\"media\">
                    <div class=\"d-flex\">
                      <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/product/single-product/cart-1.jpg\" alt=\"\" />
                    </div>
                    <div class=\"media-body\">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>\$360.00</h5>
                </td>
                <td>
                  <div class=\"product_count\">
                    <span class=\"input-number-decrement\"> <i class=\"ti-angle-down\"></i></span>
                    <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                    <span class=\"input-number-increment\"> <i class=\"ti-angle-up\"></i></span>
                  </div>
                </td>
                <td>
                  <h5>\$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class=\"media\">
                    <div class=\"d-flex\">
                      <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/product/single-product/cart-1.jpg\" alt=\"\" />
                    </div>
                    <div class=\"media-body\">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>\$360.00</h5>
                </td>
                <td>
                  <div class=\"product_count\">
                    <span class=\"input-number-decrement\"> <i class=\"ti-angle-down\"></i></span>
                    <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                    <span class=\"input-number-increment\"> <i class=\"ti-angle-up\"></i></span>
                  </div>
                </td>
                <td>
                  <h5>\$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class=\"media\">
                    <div class=\"d-flex\">
                      <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsF/"), "html", null, true);
        echo "/img/product/single-product/cart-1.jpg\" alt=\"\" />
                    </div>
                    <div class=\"media-body\">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>\$360.00</h5>
                </td>
                <td>
                  <div class=\"product_count\">
                    <span class=\"input-number-decrement\"> <i class=\"ti-angle-down\"></i></span>
                    <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                    <span class=\"input-number-increment\"> <i class=\"ti-angle-up\"></i></span>
                  </div>
                </td>
                <td>
                  <h5>\$720.00</h5>
                </td>
              </tr>
              <tr class=\"bottom_button\">
                <td>
                  <a class=\"btn_1\" href=\"#\">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class=\"cupon_text float-right\">
                    <a class=\"btn_1\" href=\"#\">Close Coupon</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>\$2160.00</h5>
                </td>
              </tr>
              <tr class=\"shipping_area\">
                <td></td>
                <td></td>
                <td>
                  <h5>Shipping</h5>
                </td>
                <td>
                  <div class=\"shipping_box\">
                    <ul class=\"list\">
                      <li>
                        <a href=\"#\">Flat Rate: \$5.00</a>
                      </li>
                      <li>
                        <a href=\"#\">Free Shipping</a>
                      </li>
                      <li>
                        <a href=\"#\">Flat Rate: \$10.00</a>
                      </li>
                      <li class=\"active\">
                        <a href=\"#\">Local Delivery: \$2.00</a>
                      </li>
                    </ul>
                    <h6>
                      Calculate Shipping
                      <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                    </h6>
                    <select class=\"shipping_select\">
                      <option value=\"1\">Bangladesh</option>
                      <option value=\"2\">India</option>
                      <option value=\"4\">Pakistan</option>
                    </select>
                    <select class=\"shipping_select section_bg\">
                      <option value=\"1\">Select a State</option>
                      <option value=\"2\">Select a State</option>
                      <option value=\"4\">Select a State</option>
                    </select>
                    <input type=\"text\" placeholder=\"Postcode/Zipcode\" />
                    <a class=\"btn_1\" href=\"#\">Update Details</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class=\"checkout_btn_inner float-right\">
            <a class=\"btn_1\" href=\"#\">Continue Shopping</a>
            <a class=\"btn_1 checkout_btn_1\" href=\"#\">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  ";
        // line 208
        echo twig_include($this->env, $context, "includes/frontoffice/footer.html.twig");
        echo "
  
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 208,  210 => 115,  182 => 90,  154 => 65,  97 => 11,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'baseF.html.twig'%}
{% block title %}Panier | culture{% endblock %}
{% block content %}

<body>
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


  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class=\"breadcrumb breadcrumb_bg\">
    <div class=\"container\">
      <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
          <div class=\"breadcrumb_iner\">
            <div class=\"breadcrumb_iner_item\">
              <h2>Cart Products</h2>
              <p>Home <span>-</span>Cart Products</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <section class=\"cart_area padding_top\">
    <div class=\"container\">
      <div class=\"cart_inner\">
        <div class=\"table-responsive\">
          <table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\">Product</th>
                <th scope=\"col\">Price</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class=\"media\">
                    <div class=\"d-flex\">
                      <img src=\"{{asset('assetsF/')}}/img/product/single-product/cart-1.jpg\" alt=\"\" />
                    </div>
                    <div class=\"media-body\">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>\$360.00</h5>
                </td>
                <td>
                  <div class=\"product_count\">
                    <span class=\"input-number-decrement\"> <i class=\"ti-angle-down\"></i></span>
                    <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                    <span class=\"input-number-increment\"> <i class=\"ti-angle-up\"></i></span>
                  </div>
                </td>
                <td>
                  <h5>\$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class=\"media\">
                    <div class=\"d-flex\">
                      <img src=\"{{asset('assetsF/')}}/img/product/single-product/cart-1.jpg\" alt=\"\" />
                    </div>
                    <div class=\"media-body\">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>\$360.00</h5>
                </td>
                <td>
                  <div class=\"product_count\">
                    <span class=\"input-number-decrement\"> <i class=\"ti-angle-down\"></i></span>
                    <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                    <span class=\"input-number-increment\"> <i class=\"ti-angle-up\"></i></span>
                  </div>
                </td>
                <td>
                  <h5>\$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class=\"media\">
                    <div class=\"d-flex\">
                      <img src=\"{{asset('assetsF/')}}/img/product/single-product/cart-1.jpg\" alt=\"\" />
                    </div>
                    <div class=\"media-body\">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>\$360.00</h5>
                </td>
                <td>
                  <div class=\"product_count\">
                    <span class=\"input-number-decrement\"> <i class=\"ti-angle-down\"></i></span>
                    <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                    <span class=\"input-number-increment\"> <i class=\"ti-angle-up\"></i></span>
                  </div>
                </td>
                <td>
                  <h5>\$720.00</h5>
                </td>
              </tr>
              <tr class=\"bottom_button\">
                <td>
                  <a class=\"btn_1\" href=\"#\">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class=\"cupon_text float-right\">
                    <a class=\"btn_1\" href=\"#\">Close Coupon</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>\$2160.00</h5>
                </td>
              </tr>
              <tr class=\"shipping_area\">
                <td></td>
                <td></td>
                <td>
                  <h5>Shipping</h5>
                </td>
                <td>
                  <div class=\"shipping_box\">
                    <ul class=\"list\">
                      <li>
                        <a href=\"#\">Flat Rate: \$5.00</a>
                      </li>
                      <li>
                        <a href=\"#\">Free Shipping</a>
                      </li>
                      <li>
                        <a href=\"#\">Flat Rate: \$10.00</a>
                      </li>
                      <li class=\"active\">
                        <a href=\"#\">Local Delivery: \$2.00</a>
                      </li>
                    </ul>
                    <h6>
                      Calculate Shipping
                      <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                    </h6>
                    <select class=\"shipping_select\">
                      <option value=\"1\">Bangladesh</option>
                      <option value=\"2\">India</option>
                      <option value=\"4\">Pakistan</option>
                    </select>
                    <select class=\"shipping_select section_bg\">
                      <option value=\"1\">Select a State</option>
                      <option value=\"2\">Select a State</option>
                      <option value=\"4\">Select a State</option>
                    </select>
                    <input type=\"text\" placeholder=\"Postcode/Zipcode\" />
                    <a class=\"btn_1\" href=\"#\">Update Details</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class=\"checkout_btn_inner float-right\">
            <a class=\"btn_1\" href=\"#\">Continue Shopping</a>
            <a class=\"btn_1 checkout_btn_1\" href=\"#\">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  {{include('includes/frontoffice/footer.html.twig')}}
  
  {% endblock %}", "frontoffice/cart.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\frontoffice\\cart.html.twig");
    }
}
