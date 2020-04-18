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

/* property/show.html.twig */
class __TwigTemplate_a671ef1d9fcb286802d101a6426958724b568e3ff9ae966885d5cf69b4bf15a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
    <div class=\"jumbotron\">
        <div class=\"container\">

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>           
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
            ";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "valid", [], "any", false, false, false, 16)) {
            // line 17
            echo "                <div class=\"alert alert-danger mb-4\">
                    Erreur, vous n'avez pas correctement rempli le formulaire de contact.
                </div>           
            ";
        }
        // line 21
        echo "
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"slider-slick\">
                        ";
        // line 25
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 25, $this->source); })()), "pictures", [], "any", false, false, false, 25))) {
            // line 26
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/media/properties/360x230.jpg", "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                        ";
        } else {
            // line 28
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 28, $this->source); })()), "pictures", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 29
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["picture"], "imageFile"), "medium"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                        ";
        }
        // line 32
        echo "                    </div>
                </div>
                <div class=\"show-text col-md-4\">
                    <h1>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 35, $this->source); })()), "title", [], "any", false, false, false, 35), "html", null, true);
        echo "</h1>
                    <h3>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 36, $this->source); })()), "rooms", [], "any", false, false, false, 36), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 36, $this->source); })()), "surface", [], "any", false, false, false, 36), "html", null, true);
        echo " m²</h3>
                    <div class=\"propertyPrice\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 37, $this->source); })()), "formatedPrice", [], "any", false, false, false, 37), "html", null, true);
        echo " €</div>
                    <p class=\"mt-2\">";
        // line 38
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), "html", null, true));
        echo "</p>
                    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-primary mt-2\" id=\"contactButton\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "submitted", [], "any", false, false, false, 39)) {
            echo " style=\"display: none\" ";
        }
        echo ">Contacter l'agence</a>
                    <div id=\"contactForm\" class=\"mt-4\" ";
        // line 40
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "vars", [], "any", false, false, false, 40), "submitted", [], "any", false, false, false, 40)) {
            echo " style=\"display: none\" ";
        }
        echo ">
                        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "firstname", [], "any", false, false, false, 43), 'row');
        echo "</div>                                   
                                <div class=\"col\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "lastname", [], "any", false, false, false, 44), 'row');
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "phone", [], "any", false, false, false, 47), 'row');
        echo "</div>                                   
                                <div class=\"col\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'row');
        echo "</div>
                            </div>
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'rest');
        echo "
                        <div class=\"form-group\">
                            <button class=\"btn btn-primary\">Envoyer</button>
                        </div>
                        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                <h2>Caractéristiques</h2>
                <hr>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 69, $this->source); })()), "surface", [], "any", false, false, false, 69), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 73, $this->source); })()), "rooms", [], "any", false, false, false, 73), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 77, $this->source); })()), "bedrooms", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 81, $this->source); })()), "floor", [], "any", false, false, false, 81), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 85, $this->source); })()), "heatType", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            <div class=\"show-options col-md-4\">                          
                <h2>Spécificités</h2>
                <hr>
                <ul class=\"list-group\">
                    ";
        // line 93
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 93, $this->source); })()), "options", [], "any", false, false, false, 93))) {
            // line 94
            echo "                        <p>Aucunes spécificités</p>
                    ";
        } else {
            // line 96
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 96, $this->source); })()), "options", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "                                                 
                            <li class=\"list-group-item\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 97), "html", null, true);
                echo "</li>                                               
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                    ";
        }
        echo "                    
                </ul>
            </div>
        </div>
        <div id=\"map\" style:\"width: 100%; height: 400px;\" data-lat=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context[" property"]) || array_key_exists(" property", $context) ? $context[" property"] : (function () { throw new RuntimeError('Variable " property" does not exist.', 103, $this->source); })()), "lat", [], "any", false, false, false, 103), "html", null, true);
        echo "\" data-lng=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 103, $this->source); })()), "lng", [], "any", false, false, false, 103), "html", null, true);
        echo "\"></div>
    </div>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 103,  298 => 99,  290 => 97,  283 => 96,  279 => 94,  277 => 93,  266 => 85,  259 => 81,  252 => 77,  245 => 73,  238 => 69,  220 => 54,  213 => 50,  208 => 48,  204 => 47,  198 => 44,  194 => 43,  189 => 41,  183 => 40,  175 => 39,  171 => 38,  167 => 37,  161 => 36,  157 => 35,  152 => 32,  149 => 31,  140 => 29,  135 => 28,  129 => 26,  127 => 25,  121 => 21,  115 => 17,  113 => 16,  110 => 15,  101 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}

{% block body %}

    <div class=\"jumbotron\">
        <div class=\"container\">

            {% for message in app.flashes ('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>           
            {% endfor %}

            {% if not form.vars.valid %}
                <div class=\"alert alert-danger mb-4\">
                    Erreur, vous n'avez pas correctement rempli le formulaire de contact.
                </div>           
            {% endif %}

            <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"slider-slick\">
                        {% if property.pictures is empty %}
                            <img src=\"{{ '/media/properties/360x230.jpg' | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                        {% else %}
                            {% for picture in property.pictures %}
                                <img src=\"{{ vich_uploader_asset(picture, 'imageFile') | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
                <div class=\"show-text col-md-4\">
                    <h1>{{ property.title }}</h1>
                    <h3>{{ property.rooms }} pièces - {{ property.surface }} m²</h3>
                    <div class=\"propertyPrice\">{{ property.formatedPrice }} €</div>
                    <p class=\"mt-2\">{{ property.description | nl2br }}</p>
                    <a href=\"{{ path('contact') }}\" class=\"btn btn-primary mt-2\" id=\"contactButton\" {% if form.vars.submitted %} style=\"display: none\" {% endif %}>Contacter l'agence</a>
                    <div id=\"contactForm\" class=\"mt-4\" {% if not form.vars.submitted %} style=\"display: none\" {% endif %}>
                        {{ form_start(form) }}
                            <div class=\"row\">
                                <div class=\"col\">{{ form_row(form.firstname) }}</div>                                   
                                <div class=\"col\">{{ form_row(form.lastname) }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">{{ form_row(form.phone) }}</div>                                   
                                <div class=\"col\">{{ form_row(form.email) }}</div>
                            </div>
                        {{ form_rest(form) }}
                        <div class=\"form-group\">
                            <button class=\"btn btn-primary\">Envoyer</button>
                        </div>
                        {{ form_end(form) }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                <h2>Caractéristiques</h2>
                <hr>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ property.surface }} m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ property.rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ property.bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ property.floor }}</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>{{ property.heatType }}</td>
                    </tr>
                </table>
            </div>
            <div class=\"show-options col-md-4\">                          
                <h2>Spécificités</h2>
                <hr>
                <ul class=\"list-group\">
                    {% if property.options is empty %}
                        <p>Aucunes spécificités</p>
                    {% else %}
                        {% for option in property.options %}                                                 
                            <li class=\"list-group-item\">{{ option.name }}</li>                                               
                        {% endfor %}
                    {% endif %}                    
                </ul>
            </div>
        </div>
        <div id=\"map\" style:\"width: 100%; height: 400px;\" data-lat=\"{{ property.lat }}\" data-lng=\"{{ property.lng }}\"></div>
    </div>   
{% endblock %}

", "property/show.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/property/show.html.twig");
    }
}
