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

/* MapbenderCoreBundle:Element:gpsposition.json.twig */
class __TwigTemplate_ad2e4b9592d308f6faca28693596aff754e792701cdbc68c67cfc8e6e014f04b extends \Twig\Template
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
  \"mb.core.gpsposition.error.notsupported\":  ";
        // line 2
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.gpsposition.error.notsupported"));
        echo ",
  \"mb.core.gpsposition.error.nosignal\":  ";
        // line 3
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.gpsposition.error.nosignal"));
        echo "
}
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:gpsposition.json.twig";
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
        return new Source("", "MapbenderCoreBundle:Element:gpsposition.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/gpsposition.json.twig");
    }
}
