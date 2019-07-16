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

/* @MapbenderManager/Element/select.html.twig */
class __TwigTemplate_9838c7aacac9e8cdaecffb048eb032d3a106c66bd82dff3acb92eb49c4b67564 extends \Twig\Template
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
        echo "    <label for=\"inputFilterElements\" class=\"labelInput\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.filter.element"), "html", null, true);
        echo "</label><input id=\"inputFilterElements\" type=\"text\" class=\"input listFilterInput\">

    <ul id=\"listFilterElements\" class=\"listFilterContainer\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        foreach ($context['_seq'] as $context["class"] => $context["meta"]) {
            // line 5
            echo "        <li class=\"filterItem\">
            <a class=\"checkContainer chooseElement\" data-tags=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_join_filter($this->getAttribute($context["meta"], "tags", []), ",")), "html", null, true);
            echo "\" title=\"Choose ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "title", []), "html", null, true);
            echo " Element\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_new", ["slug" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "slug"], "method"), "class" => $this->getAttribute($context["meta"], "class", []), "region" => ($context["region"] ?? null)]), "html", null, true);
            echo "\">
                <span class=\"subTitle\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "title", []), "html", null, true);
            echo "</span>
                <div class=\"description\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "description", []), "html", null, true);
            echo "</div>
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['class'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Element/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  56 => 8,  52 => 7,  44 => 6,  41 => 5,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderManager/Element/select.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Element/select.html.twig");
    }
}
