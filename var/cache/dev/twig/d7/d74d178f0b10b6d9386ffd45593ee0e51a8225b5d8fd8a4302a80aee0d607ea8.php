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

/* pages/_footer.html.twig */
class __TwigTemplate_fd89fa133013f47cf4215e61937f3eb1cd03b2a22089328c447bf57bc867b847 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/_footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"container-fluid\">
        <div class=\"row\">

            ";
        // line 6
        echo "            <div class=\"col-lg-4 text-center\">
                <h2 class=\"h2title m-4\">Réseaux Sociaux</h2>
            </div>
            <div class=\"col-lg-4 text-center\">
                <h2 class=\"h2title m-4\">Retrouvez notre magasin au coeur de Bordeaux, en Gironde</h2>
            </div>
            <div class=\"col-lg-4 text-center\">
                <h2 class=\"h2title m-4\">Contact</h2>
            </div>
            <div class=\"col-lg-4 text-center\">
                <div class=\"row mb-5\" style=\"justify-content: center\">
                    <div class=\"col-4 col-lg-2\">
                        <img src=\"assets/img/facebookicon.png\" class=\"img-fluid\" alt=\"\">
                    </div>
                    <div class=\"col-4 col-lg-2\">
                        <img src=\"assets/img/twittericon.png\" class=\"img-fluid\" alt=\"\">
                    </div>
                    <div class=\"col-4 col-lg-2\">
                        <img src=\"assets/img/instagramicon.jpg\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>
                <label for=\"exampleInputEmail1\">Offres et nouveautés en avant-première.</label>
                <form class=\"form-inline my-2 my-lg-0\" style=\"justify-content: center\">
                    <input class=\"form-control m-sm-3\" type=\"email\" placeholder=\"Tapez votre adresse\" aria-label=\"Search\">
                    <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\">OK</button>
                </form>
                <p>Vous pouvez à tout moment vous désinscrire via le lien de désabonnement présent dans la newsletter.
                    En savoir plus sur notre politique de protection des données personnelles, cliquez ici</p>
            </div>

            ";
        // line 37
        echo "            <div class=\"col-lg-4 text-center\">
                <div class=\"coordonnees\">
                    <p>phpGaming
                        <br>
                        34 Cours Clémenceau, 33000 Bordeaux
                        <br>
                        Téléphone:  0667823245
                        <br>
                        Horaires: Du Lundi au Vendredi de 9h à 19h
                    </p>
                </div>
                <br>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.9220945195784!2d-0.5810551845542706!3d44.84351988266385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527dc3f618e6d%3A0xacfc76da5d346144!2sCours%20Georges%20Clemenceau%2C%2033000%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1572099996054!5m2!1sfr!2sfr\" width=\"350\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>

            ";
        // line 53
        echo "            <div class=\"col-lg-4 text-center\">
                    <div class=\"form-group label-floating\">
                        <label class=\"control-label\" for=\"name\">Nom</label>
                        <input class=\"form-control\" id=\"name\" type=\"text\" name=\"name\" required data-error=\"Please enter your name\">
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <div class=\"form-group label-floating\">
                        <label class=\"control-label\" for=\"email\">Email</label>
                        <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" required data-error=\"Please enter your Email\">
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <div class=\"form-group label-floating\">
                        <label class=\"control-label\">Sujet</label>
                        <input class=\"form-control\" id=\"msg_subject\" type=\"text\" name=\"subject\" required data-error=\"Please enter your message subject\">
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <div class=\"form-group label-floating\">
                        <label for=\"message\" class=\"control-label\">Message</label>
                        <textarea class=\"form-control\" rows=\"3\" id=\"message\" name=\"message\" required data-error=\"Write your message\"></textarea>
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <div class=\"form-submit m-5\">
                        <button class=\"btn btn-primary\" type=\"submit\" id=\"form-submit\"><i class=\"material-icons mdi mdi-message-outline\"></i>Envoyer</button>
                        <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 53,  81 => 37,  49 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container-fluid\">
        <div class=\"row\">

            {# Réseaux Sociaux #}
            <div class=\"col-lg-4 text-center\">
                <h2 class=\"h2title m-4\">Réseaux Sociaux</h2>
            </div>
            <div class=\"col-lg-4 text-center\">
                <h2 class=\"h2title m-4\">Retrouvez notre magasin au coeur de Bordeaux, en Gironde</h2>
            </div>
            <div class=\"col-lg-4 text-center\">
                <h2 class=\"h2title m-4\">Contact</h2>
            </div>
            <div class=\"col-lg-4 text-center\">
                <div class=\"row mb-5\" style=\"justify-content: center\">
                    <div class=\"col-4 col-lg-2\">
                        <img src=\"assets/img/facebookicon.png\" class=\"img-fluid\" alt=\"\">
                    </div>
                    <div class=\"col-4 col-lg-2\">
                        <img src=\"assets/img/twittericon.png\" class=\"img-fluid\" alt=\"\">
                    </div>
                    <div class=\"col-4 col-lg-2\">
                        <img src=\"assets/img/instagramicon.jpg\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>
                <label for=\"exampleInputEmail1\">Offres et nouveautés en avant-première.</label>
                <form class=\"form-inline my-2 my-lg-0\" style=\"justify-content: center\">
                    <input class=\"form-control m-sm-3\" type=\"email\" placeholder=\"Tapez votre adresse\" aria-label=\"Search\">
                    <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\">OK</button>
                </form>
                <p>Vous pouvez à tout moment vous désinscrire via le lien de désabonnement présent dans la newsletter.
                    En savoir plus sur notre politique de protection des données personnelles, cliquez ici</p>
            </div>

            {# Google Maps #}
            <div class=\"col-lg-4 text-center\">
                <div class=\"coordonnees\">
                    <p>phpGaming
                        <br>
                        34 Cours Clémenceau, 33000 Bordeaux
                        <br>
                        Téléphone:  0667823245
                        <br>
                        Horaires: Du Lundi au Vendredi de 9h à 19h
                    </p>
                </div>
                <br>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.9220945195784!2d-0.5810551845542706!3d44.84351988266385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527dc3f618e6d%3A0xacfc76da5d346144!2sCours%20Georges%20Clemenceau%2C%2033000%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1572099996054!5m2!1sfr!2sfr\" width=\"350\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>

            {# Contact #}
            <div class=\"col-lg-4 text-center\">
                    <div class=\"form-group label-floating\">
                        <label class=\"control-label\" for=\"name\">Nom</label>
                        <input class=\"form-control\" id=\"name\" type=\"text\" name=\"name\" required data-error=\"Please enter your name\">
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <div class=\"form-group label-floating\">
                        <label class=\"control-label\" for=\"email\">Email</label>
                        <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" required data-error=\"Please enter your Email\">
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <div class=\"form-group label-floating\">
                        <label class=\"control-label\">Sujet</label>
                        <input class=\"form-control\" id=\"msg_subject\" type=\"text\" name=\"subject\" required data-error=\"Please enter your message subject\">
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <div class=\"form-group label-floating\">
                        <label for=\"message\" class=\"control-label\">Message</label>
                        <textarea class=\"form-control\" rows=\"3\" id=\"message\" name=\"message\" required data-error=\"Write your message\"></textarea>
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <div class=\"form-submit m-5\">
                        <button class=\"btn btn-primary\" type=\"submit\" id=\"form-submit\"><i class=\"material-icons mdi mdi-message-outline\"></i>Envoyer</button>
                        <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>", "pages/_footer.html.twig", "/Applications/MAMP/htdocs/AgenceImmo/templates/pages/_footer.html.twig");
    }
}
