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

/* MapbenderCoreBundle:Element:featureinfo.json.twig */
class __TwigTemplate_2506287fac5bd381d409568f59a940791a25db37b3a50b69bbac78d3e58f8bf0 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:featureinfo.json.twig"));

        // line 1
        echo "{
\"mb.core.metadata.popup.title\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.metadata.popup.title"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.popup.btn.ok\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.popup.btn.print\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.popup.btn.print"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.error.nolayer\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.nolayer"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.error.noresult\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.noresult"), "html", null, true);
        echo "\"
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:featureinfo.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  48 => 5,  44 => 4,  40 => 3,  36 => 2,  33 => 1,);
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
\"mb.core.metadata.popup.title\": \"{{ \"mb.core.metadata.popup.title\" | trans }}\",
\"mb.core.featureinfo.popup.btn.ok\": \"{{ \"mb.core.featureinfo.popup.btn.ok\" | trans }}\",
\"mb.core.featureinfo.popup.btn.print\": \"{{ \"mb.core.featureinfo.popup.btn.print\" | trans }}\",
\"mb.core.featureinfo.error.nolayer\": \"{{\"mb.core.featureinfo.error.nolayer\" | trans}}\",
\"mb.core.featureinfo.error.noresult\": \"{{\"mb.core.featureinfo.error.noresult\" | trans}}\"
}
", "MapbenderCoreBundle:Element:featureinfo.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/featureinfo.json.twig");
    }
}
