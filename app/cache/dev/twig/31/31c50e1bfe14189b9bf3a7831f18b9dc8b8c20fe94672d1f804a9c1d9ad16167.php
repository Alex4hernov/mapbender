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

/* @MapbenderCoreBundle/Resources/views/application.config.loader.js.twig */
class __TwigTemplate_ebc68499acf6257a09c19cb35d24e798f6a82b80f886923e5464e36bc1740b15 extends \Twig\Template
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
        echo "(function (\$) {
    if(Mapbender.configuration){
        \$(Mapbender.setup);
    } else {
        var url = '";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_configuration", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", [])]);
        echo "';
        \$.ajax({
            url: url + window.location.search,
            contentType: 'json'
        }).done(function (data, textStatus, jqXHR) {
            Mapbender.configuration = data;
            \$(Mapbender.setup);
        }).fail(function (jqXHR, textStatus, errorThrown) {
            Mapbender.info(\"Load application's configuration: \" + errorThrown);
        });
    }
})(jQuery);";
    }

    public function getTemplateName()
    {
        return "@MapbenderCoreBundle/Resources/views/application.config.loader.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderCoreBundle/Resources/views/application.config.loader.js.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/application.config.loader.js.twig");
    }
}
