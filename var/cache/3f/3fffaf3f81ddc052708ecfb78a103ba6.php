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
  <h1 class=\"title mb-5\">Products</h1>

  <!-- Info message -->
  ";
        // line 7
        if (($context["info"] ?? null)) {
            // line 8
            echo "    <article class=\"message is-success\">
      <div class=\"message-body\">
        ";
            // line 10
            echo twig_escape_filter($this->env, ($context["info"] ?? null), "html", null, true);
            echo "
      </div>
    </article>
  ";
        }
        // line 14
        echo "

  <!-- Error message -->
  ";
        // line 17
        if (($context["errors"] ?? null)) {
            // line 18
            echo "    <article class=\"message is-warning\">
      <div class=\"message-body\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 21
                echo "          <p>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </div>
    </article>
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "    <form action=\"product.php\" method=\"POST\" class=\"box mb-5 product-container\">
      ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 30
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 30) == "id")) {
                    // line 31
                    echo "          <input type=\"hidden\" name=\"id\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 31), "html", null, true);
                    echo "\">
        ";
                } else {
                    // line 33
                    echo "          <div class=\"control mb-3\">
            <label for=\"";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 34), "html", null, true);
                    echo "\" class=\"label\">";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 34)), "html", null, true);
                    echo "</label>
            <input type=\"text\" class=\"input\" name=\"";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["product"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["field"], "key", [], "any", false, false, false, 35)] ?? null) : null), "html", null, true);
                    echo "\">
          </div>
        ";
                }
                // line 38
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
      <!-- SELECTS -->
      ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["selects"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                // line 42
                echo "        <div>
          <label class=\"label\" for=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 43), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "label", [], "any", false, false, false, 43), "html", null, true);
                echo "</label>
          <div class=\"select mb-5 is-full\">
            <select name=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 45), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
              <option value=\"\">--Please choose an option--</option>
              ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["select"], "data", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 48
                    echo "                ";
                    if (((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null) == (($__internal_compile_2 = $context["product"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["select"], "fk", [], "any", false, false, false, 48)] ?? null) : null))) {
                        echo "               
                  <option value=\"";
                        // line 49
                        echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null));
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["item"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null));
                        echo "</option>
                ";
                    } else {
                        // line 51
                        echo "                <option value=\"";
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["item"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null));
                        echo "\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["item"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null));
                        echo "</option>
                ";
                    }
                    // line 53
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "            </select>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
      <div class=\"buttons mt-5 is-flex\">
        <input type=\"submit\" value=\"Save\" class=\"button is-primary is-flex-grow-1\">
        <a href=\"product.php?t=delete&id=";
            // line 61
            echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["product"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["id"] ?? null)] ?? null) : null));
            echo "\"  class=\"button is-danger\">Delete</a>
      </div>
    </form>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</main>
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
        return array (  223 => 65,  213 => 61,  208 => 58,  199 => 54,  193 => 53,  185 => 51,  178 => 49,  173 => 48,  169 => 47,  162 => 45,  155 => 43,  152 => 42,  148 => 41,  144 => 39,  138 => 38,  130 => 35,  124 => 34,  121 => 33,  115 => 31,  112 => 30,  108 => 29,  105 => 28,  101 => 27,  98 => 26,  93 => 23,  84 => 21,  80 => 20,  76 => 18,  74 => 17,  69 => 14,  62 => 10,  58 => 8,  56 => 7,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block content %}
<main class=\"container grid\" id=\"content\">
  <h1 class=\"title mb-5\">Products</h1>

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
            <select name=\"{{ select.fk }}\" id=\"{{ select.fk }}\">
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
        <a href=\"product.php?t=delete&id={{product[id]|e}}\"  class=\"button is-danger\">Delete</a>
      </div>
    </form>
  {% endfor %}
</main>
{% endblock %}", "products.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\products.html");
    }
}
