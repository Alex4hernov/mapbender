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

/* MapbenderCoreBundle:Element:srsselector.html.twig */
class __TwigTemplate_50f9fb1f68a2215b43e8ded89d0483837b8bef98d7231a5b322d24f15a0e629a extends \Twig\Template
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
        if (($this->getAttribute(($context["configuration"] ?? null), "label", []) == true)) {
            // line 2
            echo "  <span class=\"labelInput\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
            echo "</span>
";
        }
        // line 4
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"mb-element mb-element-srsselector dropdown\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["configuration"] ?? null), "tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "tooltip", []), ($context["title"] ?? null))) : (($context["title"] ?? null)))), "html", null, true);
        echo "\">
  <select class=\"hiddenDropdown\" id=\"srsselector\"></select>
  <div class=\"dropdownValue iconDown\"></div>
  <ul class=\"dropdownList\"></ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:srsselector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:srsselector.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/srsselector.html.twig");
    }
}
