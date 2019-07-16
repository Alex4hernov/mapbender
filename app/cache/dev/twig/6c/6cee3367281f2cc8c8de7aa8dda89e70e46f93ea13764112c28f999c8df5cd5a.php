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
class __TwigTemplate_f02e3874554b97d881883510fc8674e8cf05d637539307ac80e4a643a1af049a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderPrintBundle:Element:imageexport.json.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  44 => 4,  40 => 3,  36 => 2,  33 => 1,);
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
\"mb.print.imageexport.popup.btn.ok\": \"{{ \"mb.print.imageexport.popup.btn.ok\" | trans}}\",
\"mb.print.imageexport.popup.btn.cancel\": \"{{ \"mb.print.imageexport.popup.btn.cancel\" | trans}}\",
\"mb.print.imageexport.info.noactivelayer\": \"{{ \"mb.print.imageexport.info.noactivelayer\" | trans}}\"
}", "MapbenderPrintBundle:Element:imageexport.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/imageexport.json.twig");
    }
}
