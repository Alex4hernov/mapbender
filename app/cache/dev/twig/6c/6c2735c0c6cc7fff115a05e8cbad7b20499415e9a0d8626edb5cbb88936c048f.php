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
class __TwigTemplate_44375c5767a23219dfe0b2e4fc24414fd35cbdcb1750bedd419b9d329a2448f1 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:gpsposition.json.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  40 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{
  \"mb.core.gpsposition.error.notsupported\":  {{ 'mb.core.gpsposition.error.notsupported' | trans | json_encode | raw }},
  \"mb.core.gpsposition.error.nosignal\":  {{ 'mb.core.gpsposition.error.nosignal' | trans | json_encode | raw }}
}
", "MapbenderCoreBundle:Element:gpsposition.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/gpsposition.json.twig");
    }
}
