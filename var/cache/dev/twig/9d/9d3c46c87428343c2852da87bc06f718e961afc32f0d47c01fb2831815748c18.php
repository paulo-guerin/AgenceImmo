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

/* block/_flash_messages_contactForm.html.twig */
class __TwigTemplate_b6b62782549dec9b271bb177b57a5885ba2a8da2e822a167cffe52768bd81548 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/_flash_messages_contactForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/_flash_messages_contactForm.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "    <div class=\"alert alert-success\" style=\"margin-bottom: inherit;\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>           
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
        // line 7
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "valid", [], "any", false, false, false, 7)) {
            // line 8
            echo "    <div class=\"alert alert-danger\" style=\"margin-bottom: inherit;\">
        Erreur, vous n'avez pas correctement rempli le formulaire de contact.
    </div>           
";
        }
        // line 12
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "block/_flash_messages_contactForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  64 => 8,  62 => 7,  59 => 6,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for message in app.flashes ('success') %}
    <div class=\"alert alert-success\" style=\"margin-bottom: inherit;\">
        {{ message }}
    </div>           
{% endfor %}

{% if not contactForm.vars.valid %}
    <div class=\"alert alert-danger\" style=\"margin-bottom: inherit;\">
        Erreur, vous n'avez pas correctement rempli le formulaire de contact.
    </div>           
{% endif %}



", "block/_flash_messages_contactForm.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/block/_flash_messages_contactForm.html.twig");
    }
}
