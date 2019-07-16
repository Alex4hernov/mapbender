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

/* MapbenderCoreBundle:Element:redlining.json.twig */
class __TwigTemplate_551cda3231d2421fc335cb306451ec45b57a3bc79b3da0a18a3f024232c0a691 extends \Twig\Template
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
\"mb.core.redlining.dialog.btn.cancel\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.dialog.btn.cancel"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.point\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.point"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.line\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.line"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.polygon\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.polygon"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.rectangle\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.rectangle"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.text.label\": \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.text.label"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.text.error.notext\": \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.text.error.notext"), "html", null, true);
        echo "\"
}";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:redlining.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 7,  49 => 6,  45 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:redlining.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/redlining.json.twig");
    }
}
