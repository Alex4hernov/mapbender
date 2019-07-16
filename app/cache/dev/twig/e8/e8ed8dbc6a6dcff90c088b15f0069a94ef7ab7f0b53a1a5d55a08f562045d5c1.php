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
class __TwigTemplate_8c89f4b298db58e14d22f5a8a6a6321887957d8d7ad103796f009333ec1cd217 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoordinatesUtilityBundle:Element:coordinatesutility.json.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
    \"mb.coordinatesutility.widget.error.noSrs\": \"{{ \"mb.coordinatesutility.widget.error.noSrs\"|trans }}\",
    \"mb.coordinatesutility.widget.error.invalidCoordinates\": \"{{ \"mb.coordinatesutility.widget.error.invalidCoordinates\"|trans }}\"
}

", "MapbenderCoordinatesUtilityBundle:Element:coordinatesutility.json.twig", "/var/www/mapbender/vendor/mapbender/coordinates-utility/Resources/views/Element/coordinatesutility.json.twig");
    }
}
