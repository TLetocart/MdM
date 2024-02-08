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

/* materiel/edit.html.twig */
class __TwigTemplate_46525241c680cfdaa2d9aa5035ea0271 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/edit.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier le matériel";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container mt-4\">
        <h1>Modifier le matériel</h1>

        <form id=\"materiel_form\" ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'label', ["label" => "Nom"]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prix_ht", [], "any", false, false, false, 17), 'label', ["label" => "Prix HT"]);
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prix_ht", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "id" => "prix_ht"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "TVA", [], "any", false, false, false, 21), 'label', ["label" => "TVA"]);
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "TVA", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "id" => "tva"]]);
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prix_ht", [], "any", false, false, false, 25), 'label', ["label" => "Prix TTC"]);
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prix_ttc", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "id" => "prix_ttc"]]);
        echo "

            </div>
            <div class=\"form-group\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prix_ht", [], "any", false, false, false, 30), 'label', ["label" => "Quantité"]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "quantite", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
        // Fonction pour mettre à jour le prix HT en fonction du prix TTC
        function updatePrixHT() {
            var prixTTC = parseFloat(document.getElementById('materiel_prix_ttc').value);
            var TVA = parseFloat(document.getElementById('materiel_TVA').value);
            var prixHT = prixTTC / (1 + TVA);
            document.getElementById('materiel_prix_ht').value = prixHT.toFixed(2);
        }

        // Événement pour mettre à jour le prix TTC lorsqu'on change la valeur du prix HT
        document.getElementById('materiel_prix_ht').addEventListener('input', function() {
            var prixHT = parseFloat(this.value);
            var TVA = parseFloat(document.getElementById('materiel_TVA').value);
            var prixTTC = prixHT * (1 + TVA);
            document.getElementById('materiel_prix_ttc').value = prixTTC.toFixed(2);
        });

        // Événement pour mettre à jour le prix HT lorsqu'on change la valeur du prix TTC
        document.getElementById('materiel_prix_ttc').addEventListener('input', function() {
            updatePrixHT();
        });

        // Événement pour mettre à jour les prix HT et TTC lorsqu'on change la valeur de la TVA
        document.getElementById('materiel_TVA').addEventListener('input', function() {
            updatePrixHT();
            // Appeler également la fonction pour mettre à jour le prix TTC
            // puisque la TVA a changé et les prix TTC doivent être recalculés
            var prixHT = parseFloat(document.getElementById('materiel_prix_ht').value);
            var TVA = parseFloat(this.value);
            var prixTTC = prixHT * (1 + TVA);
            document.getElementById('materiel_prix_ttc').value = prixTTC.toFixed(2);
        });

        // Appel initial pour mettre à jour les prix HT et TTC au chargement de la page
        updatePrixHT();
    });

    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "materiel/edit.html.twig";
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
        return array (  134 => 34,  128 => 31,  124 => 30,  117 => 26,  113 => 25,  107 => 22,  103 => 21,  97 => 18,  93 => 17,  87 => 14,  83 => 13,  78 => 11,  73 => 8,  66 => 7,  53 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/materiel/edit.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Modifier le matériel{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Modifier le matériel</h1>

        <form id=\"materiel_form\" {{ form_start(form) }}
            <div class=\"form-group\">
                {{ form_label(form.nom, 'Nom') }}
                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.prix_ht, 'Prix HT') }}
                {{ form_widget(form.prix_ht, {'attr': {'class': 'form-control', 'id': 'prix_ht'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.TVA, 'TVA') }}
                {{ form_widget(form.TVA, {'attr': {'class': 'form-control', 'id': 'tva'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.prix_ht, 'Prix TTC') }}
                {{ form_widget(form.prix_ttc, {'attr': {'class': 'form-control', 'id': 'prix_ttc'}}) }}

            </div>
            <div class=\"form-group\">
                {{ form_label(form.prix_ht, 'Quantité') }}
                {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
        {{ form_end(form) }}
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
        // Fonction pour mettre à jour le prix HT en fonction du prix TTC
        function updatePrixHT() {
            var prixTTC = parseFloat(document.getElementById('materiel_prix_ttc').value);
            var TVA = parseFloat(document.getElementById('materiel_TVA').value);
            var prixHT = prixTTC / (1 + TVA);
            document.getElementById('materiel_prix_ht').value = prixHT.toFixed(2);
        }

        // Événement pour mettre à jour le prix TTC lorsqu'on change la valeur du prix HT
        document.getElementById('materiel_prix_ht').addEventListener('input', function() {
            var prixHT = parseFloat(this.value);
            var TVA = parseFloat(document.getElementById('materiel_TVA').value);
            var prixTTC = prixHT * (1 + TVA);
            document.getElementById('materiel_prix_ttc').value = prixTTC.toFixed(2);
        });

        // Événement pour mettre à jour le prix HT lorsqu'on change la valeur du prix TTC
        document.getElementById('materiel_prix_ttc').addEventListener('input', function() {
            updatePrixHT();
        });

        // Événement pour mettre à jour les prix HT et TTC lorsqu'on change la valeur de la TVA
        document.getElementById('materiel_TVA').addEventListener('input', function() {
            updatePrixHT();
            // Appeler également la fonction pour mettre à jour le prix TTC
            // puisque la TVA a changé et les prix TTC doivent être recalculés
            var prixHT = parseFloat(document.getElementById('materiel_prix_ht').value);
            var TVA = parseFloat(this.value);
            var prixTTC = prixHT * (1 + TVA);
            document.getElementById('materiel_prix_ttc').value = prixTTC.toFixed(2);
        });

        // Appel initial pour mettre à jour les prix HT et TTC au chargement de la page
        updatePrixHT();
    });

    </script>

{% endblock %}
", "materiel/edit.html.twig", "C:\\xampp\\htdocs\\projet\\templates\\materiel\\edit.html.twig");
    }
}
