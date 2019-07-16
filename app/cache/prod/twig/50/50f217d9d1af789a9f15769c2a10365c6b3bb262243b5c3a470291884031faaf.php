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

/* MapbenderWmsBundle:Repository:instance-layer-form.html.twig */
class __TwigTemplate_f3620de4b23959e059c099f1615c68a12fdae0afa1472328c2e51defcfdece77 extends \Twig\Template
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
        if (($this->getAttribute(($context["layer"] ?? null), "parent", []) == null)) {
            // line 2
            echo "    ";
            $context["type"] = "root";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 3
($context["layer"] ?? null), "sublayer", [])) > 0)) {
            // line 4
            echo "    ";
            $context["type"] = "node";
        } else {
            // line 6
            echo "    ";
            $context["type"] = "item";
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form_layers"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["form_layer"]) {
            // line 10
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["form_layer"], "vars", []), "value", []), "id", []) == $this->getAttribute(($context["layer"] ?? null), "id", []))) {
                // line 11
                echo "        <tr id=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "id", []), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo " level";
                echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["form_layer"], "vars", []), "value", []), "id", []), "html", null, true);
                echo "\"";
                if (($this->getAttribute(($context["layer"] ?? null), "parent", []) != null)) {
                    echo " data-parent=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "parent", []), "id", []), "html", null, true);
                    echo "\"";
                }
                echo " data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\"
            data-href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_instancelayerweight", ["slug" => ($context["slug"] ?? null), "instanceId" => $this->getAttribute(($context["instance"] ?? null), "id", []), "instLayerId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["form_layer"], "vars", []), "value", []), "id", [])]), "html", null, true);
                echo "\">
            <td class=\"level";
                // line 13
                echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
                echo " itemType ";
                if (((($context["type"] ?? null) == "node") || (($context["type"] ?? null) == "root"))) {
                    echo "iconFolderActive";
                } else {
                    echo "iconLinkButton";
                }
                echo " hover-highlight-effect\"></td>
            <td class=\"titleColumn\" title=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.layerstitle"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "title", []), 'widget');
                echo "</td>

            <td class=\"minScaleColumn\" title=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.minscale"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "minScale", []), 'widget', ["attr" => ["placeholder" => $this->getAttribute($this->getAttribute($this->getAttribute($context["form_layer"], "vars", []), "value", []), "getInheritedMinScale", [], "method")]]);
                echo "</td>
            <td class=\"maxScaleColumn\" title=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.maxsclase"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "maxScale", []), 'widget', ["attr" => ["placeholder" => $this->getAttribute($this->getAttribute($this->getAttribute($context["form_layer"], "vars", []), "value", []), "getInheritedMaxScale", [], "method")]]);
                echo "</td>

            <td class=\"checkboxColumn\" data-check-identifier=\"checkActive\" title=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.active"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "active", []), 'widget');
                echo "</td>
            <td class=\"checkboxColumn odd\" data-check-identifier=\"checkSelectAllow\" title=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.allowselecttoc"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "allowselected", []), 'widget');
                echo "</td>
            <td class=\"checkboxColumn odd\" data-check-identifier=\"checkSelectOn\" title=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.selectedtoc"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "selected", []), 'widget');
                echo "</td>
            <td class=\"checkboxColumn\" data-check-identifier=\"checkInfoAllow\" title=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.allowinfotoc"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "allowinfo", []), 'widget');
                echo "</td>
            <td class=\"checkboxColumn\" data-check-identifier=\"checkInfoOn\" title=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.infotoc"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "info", []), 'widget');
                echo "</td>
            <td class=\"checkboxColumn odd\" data-check-identifier=\"checkToggleAllow\" title=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.allowtoggletoc"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "allowtoggle", []), 'widget');
                echo "</td>
            <td class=\"checkboxColumn odd\" data-check-identifier=\"checkToggleOn\" title=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.toggletoc"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "toggle", []), 'widget');
                echo "</td>
            <td class=\"checkboxColumn\" data-check-identifier=\"checkRecorderAllow\" title=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.allowreordertoc"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "allowreorder", []), 'widget');
                echo "</td>
            <td class=\"moreColumn\">
              <span class=\"iconMore\" title=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.moreinfo"), "html", null, true);
                echo "\">
                <div class=\"infoMsgBox hide\">
                  <span class=\"hide layer-priority\">";
                // line 30
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "priority", []), 'widget');
                echo "</span>
                  <span class=\"labelText\">";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.id.title"), "html", null, true);
                echo "</span> <span class=\"smallText\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.id.description"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["layer"] ?? null), "sourceInstance", []), "source", []), "id", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "sourceItem", []), "id", []), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["layer"] ?? null), "sourceInstance", []), "id", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "id", []), "html", null, true);
                echo "</span><br>
                  <span class=\"labelText\">";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.layersname"), "html", null, true);
                echo "</span><span class=\"smallText\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["form_layer"], "vars", []), "data", []), "sourceItem", []), "name", []), "html", null, true);
                echo "</span>
                  <br>
                  <span class=\"labelText\">";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instancelayerform.label.style"), "html", null, true);
                echo "</span>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["form_layer"], "style", []), 'widget');
                echo "
                </div>
              </span>
            </td>

            ";
                // line 39
                if ((twig_length_filter($this->env, $this->getAttribute(($context["layer"] ?? null), "sublayer", [])) > 0)) {
                    // line 40
                    echo "                ";
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
                        // line 41
                        echo "                    ";
                        $this->loadTemplate("MapbenderWmsBundle:Repository:instance-layer-form.html.twig", "MapbenderWmsBundle:Repository:instance-layer-form.html.twig", 41)->display(twig_array_merge($context, ["form_layers" => ($context["form_layers"] ?? null), "layer" => $context["sublayer"], "level" => (($context["level"] ?? null) + 1)]));
                        // line 42
                        echo "                ";
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
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        </tr>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_layer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MapbenderWmsBundle:Repository:instance-layer-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 44,  248 => 43,  234 => 42,  231 => 41,  213 => 40,  211 => 39,  201 => 34,  194 => 32,  180 => 31,  176 => 30,  171 => 28,  164 => 26,  158 => 25,  152 => 24,  146 => 23,  140 => 22,  134 => 21,  128 => 20,  122 => 19,  115 => 17,  109 => 16,  102 => 14,  92 => 13,  88 => 12,  68 => 11,  65 => 10,  48 => 9,  45 => 8,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderWmsBundle:Repository:instance-layer-form.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Repository/instance-layer-form.html.twig");
    }
}
