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

/* __string_template__ede76cc01cc04eccab7ba62ed593ebd28026df542c87673fbf8fccfd92363a6b */
class __TwigTemplate_47db7d1e361dcf0d2e13c7a2106be6bd1181ba11267c30f6f72666648ac5e84a extends \Twig\Template
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
        echo "Enjoy the new Mapbender mobile Template. Please note that not all elements can be used in the mobile application. <div style=\"color: #6FB536; font-weight:bold\">Find out more about the Mapbender mobile in the <a href=\"https://doc.mapbender.org/en/customization/mapbender_templates.html\" target=\"_blank\">Template Documentation</a>.</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__ede76cc01cc04eccab7ba62ed593ebd28026df542c87673fbf8fccfd92363a6b";
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
        return new Source("", "__string_template__ede76cc01cc04eccab7ba62ed593ebd28026df542c87673fbf8fccfd92363a6b", "");
    }
}
