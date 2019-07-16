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

/* __string_template__274a84c04282743234f9eec1a65706ebf3a581462a30778e680facc1abf730ef */
class __TwigTemplate_9616b9c1e9b9b858672034a81c83110ff0d6dd70ae8df9bfc39bfd703b5fabe1 extends \Twig\Template
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
        echo "<div style=\"color: #6FB536; font-weight:bold\" >powered by Mapbender. Read more about Mapbender at the <a href=\"https://www.mapbender.org\" target=\"_blank\">Mapbender Project Page</a>.</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__274a84c04282743234f9eec1a65706ebf3a581462a30778e680facc1abf730ef";
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
        return new Source("", "__string_template__274a84c04282743234f9eec1a65706ebf3a581462a30778e680facc1abf730ef", "");
    }
}
