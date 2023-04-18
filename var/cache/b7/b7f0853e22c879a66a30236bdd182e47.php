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

/* wash_option.html */
class __TwigTemplate_222c7b4536bc01d999f21eabce033029 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "wash_option.html", 1);
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
  <header class=\"is-flex is-align-items-center is-justify-content-space-between mb-5\">
    <h1 class=\"title mb-0\">";
        // line 37
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["title"] ?? null)), "html", null, true);
        echo "</h1>
    <a class=\"button is-link\" href=\"#create-new-option\">Create New Option</a>
  </header>

  <div class=\"options\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 43
            echo "      <div class=\"box p-5 mb-5\">
        <!-- UPDATE OPTION -->
        <form class=\"\" action=\"option.php?q=";
            // line 45
            echo twig_escape_filter($this->env, ($context["table"] ?? null));
            echo "\" method=\"POST\">
          <input type=\"hidden\" name=\"id\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 46));
            echo "\">
          <input type=\"hidden\" name=\"t\" value=\"update\">

          <!-- FIELDS START-->
          ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 51
                echo "            <label class=\"label\" for=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[1] ?? null) : null)), "html", null, true);
                echo "</label>
            <input class=\"input mr-2 mb-3\" type=\"text\" name=\"";
                // line 52
                echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["field"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_8 = $context["option"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[(($__internal_compile_9 = $context["field"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null)] ?? null) : null));
                echo "\">
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "          <!-- FIELDS END -->
        
          <div class=\"buttons\">
            <button class=\"button is-primary mr-2\" type=\"submit\">UPDATE</button>
            <a class=\"button is-danger is-light\" href=\"option.php?q=";
            // line 58
            echo twig_escape_filter($this->env, ($context["table"] ?? null));
            echo "&t=delete&id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 58));
            echo "\">DELETE</a>
          </div>
        </form>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    ";
        if (($context["table"] ?? null)) {
            // line 64
            echo "      <div class=\"box p-5 mb-5\">
        <!-- CREATE NEW OPTION -->
        <h2 class=\"subtitle has-text-weight-bold\">Create New Option</h2>
        <form class=\"\" action=\"option.php?q=";
            // line 67
            echo twig_escape_filter($this->env, ($context["table"] ?? null));
            echo "\" method=\"POST\" id=\"create-new-option\">
          <input type=\"hidden\" name=\"t\" value=\"create\">
          <!-- FIELDS START-->
          ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 71
                echo "            <label class=\"label\" for=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_10 = $context["field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (($__internal_compile_11 = $context["field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[1] ?? null) : null)), "html", null, true);
                echo "</label>
            <input class=\"input mr-2 mb-3\" type=\"text\" name=\"";
                // line 72
                echo twig_escape_filter($this->env, (($__internal_compile_12 = $context["field"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), "html", null, true);
                echo "\">
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "          <!-- FIELDS END -->
          <button class=\"button is-primary\" type=\"submit\">ADD</button>
        </form>
      </div>
    ";
        }
        // line 79
        echo "  </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "wash_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 79,  235 => 74,  227 => 72,  220 => 71,  216 => 70,  210 => 67,  205 => 64,  202 => 63,  189 => 58,  183 => 54,  173 => 52,  166 => 51,  162 => 50,  155 => 46,  151 => 45,  147 => 43,  143 => 42,  135 => 37,  130 => 34,  125 => 31,  116 => 29,  112 => 28,  108 => 26,  106 => 25,  102 => 23,  95 => 19,  91 => 17,  89 => 16,  84 => 13,  78 => 12,  70 => 10,  62 => 8,  59 => 7,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
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
  <header class=\"is-flex is-align-items-center is-justify-content-space-between mb-5\">
    <h1 class=\"title mb-0\">{{ title|capitalize }}</h1>
    <a class=\"button is-link\" href=\"#create-new-option\">Create New Option</a>
  </header>

  <div class=\"options\">
    {% for option in options %}
      <div class=\"box p-5 mb-5\">
        <!-- UPDATE OPTION -->
        <form class=\"\" action=\"option.php?q={{ table|e }}\" method=\"POST\">
          <input type=\"hidden\" name=\"id\" value=\"{{ option.id|e }}\">
          <input type=\"hidden\" name=\"t\" value=\"update\">

          <!-- FIELDS START-->
          {% for field in fields %}
            <label class=\"label\" for=\"{{ field[0] }}\">{{ field[1]|capitalize }}</label>
            <input class=\"input mr-2 mb-3\" type=\"text\" name=\"{{ field[0] }}\" value=\"{{ option[field[0]]|e }}\">
          {% endfor %}
          <!-- FIELDS END -->
        
          <div class=\"buttons\">
            <button class=\"button is-primary mr-2\" type=\"submit\">UPDATE</button>
            <a class=\"button is-danger is-light\" href=\"option.php?q={{ table|e }}&t=delete&id={{option.id|e}}\">DELETE</a>
          </div>
        </form>
      </div>
    {% endfor %}
    {% if table %}
      <div class=\"box p-5 mb-5\">
        <!-- CREATE NEW OPTION -->
        <h2 class=\"subtitle has-text-weight-bold\">Create New Option</h2>
        <form class=\"\" action=\"option.php?q={{ table|e }}\" method=\"POST\" id=\"create-new-option\">
          <input type=\"hidden\" name=\"t\" value=\"create\">
          <!-- FIELDS START-->
          {% for field in fields %}
            <label class=\"label\" for=\"{{ field[0] }}\">{{ field[1]|capitalize }}</label>
            <input class=\"input mr-2 mb-3\" type=\"text\" name=\"{{ field[0] }}\">
          {% endfor %}
          <!-- FIELDS END -->
          <button class=\"button is-primary\" type=\"submit\">ADD</button>
        </form>
      </div>
    {% endif %}
  </div>
</main>
{% endblock %}", "wash_option.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\wash_option.html");
    }
}
