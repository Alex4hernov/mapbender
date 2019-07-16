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
class __TwigTemplate_083aa4f035a3ec0c6b8d84618015e62d291cb4eaf5634f022031d6542ad5f671 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderWmsBundle:Element:wmsloader.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-wmsloader\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["configuration"] ?? null), "tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "tooltip", []), ($context["title"] ?? $this->getContext($context, "title")))) : (($context["title"] ?? $this->getContext($context, "title"))))), "html", null, true);
        echo "\">
    <p class=\"description\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.example"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["example_url"] ?? $this->getContext($context, "example_url")), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  63 => 14,  55 => 9,  47 => 4,  40 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-wmsloader\" title=\"{{ configuration.tooltip|default(title)|trans }}\">
    <p class=\"description\">{{ \"mb.wms.wmsloader.dialog.label.example\"|trans }}: {{ example_url }}</p>
    <br>
    <label class=\"labelInput\" for=\"loadWmsUrl\">{{ \"mb.wms.wmsloader.dialog.label.wmsurl\"|trans}}:</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsUrl\" class=\"input url\" type=\"text\" />
    </div>
    <br>
    <label class=\"labelInput\" for=\"loadWmsUser\">{{ \"mb.wms.wmsloader.dialog.label.wmsuser\"|trans}}:</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsUser\" class=\"input url\" type=\"text\" />
    </div>
    <br>
    <label class=\"labelInput\" for=\"loadWmsPass\">{{ \"mb.wms.wmsloader.dialog.label.wmspass\"|trans}}:</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsPass\" class=\"input url\" type=\"password\" />
    </div>
</div>
", "MapbenderWmsBundle:Element:wmsloader.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Element/wmsloader.html.twig");
    }
}
