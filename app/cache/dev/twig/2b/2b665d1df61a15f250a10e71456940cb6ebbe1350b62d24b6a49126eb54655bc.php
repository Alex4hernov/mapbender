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

/* MapbenderManagerBundle:Application:form-elements.html.twig */
class __TwigTemplate_0506adbf891cd6614008d6bb760cb747668aaeda95d330b614946447cfe57304 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderManagerBundle:Application:form-elements.html.twig"));

        // line 1
        echo "<div class=\"description\">
  <span class=\"right\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.template"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (((isset($context["template_name"]) || array_key_exists("template_name", $context))) ? (_twig_default_filter(($context["template_name"] ?? $this->getContext($context, "template_name")), "Unknown")) : ("Unknown")), "html", null, true);
        echo "</span>
  <div class=\"clear\"></div>
</div>

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 7
            echo "  <div class=\"";
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo " region\">
      <table class=\"application-component-table elementsTable\" data-region=\"";
            // line 8
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "\">
        <thead>
          <tr>
            <th colspan=\"2\">
              <h3 class=\"subTitle\">";
            // line 12
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["region"]), "html", null, true);
            echo "</h3>
            </th>
            <th class=\"iconColumn regionProperties\">
              ";
            // line 15
            if ((true && $this->getAttribute(($context["form"] ?? null), $context["region"], [], "array", true, true))) {
                // line 16
                echo "                  ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $context["region"], [], "array"), 'widget');
                echo "
              ";
            }
            // line 18
            echo "            </th>
          </tr>
          <tr>
            <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.title"), "html", null, true);
            echo "</th>
            <th class=\"type\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.type"), "html", null, true);
            echo "</th>
            <th class=\"iconColumn\">
              <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_select", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "region" => $context["region"]]), "html", null, true);
            echo "\" class=\"iconAdd hover-highlight-effect addElement\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.add"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "\"></a>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "getElementsByRegion", [0 => $context["region"]], "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 30
                echo "              <tr class=\"element\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", []), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_weight", ["id" => $this->getAttribute($context["element"], "id", [])]), "html", null, true);
                echo "\">
                <td class=\"titleColumn description\">";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["element"], "title", [])), "html", null, true);
                echo "</td>
                <td class=\"typeColumn description\">";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Mapbender\CoreBundle\Extension\ElementExtension')->element_class_title($context["element"])), "html", null, true);
                echo "</td>
                <td class=\"iconColumn\">
                  <div class=\"checkWrapper hover-highlight-effect ";
                // line 34
                echo (($this->getAttribute($context["element"], "enabled", [])) ? ("iconPublishActive") : ("iconPublish"));
                echo "\"
                       title=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.show_hide"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "title", []), "html", null, true);
                echo "\"
                       data-icon-off=\"iconPublish\" data-icon-on=\"iconPublishActive\">
                    <input class=\"checkbox\"
                           data-url=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_enable", ["id" => $this->getAttribute($context["element"], "id", [])]), "html", null, true);
                echo "\"
                           data-id=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", []), "html", null, true);
                echo "\" type=\"checkbox\" ";
                if ($this->getAttribute($context["element"], "enabled", [])) {
                    echo " checked=\"checked\" ";
                }
                echo ">
                  </div>
                  <span class=\"iconEdit editElement hover-highlight-effect\"
                        title=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.edit"), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "title", []), "html", null, true);
                echo "\"
                        data-url=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_edit", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "id" => $this->getAttribute($context["element"], "id", [])]), "html", null, true);
                echo "\"></span>
                  <span class=\"iconKey secureElement ";
                // line 44
                if ($this->getAttribute(($context["aclManager"] ?? $this->getContext($context, "aclManager")), "hasObjectAclEntries", [0 => $context["element"]], "method")) {
                    echo "has ";
                }
                echo "hover-highlight-effect\"
                        title=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.managerbundle.acl_element"), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "title", []), "html", null, true);
                echo "

";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aclManager"] ?? $this->getContext($context, "aclManager")), "getObjectAclEntriesAsArray", [0 => $context["element"]], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["acl"]) {
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["acl"], "type", []), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["acl"], "name", []), "html", null, true);
                    echo "
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acl'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "\"
                        data-url=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_security", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "id" => $this->getAttribute($context["element"], "id", [])]), "html", null, true);
                echo "\"></span>
                  <span class=\"iconRemove removeElement hover-highlight-effect\"
                        title=\"";
                // line 52
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mb.manager.be.element.delete", ["%element_title%" => $this->getAttribute($context["element"], "title", [])], "messages");
                echo "\"
                        data-slug=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "html", null, true);
                echo "\"
                        data-url=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_delete", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "id" => $this->getAttribute($context["element"], "id", [])]), "html", null, true);
                echo "\"></span>
                </td>
              </tr>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 58
                echo "            <tr class=\"dummy\">
              <td class=\"description\">";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.no_element_added."), "html", null, true);
                echo "</td>
              <td></td>
              <td></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </tbody>
      </table>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:form-elements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 64,  213 => 59,  210 => 58,  201 => 54,  197 => 53,  193 => 52,  188 => 50,  185 => 49,  175 => 48,  171 => 47,  164 => 45,  158 => 44,  154 => 43,  148 => 42,  138 => 39,  134 => 38,  126 => 35,  122 => 34,  117 => 32,  113 => 31,  106 => 30,  101 => 29,  89 => 24,  84 => 22,  80 => 21,  75 => 18,  69 => 16,  67 => 15,  61 => 12,  54 => 8,  49 => 7,  45 => 6,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"description\">
  <span class=\"right\">{{ 'mb.manager.admin.template' | trans }}: {{template_name|default('Unknown')}}</span>
  <div class=\"clear\"></div>
</div>

{% for region in regions %}
  <div class=\"{{region}} region\">
      <table class=\"application-component-table elementsTable\" data-region=\"{{ region }}\">
        <thead>
          <tr>
            <th colspan=\"2\">
              <h3 class=\"subTitle\">{{ region | capitalize }}</h3>
            </th>
            <th class=\"iconColumn regionProperties\">
              {% if true and form[region] is defined %}
                  {{ form_widget(form[region]) }}
              {% endif %}
            </th>
          </tr>
          <tr>
            <th>{{ 'mb.manager.admin.element.title' | trans }}</th>
            <th class=\"type\">{{ 'mb.manager.admin.element.type' | trans }}</th>
            <th class=\"iconColumn\">
              <a href=\"{{ path('mapbender_manager_element_select', { 'slug': application.slug, 'region': region }) }}\" class=\"iconAdd hover-highlight-effect addElement\" title=\"{{'mb.manager.admin.element.add'|trans}} {{region}}\"></a>
            </th>
          </tr>
        </thead>
        <tbody>
        {% for element in application.getElementsByRegion(region) %}
              <tr class=\"element\" data-id=\"{{element.id}}\" data-href=\"{{ path('mapbender_manager_element_weight', {'id': element.id})}}\">
                <td class=\"titleColumn description\">{{ element.title | trans }}</td>
                <td class=\"typeColumn description\">{{ element_class_title(element) | trans }}</td>
                <td class=\"iconColumn\">
                  <div class=\"checkWrapper hover-highlight-effect {{ element.enabled ? 'iconPublishActive' : 'iconPublish' }}\"
                       title=\"{{\"mb.manager.admin.element.show_hide\"|trans}} {{element.title}}\"
                       data-icon-off=\"iconPublish\" data-icon-on=\"iconPublishActive\">
                    <input class=\"checkbox\"
                           data-url=\"{{ path('mapbender_manager_element_enable', { 'id': element.id })}}\"
                           data-id=\"{{ element.id }}\" type=\"checkbox\" {% if element.enabled %} checked=\"checked\" {% endif %}>
                  </div>
                  <span class=\"iconEdit editElement hover-highlight-effect\"
                        title=\"{{\"mb.manager.admin.element.edit\"|trans}}  {{element.title}}\"
                        data-url=\"{{ path('mapbender_manager_element_edit', {'slug': application.slug, 'id': element.id})}}\"></span>
                  <span class=\"iconKey secureElement {% if aclManager.hasObjectAclEntries(element) %}has {% endif %}hover-highlight-effect\"
                        title=\"{{ \"mb.manager.managerbundle.acl_element\"|trans }}  {{ element.title }}

{% for acl in aclManager.getObjectAclEntriesAsArray(element) %}
{{acl.type}}: {{ acl.name }}
{% endfor %}\"
                        data-url=\"{{ path('mapbender_manager_element_security', {'slug': application.slug, 'id': element.id })}}\"></span>
                  <span class=\"iconRemove removeElement hover-highlight-effect\"
                        title=\"{% trans with {'%element_title%': element.title} %} mb.manager.be.element.delete {% endtrans %}\"
                        data-slug=\"{{ application.slug }}\"
                        data-url=\"{{ path('mapbender_manager_element_delete', {'slug': application.slug, 'id': element.id}) }}\"></span>
                </td>
              </tr>
        {% else %}
            <tr class=\"dummy\">
              <td class=\"description\">{{\"mb.manager.admin.element.no_element_added.\"|trans}}</td>
              <td></td>
              <td></td>
            </tr>
        {% endfor %}
        </tbody>
      </table>
  </div>
{% endfor %}
", "MapbenderManagerBundle:Application:form-elements.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/form-elements.html.twig");
    }
}
