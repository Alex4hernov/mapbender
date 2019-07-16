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
class __TwigTemplate_4e48f54ce4d379c1c7fe8fb1dc974cc851235fda52ee3258213f7cb337771a09 extends \Twig\Template
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
        ob_start();
        // line 2
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"mb-element mb-element-zoombar ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? null), "anchor", []), "html", null, true);
        echo "\">
    ";
        // line 3
        if (($this->getAttribute(($context["configuration"] ?? null), "draggable", [], "any", true, true) && $this->getAttribute(($context["configuration"] ?? null), "draggable", []))) {
            // line 4
            echo "      <div class=\"move-icon-wrap\">
          <span class=\"iconMove\"></span>
      </div>
    ";
        }
        // line 8
        echo "  ";
        if (twig_in_filter("pan", $this->getAttribute(($context["configuration"] ?? null), "components", []))) {
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
        if (twig_in_filter("history", $this->getAttribute(($context["configuration"] ?? null), "components", []))) {
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
        if (twig_in_filter("zoom_box", $this->getAttribute(($context["configuration"] ?? null), "components", []))) {
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
        if (twig_in_filter("zoom_max", $this->getAttribute(($context["configuration"] ?? null), "components", []))) {
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
        if ((twig_in_filter("zoom_in_out", $this->getAttribute(($context["configuration"] ?? null), "components", [])) || twig_in_filter("zoom_slider", $this->getAttribute(($context["configuration"] ?? null), "components", [])))) {
            // line 34
            echo "      <li class=\"zoomSlider\">
        ";
            // line 35
            if (twig_in_filter("zoom_in_out", $this->getAttribute(($context["configuration"] ?? null), "components", []))) {
                // line 36
                echo "        <div class=\"iconZoomIn iconBig\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoomin"), "html", null, true);
                echo "\"></div>
        ";
            }
            // line 38
            echo "        ";
            if (twig_in_filter("zoom_slider", $this->getAttribute(($context["configuration"] ?? null), "components", []))) {
                // line 39
                echo "        <ul class=\"zoomSliderLevels\"></ul>
        ";
            }
            // line 41
            echo "        ";
            if (twig_in_filter("zoom_in_out", $this->getAttribute(($context["configuration"] ?? null), "components", []))) {
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
        return array (  147 => 46,  143 => 44,  137 => 42,  134 => 41,  130 => 39,  127 => 38,  121 => 36,  119 => 35,  116 => 34,  113 => 33,  107 => 30,  104 => 29,  101 => 28,  95 => 25,  92 => 24,  89 => 23,  83 => 20,  79 => 19,  76 => 18,  74 => 17,  71 => 16,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  50 => 9,  47 => 8,  41 => 4,  39 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:zoombar.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/zoombar.html.twig");
    }
}
