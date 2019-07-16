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

/* MapbenderCoordinatesUtilityBundle:Element:coordinatesutility.html.twig */
class __TwigTemplate_064eb755eca43244abe5742b01d0bf2836d0271c934c805d04db68d12c5f337e extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoordinatesUtilityBundle:Element:coordinatesutility.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-coordinatesutility\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? $this->getContext($context, "title"))), "html", null, true);
        echo "\">

    <div class=\"block coordinates-extern\">
        <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.srs.title"), "html", null, true);
        echo "</p>

        <div class=\"dropdown\" title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.srs.tooltip"), "html", null, true);
        echo "\">
            <select class=\"hiddenDropdown srs\"></select>
            <div class=\"dropdownValue iconDown\"></div>
            <ul class=\"dropdownList\"></ul>
        </div>

        <div class=\"input-to-clipboard\">
            <input class=\"input input-coordinate\" type=\"text\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.transformedCoordinates.tooltip"), "html", null, true);
        echo "\" value=\"\"/>
            <div class=\"icon iconBig copyClipBoard\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.copytoclipboard.tooltip"), "html", null, true);
        echo "\"></div>
        </div>

    </div>

    <div class=\"block coordinates-intern\">
        <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.originCoordinates.title"), "html", null, true);
        echo "</p>
        <div class=\"input-to-clipboard\">
            <input class=\"input map-coordinate\" type=\"text\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.originCoordinates.title"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.originCoordinates.tooltip"), "html", null, true);
        echo ")\" readonly=\"true\" value=\"\"/>
            <div class=\"icon iconBig copyClipBoard\" title=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.copytoclipboard.tooltip"), "html", null, true);
        echo "\"></div>
        </div>
    </div>

    <div class=\"button-group\">
        <span class=\"button coordinate-search left hidden\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.button.search"), "html", null, true);
        echo "</span>
        <span class=\"button center-map right\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.view.button.centermap"), "html", null, true);
        echo "</span>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoordinatesUtilityBundle:Element:coordinatesutility.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  89 => 28,  81 => 23,  75 => 22,  70 => 20,  61 => 14,  57 => 13,  47 => 6,  42 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-coordinatesutility\" title=\"{{ title|trans }}\">

    <div class=\"block coordinates-extern\">
        <p>{{ \"mb.coordinatesutility.view.srs.title\" | trans }}</p>

        <div class=\"dropdown\" title=\"{{ \"mb.coordinatesutility.view.srs.tooltip\" | trans }}\">
            <select class=\"hiddenDropdown srs\"></select>
            <div class=\"dropdownValue iconDown\"></div>
            <ul class=\"dropdownList\"></ul>
        </div>

        <div class=\"input-to-clipboard\">
            <input class=\"input input-coordinate\" type=\"text\" title=\"{{ \"mb.coordinatesutility.view.transformedCoordinates.tooltip\" | trans }}\" value=\"\"/>
            <div class=\"icon iconBig copyClipBoard\" title=\"{{ \"mb.coordinatesutility.view.copytoclipboard.tooltip\" | trans }}\"></div>
        </div>

    </div>

    <div class=\"block coordinates-intern\">
        <p>{{ \"mb.coordinatesutility.view.originCoordinates.title\" | trans }}</p>
        <div class=\"input-to-clipboard\">
            <input class=\"input map-coordinate\" type=\"text\" title=\"{{ \"mb.coordinatesutility.view.originCoordinates.title\" | trans }} ({{ \"mb.coordinatesutility.view.originCoordinates.tooltip\" | trans }})\" readonly=\"true\" value=\"\"/>
            <div class=\"icon iconBig copyClipBoard\" title=\"{{ \"mb.coordinatesutility.view.copytoclipboard.tooltip\" | trans }}\"></div>
        </div>
    </div>

    <div class=\"button-group\">
        <span class=\"button coordinate-search left hidden\">{{ \"mb.coordinatesutility.view.button.search\" | trans }}</span>
        <span class=\"button center-map right\">{{ \"mb.coordinatesutility.view.button.centermap\" | trans }}</span>
    </div>
</div>
", "MapbenderCoordinatesUtilityBundle:Element:coordinatesutility.html.twig", "/var/www/mapbender/vendor/mapbender/coordinates-utility/Resources/views/Element/coordinatesutility.html.twig");
    }
}
