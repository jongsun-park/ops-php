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

/* password-lost.html */
class __TwigTemplate_1f4fe7c77a5154e17553de152e9f33cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "password-lost.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Password Reset";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<main class=\"container\" id=\"content\">
  <section class=\"header\"><h1 class=\"title mb-5\">Forgot Password?</h1></section>
  ";
        // line 6
        if ((($context["sent"] ?? null) == false)) {
            // line 7
            echo "  <form method=\"post\" action=\"password-lost.php\" class=\"form-membership\">
    <label for=\"email\">Enter your email address: </label>
    <input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\"><br>
    <input type=\"submit\" name=\"submit\" value=\"Send email to reset password\" class=\"btn\">
    <span class=\"errors\">";
            // line 11
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</span><br>
  </form>
  ";
        } else {
            // line 14
            echo "  <p class=\"form-membership\">If your address is registered, we will email instructions to reset your password.</p>
  ";
        }
        // line 16
        echo "</main> 
";
    }

    public function getTemplateName()
    {
        return "password-lost.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  76 => 14,  70 => 11,  64 => 7,  62 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %}Password Reset{% endblock %}
{% block content %}
<main class=\"container\" id=\"content\">
  <section class=\"header\"><h1 class=\"title mb-5\">Forgot Password?</h1></section>
  {% if sent == false %}
  <form method=\"post\" action=\"password-lost.php\" class=\"form-membership\">
    <label for=\"email\">Enter your email address: </label>
    <input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\"><br>
    <input type=\"submit\" name=\"submit\" value=\"Send email to reset password\" class=\"btn\">
    <span class=\"errors\">{{ error }}</span><br>
  </form>
  {% else %}
  <p class=\"form-membership\">If your address is registered, we will email instructions to reset your password.</p>
  {% endif %}
</main> 
{% endblock %}", "password-lost.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\password-lost.html");
    }
}
