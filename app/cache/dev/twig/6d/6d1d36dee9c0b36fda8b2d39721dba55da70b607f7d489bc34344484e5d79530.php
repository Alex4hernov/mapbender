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

/* @FOMUser/User/form.html.twig */
class __TwigTemplate_bb0c030e078cdd9ed810e0a65edad7fb20abbd4632216f34b226ab0bcf1798f8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'manager_content' => [$this, 'block_manager_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOMUser/User/form.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@FOMUser/User/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.edit_user"), "html", null, true);
            echo "
  ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.new_user"), "html", null, true);
            echo "
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 16
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"application/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fomuser/js/acl-form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"application/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fommanager/js/form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"application/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/user-control.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile_assets"] ?? $this->getContext($context, "profile_assets")), "js", []));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 21
            echo "    <script type=\"application/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["url"]), "html", null, true);
            echo "\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_manager_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manager_content"));

        // line 26
        echo "    ";
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
            // line 27
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_update", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "method" => "POST", "attr" => ["novalidate" => "novalidate", "autocomplete" => "off", "name" =>             // line 28
($context["form_name"] ?? $this->getContext($context, "form_name"))]]);
            // line 29
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_create"), "method" => "POST", "attr" => ["novalidate" => "novalidate", "autocomplete" => "off", "name" =>             // line 32
($context["form_name"] ?? $this->getContext($context, "form_name"))]]);
            // line 33
            echo "
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        $this->loadTemplate("FOMUserBundle:User:container.html.twig", "@FOMUser/User/form.html.twig", 36)->display($context);
        // line 37
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "

    <div class=\"right\">
      <input class=\"button\" type=\"submit\" value=\"";
        // line 41
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.save"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.create"), "html", null, true);
        }
        echo "\"/>
      <a class=\"button critical\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.cancel"), "html", null, true);
        echo "</a>
    </div>
    ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<div class=\"clearContainer\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOMUser/User/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 44,  178 => 42,  170 => 41,  164 => 38,  161 => 37,  159 => 36,  156 => 35,  152 => 33,  150 => 32,  148 => 31,  144 => 29,  142 => 28,  140 => 27,  137 => 26,  131 => 25,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  101 => 17,  96 => 16,  90 => 15,  80 => 12,  74 => 11,  63 => 7,  57 => 5,  54 => 4,  48 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"MapbenderManagerBundle::manager.html.twig\" %}

{% block title %}
  {% if edit %}
    {{ \"fom.user.user.form.edit_user\" | trans}}
  {% else %}
    {{ \"fom.user.user.form.new_user\" | trans}}
  {% endif %}
{% endblock %}

{% block css %}
  {{parent()}}
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"application/javascript\" src=\"{{ asset('bundles/fomuser/js/acl-form.js') }}\"></script>
  <script type=\"application/javascript\" src=\"{{ asset('bundles/fommanager/js/form.js') }}\"></script>
  <script type=\"application/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/user-control.js') }}\"></script>
  {% for url in profile_assets.js %}
    <script type=\"application/javascript\" src=\"{{ asset(url) }}\"></script>
  {% endfor %}
{% endblock %}

{% block manager_content %}
    {% if edit %}
        {{ form_start(form, { 'action': path('fom_user_user_update', { 'id': user.id }), 'method': 'POST', 'attr': {
            novalidate: 'novalidate', autocomplete: 'off', name: form_name
        }}) }}
    {% else %}
        {{ form_start(form, { 'action': path('fom_user_user_create'), 'method': 'POST', 'attr': {
          novalidate: 'novalidate', autocomplete: 'off', name: form_name
        }}) }}
    {% endif %}

    {% include 'FOMUserBundle:User:container.html.twig' %}

    {{ form_row(form._token) }}

    <div class=\"right\">
      <input class=\"button\" type=\"submit\" value=\"{% if edit %}{{ 'fom.user.user.form.save' | trans }}{% else %}{{ 'fom.user.user.form.create' | trans }}{% endif %}\"/>
      <a class=\"button critical\" href=\"{{ path('fom_user_user_index') }}\">{{ 'fom.user.user.form.cancel' | trans}}</a>
    </div>
    {{ form_end(form) }}
<div class=\"clearContainer\"></div>
{% endblock %}
", "@FOMUser/User/form.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/User/form.html.twig");
    }
}
