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

/* emails/model.mjml */
class __TwigTemplate_dc7a919e56e4ab85b603e2d510885953e4c759fdbc397110e5ded4912aea3818 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/model.mjml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/model.mjml"));

        // line 1
        echo "<mjml>
  <mj-body background-color=\"#ccd3e0\" font-size=\"13px\">
    <mj-section background-color=\"#fff\" padding-bottom=\"20px\" padding-top=\"20px\">
      <mj-column width=\"100%\">
        <mj-image src=\"http://go.mailjet.com/tplimg/mtrq/b/ox8s/mg1qi.png\" alt=\"\" align=\"center\" border=\"none\" width=\"100px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"10px\" padding-top=\"10px\"></mj-image>
        <mj-image src=\"http://go.mailjet.com/tplimg/mtrq/b/ox8s/mg1qz.png\" alt=\"\" align=\"center\" border=\"none\" width=\"200px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-image>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#356cc7\" padding-bottom=\"0px\" padding-top=\"0\">
      <mj-column width=\"100%\">
        <mj-text align=\"center\" font-size=\"13px\" color=\"#ABCDEA\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"18px\" padding-top=\"28px\">HELLO
          <p style=\"font-size:16px; color:white\">[[FirstName]]</p>
          <h1>AgenceImmo</h1>
          <p>Prénom: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 14, $this->source); })()), "firstname", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
          <p>Nom: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 15, $this->source); })()), "lastname", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
          <p>Téléphone: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 16, $this->source); })()), "phone", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
          <p>Email: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
          <p>Message: ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 18, $this->source); })()), "message", [], "any", false, false, false, 18);
        echo "</p>

        </mj-text>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#356cc7\" padding-bottom=\"5px\" padding-top=\"0\">
      <mj-column width=\"100%\">
        <mj-divider border-color=\"#ffffff\" border-width=\"2px\" border-style=\"solid\" padding-left=\"20px\" padding-right=\"20px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-divider>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"13px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"28px\" padding-top=\"28px\"><span style=\"font-size:20px; font-weight:bold\">Thank you very much for your purchase.</span>
          <br/>
          <p></p>
          <span style=\"font-size:15px\">Please find the receipt below.</span></mj-text>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#568feb\" padding-bottom=\"15px\">
      <mj-column>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"15px\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\"><strong>Order Number</strong></mj-text>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"13px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"20px\" padding-top=\"10px\">[[OrderNumber]]</mj-text>
      </mj-column>
      <mj-column>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"15px\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\"><strong>Order Date</strong></mj-text>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"13px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"20px\" padding-top=\"10px\">[[OrderDate]]</mj-text>
      </mj-column>
      <mj-column>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"15px\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\"><strong>Total Price</strong></mj-text>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"13px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"20px\" padding-top=\"10px\">[[TotalPrice]]</mj-text>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#356CC7\" padding-bottom=\"20px\" padding-top=\"20px\">
      <mj-column width=\"50%\">
        <mj-button background-color=\"#ffae00\" color=\"#FFF\" font-size=\"14px\" align=\"center\" font-weight=\"bold\" border=\"none\" padding=\"15px 30px\" border-radius=\"10px\" href=\"https://mjml.io\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\">Download Receipt</mj-button>
      </mj-column>
      <mj-column width=\"50%\">
        <mj-button background-color=\"#ffae00\" color=\"#FFF\" font-size=\"14px\" align=\"center\" font-weight=\"bold\" border=\"none\" padding=\"15px 30px\" border-radius=\"10px\" href=\"https://mjml.io\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"12px\">Track My Order</mj-button>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#356cc7\" padding-bottom=\"5px\" padding-top=\"0\">
      <mj-column width=\"100%\">
        <mj-divider border-color=\"#ffffff\" border-width=\"2px\" border-style=\"solid\" padding-left=\"20px\" padding-right=\"20px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-divider>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"15px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"20px\" padding-top=\"20px\">Best,
          <br/>
          <span style=\"font-size:15px\">The [[CompanyName]] Team</span></mj-text>
      </mj-column>
    </mj-section>
  </mj-body>
</mjml>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/model.mjml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<mjml>
  <mj-body background-color=\"#ccd3e0\" font-size=\"13px\">
    <mj-section background-color=\"#fff\" padding-bottom=\"20px\" padding-top=\"20px\">
      <mj-column width=\"100%\">
        <mj-image src=\"http://go.mailjet.com/tplimg/mtrq/b/ox8s/mg1qi.png\" alt=\"\" align=\"center\" border=\"none\" width=\"100px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"10px\" padding-top=\"10px\"></mj-image>
        <mj-image src=\"http://go.mailjet.com/tplimg/mtrq/b/ox8s/mg1qz.png\" alt=\"\" align=\"center\" border=\"none\" width=\"200px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-image>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#356cc7\" padding-bottom=\"0px\" padding-top=\"0\">
      <mj-column width=\"100%\">
        <mj-text align=\"center\" font-size=\"13px\" color=\"#ABCDEA\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"18px\" padding-top=\"28px\">HELLO
          <p style=\"font-size:16px; color:white\">[[FirstName]]</p>
          <h1>AgenceImmo</h1>
          <p>Prénom: {{ contact.firstname }}</p>
          <p>Nom: {{ contact.lastname }}</p>
          <p>Téléphone: {{ contact.phone }}</p>
          <p>Email: {{ contact.email }}</p>
          <p>Message: {{ contact.message | raw }}</p>

        </mj-text>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#356cc7\" padding-bottom=\"5px\" padding-top=\"0\">
      <mj-column width=\"100%\">
        <mj-divider border-color=\"#ffffff\" border-width=\"2px\" border-style=\"solid\" padding-left=\"20px\" padding-right=\"20px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-divider>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"13px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"28px\" padding-top=\"28px\"><span style=\"font-size:20px; font-weight:bold\">Thank you very much for your purchase.</span>
          <br/>
          <p></p>
          <span style=\"font-size:15px\">Please find the receipt below.</span></mj-text>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#568feb\" padding-bottom=\"15px\">
      <mj-column>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"15px\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\"><strong>Order Number</strong></mj-text>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"13px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"20px\" padding-top=\"10px\">[[OrderNumber]]</mj-text>
      </mj-column>
      <mj-column>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"15px\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\"><strong>Order Date</strong></mj-text>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"13px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"20px\" padding-top=\"10px\">[[OrderDate]]</mj-text>
      </mj-column>
      <mj-column>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"15px\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\"><strong>Total Price</strong></mj-text>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"13px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"20px\" padding-top=\"10px\">[[TotalPrice]]</mj-text>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#356CC7\" padding-bottom=\"20px\" padding-top=\"20px\">
      <mj-column width=\"50%\">
        <mj-button background-color=\"#ffae00\" color=\"#FFF\" font-size=\"14px\" align=\"center\" font-weight=\"bold\" border=\"none\" padding=\"15px 30px\" border-radius=\"10px\" href=\"https://mjml.io\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\">Download Receipt</mj-button>
      </mj-column>
      <mj-column width=\"50%\">
        <mj-button background-color=\"#ffae00\" color=\"#FFF\" font-size=\"14px\" align=\"center\" font-weight=\"bold\" border=\"none\" padding=\"15px 30px\" border-radius=\"10px\" href=\"https://mjml.io\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"12px\">Track My Order</mj-button>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#356cc7\" padding-bottom=\"5px\" padding-top=\"0\">
      <mj-column width=\"100%\">
        <mj-divider border-color=\"#ffffff\" border-width=\"2px\" border-style=\"solid\" padding-left=\"20px\" padding-right=\"20px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-divider>
        <mj-text align=\"center\" color=\"#FFF\" font-size=\"15px\" font-family=\"Helvetica\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"20px\" padding-top=\"20px\">Best,
          <br/>
          <span style=\"font-size:15px\">The [[CompanyName]] Team</span></mj-text>
      </mj-column>
    </mj-section>
  </mj-body>
</mjml>", "emails/model.mjml", "/Applications/MAMP/htdocs/AgenceImmo/templates/emails/model.mjml");
    }
}
