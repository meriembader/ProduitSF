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

/* backoffice/register.html.twig */
class __TwigTemplate_c20afb874a6973db6c37ab962a125455cca440756be14f2f1e6eba534e20ba1c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

    <div class=\"container\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Create an Account!</h1>
                            </div>
                            <form class=\"user\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleFirstName\"
                                            placeholder=\"First Name\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleLastName\"
                                            placeholder=\"Last Name\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-user\" id=\"exampleInputEmail\"
                                        placeholder=\"Email Address\">
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"exampleInputPassword\" placeholder=\"Password\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"exampleRepeatPassword\" placeholder=\"Repeat Password\">
                                    </div>
                                </div>
                                <a href=\"login.html\" class=\"btn btn-primary btn-user btn-block\">
                                    Register Account
                                </a>
                                <hr>
                                <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                    <i class=\"fab fa-google fa-fw\"></i> Register with Google
                                </a>
                                <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                    <i class=\"fab fa-facebook-f fa-fw\"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                            </div>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"login.html\">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"js/sb-admin-2.min.js\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

    <div class=\"container\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Create an Account!</h1>
                            </div>
                            <form class=\"user\">
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleFirstName\"
                                            placeholder=\"First Name\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control form-control-user\" id=\"exampleLastName\"
                                            placeholder=\"Last Name\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control form-control-user\" id=\"exampleInputEmail\"
                                        placeholder=\"Email Address\">
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"exampleInputPassword\" placeholder=\"Password\">
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                            id=\"exampleRepeatPassword\" placeholder=\"Repeat Password\">
                                    </div>
                                </div>
                                <a href=\"login.html\" class=\"btn btn-primary btn-user btn-block\">
                                    Register Account
                                </a>
                                <hr>
                                <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                    <i class=\"fab fa-google fa-fw\"></i> Register with Google
                                </a>
                                <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                    <i class=\"fab fa-facebook-f fa-fw\"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                            </div>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"login.html\">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"js/sb-admin-2.min.js\"></script>

</body>

</html>", "backoffice/register.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\backoffice\\register.html.twig");
    }
}
