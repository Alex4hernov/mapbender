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

/* MapbenderCoreBundle:Element:gpsposition.html.twig */
class __TwigTemplate_6bc5a9968d4ee9e7ec6a7afca9161f64b5763852110bd9047ed9e1a9006d8c5c extends \Twig\Template
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
        echo "<span id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"mb-gpsButton iconBig ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["configuration"] ?? null), "icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "icon", []), "iconGps")) : ("iconGps")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["configuration"] ?? null), "tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "tooltip", []), ($context["title"] ?? null))) : (($context["title"] ?? null)))), "html", null, true);
        echo "\">";
        if ($this->getAttribute(($context["configuration"] ?? null), "label", [])) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        }
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:gpsposition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:gpsposition.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/gpsposition.html.twig");
    }
}
