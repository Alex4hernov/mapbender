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
class __TwigTemplate_9bbf81777931f4a155a794dcc45babe98281cef8077540bef3c92d22b4754e4c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderManagerBundle:Application:actions.html.twig"));

        // line 1
        if ((isset($context["create_permission"]) || array_key_exists("create_permission", $context))) {
            // line 2
            echo "    ";
            $context["actions"] = ["create" => ["display" =>             // line 4
($context["create_permission"] ?? $this->getContext($context, "create_permission")), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_new"), "title" => "mb.manager.admin.application.new.title", "attr" => ["class" => "iconAdd iconBig right"]]];
        }
        // line 14
        $this->loadTemplate("MapbenderManagerBundle:Manager:actions.html.twig", "MapbenderManagerBundle:Application:actions.html.twig", 14)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  40 => 14,  37 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if create_permission is defined %}
    {% set actions = {
        'create': {
            'display': create_permission,
            'url': path('mapbender_manager_application_new'),
            'title': 'mb.manager.admin.application.new.title',
            'attr': {
                'class': 'iconAdd iconBig right'
            }
        }
    }
    %}
{% endif %}
{% include \"MapbenderManagerBundle:Manager:actions.html.twig\" %}
", "MapbenderManagerBundle:Application:actions.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/actions.html.twig");
    }
}
