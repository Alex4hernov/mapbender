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

/* MapbenderCoreBundle:Element:layertree.json.twig */
class __TwigTemplate_f567e7564f2692ca7c3e1043e9a855d32627336fa4bffe94dc93c53089dc7bcc extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:layertree.json.twig"));

        // line 1
        echo "{
\"mb.core.layertree.confirm.allremove\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.confirm.allremove"), "html", null, true);
        echo "\",
\"mb.core.layertree.popup.btn.ok\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.layertree.const.outofscale\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.const.outofscale"), "html", null, true);
        echo "\",
\"mb.core.layertree.const.outofbounds\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.const.outofbounds"), "html", null, true);
        echo "\",
\"mb.core.layertree.const.parentinvisible\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.const.parentinvisible"), "html", null, true);
        echo "\",
\"mb.core.metadata.popup.title\" : \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.metadata.popup.title"), "html", null, true);
        echo "\",
\"mb.core.metadata.popup.btn.ok\" : \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.metadata.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.layertree.contextmenu.nooption\": \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.contextmenu.nooption"), "html", null, true);
        echo "\"
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:layertree.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  40 => 3,  36 => 2,  33 => 1,);
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
\"mb.core.layertree.confirm.allremove\": \"{{ \"mb.core.layertree.confirm.allremove\" | trans}}\",
\"mb.core.layertree.popup.btn.ok\": \"{{ \"mb.core.layertree.popup.btn.ok\" | trans}}\",
\"mb.core.layertree.const.outofscale\": \"{{ \"mb.core.layertree.const.outofscale\" | trans}}\",
\"mb.core.layertree.const.outofbounds\": \"{{ \"mb.core.layertree.const.outofbounds\" | trans}}\",
\"mb.core.layertree.const.parentinvisible\": \"{{ \"mb.core.layertree.const.parentinvisible\" | trans}}\",
\"mb.core.metadata.popup.title\" : \"{{ \"mb.core.metadata.popup.title\" | trans }}\",
\"mb.core.metadata.popup.btn.ok\" : \"{{ \"mb.core.metadata.popup.btn.ok\" | trans }}\",
\"mb.core.layertree.contextmenu.nooption\": \"{{ \"mb.core.layertree.contextmenu.nooption\" | trans}}\"
}
", "MapbenderCoreBundle:Element:layertree.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/layertree.json.twig");
    }
}
