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

/* login.html */
class __TwigTemplate_a37c3fd2532bdb1c2476a6a1698350d1 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log In";
    }

    // line 3
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in to your Fergusons' Operations account";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<main class=\"container\" id=\"content\">
  <section class=\"header\">
    <h1 class=\"title mb-5\">Log in</h1>
  </section>
  <form method=\"post\" action=\"login.php\" class=\"form-membership box my-2\">
    ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "      <article class=\"message is-success\">
        <div class=\"message-body\">
          ";
            // line 14
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "
        </div>
      </article>
    ";
        }
        // line 18
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 19
            echo "      <article class=\"message is-danger\">
        <div class=\"message-body\">
          ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "message", [], "any", false, false, false, 21), "html", null, true);
            echo "
        </div>
      </article>
    ";
        }
        // line 25
        echo "
    <div class=\"field\">
      <label class=\"label\" for=\"email\">Email</label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fa-solid fa-envelope\"></i>
        </span>
        <input type=\"email\" name=\"email\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" id=\"email\" class=\"input\">
      </div>
      <div class=\"help is-danger\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "</div>
    </div>

    <div class=\"field\">
      <label class=\"label\" for=\"password\">Password </label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fas fa-lock\"></i>
        </span>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"input\">
      </div>
      <div class=\"help is-danger\">";
        // line 45
        echo twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 45);
        echo "</div>
    </div>

    <div class=\"field is-grouped\">
      <div class=\"control\">
        <button type=\"submit\" class=\"button is-link\">Log in</button>
      </div>
    </div>

    <p><a href=\"password-lost.php\">Lost password?</a></p>
  </form>

</main>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  115 => 34,  110 => 32,  101 => 25,  94 => 21,  90 => 19,  87 => 18,  80 => 14,  76 => 12,  74 => 11,  66 => 5,  62 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %}Log In{% endblock %}
{% block description %}Log in to your Fergusons' Operations account{% endblock %}
{% block content %}

<main class=\"container\" id=\"content\">
  <section class=\"header\">
    <h1 class=\"title mb-5\">Log in</h1>
  </section>
  <form method=\"post\" action=\"login.php\" class=\"form-membership box my-2\">
    {% if success %}
      <article class=\"message is-success\">
        <div class=\"message-body\">
          {{ success }}
        </div>
      </article>
    {% endif %}
    {% if errors %}
      <article class=\"message is-danger\">
        <div class=\"message-body\">
          {{ errors.message }}
        </div>
      </article>
    {% endif %}

    <div class=\"field\">
      <label class=\"label\" for=\"email\">Email</label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fa-solid fa-envelope\"></i>
        </span>
        <input type=\"email\" name=\"email\" value=\"{{ email }}\" id=\"email\" class=\"input\">
      </div>
      <div class=\"help is-danger\">{{ errors.email }}</div>
    </div>

    <div class=\"field\">
      <label class=\"label\" for=\"password\">Password </label>
      <div class=\"control has-icons-left\">
        <span class=\"icon is-small is-left\">
          <i class=\"fas fa-lock\"></i>
        </span>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"input\">
      </div>
      <div class=\"help is-danger\">{{ errors.password|raw }}</div>
    </div>

    <div class=\"field is-grouped\">
      <div class=\"control\">
        <button type=\"submit\" class=\"button is-link\">Log in</button>
      </div>
    </div>

    <p><a href=\"password-lost.php\">Lost password?</a></p>
  </form>

</main>
{% endblock %}", "login.html", "C:\\Users\\jongs\\Desktop\\operations\\templates\\login.html");
    }
}
