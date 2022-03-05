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

/* backoffice/dashboardCat.html.twig */
class __TwigTemplate_e393118081e980a31eb56332511f75ab6b899e83043e2c5205d5dac3fc3131fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseB.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/dashboardCat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/dashboardCat.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "backoffice/dashboardCat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
    <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

        <!-- Sidebar Toggle (Topbar) -->
        <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
        </button>

        <!-- Topbar Search -->
        <form
                class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                       aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class=\"nav-item dropdown no-arrow d-sm-none\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-search fa-fw\"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                     aria-labelledby=\"searchDropdown\">
                    <form class=\"form-inline mr-auto w-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                   placeholder=\"Search for...\" aria-label=\"Search\"
                                   aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-bell fa-fw\"></i>
                    <!-- Counter - Alerts -->
                    <span class=\"badge badge-danger badge-counter\">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                     aria-labelledby=\"alertsDropdown\">
                    <h6 class=\"dropdown-header\">
                        Alerts Center
                    </h6>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-primary\">
                                <i class=\"fas fa-file-alt text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 12, 2019</div>
                            <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-success\">
                                <i class=\"fas fa-donate text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 7, 2019</div>
                            \$290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-warning\">
                                <i class=\"fas fa-exclamation-triangle text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-envelope fa-fw\"></i>
                    <!-- Counter - Messages -->
                    <span class=\"badge badge-danger badge-counter\">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                     aria-labelledby=\"messagesDropdown\">
                    <h6 class=\"dropdown-header\">
                        Message Center
                    </h6>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img class=\"rounded-circle\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/"), "html", null, true);
        echo "img/undraw_profile_1.svg\"
                                 alt=\"\">
                            <div class=\"status-indicator bg-success\"></div>
                        </div>
                        <div class=\"font-weight-bold\">
                            <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                problem I've been having.</div>
                            <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img class=\"rounded-circle\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/"), "html", null, true);
        echo "img/undraw_profile_2.svg\"
                                 alt=\"\">
                            <div class=\"status-indicator\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                would you like them sent to you?</div>
                            <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img class=\"rounded-circle\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/"), "html", null, true);
        echo "img/undraw_profile_3.svg\"
                                 alt=\"\">
                            <div class=\"status-indicator bg-warning\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                the progress so far, keep up the good work!</div>
                            <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                 alt=\"\">
                            <div class=\"status-indicator bg-success\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                told me that people say this to all dogs, even if they aren't good...</div>
                            <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                </div>
            </li>

            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                    <img class=\"img-profile rounded-circle\"
                         src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/"), "html", null, true);
        echo "img/undraw_profile.svg\">
                </a>
                <!-- Dropdown - User Information -->
                <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                     aria-labelledby=\"userDropdown\">
                    <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Profile
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Settings
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Activity Log
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                        <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>


    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <thead>
        <tr align=\"center\">
            <th>Réference</th>
            <th>Nom</th>
            <th>Descrption</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 221, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 222
            echo "            <tr align=\"center\">
                <td>";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 223), "html", null, true);
            echo "</td>
                <td>";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 224), "html", null, true);
            echo "</td>
                <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "descrption", [], "any", false, false, false, 225), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppC", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 227)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-circle\">
                        <i class=\"fas fa-trash\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifC", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 232)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-circle\">
                        <i class=\"fas fa-info-circle\"></i>
                    </a>
                </td>
                </td>
                <td>
                    <a href=\"";
            // line 238
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie");
            echo "\" class=\"btn btn-info btn-circle\">
                        <i class=\"fas fa-info-circle\"></i>
                    </a>
                </td>

            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "

        </tbody>
    </table>
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"fas fa-laugh-wink\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"index.html\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fas fa-fw fa-cog\"></i>
                <span>Produits</span>
            </a>
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Gestion des produits</h6>
                    <a class=\"collapse-item\" href=\"";
        // line 288
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pr");
        echo "\">Produits</a>
                    <a class=\"collapse-item\" href=\"";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cat");
        echo "\">Cathégorie</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
               aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Utilities</span>
            </a>
            <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                 data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Utilities:</h6>
                    <a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
                    <a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
                    <a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
                    <a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
               aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Pages</span>
            </a>
            <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Login Screens:</h6>
                    <a class=\"collapse-item\" href=\"login.html\">Login</a>
                    <a class=\"collapse-item\" href=\"register.html\">Register</a>
                    <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                    <div class=\"collapse-divider\"></div>
                    <h6 class=\"collapse-header\">Other Pages:</h6>
                    <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                    <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"charts.html\">
                <i class=\"fas fa-fw fa-chart-area\"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 351
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cat");
        echo "\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 356
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pr");
        echo "\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

        <!-- Sidebar Message -->
        <div class=\"sidebar-card\">
            <img class=\"sidebar-card-illustration mb-2\" src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/"), "html", null, true);
        echo "img/undraw_rocket.svg\" alt=\"\">
            <p class=\"text-center mb-2\"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class=\"btn btn-success btn-sm\" href=\"https://startbootstrap.com/theme/sb-admin-pro\">Upgrade to Pro!</a>
        </div>

    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/dashboardCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 371,  471 => 356,  463 => 351,  398 => 289,  394 => 288,  350 => 246,  336 => 238,  327 => 232,  319 => 227,  314 => 225,  310 => 224,  306 => 223,  303 => 222,  299 => 221,  253 => 178,  216 => 144,  201 => 132,  186 => 120,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block content %}

    <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

        <!-- Sidebar Toggle (Topbar) -->
        <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
        </button>

        <!-- Topbar Search -->
        <form
                class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                       aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class=\"nav-item dropdown no-arrow d-sm-none\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-search fa-fw\"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                     aria-labelledby=\"searchDropdown\">
                    <form class=\"form-inline mr-auto w-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                   placeholder=\"Search for...\" aria-label=\"Search\"
                                   aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-bell fa-fw\"></i>
                    <!-- Counter - Alerts -->
                    <span class=\"badge badge-danger badge-counter\">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                     aria-labelledby=\"alertsDropdown\">
                    <h6 class=\"dropdown-header\">
                        Alerts Center
                    </h6>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-primary\">
                                <i class=\"fas fa-file-alt text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 12, 2019</div>
                            <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-success\">
                                <i class=\"fas fa-donate text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 7, 2019</div>
                            \$290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-warning\">
                                <i class=\"fas fa-exclamation-triangle text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-envelope fa-fw\"></i>
                    <!-- Counter - Messages -->
                    <span class=\"badge badge-danger badge-counter\">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                     aria-labelledby=\"messagesDropdown\">
                    <h6 class=\"dropdown-header\">
                        Message Center
                    </h6>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img class=\"rounded-circle\" src=\"{{asset('assetsB/')}}img/undraw_profile_1.svg\"
                                 alt=\"\">
                            <div class=\"status-indicator bg-success\"></div>
                        </div>
                        <div class=\"font-weight-bold\">
                            <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                problem I've been having.</div>
                            <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img class=\"rounded-circle\" src=\"{{asset('assetsB/')}}img/undraw_profile_2.svg\"
                                 alt=\"\">
                            <div class=\"status-indicator\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                would you like them sent to you?</div>
                            <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img class=\"rounded-circle\" src=\"{{asset('assetsB/')}}img/undraw_profile_3.svg\"
                                 alt=\"\">
                            <div class=\"status-indicator bg-warning\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                the progress so far, keep up the good work!</div>
                            <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                 alt=\"\">
                            <div class=\"status-indicator bg-success\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                told me that people say this to all dogs, even if they aren't good...</div>
                            <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                </div>
            </li>

            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                    <img class=\"img-profile rounded-circle\"
                         src=\"{{asset('assetsB/')}}img/undraw_profile.svg\">
                </a>
                <!-- Dropdown - User Information -->
                <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                     aria-labelledby=\"userDropdown\">
                    <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Profile
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Settings
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Activity Log
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                        <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>


    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <thead>
        <tr align=\"center\">
            <th>Réference</th>
            <th>Nom</th>
            <th>Descrption</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        {% for i in data %}
            <tr align=\"center\">
                <td>{{ i.id }}</td>
                <td>{{ i.nom }}</td>
                <td>{{ i.descrption }}</td>
                <td>
                    <a href=\"{{ path('suppC',{'id' :i.id}) }}\" class=\"btn btn-danger btn-circle\">
                        <i class=\"fas fa-trash\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('modifC',{'id' :i.id}) }}\" class=\"btn btn-info btn-circle\">
                        <i class=\"fas fa-info-circle\"></i>
                    </a>
                </td>
                </td>
                <td>
                    <a href=\"{{ path('categorie',) }}\" class=\"btn btn-info btn-circle\">
                        <i class=\"fas fa-info-circle\"></i>
                    </a>
                </td>

            </tr>

        {% endfor %}


        </tbody>
    </table>
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"fas fa-laugh-wink\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"index.html\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fas fa-fw fa-cog\"></i>
                <span>Produits</span>
            </a>
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Gestion des produits</h6>
                    <a class=\"collapse-item\" href=\"{{ path('admin_pr') }}\">Produits</a>
                    <a class=\"collapse-item\" href=\"{{ path('admin_cat') }}\">Cathégorie</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
               aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Utilities</span>
            </a>
            <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                 data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Utilities:</h6>
                    <a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
                    <a class=\"collapse-item\" href=\"utilities-border.html\">Borders</a>
                    <a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
                    <a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
               aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Pages</span>
            </a>
            <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Login Screens:</h6>
                    <a class=\"collapse-item\" href=\"login.html\">Login</a>
                    <a class=\"collapse-item\" href=\"register.html\">Register</a>
                    <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                    <div class=\"collapse-divider\"></div>
                    <h6 class=\"collapse-header\">Other Pages:</h6>
                    <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                    <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"charts.html\">
                <i class=\"fas fa-fw fa-chart-area\"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('admin_cat') }}\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('admin_pr') }}\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

        <!-- Sidebar Message -->
        <div class=\"sidebar-card\">
            <img class=\"sidebar-card-illustration mb-2\" src=\"{{asset('assetsB/')}}img/undraw_rocket.svg\" alt=\"\">
            <p class=\"text-center mb-2\"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class=\"btn btn-success btn-sm\" href=\"https://startbootstrap.com/theme/sb-admin-pro\">Upgrade to Pro!</a>
        </div>

    </ul>
{% endblock %}



", "backoffice/dashboardCat.html.twig", "C:\\xampp\\htdocs\\gouader\\templates\\backoffice\\dashboardCat.html.twig");
    }
}
