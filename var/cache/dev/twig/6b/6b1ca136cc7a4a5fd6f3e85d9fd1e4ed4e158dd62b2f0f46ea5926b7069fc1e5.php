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

/* property/_property.html.twig */
class __TwigTemplate_bfab775335430fa25395210bf4e7f5b458f7be4bbb935dfbdffa4d784317bb37 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/_property.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/_property.html.twig"));

        // line 1
        echo "<div class=\"card mb-4\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 2, $this->source); })()), "picture", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "picture", [], "any", false, false, false, 3), "imageFile"), "thumb"), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"width: 100%; height: auto;\">  
    ";
        } else {
            // line 5
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/media/properties/360x230.jpg", "thumb"), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"width: 100%; height: auto;\">
    ";
        }
        // line 7
        echo "
    <div class=\"card-body\">
        <h5 class=\"card-title\">
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 10, $this->source); })()), "slug", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
        </h5>
        <p class=\"card-text\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 12, $this->source); })()), "surface", [], "any", false, false, false, 12), "html", null, true);
        echo " m² - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 12, $this->source); })()), "city", [], "any", false, false, false, 12), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 12, $this->source); })()), "postalCode", [], "any", false, false, false, 12), "html", null, true);
        echo ")</p>
        <div class=\"propertyPrice\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 13, $this->source); })()), "formatedPrice", [], "any", false, false, false, 13), "html", null, true);
        echo " €</div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "property/_property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  72 => 12,  65 => 10,  60 => 7,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-4\">
    {% if property.picture %}
        <img src=\"{{ vich_uploader_asset(property.picture, 'imageFile') | imagine_filter('thumb') }}\" class=\"card-img-top\" style=\"width: 100%; height: auto;\">  
    {% else %}
        <img src=\"{{ '/media/properties/360x230.jpg' | imagine_filter('thumb') }}\" class=\"card-img-top\" style=\"width: 100%; height: auto;\">
    {% endif %}

    <div class=\"card-body\">
        <h5 class=\"card-title\">
            <a href=\"{{ path ('property.show', {id: property.id, slug: property.slug}) }}\">{{ property.title }}</a>
        </h5>
        <p class=\"card-text\">{{ property.surface }} m² - {{ property.city }} ({{ property.postalCode }})</p>
        <div class=\"propertyPrice\">{{ property.formatedPrice }} €</div>
    </div>
</div>", "property/_property.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/property/_property.html.twig");
    }
}
