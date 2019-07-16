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

/* MapbenderCoreBundle::frontend.html.twig */
class __TwigTemplate_109da41f97a1c564f6ce332055525d5020f76dc07cc92db25654ffb280a2b5a0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
            'frontend_content' => [$this, 'block_frontend_content'],
            'trans' => [$this, 'block_trans'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderCoreBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("MapbenderCoreBundle::index.html.twig", "MapbenderCoreBundle::frontend.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        $this->displayBlock('frontend_content', $context, $blocks);
    }

    public function block_frontend_content($context, array $blocks = [])
    {
    }

    // line 8
    public function block_trans($context, array $blocks = [])
    {
        // line 9
        echo "  ";
        $this->displayParentBlock("trans", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_js($context, array $blocks = [])
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  70 => 11,  63 => 9,  60 => 8,  51 => 6,  48 => 5,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle::frontend.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/frontend.html.twig");
    }
}
