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

/* materiel/index.html.twig */
class __TwigTemplate_420a5ea5ce2f35f121314d70781246d6 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Matériels";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container mt-4\">
    <table id=\"materielTable\" class=\"display\">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix HT</th>
            <th>TVA</th>
            <th>Prix TTC</th>
            <th>Quantité</th>
            <th>Voir</th>
            <th>Modifier</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) || array_key_exists("materiels", $context) ? $context["materiels"] : (function () { throw new RuntimeError('Variable "materiels" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 22
            echo "            <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "prixHt", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "tva", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "prixTtc", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td>
                <!-- Bouton Voir -->
                <button class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#modal";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">Voir</button>
                <div class=\"modal fade\" id=\"modal";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"modalLabel";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">Détails du produit</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                <p>ID: ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                                <p>Nom: ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                                <p>Prix HT: ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "prixHt", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                                <p>TVA: ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "tva", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                                <p>Prix TTC: ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "prixTtc", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                                <p>Quantité: ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                                <p>Date de création: ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "dateDeCreation", [], "any", false, false, false, 48), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Modifier</a>
            </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
    


    <script>
        \$(document).ready(function() {
            \$('#materielTable').DataTable();
        });
    </script>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "materiel/index.html.twig";
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
        return array (  189 => 59,  179 => 55,  169 => 48,  165 => 47,  161 => 46,  157 => 45,  153 => 44,  149 => 43,  145 => 42,  136 => 36,  127 => 32,  123 => 31,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  94 => 22,  90 => 21,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Matériels{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
    <table id=\"materielTable\" class=\"display\">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix HT</th>
            <th>TVA</th>
            <th>Prix TTC</th>
            <th>Quantité</th>
            <th>Voir</th>
            <th>Modifier</th>
        </tr>
        </thead>
        <tbody>
        {% for materiel in materiels %}
            <tr>
            <td>{{ materiel.id }}</td>
            <td>{{ materiel.nom }}</td>
            <td>{{ materiel.prixHt }}</td>
            <td>{{ materiel.tva }}</td>
            <td>{{ materiel.prixTtc }}</td>
            <td>{{ materiel.quantite }}</td>
            <td>
                <!-- Bouton Voir -->
                <button class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#modal{{ materiel.id }}\">Voir</button>
                <div class=\"modal fade\" id=\"modal{{ materiel.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel{{ materiel.id }}\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"modalLabel{{ materiel.id }}\">Détails du produit</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                <p>ID: {{ materiel.id }}</p>
                                <p>Nom: {{ materiel.nom }}</p>
                                <p>Prix HT: {{ materiel.prixHt }}</p>
                                <p>TVA: {{ materiel.tva }}</p>
                                <p>Prix TTC: {{ materiel.prixTtc }}</p>
                                <p>Quantité: {{ materiel.quantite }}</p>
                                <p>Date de création: {{ materiel.dateDeCreation|date('Y-m-d H:i:s') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <a href=\"{{ path('materiel_edit', {'id': materiel.id}) }}\" class=\"btn btn-primary btn-sm\">Modifier</a>
            </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    


    <script>
        \$(document).ready(function() {
            \$('#materielTable').DataTable();
        });
    </script>

    </div>
{% endblock %}

", "materiel/index.html.twig", "C:\\xampp\\htdocs\\projet\\templates\\materiel\\index.html.twig");
    }
}
