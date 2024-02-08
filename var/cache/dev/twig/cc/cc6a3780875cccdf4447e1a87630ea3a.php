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

/* header.html.twig */
class __TwigTemplate_35d490cde5d1e3d2aa8205232a9e9682 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 2
        echo "
<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MdM</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\">Accueil
                        <span class=\"visually-hidden\">(current)</span>
                    </a>
                </li>
                <li>
                    <a class=\"nav-link active\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel");
        echo "\">Config
                        <span class=\"visually-hidden\">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  60 => 17,  52 => 12,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# NavBar #}

<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MdM</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"{{ path('home.index')}}\">Accueil
                        <span class=\"visually-hidden\">(current)</span>
                    </a>
                </li>
                <li>
                    <a class=\"nav-link active\" href=\"{{ path('app_materiel')}}\">Config
                        <span class=\"visually-hidden\">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
", "header.html.twig", "C:\\xampp\\htdocs\\projet\\templates\\header.html.twig");
    }
}
