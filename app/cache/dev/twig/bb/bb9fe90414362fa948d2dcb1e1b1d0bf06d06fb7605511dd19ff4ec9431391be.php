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

/* @MapbenderCore/Welcome/list.html.twig */
class __TwigTemplate_944d8cb3d78ce60f561b7e99a228fe49260bf59e4f60a348594bd8e8cc19f3b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MapbenderCore/Welcome/list.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderCore/Welcome/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.applications"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 6
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/application-list.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/confirm-delete.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_manager_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manager_content"));

        // line 12
        echo "
  ";
        // line 13
        $this->loadTemplate("MapbenderManagerBundle:Application:actions.html.twig", "@MapbenderCore/Welcome/list.html.twig", 13)->display($context);
        // line 14
        echo "  ";
        if ((twig_length_filter($this->env, ($context["applications"] ?? $this->getContext($context, "applications"))) > 0)) {
            // line 15
            echo "
  <label for=\"inputFilterApplications\" class=\"labelInput\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.filter.application"), "html", null, true);
            echo "</label><input id=\"inputFilterApplications\" type=\"text\" class=\"input listFilterInput\">

    <ul id=\"listFilterApplications\" class=\"listFilterContainer clear listFilterBoxes listFilterApplicationBoxes\">
      ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["applications"] ?? $this->getContext($context, "applications")));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 20
                echo "        <li class=\"filterItem\">
          <a target=\"_blank\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", ["slug" => $this->getAttribute($context["application"], "slug", [])]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", []), "html", null, true);
                echo "\">
            <div class=\"col1\">
              <div class=\"cell\">
              ";
                // line 24
                if ( !(null === $this->getAttribute($context["application"], "screenshot", []))) {
                    // line 25
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, ($context["uploads_web_url"] ?? $this->getContext($context, "uploads_web_url")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "slug", []), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "screenshot", []), "html", null, true);
                    echo "?t=";
                    if ((($context["time"] ?? $this->getContext($context, "time")) != null)) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "d.m.Y-H:i:s"), "html", null, true);
                    }
                    echo "\">
              ";
                } else {
                    // line 27
                    echo "                  <span class=\"iconAppDefault\"></span>
              ";
                }
                // line 29
                echo "              </div>
            </div>
          </a>
          <div class=\"col2 box\">
            <div class=\"buttonGroup\">
              <a class=\"iconView hover-highlight-effect\" target=\"_blank\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", ["slug" => $this->getAttribute($context["application"], "slug", [])]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", []), "html", null, true);
                echo "\"></a>

              ";
                // line 36
                if ((($this->getAttribute($context["application"], "source", []) === constant("Mapbender\\CoreBundle\\Entity\\Application::SOURCE_DB")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["application"]))) {
                    // line 37
                    echo "                <a class=\"iconCopy hover-highlight-effect\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_copydirectly", ["slug" => $this->getAttribute($context["application"], "slug", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.duplicate"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", []), "html", null, true);
                    echo "\"></a>
              ";
                }
                // line 39
                echo "
              ";
                // line 40
                if ((($this->getAttribute($context["application"], "source", []) === constant("Mapbender\\CoreBundle\\Entity\\Application::SOURCE_DB")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["application"]))) {
                    // line 41
                    echo "                <a class=\"iconEdit hover-highlight-effect\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_edit", ["slug" => $this->getAttribute($context["application"], "slug", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.edit.title"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", []), "html", null, true);
                    echo "\"></a>
              ";
                }
                // line 43
                echo "
              ";
                // line 44
                if ((($this->getAttribute($context["application"], "source", []) === constant("Mapbender\\CoreBundle\\Entity\\Application::SOURCE_DB")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["application"]))) {
                    // line 45
                    echo "                <a href=\"#\" class=\"";
                    echo (($this->getAttribute($context["application"], "published", [])) ? ("iconPublishActive") : ("iconPublish disabled"));
                    echo " hover-highlight-effect\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.public.on_off"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", []), "html", null, true);
                    echo "\"
                   data-url=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_togglestate", ["slug" => $this->getAttribute($context["application"], "slug", [])]), "html", null, true);
                    echo "\"></a>
              ";
                }
                // line 48
                echo "
              ";
                // line 49
                if ((($this->getAttribute($context["application"], "source", []) === constant("Mapbender\\CoreBundle\\Entity\\Application::SOURCE_DB")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["application"]))) {
                    // line 50
                    echo "                <span class=\"iconRemove hover-highlight-effect\"
                      title=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.delete"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", []), "html", null, true);
                    echo "\"
                      data-url=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_delete", ["slug" => $this->getAttribute($context["application"], "slug", [])]), "html", null, true);
                    echo "\"
                      data-slug=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "slug", []), "html", null, true);
                    echo "\"
                ></span>
              ";
                }
                // line 56
                echo "            </div>
            <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", ["slug" => $this->getAttribute($context["application"], "slug", [])]), "html", null, true);
                echo "\" class=\"title\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view_this"), "html", null, true);
                echo "\">
              ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", []), "html", null, true);
                echo "
            </a>
            <span class=\"smallerText\">";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "slug", []), "html", null, true);
                echo "</span>
            <div class=\"description\">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "description", []), "html", null, true);
                echo "</div>
          </div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    </ul>
    <div class=\"clearContainer\"></div>
  ";
        } else {
            // line 68
            echo "    <span class=\"description\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.no_application"), "html", null, true);
            echo "</span>
  ";
        }
        // line 70
        echo "  <div class=\"clearContainer\"></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MapbenderCore/Welcome/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 70,  262 => 68,  257 => 65,  247 => 61,  243 => 60,  238 => 58,  232 => 57,  229 => 56,  223 => 53,  219 => 52,  213 => 51,  210 => 50,  208 => 49,  205 => 48,  200 => 46,  191 => 45,  189 => 44,  186 => 43,  176 => 41,  174 => 40,  171 => 39,  161 => 37,  159 => 36,  150 => 34,  143 => 29,  139 => 27,  125 => 25,  123 => 24,  113 => 21,  110 => 20,  106 => 19,  100 => 16,  97 => 15,  94 => 14,  92 => 13,  89 => 12,  83 => 11,  74 => 8,  70 => 7,  65 => 6,  59 => 5,  47 => 3,  31 => 1,);
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

{% block title %}{{ \"mb.manager.admin.applications\" | trans }}{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/application-list.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/confirm-delete.js') }}\"></script>
{% endblock %}

{% block manager_content %}

  {% include \"MapbenderManagerBundle:Application:actions.html.twig\" %}
  {% if applications | length > 0 %}

  <label for=\"inputFilterApplications\" class=\"labelInput\">{{\"mb.manager.admin.filter.application\"|trans}}</label><input id=\"inputFilterApplications\" type=\"text\" class=\"input listFilterInput\">

    <ul id=\"listFilterApplications\" class=\"listFilterContainer clear listFilterBoxes listFilterApplicationBoxes\">
      {% for application in applications %}
        <li class=\"filterItem\">
          <a target=\"_blank\" href=\"{{ path('mapbender_core_application_application', {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.view' | trans }} {{ application.title }}\">
            <div class=\"col1\">
              <div class=\"cell\">
              {% if application.screenshot is not null %}
                  <img src=\"{{ uploads_web_url }}/{{application.slug}}/{{application.screenshot}}?t={% if time != null %}{{ time | date('d.m.Y-H:i:s') }}{% endif %}\">
              {% else %}
                  <span class=\"iconAppDefault\"></span>
              {% endif %}
              </div>
            </div>
          </a>
          <div class=\"col2 box\">
            <div class=\"buttonGroup\">
              <a class=\"iconView hover-highlight-effect\" target=\"_blank\" href=\"{{ path('mapbender_core_application_application', {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.view' | trans }} {{ application.title }}\"></a>

              {% if application.source is constant('Mapbender\\\\CoreBundle\\\\Entity\\\\Application::SOURCE_DB') and is_granted('EDIT', application) %}
                <a class=\"iconCopy hover-highlight-effect\" href=\"{{ path('mapbender_manager_application_copydirectly', {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.duplicate'|trans }} {{ application.title }}\"></a>
              {% endif %}

              {% if application.source is constant('Mapbender\\\\CoreBundle\\\\Entity\\\\Application::SOURCE_DB') and is_granted('EDIT', application) %}
                <a class=\"iconEdit hover-highlight-effect\" href=\"{{ path('mapbender_manager_application_edit',  {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.edit.title' | trans }} {{ application.title }}\"></a>
              {% endif %}

              {% if application.source is constant('Mapbender\\\\CoreBundle\\\\Entity\\\\Application::SOURCE_DB') and is_granted('EDIT', application) %}
                <a href=\"#\" class=\"{{ application.published ? 'iconPublishActive' : 'iconPublish disabled' }} hover-highlight-effect\" title=\"{{ 'mb.manager.admin.application.public.on_off' | trans }} {{ application.title }}\"
                   data-url=\"{{ path('mapbender_manager_application_togglestate', {'slug': application.slug}) }}\"></a>
              {% endif %}

              {% if application.source is constant('Mapbender\\\\CoreBundle\\\\Entity\\\\Application::SOURCE_DB') and is_granted('DELETE', application) %}
                <span class=\"iconRemove hover-highlight-effect\"
                      title=\"{{'mb.manager.admin.application.delete'|trans}} {{ application.title }}\"
                      data-url=\"{{ path('mapbender_manager_application_delete', { 'slug': application.slug}) }}\"
                      data-slug=\"{{ application.slug }}\"
                ></span>
              {% endif %}
            </div>
            <a href=\"{{ path('mapbender_core_application_application', {'slug': application.slug}) }}\" class=\"title\" title=\"{{ 'mb.manager.admin.application.view_this' | trans }}\">
              {{ application.title }}
            </a>
            <span class=\"smallerText\">{{ application.slug }}</span>
            <div class=\"description\">{{ application.description }}</div>
          </div>
        </li>
      {% endfor %}
    </ul>
    <div class=\"clearContainer\"></div>
  {% else %}
    <span class=\"description\">{{ 'mb.manager.admin.application.no_application' | trans }}</span>
  {% endif %}
  <div class=\"clearContainer\"></div>

{% endblock %}
", "@MapbenderCore/Welcome/list.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Welcome/list.html.twig");
    }
}
