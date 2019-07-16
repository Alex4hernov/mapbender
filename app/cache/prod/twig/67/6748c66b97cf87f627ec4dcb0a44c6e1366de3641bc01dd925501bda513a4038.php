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

/* __string_template__8e4fd1172fbbae23d9dbbc541cccaa4579c34280f6a0a1c859f73555090c849c */
class __TwigTemplate_93be64959c24d32f24572b9f9ab3b99d44074805e5ca84d82e78d890dab6a2c6 extends \Twig\Template
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
        echo "<span style=\"color: #6FB536; font-weight:bold\">powered by Mapbender</span>";
    }

    public function getTemplateName()
    {
        return "__string_template__8e4fd1172fbbae23d9dbbc541cccaa4579c34280f6a0a1c859f73555090c849c";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8e4fd1172fbbae23d9dbbc541cccaa4579c34280f6a0a1c859f73555090c849c", "");
    }
}
