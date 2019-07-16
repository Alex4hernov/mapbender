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

/* @MapbenderManager/Application/deleteLayerset.html.twig */
class __TwigTemplate_3c5386bd4141e37ec31ab986328f7a504b1fa0a1cc2eeecbcf1e5b9f680720eb extends \Twig\Template
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
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.delete.confirm", ["%layerset_title%" => twig_escape_filter($this->env, $this->getAttribute(($context["layerset"] ?? null), "title", []))]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Application/deleteLayerset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderManager/Application/deleteLayerset.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/deleteLayerset.html.twig");
    }
}
