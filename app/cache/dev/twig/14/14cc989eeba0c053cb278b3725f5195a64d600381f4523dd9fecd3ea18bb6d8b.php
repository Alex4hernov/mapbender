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
class __TwigTemplate_6f3439e4348d3e4d96965bdcaf024387db0e3754803bd9cc9c7dce03e7efd30e extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:featureinfo.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-featureinfo hidden\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? $this->getContext($context, "title"))), "html", null, true);
        echo "\">
    <div id=\"js-error-featureinfo\" class=\"error hidden\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.nolayer"), "html", null, true);
        echo "</div>
";
        // line 3
        if (( !$this->getAttribute(($context["configuration"] ?? null), "displayType", [], "any", true, true) || ($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "displayType", []) == ""))) {
            // line 4
            echo "    <div class=\"js-header-parent js-content-parent\">
        <div id=\"\" class=\"js-header js-header-content\" data-idname=\"common\"></div>
        <div id=\"\" class=\"js-content js-content-content\" data-idname=\"content\"></div>
    </div>
";
        } elseif (($this->getAttribute(        // line 8
($context["configuration"] ?? $this->getContext($context, "configuration")), "displayType", []) == "tabs")) {
            // line 9
            echo "    <div class=\"tabContainer js-content-parent\">
        <ul class=\"tabs js-header-parent\">
            <li id=\"\" class=\"tab js-header js-header-content\" data-idname=\"tab\"></li>
        </ul>
        <div id=\"\" class=\"container js-content js-content-content\" data-idname=\"container\"></div>
    </div>
";
        } elseif (($this->getAttribute(        // line 15
($context["configuration"] ?? $this->getContext($context, "configuration")), "displayType", []) == "accordion")) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  79 => 29,  64 => 16,  62 => 15,  54 => 9,  52 => 8,  46 => 4,  44 => 3,  40 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-featureinfo hidden\" data-title=\"{{ title |trans }}\">
    <div id=\"js-error-featureinfo\" class=\"error hidden\">{{ \"mb.core.featureinfo.error.nolayer\" | trans }}</div>
{% if configuration.displayType is not defined or configuration.displayType == '' %}
    <div class=\"js-header-parent js-content-parent\">
        <div id=\"\" class=\"js-header js-header-content\" data-idname=\"common\"></div>
        <div id=\"\" class=\"js-content js-content-content\" data-idname=\"content\"></div>
    </div>
{% elseif configuration.displayType == 'tabs' %}
    <div class=\"tabContainer js-content-parent\">
        <ul class=\"tabs js-header-parent\">
            <li id=\"\" class=\"tab js-header js-header-content\" data-idname=\"tab\"></li>
        </ul>
        <div id=\"\" class=\"container js-content js-content-content\" data-idname=\"container\"></div>
    </div>
{% elseif configuration.displayType == 'accordion' %}
    <div class=\"accordionContainer js-header-parent js-content-parent\">
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
{% endif %}
</div>
", "MapbenderCoreBundle:Element:featureinfo.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/featureinfo.html.twig");
    }
}
