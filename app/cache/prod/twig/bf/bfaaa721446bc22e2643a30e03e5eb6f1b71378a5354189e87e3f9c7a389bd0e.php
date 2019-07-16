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

/* MapbenderCoreBundle:ElementAdmin:featureinfo.html.twig */
class __TwigTemplate_c24fc87ea4e8119d06a4e0f379f1bb9e24a829cbf11742e3195537468eb2677e extends \Twig\Template
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
        echo "<div class=\"elementForm\">
    <div class=\"left\">
        ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "autoActivate", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "autoActivate", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.admin.featureinfo.label.autoopen"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"left\">
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "deactivateOnClose", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "deactivateOnClose", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.admin.featureinfo.label.deactivateonclose"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"left\">
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "printResult", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "printResult", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">print Result</label>
    </div>
    <div class=\"clearContainer\"></div>
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "tooltip", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "tooltip", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "target", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "target", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "type", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "type", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "displayType", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "displayType", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "maxCount", []), 'row');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "width", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "width", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "height", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "height", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    <div class=\"left\">
        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "showOriginal", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "showOriginal", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.admin.featureinfo.label.showoriginal"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"left\">
        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "onlyValid", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "onlyValid", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.admin.featureinfo.label.onlyvalid"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"clearContainer\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:ElementAdmin:featureinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  109 => 28,  102 => 25,  96 => 23,  92 => 22,  86 => 20,  80 => 18,  74 => 16,  68 => 14,  62 => 12,  54 => 9,  44 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:ElementAdmin:featureinfo.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/ElementAdmin/featureinfo.html.twig");
    }
}
