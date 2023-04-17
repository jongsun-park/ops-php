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

/* option.html */
class __TwigTemplate_ba0438763947921d13aa89b9cf23c670 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("layout.html", "option.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<main class=\"container grid\" id=\"content\">
  <!-- Options -->
  <div class=\"options mb-5\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["option_tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tb"]) {
            // line 7
            echo "      ";
            if (((($__internal_compile_0 = $context["tb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) === ($context["table"] ?? null))) {
                // line 8
                echo "        <a class=\"button mr-2 mb-2 is-primary\" href=\"option.php?q=";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["tb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["tb"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "html", null, true);
                echo "</a>
      ";
            } else {
                // line 10
                echo "        <a class=\"button mr-2 mb-2\" href=\"option.php?q=";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["tb"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["tb"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "html", null, true);
                echo "</a>
      ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </div>
  
  <!-- Info message -->
  ";
        // line 16
        if (($context["info"] ?? null)) {
            // line 17
            echo "    <article class=\"message is-success\">
      <div class=\"message-body\">
        ";
            // line 19
            echo twig_escape_filter($this->env, ($context["info"] ?? null), "html", null, true);
            echo "
      </div>
    </article>
  ";
        }
        // line 23
        echo "
  <!-- Error messages -->
  ";
        // line 25
        if (($context["errors"] ?? null)) {
            // line 26
            echo "    <article class=\"message is-warning\">
      <div class=\"message-body\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 29
                echo "          <p>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </div>
    </article>
  ";
        }
        // line 34
        echo "
  <!-- Selected table options -->
  <h1 class=\"title\">";
        // line 36
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["title"] ?? null)), "html", null, true);
        echo "</h1>
  <div class=\"options\">
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 39
            echo "      <div class=\"option row is-flex mb-3\">
        <!-- UPDATE OPTION -->
        <form class=\"is-flex is-flex-grow-1\" action=\"option.php?q=";
            // line 41
            echo twig_escape_filter($this->env, ($context["table"] ?? null));
            echo "&t=update\" method=\"POST\">
          <input type=\"hidden\" name=\"id\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 42));
            echo "\">
          <input class=\"input mr-2\" type=\"text\" name=\"name\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 43));
            echo "\">
          <button class=\"button is-primary mr-2\" type=\"submit\">UPDATE</button>
        </form>
        <!-- DELETE OPTION -->
        <form action=\"option.php?q=";
            // line 47
            echo twig_escape_filter($this->env, ($context["table"] ?? null));
            echo "&t=delete\" method=\"POST\">
          <input type=\"hidden\" name=\"id\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 48));
            echo "\">
          <button class=\"button is-danger is-light\" type=\"submit\">DELETE</button>
        </form>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    ";
        if (($context["table"] ?? null)) {
            // line 54
            echo "      <div class=\"mt-5\">
        <h2 class=\"subtitle has-text-weight-bold\">Create New Option</h2>
        <!-- CREATE NEW OPTION -->
        <form class=\"is-flex\" action=\"option.php?q=";
            // line 57
            echo twig_escape_filter($this->env, ($context["table"] ?? null));
            echo "&t=create\" method=\"POST\">
          <input class=\"input mr-2\" type=\"text\" name=\"name\" required>
          <button class=\"button is-primary\" type=\"submit\">ADD</button>
        </form>
      </div>
    ";
        }
        // line 63
        echo "  </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 63,  185 => 57,  180 => 54,  177 => 53,  166 => 48,  162 => 47,  155 => 43,  151 => 42,  147 => 41,  143 => 39,  139 => 38,  134 => 36,  130 => 34,  125 => 31,  116 => 29,  112 => 28,  108 => 26,  106 => 25,  102 => 23,  95 => 19,  91 => 17,  89 => 16,  84 => 13,  78 => 12,  70 => 10,  62 => 8,  59 => 7,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block content %}
<main class=\"container grid\" id=\"content\">
  <!-- Options -->
  <div class=\"options mb-5\">
    {% for tb in option_tables %}
      {% if tb[0] is same as (table) %}
        <a class=\"button mr-2 mb-2 is-primary\" href=\"option.php?q={{ tb[0] }}\">{{ tb[1] }}</a>
      {% else %}
        <a class=\"button mr-2 mb-2\" href=\"option.php?q={{ tb[0] }}\">{{ tb[1] }}</a>
      {% endif %}
    {% endfor %}
  </div>
  
  <!-- Info message -->
  {% if info %}
    <article class=\"message is-success\">
      <div class=\"message-body\">
        {{ info }}
      </div>
    </article>
  {% endif %}

  <!-- Error messages -->
  {% if errors %}
    <article class=\"message is-warning\">
      <div class=\"message-body\">
        {% for error in errors %}
          <p>{{ error }}</p>
        {% endfor %}
      </div>
    </article>
  {% endif %}

  <!-- Selected table options -->
  <h1 class=\"title\">{{ title|capitalize }}</h1>
  <div class=\"options\">
    {% for option in options %}
      <div class=\"option row is-flex mb-3\">
        <!-- UPDATE OPTION -->
        <form class=\"is-flex is-flex-grow-1\" action=\"option.php?q={{ table|e }}&t=update\" method=\"POST\">
          <input type=\"hidden\" name=\"id\" value=\"{{ option.id|e }}\">
          <input class=\"input mr-2\" type=\"text\" name=\"name\" value=\"{{ option.name|e }}\">
          <button class=\"button is-primary mr-2\" type=\"submit\">UPDATE</button>
        </form>
        <!-- DELETE OPTION -->
        <form action=\"option.php?q={{ table|e }}&t=delete\" method=\"POST\">
          <input type=\"hidden\" name=\"id\" value=\"{{ option.id|e }}\">
          <button class=\"button is-danger is-light\" type=\"submit\">DELETE</button>
        </form>
      </div>
    {% endfor %}
    {% if table %}
      <div class=\"mt-5\">
        <h2 class=\"subtitle has-text-weight-bold\">Create New Option</h2>
        <!-- CREATE NEW OPTION -->
        <form class=\"is-flex\" action=\"option.php?q={{ table|e }}&t=create\" method=\"POST\">
          <input class=\"input mr-2\" type=\"text\" name=\"name\" required>
          <button class=\"button is-primary\" type=\"submit\">ADD</button>
        </form>
      </div>
    {% endif %}
  </div>
</main>
{% endblock %}", "option.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\option.html");
    }
}
