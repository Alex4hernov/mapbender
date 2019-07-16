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

/* MapbenderWmsBundle:Element:wmsloader.html.twig */
class __TwigTemplate_abe13154d9d323b2b1100560880de3e6ab958b890aeaff710895b33cd779adaa extends \Twig\Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"mb-element mb-element-wmsloader\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["configuration"] ?? null), "tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "tooltip", []), ($context["title"] ?? null))) : (($context["title"] ?? null)))), "html", null, true);
        echo "\">
    <p class=\"description\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.example"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["example_url"] ?? null), "html", null, true);
        echo "</p>
    <br>
    <label class=\"labelInput\" for=\"loadWmsUrl\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.wmsurl"), "html", null, true);
        echo ":</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsUrl\" class=\"input url\" type=\"text\" />
    </div>
    <br>
    <label class=\"labelInput\" for=\"loadWmsUser\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.wmsuser"), "html", null, true);
        echo ":</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsUser\" class=\"input url\" type=\"text\" />
    </div>
    <br>
    <label class=\"labelInput\" for=\"loadWmsPass\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.wmspass"), "html", null, true);
        echo ":</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsPass\" class=\"input url\" type=\"password\" />
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderWmsBundle:Element:wmsloader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  52 => 9,  44 => 4,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderWmsBundle:Element:wmsloader.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Element/wmsloader.html.twig");
    }
}
