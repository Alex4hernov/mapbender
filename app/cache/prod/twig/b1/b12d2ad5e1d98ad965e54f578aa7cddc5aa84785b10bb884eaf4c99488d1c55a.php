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
class __TwigTemplate_10cc9405b3838e1bea60417f5d1801fb3bd26c28486fd6300feb522b009809ff extends \Twig\Template
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
        // line 1
        echo "<div class=\"description\">
  <span class=\"right\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.template"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (((isset($context["template_name"]) || array_key_exists("template_name", $context))) ? (_twig_default_filter(($context["template_name"] ?? null), "Unknown")) : ("Unknown")), "html", null, true);
        echo "</span>
  <div class=\"clear\"></div>
</div>

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? null));
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
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["region"], [], "array"), 'widget');
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_select", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "region" => $context["region"]]), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["application"] ?? null), "getElementsByRegion", [0 => $context["region"]], "method"));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_edit", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "id" => $this->getAttribute($context["element"], "id", [])]), "html", null, true);
                echo "\"></span>
                  <span class=\"iconKey secureElement ";
                // line 44
                if ($this->getAttribute(($context["aclManager"] ?? null), "hasObjectAclEntries", [0 => $context["element"]], "method")) {
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aclManager"] ?? null), "getObjectAclEntriesAsArray", [0 => $context["element"]], "method"));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_security", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "id" => $this->getAttribute($context["element"], "id", [])]), "html", null, true);
                echo "\"></span>
                  <span class=\"iconRemove removeElement hover-highlight-effect\"
                        title=\"";
                // line 52
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mb.manager.be.element.delete", ["%element_title%" => $this->getAttribute($context["element"], "title", [])], "messages");
                echo "\"
                        data-slug=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? null), "slug", []), "html", null, true);
                echo "\"
                        data-url=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_delete", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "id" => $this->getAttribute($context["element"], "id", [])]), "html", null, true);
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
        return array (  221 => 64,  210 => 59,  207 => 58,  198 => 54,  194 => 53,  190 => 52,  185 => 50,  182 => 49,  172 => 48,  168 => 47,  161 => 45,  155 => 44,  151 => 43,  145 => 42,  135 => 39,  131 => 38,  123 => 35,  119 => 34,  114 => 32,  110 => 31,  103 => 30,  98 => 29,  86 => 24,  81 => 22,  77 => 21,  72 => 18,  66 => 16,  64 => 15,  58 => 12,  51 => 8,  46 => 7,  42 => 6,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderManagerBundle:Application:form-elements.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/form-elements.html.twig");
    }
}
