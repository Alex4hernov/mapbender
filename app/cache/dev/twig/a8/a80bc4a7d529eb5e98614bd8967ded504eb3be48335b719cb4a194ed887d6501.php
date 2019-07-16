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
class __TwigTemplate_3170b905dd39ac63bff6487fc191bf368ae29fea49718ea43fbf920f7b8d04d8 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MapbenderCoreBundle/Resources/views/application.config.loader.js.twig"));

        // line 1
        echo "(function (\$) {
    if(Mapbender.configuration){
        \$(Mapbender.setup);
    } else {
        var url = '";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_configuration", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", [])]);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("(function (\$) {
    if(Mapbender.configuration){
        \$(Mapbender.setup);
    } else {
        var url = '{{ path('mapbender_core_application_configuration', {'slug': application.slug})  | raw }}';
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
})(jQuery);", "@MapbenderCoreBundle/Resources/views/application.config.loader.js.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/application.config.loader.js.twig");
    }
}
