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

/* @MapbenderManager/Application/edit.html.twig */
class __TwigTemplate_b70a7824a0359d555f933ccf0d3f31d35789153f474a19e13c2ab2fbdfcc59e1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'manager_content' => [$this, 'block_manager_content'],
            'securityTab' => [$this, 'block_securityTab'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MapbenderManager/Application/edit.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderManager/Application/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "title", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/lib/codemirror.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/theme/neo.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/lib/codemirror.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/mode/yaml/yaml.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/mode/css/css.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/keymap/sublime.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/addon/selection/active-line.js"), "html", null, true);
        echo "\"></script>

  <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fomuser/js/acl-form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/application-edit.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/confirm-delete.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_manager_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manager_content"));

        // line 25
        echo "  <a class=\"iconView iconBig right\" target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", [])]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view"), "html", null, true);
        echo "\"></a>
    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_update", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", [])]), "novalidate" => "novalidate"]]);
        echo "
    <div id=\"applicationTabContainer\" class=\"tabContainer applicationTabContainer\">
      <ul class=\"tabs\">
        <li id=\"tabBaseData\" class=\"tab active\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.edit.base_data"), "html", null, true);
        echo "</li>
        <li id=\"tabLayout\" class=\"tab\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.layouts"), "html", null, true);
        echo "</li>
        <li id=\"tabLayers\" class=\"tab\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.layersets"), "html", null, true);
        echo "</li>
        <li id=\"tabCustomCss\" class=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.custom_css"), "html", null, true);
        echo "</li>
        <li id=\"tabSecurity\" class=\"tab\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.security.title"), "html", null, true);
        echo "</li>
      </ul>
      <div id=\"containerBaseData\" class=\"container active containerBaseData row no-gutters\">

        <div class=\"col-xs-8\">";
        // line 37
        $this->loadTemplate("MapbenderManagerBundle:Application:form-basic.html.twig", "@MapbenderManager/Application/edit.html.twig", 37)->display($context);
        echo "</div>
        <div class=\"col-xs-4\">
            <div class=\"screenshot_img";
        // line 39
        echo ((twig_test_empty(($context["screenshot"] ?? $this->getContext($context, "screenshot")))) ? (" default") : (""));
        echo "\">
                <div class=\"cell_edit\">
                    <div class=\"delete button critical hidden\">X</div>
                    <img alt=\"Load\" data-load=true class=\"screenshot\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["screenshot"] ?? $this->getContext($context, "screenshot")), "html", null, true);
        echo "\" />
                    <i class=\"iconAppDefault\"></i>
                </div>
            </div>
        </div>
      </div>
      <div id=\"containerLayout\" class=\"container\">
        ";
        // line 49
        $this->loadTemplate("MapbenderManagerBundle:Application:form-elements.html.twig", "@MapbenderManager/Application/edit.html.twig", 49)->display($context);
        // line 50
        echo "      </div>
      <div id=\"containerLayers\" class=\"container\">
        ";
        // line 52
        $this->loadTemplate("MapbenderManagerBundle:Application:form-layersets.html.twig", "@MapbenderManager/Application/edit.html.twig", 52)->display($context);
        // line 53
        echo "      </div>
      <div id=\"containerCustomCss\" class=\"container containerCustomCss\">
        ";
        // line 55
        $this->loadTemplate("MapbenderManagerBundle:Application:form-css.html.twig", "@MapbenderManager/Application/edit.html.twig", 55)->display($context);
        // line 56
        echo "      </div>
      <div id=\"containerSecurity\" class=\"container containerSecurity\">
        ";
        // line 58
        $this->displayBlock('securityTab', $context, $blocks);
        // line 61
        echo "      </div>
    </div>
    <div class=\"clearContainer\"></div>
    <div class=\"button-group\">
        <input type=\"submit\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.save"), "html", null, true);
        echo "\" class=\"button\"/>
        <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_index");
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.cancel"), "html", null, true);
        echo "</a>
    </div>
    ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
    ";
        // line 69
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_securityTab($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "securityTab"));

        // line 59
        echo "          ";
        $this->loadTemplate("MapbenderManagerBundle:Application:form-security.html.twig", "@MapbenderManager/Application/edit.html.twig", 59)->display($context);
        // line 60
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Application/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 60,  253 => 59,  247 => 58,  238 => 69,  234 => 68,  227 => 66,  223 => 65,  217 => 61,  215 => 58,  211 => 56,  209 => 55,  205 => 53,  203 => 52,  199 => 50,  197 => 49,  187 => 42,  181 => 39,  176 => 37,  169 => 33,  165 => 32,  161 => 31,  157 => 30,  153 => 29,  147 => 26,  140 => 25,  134 => 24,  125 => 21,  121 => 20,  117 => 19,  112 => 17,  108 => 16,  104 => 15,  100 => 14,  96 => 13,  91 => 12,  85 => 11,  76 => 8,  72 => 7,  67 => 6,  61 => 5,  49 => 3,  33 => 1,);
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

{% block title %}{{ application.title }}{% endblock %}

{% block css %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('components/codemirror/lib/codemirror.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('components/codemirror/theme/neo.css') }}\"/>
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ asset('components/codemirror/lib/codemirror.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('components/codemirror/mode/yaml/yaml.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('components/codemirror/mode/css/css.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('components/codemirror/keymap/sublime.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('components/codemirror/addon/selection/active-line.js') }}\"></script>

  <script type=\"text/javascript\" src=\"{{ asset('bundles/fomuser/js/acl-form.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/application-edit.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/confirm-delete.js') }}\"></script>
{% endblock %}

{% block manager_content %}
  <a class=\"iconView iconBig right\" target=\"_blank\" href=\"{{ path('mapbender_core_application_application', {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.view' | trans }}\"></a>
    {{ form_start(form, {\"attr\": {\"action\": path('mapbender_manager_application_update', { 'slug': application.slug }), \"novalidate\": \"novalidate\"}}) }}
    <div id=\"applicationTabContainer\" class=\"tabContainer applicationTabContainer\">
      <ul class=\"tabs\">
        <li id=\"tabBaseData\" class=\"tab active\">{{\"mb.manager.admin.application.edit.base_data\" | trans }}</li>
        <li id=\"tabLayout\" class=\"tab\">{{\"mb.manager.admin.application.layouts\" | trans }}</li>
        <li id=\"tabLayers\" class=\"tab\">{{\"mb.manager.admin.application.layersets\" | trans }}</li>
        <li id=\"tabCustomCss\" class=\"tab\">{{\"mb.manager.admin.application.custom_css\" | trans }}</li>
        <li id=\"tabSecurity\" class=\"tab\">{{\"mb.manager.admin.application.security.title\" | trans }}</li>
      </ul>
      <div id=\"containerBaseData\" class=\"container active containerBaseData row no-gutters\">

        <div class=\"col-xs-8\">{% include 'MapbenderManagerBundle:Application:form-basic.html.twig' %}</div>
        <div class=\"col-xs-4\">
            <div class=\"screenshot_img{{ screenshot is empty ? ' default' }}\">
                <div class=\"cell_edit\">
                    <div class=\"delete button critical hidden\">X</div>
                    <img alt=\"Load\" data-load=true class=\"screenshot\" src=\"{{ screenshot }}\" />
                    <i class=\"iconAppDefault\"></i>
                </div>
            </div>
        </div>
      </div>
      <div id=\"containerLayout\" class=\"container\">
        {% include 'MapbenderManagerBundle:Application:form-elements.html.twig' %}
      </div>
      <div id=\"containerLayers\" class=\"container\">
        {% include 'MapbenderManagerBundle:Application:form-layersets.html.twig' %}
      </div>
      <div id=\"containerCustomCss\" class=\"container containerCustomCss\">
        {% include 'MapbenderManagerBundle:Application:form-css.html.twig' %}
      </div>
      <div id=\"containerSecurity\" class=\"container containerSecurity\">
        {% block securityTab %}
          {% include 'MapbenderManagerBundle:Application:form-security.html.twig' %}
        {% endblock %}
      </div>
    </div>
    <div class=\"clearContainer\"></div>
    <div class=\"button-group\">
        <input type=\"submit\" value=\"{{ 'mb.manager.admin.application.save' | trans }}\" class=\"button\"/>
        <a href=\"{{ path('mapbender_manager_application_index') }}\" class=\"button critical\">{{ 'mb.manager.admin.application.cancel' | trans}}</a>
    </div>
    {{ form_row(form._token) }}
    {{ form_end(form, {\"render_rest\": false}) }}
{% endblock %}
", "@MapbenderManager/Application/edit.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/edit.html.twig");
    }
}
