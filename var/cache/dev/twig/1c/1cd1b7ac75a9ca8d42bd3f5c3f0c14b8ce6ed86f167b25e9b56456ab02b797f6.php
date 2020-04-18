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

/* property/sold.html.twig */
class __TwigTemplate_d60a097deb7470671a9f0b91afef8f8dfa149a4c419328e0744722247b87eeff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/sold.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/sold.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/sold.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gérer les biens";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"jumbotron jumbotron-properties-index\">
        <div class=\"container mt-3\">
            <h2>Filtrer les biens</h2>
            <hr>
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-row align-items\">
                    <div class=\"col-2\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "minSurface", [], "any", false, false, false, 14), 'row');
        echo "
                    </div>
                    <div class=\"col-2\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "maxPrice", [], "any", false, false, false, 17), 'row');
        echo "
                    </div>
                    <div class=\"col-4\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "options", [], "any", false, false, false, 20), 'row');
        echo "
                    </div>
                    <div class=\"col-7\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "address", [], "any", false, false, false, 23), 'label', ["label" => "Lieu (numéro, rue, ville ...)"]);
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "address", [], "any", false, false, false, 24), 'row', ["id" => "search_address"]);
        echo "
                    </div>
                    <div class=\"col-2\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "distance", [], "any", false, false, false, 27), 'row');
        echo "
                    </div>
                    <div class=\"col-2\">
                        <button type=\"submit\" class=\"submitFilter btn btn-primary\">Rechercher</button>
                    </div>
                </div>
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"container mt-4\">
        <div class=\"title-button-display-flex\">
            <h1>Gérer les biens</h1>
            <div class=\"button-new-property\">
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.new");
        echo "\" class=\"btn btn-primary mb-2\">Créer un nouveau bien</a>
            </div>
        </div>
        <hr>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            echo "            <div class=\"alert alert-success\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        <table class=\"table table-striped\">
            <tbody>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            echo "       
                    <tr>
                        <td>
                            ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["property"], "picture", [], "any", false, false, false, 55)) {
                // line 56
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["property"], "picture", [], "any", false, false, false, 56), "imageFile"), "mini"), "html", null, true);
                echo "\" alt=\"card-img-top\">  
                            ";
            }
            // line 58
            echo "                        </td>
                        <td>
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 60), "slug" => twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 60), "html", null, true);
            echo "</a>
                            <p class=\"card-text\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "surface", [], "any", false, false, false, 61), "html", null, true);
            echo " m² - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "city", [], "any", false, false, false, 61), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "postalCode", [], "any", false, false, false, 61), "html", null, true);
            echo ")</p>
                            <div class=\"propertyPrice\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "formatedPrice", [], "any", false, false, false, 62), "html", null, true);
            echo " €</div>
                        <td style=\"vertical-align: inherit;\">
                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 65), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 65)))]), "html", null, true);
            echo "\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ?')\" class=\"btn btn-danger\">Supprimer</a>
                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 66), "slug" => twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir le bien</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </tbody>
        </table>
        <div class=\"pagination\">
            ";
        // line 73
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 73, $this->source); })()));
        echo "
        </div>

        ";
        // line 96
        echo "
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/sold.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 96,  238 => 73,  233 => 70,  223 => 66,  219 => 65,  215 => 64,  210 => 62,  202 => 61,  196 => 60,  192 => 58,  186 => 56,  184 => 55,  176 => 52,  172 => 50,  163 => 47,  160 => 46,  156 => 45,  149 => 41,  138 => 33,  129 => 27,  123 => 24,  119 => 23,  113 => 20,  107 => 17,  101 => 14,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Gérer les biens' %}

{% block body %}

    <div class=\"jumbotron jumbotron-properties-index\">
        <div class=\"container mt-3\">
            <h2>Filtrer les biens</h2>
            <hr>
            {{ form_start(form) }}
                <div class=\"form-row align-items\">
                    <div class=\"col-2\">
                        {{ form_row(form.minSurface) }}
                    </div>
                    <div class=\"col-2\">
                        {{ form_row(form.maxPrice) }}
                    </div>
                    <div class=\"col-4\">
                        {{ form_row(form.options) }}
                    </div>
                    <div class=\"col-7\">
                        {{ form_label(form.address, 'Lieu (numéro, rue, ville ...)') }}
                        {{ form_row(form.address, {id: 'search_address'}) }}
                    </div>
                    <div class=\"col-2\">
                        {{ form_row(form.distance) }}
                    </div>
                    <div class=\"col-2\">
                        <button type=\"submit\" class=\"submitFilter btn btn-primary\">Rechercher</button>
                    </div>
                </div>
            {{ form_end(form) }}
        </div>
    </div>

    <div class=\"container mt-4\">
        <div class=\"title-button-display-flex\">
            <h1>Gérer les biens</h1>
            <div class=\"button-new-property\">
                <a href=\"{{ path('admin.property.new') }}\" class=\"btn btn-primary mb-2\">Créer un nouveau bien</a>
            </div>
        </div>
        <hr>
        {% for message in app.flashes ('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>           
        {% endfor %}
        <table class=\"table table-striped\">
            <tbody>
                {% for property in properties %}       
                    <tr>
                        <td>
                            {% if property.picture %}
                                <img src=\"{{ vich_uploader_asset(property.picture, 'imageFile') | imagine_filter('mini') }}\" alt=\"card-img-top\">  
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path ('property.show', {id: property.id, slug: property.slug}) }}\">{{ property.title }}</a>
                            <p class=\"card-text\">{{ property.surface }} m² - {{ property.city }} ({{ property.postalCode }})</p>
                            <div class=\"propertyPrice\">{{ property.formatedPrice }} €</div>
                        <td style=\"vertical-align: inherit;\">
                            <a href=\"{{ path('admin.property.edit', {id: property.id}) }}\" class=\"btn btn-secondary\">Editer</a>
                            <a href=\"{{ path('admin.property.delete', {id: property.id, _token: csrf_token ( 'delete' ~ property.id )}) }}\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ?')\" class=\"btn btn-danger\">Supprimer</a>
                            <a href=\"{{ path('property.show', {id: property.id, slug: property.slug}) }}\" class=\"btn btn-primary\">Voir le bien</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        <div class=\"pagination\">
            {{ knp_pagination_render(properties) }}
        </div>

        {# <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for property in properties %}               
                    <tr>
                        <td>{{ property.title }}</td>
                        <td>
                            <a href=\"{{ path('admin.property.edit', {id: property.id}) }}\" class=\"btn btn-secondary\">Editer</a>
                            <a href=\"{{ path('admin.property.delete', {id: property.id, _token: csrf_token ( 'delete' ~ property.id )}) }}\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ?')\" class=\"btn btn-danger\">Supprimer</a>
                            <a href=\"{{ path ('property.show', {id: property.id, slug: property.slug}) }}\" class=\"btn btn-primary\">Voir le bien</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table> #}

    </div>
    
{% endblock %}

", "property/sold.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/property/sold.html.twig");
    }
}
