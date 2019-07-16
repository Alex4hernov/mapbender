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

/* @FOMUser/Group/index.html.twig */
class __TwigTemplate_9ea0d2c0333c803c3be0bc6551399732f6abbee9211fe07ddbe418825fb9f308 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOMUser/Group/index.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@FOMUser/Group/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.groups"), "html", null, true);
        
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
  <script type=\"application/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/user-control.js"), "html", null, true);
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
        echo "
";
        // line 16
        if (($context["create_permission"] ?? $this->getContext($context, "create_permission"))) {
            // line 17
            echo "<a class=\"iconAdd iconBig right\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_new");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.add_new_group"), "html", null, true);
            echo "\"></a>
";
        }
        // line 19
        echo "
";
        // line 20
        if ((twig_length_filter($this->env, ($context["groups"] ?? $this->getContext($context, "groups"))) > 0)) {
            // line 21
            echo "  <label for=\"inputFilterGroups\" class=\"labelInput left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.filter"), "html", null, true);
            echo "</label>
  <input id=\"inputFilterGroups\" type=\"text\" class=\"input left listFilterInput\"/>

  <div class=\"clearContainer\"></div>
  <table id=\"listFilterGroups\" class=\"table userControlTable listFilterContainer\">
    <thead id=\"groupsHead\">
      <tr class=\"doNotFilter\">
        <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.title"), "html", null, true);
            echo "</th>
        <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.description"), "html", null, true);
            echo "</th>
        <th class=\"iconColumn\"></th>
      </tr>
    </thead>
    <tbody id=\"groupsBody\">
      ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "      <tr id=\"app-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", []), "html", null, true);
                echo "\" class=\"filterItem\">
        <td>
          <a class=\"labelText\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_edit", ["id" => $this->getAttribute($context["group"], "id", [])]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.edit_group"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []), "html", null, true);
                echo "</a>
        </td>
        <td class=\"description\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "description", []), "html", null, true);
                echo "</td>
        <td class=\"iconColumn\">
            ";
                // line 41
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["group"])) {
                    // line 42
                    echo "            <a class=\"iconEdit iconSmall\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_edit", ["id" => $this->getAttribute($context["group"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.edit_group"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []), "html", null, true);
                    echo "\"></a>
            ";
                }
                // line 44
                echo "            ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["group"])) {
                    // line 45
                    echo "            <span class=\"iconRemove iconSmall\"
              title=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.delete_group"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []), "html", null, true);
                    echo "\"
              data-url=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_delete", ["id" => $this->getAttribute($context["group"], "id", [])]), "html", null, true);
                    echo "\"
              data-id=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", []), "html", null, true);
                    echo "\"
            ></span>
            ";
                }
                // line 51
                echo "        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </tbody>
  </table>
";
        } else {
            // line 57
            echo "  <p class=\"description left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.no_groups_available"), "html", null, true);
            echo "</p>
  <div class=\"clearContainer\"></div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOMUser/Group/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 57,  211 => 54,  203 => 51,  197 => 48,  193 => 47,  187 => 46,  184 => 45,  181 => 44,  171 => 42,  169 => 41,  164 => 39,  153 => 37,  147 => 35,  143 => 34,  135 => 29,  131 => 28,  120 => 21,  118 => 20,  115 => 19,  107 => 17,  105 => 16,  102 => 15,  96 => 14,  87 => 11,  82 => 10,  76 => 9,  66 => 6,  60 => 5,  48 => 3,  32 => 1,);
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

{% block title %}{{ \"fom.user.group.index.groups\" | trans }}{% endblock %}

{% block css %}
  {{parent()}}
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"application/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/user-control.js') }}\"></script>
{% endblock %}

{% block manager_content %}

{% if create_permission %}
<a class=\"iconAdd iconBig right\" href=\"{{path('fom_user_group_new')}}\" title=\"{{\"fom.user.group.index.add_new_group\"|trans}}\"></a>
{% endif %}

{% if groups|length > 0 %}
  <label for=\"inputFilterGroups\" class=\"labelInput left\">{{\"fom.user.group.index.filter\"|trans}}</label>
  <input id=\"inputFilterGroups\" type=\"text\" class=\"input left listFilterInput\"/>

  <div class=\"clearContainer\"></div>
  <table id=\"listFilterGroups\" class=\"table userControlTable listFilterContainer\">
    <thead id=\"groupsHead\">
      <tr class=\"doNotFilter\">
        <th>{{ \"fom.user.group.index.title\" | trans }}</th>
        <th>{{ \"fom.user.group.index.description\" | trans }}</th>
        <th class=\"iconColumn\"></th>
      </tr>
    </thead>
    <tbody id=\"groupsBody\">
      {% for group in groups %}
      <tr id=\"app-{{ group.id }}\" class=\"filterItem\">
        <td>
          <a class=\"labelText\" href=\"{{ path('fom_user_group_edit', {'id': group.id}) }}\" title=\"{{ 'fom.user.group.index.edit_group' | trans }} {{ group.title }}\">{{ group.title }}</a>
        </td>
        <td class=\"description\">{{ group.description }}</td>
        <td class=\"iconColumn\">
            {% if is_granted('EDIT', group) %}
            <a class=\"iconEdit iconSmall\" href=\"{{ path('fom_user_group_edit',  {'id': group.id }) }}\" title=\"{{ 'fom.user.group.index.edit_group' | trans }} {{ group.title }}\"></a>
            {% endif %}
            {% if is_granted('DELETE', group) %}
            <span class=\"iconRemove iconSmall\"
              title=\"{{\"fom.user.group.index.delete_group\"|trans}} {{ group.title }}\"
              data-url=\"{{ path('fom_user_group_delete', { 'id': group.id}) }}\"
              data-id=\"{{ group.id }}\"
            ></span>
            {% endif %}
        </td>
      </tr>
      {% endfor %}
    </tbody>
  </table>
{% else %}
  <p class=\"description left\">{{\"fom.user.group.index.no_groups_available\"|trans}}</p>
  <div class=\"clearContainer\"></div>
{% endif %}
{% endblock %}", "@FOMUser/Group/index.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/Group/index.html.twig");
    }
}
