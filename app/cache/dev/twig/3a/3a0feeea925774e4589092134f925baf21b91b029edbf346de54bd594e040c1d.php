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

/* MapbenderPrintBundle:Element:printclient.json.twig */
class __TwigTemplate_7f5b836df250ce9f3f14974f001c9ed0dbf4b9e7ee438781a91c96ecbf54b97f extends \Twig\Template
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
\"mb.core.printclient.popup.btn.ok\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.printclient.popup.btn.cancel\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.popup.btn.cancel"), "html", null, true);
        echo "\",
\"mb.core.printclient.info.noactivelayer\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.info.noactivelayer"), "html", null, true);
        echo "\",
\"mb.core.printclient.form.required\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.form.required"), "html", null, true);
        echo "\",
\"mb.core.printclient.btn.deactivate\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.btn.deactivate"), "html", null, true);
        echo "\",
\"mb.core.printclient.btn.activate\": \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.btn.activate"), "html", null, true);
        echo "\",
\"mb.print.printclient.joblist.status.pending\": \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.printclient.joblist.status.pending"), "html", null, true);
        echo "\",
\"mb.print.printclient.joblist.status.processing\": \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.printclient.joblist.status.processing"), "html", null, true);
        echo "\",
\"mb.print.printclient.joblist.status.finished\": \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.printclient.joblist.status.finished"), "html", null, true);
        echo "\",
\"mb.print.printclient.joblist.open\": \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.printclient.joblist.open"), "html", null, true);
        echo "\",
\"mb.print.printclient.joblist.delete\": \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.printclient.joblist.delete"), "html", null, true);
        echo "\",
\"mb.print.printclient.joblist.cancel\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.printclient.joblist.cancel"), "html", null, true);
        echo "\",
\"mb.print.printclient.joblist.loading\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.printclient.joblist.loading"), "html", null, true);
        echo "\",
\"mb.print.printclient.joblist.nodata\": \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.printclient.joblist.nodata"), "html", null, true);
        echo "\"
}
";
    }

    public function getTemplateName()
    {
        return "MapbenderPrintBundle:Element:printclient.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderPrintBundle:Element:printclient.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/printclient.json.twig");
    }
}
