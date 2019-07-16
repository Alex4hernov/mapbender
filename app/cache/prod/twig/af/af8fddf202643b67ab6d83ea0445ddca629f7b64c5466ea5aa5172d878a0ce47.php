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

/* __string_template__f80d6f342fb089a1dc47346a89507af250b6bbe877da5a77fdc863776e256968 */
class __TwigTemplate_99e70b188d18b69899a821029403f35c8eb2d3e4fdafc93910561e9e95c3e72f extends \Twig\Template
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
        echo "<span style=\"color: #6FB536; font-weight:bold\" >powered by Mapbender</span>";
    }

    public function getTemplateName()
    {
        return "__string_template__f80d6f342fb089a1dc47346a89507af250b6bbe877da5a77fdc863776e256968";
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
        return new Source("", "__string_template__f80d6f342fb089a1dc47346a89507af250b6bbe877da5a77fdc863776e256968", "");
    }
}
