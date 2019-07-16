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

/* @MapbenderWms/Repository/form.html.twig */
class __TwigTemplate_58c3d9450631af2b8abc8fce085f566ed9f991b8c8f86f04c356de6de1158317 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MapbenderWms/Repository/form.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_create", ["managertype" => twig_lower_filter($this->env, twig_constant("Mapbender\\CoreBundle\\Entity\\Source::TYPE_WMS"))]), "method" => "POST", "attr" => ["novalidate" => "novalidate", "autocomplete" => "false"]]);
        // line 8
        echo "
  ";
        // line 10
        echo "  <input style=\"position: absolute; display: block; top: -1000px; left: 0\" type=\"text\" name=\"somefakename\" tabindex=\"-1\"/>
  <input style=\"position: absolute; display: block; top: -1000px; left: 0\" type=\"password\" name=\"anotherfakename\" tabindex=\"-1\"/>
  ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "originUrl", []), 'row');
        echo "
  ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'row');
        echo "
  ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", []), 'row');
        echo "
  ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", []), 'row');
        echo "
  <div class=\"button-group\">
    <input class=\"button\" type=\"submit\" name=\"load\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.load"), "html", null, true);
        echo "\" />
    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_index");
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.cancel"), "html", null, true);
        echo "</a>
  </div>
";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', ["render_rest" => false]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MapbenderWms/Repository/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  63 => 18,  59 => 17,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 10,  35 => 8,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {
    'action': path('mapbender_manager_repository_create', {'managertype': constant('Mapbender\\\\CoreBundle\\\\Entity\\\\Source::TYPE_WMS') | lower}),
    'method': 'POST',
    'attr': {
        'novalidate': 'novalidate',
        'autocomplete': 'false'
    }
}) }}
  {# This only option to prevent browser auto fill inputs. Sad but true. More info: #4814 #}
  <input style=\"position: absolute; display: block; top: -1000px; left: 0\" type=\"text\" name=\"somefakename\" tabindex=\"-1\"/>
  <input style=\"position: absolute; display: block; top: -1000px; left: 0\" type=\"password\" name=\"anotherfakename\" tabindex=\"-1\"/>
  {{ form_row(form.originUrl) }}
  {{ form_row(form.username) }}
  {{ form_row(form.password) }}
  {{ form_row(form._token) }}
  <div class=\"button-group\">
    <input class=\"button\" type=\"submit\" name=\"load\" value=\"{{\"mb.wms.wmsloader.repo.form.label.load\"|trans}}\" />
    <a href=\"{{path('mapbender_manager_repository_index')}}\" class=\"button critical\">{{\"mb.wms.wmsloader.repo.form.label.cancel\"|trans}}</a>
  </div>
{{ form_end(form, {'render_rest': false}) }}
", "@MapbenderWms/Repository/form.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Repository/form.html.twig");
    }
}
