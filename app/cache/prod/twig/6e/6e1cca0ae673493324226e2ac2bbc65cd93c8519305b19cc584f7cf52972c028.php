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
class __TwigTemplate_1092937df15793ad77b888a896caad6b96b57290eacfc7c04110d6965c3d125c extends \Twig\Template
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
        echo "<p class=\"subTitle\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fom"] ?? null), "server_name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.aboutdialog.content.versionprefix"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fom"] ?? null), "server_version", []), "html", null, true);
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
        return array (  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:about_dialog_content.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/about_dialog_content.html.twig");
    }
}
