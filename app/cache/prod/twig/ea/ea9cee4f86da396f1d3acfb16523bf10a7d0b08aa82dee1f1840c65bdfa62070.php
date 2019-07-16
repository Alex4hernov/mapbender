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

/* MapbenderWmsBundle:Repository:layer.html.twig */
class __TwigTemplate_ac86f9c6654352e8508466c94cec6daf0a154ce793bb9ffd4bc3b19356301d94 extends \Twig\Template
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
        echo "<ul class=\"itemLevel";
        echo twig_escape_filter($this->env, ($context["itemLevel"] ?? null), "html", null, true);
        echo " list ";
        if ((($context["itemLevel"] ?? null) > 1)) {
            echo "closed";
        }
        echo "\">
  <li class=\"openCloseTitle hover-highlight-effect ";
        // line 2
        if ((($context["itemLevel"] ?? null) > 1)) {
            echo " iconExpandClosed ";
        } else {
            echo " iconExpand ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "title", []), "html", null, true);
        echo "</li>
  ";
        // line 3
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "name", [])) > 0)) {
            // line 4
            echo "    <li>
      <span class=\"labelText\">";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.name"), "html", null, true);
            echo ":</span>
      <span class=\"metaText\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "name", []), "html", null, true);
            echo "</span>
    </li>
  ";
        }
        // line 9
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "title", [])) > 0)) {
            // line 10
            echo "  <li>
    <span class=\"labelText\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.title"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "title", []), "html", null, true);
            echo "</span>
  </li>
  ";
        }
        // line 15
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "abstract", [])) > 0)) {
            // line 16
            echo "  <li>
    <span class=\"labelText\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.abstract"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "abstract", []), "html", null, true);
            echo "</span>
  </li>
  ";
        }
        // line 21
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "queryable", [])) > 0)) {
            // line 22
            echo "  <li>
    <span class=\"labelText\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.queryable"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "queryable", []), "html", null, true);
            echo "</span>
  </li>
  ";
        }
        // line 27
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "cascaded", [])) > 0)) {
            // line 28
            echo "  <li>
    <span class=\"labelText\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.cascaded"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "cascaded", []), "html", null, true);
            echo "</span>
  </li>
  ";
        }
        // line 33
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "opaque", [])) > 0)) {
            // line 34
            echo "  <li>
    <span class=\"labelText\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.opaque"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "opaque", []), "html", null, true);
            echo "</span>
  </li>
  ";
        }
        // line 39
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "noSubset", [])) > 0)) {
            // line 40
            echo "  <li>
    <span class=\"labelText\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.nosubset"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "noSubset", []), "html", null, true);
            echo "</span>
  </li>
  ";
        }
        // line 45
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "fixedWidth", [])) > 0)) {
            // line 46
            echo "  <li>
    <span class=\"labelText\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.fixedwidth"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "fixedWidth", []), "html", null, true);
            echo "</span>
  </li>
  ";
        }
        // line 51
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "fixedHeight", [])) > 0)) {
            // line 52
            echo "  <li>
    <span class=\"labelText\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.fixedheight"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "fixedHeight", []), "html", null, true);
            echo "</span>
  </li>
  ";
        }
        // line 57
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "latlonBounds", []) != null)) {
            // line 58
            echo "    <li>
      <span class=\"labelText left\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.latlonbounds"), "html", null, true);
            echo ":</span>
      <span class=\"metaText\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "latlonBounds", []), "srs", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "latlonBounds", []), "minx", []), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "latlonBounds", []), "miny", []), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "latlonBounds", []), "maxx", []), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "latlonBounds", []), "maxy", []), "html", null, true);
            echo "</span>
    </li>
  ";
        }
        // line 63
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "boundingBoxes", [])) > 0)) {
            // line 64
            echo "    <li>
      <span class=\"labelText left\">";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.boundingbox"), "html", null, true);
            echo ":</span>
      <ul class=\"left\">
        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "boundingBoxes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["bbox"]) {
                // line 68
                echo "          <li>
            <span class=\"metaText\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["bbox"], "srs", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bbox"], "minx", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bbox"], "miny", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bbox"], "maxx", []), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bbox"], "maxy", []), "html", null, true);
                echo "</span>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bbox'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "      </ul>
    </li>
  ";
        }
        // line 75
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "srs", [])) > 0)) {
            // line 76
            echo "  <li>
    <span class=\"labelText left\">";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.srs"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">
      ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "srs", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["srs"]) {
                // line 80
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "first", [])) {
                    echo ", ";
                }
                echo twig_escape_filter($this->env, $context["srs"], "html", null, true);
                echo "
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['srs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    </span>
  </li>
  ";
        }
        // line 85
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "styles", [])) > 0)) {
            // line 86
            echo "    <li>
      <span class=\"labelText left\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.styles"), "html", null, true);
            echo ":</span>
        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "styles", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 89
                echo "          ";
                if ( !$this->getAttribute($context["loop"], "first", [])) {
                    echo "<br/>";
                }
                // line 90
                echo "          <span class=\"metaText\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.name"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["style"], "name", []), "html", null, true);
                echo "</span>
          <span class=\"metaText\">";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.title"), "html", null, true);
                echo "</dt>: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["style"], "title", []), "html", null, true);
                echo "</span>
          <span class=\"metaText\">";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.abstract"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["style"], "abstract", []), "html", null, true);
                echo "</span>
          <span class=\"metaText\">
            ";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.legendurl"), "html", null, true);
                echo ": 
            ";
                // line 95
                if ( !(null === $this->getAttribute($context["style"], "legendUrl", []))) {
                    // line 96
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["style"], "legendUrl", []), "width", []), "html", null, true);
                    echo "X";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["style"], "legendUrl", []), "height", []), "html", null, true);
                    echo "
            ";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["style"], "legendUrl", []), "onlineResource", []), "format", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["style"], "legendUrl", []), "onlineResource", []), "href", []), "html", null, true);
                    echo "
            ";
                }
                // line 99
                echo "          </span>
          <span class=\"metaText\">
            ";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.stylesheeturl"), "html", null, true);
                echo ":

            ";
                // line 103
                if ($this->getAttribute(($context["layer"] ?? null), "styleSheetUrl", [], "any", true, true)) {
                    // line 104
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["style"], "styleSheetUrl", []), "format", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["style"], "styleSheetUrl", []), "href", []), "html", null, true);
                    echo "
            ";
                }
                // line 105
                echo "<br/>
          </span>

          <span class=\"metaText\">
            ";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.styleurl"), "html", null, true);
                echo ":
            ";
                // line 110
                if ($this->getAttribute(($context["layer"] ?? null), "styleUrl", [], "any", true, true)) {
                    // line 111
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["style"], "styleUrl", []), "format", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["style"], "styleUrl", []), "href", []), "html", null, true);
                    echo "
            ";
                }
                // line 113
                echo "          </span>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "    </li>
  ";
        }
        // line 117
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "scale", [], "any", true, true) && ($this->getAttribute(($context["layer"] ?? null), "scale", []) != ""))) {
            // line 118
            echo "    <li>
      <span class=\"labelText left\">";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.scale"), "html", null, true);
            echo ":</span>
      <span class=\"metaText\">
          ";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.min"), "html", null, true);
            echo ":";
            if ( !(null === $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "scale", []), "min", []))) {
                echo twig_escape_filter($this->env, sprintf("%d", $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "scale", []), "min", [])), "html", null, true);
            }
            echo "<br/>
        ";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.max"), "html", null, true);
            echo ":";
            if ( !(null === $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "scale", []), "max", []))) {
                echo twig_escape_filter($this->env, sprintf("%d", $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "scale", []), "max", [])), "html", null, true);
            }
            // line 123
            echo "      </span>

    </li>
  ";
        }
        // line 127
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "scaleHint", [], "any", true, true) && ($this->getAttribute(($context["layer"] ?? null), "scaleHint", []) != ""))) {
            // line 128
            echo "  <li>
    <span class=\"labelText left\">";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.scalehint"), "html", null, true);
            echo ":</span>
    <span class=\"metaText\">
      ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.min"), "html", null, true);
            echo ":";
            if ( !(null === $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "scaleHint", []), "min", []))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "scaleHint", []), "min", []), "html", null, true);
            }
            echo "<br/>
      ";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.max"), "html", null, true);
            echo ":";
            if ( !(null === $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "scaleHint", []), "max", []))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "scaleHint", []), "max", []), "html", null, true);
            }
            // line 133
            echo "    </span>
  </li>
  ";
        }
        // line 136
        echo "  ";
        if ((($this->getAttribute(($context["layer"] ?? null), "attribution", [], "any", true, true) && ($this->getAttribute(($context["layer"] ?? null), "attribution", []) != "")) && (twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "attribution", [])) > 0))) {
            // line 137
            echo "    <li>
      <span class=\"labelText left\">";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.attribution"), "html", null, true);
            echo ":</span>
        <ul class=\"left\">
          <li>
            <span class=\"metaText\">";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.title"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "attribution", []), "title", []), "html", null, true);
            echo "</span>
          </li>
          <li>
            <span class=\"metaText\">";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.onlineresource"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "attribution", []), "onlineResource", []), "html", null, true);
            echo "</span>
          </li>
          <li>
            <span class=\"metaText\">
              ";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.logourl"), "html", null, true);
            echo ":
              ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["layer"] ?? null), "attribution", []), "logoUrl", []), "width", []), "html", null, true);
            echo "X";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["layer"] ?? null), "attribution", []), "logoUrl", []), "height", []), "html", null, true);
            echo "
              ";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["layer"] ?? null), "attribution", []), "logoUrl", []), "onlineResource", []), "format", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["layer"] ?? null), "attribution", []), "logoUrl", []), "onlineResource", []), "href", []), "html", null, true);
            echo "
            </span>
          </li>
        </ul>
    </li>
  ";
        }
        // line 156
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "identifier", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "identifier", [])) > 0))) {
            // line 157
            echo "    <li>
      <span class=\"labelText\">";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.identifier"), "html", null, true);
            echo ":</span>
      <ul>
        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "identifier", []));
            foreach ($context['_seq'] as $context["_key"] => $context["identifier"]) {
                // line 161
                echo "          ";
                if (($this->getAttribute($context["identifier"], "authority", [], "any", true, true) && ($this->getAttribute($context["identifier"], "authority", []) != ""))) {
                    // line 162
                    echo "            <li>
              <span class=\"metaText\">
                ";
                    // line 164
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.authority"), "html", null, true);
                    echo ": 
                ";
                    // line 165
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.url"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["identifier"], "authority", []), "url", []), "html", null, true);
                    echo "
                ";
                    // line 166
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.name"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["identifier"], "authority", []), "name", []), "html", null, true);
                    echo "
              </span>
            </li>
          ";
                }
                // line 170
                echo "          ";
                if ($this->getAttribute($context["identifier"], "value", [], "any", true, true)) {
                    // line 171
                    echo "            <li><span class=\"metaText\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.value"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["identifier"], "value", []), "html", null, true);
                    echo "</span></li>
          ";
                }
                // line 173
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['identifier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "      </ul>
    </li>
  ";
        }
        // line 177
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "authority", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "authority", [])) > 0))) {
            // line 178
            echo "    <li>
      <span class=\"labelText\">";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.authority"), "html", null, true);
            echo ":</span>
      <ul>
        ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "authority", []));
            foreach ($context['_seq'] as $context["_key"] => $context["authority"]) {
                // line 182
                echo "          <li>
            <span class=\"metaText\">
            ";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.url"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "url", []), "html", null, true);
                echo "
            ";
                // line 185
                if ($this->getAttribute($context["authority"], "name", [], "any", true, true)) {
                    // line 186
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.name"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["authority"], "name", []), "html", null, true);
                    echo "<br/>
            ";
                }
                // line 188
                echo "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authority'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "      </ul>
    </li>
  ";
        }
        // line 193
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "metadataUrl", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "metadataUrl", [])) > 0))) {
            // line 194
            echo "    <li>
      <span class=\"labelText\">";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.metadataurl"), "html", null, true);
            echo ":</span>
        <ul>
        ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "metadataUrl", []));
            foreach ($context['_seq'] as $context["_key"] => $context["metadataUrl"]) {
                // line 198
                echo "          <li>
            <span class=\"metaText\">
              ";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadataUrl"], "type", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["metadataUrl"], "onlineresource", []), "format", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["metadataUrl"], "onlineresource", []), "href", []), "html", null, true);
                echo "
            </span>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metadataUrl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "        </ul>
    </li>
  ";
        }
        // line 207
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "dimension", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "dimension", [])) > 0))) {
            // line 208
            echo "  <li>
    <span class=\"labelText left\">";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.dimension"), "html", null, true);
            echo ":</span>
    <ul class=\"\">
    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "dimension", []));
            foreach ($context['_seq'] as $context["_key"] => $context["dimension"]) {
                // line 212
                echo "      <li>
        <span class=\"metaText\">
          name:'";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($context["dimension"], "name", []), "html", null, true);
                echo "', units:'";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dimension"], "units", []), "html", null, true);
                echo "', unitSymbol:'";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dimension"], "unitSymbol", []), "html", null, true);
                echo "', 
          default:'";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["dimension"], "default", []), "html", null, true);
                echo "', multipleValues:'";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dimension"], "multipleValues", []), "html", null, true);
                echo "', nearestValue:'";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dimension"], "nearestValue", []), "html", null, true);
                echo "',
          current:'";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["dimension"], "current", []), "html", null, true);
                echo "', extent:'";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dimension"], "extent", []), "html", null, true);
                echo "'
        <span>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dimension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "    </ul>
  </li>
  ";
        }
        // line 223
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "extent", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "extent", [])) > 0))) {
            // line 224
            echo "  <li>
    <span class=\"labelText\">";
            // line 225
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.extent"), "html", null, true);
            echo ":</span>
      <ul>
      ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "extent", []));
            foreach ($context['_seq'] as $context["_key"] => $context["extent"]) {
                // line 228
                echo "        <li>
          <span class=\"metaText\">
            ";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["extent"], "name", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["extent"], "default", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["extent"], "multipleValues", []), "html", null, true);
                echo "
            ";
                // line 232
                echo "          <span>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "      </ul>
  </li>
  ";
        }
        // line 238
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "dataUrl", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "dataUrl", [])) > 0))) {
            // line 239
            echo "    <li>
      <span class=\"labelText\">";
            // line 240
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.dataurl"), "html", null, true);
            echo ":</span>
      <ul>
      ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "dataUrl", []));
            foreach ($context['_seq'] as $context["_key"] => $context["dataUrl"]) {
                // line 243
                echo "        <li>
          <span class=\"metaText\">
            ";
                // line 245
                echo twig_escape_filter($this->env, $this->getAttribute($context["dataUrl"], "format", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dataUrl"], "href", []), "html", null, true);
                echo "
          <span>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataUrl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "      </ul>
    </li>
  ";
        }
        // line 252
        echo "  ";
        if (($this->getAttribute(($context["layer"] ?? null), "featureListUrl", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "featureListUrl", [])) > 0))) {
            // line 253
            echo "    <li>
      <span class=\"labelText\">";
            // line 254
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.layer.label.featurelisturl"), "html", null, true);
            echo ":</span>
        <ul>
        ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "featureListUrl", []));
            foreach ($context['_seq'] as $context["_key"] => $context["featureUrl"]) {
                // line 257
                echo "          <li>
            <span class=\"metaText\">
              ";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($context["featureUrl"], "format", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["featureUrl"], "href", []), "html", null, true);
                echo "
            <span>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featureUrl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "        </ul>
    </li>
  ";
        }
        // line 266
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "sublayer", [])) > 0)) {
            // line 267
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["layer"] ?? null), "sublayer", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["sublayer"]) {
                // line 268
                echo "      <li>
        ";
                // line 269
                $this->loadTemplate("MapbenderWmsBundle:Repository:layer.html.twig", "MapbenderWmsBundle:Repository:layer.html.twig", 269)->display(twig_array_merge($context, ["layer" => $context["sublayer"], "itemLevel" => (($context["itemLevel"] ?? null) + 1)]));
                // line 270
                echo "      </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sublayer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "  ";
        }
        // line 273
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "MapbenderWmsBundle:Repository:layer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  906 => 273,  903 => 272,  888 => 270,  886 => 269,  883 => 268,  865 => 267,  862 => 266,  857 => 263,  845 => 259,  841 => 257,  837 => 256,  832 => 254,  829 => 253,  826 => 252,  821 => 249,  809 => 245,  805 => 243,  801 => 242,  796 => 240,  793 => 239,  790 => 238,  785 => 235,  777 => 232,  769 => 230,  765 => 228,  761 => 227,  756 => 225,  753 => 224,  750 => 223,  745 => 220,  733 => 216,  725 => 215,  717 => 214,  713 => 212,  709 => 211,  704 => 209,  701 => 208,  698 => 207,  693 => 204,  679 => 200,  675 => 198,  671 => 197,  666 => 195,  663 => 194,  660 => 193,  655 => 190,  648 => 188,  640 => 186,  638 => 185,  632 => 184,  628 => 182,  624 => 181,  619 => 179,  616 => 178,  613 => 177,  608 => 174,  602 => 173,  594 => 171,  591 => 170,  582 => 166,  576 => 165,  572 => 164,  568 => 162,  565 => 161,  561 => 160,  556 => 158,  553 => 157,  550 => 156,  539 => 150,  533 => 149,  529 => 148,  520 => 144,  512 => 141,  506 => 138,  503 => 137,  500 => 136,  495 => 133,  489 => 132,  481 => 131,  476 => 129,  473 => 128,  470 => 127,  464 => 123,  458 => 122,  450 => 121,  445 => 119,  442 => 118,  439 => 117,  435 => 115,  420 => 113,  412 => 111,  410 => 110,  406 => 109,  400 => 105,  392 => 104,  390 => 103,  385 => 101,  381 => 99,  374 => 97,  367 => 96,  365 => 95,  361 => 94,  354 => 92,  348 => 91,  341 => 90,  336 => 89,  319 => 88,  315 => 87,  312 => 86,  309 => 85,  304 => 82,  284 => 80,  267 => 79,  262 => 77,  259 => 76,  256 => 75,  251 => 72,  234 => 69,  231 => 68,  227 => 67,  222 => 65,  219 => 64,  216 => 63,  202 => 60,  198 => 59,  195 => 58,  192 => 57,  186 => 54,  182 => 53,  179 => 52,  176 => 51,  170 => 48,  166 => 47,  163 => 46,  160 => 45,  154 => 42,  150 => 41,  147 => 40,  144 => 39,  138 => 36,  134 => 35,  131 => 34,  128 => 33,  122 => 30,  118 => 29,  115 => 28,  112 => 27,  106 => 24,  102 => 23,  99 => 22,  96 => 21,  90 => 18,  86 => 17,  83 => 16,  80 => 15,  74 => 12,  70 => 11,  67 => 10,  64 => 9,  58 => 6,  54 => 5,  51 => 4,  49 => 3,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderWmsBundle:Repository:layer.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Repository/layer.html.twig");
    }
}
