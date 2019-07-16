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

/* MapbenderPrintBundle:Element:imageexport.json.twig */
class __TwigTemplate_cf48f2f37de4015ae0413120314d6ad00a1e7f06ccfd62a462b208b9331720d9 extends \Twig\Template
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
\"mb.print.imageexport.popup.btn.ok\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.imageexport.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.print.imageexport.popup.btn.cancel\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.imageexport.popup.btn.cancel"), "html", null, true);
        echo "\",
\"mb.print.imageexport.info.noactivelayer\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.imageexport.info.noactivelayer"), "html", null, true);
        echo "\"
}";
    }

    public function getTemplateName()
    {
        return "MapbenderPrintBundle:Element:imageexport.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderPrintBundle:Element:imageexport.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/imageexport.json.twig");
    }
}
