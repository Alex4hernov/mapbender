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

/* MapbenderCoreBundle:Element:featureinfo.html.twig */
class __TwigTemplate_804a8ae903255ed5bfccfe50903b9d206b10f518333d1e90b44365af444a9510 extends \Twig\Template
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
        echo "\" class=\"mb-element mb-element-featureinfo hidden\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        echo "\">
    <div id=\"js-error-featureinfo\" class=\"error hidden\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.nolayer"), "html", null, true);
        echo "</div>
";
        // line 3
        if (( !$this->getAttribute(($context["configuration"] ?? null), "displayType", [], "any", true, true) || ($this->getAttribute(($context["configuration"] ?? null), "displayType", []) == ""))) {
            // line 4
            echo "    <div class=\"js-header-parent js-content-parent\">
        <div id=\"\" class=\"js-header js-header-content\" data-idname=\"common\"></div>
        <div id=\"\" class=\"js-content js-content-content\" data-idname=\"content\"></div>
    </div>
";
        } elseif (($this->getAttribute(        // line 8
($context["configuration"] ?? null), "displayType", []) == "tabs")) {
            // line 9
            echo "    <div class=\"tabContainer js-content-parent\">
        <ul class=\"tabs js-header-parent\">
            <li id=\"\" class=\"tab js-header js-header-content\" data-idname=\"tab\"></li>
        </ul>
        <div id=\"\" class=\"container js-content js-content-content\" data-idname=\"container\"></div>
    </div>
";
        } elseif (($this->getAttribute(        // line 15
($context["configuration"] ?? null), "displayType", []) == "accordion")) {
            // line 16
            echo "    <div class=\"accordionContainer js-header-parent js-content-parent\">
        <div id=\"\" class=\"accordion js-header\" data-idname=\"accordion\">
            <div class=\"tabcell js-header-content\"></div>
        </div>
        <div id=\"\" class=\"container-accordion js-content\" data-idname=\"container\">
            <div class=\"accordion-cell\">
                <div class=\"accordion-wrapper\">
                    <div class=\"js-content-content\"></div>
                </div>
            </div>
       </div>
    </div>
";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:featureinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  61 => 16,  59 => 15,  51 => 9,  49 => 8,  43 => 4,  41 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:featureinfo.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/featureinfo.html.twig");
    }
}
