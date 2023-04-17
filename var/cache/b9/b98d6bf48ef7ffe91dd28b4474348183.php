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

/* layout.html */
class __TwigTemplate_4ab8853f1fe2e24092b46f3528cb37e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "css/styles.css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/favicon.ico\">
    <!-- Font Awesome CDN -->
    <script src=\"https://kit.fontawesome.com/ca6208c7d0.js\" crossorigin=\"anonymous\" defer></script>
  </head>
  <body class=\"js\">
    <!-- HEADER -->
    <header class=\"mt-2 mb-5\">
      <!-- NAVIGATION -->
      <nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
        <!-- LOGO -->
        <div class=\"navbar-brand\">
          <a class=\"navbar-item\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "index.php\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/logo.png\" width=\"112\" height=\"28\">
          </a>

          <!-- Mobile toggle naviagtion -->
          <a role=\"button\" class=\"navbar-burger\" id=\"toggle-navigation\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"ops_main_navbar\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
          </a>
        </div>

        <!-- MENUS -->
        <div id=\"ops_main_navbar\" class=\"navbar-menu\">
          <div class=\"navbar-start\">
            <a class=\"navbar-item\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "index.php\">Home</a>
            <a class=\"navbar-item\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "production.php\">Production</a>
            <a class=\"navbar-item\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "product.php\">Product</a>
            <!-- OPTIONS -->
            <div class=\"navbar-item has-dropdown is-hoverable\">
              <a class=\"navbar-link\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "option.php\">
                Options
              </a>

              <div class=\"navbar-dropdown\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["option_tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tb"]) {
            // line 46
            echo "                  <a class=\"navbar-item\" href=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "option.php?q=";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["tb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            echo "\">
                    ";
            // line 47
            echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["tb"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
            echo "
                  </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                <hr class=\"navbar-divider\">
                <a class=\"navbar-item\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "option.php?q=wash_option\">
                  Wash Option
                </a>
              </div>
            </div>
            <!-- SEARCH -->
            <a class=\"navbar-item\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "search.php\" class=\"navbar-link\">
              <span class=\"icon-search\"><i class=\"fa-solid fa-magnifying-glass mr-2\"></i></span><span class=\"search-text\">Search</span>
            </a>
          </div>
          <!-- MEMBERS -->
          <div class=\"navbar-end\">
            <div class=\"navbar-item\">
              <div class=\"buttons\">
                ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 65) == 0)) {
            // line 66
            echo "                  <a class=\"button is-primary\" href=\"login.php\" class=\"nav-item nav-link\">Log in</a> 
                  <a class=\"button is-light\" href=\"register.php\" class=\"nav-item nav-link\">Register</a>
                ";
        } else {
            // line 69
            echo "                  <a class=\"button is-primary\" href=\"member.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_name", [], "any", false, false, false, 69), "html", null, true);
            echo "</a> 
                  ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 70) == "admin")) {
                // line 71
                echo "                    <a class=\"button is-primary\" href=\"admin/index.php\">Admin</a> 
                  ";
            }
            // line 73
            echo "                  <a class=\"button is-light\" href=\"logout.php\">Logout</a>
                ";
        }
        // line 75
        echo "
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "    <!-- FOOTER -->
    <footer class=\"footer\">
      <div class=\"content has-text-centered\">
        <p>
          <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "contact.php\">Contact us</a>
          <span class=\"copyright\">&copy; <strong>OPS</strong> ";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
        </p>
      </div>
    </footer>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "js/site.js\"></script>
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Fergusons' Operations";
    }

    // line 7
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Fergusons - Operations";
    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 82,  225 => 7,  218 => 6,  211 => 92,  204 => 88,  200 => 87,  194 => 83,  192 => 82,  183 => 75,  179 => 73,  175 => 71,  173 => 70,  166 => 69,  161 => 66,  159 => 65,  148 => 57,  139 => 51,  136 => 50,  127 => 47,  120 => 46,  116 => 45,  108 => 40,  102 => 37,  98 => 36,  94 => 35,  77 => 21,  73 => 20,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Fergusons' Operations{% endblock %}</title>
    <meta name=\"description\" content=\"{% block description %}Fergusons - Operations{% endblock %}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ doc_root }}css/styles.css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ doc_root }}img/favicon.ico\">
    <!-- Font Awesome CDN -->
    <script src=\"https://kit.fontawesome.com/ca6208c7d0.js\" crossorigin=\"anonymous\" defer></script>
  </head>
  <body class=\"js\">
    <!-- HEADER -->
    <header class=\"mt-2 mb-5\">
      <!-- NAVIGATION -->
      <nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
        <!-- LOGO -->
        <div class=\"navbar-brand\">
          <a class=\"navbar-item\" href=\"{{ doc_root }}index.php\">
            <img src=\"{{ doc_root }}img/logo.png\" width=\"112\" height=\"28\">
          </a>

          <!-- Mobile toggle naviagtion -->
          <a role=\"button\" class=\"navbar-burger\" id=\"toggle-navigation\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"ops_main_navbar\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
          </a>
        </div>

        <!-- MENUS -->
        <div id=\"ops_main_navbar\" class=\"navbar-menu\">
          <div class=\"navbar-start\">
            <a class=\"navbar-item\" href=\"{{ doc_root }}index.php\">Home</a>
            <a class=\"navbar-item\" href=\"{{ doc_root }}production.php\">Production</a>
            <a class=\"navbar-item\" href=\"{{ doc_root }}product.php\">Product</a>
            <!-- OPTIONS -->
            <div class=\"navbar-item has-dropdown is-hoverable\">
              <a class=\"navbar-link\" href=\"{{ doc_root }}option.php\">
                Options
              </a>

              <div class=\"navbar-dropdown\">
                {% for tb in option_tables %}
                  <a class=\"navbar-item\" href=\"{{ doc_root }}option.php?q={{ tb[0] }}\">
                    {{ tb[1] }}
                  </a>
                {% endfor %}
                <hr class=\"navbar-divider\">
                <a class=\"navbar-item\" href=\"{{ doc_root }}option.php?q=wash_option\">
                  Wash Option
                </a>
              </div>
            </div>
            <!-- SEARCH -->
            <a class=\"navbar-item\" href=\"{{ doc_root }}search.php\" class=\"navbar-link\">
              <span class=\"icon-search\"><i class=\"fa-solid fa-magnifying-glass mr-2\"></i></span><span class=\"search-text\">Search</span>
            </a>
          </div>
          <!-- MEMBERS -->
          <div class=\"navbar-end\">
            <div class=\"navbar-item\">
              <div class=\"buttons\">
                {% if session.id == 0 %}
                  <a class=\"button is-primary\" href=\"login.php\" class=\"nav-item nav-link\">Log in</a> 
                  <a class=\"button is-light\" href=\"register.php\" class=\"nav-item nav-link\">Register</a>
                {% else %}
                  <a class=\"button is-primary\" href=\"member.php?id={{ session.id }}\">{{ session.user_name }}</a> 
                  {% if session.role == 'admin' %}
                    <a class=\"button is-primary\" href=\"admin/index.php\">Admin</a> 
                  {% endif %}
                  <a class=\"button is-light\" href=\"logout.php\">Logout</a>
                {% endif %}

              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    {% block content %}{% endblock %}
    <!-- FOOTER -->
    <footer class=\"footer\">
      <div class=\"content has-text-centered\">
        <p>
          <a href=\"{{ doc_root }}contact.php\">Contact us</a>
          <span class=\"copyright\">&copy; <strong>OPS</strong> {{ 'now'|date('Y') }}</span>
        </p>
      </div>
    </footer>
    <script src=\"{{ doc_root }}js/site.js\"></script>
  </body>
</html>", "layout.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\layout.html");
    }
}
