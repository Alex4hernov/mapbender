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

/* MapbenderCoreBundle:Element:layertree.html.twig */
class __TwigTemplate_f67782ee1b9ddb48b00d8290c983e7d709e477ef64c563915d74335c0ee1262e extends \Twig\Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"mb-element mb-element-layertree hidden\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        echo "\">
  <li class=\"hidden leave showLeaves\" data-state=\"\" data-title=\"\">
    <div class=\"leaveContainer\">
      <span class=\"layer-spinner\"></span>
      <span class=\"layer-state\"></span>
      <span class=\"iconFolder\" title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.tooltip.sublayers_openclose"), "html", null, true);
        echo "\"></span>
      <div class=\"checkWrapper iconCheckbox sourceVisibilityWrapper\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.sourcevisibility_onoff"), "html", null, true);
        echo "\">
        <input class=\"layer-selected checkbox\" type=\"checkbox\" name=\"sourceVisibility\">
      </div>
      <div class=\"iconOk selectAll\" title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.allvisibility_on"), "html", null, true);
        echo "\"></div>
      <div class=\"checkWrapper iconCheckbox selectedWrapper\" title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.visibility_onoff"), "html", null, true);
        echo "\">
        <input class=\"layer-selected checkbox\" type=\"checkbox\" name=\"selected\">
      </div>
      <div class=\"checkWrapper featureInfoWrapper\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.featureinfo_onoff"), "html", null, true);
        echo "\" data-icon-on=\"iconInfoActive\" data-icon-off=\"iconInfo\">
        <input class=\"layer-info checkbox\" type=\"checkbox\" name=\"info\"/>
      </div>
      <span class=\"layer-title labelCheck\"></span>
      ";
        // line 18
        if ((($this->getAttribute(($context["configuration"] ?? null), "menu", [], "any", true, true) && ($this->getAttribute(($context["configuration"] ?? null), "menu", []) != null)) && (twig_length_filter($this->env, $this->getAttribute(($context["configuration"] ?? null), "menu", [])) > 0))) {
            // line 19
            echo "      <span class=\"iconMenu layer-menu-btn\"></span>
        <div class=\"layer-menu hidden\">
          <div>
            <span class=\"iconCancel exit-button\" title=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.tooltip.menu.close"), "html", null, true);
            echo "\"></span>
          </div>
          ";
            // line 24
            if (twig_in_filter("opacity", $this->getAttribute(($context["configuration"] ?? null), "menu", []))) {
                // line 25
                echo "          <div id=\"layer-opacity\" class=\"layer-opacity-bar layer-slider-bar\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.opacity"), "html", null, true);
                echo "\">
            <div class=\"layer-opacity-handle layer-slider-handle\">100</div>
          </div>
          ";
            }
            // line 29
            echo "          ";
            if (twig_in_filter("dimension", $this->getAttribute(($context["configuration"] ?? null), "menu", []))) {
                // line 30
                echo "          <div class=\"layer-dimension-checkbox checkWrapper left iconCheckbox\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.dimension_onoff"), "html", null, true);
                echo "\">
            <input type=\"checkbox\" class=\"checkbox\"/>
          </div>
          <span id=\"layer-dimension-value-\" class=\"layer-dimension-title labelCheck\" title=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.dimension.current_value"), "html", null, true);
                echo "\"></span>
          <div id=\"layer-dimension-\" class=\"layer-dimension-bar layer-slider-bar\" title=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.dimension"), "html", null, true);
                echo "\">
            <div class=\"layer-dimension-handle layer-slider-handle\"></div>
          </div>
          <input type=\"text\" class=\"layer-dimension-textfield inputText\" name=\"dimension-extent\" title=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.dimension"), "html", null, true);
                echo "\"/>
          ";
            }
            // line 39
            echo "          <div>
            ";
            // line 40
            if (twig_in_filter("zoomtolayer", $this->getAttribute(($context["configuration"] ?? null), "menu", []))) {
                // line 41
                echo "            <span class=\"layer-zoom iconSearch hover-highlight-effect\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.zoomtolayer"), "html", null, true);
                echo "\"></span>
            ";
            }
            // line 43
            echo "            ";
            if (twig_in_filter("metadata", $this->getAttribute(($context["configuration"] ?? null), "menu", []))) {
                // line 44
                echo "            <span class=\"layer-metadata iconFileText hover-highlight-effect\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.metadata"), "html", null, true);
                echo "\"></span>
            ";
            }
            // line 46
            echo "            ";
            if (twig_in_filter("layerremove", $this->getAttribute(($context["configuration"] ?? null), "menu", []))) {
                // line 47
                echo "            <span class=\"layer-remove-btn iconRemove hover-highlight-effect\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.tooltip.removelayer"), "html", null, true);
                echo "\"></span>
            ";
            }
            // line 49
            echo "          </div>
        </div>
      ";
        }
        // line 52
        echo "    </div>
    <ul id=\"list-first\" class=\"layers\"></ul>
  </li>
  ";
        // line 55
        if ($this->getAttribute(($context["configuration"] ?? null), "showHeader", [])) {
            // line 56
            echo "  <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.sources"), "html", null, true);
            echo " (<span id=\"counter\">0</span>)<a href=\"#\" id=\"delete-all\" class=\"icononly\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.deleteallsources"), "html", null, true);
            echo "\">&times;</a></h2>
  ";
        }
        // line 58
        echo "  <ul id=\"list-root\" class=\"layers\" ></ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:layertree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 58,  156 => 56,  154 => 55,  149 => 52,  144 => 49,  138 => 47,  135 => 46,  129 => 44,  126 => 43,  120 => 41,  118 => 40,  115 => 39,  110 => 37,  104 => 34,  100 => 33,  93 => 30,  90 => 29,  82 => 25,  80 => 24,  75 => 22,  70 => 19,  68 => 18,  61 => 14,  55 => 11,  51 => 10,  45 => 7,  41 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:layertree.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/layertree.html.twig");
    }
}
