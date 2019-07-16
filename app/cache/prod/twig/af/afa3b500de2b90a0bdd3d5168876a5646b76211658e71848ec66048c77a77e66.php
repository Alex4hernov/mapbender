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

/* MapbenderManagerBundle:Application:form-layersets.html.twig */
class __TwigTemplate_f8c4947232c2164928eed7d7cc97737e5628d70a35c3a2e62c45b0d4776df92e extends \Twig\Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_newlayerset", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", [])]), "html", null, true);
        echo "\" class=\"iconAdd right addLayerset iconBig\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.add"), "html", null, true);
        echo "\"></a>
";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute(($context["application"] ?? null), "layersets", [])) > 0)) {
            // line 3
            echo "  <label for=\"inputFilterLayersets\" class=\"labelInput\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.filter.layerset"), "html", null, true);
            echo "</label><input id=\"inputFilterLayersets\" type=\"text\" class=\"input listFilterInput\" data-filter-target=\"all-instances\">

  <ul class=\"listFilterContainer\" id=\"all-instances\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["application"] ?? null), "layersets", []));
            foreach ($context['_seq'] as $context["_key"] => $context["layerset"]) {
                // line 7
                echo "      <li class=\"filterItem\">
        <table class=\"application-component-table layersetTable\" data-id=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "id", []), "html", null, true);
                echo "\">
          <thead>
            <tr class='doNotFilter'>
              <th colspan=\"4\">
                <h3 class=\"subTitle\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "title", []), "html", null, true);
                echo "</h3>
              </th>
            </tr>
            <tr class='doNotFilter'>
              <th title=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.id_description"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.id"), "html", null, true);
                echo "</th>
              <th>";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.title"), "html", null, true);
                echo "</th>
              <th>";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.type"), "html", null, true);
                echo "</th>
              <th class=\"iconColumn\">
                <a class=\"iconAdd hover-highlight-effect addInstance\" title=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.add"), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_listsources", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "layersetId" => $this->getAttribute($context["layerset"], "id", [])]), "html", null, true);
                echo "\"></a>
                <a class=\"iconEdit hover-highlight-effect editLayerset\" title=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.edit"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "title", []), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_editlayerset", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "layersetId" => $this->getAttribute($context["layerset"], "id", [])]), "html", null, true);
                echo "\"></a>
                <a class=\"iconRemove hover-highlight-effect removeLayerset\" title=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.delete.title"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "title", []), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_confirmdeletelayerset", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "layersetId" => $this->getAttribute($context["layerset"], "id", [])]), "html", null, true);
                echo "\"></a>
              </th>
            </tr>
          </thead>
          <tbody>
            ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["layerset"], "instances", []));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
                    // line 28
                    echo "              <tr class=\"sourceinst\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "id", []), "html", null, true);
                    echo "\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_instanceweight", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "layersetId" => $this->getAttribute($context["layerset"], "id", []), "instanceId" => $this->getAttribute($context["instance"], "id", [])]), "html", null, true);
                    echo "\">
                <td class=\"idColumn description\" title=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.id_description"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "source", []), "id", []), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "id", []), "html", null, true);
                    echo "</td>
                <td class=\"titleColumn description\">";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "title", []), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "source", []), "title", []), "html", null, true);
                    echo ")</td>
                <td class=\"typeColumn description\">";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "source", []), "type", []), "html", null, true);
                    echo "</td>
                <td class=\"iconColumn\">
                  <div class=\"checkWrapper hover-highlight-effect ";
                    // line 33
                    echo (($this->getAttribute($context["instance"], "enabled", [])) ? ("iconPublishActive") : ("iconPublish"));
                    echo "\"
                       title=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.show_hide"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "title", []), "html", null, true);
                    echo "\"
                       data-icon-off=\"iconPublish\" data-icon-on=\"iconPublishActive\">
                    <input class=\"checkbox\" data-url=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_instanceenabled", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "layersetId" => $this->getAttribute($context["layerset"], "id", []), "instanceId" => $this->getAttribute($context["instance"], "id", [])]), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "id", []), "html", null, true);
                    echo "\" type=\"checkbox\" ";
                    if ($this->getAttribute($context["instance"], "enabled", [])) {
                        echo " checked=\"checked\" ";
                    }
                    echo ">
                  </div>
                  <a class=\"iconEdit hover-highlight-effect editInstance\" title=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.edit"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "title", []), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_instance", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "instanceId" => $this->getAttribute($context["instance"], "id", [])]), "html", null, true);
                    echo "\"></a>
                  <span class=\"iconRemove hover-highlight-effect removeInstance\" title=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.delete.title"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "title", []), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "id", []), "html", null, true);
                    echo "\" data-slug=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? null), "slug", []), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_deleteinstance", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "layersetId" => $this->getAttribute($context["layerset"], "id", []), "instanceId" => $this->getAttribute($context["instance"], "id", [])]), "html", null, true);
                    echo "\"></span>
                </td>
              </tr>
            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 43
                    echo "              <tr>
                <td colspan=\"4\" class=\"description\">";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.no_instance_added"), "html", null, true);
                    echo "</td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "          </tbody>
        </table>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layerset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "  </ul>
";
        } else {
            // line 53
            echo "  <p class=\"description\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.no_layer_added"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:form-layersets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 53,  207 => 51,  198 => 47,  189 => 44,  186 => 43,  169 => 39,  161 => 38,  150 => 36,  143 => 34,  139 => 33,  134 => 31,  128 => 30,  120 => 29,  113 => 28,  108 => 27,  96 => 22,  88 => 21,  82 => 20,  77 => 18,  73 => 17,  67 => 16,  60 => 12,  53 => 8,  50 => 7,  46 => 6,  39 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderManagerBundle:Application:form-layersets.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/form-layersets.html.twig");
    }
}
