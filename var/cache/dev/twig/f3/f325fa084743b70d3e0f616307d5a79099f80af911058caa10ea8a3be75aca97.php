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

/* block/_footer.html.twig */
class __TwigTemplate_cf01a502b5b5e3dae743faef791a3f2586ce16eb73553cd4f3ae352ca94624b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/_footer.html.twig"));

        // line 1
        echo "<div class=\"container-fluid mt-4 pb-5\">
    <hr>
    <div class=\"row\">

        ";
        // line 6
        echo "        <div class=\"col-md-4 text-center\">
            <h4 class=\"col mb-4\">Réseaux Sociaux</h4>
            <div class=\"row\" style=\"justify-content: center\">
                <div class=\"col-md-2\">
                    <a href=\"#\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/facebook-icon.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>                        
                </div>
                <div class=\"col-md-2\">
                    <a href=\"#\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/twitter-icon.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>                        
                </div>
                <div class=\"col-md-2\">
                    <a href=\"#\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/instagram-icon.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>                        
                </div>
            </div>
        </div>

        ";
        // line 22
        echo "        <div class=\"col-md-4 text-center\">
            <h4 class=\"col mb-4\">Notre agence au coeur de Bordeaux</h4>
            <div class=\"row\" style=\"justify-content: center\">
                <div class=\"col\">                
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.9220945195784!2d-0.5810551845542706!3d44.84351988266385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527dc3f618e6d%3A0xacfc76da5d346144!2sCours%20Georges%20Clemenceau%2C%2033000%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1572099996054!5m2!1sfr!2sfr\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                </div>
            </div>
        </div>

        ";
        // line 32
        echo "        <div class=\"col-md-4 text-center\">
            <h4 class=\"col mb-4\">Contact</h4>
            <div class=\"row\" style=\"justify-content: center\">
                <div class=\"col\">
                    <p>AgenceImmo
                        <br>
                        34 Cours Clémenceau, 33000 Bordeaux
                        <br>
                        Téléphone:  0667823245
                        <br>
                        Email : agenceImmo@gmail.com
                        <br>
                        Horaires: Du Lundi au Vendredi de 9h à 19h                        
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "block/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  75 => 22,  67 => 16,  61 => 13,  55 => 10,  49 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid mt-4 pb-5\">
    <hr>
    <div class=\"row\">

        {# Réseaux Sociaux #}
        <div class=\"col-md-4 text-center\">
            <h4 class=\"col mb-4\">Réseaux Sociaux</h4>
            <div class=\"row\" style=\"justify-content: center\">
                <div class=\"col-md-2\">
                    <a href=\"#\"><img src=\"{{ asset('media/facebook-icon.png') }}\" class=\"img-fluid\" alt=\"\"></a>                        
                </div>
                <div class=\"col-md-2\">
                    <a href=\"#\"><img src=\"{{ asset('media/twitter-icon.png') }}\" class=\"img-fluid\" alt=\"\"></a>                        
                </div>
                <div class=\"col-md-2\">
                    <a href=\"#\"><img src=\"{{ asset('media/instagram-icon.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>                        
                </div>
            </div>
        </div>

        {# Google Maps #}
        <div class=\"col-md-4 text-center\">
            <h4 class=\"col mb-4\">Notre agence au coeur de Bordeaux</h4>
            <div class=\"row\" style=\"justify-content: center\">
                <div class=\"col\">                
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.9220945195784!2d-0.5810551845542706!3d44.84351988266385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527dc3f618e6d%3A0xacfc76da5d346144!2sCours%20Georges%20Clemenceau%2C%2033000%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1572099996054!5m2!1sfr!2sfr\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                </div>
            </div>
        </div>

        {# Contact #}
        <div class=\"col-md-4 text-center\">
            <h4 class=\"col mb-4\">Contact</h4>
            <div class=\"row\" style=\"justify-content: center\">
                <div class=\"col\">
                    <p>AgenceImmo
                        <br>
                        34 Cours Clémenceau, 33000 Bordeaux
                        <br>
                        Téléphone:  0667823245
                        <br>
                        Email : agenceImmo@gmail.com
                        <br>
                        Horaires: Du Lundi au Vendredi de 9h à 19h                        
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
", "block/_footer.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/block/_footer.html.twig");
    }
}
