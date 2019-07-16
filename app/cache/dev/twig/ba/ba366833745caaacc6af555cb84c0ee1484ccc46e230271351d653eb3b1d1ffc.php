<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @MapbenderCore/Login/login.html.twig */
class __TwigTemplate_323ae4cc0033b0153b96963d4dfbd922c45fad9ea94c19432365207242046124 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
            'box_content' => [$this, 'block_box_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderCoreBundle:Login:box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MapbenderCore/Login/login.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderCoreBundle:Login:box.html.twig", "@MapbenderCore/Login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "mb3-login", "type" => "css"]), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/cookieconsent/build/cookieconsent.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.title"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_box_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_content"));

        // line 10
        echo "  <div class=\"loginBox login\">
    <h2 class=\"contentTitle\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.caption"), "html", null, true);
        echo "</h2>

    <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_login_logincheck");
        echo "\" method=\"post\" id=\"login\" novalidate=\"novalidate\">
      ";
        // line 14
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 15
            echo "        <div class=\"messageBox error\">
          ";
            // line 16
            if (($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", []) == "Bad credentials")) {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.errors.bad-credentials"), "html", null, true);
                echo "
          ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", [])), "html", null, true);
                echo "
          ";
            }
            // line 21
            echo "        </div>
      ";
        }
        // line 23
        echo "
      <label class=\"left labelInput\" for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.username"), "html", null, true);
        echo ":</label>
      <input class=\"input\" id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" autofocus />

      <div class=\"clearContainer\"></div>

      <label class=\"left labelInput\" for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.password"), "html", null, true);
        echo ":</label>
      <input class=\"input\" type=\"password\" id=\"password\" name=\"_password\" />

      <div class=\"clearContainer\"></div>

      ";
        // line 34
        if ((($context["selfregister"] ?? $this->getContext($context, "selfregister")) == true)) {
            // line 35
            echo "      <a class=\"linkButton iconLinkButton left\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_registration_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.register"), "html", null, true);
            echo "</a>
      ";
        }
        // line 37
        echo "      ";
        if ((($context["reset_password"] ?? $this->getContext($context, "reset_password")) == true)) {
            // line 38
            echo "      <a class=\"linkButton iconLinkButton left\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_password_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.forgot_password"), "html", null, true);
            echo "?</a>
      ";
        }
        // line 40
        echo "
      <input type=\"submit\" class=\"right button\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.login"), "html", null, true);
        echo "\" />
      <div class=\"clearContainer\"></div>
    </form>
  </div>
  <script type=\"text/javascript\">
    if(top != window) {
      top.location.href = location.href;
      top.location.reload();
    }
    var Mapbender = Mapbender || {};
    Mapbender.configuration = {elements:{}};
  </script>
    ";
        // line 53
        $this->loadTemplate("MapbenderCoreBundle::cookieconsent.html.twig", "@MapbenderCore/Login/login.html.twig", 53)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MapbenderCore/Login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 53,  166 => 41,  163 => 40,  155 => 38,  152 => 37,  144 => 35,  142 => 34,  134 => 29,  127 => 25,  123 => 24,  120 => 23,  116 => 21,  110 => 19,  104 => 17,  102 => 16,  99 => 15,  97 => 14,  93 => 13,  88 => 11,  85 => 10,  79 => 9,  67 => 7,  58 => 4,  53 => 3,  47 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"MapbenderCoreBundle:Login:box.html.twig\" %}
{% block css %}
  <link rel=\"stylesheet\" href=\"{{ path('mapbender_core_application_assets', {'slug': 'mb3-login', 'type': 'css'}) }}\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('components/cookieconsent/build/cookieconsent.min.css') }}\"/>
{% endblock %}

{% block title %}{{ 'fom.user.login.login.title' | trans}}{% endblock %}

{% block box_content %}
  <div class=\"loginBox login\">
    <h2 class=\"contentTitle\">{{ 'fom.user.login.login.caption' | trans }}</h2>

    <form action=\"{{ path(\"mapbender_core_login_logincheck\") }}\" method=\"post\" id=\"login\" novalidate=\"novalidate\">
      {% if error %}
        <div class=\"messageBox error\">
          {% if error.message == \"Bad credentials\" %}
            {{ 'fom.user.login.errors.bad-credentials' | trans }}
          {% else %}
            {{ error.message | trans }}
          {% endif %}
        </div>
      {% endif %}

      <label class=\"left labelInput\" for=\"username\">{{ 'fom.user.login.login.username' | trans}}:</label>
      <input class=\"input\" id=\"username\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\" autofocus />

      <div class=\"clearContainer\"></div>

      <label class=\"left labelInput\" for=\"password\">{{ 'fom.user.login.login.password' | trans}}:</label>
      <input class=\"input\" type=\"password\" id=\"password\" name=\"_password\" />

      <div class=\"clearContainer\"></div>

      {% if selfregister == true %}
      <a class=\"linkButton iconLinkButton left\" href=\"{{ path('fom_user_registration_form') }}\">{{ 'fom.user.login.login.register' | trans}}</a>
      {% endif %}
      {% if reset_password == true %}
      <a class=\"linkButton iconLinkButton left\" href=\"{{ path('fom_user_password_form') }}\">{{ 'fom.user.login.login.forgot_password' | trans}}?</a>
      {% endif %}

      <input type=\"submit\" class=\"right button\" value=\"{{ 'fom.user.login.login.login' | trans}}\" />
      <div class=\"clearContainer\"></div>
    </form>
  </div>
  <script type=\"text/javascript\">
    if(top != window) {
      top.location.href = location.href;
      top.location.reload();
    }
    var Mapbender = Mapbender || {};
    Mapbender.configuration = {elements:{}};
  </script>
    {% include 'MapbenderCoreBundle::cookieconsent.html.twig' %}
{% endblock %}
", "@MapbenderCore/Login/login.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Login/login.html.twig");
    }
}
