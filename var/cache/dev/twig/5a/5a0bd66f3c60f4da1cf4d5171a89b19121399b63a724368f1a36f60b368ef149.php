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

/* base.html.twig */
class __TwigTemplate_ba706250a1f721067a08c946e8e958a876d9975d45f814fbddbec61b6e64b917 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick-1.8.1/slick/slick-theme.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick-1.8.1/slick/slick.css"), "html", null, true);
        echo "\"/>

        ";
        // line 13
        echo "        ";
        // line 15
        echo "

        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"logo\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/logo.jpg"), "html", null, true);
        echo "\"></a>
        <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Agence Immo</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 29
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 29, $this->source); })()), "properties"))) {
            echo "active";
        }
        echo "\" 
                    href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.index");
        echo "\">Acheter <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link ";
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 33, $this->source); })()), "contact"))) {
            echo "active";
        }
        echo "\">Contact</a>
                </li>  
            </ul>        
            <ul class=\"nav navbar-nav navbar-right\">               
                ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
            // line 38
            echo "                    <div class=\"navbar-nav\">
                        <div class=\"li nav-item\">
                            <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.property.index");
            echo "\" class=\"nav-link ";
            if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 40, $this->source); })()), "admin"))) {
                echo "active";
            }
            echo "\">Espace Admin</a>
                        </div>
                        <div class=\"li nav-item\">
                            <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link pull-right\">Se déconnecter</a>
                        </div>                       
                    </div>
                ";
        } else {
            // line 47
            echo "                    <li class=\"nav-item ml-auto\">
                        <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link ";
            if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && 0 === twig_compare((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 48, $this->source); })()), "login"))) {
                echo "active";
            }
            echo "\">Se connecter</a>
                    </li>
                ";
        }
        // line 50
        echo "               
            </ul>               
        </div>
    </nav>
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>           
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js\"></script>
        ";
        // line 61
        echo "
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick-1.8.1/slick/slick.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"https://cdn.jsdelivr.net/npm/places.js@1.18.1\"></script>
        ";
        // line 69
        echo "
        <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\"></script>

        ";
        // line 73
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>

            
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AgenceImmo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 54,  205 => 5,  189 => 74,  186 => 73,  181 => 69,  175 => 64,  170 => 61,  163 => 55,  161 => 54,  155 => 50,  145 => 48,  142 => 47,  135 => 43,  125 => 40,  121 => 38,  119 => 37,  108 => 33,  102 => 30,  96 => 29,  86 => 22,  80 => 21,  73 => 17,  69 => 15,  67 => 13,  62 => 10,  58 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}AgenceImmo{% endblock %}</title>
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('slick-1.8.1/slick/slick-theme.css') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('slick-1.8.1/slick/slick.css') }}\"/>

        {# {% block stylesheets %}<link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">{% endblock %}         #}
        {# <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/reset-min.css\" integrity=\"sha256-t2ATOGCtAIZNnzER679jwcFcKYfLlw01gli6F6oszk8=\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/algolia-min.css\" integrity=\"sha256-HB49n/BZjuqiCtQQf49OdZn63XuKFaxcIHWf0HNKte8=\" crossorigin=\"anonymous\"> #}


        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
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
        {% block body %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>           
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js\"></script>
        {# <script>\$('select').select2();</script> #}

        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('slick-1.8.1/slick/slick.min.js') }}\"></script>

        <script src=\"https://cdn.jsdelivr.net/npm/places.js@1.18.1\"></script>
        {# <script src=\"https://cdn.jsdelivr.net/npm/algoliasearch@4.0.0/dist/algoliasearch-lite.umd.js\" integrity=\"sha256-MfeKq2Aw9VAkaE9Caes2NOxQf6vUa8Av0JqcUXUGkd0=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/instantsearch.js@4.0.0/dist/instantsearch.production.min.js\" integrity=\"sha256-6S7q0JJs/Kx4kb/fv0oMjS855QTz5Rc2hh9AkIUjUsk=\" crossorigin=\"anonymous\"></script> #}

        <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\"></script>

        {# <script src=\"{{ asset('build/app.js') }}\"></script>       #}

        <script type=\"text/javascript\" src=\"{{ asset('js/script.js') }}\"></script>

            
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/base.html.twig");
    }
}
