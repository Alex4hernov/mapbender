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

/* MapbenderCoreBundle:Element:about_dialog_content.html.twig */
class __TwigTemplate_76e298f4dcef31d78714c09589badb856cfd9bd6adc5d2f3e920e2ca5c1cf231 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:about_dialog_content.html.twig"));

        // line 1
        echo "<p class=\"subTitle\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fom"] ?? $this->getContext($context, "fom")), "server_name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.aboutdialog.content.versionprefix"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fom"] ?? $this->getContext($context, "fom")), "server_version", []), "html", null, true);
        echo "</p>
<p class=\"description\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.aboutdialog.content.learnmore"), "html", null, true);
        echo " <a class=\"linkButton\" href=\"https://mapbender.org/\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.aboutdialog.content.linktitle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.aboutdialog.content.website"), "html", null, true);
        echo "</a>.</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:about_dialog_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"subTitle\">{{ fom.server_name }} {{\"mb.core.aboutdialog.content.versionprefix\"|trans}} {{ fom.server_version }}</p>
<p class=\"description\">{{\"mb.core.aboutdialog.content.learnmore\"|trans}} <a class=\"linkButton\" href=\"https://mapbender.org/\" target=\"_blank\" title=\"{{\"mb.core.aboutdialog.content.linktitle\"|trans}}\">{{\"mb.core.aboutdialog.content.website\"|trans}}</a>.</p>
", "MapbenderCoreBundle:Element:about_dialog_content.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/about_dialog_content.html.twig");
    }
}
