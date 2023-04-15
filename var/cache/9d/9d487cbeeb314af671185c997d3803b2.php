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

/* search.html */
class __TwigTemplate_415ce09e3a036ef265d0b6bfc96c017d extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "search.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Search for ";
        echo twig_escape_filter($this->env, ($context["term"] ?? null), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Search results for ";
        echo twig_escape_filter($this->env, ($context["term"] ?? null), "html_attr");
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<main class=\"container search\" id=\"content\">

  <section class=\"header\">
    <form action=\"search.php\" method=\"get\" class=\"form-search\">
      <label for=\"search\"><span>Search for: </span></label>
      <input type=\"text\" name=\"term\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["term"] ?? null), "html", null, true);
        echo "\" 
             id=\"search\" placeholder=\"Enter search term\"  
      /><input type=\"submit\" value=\"Search\" class=\"btn btn-search\" />
    </form>
    ";
        // line 16
        if (($context["term"] ?? null)) {
            echo "<p><b>Matches found:</b> ";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "</p>";
        }
        // line 17
        echo "  </section>

  <section class=\"grid\">
    ";
        // line 20
        echo twig_include($this->env, $context, "article-summaries.html");
        echo "
  </section>

  ";
        // line 23
        echo twig_include($this->env, $context, "pagination.html");
        echo "

</main>
";
    }

    public function getTemplateName()
    {
        return "search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  93 => 20,  88 => 17,  82 => 16,  75 => 12,  68 => 7,  64 => 6,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}Search for {{ term }}{% endblock %}
{% block description %}Search results for {{ term|e('html_attr') }}{% endblock %}

{% block content %}
<main class=\"container search\" id=\"content\">

  <section class=\"header\">
    <form action=\"search.php\" method=\"get\" class=\"form-search\">
      <label for=\"search\"><span>Search for: </span></label>
      <input type=\"text\" name=\"term\" value=\"{{ term }}\" 
             id=\"search\" placeholder=\"Enter search term\"  
      /><input type=\"submit\" value=\"Search\" class=\"btn btn-search\" />
    </form>
    {% if term %}<p><b>Matches found:</b> {{ count }}</p>{% endif %}
  </section>

  <section class=\"grid\">
    {{ include('article-summaries.html') }}
  </section>

  {{ include('pagination.html') }}

</main>
{% endblock %}", "search.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\search.html");
    }
}
