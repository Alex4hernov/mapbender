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

/* @MapbenderManager/Application/list-source.html.twig */
class __TwigTemplate_fd08365f8acfad224a3ca90f27b5701293d4288be5d7d2f119163b105e34709b extends \Twig\Template
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
        echo "<label for=\"inputFilterSources\" class=\"labelInput\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.filter.source"), "html", null, true);
        echo "</label><input id=\"inputFilterSources\" type=\"text\" class=\"input listFilterInput\">

<ul id=\"listFilterSources\" class=\"listFilterContainer\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sources"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 5
            echo "  <li class=\"filterItem\">
    <a id=\"repository-list\" class=\"checkContainer\" title=\"Choose ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", []), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_addinstance", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "layersetId" => $this->getAttribute(($context["layerset"] ?? null), "id", []), "sourceId" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
            echo "\">
      <span>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "type", []), "html", null, true);
            echo "</span>
      <span class=\"subTitle\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "id", []), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", []), "html", null, true);
            echo "</span>
      <span>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "alias", []), "html", null, true);
            echo "</span>
      <div class=\"description\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["source"], "description", [])), "html", null, true);
            echo "</div>
      <div class=\"clearContainer\"></div>
    </a>
  </li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "  <li class=\"description\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.no_source"), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Application/list-source.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  75 => 15,  65 => 10,  61 => 9,  55 => 8,  51 => 7,  45 => 6,  42 => 5,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderManager/Application/list-source.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/list-source.html.twig");
    }
}
