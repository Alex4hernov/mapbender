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

/* @FOMUser/Group/form.html.twig */
class __TwigTemplate_74d3bf3b1811cb074b80158712041be07079b21e068b8ad5c61bb1d969c7594b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOMUser/Group/form.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@FOMUser/Group/form.html.twig", 1);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.form.edit_group"), "html", null, true);
            echo "
  ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.form.new_group"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/user-control.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_manager_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manager_content"));

        // line 21
        echo "    ";
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
            // line 22
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_update", ["id" => $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "id", [])]), "method" => "POST", "attr" => ["novalidate" => "novalidate", "autocomplete" => "off"]]);
            // line 24
            echo "
    ";
        } else {
            // line 26
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_create"), "method" => "POST", "attr" => ["novalidate" => "novalidate", "autocomplete" => "off"]]);
            // line 28
            echo "
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 32
            echo "        <div>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "</div>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        $this->loadTemplate("FOMUserBundle:Group:container.html.twig", "@FOMUser/Group/form.html.twig", 35)->display($context);
        // line 36
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
    <div class=\"right\">
      <input class=\"button\" type=\"submit\" value=\"";
        // line 38
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.form.save"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.form.create"), "html", null, true);
        }
        echo "\"/>
      <a class=\"button critical\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.form.cancel"), "html", null, true);
        echo "</a>
    </div>
    ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <div class=\"clearContainer\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOMUser/Group/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 41,  163 => 39,  155 => 38,  149 => 36,  147 => 35,  144 => 34,  138 => 32,  136 => 31,  133 => 30,  129 => 28,  126 => 26,  122 => 24,  119 => 22,  116 => 21,  110 => 20,  101 => 17,  96 => 16,  90 => 15,  80 => 12,  74 => 11,  63 => 7,  57 => 5,  54 => 4,  48 => 3,  32 => 1,);
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
    {{ \"fom.user.group.form.edit_group\" | trans}}
  {% else %}
    {{ \"fom.user.group.form.new_group\" | trans}}
  {% endif %}
{% endblock %}

{% block css %}
  {{parent()}}
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"application/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/user-control.js') }}\"></script>
{% endblock %}

{% block manager_content %}
    {% if edit %}
        {{ form_start(form, { 'action': path('fom_user_group_update', { 'id': group.id }), 'method': 'POST', 'attr': {
            novalidate: 'novalidate', autocomplete: 'off'
        }}) }}
    {% else %}
        {{ form_start(form, { 'action': path('fom_user_group_create'), 'method': 'POST', 'attr': {
            novalidate: 'novalidate', autocomplete: 'off'
        }}) }}
    {% endif %}

    {% if form_errors(form) %}
        <div>{{ form_errors(form) }}</div>
    {% endif %}

    {% include 'FOMUserBundle:Group:container.html.twig' %}
    {{ form_row(form._token) }}
    <div class=\"right\">
      <input class=\"button\" type=\"submit\" value=\"{% if edit %}{{ 'fom.user.group.form.save' | trans }}{% else %}{{ 'fom.user.group.form.create' | trans }}{% endif %}\"/>
      <a class=\"button critical\" href=\"{{ path('fom_user_group_index') }}\">{{ 'fom.user.group.form.cancel' | trans}}</a>
    </div>
    {{ form_end(form) }}
    <div class=\"clearContainer\"></div>
{% endblock %}
", "@FOMUser/Group/form.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/Group/form.html.twig");
    }
}
