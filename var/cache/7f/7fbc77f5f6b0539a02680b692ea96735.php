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

/* member.html */
class __TwigTemplate_0763cdc237789942e6659707e053e373 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
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
        $this->parent = $this->loadTemplate("layout.html", "member.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "user_name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "user_name", [], "any", false, false, false, 4), "html_attr");
        echo " on OPS";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<main class=\"container\" id=\"content\">
  <section class=\"header\">
    <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "user_name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
    <p class=\"member\"><b>Member since:</b> ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "joined", [], "any", false, false, false, 10), "F d, Y"), "html", null, true);
        echo "</p>
    ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "      <div class=\"alert alert-success\">
    ";
            // line 13
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "</div>";
        }
        // line 14
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 14) == twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "id", [], "any", false, false, false, 14))) {
            // line 15
            echo "      <nav class=\"member-options\">
        <a href=\"work.php\" class=\"btn btn-primary\">Add work</a><br/>
        <a href=\"member-edit-profile.php\" class=\"btn btn-primary\">Edit profile</a>
      </nav>
    ";
        }
        // line 20
        echo "  </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "member.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 20,  91 => 15,  88 => 14,  84 => 13,  81 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 7,  63 => 6,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}{{ member.user_name }}{% endblock %}
{% block description %}{{ member.user_name|e('html_attr') }} on OPS{% endblock %}

{% block content %}
<main class=\"container\" id=\"content\">
  <section class=\"header\">
    <h1>{{ member.user_name }}</h1>
    <p class=\"member\"><b>Member since:</b> {{ member.joined|date('F d, Y') }}</p>
    {% if success %}
      <div class=\"alert alert-success\">
    {{ success }}</div>{% endif %}
    {% if session.id == member.id %}
      <nav class=\"member-options\">
        <a href=\"work.php\" class=\"btn btn-primary\">Add work</a><br/>
        <a href=\"member-edit-profile.php\" class=\"btn btn-primary\">Edit profile</a>
      </nav>
    {% endif %}
  </section>
</main>
{% endblock %}", "member.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\member.html");
    }
}
