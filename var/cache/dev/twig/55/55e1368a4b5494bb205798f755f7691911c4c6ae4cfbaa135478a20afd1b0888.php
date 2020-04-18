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

/* Admin/property/index.html.twig */
class __TwigTemplate_024f91328e624bb571bd7cd1f521ff104c9672db2dbe011ba78c58fb41c5259e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/property/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/property/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/property/index.html.twig", 1);
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
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        // line 7
        echo "
    <div class=\"jumbotron jumbotron-properties-index\">
        <div class=\"container mt-3\">
            <h2>Filtrer les biens</h2>
            <hr>
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-row\">
                    <div class=\"col-2\">
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "minSurface", [], "any", false, false, false, 15), 'row');
        echo "
                    </div>
                    <div class=\"col-2\">
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "maxPrice", [], "any", false, false, false, 18), 'row');
        echo "
                    </div>
                    <div class=\"col-4\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "options", [], "any", false, false, false, 21), 'row');
        echo "
                    </div>
                    <div class=\"col-7\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "address", [], "any", false, false, false, 24), 'label', ["label" => "Lieu (numéro, rue, ville ...)"]);
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "address", [], "any", false, false, false, 25), 'row', ["id" => "search_address"]);
        echo "
                    </div>
                    <div class=\"col-2\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "distance", [], "any", false, false, false, 28), 'row');
        echo "
                    </div>
                    <div class=\"col-2\">
                        <button type=\"submit\" class=\"submitFilter btn btn-primary\">Rechercher</button>
                    </div>
                </div>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"container mt-4\">

        <div class=\"row\">
            <div class=\"col-6\">
                <h2>Gérer les biens</h2>
            </div>
            <div class=\"col-6 text-right align-self-center\">
                <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.option.index");
        echo "\" class=\"btn btn-primary mb-2\">Gérer les options</a>
                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.new");
        echo "\" class=\"btn btn-primary mb-2\">Créer un nouveau bien</a>
            </div>
        </div>
        <hr style=\"margin-top: inherit\">

        <table class=\"table table-striped\">
            <tbody>                           
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            echo "       
                    <tr>
                        <td>
                            ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["property"], "picture", [], "any", false, false, false, 56)) {
                // line 57
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["property"], "picture", [], "any", false, false, false, 57), "imageFile"), "mini"), "html", null, true);
                echo "\" class=\"card-img-top\">  
                            ";
            }
            // line 59
            echo "                        </td>
                        <td>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 61), "slug" => twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 61), "html", null, true);
            echo "</a>
                            <p class=\"card-text\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "surface", [], "any", false, false, false, 62), "html", null, true);
            echo " m² - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "city", [], "any", false, false, false, 62), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "postalCode", [], "any", false, false, false, 62), "html", null, true);
            echo ")</p>
                            <div class=\"propertyPrice\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "formatedPrice", [], "any", false, false, false, 63), "html", null, true);
            echo " €</div>
                        <td style=\"vertical-align: inherit;\">
                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 66), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 66)))]), "html", null, true);
            echo "\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ?')\" class=\"btn btn-danger\">Supprimer</a>
                            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 67), "slug" => twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir le bien</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tbody>
        </table>

        <div class=\"pagination\">
            ";
        // line 75
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 75, $this->source); })()));
        echo "
        </div>

    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/property/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 82,  232 => 75,  226 => 71,  216 => 67,  212 => 66,  208 => 65,  203 => 63,  195 => 62,  189 => 61,  185 => 59,  179 => 57,  177 => 56,  169 => 53,  159 => 46,  155 => 45,  141 => 34,  132 => 28,  126 => 25,  122 => 24,  116 => 21,  110 => 18,  104 => 15,  98 => 12,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Gérer les biens' %}

{% block main %}
    {# {{ include('block/_flash_messages_form.html.twig') }} #}

    <div class=\"jumbotron jumbotron-properties-index\">
        <div class=\"container mt-3\">
            <h2>Filtrer les biens</h2>
            <hr>
            {{ form_start(form) }}
                <div class=\"form-row\">
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

        <div class=\"row\">
            <div class=\"col-6\">
                <h2>Gérer les biens</h2>
            </div>
            <div class=\"col-6 text-right align-self-center\">
                <a href=\"{{ path('admin.option.index') }}\" class=\"btn btn-primary mb-2\">Gérer les options</a>
                <a href=\"{{ path('admin.property.new') }}\" class=\"btn btn-primary mb-2\">Créer un nouveau bien</a>
            </div>
        </div>
        <hr style=\"margin-top: inherit\">

        <table class=\"table table-striped\">
            <tbody>                           
                {% for property in properties %}       
                    <tr>
                        <td>
                            {% if property.picture %}
                                <img src=\"{{ vich_uploader_asset(property.picture, 'imageFile') | imagine_filter('mini') }}\" class=\"card-img-top\">  
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path('property.show', {id: property.id, slug: property.slug}) }}\">{{ property.title }}</a>
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

    </div>
    
{% endblock %}

{% block footer %}{% endblock %}

", "Admin/property/index.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/Admin/property/index.html.twig");
    }
}
