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

/* block/_stylesheets.html.twig */
class __TwigTemplate_28983b25430761463a65d3deeea2686ca7022e00bd36e5c4985ed4c0764dd6c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/_stylesheets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/_stylesheets.html.twig"));

        // line 2
        echo "<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap\" rel=\"stylesheet\">

";
        // line 6
        echo "
";
        // line 8
        echo "<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\" integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\" crossorigin=\"\"/>

";
        // line 11
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick-1.8.1/slick/slick.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick-1.8.1/slick/slick-theme.css"), "html", null, true);
        echo "\"/>

";
        // line 15
        echo "<link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />

";
        // line 18
        echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

";
        // line 21
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "block/_stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  68 => 18,  64 => 15,  59 => 12,  54 => 11,  50 => 8,  47 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Font #}
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap\" rel=\"stylesheet\">

{# <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/reset-min.css\" integrity=\"sha256-t2ATOGCtAIZNnzER679jwcFcKYfLlw01gli6F6oszk8=\" crossorigin=\"anonymous\"> #}
{# <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/algolia-min.css\" integrity=\"sha256-HB49n/BZjuqiCtQQf49OdZn63XuKFaxcIHWf0HNKte8=\" crossorigin=\"anonymous\"> #}

{# MAP #}
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\" integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\" crossorigin=\"\"/>

{# Caroussel #}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('slick-1.8.1/slick/slick.css') }}\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('slick-1.8.1/slick/slick-theme.css') }}\"/>

{# Select2 #}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />

{# Bootstrap #}
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

{# CSS #}
<link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">", "block/_stylesheets.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/block/_stylesheets.html.twig");
    }
}
