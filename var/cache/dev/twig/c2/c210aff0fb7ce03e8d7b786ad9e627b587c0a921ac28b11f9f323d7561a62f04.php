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

/* property/index.html.twig */
class __TwigTemplate_707a422dbc4655b685d0c79fc79736653a44c90d6f1ef07ceeea063c8c48cc8e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/index.html.twig", 1);
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

        echo "Tous nos biens";
        
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
        echo "
    <div class=\"jumbotron jumbotron-properties-index\">
        <div class=\"container\">
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
                </div>
                <div class=\"form-row align-items\">
                    <div class=\"col-md-7\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "address", [], "any", false, false, false, 25), 'label', ["label" => "Lieu (numéro, rue, ville ...)"]);
        echo "
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "address", [], "any", false, false, false, 26), 'row', ["id" => "search_address"]);
        echo "
                    </div>
                    <div class=\"col-2\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "distance", [], "any", false, false, false, 29), 'row');
        echo "
                    </div>
                    <div class=\"col-2\">
                        <button type=\"submit\" class=\"submitFilter btn btn-primary\">Rechercher</button>
                    </div>
                </div>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"container mt-4\">

        <div class=\"row\">
            <div class=\"col-md-10 align-self-center\">
                <h2>Voir tous nos biens</h2>
            </div>
            <div class=\"col-md-2\">
                    <button type=\"submit\" class=\"grid btn btn-light\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/grid.png"), "html", null, true);
        echo "\">Grille</button>               
                    <button type=\"submit\" class=\"list btn btn-light\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/list.png"), "html", null, true);
        echo "\">Liste</button>            
            </div>
        </div>
        <hr>

        <div class=\"grid-index\">
            <div class=\"row\">
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 54, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 55
            echo "                    <div class=\"col-md-4\">
                        ";
            // line 56
            $this->loadTemplate("property/_property-grid.html.twig", "property/index.html.twig", 56)->display($context);
            // line 57
            echo "                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </div>  
        </div>

        <div class=\"list-index\" style=\"display: none\">
            <div class=\"row\">
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 64, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 65
            echo "                    <div class=\"col\">
                        ";
            // line 66
            $this->loadTemplate("property/_property-list.html.twig", "property/index.html.twig", 66)->display($context);
            // line 67
            echo "                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </div>  
        </div>

        <div class=\"pagination\">
            ";
        // line 73
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 73, $this->source); })()));
        echo "
        </div>  
            
    </div>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 73,  249 => 69,  234 => 67,  232 => 66,  229 => 65,  212 => 64,  205 => 59,  190 => 57,  188 => 56,  185 => 55,  168 => 54,  158 => 47,  154 => 46,  140 => 35,  131 => 29,  125 => 26,  121 => 25,  113 => 20,  107 => 17,  101 => 14,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title \"Tous nos biens\" %}

{% block main %}

    <div class=\"jumbotron jumbotron-properties-index\">
        <div class=\"container\">
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
                </div>
                <div class=\"form-row align-items\">
                    <div class=\"col-md-7\">
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
            <div class=\"col-md-10 align-self-center\">
                <h2>Voir tous nos biens</h2>
            </div>
            <div class=\"col-md-2\">
                    <button type=\"submit\" class=\"grid btn btn-light\"><img src=\"{{ asset('media/grid.png') }}\">Grille</button>               
                    <button type=\"submit\" class=\"list btn btn-light\"><img src=\"{{ asset('media/list.png') }}\">Liste</button>            
            </div>
        </div>
        <hr>

        <div class=\"grid-index\">
            <div class=\"row\">
                {% for property in properties %}
                    <div class=\"col-md-4\">
                        {% include \"property/_property-grid.html.twig\" %}
                    </div>
                {% endfor %}
            </div>  
        </div>

        <div class=\"list-index\" style=\"display: none\">
            <div class=\"row\">
                {% for property in properties %}
                    <div class=\"col\">
                        {% include \"property/_property-list.html.twig\" %}
                    </div>
                {% endfor %}
            </div>  
        </div>

        <div class=\"pagination\">
            {{ knp_pagination_render(properties) }}
        </div>  
            
    </div>
 
{% endblock %}", "property/index.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/property/index.html.twig");
    }
}
