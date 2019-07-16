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

/* @FOMUser/Password/form.html.twig */
class __TwigTemplate_4bddfa5f970a6c2372f4759e7c68722b675d2e0110f1cf3cc64af0e000e29a08 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'favicon' => [$this, 'block_favicon'],
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOMUser/Password/form.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderCoreBundle:Login:box.html.twig", "@FOMUser/Password/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_favicon($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.password.form.title"), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "mb3-login", "type" => "css"]), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/workshopdemo/password.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_box_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_content"));

        // line 9
        echo "  <div class=\"loginBox forgot\">
    <h2 class=\"contentTitle\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.password.form.caption"), "html", null, true);
        echo "</h2>

      ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_password_request"), "method" => "POST", "attr" => ["novalidate" => "novalidate", "autocomplete" => "off"]]);
        // line 14
        echo "
        <p class='labelText'>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.password.form.message"), "html", null, true);
        echo "</p>
      ";
        // line 16
        if ((twig_length_filter($this->env, twig_trim_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors'))) > 0)) {
            // line 17
            echo "        <div class=\"messageBox error\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "</div>
      ";
        }
        // line 19
        echo "
      <label for=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "search", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"left labelInput\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.password.form.username_email"), "html", null, true);
        echo ":<span class=\"required\">*</span></label>
      ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "search", []), 'widget');
        echo "
      ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "

      <a class=\"left iconLinkButton linkButton\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_login_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.password.form.back_to_login"), "html", null, true);
        echo "</a>
      <button class=\"button right\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.password.form.require_password"), "html", null, true);
        echo "</button>
      ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <div class=\"clearContainer\"></div>
  </div>
 <script type=\"text/javascript\">
    var Mapbender = Mapbender || {};
    Mapbender.configuration = {elements:{}};
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOMUser/Password/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 26,  149 => 25,  143 => 24,  138 => 22,  134 => 21,  128 => 20,  125 => 19,  119 => 17,  117 => 16,  113 => 15,  110 => 14,  108 => 12,  103 => 10,  100 => 9,  94 => 8,  85 => 6,  80 => 5,  74 => 4,  60 => 3,  48 => 2,  32 => 1,);
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
{% block favicon %}{{ asset('favicon.png') }}{% endblock %}
{% block title %} {{ 'fom.user.password.form.title' | trans}} {% endblock %}
{% block css %}
  <link rel=\"stylesheet\" href=\"{{ path('mapbender_core_application_assets', {'slug': 'mb3-login', 'type': 'css'}) }}\"/>
  <link rel=\"stylesheet\" href=\"{{ asset('bundles/workshopdemo/password.css') }}\"/>
{% endblock %}
{% block box_content %}
  <div class=\"loginBox forgot\">
    <h2 class=\"contentTitle\">{{ 'fom.user.password.form.caption' | trans}}</h2>

      {{ form_start(form, { 'action': path('fom_user_password_request'), 'method': 'POST', 'attr': {
          novalidate: 'novalidate', autocomplete: 'off'
      }}) }}
        <p class='labelText'>{{ 'fom.user.password.form.message' | trans }}</p>
      {% if form_errors(form) | trim | length > 0 %}
        <div class=\"messageBox error\">{{ form_errors(form) }}</div>
      {% endif %}

      <label for=\"{{ form.search.vars.id }}\" class=\"left labelInput\">{{\"fom.user.password.form.username_email\" | trans}}:<span class=\"required\">*</span></label>
      {{ form_widget(form.search) }}
      {{ form_row(form._token) }}

      <a class=\"left iconLinkButton linkButton\" href=\"{{ path('mapbender_core_login_login') }}\">{{ \"fom.user.password.form.back_to_login\"|trans}}</a>
      <button class=\"button right\">{{ 'fom.user.password.form.require_password' | trans}}</button>
      {{ form_end(form) }}
    <div class=\"clearContainer\"></div>
  </div>
 <script type=\"text/javascript\">
    var Mapbender = Mapbender || {};
    Mapbender.configuration = {elements:{}};
  </script>
{% endblock %}
", "@FOMUser/Password/form.html.twig", "/var/www/mapbender/app/Resources/FOMUserBundle/views/Password/form.html.twig");
    }
}
