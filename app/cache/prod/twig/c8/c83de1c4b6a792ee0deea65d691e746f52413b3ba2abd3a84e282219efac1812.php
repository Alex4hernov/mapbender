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

/* MapbenderCoreBundle:Element:htmlelement.html.twig */
class __TwigTemplate_72c29ac9475104c25142a2624ae9cf776adeb81d25a41d35045c290405b38f6e extends \Twig\Template
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
        echo "<";
        echo twig_escape_filter($this->env, ($context["tagName"] ?? null), "html", null, true);
        echo " id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"mb-element mb-element-htmlelement ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? null), "classes", []), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "title", []), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute(($context["configuration"] ?? null), "content", [])));
        echo "
</";
        // line 3
        echo twig_escape_filter($this->env, ($context["tagName"] ?? null), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:htmlelement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  41 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:htmlelement.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/htmlelement.html.twig");
    }
}
