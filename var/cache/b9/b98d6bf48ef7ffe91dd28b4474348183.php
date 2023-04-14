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
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/favicon.ico\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css\">
  </head>
  <body>
    <header>
      <a class=\"skip-link\" href=\"#content\">Skip to content</a>
      <nav class=\"member-menu\">
        <div class=\"container\">
          ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 19) == 0)) {
            // line 20
            echo "            <a href=\"login.php\" class=\"nav-item nav-link\">Log in</a> /
            <a href=\"register.php\" class=\"nav-item nav-link\">Register</a>
          ";
        } else {
            // line 23
            echo "            <a href=\"member.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "forename", [], "any", false, false, false, 23), "html", null, true);
            echo "</a> /
            ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 24) == "admin")) {
                // line 25
                echo "              <a href=\"admin/index.php\">Admin</a> /
            ";
            }
            // line 27
            echo "            <a href=\"logout.php\">Logout</a>
          ";
        }
        // line 29
        echo "        </div>
      </nav>
      <div class=\"container\">
        <div class=\"logo\">
          <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "index.php\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/logo.png\" alt=\"Fergusons' Operations\"></a>
        </div>
        <nav>
          <button id=\"toggle-navigation\" aria-expanded=\"false\">
            <span class=\"icon-menu\"></span><span class=\"hidden\">Menu</span>
          </button>
          <ul id=\"menu\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 41
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["link"], "navigation", [], "any", false, false, false, 41) == 1)) {
                // line 42
                echo "              <li><a href=\"";
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "category.php?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\"
              ";
                // line 43
                if ((($context["section"] ?? null) == twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 43))) {
                    echo " class=\"on\"";
                }
                echo ">
                ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            <li><a href=\"";
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "search.php\">
              <span class=\"icon-search\"></span><span class=\"search-text\">Search</span>
            </a></li>
          </ul>
        </nav>
      </div><!-- /.container -->
    </header>
    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "    <footer>
      <div class=\"container\">
        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "contact.php\">Contact us</a>
        <span class=\"copyright\">&copy; OPS ";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
      </div>
    </footer>
    <script src=\"";
        // line 61
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

    // line 54
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
        return array (  193 => 54,  186 => 7,  179 => 6,  172 => 61,  166 => 58,  162 => 57,  158 => 55,  156 => 54,  145 => 47,  139 => 46,  134 => 44,  128 => 43,  121 => 42,  118 => 41,  114 => 40,  102 => 33,  96 => 29,  92 => 27,  88 => 25,  86 => 24,  79 => 23,  74 => 20,  72 => 19,  61 => 11,  55 => 8,  51 => 7,  47 => 6,  40 => 1,);
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
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ doc_root }}img/favicon.ico\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css\">
  </head>
  <body>
    <header>
      <a class=\"skip-link\" href=\"#content\">Skip to content</a>
      <nav class=\"member-menu\">
        <div class=\"container\">
          {% if session.id == 0 %}
            <a href=\"login.php\" class=\"nav-item nav-link\">Log in</a> /
            <a href=\"register.php\" class=\"nav-item nav-link\">Register</a>
          {% else %}
            <a href=\"member.php?id={{ session.id }}\">{{ session.forename }}</a> /
            {% if session.role == 'admin' %}
              <a href=\"admin/index.php\">Admin</a> /
            {% endif %}
            <a href=\"logout.php\">Logout</a>
          {% endif %}
        </div>
      </nav>
      <div class=\"container\">
        <div class=\"logo\">
          <a href=\"{{ doc_root }}index.php\"><img src=\"{{ doc_root }}img/logo.png\" alt=\"Fergusons' Operations\"></a>
        </div>
        <nav>
          <button id=\"toggle-navigation\" aria-expanded=\"false\">
            <span class=\"icon-menu\"></span><span class=\"hidden\">Menu</span>
          </button>
          <ul id=\"menu\">
            {% for link in navigation %}
            {% if (link.navigation == 1) %}
              <li><a href=\"{{ doc_root }}category.php?id={{ link.id }}\"
              {% if (section == link.id) %} class=\"on\"{% endif %}>
                {{ link.name }}</a></li>
            {% endif %}
            {% endfor %}
            <li><a href=\"{{ doc_root }}search.php\">
              <span class=\"icon-search\"></span><span class=\"search-text\">Search</span>
            </a></li>
          </ul>
        </nav>
      </div><!-- /.container -->
    </header>
    {% block content %}{% endblock %}
    <footer>
      <div class=\"container\">
        <a href=\"{{ doc_root }}contact.php\">Contact us</a>
        <span class=\"copyright\">&copy; OPS {{ 'now'|date('Y') }}</span>
      </div>
    </footer>
    <script src=\"{{ doc_root }}js/site.js\"></script>
  </body>
</html>", "layout.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\layout.html");
    }
}
