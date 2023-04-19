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

/* products.html */
class __TwigTemplate_4d1bc692310286322241fdf4fe7355ee extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "products.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<main class=\"container grid\" id=\"content\">

  <!-- Info message -->
  ";
        // line 6
        if (($context["info"] ?? null)) {
            // line 7
            echo "    <article class=\"message is-success\">
      <div class=\"message-body\">
        ";
            // line 9
            echo twig_escape_filter($this->env, ($context["info"] ?? null), "html", null, true);
            echo "
      </div>
    </article>
  ";
        }
        // line 13
        echo "

  <!-- Error message -->
  ";
        // line 16
        if (($context["errors"] ?? null)) {
            // line 17
            echo "    <article class=\"message is-warning\">
      <div class=\"message-body\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "          <p>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </div>
    </article>
  ";
        }
        // line 25
        echo "
  <header class=\"is-flex is-align-items-center is-justify-content-space-between mb-5\">
    <h1 class=\"title mb-0\">";
        // line 27
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["title"] ?? null)), "html", null, true);
        echo "</h1>
    <a class=\"button is-link\" href=\"#create-new-option\">Create New Option</a>
  </header>

  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 32
            echo "    <form action=\"product.php\" method=\"POST\" class=\"box mb-5 product-container\">
      ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 34
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 34) == "id")) {
                    // line 35
                    echo "          <input type=\"hidden\" name=\"id\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "\">
        ";
                } else {
                    // line 37
                    echo "          <div class=\"control mb-3\">
            <label for=\"";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 38), "html", null, true);
                    echo "\" class=\"label\">";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 38)), "html", null, true);
                    echo "</label>
            <input type=\"text\" class=\"input\" name=\"";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 39), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 39)] ?? null) : null), "html", null, true);
                    echo "\">
          </div>
        ";
                }
                // line 42
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
      <!-- SELECTS -->
      ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["selects"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                // line 46
                echo "        <div>
          <label class=\"label\" for=\"";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 47), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "label", [], "any", false, false, false, 47), "html", null, true);
                echo "</label>
          <div class=\"select mb-5 is-full\">
            <select name=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 49), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 49), "html", null, true);
                echo "\" required>
              <option value=\"\">--Please choose an option--</option>
              ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["select"], "data", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 52
                    echo "                ";
                    if (((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null) == (($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 52)] ?? null) : null))) {
                        echo "               
                  <option value=\"";
                        // line 53
                        echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null));
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["item"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null));
                        echo "</option>
                ";
                    } else {
                        // line 55
                        echo "                <option value=\"";
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["item"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null));
                        echo "\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["item"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null));
                        echo "</option>
                ";
                    }
                    // line 57
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "            </select>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
      <div class=\"buttons mt-5 is-flex\">
        <input type=\"submit\" value=\"Save\" class=\"button is-primary is-flex-grow-1\">
        <a href=\"product.php?t=delete&id=";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\"  class=\"button is-danger\">Delete</a>
      </div>
    </form>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
  <div class=\"box p-5 mb-5\">
    <!-- CREATE NEW OPTION -->
    <h2 class=\"subtitle has-text-weight-bold\">Create New Product</h2>
    <form class=\"product-container my-5\" action=\"product.php\" method=\"POST\" id=\"create-new-option\">
      <input type=\"hidden\" name=\"t\" value=\"create\">
      <!-- FIELDS START-->
      ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 77
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 77) == "id")) {
                // line 78
                echo "        ";
            } else {
                // line 79
                echo "          <div class=\"control mb-3\">
            <label for=\"";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 80), "html", null, true);
                echo "\" class=\"label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 80));
                echo "</label>
            <input type=\"text\" class=\"input\" name=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 81), "html", null, true);
                echo "\" value=\"\">
          </div>
        ";
            }
            // line 84
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "      <!-- FIELDS END -->
      
      <!-- SELECTS START -->
      ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["selects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
            // line 89
            echo "      <div>
        <label class=\"label\" for=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 90), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "label", [], "any", false, false, false, 90), "html", null, true);
            echo "</label>
        <div class=\"select mb-5 is-full\">
          <select name=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 92), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 92), "html", null, true);
            echo "\" required>
            <option value=\"\">--Please choose an option--</option>
            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["select"], "data", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 95
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["item"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null));
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_8 = $context["item"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null));
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "          </select>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "      <!-- SELECTS END -->
      
      <button class=\"button is-primary is-fullwidth\" type=\"submit\">ADD</button>
    </form>
  </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "products.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 101,  311 => 97,  300 => 95,  296 => 94,  289 => 92,  282 => 90,  279 => 89,  275 => 88,  270 => 85,  264 => 84,  258 => 81,  252 => 80,  249 => 79,  246 => 78,  243 => 77,  239 => 76,  230 => 69,  220 => 65,  215 => 62,  206 => 58,  200 => 57,  192 => 55,  185 => 53,  180 => 52,  176 => 51,  169 => 49,  162 => 47,  159 => 46,  155 => 45,  151 => 43,  145 => 42,  137 => 39,  131 => 38,  128 => 37,  122 => 35,  119 => 34,  115 => 33,  112 => 32,  108 => 31,  101 => 27,  97 => 25,  92 => 22,  83 => 20,  79 => 19,  75 => 17,  73 => 16,  68 => 13,  61 => 9,  57 => 7,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block content %}
<main class=\"container grid\" id=\"content\">

  <!-- Info message -->
  {% if info %}
    <article class=\"message is-success\">
      <div class=\"message-body\">
        {{ info }}
      </div>
    </article>
  {% endif %}


  <!-- Error message -->
  {% if errors %}
    <article class=\"message is-warning\">
      <div class=\"message-body\">
        {% for error in errors %}
          <p>{{ error }}</p>
        {% endfor %}
      </div>
    </article>
  {% endif %}

  <header class=\"is-flex is-align-items-center is-justify-content-space-between mb-5\">
    <h1 class=\"title mb-0\">{{ title|capitalize }}</h1>
    <a class=\"button is-link\" href=\"#create-new-option\">Create New Option</a>
  </header>

  {% for product in products %}
    <form action=\"product.php\" method=\"POST\" class=\"box mb-5 product-container\">
      {% for field in fields %}
        {% if field.key == 'id' %}
          <input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\">
        {% else %}
          <div class=\"control mb-3\">
            <label for=\"{{ field.key }}\" class=\"label\">{{ field.label | upper }}</label>
            <input type=\"text\" class=\"input\" name=\"{{ field.key }}\" value=\"{{ product[field.key] }}\">
          </div>
        {% endif %}
      {% endfor %}

      <!-- SELECTS -->
      {% for select in selects %}
        <div>
          <label class=\"label\" for=\"{{ select.fk }}\">{{ select.label }}</label>
          <div class=\"select mb-5 is-full\">
            <select name=\"{{ select.fk }}\" id=\"{{ select.fk }}\" required>
              <option value=\"\">--Please choose an option--</option>
              {% for item in select.data %}
                {% if item['id'] == product[select.fk] %}               
                  <option value=\"{{ item['id']|e }}\" selected>{{ item[\"name\"]|e }}</option>
                {% else%}
                <option value=\"{{ item['id']|e }}\">{{ item[\"name\"]|e }}</option>
                {% endif %}
              {% endfor %}
            </select>
          </div>
        </div>
      {% endfor %}

      <div class=\"buttons mt-5 is-flex\">
        <input type=\"submit\" value=\"Save\" class=\"button is-primary is-flex-grow-1\">
        <a href=\"product.php?t=delete&id={{ product.id }}\"  class=\"button is-danger\">Delete</a>
      </div>
    </form>
  {% endfor %}

  <div class=\"box p-5 mb-5\">
    <!-- CREATE NEW OPTION -->
    <h2 class=\"subtitle has-text-weight-bold\">Create New Product</h2>
    <form class=\"product-container my-5\" action=\"product.php\" method=\"POST\" id=\"create-new-option\">
      <input type=\"hidden\" name=\"t\" value=\"create\">
      <!-- FIELDS START-->
      {% for field in fields %}
        {% if field.key == 'id' %}
        {% else %}
          <div class=\"control mb-3\">
            <label for=\"{{ field.key }}\" class=\"label\">{{ field.label | e }}</label>
            <input type=\"text\" class=\"input\" name=\"{{ field.key }}\" value=\"\">
          </div>
        {% endif %}
      {% endfor %}
      <!-- FIELDS END -->
      
      <!-- SELECTS START -->
      {% for select in selects %}
      <div>
        <label class=\"label\" for=\"{{ select.fk }}\">{{ select.label }}</label>
        <div class=\"select mb-5 is-full\">
          <select name=\"{{ select.fk }}\" id=\"{{ select.fk }}\" required>
            <option value=\"\">--Please choose an option--</option>
            {% for item in select.data %}
              <option value=\"{{ item['id']|e }}\">{{ item[\"name\"]|e }}</option>
            {% endfor %}
          </select>
        </div>
      </div>
      {% endfor %}
      <!-- SELECTS END -->
      
      <button class=\"button is-primary is-fullwidth\" type=\"submit\">ADD</button>
    </form>
  </div>
</main>
{% endblock %}", "products.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\products.html");
    }
}
