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
class __TwigTemplate_127e319817df3ba6b4af8981a85d928a0c481c21834f3fc374572376d3066998 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderPrintBundle:Element:printclient.json.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  40 => 3,  36 => 2,  33 => 1,);
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
\"mb.core.printclient.popup.btn.ok\": \"{{ \"mb.core.printclient.popup.btn.ok\" | trans}}\",
\"mb.core.printclient.popup.btn.cancel\": \"{{ \"mb.core.printclient.popup.btn.cancel\" | trans}}\",
\"mb.core.printclient.info.noactivelayer\": \"{{ \"mb.core.printclient.info.noactivelayer\" | trans}}\",
\"mb.core.printclient.form.required\": \"{{ \"mb.core.printclient.form.required\" | trans}}\",
\"mb.core.printclient.btn.deactivate\": \"{{ \"mb.core.printclient.btn.deactivate\" | trans}}\",
\"mb.core.printclient.btn.activate\": \"{{ \"mb.core.printclient.btn.activate\" | trans}}\",
\"mb.print.printclient.joblist.status.pending\": \"{{ \"mb.print.printclient.joblist.status.pending\" | trans}}\",
\"mb.print.printclient.joblist.status.processing\": \"{{ \"mb.print.printclient.joblist.status.processing\" | trans}}\",
\"mb.print.printclient.joblist.status.finished\": \"{{ \"mb.print.printclient.joblist.status.finished\" | trans}}\",
\"mb.print.printclient.joblist.open\": \"{{ \"mb.print.printclient.joblist.open\" | trans}}\",
\"mb.print.printclient.joblist.delete\": \"{{ \"mb.print.printclient.joblist.delete\" | trans}}\",
\"mb.print.printclient.joblist.cancel\": \"{{ \"mb.print.printclient.joblist.cancel\" | trans}}\",
\"mb.print.printclient.joblist.loading\": \"{{ \"mb.print.printclient.joblist.loading\" | trans}}\",
\"mb.print.printclient.joblist.nodata\": \"{{ \"mb.print.printclient.joblist.nodata\" | trans}}\"
}
", "MapbenderPrintBundle:Element:printclient.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/printclient.json.twig");
    }
}
