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

/* block/_header.html.twig */
class __TwigTemplate_81692b9cc8d8deabeb25852d08defb4a9acca4b6aeba931ff4afa4913a09e29a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/_header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"logo\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo.jpg"), "html", null, true);
        echo "\"></a>
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Agence Immo</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link ";
        // line 10
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 10, $this->source); })()), "properties"))) {
            echo "active";
        }
        echo "\" 
                href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.index");
        echo "\">Acheter <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link ";
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 14, $this->source); })()), "contact"))) {
            echo "active";
        }
        echo "\">Contact</a>
            </li>  
        </ul>        
        <ul class=\"nav navbar-nav navbar-right\">               
            ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                <div class=\"navbar-nav\">
                    <div class=\"li nav-item\">
                        <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.index");
            echo "\" class=\"nav-link ";
            if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 21, $this->source); })()), "admin"))) {
                echo "active";
            }
            echo "\">Espace Admin</a>
                    </div>
                    <div class=\"li nav-item\">
                        <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link pull-right\">Se déconnecter</a>
                    </div>                       
                </div>
            ";
        } else {
            // line 28
            echo "                <li class=\"nav-item ml-auto\">
                    <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link ";
            if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 29, $this->source); })()), "login"))) {
                echo "active";
            }
            echo "\">Se connecter</a>
                </li>
            ";
        }
        // line 31
        echo "               
        </ul>               
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "block/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  111 => 29,  108 => 28,  101 => 24,  91 => 21,  87 => 19,  85 => 18,  74 => 14,  68 => 11,  62 => 10,  52 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"logo\" href=\"{{ path('home') }}\"><img src=\"{{ asset('media/logo.jpg') }}\"></a>
    <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Agence Immo</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link {% if current_menu is defined and current_menu == 'properties' %}active{% endif %}\" 
                href=\"{{ path('property.index') }}\">Acheter <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a href=\"{{ path('contact') }}\" class=\"nav-link {% if current_menu is defined and current_menu == 'contact' %}active{% endif %}\">Contact</a>
            </li>  
        </ul>        
        <ul class=\"nav navbar-nav navbar-right\">               
            {% if app.user %}
                <div class=\"navbar-nav\">
                    <div class=\"li nav-item\">
                        <a href=\"{{ path('admin.property.index') }}\" class=\"nav-link {% if current_menu is defined and current_menu == 'admin' %}active{% endif %}\">Espace Admin</a>
                    </div>
                    <div class=\"li nav-item\">
                        <a href=\"{{ path('logout') }}\" class=\"nav-link pull-right\">Se déconnecter</a>
                    </div>                       
                </div>
            {% else %}
                <li class=\"nav-item ml-auto\">
                    <a href=\"{{ path('login') }}\" class=\"nav-link {% if current_menu is defined and current_menu == 'login' %}active{% endif %}\">Se connecter</a>
                </li>
            {% endif %}               
        </ul>               
    </div>
</nav>
", "block/_header.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/block/_header.html.twig");
    }
}
