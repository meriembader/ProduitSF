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

/* includes/frontoffice/footer.html.twig */
class __TwigTemplate_db86e20038dd2ce18976648e09c4b708e614d55edd7e052117935e4eab706907 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/frontoffice/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/frontoffice/footer.html.twig"));

        // line 1
        echo "<footer class=\"footer_part\">
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
    </footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/frontoffice/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer_part\">
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
    </footer>", "includes/frontoffice/footer.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\includes\\frontoffice\\footer.html.twig");
    }
}
