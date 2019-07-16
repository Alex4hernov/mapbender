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

/* FOMUserBundle:User:container.html.twig */
class __TwigTemplate_3833cee26b518979bb6c531d35ed3ebdb50ab5e187f718396064a79c022c97f8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOMUserBundle:User:container.html.twig"));

        // line 1
        echo "<div id=\"userGroupTabContainer\" class=\"tabContainer userGroupTabContainer userTabContainer\">
  <ul class=\"tabs\">
    <li id=\"tabBaseData\" class=\"tab active\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.base_data"), "html", null, true);
        echo "</li>
    ";
        // line 4
        if ($this->getAttribute(($context["form"] ?? null), "profile", [], "any", true, true)) {
            // line 5
            echo "      <li id=\"tabProfile\" class=\"tab\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.profile"), "html", null, true);
            echo "</li>
    ";
        }
        // line 7
        echo "    <li id=\"tabGroups\" class=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.groups"), "html", null, true);
        echo "</li>
    <li id=\"tabSecurity\" class=\"tab\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.security"), "html", null, true);
        echo "</li>
  </ul>

  <div id=\"containerBaseData\" class=\"container active containerBaseData\">
    ";
        // line 13
        echo "    <label class=\"left labelInput\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.username"), "html", null, true);
        echo ":<span class=\"required\">*</span></label>
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["disabled" =>  !$this->getAttribute(($context["form"] ?? null), "groups", [], "any", true, true)]);
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", []));
        foreach ($context['_seq'] as $context["_key"] => $context["pw"]) {
            // line 21
            echo "      ";
            if (($this->getAttribute($this->getAttribute($context["pw"], "vars", []), "name", [], "array") == "first")) {
                // line 22
                echo "        <label class=\"left labelInput\" for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pw"], "vars", []), "id", [], "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.choose_password"), "html", null, true);
                echo ":<span class=\"required\">*</span></label>
      ";
            } else {
                // line 24
                echo "        <label class=\"left labelInput\" for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pw"], "vars", []), "id", [], "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.confirm_password"), "html", null, true);
                echo ":<span class=\"required\">*</span></label>
      ";
            }
            // line 26
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["pw"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "activated", [], "any", true, true)) {
            // line 29
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "activated", []), 'widget');
            echo "<label for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "activated", []), "vars", []), "id", []), "html", null, true);
            echo "\" class=\"labelCheck\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.activated"), "html", null, true);
            echo "</label>
    <div class=\"clearContainer\"></div>
    ";
        }
        // line 32
        echo "  </div>
  ";
        // line 33
        if ($this->getAttribute(($context["form"] ?? null), "profile", [], "any", true, true)) {
            // line 34
            echo "  <div id=\"containerProfile\" class=\"container containerProfile\">
      ";
            // line 35
            if (($context["profile_template"] ?? $this->getContext($context, "profile_template"))) {
                // line 36
                echo "          ";
                $this->loadTemplate(($context["profile_template"] ?? $this->getContext($context, "profile_template")), "FOMUserBundle:User:container.html.twig", 36)->display($context);
                // line 37
                echo "      ";
            } else {
                // line 38
                echo "          ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), 'widget');
                echo "
      ";
            }
            // line 40
            echo "  </div>
  ";
        }
        // line 42
        echo "
  <div id=\"containerGroups\" class=\"container containerGroups\">
  ";
        // line 44
        if ($this->getAttribute(($context["form"] ?? null), "groups", [], "any", true, true)) {
            // line 45
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "groups", [])) > 0)) {
                // line 46
                echo "
      ";
                // line 47
                $context["group_count"] = (("<span>" . twig_length_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "groups", []))) . "</span>");
                // line 48
                echo "
      <label for=\"inputFilterUsers\" class=\"labelInput left\">";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.filter"), "html", null, true);
                echo "</label>
      <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>
      <div class=\"clearContainer\"></div>

      <table id=\"listFilterUsers\" class=\"listFilterContainer tableCore tableUserGroups\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
          <tr class=\"doNotFilter\">
            <th>";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.name"), "html", null, true);
                echo "</th>
            <th class=\"description\"><span id=\"selectedUsersGroups\">";
                // line 57
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "groups", [])), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.users_of_selected", ["%users_count%" => twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "groups", []))]), "html", null, true);
                echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "groups", []));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 62
                    echo "            <tr class=\"filterItem\">
              <td colspan=\"2\">
                <div class=\"tdContentWrapper iconGroup\">
                  ";
                    // line 65
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["group"], 'label');
                    echo "
                  ";
                    // line 66
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["group"], 'widget');
                    echo "
                </div>
              </td>
            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </tbody>
      </table>

    ";
            } else {
                // line 75
                echo "      <p class=\"description left\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.no_goups_defined."), "html", null, true);
                echo "</p>
      <div class=\"clearContainer\"></div>
    ";
            }
            // line 78
            echo "  ";
        } else {
            // line 79
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.manage_not_allowed"), "html", null, true);
            echo "</p>
  ";
        }
        // line 81
        echo "  </div>

  <div id=\"containerSecurity\" class=\"container containerSecurity\">
    ";
        // line 84
        if ($this->getAttribute(($context["form"] ?? null), "acl", [], "any", true, true)) {
            // line 85
            echo "    <a id=\"addPermission\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_acl_overview");
            echo "\" class=\"iconAdd iconBig right\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.add_users_groups"), "html", null, true);
            echo "\"></a>
    <div class=\"clearContainer\"></div>
    ";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "acl", []), 'widget');
            echo "
    ";
        } else {
            // line 89
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.manage_not_allowed_security"), "html", null, true);
            echo "</p>
    ";
        }
        // line 91
        echo "  </div>
</div>

<div class=\"clearContainer\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOMUserBundle:User:container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 91,  261 => 89,  256 => 87,  248 => 85,  246 => 84,  241 => 81,  235 => 79,  232 => 78,  225 => 75,  219 => 71,  208 => 66,  204 => 65,  199 => 62,  195 => 61,  186 => 57,  182 => 56,  172 => 49,  169 => 48,  167 => 47,  164 => 46,  161 => 45,  159 => 44,  155 => 42,  151 => 40,  145 => 38,  142 => 37,  139 => 36,  137 => 35,  134 => 34,  132 => 33,  129 => 32,  118 => 29,  115 => 28,  106 => 26,  98 => 24,  90 => 22,  87 => 21,  83 => 20,  77 => 17,  73 => 16,  68 => 14,  61 => 13,  54 => 8,  49 => 7,  43 => 5,  41 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"userGroupTabContainer\" class=\"tabContainer userGroupTabContainer userTabContainer\">
  <ul class=\"tabs\">
    <li id=\"tabBaseData\" class=\"tab active\">{{\"fom.user.user.container.base_data\" | trans }}</li>
    {% if form.profile is defined %}
      <li id=\"tabProfile\" class=\"tab\">{{\"fom.user.user.container.profile\" | trans }}</li>
    {% endif %}
    <li id=\"tabGroups\" class=\"tab\">{{\"fom.user.user.container.groups\" | trans }}</li>
    <li id=\"tabSecurity\" class=\"tab\">{{\"fom.user.user.container.security\" | trans }}</li>
  </ul>

  <div id=\"containerBaseData\" class=\"container active containerBaseData\">
    {#{{ form_label(form.username) }}#}
    <label class=\"left labelInput\" for=\"{{ form.username.vars.id }}\">{{\"fom.user.user.container.username\" | trans}}:<span class=\"required\">*</span></label>
    {{ form_widget(form.username, { 'disabled': (form.groups is not defined) }) }}
    <div class=\"clearContainer\"></div>
    {{ form_label(form.email) }}
    {{ form_widget(form.email) }}
    <div class=\"clearContainer\"></div>

    {% for pw in form.password %}
      {% if pw.vars['name'] == 'first' %}
        <label class=\"left labelInput\" for=\"{{ pw.vars['id'] }}\">{{\"fom.user.user.container.choose_password\" | trans}}:<span class=\"required\">*</span></label>
      {% else %}
        <label class=\"left labelInput\" for=\"{{ pw.vars['id'] }}\">{{\"fom.user.user.container.confirm_password\" | trans}}:<span class=\"required\">*</span></label>
      {% endif %}
      {{ form_widget(pw) }}
    {% endfor %}
    {% if form.activated is defined %}
    {{ form_widget(form.activated) }}<label for=\"{{form.activated.vars.id}}\" class=\"labelCheck\">{{\"fom.user.user.container.activated\"|trans}}</label>
    <div class=\"clearContainer\"></div>
    {% endif %}
  </div>
  {% if form.profile is defined %}
  <div id=\"containerProfile\" class=\"container containerProfile\">
      {% if profile_template %}
          {% include profile_template %}
      {% else %}
          {{ form_widget(form.profile) }}
      {% endif %}
  </div>
  {% endif %}

  <div id=\"containerGroups\" class=\"container containerGroups\">
  {% if form.groups is defined %}
    {% if form.groups|length > 0 %}

      {% set group_count = '<span>' ~ user.groups | length ~ '</span>' %}

      <label for=\"inputFilterUsers\" class=\"labelInput left\">{{\"fom.user.user.container.filter\"|trans}}</label>
      <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>
      <div class=\"clearContainer\"></div>

      <table id=\"listFilterUsers\" class=\"listFilterContainer tableCore tableUserGroups\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
          <tr class=\"doNotFilter\">
            <th>{{\"fom.user.user.container.name\"|trans}}</th>
            <th class=\"description\"><span id=\"selectedUsersGroups\">{{user.groups | length}}</span> {{ 'fom.user.user.container.users_of_selected' | trans ({'%users_count%': form.groups|length }) }}</th>
          </tr>
        </thead>
        <tbody>
          {% for group in form.groups %}
            <tr class=\"filterItem\">
              <td colspan=\"2\">
                <div class=\"tdContentWrapper iconGroup\">
                  {{ form_label(group) }}
                  {{ form_widget(group) }}
                </div>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>

    {% else %}
      <p class=\"description left\">{{\"fom.user.user.container.no_goups_defined.\"|trans}}</p>
      <div class=\"clearContainer\"></div>
    {% endif %}
  {% else %}
    <p>{{ 'fom.user.user.container.manage_not_allowed' | trans }}</p>
  {% endif %}
  </div>

  <div id=\"containerSecurity\" class=\"container containerSecurity\">
    {% if form.acl is defined %}
    <a id=\"addPermission\" href=\"{{path('fom_user_acl_overview')}}\" class=\"iconAdd iconBig right\" title=\"{{'fom.user.user.container.add_users_groups'|trans}}\"></a>
    <div class=\"clearContainer\"></div>
    {{ form_widget(form.acl) }}
    {% else %}
    <p>{{ 'fom.user.user.container.manage_not_allowed_security'|trans }}</p>
    {% endif %}
  </div>
</div>

<div class=\"clearContainer\"></div>
", "FOMUserBundle:User:container.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/User/container.html.twig");
    }
}
