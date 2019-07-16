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

/* FOMUserBundle:Group:container.html.twig */
class __TwigTemplate_f48d5b3a84ee27a6fe4c999f670618bf522cff97b2374149e01debf3b9dfefa2 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOMUserBundle:Group:container.html.twig"));

        // line 1
        echo "<div id=\"userGroupTabContainer\" class=\"tabContainer userGroupTabContainer groupTabContainer\">
  <ul class=\"tabs\">
    <li id=\"tabBaseData\" class=\"tab active\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.container.base_data"), "html", null, true);
        echo "</li>
    <li id=\"tabUsers\" class=\"tab\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.container.users"), "html", null, true);
        echo "</li>
  </ul>

  <div id=\"containerBaseData\" class=\"container active containerBaseData\">
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'label');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
";
        // line 12
        echo "    <label class=\"left labelInput\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.description"), "html", null, true);
        echo ":</label>
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
  </div>
  <div id=\"containerUsers\" class=\"container containerUsers\">

    ";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "users", [])) > 0)) {
            // line 19
            echo "      ";
            $context["user_count"] = (("<span>" . twig_length_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "users", []))) . "</span>");
            // line 20
            echo "
      <label for=\"inputFilterUsers\" class=\"labelInput left\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.container.filter"), "html", null, true);
            echo "</label>
      <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>
      <div class=\"clearContainer\"></div>

      <table id=\"listFilterUsers\" class=\"listFilterContainer tableCore tableUserGroups\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
          <tr class=\"doNotFilter\">
            <th>Name</th>
            <th class=\"description\"><span id=\"selectedUsersGroups\">";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "users", [])), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.container.users_of_selected", ["%users_count%" => twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "users", []))]), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "users", []));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 34
                echo "            <tr class=\"filterItem\">
              <td colspan=\"2\">
                <div class=\"tdContentWrapper iconUser\">
                  ";
                // line 37
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["user"], 'label');
                echo "
                  ";
                // line 38
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["user"], 'widget');
                echo "
                </div>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </tbody>
      </table>

    ";
        } else {
            // line 47
            echo "      <p class=\"description left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.container.no_user_exists"), "html", null, true);
            echo "</p>
    ";
        }
        // line 49
        echo "  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOMUserBundle:Group:container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  130 => 47,  124 => 43,  113 => 38,  109 => 37,  104 => 34,  100 => 33,  91 => 29,  80 => 21,  77 => 20,  74 => 19,  72 => 18,  64 => 13,  57 => 12,  52 => 9,  48 => 8,  41 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"userGroupTabContainer\" class=\"tabContainer userGroupTabContainer groupTabContainer\">
  <ul class=\"tabs\">
    <li id=\"tabBaseData\" class=\"tab active\">{{\"fom.user.group.container.base_data\" | trans }}</li>
    <li id=\"tabUsers\" class=\"tab\">{{\"fom.user.group.container.users\" | trans }}</li>
  </ul>

  <div id=\"containerBaseData\" class=\"container active containerBaseData\">
    {{ form_label(form.title) }}
    {{ form_widget(form.title) }}
    <div class=\"clearContainer\"></div>
{#    {{ form_label(form.description) }}#}
    <label class=\"left labelInput\" for=\"{{ form.description.vars.id }}\">{{\"fom.user.user.container.description\" | trans}}:</label>
    {{ form_widget(form.description) }}
    <div class=\"clearContainer\"></div>
  </div>
  <div id=\"containerUsers\" class=\"container containerUsers\">

    {% if form.users|length > 0 %}
      {% set user_count = '<span>' ~ group.users | length ~ '</span>' %}

      <label for=\"inputFilterUsers\" class=\"labelInput left\">{{\"fom.user.group.container.filter\"|trans}}</label>
      <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>
      <div class=\"clearContainer\"></div>

      <table id=\"listFilterUsers\" class=\"listFilterContainer tableCore tableUserGroups\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
          <tr class=\"doNotFilter\">
            <th>Name</th>
            <th class=\"description\"><span id=\"selectedUsersGroups\">{{group.users | length}}</span> {{ 'fom.user.group.container.users_of_selected' | trans ({'%users_count%': form.users|length }) }}</th>
          </tr>
        </thead>
        <tbody>
          {% for user in form.users %}
            <tr class=\"filterItem\">
              <td colspan=\"2\">
                <div class=\"tdContentWrapper iconUser\">
                  {{ form_label(user) }}
                  {{ form_widget(user) }}
                </div>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>

    {% else %}
      <p class=\"description left\">{{\"fom.user.group.container.no_user_exists\"|trans}}</p>
    {% endif %}
  </div>
</div>
", "FOMUserBundle:Group:container.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/Group/container.html.twig");
    }
}
