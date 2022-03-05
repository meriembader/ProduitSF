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

/* backoffice/package.json */
class __TwigTemplate_acc49bf7c65f4fbee105b5ce851877b28922bda34270c89def18892cd8c87b38 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/package.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/package.json"));

        // line 1
        echo "{
    \"title\": \"SB Admin 2\",
    \"name\": \"startbootstrap-sb-admin-2\",
    \"version\": \"4.1.3\",
    \"scripts\": {
        \"start\": \"node_modules/.bin/gulp watch\"
    },
    \"description\": \"An open source Bootstrap 4 admin theme.\",
    \"keywords\": [
        \"css\",
        \"sass\",
        \"html\",
        \"responsive\",
        \"theme\",
        \"template\",
        \"admin\",
        \"app\"
    ],
    \"homepage\": \"https://startbootstrap.com/theme/sb-admin-2\",
    \"bugs\": {
        \"url\": \"https://github.com/StartBootstrap/startbootstrap-sb-admin-2/issues\",
        \"email\": \"feedback@startbootstrap.com\"
    },
    \"license\": \"MIT\",
    \"author\": \"Start Bootstrap\",
    \"contributors\": [
        \"David Miller (https://davidmiller.io/)\"
    ],
    \"repository\": {
        \"type\": \"git\",
        \"url\": \"https://github.com/StartBootstrap/startbootstrap-sb-admin-2.git\"
    },
    \"dependencies\": {
        \"@fortawesome/fontawesome-free\": \"5.15.1\",
        \"bootstrap\": \"4.5.3\",
        \"chart.js\": \"2.9.4\",
        \"datatables.net-bs4\": \"1.10.22\",
        \"jquery\": \"3.5.1\",
        \"jquery.easing\": \"^1.4.1\"
    },
    \"devDependencies\": {
        \"browser-sync\": \"2.26.13\",
        \"del\": \"6.0.0\",
        \"gulp\": \"4.0.2\",
        \"gulp-autoprefixer\": \"7.0.1\",
        \"gulp-clean-css\": \"4.3.0\",
        \"gulp-header\": \"2.0.9\",
        \"gulp-plumber\": \"^1.2.1\",
        \"gulp-rename\": \"2.0.0\",
        \"gulp-sass\": \"4.1.0\",
        \"gulp-uglify\": \"3.0.2\",
        \"merge-stream\": \"2.0.0\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/package.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"title\": \"SB Admin 2\",
    \"name\": \"startbootstrap-sb-admin-2\",
    \"version\": \"4.1.3\",
    \"scripts\": {
        \"start\": \"node_modules/.bin/gulp watch\"
    },
    \"description\": \"An open source Bootstrap 4 admin theme.\",
    \"keywords\": [
        \"css\",
        \"sass\",
        \"html\",
        \"responsive\",
        \"theme\",
        \"template\",
        \"admin\",
        \"app\"
    ],
    \"homepage\": \"https://startbootstrap.com/theme/sb-admin-2\",
    \"bugs\": {
        \"url\": \"https://github.com/StartBootstrap/startbootstrap-sb-admin-2/issues\",
        \"email\": \"feedback@startbootstrap.com\"
    },
    \"license\": \"MIT\",
    \"author\": \"Start Bootstrap\",
    \"contributors\": [
        \"David Miller (https://davidmiller.io/)\"
    ],
    \"repository\": {
        \"type\": \"git\",
        \"url\": \"https://github.com/StartBootstrap/startbootstrap-sb-admin-2.git\"
    },
    \"dependencies\": {
        \"@fortawesome/fontawesome-free\": \"5.15.1\",
        \"bootstrap\": \"4.5.3\",
        \"chart.js\": \"2.9.4\",
        \"datatables.net-bs4\": \"1.10.22\",
        \"jquery\": \"3.5.1\",
        \"jquery.easing\": \"^1.4.1\"
    },
    \"devDependencies\": {
        \"browser-sync\": \"2.26.13\",
        \"del\": \"6.0.0\",
        \"gulp\": \"4.0.2\",
        \"gulp-autoprefixer\": \"7.0.1\",
        \"gulp-clean-css\": \"4.3.0\",
        \"gulp-header\": \"2.0.9\",
        \"gulp-plumber\": \"^1.2.1\",
        \"gulp-rename\": \"2.0.0\",
        \"gulp-sass\": \"4.1.0\",
        \"gulp-uglify\": \"3.0.2\",
        \"merge-stream\": \"2.0.0\"
    }
}
", "backoffice/package.json", "C:\\xampp\\htdocs\\gouader\\templates\\backoffice\\package.json");
    }
}
