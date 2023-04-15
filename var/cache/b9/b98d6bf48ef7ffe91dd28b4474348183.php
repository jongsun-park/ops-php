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
  <body>
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

          <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"ops_main_navbar\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
          </a>
        </div>

        <!-- MENUS -->
        <div id=\"ops_main_navbar\" class=\"navbar-menu\">
          <div class=\"navbar-start\">
            <a class=\"navbar-item\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "index.php\">Home</a>
            <a class=\"navbar-item\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "production.php\">Production</a>
            <a class=\"navbar-item\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "product.php\">Product</a>
            <!-- OPTIONS -->
            <div class=\"navbar-item has-dropdown is-hoverable\">
              <a class=\"navbar-link\">
                Options
              </a>

              <div class=\"navbar-dropdown\">
                <a class=\"navbar-item\">
                  Option 1
                </a>
                <a class=\"navbar-item\">
                  Option 2
                </a>
                <a class=\"navbar-item\">
                  Option 3
                </a>
                <hr class=\"navbar-divider\">
                <a class=\"navbar-item\">
                  Option 4
                </a>
              </div>
            </div>
            <!-- SEARCH -->
            <a class=\"navbar-item\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "search.php\" class=\"navbar-link\">
              <span class=\"icon-search\"></span><span class=\"search-text\">Search</span>
            </a>
          </div>
          <!-- MEMBERS -->
          <div class=\"navbar-end\">
            <div class=\"navbar-item\">
              <div class=\"buttons\">
                ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 68) == 0)) {
            // line 69
            echo "                  <a class=\"button is-primary\" href=\"login.php\" class=\"nav-item nav-link\">Log in</a> 
                  <a class=\"button is-light\" href=\"register.php\" class=\"nav-item nav-link\">Register</a>
                ";
        } else {
            // line 72
            echo "                  <a class=\"button is-primary\" href=\"member.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_name", [], "any", false, false, false, 72), "html", null, true);
            echo "</a> 
                  ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 73) == "admin")) {
                // line 74
                echo "                    <a class=\"button is-primary\" href=\"admin/index.php\">Admin</a> 
                  ";
            }
            // line 76
            echo "                  <a class=\"button is-light\" href=\"logout.php\">Logout</a>
                ";
        }
        // line 78
        echo "
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "    <!-- FOOTER -->
    <footer class=\"footer\">
      <div class=\"content has-text-centered\">
        <p>
          <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "contact.php\">Contact us</a>
          <span class=\"copyright\">&copy; <strong>OPS</strong> ";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
        </p>
      </div>
    </footer>
    <script src=\"";
        // line 95
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

    // line 85
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
        return array (  212 => 85,  205 => 7,  198 => 6,  191 => 95,  184 => 91,  180 => 90,  174 => 86,  172 => 85,  163 => 78,  159 => 76,  155 => 74,  153 => 73,  146 => 72,  141 => 69,  139 => 68,  128 => 60,  101 => 36,  97 => 35,  93 => 34,  77 => 21,  73 => 20,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  40 => 1,);
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
  <body>
    <!-- HEADER -->
    <header class=\"mt-2 mb-5\">
      <!-- NAVIGATION -->
      <nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
        <!-- LOGO -->
        <div class=\"navbar-brand\">
          <a class=\"navbar-item\" href=\"{{ doc_root }}index.php\">
            <img src=\"{{ doc_root }}img/logo.png\" width=\"112\" height=\"28\">
          </a>

          <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"ops_main_navbar\">
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
              <a class=\"navbar-link\">
                Options
              </a>

              <div class=\"navbar-dropdown\">
                <a class=\"navbar-item\">
                  Option 1
                </a>
                <a class=\"navbar-item\">
                  Option 2
                </a>
                <a class=\"navbar-item\">
                  Option 3
                </a>
                <hr class=\"navbar-divider\">
                <a class=\"navbar-item\">
                  Option 4
                </a>
              </div>
            </div>
            <!-- SEARCH -->
            <a class=\"navbar-item\" href=\"{{ doc_root }}search.php\" class=\"navbar-link\">
              <span class=\"icon-search\"></span><span class=\"search-text\">Search</span>
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
