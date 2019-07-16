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

/* MapbenderCoreBundle:Element:coordinatesdisplay.html.twig */
class __TwigTemplate_7840e90f8c3a93a63c13d1cc4a3e1da21dbda03afd0e93b81a54f0977b573513 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:coordinatesdisplay.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-coordsdisplay ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "anchor", []), "html", null, true);
        echo "\">
    ";
        // line 2
        if (($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "label", []) == true)) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? $this->getContext($context, "title"))), "html", null, true);
            echo "
    ";
        } else {
            // line 5
            echo "        <span class=\"iconCoordinates\"></span>
    ";
        }
        // line 7
        echo "    <span class=\"display-area\"></span>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:coordinatesdisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  48 => 5,  42 => 3,  40 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-coordsdisplay {{configuration.anchor}}\">
    {% if configuration.label == true %}
        {{ title| trans }}
    {% else %}
        <span class=\"iconCoordinates\"></span>
    {% endif %}
    <span class=\"display-area\"></span>
</div>
", "MapbenderCoreBundle:Element:coordinatesdisplay.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/coordinatesdisplay.html.twig");
    }
}
