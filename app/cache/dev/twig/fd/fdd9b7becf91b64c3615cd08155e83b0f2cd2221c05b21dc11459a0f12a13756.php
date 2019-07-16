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

/* MapbenderCoreBundle:Element:button.html.twig */
class __TwigTemplate_134cc6b85cb990635b62da911f78a4229d010e70cde2caa14696b1b7fa8568cf extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:button.html.twig"));

        // line 1
        $context["_haveIcon"] = ($this->getAttribute(($context["configuration"] ?? null), "icon", [], "any", true, true) && $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "icon", []));
        // line 2
        if (($this->getAttribute(($context["configuration"] ?? null), "click", [], "any", true, true) && $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "click", []))) {
            // line 3
            echo "  <a id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" target=\"_blank\"
     class=\"mb-button\"
     href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "click", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["configuration"] ?? null), "tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "tooltip", []), ($context["title"] ?? $this->getContext($context, "title")))) : (($context["title"] ?? $this->getContext($context, "title"))))), "html", null, true);
            echo "\">
    ";
            // line 6
            if (($context["_haveIcon"] ?? $this->getContext($context, "_haveIcon"))) {
                // line 7
                echo "      <span class=\"iconBig ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "icon", []), "html", null, true);
                echo "\"></span>
    ";
            }
            // line 9
            echo "    ";
            if ($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "label", [])) {
                // line 10
                echo "    <span";
                if (($context["_haveIcon"] ?? $this->getContext($context, "_haveIcon"))) {
                    echo " class=\"hidden-sm hidden-xs hidden-md-down\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? $this->getContext($context, "title"))), "html", null, true);
                echo "</span>
    ";
            }
            // line 12
            echo "  </a>
";
        } else {
            // line 14
            echo "  <span id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"
        data-group=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "group", []), "html", null, true);
            echo "\"
        title=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["configuration"] ?? null), "tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "tooltip", []), ($context["title"] ?? $this->getContext($context, "title")))) : (($context["title"] ?? $this->getContext($context, "title"))))), "html", null, true);
            echo "\"
        class=\"mb-button\">
    ";
            // line 18
            if (($context["_haveIcon"] ?? $this->getContext($context, "_haveIcon"))) {
                // line 19
                echo "    <span class=\"iconBig ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "icon", []), "html", null, true);
                echo "\"></span>
    ";
            }
            // line 21
            echo "    ";
            if ($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "label", [])) {
                // line 22
                echo "    <span";
                if (($context["_haveIcon"] ?? $this->getContext($context, "_haveIcon"))) {
                    echo " class=\"hidden-sm hidden-xs hidden-md-down\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? $this->getContext($context, "title"))), "html", null, true);
                echo "</span>
    ";
            }
            // line 24
            echo "  </span>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  99 => 22,  96 => 21,  90 => 19,  88 => 18,  83 => 16,  79 => 15,  74 => 14,  70 => 12,  60 => 10,  57 => 9,  51 => 7,  49 => 6,  43 => 5,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set _haveIcon = (configuration.icon is defined and configuration.icon) %}
{% if configuration.click is defined and configuration.click  %}
  <a id=\"{{ id }}\" target=\"_blank\"
     class=\"mb-button\"
     href=\"{{ configuration.click }}\" title=\"{{ configuration.tooltip|default(title)|trans }}\">
    {% if _haveIcon %}
      <span class=\"iconBig {{ configuration.icon }}\"></span>
    {% endif %}
    {% if configuration.label %}
    <span{% if _haveIcon %} class=\"hidden-sm hidden-xs hidden-md-down\"{% endif %}>{{ title|trans }}</span>
    {% endif %}
  </a>
{% else  %}
  <span id=\"{{ id }}\"
        data-group=\"{{ configuration.group }}\"
        title=\"{{ configuration.tooltip|default(title)|trans }}\"
        class=\"mb-button\">
    {% if _haveIcon %}
    <span class=\"iconBig {{ configuration.icon }}\"></span>
    {% endif %}
    {% if configuration.label %}
    <span{% if _haveIcon %} class=\"hidden-sm hidden-xs hidden-md-down\"{% endif %}>{{ title|trans }}</span>
    {% endif %}
  </span>
{% endif %}
", "MapbenderCoreBundle:Element:button.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/button.html.twig");
    }
}
