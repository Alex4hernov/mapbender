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
class __TwigTemplate_432496f998bce177815bd947e0ffa26f843db8f14b82db9b1a2171c24545c755 extends \Twig\Template
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
        echo "\" class=\"mb-element mb-element-coordsdisplay ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? null), "anchor", []), "html", null, true);
        echo "\">
    ";
        // line 2
        if (($this->getAttribute(($context["configuration"] ?? null), "label", []) == true)) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
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
        return array (  49 => 7,  45 => 5,  39 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:coordinatesdisplay.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/coordinatesdisplay.html.twig");
    }
}
