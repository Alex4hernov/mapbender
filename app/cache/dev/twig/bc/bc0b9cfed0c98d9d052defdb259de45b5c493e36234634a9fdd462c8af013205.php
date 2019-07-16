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

/* @MapbenderManager/Application/edit.html.twig */
class __TwigTemplate_2509b6654fb35e5a500c5c041701a2a3c78f3a9e2840a125eb04bb3d77d92b4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'manager_content' => [$this, 'block_manager_content'],
            'securityTab' => [$this, 'block_securityTab'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderManager/Application/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? null), "title", []), "html", null, true);
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/lib/codemirror.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/theme/neo.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 11
    public function block_js($context, array $blocks = [])
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/lib/codemirror.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/mode/yaml/yaml.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/mode/css/css.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/keymap/sublime.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/addon/selection/active-line.js"), "html", null, true);
        echo "\"></script>

  <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fomuser/js/acl-form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/application-edit.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/confirm-delete.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 24
    public function block_manager_content($context, array $blocks = [])
    {
        // line 25
        echo "  <a class=\"iconView iconBig right\" target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", [])]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view"), "html", null, true);
        echo "\"></a>
    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_update", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", [])]), "novalidate" => "novalidate"]]);
        echo "
    <div id=\"applicationTabContainer\" class=\"tabContainer applicationTabContainer\">
      <ul class=\"tabs\">
        <li id=\"tabBaseData\" class=\"tab active\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.edit.base_data"), "html", null, true);
        echo "</li>
        <li id=\"tabLayout\" class=\"tab\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.layouts"), "html", null, true);
        echo "</li>
        <li id=\"tabLayers\" class=\"tab\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.layersets"), "html", null, true);
        echo "</li>
        <li id=\"tabCustomCss\" class=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.custom_css"), "html", null, true);
        echo "</li>
        <li id=\"tabSecurity\" class=\"tab\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.security.title"), "html", null, true);
        echo "</li>
      </ul>
      <div id=\"containerBaseData\" class=\"container active containerBaseData row no-gutters\">

        <div class=\"col-xs-8\">";
        // line 37
        $this->loadTemplate("MapbenderManagerBundle:Application:form-basic.html.twig", "@MapbenderManager/Application/edit.html.twig", 37)->display($context);
        echo "</div>
        <div class=\"col-xs-4\">
            <div class=\"screenshot_img";
        // line 39
        echo ((twig_test_empty(($context["screenshot"] ?? null))) ? (" default") : (""));
        echo "\">
                <div class=\"cell_edit\">
                    <div class=\"delete button critical hidden\">X</div>
                    <img alt=\"Load\" data-load=true class=\"screenshot\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["screenshot"] ?? null), "html", null, true);
        echo "\" />
                    <i class=\"iconAppDefault\"></i>
                </div>
            </div>
        </div>
      </div>
      <div id=\"containerLayout\" class=\"container\">
        ";
        // line 49
        $this->loadTemplate("MapbenderManagerBundle:Application:form-elements.html.twig", "@MapbenderManager/Application/edit.html.twig", 49)->display($context);
        // line 50
        echo "      </div>
      <div id=\"containerLayers\" class=\"container\">
        ";
        // line 52
        $this->loadTemplate("MapbenderManagerBundle:Application:form-layersets.html.twig", "@MapbenderManager/Application/edit.html.twig", 52)->display($context);
        // line 53
        echo "      </div>
      <div id=\"containerCustomCss\" class=\"container containerCustomCss\">
        ";
        // line 55
        $this->loadTemplate("MapbenderManagerBundle:Application:form-css.html.twig", "@MapbenderManager/Application/edit.html.twig", 55)->display($context);
        // line 56
        echo "      </div>
      <div id=\"containerSecurity\" class=\"container containerSecurity\">
        ";
        // line 58
        $this->displayBlock('securityTab', $context, $blocks);
        // line 61
        echo "      </div>
    </div>
    <div class=\"clearContainer\"></div>
    <div class=\"button-group\">
        <input type=\"submit\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.save"), "html", null, true);
        echo "\" class=\"button\"/>
        <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_index");
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.cancel"), "html", null, true);
        echo "</a>
    </div>
    ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", []), 'row');
        echo "
    ";
        // line 69
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
";
    }

    // line 58
    public function block_securityTab($context, array $blocks = [])
    {
        // line 59
        echo "          ";
        $this->loadTemplate("MapbenderManagerBundle:Application:form-security.html.twig", "@MapbenderManager/Application/edit.html.twig", 59)->display($context);
        // line 60
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Application/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 60,  220 => 59,  217 => 58,  211 => 69,  207 => 68,  200 => 66,  196 => 65,  190 => 61,  188 => 58,  184 => 56,  182 => 55,  178 => 53,  176 => 52,  172 => 50,  170 => 49,  160 => 42,  154 => 39,  149 => 37,  142 => 33,  138 => 32,  134 => 31,  130 => 30,  126 => 29,  120 => 26,  113 => 25,  110 => 24,  104 => 21,  100 => 20,  96 => 19,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  70 => 12,  67 => 11,  61 => 8,  57 => 7,  52 => 6,  49 => 5,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderManager/Application/edit.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/edit.html.twig");
    }
}
