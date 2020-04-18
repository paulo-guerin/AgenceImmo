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
class __TwigTemplate_66fd6bcca4bde631935c34b26c4ff71147aa299e15de53ef0e717397d4247206 extends Template
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
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "block/_flash_messages_form.html.twig");
        echo "

    <div class=\"jumbotron\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"slider-slick\">
                        ";
        // line 14
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 14, $this->source); })()), "pictures", [], "any", false, false, false, 14))) {
            // line 15
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/media/properties/360x230.jpg", "medium"), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"width: 100%;\">
                        ";
        } else {
            // line 17
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 17, $this->source); })()), "pictures", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 18
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["picture"], "imageFile"), "medium"), "html", null, true);
                echo "\" class=\"card-img-top\" style=\"width: 100%;\">                           
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                        ";
        }
        // line 21
        echo "                    </div>
                </div>
                <div class=\"show-text col-md-4\">
                    <h2>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h2>
                    <h3>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 25, $this->source); })()), "rooms", [], "any", false, false, false, 25), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 25, $this->source); })()), "surface", [], "any", false, false, false, 25), "html", null, true);
        echo " m²</h3>
                    <div class=\"propertyPrice\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 26, $this->source); })()), "formatedPrice", [], "any", false, false, false, 26), "html", null, true);
        echo " €</div>
                    <p class=\"mt-2\">";
        // line 27
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true));
        echo "</p>
                    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-primary mt-2\" id=\"contactButton\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "submitted", [], "any", false, false, false, 28)) {
            echo " 
                    style=\"display: none\" ";
        }
        // line 29
        echo ">Contacter l'agence</a>

                    ";
        // line 32
        echo "                    <div id=\"contactForm\" class=\"mt-4\" ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "submitted", [], "any", false, false, false, 32)) {
            echo " style=\"display: none\" ";
        }
        echo ">
                        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "firstname", [], "any", false, false, false, 35), 'row');
        echo "</div>                                   
                                <div class=\"col\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "lastname", [], "any", false, false, false, 36), 'row');
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "phone", [], "any", false, false, false, 39), 'row');
        echo "</div>                                   
                                <div class=\"col\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'row');
        echo "</div>
                            </div>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'rest');
        echo "
                        <div class=\"form-group\">
                            <button class=\"btn btn-primary\">Envoyer</button>
                        </div>
                        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
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
                        <td>Adresse</td>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 61, $this->source); })()), "address", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 65, $this->source); })()), "surface", [], "any", false, false, false, 65), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 69, $this->source); })()), "rooms", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 73, $this->source); })()), "bedrooms", [], "any", false, false, false, 73), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 77, $this->source); })()), "floor", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            <div class=\"show-options col-md-4\">                          
                <h2>Spécificités</h2>
                <hr>
                <ul class=\"list-group\">
                    ";
        // line 85
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 85, $this->source); })()), "options", [], "any", false, false, false, 85))) {
            // line 86
            echo "                        <p>Aucunes spécificités</p>
                    ";
        } else {
            // line 88
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 88, $this->source); })()), "options", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "                                                 
                            <li class=\"list-group-item\">";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 89), "html", null, true);
                echo "</li>                                               
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    ";
        }
        echo "                    
                </ul>
            </div>
        </div>
        <div id=\"map\" style=\"width: 100%; height: 400px; margin-top: 4em; margin-bottom: 4em;\" data-lat=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 95, $this->source); })()), "lat", [], "any", false, false, false, 95), "html", null, true);
        echo "\" data-lng=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 95, $this->source); })()), "lng", [], "any", false, false, false, 95), "html", null, true);
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
        return array (  283 => 95,  275 => 91,  267 => 89,  260 => 88,  256 => 86,  254 => 85,  243 => 77,  236 => 73,  229 => 69,  222 => 65,  215 => 61,  197 => 46,  190 => 42,  185 => 40,  181 => 39,  175 => 36,  171 => 35,  166 => 33,  159 => 32,  155 => 29,  148 => 28,  144 => 27,  140 => 26,  134 => 25,  130 => 24,  125 => 21,  122 => 20,  113 => 18,  108 => 17,  102 => 15,  100 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}

{% block main %}
    {{ include('block/_flash_messages_form.html.twig') }}

    <div class=\"jumbotron\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"slider-slick\">
                        {% if property.pictures is empty %}
                            <img src=\"{{ '/media/properties/360x230.jpg' | imagine_filter('medium') }}\" class=\"card-img-top\" style=\"width: 100%;\">
                        {% else %}
                            {% for picture in property.pictures %}
                                <img src=\"{{ vich_uploader_asset(picture, 'imageFile') | imagine_filter('medium') }}\" class=\"card-img-top\" style=\"width: 100%;\">                           
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
                <div class=\"show-text col-md-4\">
                    <h2>{{ property.title }}</h2>
                    <h3>{{ property.rooms }} pièces - {{ property.surface }} m²</h3>
                    <div class=\"propertyPrice\">{{ property.formatedPrice }} €</div>
                    <p class=\"mt-2\">{{ property.description | nl2br }}</p>
                    <a href=\"{{ path('contact') }}\" class=\"btn btn-primary mt-2\" id=\"contactButton\" {% if form.vars.submitted %} 
                    style=\"display: none\" {% endif %}>Contacter l'agence</a>

                    {# Formulaire de contact #}
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
                        <td>Adresse</td>
                        <td>{{ property.address }}</td>
                    </tr>
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
        <div id=\"map\" style=\"width: 100%; height: 400px; margin-top: 4em; margin-bottom: 4em;\" data-lat=\"{{ property.lat }}\" data-lng=\"{{ property.lng }}\"></div>
    </div>   
{% endblock %}

", "property/show.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/property/show.html.twig");
    }
}
