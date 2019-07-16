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
class __TwigTemplate_574ca5e8567e4b41fbfdbc10cdc17bcab93512f9187e933554b9019a81e35587 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderCore/Welcome/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.applications"), "html", null, true);
    }

    // line 5
    public function block_js($context, array $blocks = [])
    {
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
    }

    // line 11
    public function block_manager_content($context, array $blocks = [])
    {
        // line 12
        echo "
  ";
        // line 13
        $this->loadTemplate("MapbenderManagerBundle:Application:actions.html.twig", "@MapbenderCore/Welcome/list.html.twig", 13)->display($context);
        // line 14
        echo "  ";
        if ((twig_length_filter($this->env, ($context["applications"] ?? null)) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["applications"] ?? null));
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
                    echo twig_escape_filter($this->env, ($context["uploads_web_url"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "slug", []), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "screenshot", []), "html", null, true);
                    echo "?t=";
                    if ((($context["time"] ?? null) != null)) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["time"] ?? null), "d.m.Y-H:i:s"), "html", null, true);
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
        return array (  247 => 70,  241 => 68,  236 => 65,  226 => 61,  222 => 60,  217 => 58,  211 => 57,  208 => 56,  202 => 53,  198 => 52,  192 => 51,  189 => 50,  187 => 49,  184 => 48,  179 => 46,  170 => 45,  168 => 44,  165 => 43,  155 => 41,  153 => 40,  150 => 39,  140 => 37,  138 => 36,  129 => 34,  122 => 29,  118 => 27,  104 => 25,  102 => 24,  92 => 21,  89 => 20,  85 => 19,  79 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  65 => 11,  59 => 8,  55 => 7,  50 => 6,  47 => 5,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderCore/Welcome/list.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Welcome/list.html.twig");
    }
}
