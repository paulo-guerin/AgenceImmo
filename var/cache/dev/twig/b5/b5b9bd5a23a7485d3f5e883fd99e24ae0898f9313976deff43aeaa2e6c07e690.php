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

/* property/_property-list.html.twig */
class __TwigTemplate_d18f1c3a2c245d7847e82a215ea51d8ada9b53b5a69afa5660d20bbe861a472b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/_property-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/_property-list.html.twig"));

        // line 1
        echo "<table class=\"table table-striped\">
    <tbody>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            echo "       
            <tr>
                <td>
                    ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["property"], "picture", [], "any", false, false, false, 6)) {
                // line 7
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["property"], "picture", [], "any", false, false, false, 7), "imageFile"), "mini"), "html", null, true);
                echo "\" class=\"card-img-top\">  
                    ";
            } else {
                // line 9
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/media/properties/180x115.jpg", "mini"), "html", null, true);
                echo "\" class=\"card-img-top\" >
                    ";
            }
            // line 11
            echo "                </td>
                <td>
                    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 13), "slug" => twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</a>
                    <p class=\"card-text\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "surface", [], "any", false, false, false, 14), "html", null, true);
            echo " m² - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "city", [], "any", false, false, false, 14), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "postalCode", [], "any", false, false, false, 14), "html", null, true);
            echo ")</p>
                    <div class=\"propertyPrice\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "formatedPrice", [], "any", false, false, false, 15), "html", null, true);
            echo " €</div>
                <td style=\"vertical-align: inherit;\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 17), "slug" => twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir le bien</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "property/_property-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  92 => 17,  87 => 15,  79 => 14,  73 => 13,  69 => 11,  63 => 9,  57 => 7,  55 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-striped\">
    <tbody>
        {% for property in properties %}       
            <tr>
                <td>
                    {% if property.picture %}
                        <img src=\"{{ vich_uploader_asset(property.picture, 'imageFile') | imagine_filter('mini') }}\" class=\"card-img-top\">  
                    {% else %}
                        <img src=\"{{ '/media/properties/180x115.jpg' | imagine_filter('mini') }}\" class=\"card-img-top\" >
                    {% endif %}
                </td>
                <td>
                    <a href=\"{{ path ('property.show', {id: property.id, slug: property.slug}) }}\">{{ property.title }}</a>
                    <p class=\"card-text\">{{ property.surface }} m² - {{ property.city }} ({{ property.postalCode }})</p>
                    <div class=\"propertyPrice\">{{ property.formatedPrice }} €</div>
                <td style=\"vertical-align: inherit;\">
                    <a href=\"{{ path ('property.show', {id: property.id, slug: property.slug}) }}\" class=\"btn btn-primary\">Voir le bien</a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "property/_property-list.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/property/_property-list.html.twig");
    }
}
