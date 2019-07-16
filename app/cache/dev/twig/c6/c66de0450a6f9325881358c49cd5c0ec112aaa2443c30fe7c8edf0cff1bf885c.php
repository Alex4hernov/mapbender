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

/* MapbenderCoordinatesUtilityBundle:Element:coordinatesutility.json.twig */
class __TwigTemplate_0a1182012c6a5d6335913720e4f97c00c697e0a20c1a26f3262dba5f848ed05f extends \Twig\Template
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
        echo "{
    \"mb.coordinatesutility.widget.error.noSrs\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.widget.error.noSrs"), "html", null, true);
        echo "\",
    \"mb.coordinatesutility.widget.error.invalidCoordinates\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.coordinatesutility.widget.error.invalidCoordinates"), "html", null, true);
        echo "\"
}

";
    }

    public function getTemplateName()
    {
        return "MapbenderCoordinatesUtilityBundle:Element:coordinatesutility.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoordinatesUtilityBundle:Element:coordinatesutility.json.twig", "/var/www/mapbender/vendor/mapbender/coordinates-utility/Resources/views/Element/coordinatesutility.json.twig");
    }
}
