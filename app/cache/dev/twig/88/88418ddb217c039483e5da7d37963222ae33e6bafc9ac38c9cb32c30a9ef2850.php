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

/* @WebProfiler/Icon/ajax.svg */
class __TwigTemplate_c4748cdac515d142dfc3ab537ec4dec75fc498ae963fdbcc75de435116dca2c9 extends \Twig\Template
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
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M9.8,18l-3.8,4.4c-0.3,0.3-0.8,0.4-1.1,0L1,18c-0.4-0.5-0.1-1,0.5-1H3V6.4C3,3.8,5.5,2,8.2,2h3.9
    c1.1,0,2,0.9,2,2s-0.9,2-2,2H8.2C7.7,6,7,6,7,6.4V17h2.2C9.8,17,10.2,17.5,9.8,18z M23,6l-3.8-4.5c-0.3-0.3-0.8-0.3-1.1,0L14.2,6
    c-0.4,0.5-0.1,1,0.5,1H17v10.6c0,0.4-0.7,0.4-1.2,0.4h-3.9c-1.1,0-2,0.9-2,2s0.9,2,2,2h3.9c2.6,0,5.2-1.8,5.2-4.4V7h1.5
    C23.1,7,23.4,6.5,23,6z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/ajax.svg";
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
        return new Source("", "@WebProfiler/Icon/ajax.svg", "/var/www/mapbender/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Icon/ajax.svg");
    }
}
