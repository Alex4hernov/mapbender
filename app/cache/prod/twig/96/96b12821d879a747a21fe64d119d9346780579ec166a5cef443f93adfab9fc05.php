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

/* @MapbenderManager/Application/new.html.twig */
class __TwigTemplate_0b7bad4c6c09cdefb4ba49c91fa68d274382beab560377d60ca98d1a558fea14 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'js' => [$this, 'block_js'],
            'manager_content' => [$this, 'block_manager_content'],
            'securityTab' => [$this, 'block_securityTab'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "MapbenderManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["application"] = ["slug" => "manager"];
        // line 2
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderManager/Application/new.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.new.title"), "html", null, true);
    }

    // line 6
    public function block_js($context, array $blocks = [])
    {
        // line 7
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fomuser/js/acl-form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/application-edit.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/confirm-delete.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_manager_content($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_create"), "novalidate" => "novalidate"]]);
        echo "
    <div id=\"applicationTabContainer\" class=\"tabContainer applicationTabContainer\">
      <ul class=\"tabs\">
        <li id=\"tabBaseData\" class=\"tab active\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.new.base_data"), "html", null, true);
        echo "</li>
        <li id=\"tabSecurity\" class=\"tab\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.security.title"), "html", null, true);
        echo "</li>
      </ul>
      <div id=\"containerBaseData\" class=\"container active containerBaseData row no-gutters\">
          <div class=\"col-xs-8\">
            <label class=\"labelInput\" for=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "title", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.template"), "html", null, true);
        echo ":<span class=\"required\">*</span></label>
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "template", []), 'widget');
        echo "
            ";
        // line 24
        $this->loadTemplate("MapbenderManagerBundle:Application:form-basic.html.twig", "@MapbenderManager/Application/new.html.twig", 24)->display($context);
        // line 25
        echo "           </div>
           <div class=\"col-xs-4\">
                <div class=\"messageBox hint\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.create_use"), "html", null, true);
        echo "
                </div>
           </div>
      </div>

      <div id=\"containerSecurity\" class=\"container containerSecurity\">
        ";
        // line 34
        $this->displayBlock('securityTab', $context, $blocks);
        // line 37
        echo "      </div>
    </div>

    <div class=\"button-group\">
      <input type=\"submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.btn.create"), "html", null, true);
        echo "\" class=\"button\"/>
      <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_index");
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.btn.cancel"), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", []), 'row');
        echo "
    ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
";
    }

    // line 34
    public function block_securityTab($context, array $blocks = [])
    {
        // line 35
        echo "          ";
        $this->loadTemplate("MapbenderManagerBundle:Application:form-security.html.twig", "@MapbenderManager/Application/new.html.twig", 35)->display($context);
        // line 36
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Application/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 36,  153 => 35,  150 => 34,  144 => 46,  140 => 45,  132 => 42,  128 => 41,  122 => 37,  120 => 34,  111 => 28,  106 => 25,  104 => 24,  100 => 23,  94 => 22,  87 => 18,  83 => 17,  76 => 14,  73 => 13,  67 => 10,  63 => 9,  59 => 8,  54 => 7,  51 => 6,  45 => 4,  40 => 2,  38 => 1,  32 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderManager/Application/new.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/new.html.twig");
    }
}
