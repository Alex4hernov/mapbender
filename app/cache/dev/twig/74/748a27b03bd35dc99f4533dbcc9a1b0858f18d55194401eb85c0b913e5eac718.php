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

/* MapbenderManagerBundle:Application:actions.html.twig */
class __TwigTemplate_2b49e996febb82404b1335d0a66933af916e45b003d7c656ff12906cf6fa116c extends \Twig\Template
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
        if ((isset($context["create_permission"]) || array_key_exists("create_permission", $context))) {
            // line 2
            echo "    ";
            $context["actions"] = ["create" => ["display" =>             // line 4
($context["create_permission"] ?? null), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_new"), "title" => "mb.manager.admin.application.new.title", "attr" => ["class" => "iconAdd iconBig right"]]];
        }
        // line 14
        $this->loadTemplate("MapbenderManagerBundle:Manager:actions.html.twig", "MapbenderManagerBundle:Application:actions.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  34 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderManagerBundle:Application:actions.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/actions.html.twig");
    }
}
