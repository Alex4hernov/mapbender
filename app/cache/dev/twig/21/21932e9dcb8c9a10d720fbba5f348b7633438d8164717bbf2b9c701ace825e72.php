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

/* @MapbenderManager/Application/new.html.twig */
class __TwigTemplate_80131219065ec989860d4605baba33c135643adc4de57b2aac8c891c10f8d359 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'js' => [$this, 'block_js'],
            'manager_content' => [$this, 'block_manager_content'],
            'securityTab' => [$this, 'block_securityTab'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "MapbenderManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MapbenderManager/Application/new.html.twig"));

        // line 1
        $context["application"] = ["slug" => "manager"];
        // line 2
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderManager/Application/new.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.new.title"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 7
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fomuser/js/acl-form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/application-edit.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/confirm-delete.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_manager_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manager_content"));

        // line 14
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_create"), "novalidate" => "novalidate"]]);
        echo "
    <div id=\"applicationTabContainer\" class=\"tabContainer applicationTabContainer\">
      <ul class=\"tabs\">
        <li id=\"tabBaseData\" class=\"tab active\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.new.base_data"), "html", null, true);
        echo "</li>
        <li id=\"tabSecurity\" class=\"tab\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.security.title"), "html", null, true);
        echo "</li>
      </ul>
      <div id=\"containerBaseData\" class=\"container active containerBaseData row no-gutters\">
          <div class=\"col-xs-8\">
            <label class=\"labelInput\" for=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.template"), "html", null, true);
        echo ":<span class=\"required\">*</span></label>
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "template", []), 'widget');
        echo "
            ";
        // line 24
        $this->loadTemplate("MapbenderManagerBundle:Application:form-basic.html.twig", "@MapbenderManager/Application/new.html.twig", 24)->display($context);
        // line 25
        echo "           </div>
           <div class=\"col-xs-4\">
                <div class=\"messageBox hint\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.create_use"), "html", null, true);
        echo "
                </div>
           </div>
      </div>

      <div id=\"containerSecurity\" class=\"container containerSecurity\">
        ";
        // line 34
        $this->displayBlock('securityTab', $context, $blocks);
        // line 37
        echo "      </div>
    </div>

    <div class=\"button-group\">
      <input type=\"submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.btn.create"), "html", null, true);
        echo "\" class=\"button\"/>
      <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_index");
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.btn.cancel"), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
    ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_securityTab($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "securityTab"));

        // line 35
        echo "          ";
        $this->loadTemplate("MapbenderManagerBundle:Application:form-security.html.twig", "@MapbenderManager/Application/new.html.twig", 35)->display($context);
        // line 36
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Application/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 36,  180 => 35,  174 => 34,  165 => 46,  161 => 45,  153 => 42,  149 => 41,  143 => 37,  141 => 34,  132 => 28,  127 => 25,  125 => 24,  121 => 23,  115 => 22,  108 => 18,  104 => 17,  97 => 14,  91 => 13,  82 => 10,  78 => 9,  74 => 8,  69 => 7,  63 => 6,  51 => 4,  43 => 2,  41 => 1,  32 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set application = {'slug': 'manager'} %}
{% extends \"MapbenderManagerBundle::manager.html.twig\" %}

{% block title %}{{ \"mb.manager.admin.application.new.title\" | trans}}{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ asset('bundles/fomuser/js/acl-form.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/application-edit.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/confirm-delete.js') }}\"></script>
{% endblock %}

{% block manager_content %}
    {{ form_start(form, {\"attr\": {\"action\": path('mapbender_manager_application_create'), \"novalidate\": \"novalidate\"}}) }}
    <div id=\"applicationTabContainer\" class=\"tabContainer applicationTabContainer\">
      <ul class=\"tabs\">
        <li id=\"tabBaseData\" class=\"tab active\">{{\"mb.manager.admin.application.new.base_data\" | trans }}</li>
        <li id=\"tabSecurity\" class=\"tab\">{{\"mb.manager.admin.application.security.title\" | trans }}</li>
      </ul>
      <div id=\"containerBaseData\" class=\"container active containerBaseData row no-gutters\">
          <div class=\"col-xs-8\">
            <label class=\"labelInput\" for=\"{{ form.title.vars.id }}\">{{\"mb.manager.admin.application.template\" | trans}}:<span class=\"required\">*</span></label>
            {{ form_widget(form.template) }}
            {% include 'MapbenderManagerBundle:Application:form-basic.html.twig' %}
           </div>
           <div class=\"col-xs-4\">
                <div class=\"messageBox hint\">
                    {{\"mb.manager.admin.application.create_use\" | trans }}
                </div>
           </div>
      </div>

      <div id=\"containerSecurity\" class=\"container containerSecurity\">
        {% block securityTab %}
          {% include 'MapbenderManagerBundle:Application:form-security.html.twig' %}
        {% endblock %}
      </div>
    </div>

    <div class=\"button-group\">
      <input type=\"submit\" value=\"{{ 'mb.manager.admin.application.btn.create' | trans }}\" class=\"button\"/>
      <a href=\"{{ path('mapbender_manager_application_index') }}\" class=\"button critical\">{{ 'mb.manager.admin.application.btn.cancel' | trans}}</a>
    </div>

    {{ form_row(form._token) }}
    {{ form_end(form, {\"render_rest\": false}) }}
{% endblock %}
", "@MapbenderManager/Application/new.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/new.html.twig");
    }
}
