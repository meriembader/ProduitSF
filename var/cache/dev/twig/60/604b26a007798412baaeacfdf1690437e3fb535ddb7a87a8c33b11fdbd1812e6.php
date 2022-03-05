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

/* frontoffice/contact.html.twig */
class __TwigTemplate_ce377c7ce19367c79bd16fadf2fc4067a72004e81c7b58abc5061130e42d9cb1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/contact.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "frontoffice/contact.html.twig", 1);
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

        echo "Contact | culture";
        
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
        echo "  <!--::header part start::-->
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

  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class=\"breadcrumb breadcrumb_bg\">
    <div class=\"container\">
      <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
          <div class=\"breadcrumb_iner\">
            <div class=\"breadcrumb_iner_item\">
              <h2>contact us</h2>
              <p>Home <span>-</span> contact us</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class=\"contact-section padding_top\">
    <div class=\"container\">
      <div class=\"d-none d-sm-block mb-5 pb-4\">
        <div id=\"map\" style=\"height: 480px;\"></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: \"all\",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <script
          src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap\">
        </script>

      </div>


      <div class=\"row\">
        <div class=\"col-12\">
          <h2 class=\"contact-title\">Get in Touch</h2>
        </div>
        <div class=\"col-lg-8\">
          <form class=\"form-contact contact_form\" action=\"contact_process.php\" method=\"post\" id=\"contactForm\"
            novalidate=\"novalidate\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"form-group\">

                  <textarea class=\"form-control w-100\" name=\"message\" id=\"message\" cols=\"30\" rows=\"9\"
                    onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Message'\"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\" onfocus=\"this.placeholder = ''\"
                    onblur=\"this.placeholder = 'Enter your name'\" placeholder='Enter your name'>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" onfocus=\"this.placeholder = ''\"
                    onblur=\"this.placeholder = 'Enter email address'\" placeholder='Enter email address'>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"subject\" id=\"subject\" type=\"text\" onfocus=\"this.placeholder = ''\"
                    onblur=\"this.placeholder = 'Enter Subject'\" placeholder='Enter Subject'>
                </div>
              </div>
            </div>
            <div class=\"form-group mt-3\">
              <a href=\"#\" class=\"btn_3 button-contactForm\">Send Message</a>
            </div>
          </form>
        </div>
        <div class=\"col-lg-4\">
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-home\"></i></span>
            <div class=\"media-body\">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-tablet\"></i></span>
            <div class=\"media-body\">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-email\"></i></span>
            <div class=\"media-body\">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  ";
        // line 155
        echo twig_include($this->env, $context, "includes/frontoffice/footer.html.twig");
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 155,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'baseF.html.twig'%}
{% block title %}Contact | culture{% endblock %}
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

  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class=\"breadcrumb breadcrumb_bg\">
    <div class=\"container\">
      <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
          <div class=\"breadcrumb_iner\">
            <div class=\"breadcrumb_iner_item\">
              <h2>contact us</h2>
              <p>Home <span>-</span> contact us</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class=\"contact-section padding_top\">
    <div class=\"container\">
      <div class=\"d-none d-sm-block mb-5 pb-4\">
        <div id=\"map\" style=\"height: 480px;\"></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: \"all\",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <script
          src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap\">
        </script>

      </div>


      <div class=\"row\">
        <div class=\"col-12\">
          <h2 class=\"contact-title\">Get in Touch</h2>
        </div>
        <div class=\"col-lg-8\">
          <form class=\"form-contact contact_form\" action=\"contact_process.php\" method=\"post\" id=\"contactForm\"
            novalidate=\"novalidate\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"form-group\">

                  <textarea class=\"form-control w-100\" name=\"message\" id=\"message\" cols=\"30\" rows=\"9\"
                    onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Message'\"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\" onfocus=\"this.placeholder = ''\"
                    onblur=\"this.placeholder = 'Enter your name'\" placeholder='Enter your name'>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\" onfocus=\"this.placeholder = ''\"
                    onblur=\"this.placeholder = 'Enter email address'\" placeholder='Enter email address'>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"subject\" id=\"subject\" type=\"text\" onfocus=\"this.placeholder = ''\"
                    onblur=\"this.placeholder = 'Enter Subject'\" placeholder='Enter Subject'>
                </div>
              </div>
            </div>
            <div class=\"form-group mt-3\">
              <a href=\"#\" class=\"btn_3 button-contactForm\">Send Message</a>
            </div>
          </form>
        </div>
        <div class=\"col-lg-4\">
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-home\"></i></span>
            <div class=\"media-body\">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-tablet\"></i></span>
            <div class=\"media-body\">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class=\"media contact-info\">
            <span class=\"contact-info__icon\"><i class=\"ti-email\"></i></span>
            <div class=\"media-body\">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{include('includes/frontoffice/footer.html.twig')}}
  {% endblock %}", "frontoffice/contact.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\frontoffice\\contact.html.twig");
    }
}
