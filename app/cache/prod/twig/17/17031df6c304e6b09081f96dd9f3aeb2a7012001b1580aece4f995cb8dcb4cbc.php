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

/* @MapbenderWms/Repository/new.html.twig */
class __TwigTemplate_4b79c23a1fa8993541a978286c152fe3de42b8c4bc0917936addb5932a3b2f7b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'manager_content' => [$this, 'block_manager_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderWms/Repository/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.new.label.addservice"), "html", null, true);
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_manager_content($context, array $blocks = [])
    {
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("MapbenderWmsBundle:Repository:form.html.twig", "@MapbenderWms/Repository/new.html.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "@MapbenderWms/Repository/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  63 => 11,  60 => 10,  57 => 9,  50 => 6,  47 => 5,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderWms/Repository/new.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Repository/new.html.twig");
    }
}
