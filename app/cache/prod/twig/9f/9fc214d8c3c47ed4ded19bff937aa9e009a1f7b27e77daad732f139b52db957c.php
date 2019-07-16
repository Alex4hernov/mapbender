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

/* @MapbenderWms/Repository/view.html.twig */
class __TwigTemplate_d19e4b60fe0dc83c8f15258dae3ae50db4ce17a3ffa6e646ef3fc96d4cadab43 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'manager_content' => [$this, 'block_manager_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["__internal_2d699fe68a525a66e322d565379bd50307f1759b7d8b572d5a3196bfd128b0db"] = $this->loadTemplate("MapbenderWmsBundle:Repository:macros.html.twig", "@MapbenderWms/Repository/view.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderWms/Repository/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "type", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "title", []), "html", null, true);
    }

    // line 6
    public function block_css($context, array $blocks = [])
    {
        // line 7
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_manager_content($context, array $blocks = [])
    {
        // line 11
        echo "
<a class=\"button right\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.backtoservicelist"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_index");
        echo "\">Back</a>

<div id=\"serviceTabContainer\" class=\"tabContainer\">
  <ul class=\"tabs\">
    <li id=\"tabMetaData\" class=\"tab active\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.metadata"), "html", null, true);
        echo "</li>
    <li id=\"tabContact\" class=\"tab\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.contact"), "html", null, true);
        echo "</li>
    <li id=\"tabService\" class=\"tab\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.details"), "html", null, true);
        echo "</li>
    <li id=\"tabLayers\" class=\"tab\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.layers"), "html", null, true);
        echo "</li>
  </ul>
  <div id=\"containerMetaData\" class=\"container active serviceContainer serviceMetaContainer\">
    <div class=\"labelText\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.title"), "html", null, true);
        echo ":</div><div class=\"metaText\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "title", []), "html", null, true);
        echo "</div>
    <div class=\"clearContainer\"></div>
    <div class=\"labelText\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.name"), "html", null, true);
        echo ":</div><div class=\"metaText\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "name", []), "html", null, true);
        echo "</div>
    <div class=\"clearContainer\"></div>
    <div class=\"labelText\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.version"), "html", null, true);
        echo ":</div><div class=\"metaText\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "version", []), "html", null, true);
        echo "</div>
    <div class=\"clearContainer\"></div>
    <div class=\"labelText\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.originurl"), "html", null, true);
        echo ":</div><div class=\"metaText metaUrl\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "originUrl", []), "html", null, true);
        echo "</div>
    <div class=\"clearContainer\"></div>
    <div class=\"labelText\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.abstract"), "html", null, true);
        echo ":</div><div class=\"metaText\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "description", []), "html", null, true);
        echo "</div>
    <div class=\"clearContainer\"></div>
    <div class=\"labelText\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.onlineresource"), "html", null, true);
        echo ":</div><div class=\"metaText\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "onlineResource", []), "html", null, true);
        echo "</div>
    <div class=\"clearContainer\"></div>
    <div class=\"labelText\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.exceptionformats"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["wms"] ?? null), "exceptionFormats", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["exc"]) {
            // line 37
            echo "        ";
            if ( !$this->getAttribute($context["loop"], "first", [])) {
                echo ",";
            }
            // line 38
            echo "        ";
            echo twig_escape_filter($this->env, $context["exc"], "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>
    <div class=\"clearContainer\"></div>
    <div class=\"labelText\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.fees"), "html", null, true);
        echo ":</div><div class=\"metaText\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "fees", []), "html", null, true);
        echo "</div>
    <div class=\"clearContainer\"></div>
    <div class=\"labelText\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.accessconstraints"), "html", null, true);
        echo ":</div><div class=\"metaText\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "accessConstraints", []), "html", null, true);
        echo "</div>
    <div class=\"clearContainer\"></div>
  </div>
  <div id=\"containerContact\" class=\"container serviceContainer serviceContactContainer\">
    <div class=\"labelText\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.person"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 49
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "person", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.organization"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 53
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "organization", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.position"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 57
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "position", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.telephone"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 61
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "voiceTelephone", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.facsimile"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 65
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "facsimileTelephone", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.email"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 69
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "electronicMailAddress", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.address"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 73
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "address", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.addresstype"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 77
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "addressType", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.city"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 81
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "addressCity", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.state"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 85
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "addressStateOrProvince", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.postcode"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 89
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "addressPostcode", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>

    <div class=\"labelText\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.country"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 93
        (($this->getAttribute(($context["wms"] ?? null), "contact", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["wms"] ?? null), "contact", []), "addressCountry", []), "html", null, true))) : (print ("")));
        echo "</div>
    <div class=\"clearContainer\"></div>
  </div>
  <div id=\"containerService\" class=\"container serviceContainer serviceServiceContainer\">
    <div class=\"labelText\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.label.version"), "html", null, true);
        echo ":</div>
    <div class=\"metaText\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wms"] ?? null), "version", []), "html", null, true);
        echo "</div>
    <div class=\"clearContainer\"></div>

    ";
        // line 101
        if ( !twig_test_empty($this->getAttribute(($context["wms"] ?? null), "getCapabilities", []))) {
            // line 102
            echo "    ";
            echo $context["__internal_2d699fe68a525a66e322d565379bd50307f1759b7d8b572d5a3196bfd128b0db"]->getrequestinformation($this->getAttribute(($context["wms"] ?? null), "getCapabilities", []), "GetCapabilities");
            echo "
    ";
        }
        // line 104
        echo "
    ";
        // line 105
        if ( !twig_test_empty($this->getAttribute(($context["wms"] ?? null), "getMap", []))) {
            // line 106
            echo "    ";
            echo $context["__internal_2d699fe68a525a66e322d565379bd50307f1759b7d8b572d5a3196bfd128b0db"]->getrequestinformation($this->getAttribute(($context["wms"] ?? null), "getMap", []), "GetMap");
            echo "
    ";
        }
        // line 108
        echo "
    ";
        // line 109
        if ( !twig_test_empty($this->getAttribute(($context["wms"] ?? null), "getFeatureinfo", []))) {
            // line 110
            echo "    ";
            echo $context["__internal_2d699fe68a525a66e322d565379bd50307f1759b7d8b572d5a3196bfd128b0db"]->getrequestinformation($this->getAttribute(($context["wms"] ?? null), "getFeatureinfo", []), "GetFeatureinfo");
            echo "
    ";
        }
        // line 112
        echo "
    ";
        // line 113
        if ( !twig_test_empty($this->getAttribute(($context["wms"] ?? null), "getLegendGraphic", []))) {
            // line 114
            echo "    ";
            echo $context["__internal_2d699fe68a525a66e322d565379bd50307f1759b7d8b572d5a3196bfd128b0db"]->getrequestinformation($this->getAttribute(($context["wms"] ?? null), "getLegendGraphic", []), "GetLegendGraphic");
            echo "
    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if ( !twig_test_empty($this->getAttribute(($context["wms"] ?? null), "describeLayer", []))) {
            // line 118
            echo "    ";
            echo $context["__internal_2d699fe68a525a66e322d565379bd50307f1759b7d8b572d5a3196bfd128b0db"]->getrequestinformation($this->getAttribute(($context["wms"] ?? null), "describeLayer", []), "DescribeLayer");
            echo "
    ";
        }
        // line 120
        echo "
    ";
        // line 121
        if ( !twig_test_empty($this->getAttribute(($context["wms"] ?? null), "getStyles", []))) {
            // line 122
            echo "    ";
            echo $context["__internal_2d699fe68a525a66e322d565379bd50307f1759b7d8b572d5a3196bfd128b0db"]->getrequestinformation($this->getAttribute(($context["wms"] ?? null), "getStyles", []), "GetStyles");
            echo "
    ";
        }
        // line 124
        echo "
    ";
        // line 125
        if ( !twig_test_empty($this->getAttribute(($context["wms"] ?? null), "putStyles", []))) {
            // line 126
            echo "    ";
            echo $context["__internal_2d699fe68a525a66e322d565379bd50307f1759b7d8b572d5a3196bfd128b0db"]->getrequestinformation($this->getAttribute(($context["wms"] ?? null), "putStyles", []), "PutStyles");
            echo "
    ";
        }
        // line 128
        echo "  </div>
  <div id=\"containerLayers\" class=\"container serviceContainer serviceLayersContainer\">
    ";
        // line 130
        if (($this->getAttribute(($context["wms"] ?? null), "version", []) == "1.1.1")) {
            // line 131
            echo "        <div class=\"messageBox hint\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.view.message.cautionscalehint"), "html", null, true);
            echo "</div>
    ";
        }
        // line 133
        echo "      ";
        $this->loadTemplate("MapbenderWmsBundle:Repository:layer.html.twig", "@MapbenderWms/Repository/view.html.twig", 133)->display(twig_array_merge($context, ["layer" => $this->getAttribute(($context["wms"] ?? null), "rootlayer", []), "itemLevel" => 1]));
        // line 134
        echo "  </div>
</div>
<div class=\"clearContainer\"></div>

";
    }

    public function getTemplateName()
    {
        return "@MapbenderWms/Repository/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 134,  418 => 133,  412 => 131,  410 => 130,  406 => 128,  400 => 126,  398 => 125,  395 => 124,  389 => 122,  387 => 121,  384 => 120,  378 => 118,  376 => 117,  373 => 116,  367 => 114,  365 => 113,  362 => 112,  356 => 110,  354 => 109,  351 => 108,  345 => 106,  343 => 105,  340 => 104,  334 => 102,  332 => 101,  326 => 98,  322 => 97,  315 => 93,  311 => 92,  305 => 89,  301 => 88,  295 => 85,  291 => 84,  285 => 81,  281 => 80,  275 => 77,  271 => 76,  265 => 73,  261 => 72,  255 => 69,  251 => 68,  245 => 65,  241 => 64,  235 => 61,  231 => 60,  225 => 57,  221 => 56,  215 => 53,  211 => 52,  205 => 49,  201 => 48,  192 => 44,  185 => 42,  181 => 40,  164 => 38,  159 => 37,  142 => 36,  137 => 34,  130 => 32,  123 => 30,  116 => 28,  109 => 26,  102 => 24,  95 => 22,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  68 => 12,  65 => 11,  62 => 10,  55 => 7,  52 => 6,  44 => 4,  39 => 1,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderWms/Repository/view.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Repository/view.html.twig");
    }
}
