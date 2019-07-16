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

/* MapbenderCoreBundle:Element:redlining.html.twig */
class __TwigTemplate_e3fdd0af50e5868e569824195b2a1674ae95302c09040b0910d52959a493b837 extends \Twig\Template
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
        echo "\" class=\"mb-element mb-element-redlining hidden\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 2
        if (twig_in_filter("point", $this->getAttribute(($context["configuration"] ?? null), "geometrytypes", []))) {
            // line 3
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"point\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.point"), "html", null, true);
            echo "\">
    ";
        }
        // line 5
        echo "    ";
        if (twig_in_filter("line", $this->getAttribute(($context["configuration"] ?? null), "geometrytypes", []))) {
            // line 6
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"line\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.line"), "html", null, true);
            echo "\">
    ";
        }
        // line 8
        echo "    ";
        if (twig_in_filter("polygon", $this->getAttribute(($context["configuration"] ?? null), "geometrytypes", []))) {
            // line 9
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"polygon\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.polygon"), "html", null, true);
            echo "\">
    ";
        }
        // line 11
        echo "    ";
        if (twig_in_filter("rectangle", $this->getAttribute(($context["configuration"] ?? null), "geometrytypes", []))) {
            // line 12
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"rectangle\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.rectangle"), "html", null, true);
            echo "\">
    ";
        }
        // line 14
        echo "    ";
        if (twig_in_filter("text", $this->getAttribute(($context["configuration"] ?? null), "geometrytypes", []))) {
            // line 15
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.text.label"), "html", null, true);
            echo "\">
        <div id=\"redlining-text-wrapper\" class=\"text-wrapper hidden\">
            <label class=\"labelInput\" for=\"loadWmsUrl\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.text.label"), "html", null, true);
            echo ":</label>
            <div class=\"inputWrapper\">
                <input name=\"label-text\" class=\"input\" type=\"text\" />
            </div>
        </div>
    ";
        }
        // line 23
        echo "    <table class=\"geometry-table\">
        <tr class=\"geometry-item\" data-id=\"\">
            <td class=\"geometry-name\"></td>
            <td class=\"geometry-actions\">
                <span class=\"geometry-remove iconRemove hover-highlight-effect\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometry.action.remove"), "html", null, true);
        echo "\"></span>
                <span class=\"geometry-edit iconEdit hover-highlight-effect\" title=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometry.action.edit"), "html", null, true);
        echo "\"></span>
                <span class=\"geometry-zoom iconZoomSelect hover-highlight-effect\" title=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometry.action.zoom"), "html", null, true);
        echo "\"></span>
            </td>
        </tr>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:redlining.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  100 => 28,  96 => 27,  90 => 23,  81 => 17,  75 => 15,  72 => 14,  66 => 12,  63 => 11,  57 => 9,  54 => 8,  48 => 6,  45 => 5,  39 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:redlining.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/redlining.html.twig");
    }
}
