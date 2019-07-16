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

/* @MapbenderManager/Repository/index.html.twig */
class __TwigTemplate_fae1f878edc5f6afd474a445e49ae9091b68f7003607dac024517d6e98b9804b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MapbenderManager/Repository/index.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderManager/Repository/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.sources"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 10
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/service-list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_manager_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manager_content"));

        // line 15
        if (($context["create_permission"] ?? $this->getContext($context, "create_permission"))) {
            // line 16
            echo "<a class=\"iconAdd iconBig right\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_new");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.add"), "html", null, true);
            echo "\"></a>
";
        }
        // line 18
        if ((twig_length_filter($this->env, ($context["sources"] ?? $this->getContext($context, "sources"))) > 0)) {
            // line 19
            echo "  <label for=\"inputFilterServices\" class=\"labelInput\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.filter.source"), "html", null, true);
            echo "</label><input id=\"inputFilterServices\" type=\"text\" class=\"input listFilterInput\">

  <ul id=\"listFilterServices\" class=\"listFilterContainer listFilterBoxes listFilterServiceBoxes\">
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sources"] ?? $this->getContext($context, "sources")));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 23
                echo "      <li class=\"filterItem\">
        <div class=\"col1\">
          <span class=\"smallerText\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "id", []), "html", null, true);
                echo "</span><br>
          <span class=\"smallerText\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "type", []), "html", null, true);
                echo "</span><br>
            ";
                // line 27
                if (($this->getAttribute($context["source"], "valid", []) == true)) {
                    // line 28
                    echo "                <span class=\"iconStarO icon\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.valid"), "html", null, true);
                    echo "\"></span><br>
            ";
                } elseif ( !(null === $this->getAttribute(                // line 29
$context["source"], "valid", []))) {
                    // line 30
                    echo "                <span class=\"iconWarningSmpl icon\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.notvalid"), "html", null, true);
                    echo "\"></span><br>
            ";
                }
                // line 32
                echo "        </div>
        <div class=\"col2 box\">
            <div class=\"buttonGroup\">
              <a class=\"iconView hover-highlight-effect\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_view", ["sourceId" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.show_metadata"), "html", null, true);
                echo "\"></a>
              ";
                // line 36
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["oid"] ?? $this->getContext($context, "oid"))) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["source"]))) {
                    // line 37
                    echo "              <a class=\"iconReset hover-highlight-effect\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_updateform", ["sourceId" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.update"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", []), "html", null, true);
                    echo "\"></a>
              ";
                }
                // line 39
                echo "              ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["oid"] ?? $this->getContext($context, "oid"))) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["source"]))) {
                    // line 40
                    echo "                 <span class=\"iconRemove hover-highlight-effect\"
                  title=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.delete"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", []), "html", null, true);
                    echo "\"
                  data-url=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_confirmdelete", ["sourceId" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
                    echo "\"
                  data-id=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "id", []), "html", null, true);
                    echo "\"></span>
              ";
                }
                // line 45
                echo "            </div>
          <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_view", ["sourceId" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
                echo "\" class=\"title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", []), "html", null, true);
                echo "<span class=\"smallerText\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "alias", []), "html", null, true);
                echo "</span></a>
          <div class=\"description\">";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "description", []), "html", null, true);
                echo "</div>
        </div>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "  </ul>
";
        } else {
            // line 53
            echo "    <span class=\"description\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.no_source"), "html", null, true);
            echo "</span>
";
        }
        // line 55
        echo "
<div class=\"clearContainer\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Repository/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 55,  221 => 53,  217 => 51,  207 => 47,  199 => 46,  196 => 45,  191 => 43,  187 => 42,  181 => 41,  178 => 40,  175 => 39,  165 => 37,  163 => 36,  157 => 35,  152 => 32,  146 => 30,  144 => 29,  139 => 28,  137 => 27,  133 => 26,  129 => 25,  125 => 23,  121 => 22,  114 => 19,  112 => 18,  104 => 16,  102 => 15,  96 => 14,  87 => 11,  82 => 10,  76 => 9,  66 => 6,  60 => 5,  48 => 3,  32 => 1,);
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

{% block title %}{{ 'mb.manager.admin.sources' | trans }}{% endblock %}

{% block css %}
  {{parent()}}
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/service-list.js') }}\"></script>
{% endblock %}

{% block manager_content %}
{% if create_permission %}
<a class=\"iconAdd iconBig right\" href=\"{{ path(\"mapbender_manager_repository_new\") }}\" title=\"{{ 'mb.manager.admin.source.add' | trans }}\"></a>
{% endif %}
{% if sources|length > 0 %}
  <label for=\"inputFilterServices\" class=\"labelInput\">{{\"mb.manager.admin.filter.source\"|trans}}</label><input id=\"inputFilterServices\" type=\"text\" class=\"input listFilterInput\">

  <ul id=\"listFilterServices\" class=\"listFilterContainer listFilterBoxes listFilterServiceBoxes\">
    {% for source in sources %}
      <li class=\"filterItem\">
        <div class=\"col1\">
          <span class=\"smallerText\">{{ source.id }}</span><br>
          <span class=\"smallerText\">{{ source.type }}</span><br>
            {% if source.valid == true %}
                <span class=\"iconStarO icon\" title=\"{{\"mb.manager.admin.source.valid\"|trans}}\"></span><br>
            {% elseif source.valid is not null %}
                <span class=\"iconWarningSmpl icon\" title=\"{{\"mb.manager.admin.source.notvalid\"|trans}}\"></span><br>
            {% endif %}
        </div>
        <div class=\"col2 box\">
            <div class=\"buttonGroup\">
              <a class=\"iconView hover-highlight-effect\" href=\"{{ path(\"mapbender_manager_repository_view\",{\"sourceId\":source.id}) }}\" title=\"{{ 'mb.manager.admin.source.show_metadata' | trans }}\"></a>
              {% if is_granted('EDIT', oid) or is_granted('EDIT', source) %}
              <a class=\"iconReset hover-highlight-effect\" href=\"{{ path(\"mapbender_manager_repository_updateform\",{\"sourceId\":source.id}) }}\" title=\"{{ 'mb.manager.admin.source.update' | trans }} {{ source.title }}\"></a>
              {% endif %}
              {% if is_granted('DELETE', oid) or is_granted('DELETE', source) %}
                 <span class=\"iconRemove hover-highlight-effect\"
                  title=\"{{\"mb.manager.admin.source.delete\"|trans}} {{ source.title }}\"
                  data-url=\"{{ path(\"mapbender_manager_repository_confirmdelete\",{\"sourceId\":source.id}) }}\"
                  data-id=\"{{ source.id }}\"></span>
              {% endif %}
            </div>
          <a href=\"{{ path(\"mapbender_manager_repository_view\",{\"sourceId\":source.id}) }}\" class=\"title\">{{ source.title }}<span class=\"smallerText\"> {{ source.alias }}</span></a>
          <div class=\"description\">{{ source.description }}</div>
        </div>
      </li>
    {% endfor %}
  </ul>
{% else %}
    <span class=\"description\">{{ 'mb.manager.admin.source.no_source' | trans }}</span>
{% endif %}

<div class=\"clearContainer\"></div>
{% endblock %}
", "@MapbenderManager/Repository/index.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Repository/index.html.twig");
    }
}
