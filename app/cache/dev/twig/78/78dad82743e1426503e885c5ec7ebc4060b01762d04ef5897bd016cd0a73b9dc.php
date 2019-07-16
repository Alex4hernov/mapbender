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

/* MapbenderPrintBundle:Element:printclient.html.twig */
class __TwigTemplate_83018bac34b570644e94e992c685067611995a9fc863aeeba1ce27e15bfdc715 extends \Twig\Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"mb-element mb-element-printclient\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 2
        $this->loadTemplate(($context["settingsTemplate"] ?? null), "MapbenderPrintBundle:Element:printclient.html.twig", 2)->display($context);
        // line 3
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderPrintBundle:Element:printclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderPrintBundle:Element:printclient.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/printclient.html.twig");
    }
}
