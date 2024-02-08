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

/* base.html.twig */
class __TwigTemplate_5abd75efb90f2fb1f3653ea27c33009e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>

        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </head>

    <body>
        ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "        
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue!
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/cerulean/bootstrap.min.css\" integrity=\"sha512-EKyrNi3+szgGslyi2kYzcYLwnBSt4XrnamWGiclaRkqsriEl+e4EmyNFAN/LoVXV8ESLxAQ7/cFfrX4rML0h2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css\">
            <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js\"></script>

            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
            <script src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js\"></script>

           ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "            ";
        $this->loadTemplate("header.html.twig", "base.html.twig", 27)->display($context);
        // line 28
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  160 => 31,  153 => 30,  146 => 28,  143 => 27,  136 => 26,  122 => 15,  115 => 14,  108 => 12,  101 => 11,  87 => 6,  78 => 32,  76 => 30,  73 => 29,  71 => 26,  66 => 23,  64 => 14,  61 => 13,  59 => 11,  54 => 8,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            {% block title %}Bienvenue!
            {% endblock %}
        </title>

        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/cerulean/bootstrap.min.css\" integrity=\"sha512-EKyrNi3+szgGslyi2kYzcYLwnBSt4XrnamWGiclaRkqsriEl+e4EmyNFAN/LoVXV8ESLxAQ7/cFfrX4rML0h2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />        {% endblock %}
  
        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css\">
            <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js\"></script>

            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
            <script src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js\"></script>

           {% endblock %}
    </head>

    <body>
        {% block header %}
            {% include \"header.html.twig\" %}
        {% endblock %}
        
        {% block body %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\projet\\templates\\base.html.twig");
    }
}
