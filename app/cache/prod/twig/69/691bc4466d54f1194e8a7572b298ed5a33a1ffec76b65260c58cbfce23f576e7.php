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

/* @MapbenderWms/Repository/form.html.twig */
class __TwigTemplate_050b4d2b2dc6f7982c1c3e57d11c2d96adaec473864a817c0f143d6d7d03a2a1 extends \Twig\Template
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_create", ["managertype" => twig_lower_filter($this->env, twig_constant("Mapbender\\CoreBundle\\Entity\\Source::TYPE_WMS"))]), "method" => "POST", "attr" => ["novalidate" => "novalidate", "autocomplete" => "false"]]);
        // line 8
        echo "
  ";
        // line 10
        echo "  <input style=\"position: absolute; display: block; top: -1000px; left: 0\" type=\"text\" name=\"somefakename\" tabindex=\"-1\"/>
  <input style=\"position: absolute; display: block; top: -1000px; left: 0\" type=\"password\" name=\"anotherfakename\" tabindex=\"-1\"/>
  ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "originUrl", []), 'row');
        echo "
  ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", []), 'row');
        echo "
  ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", []), 'row');
        echo "
  ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", []), 'row');
        echo "
  <div class=\"button-group\">
    <input class=\"button\" type=\"submit\" name=\"load\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.load"), "html", null, true);
        echo "\" />
    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_index");
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.cancel"), "html", null, true);
        echo "</a>
  </div>
";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@MapbenderWms/Repository/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  60 => 18,  56 => 17,  51 => 15,  47 => 14,  43 => 13,  39 => 12,  35 => 10,  32 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderWms/Repository/form.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Repository/form.html.twig");
    }
}
