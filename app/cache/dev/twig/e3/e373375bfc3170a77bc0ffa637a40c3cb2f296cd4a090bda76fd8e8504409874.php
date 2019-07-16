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

/* MapbenderCoreBundle:Element:zoombar.html.twig */
class __TwigTemplate_7b296f3f4e4a2989e0a3d26c50b9b70773a0cbae4724538aaf044ec1ab168052 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:zoombar.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-zoombar ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "anchor", []), "html", null, true);
        echo "\">
    ";
        // line 3
        if (($this->getAttribute(($context["configuration"] ?? null), "draggable", [], "any", true, true) && $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "draggable", []))) {
            // line 4
            echo "      <div class=\"move-icon-wrap\">
          <span class=\"iconMove\"></span>
      </div>
    ";
        }
        // line 8
        echo "  ";
        if (twig_in_filter("pan", $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "components", []))) {
            // line 9
            echo "  <div class=\"pan\">
    <span class=\"panUp iconTop\" title=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.panup"), "html", null, true);
            echo "\"></span>
    <span class=\"panRight iconRight\" title=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.panright"), "html", null, true);
            echo "\"></span>
    <span class=\"panDown iconDown\" title=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.pandown"), "html", null, true);
            echo "\"></span>
    <span class=\"panLeft iconLeft\" title=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.panleft"), "html", null, true);
            echo "\"></span>
  </div>
  ";
        }
        // line 16
        echo "  <ul class=\"toolPane\">
    ";
        // line 17
        if (twig_in_filter("history", $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "components", []))) {
            // line 18
            echo "      <li class=\"history\">
        <span class=\"historyPrev iconPrev\" title=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.goback"), "html", null, true);
            echo "\"></span>
        <span class=\"historyNext iconNext\" title=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.goforward"), "html", null, true);
            echo "\"></span>
      </li>
    ";
        }
        // line 23
        echo "    ";
        if (twig_in_filter("zoom_box", $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "components", []))) {
            // line 24
            echo "      <li class=\"zoomBox\">
        <span class=\"iconZoomSelect iconBig\" title=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoombybox"), "html", null, true);
            echo "\"></span>
      </li>
    ";
        }
        // line 28
        echo "    ";
        if (twig_in_filter("zoom_max", $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "components", []))) {
            // line 29
            echo "      <li class=\"zoomWorld\">
        <span class=\"iconZoomMin iconBig\" title=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoombyworld"), "html", null, true);
            echo "\"></span>
      </li>
    ";
        }
        // line 33
        echo "    ";
        if ((twig_in_filter("zoom_in_out", $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "components", [])) || twig_in_filter("zoom_slider", $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "components", [])))) {
            // line 34
            echo "      <li class=\"zoomSlider\">
        ";
            // line 35
            if (twig_in_filter("zoom_in_out", $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "components", []))) {
                // line 36
                echo "        <div class=\"iconZoomIn iconBig\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoomin"), "html", null, true);
                echo "\"></div>
        ";
            }
            // line 38
            echo "        ";
            if (twig_in_filter("zoom_slider", $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "components", []))) {
                // line 39
                echo "        <ul class=\"zoomSliderLevels\"></ul>
        ";
            }
            // line 41
            echo "        ";
            if (twig_in_filter("zoom_in_out", $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "components", []))) {
                // line 42
                echo "        <div class=\"iconZoomOut iconBig\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoomout"), "html", null, true);
                echo "\"></div>
        ";
            }
            // line 44
            echo "      </li>
    ";
        }
        // line 46
        echo "  </ul>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:zoombar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  146 => 44,  140 => 42,  137 => 41,  133 => 39,  130 => 38,  124 => 36,  122 => 35,  119 => 34,  116 => 33,  110 => 30,  107 => 29,  104 => 28,  98 => 25,  95 => 24,  92 => 23,  86 => 20,  82 => 19,  79 => 18,  77 => 17,  74 => 16,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  53 => 9,  50 => 8,  44 => 4,  42 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
<div id=\"{{ id }}\" class=\"mb-element mb-element-zoombar {{configuration.anchor}}\">
    {% if configuration.draggable is defined and configuration.draggable %}
      <div class=\"move-icon-wrap\">
          <span class=\"iconMove\"></span>
      </div>
    {% endif %}
  {% if 'pan' in configuration.components %}
  <div class=\"pan\">
    <span class=\"panUp iconTop\" title=\"{{ \"mb.core.zoombar.panup\" | trans }}\"></span>
    <span class=\"panRight iconRight\" title=\"{{ \"mb.core.zoombar.panright\" | trans }}\"></span>
    <span class=\"panDown iconDown\" title=\"{{ \"mb.core.zoombar.pandown\" | trans }}\"></span>
    <span class=\"panLeft iconLeft\" title=\"{{ \"mb.core.zoombar.panleft\" | trans }}\"></span>
  </div>
  {% endif %}
  <ul class=\"toolPane\">
    {% if 'history' in configuration.components %}
      <li class=\"history\">
        <span class=\"historyPrev iconPrev\" title=\"{{ \"mb.core.zoombar.goback\" | trans }}\"></span>
        <span class=\"historyNext iconNext\" title=\"{{ \"mb.core.zoombar.goforward\" | trans }}\"></span>
      </li>
    {% endif %}
    {% if 'zoom_box' in configuration.components %}
      <li class=\"zoomBox\">
        <span class=\"iconZoomSelect iconBig\" title=\"{{ \"mb.core.zoombar.zoombybox\" | trans }}\"></span>
      </li>
    {% endif %}
    {% if 'zoom_max' in configuration.components %}
      <li class=\"zoomWorld\">
        <span class=\"iconZoomMin iconBig\" title=\"{{ \"mb.core.zoombar.zoombyworld\" | trans }}\"></span>
      </li>
    {% endif %}
    {% if 'zoom_in_out' in configuration.components or 'zoom_slider' in configuration.components %}
      <li class=\"zoomSlider\">
        {% if 'zoom_in_out' in configuration.components %}
        <div class=\"iconZoomIn iconBig\" title=\"{{ \"mb.core.zoombar.zoomin\" | trans }}\"></div>
        {% endif %}
        {% if 'zoom_slider' in configuration.components %}
        <ul class=\"zoomSliderLevels\"></ul>
        {% endif %}
        {% if 'zoom_in_out' in configuration.components %}
        <div class=\"iconZoomOut iconBig\" title=\"{{ \"mb.core.zoombar.zoomout\" | trans }}\"></div>
        {% endif %}
      </li>
    {% endif %}
  </ul>
</div>
{% endspaceless %}
", "MapbenderCoreBundle:Element:zoombar.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/zoombar.html.twig");
    }
}
