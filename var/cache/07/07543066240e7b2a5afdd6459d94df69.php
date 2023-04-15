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

/* register.html */
class __TwigTemplate_f7f639ae11306095525f8473757534a0 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "register.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 3
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register for Fergusons' Operations";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<main class=\"container\" id=\"content\">
  <section class=\"header\">
    <h1 class=\"title mb-5\">Register</h1>
  </section>
  
  ";
        // line 11
        if (($context["errors"] ?? null)) {
            // line 12
            echo "  <article class=\"message is-danger\">
    <div class=\"message-body\">
      Please correct errors
    </div>
  </article>
  ";
        }
        // line 18
        echo "
  <form method=\"post\" action=\"register.php\" class=\"form-membership box my-2\">
    <div class=\"field\">
      <label for=\"user_name\" class=\"label\">User Name</label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fas fa-user\"></i>
        </span>
        <input type=\"text\" name=\"user_name\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "user_name", [], "any", false, false, false, 26), "html", null, true);
        echo "\" id=\"user_name\" class=\"input\">
      </div>
      <div class=\"help is-danger\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "user_name", [], "any", false, false, false, 28), "html", null, true);
        echo "</div>
    </div>

    <div class=\"field\">
      <label class=\"label\" for=\"email\">Email address</label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fa-solid fa-envelope\"></i>
        </span>
        <input type=\"email\" name=\"email\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "email", [], "any", false, false, false, 37), "html", null, true);
        echo "\" id=\"email\" class=\"input\">
      </div>
      <div class=\"help is-danger\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 39), "html", null, true);
        echo "</div>
    </div>

    <div class=\"field\">
      <label class=\"label\" for=\"password\">Password: </label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fas fa-lock\"></i>
        </span>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"input\">
      </div>
      <div class=\"help is-danger\">";
        // line 50
        echo twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 50);
        echo "</div>
    </div>

    <div class=\"field\">
      <label class=\"label\" for=\"confirm\">Confirm password</label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fas fa-lock\"></i>
        </span>
        <input type=\"password\" name=\"confirm\" id=\"confirm\" class=\"input\">
      </div>
      <div class=\"help is-danger\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "confirm", [], "any", false, false, false, 61), "html", null, true);
        echo "</div>
    </div>

    <div class=\"field is-grouped\">
      <div class=\"control\">
        <button type=\"submit\" class=\"button is-link\">Register</button>
      </div>
      <div class=\"control\">
        <a href=\"login.php\"><button class=\"button is-link is-light\">Login</button></a>
      </div>
    </div>
  </form>

</main>
";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 61,  129 => 50,  115 => 39,  110 => 37,  98 => 28,  93 => 26,  83 => 18,  75 => 12,  73 => 11,  66 => 6,  62 => 5,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %}Register{% endblock %}
{% block description %}Register for Fergusons' Operations{% endblock %}

{% block content %}
<main class=\"container\" id=\"content\">
  <section class=\"header\">
    <h1 class=\"title mb-5\">Register</h1>
  </section>
  
  {% if errors %}
  <article class=\"message is-danger\">
    <div class=\"message-body\">
      Please correct errors
    </div>
  </article>
  {% endif %}

  <form method=\"post\" action=\"register.php\" class=\"form-membership box my-2\">
    <div class=\"field\">
      <label for=\"user_name\" class=\"label\">User Name</label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fas fa-user\"></i>
        </span>
        <input type=\"text\" name=\"user_name\" value=\"{{ member.user_name }}\" id=\"user_name\" class=\"input\">
      </div>
      <div class=\"help is-danger\">{{ errors.user_name }}</div>
    </div>

    <div class=\"field\">
      <label class=\"label\" for=\"email\">Email address</label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fa-solid fa-envelope\"></i>
        </span>
        <input type=\"email\" name=\"email\" value=\"{{ member.email }}\" id=\"email\" class=\"input\">
      </div>
      <div class=\"help is-danger\">{{ errors.email }}</div>
    </div>

    <div class=\"field\">
      <label class=\"label\" for=\"password\">Password: </label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fas fa-lock\"></i>
        </span>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"input\">
      </div>
      <div class=\"help is-danger\">{{ errors.password|raw }}</div>
    </div>

    <div class=\"field\">
      <label class=\"label\" for=\"confirm\">Confirm password</label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fas fa-lock\"></i>
        </span>
        <input type=\"password\" name=\"confirm\" id=\"confirm\" class=\"input\">
      </div>
      <div class=\"help is-danger\">{{ errors.confirm }}</div>
    </div>

    <div class=\"field is-grouped\">
      <div class=\"control\">
        <button type=\"submit\" class=\"button is-link\">Register</button>
      </div>
      <div class=\"control\">
        <a href=\"login.php\"><button class=\"button is-link is-light\">Login</button></a>
      </div>
    </div>
  </form>

</main>
{% endblock %}", "register.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\register.html");
    }
}
