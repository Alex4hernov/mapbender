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

/* @FOMUser/User/index.html.twig */
class __TwigTemplate_9303a0cb90578e28f80d48816e2ebf14f1ca58a9ebab503e2205658dc4a06a46 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'manager_content' => [$this, 'block_manager_content'],
            'js' => [$this, 'block_js'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOMUser/User/index.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@FOMUser/User/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.title"), "html", null, true);
        
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
    public function block_manager_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manager_content"));

        // line 10
        echo "
";
        // line 11
        if (($context["create_permission"] ?? $this->getContext($context, "create_permission"))) {
            // line 12
            echo "<a class=\"iconAdd iconBig right\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_new");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.add_new_user"), "html", null, true);
            echo "\"></a>
";
        }
        // line 14
        echo "
";
        // line 15
        if ((twig_length_filter($this->env, ($context["users"] ?? $this->getContext($context, "users"))) > 0)) {
            // line 16
            echo "  <label for=\"inputFilterUsers\" class=\"labelInput left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.filter"), "html", null, true);
            echo "</label>
  <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>

  <div class=\"clearContainer\"></div>
  <table id=\"listFilterUsers\" class=\"table userControlTable listFilterContainer\">
    <thead id=\"usersHead\">
      <tr class=\"doNotFilter\">
        <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.name"), "html", null, true);
            echo "</th>
        <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.email"), "html", null, true);
            echo "</th>
        <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.groups"), "html", null, true);
            echo "</th>
        <th></th>
      </tr>
    </thead>
    <tbody id=\"usersBody\">
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 31
                echo "        <tr id=\"app-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", []), "html", null, true);
                echo "\" class=\"filterItem\">
          <td>
            ";
                // line 33
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["user"])) {
                    // line 34
                    echo "            <a class=\"labelText\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.edit_user"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 36
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "
            ";
                }
                // line 38
                echo "          </td>
          <td><a class=\"linkButton\" href=\"mailto:";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.contact_user"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</a></td>
          <td>
            <ul>
              ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "groups", []));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 43
                    echo "              <li class='doNotFilter'><a class=\"linkButton\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_edit", ["id" => $this->getAttribute($context["group"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.edit_group"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []), "html", null, true);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            </ul>
          </td>
          <td class=\"iconColumn\">
            ";
                // line 48
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["user"])) {
                    // line 49
                    echo "              <a class=\"iconEdit iconSmall\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.edit_user"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "\"></a>
            ";
                }
                // line 51
                echo "            ";
                if ((($this->getAttribute($context["user"], "id", []) != 1) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["user"]))) {
                    // line 52
                    echo "              <span class=\"iconRemove iconSmall\"
                title=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.delete_user"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "\"
                data-url=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_delete", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                    echo "\"
                data-id=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", []), "html", null, true);
                    echo "\"
              ></span>
            ";
                }
                // line 58
                echo "          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </tbody>
  </table>
";
        } else {
            // line 64
            echo "  <p class=\"description left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.no_users_available"), "html", null, true);
            echo "</p>
";
        }
        // line 66
        echo "<div class=\"clearContainer\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 70
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/user-control.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOMUser/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 71,  261 => 70,  255 => 69,  247 => 66,  241 => 64,  236 => 61,  228 => 58,  222 => 55,  218 => 54,  212 => 53,  209 => 52,  206 => 51,  196 => 49,  194 => 48,  189 => 45,  174 => 43,  170 => 42,  160 => 39,  157 => 38,  151 => 36,  139 => 34,  137 => 33,  131 => 31,  127 => 30,  119 => 25,  115 => 24,  111 => 23,  100 => 16,  98 => 15,  95 => 14,  87 => 12,  85 => 11,  82 => 10,  76 => 9,  66 => 6,  60 => 5,  48 => 3,  32 => 1,);
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

{% block title %}{{ 'fom.user.user.index.title' | trans }}{% endblock %}

{% block css %}
  {{parent()}}
{% endblock %}

{% block manager_content %}

{% if create_permission %}
<a class=\"iconAdd iconBig right\" href=\"{{path('fom_user_user_new')}}\" title=\"{{\"fom.user.user.index.add_new_user\"|trans}}\"></a>
{% endif %}

{% if users|length > 0 %}
  <label for=\"inputFilterUsers\" class=\"labelInput left\">{{\"fom.user.user.index.filter\"|trans}}</label>
  <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>

  <div class=\"clearContainer\"></div>
  <table id=\"listFilterUsers\" class=\"table userControlTable listFilterContainer\">
    <thead id=\"usersHead\">
      <tr class=\"doNotFilter\">
        <th>{{ \"fom.user.user.index.name\" | trans }}</th>
        <th>{{ \"fom.user.user.index.email\" | trans }}</th>
        <th>{{ \"fom.user.user.index.groups\" | trans }}</th>
        <th></th>
      </tr>
    </thead>
    <tbody id=\"usersBody\">
      {% for user in users %}
        <tr id=\"app-{{ user.id }}\" class=\"filterItem\">
          <td>
            {% if is_granted('EDIT', user) %}
            <a class=\"labelText\" href=\"{{ path('fom_user_user_edit', {'id': user.id}) }}\" title=\"{{ 'fom.user.user.index.edit_user' | trans }} {{ user.username }}\">{{ user.username }}</a>
            {% else %}
            {{ user.username }}
            {% endif %}
          </td>
          <td><a class=\"linkButton\" href=\"mailto:{{ user.email }}\" title=\"{{ 'fom.user.user.index.contact_user' | trans }}\">{{ user.email }}</a></td>
          <td>
            <ul>
              {% for group in user.groups %}
              <li class='doNotFilter'><a class=\"linkButton\" href=\"{{ path('fom_user_group_edit', { 'id': group.id }) }}\" title=\"{{ 'fom.user.user.index.edit_group' | trans }} {{group.title}}\">{{ group.title }}</a></li>
              {% endfor %}
            </ul>
          </td>
          <td class=\"iconColumn\">
            {% if is_granted('EDIT', user) %}
              <a class=\"iconEdit iconSmall\" href=\"{{ path('fom_user_user_edit',  {'id': user.id }) }}\" title=\"{{ 'fom.user.user.index.edit_user' | trans }} {{ user.username }}\"></a>
            {% endif %}
            {% if user.id != 1 and is_granted('DELETE', user) %}
              <span class=\"iconRemove iconSmall\"
                title=\"{{\"fom.user.user.index.delete_user\"|trans}} {{ user.username }}\"
                data-url=\"{{ path('fom_user_user_delete', { 'id': user.id}) }}\"
                data-id=\"{{ user.id }}\"
              ></span>
            {% endif %}
          </td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
{% else %}
  <p class=\"description left\">{{\"fom.user.user.index.no_users_available\"|trans}}</p>
{% endif %}
<div class=\"clearContainer\"></div>
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/user-control.js') }}\"></script>
{% endblock %}
", "@FOMUser/User/index.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/User/index.html.twig");
    }
}
