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

/* @MapbenderWms/Repository/instance.html.twig */
class __TwigTemplate_5531e47cf01fb19e692ae60e101981deee01ec1e366040e1d9e98a19290293d3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
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
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderWms/Repository/instance.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.title.wmsinstance"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["instance"] ?? null), "source", []), "id", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["instance"] ?? null), "id", []), "html", null, true);
        echo ") - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["instance"] ?? null), "source", []), "title", []), "html", null, true);
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-ui/themes/base/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/javascript\" />
  ";
        // line 7
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_js($context, array $blocks = [])
    {
        // line 11
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/joii/dist/joii.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbenderwms/mapbender.wms.dimension.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 13
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/repository.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbenderwms/backend/instance-dimension.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 18
    public function block_manager_content($context, array $blocks = [])
    {
        // line 19
        echo "<div class=\"instanceContainer\">
  <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_wms_repository_instance", ["slug" => ($context["slug"] ?? null), "instanceId" => $this->getAttribute(($context["instance"] ?? null), "id", [])]), "html", null, true);
        echo "\" method=\"post\" novalidate=\"novalidate\" class=\"clear\">

    <div class=\"right\">
      <input class=\"button\" type=\"submit\" name=\"save\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.btn.save"), "html", null, true);
        echo "\" />
      <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_edit", ["slug" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "slug"], "method")]), "html", null, true);
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.btn.cancel"), "html", null, true);
        echo "</a>
    </div>

    <span class=\"labelInput\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.originurl"), "html", null, true);
        echo "</span>
    <a class=\"linkButton\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["instance"] ?? null), "source", []), "originUrl", []), "html", null, true);
        echo "\" target=\"_BLANK\" title='";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["instance"] ?? null), "source", []), "originUrl", []), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["instance"] ?? null), "source", []), "originUrl", []), 0, 35), "html", null, true);
        echo "...</a>
    <div class=\"clear\"></div>

    <div class=\"row\">
      <div class=\"leftContainer col-md-6 col-xs-12\">
        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'row');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "format", []), 'row');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "infoformat", []), 'row');
        echo "
        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "exceptionformat", []), 'row');
        echo "
        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "opacity", []), 'row');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "buffer", []), 'row');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ratio", []), 'row');
        echo "
      </div>
      <div class=\"col-md-6 col-xs-12\">
        <div class=\"extendedGroup\">
            ";
        // line 43
        if (( !(null === $this->getAttribute(($context["form"] ?? null), "dimensions", [])) && (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "dimensions", [])) > 0))) {
            // line 44
            echo "              <div class=\"blockgroup\">
                <!-- todo: the header should be part of the \"dimensions\" input widget -->
                <div id=\"dimension\" class=\"on-off on-off-title\">";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.repo.instance.label.dimensions"), "html", null, true);
            echo "</div>
                <div id=\"dimension-content\" class=\"on-off-content hidden\">
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "dimensions", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dim"]) {
                // line 49
                echo "                        ";
                $this->loadTemplate("MapbenderWmsBundle:Repository:dimension-form.html.twig", "@MapbenderWms/Repository/instance.html.twig", 49)->display(twig_array_merge($context, ["dim" => $context["dim"], "num" => $this->getAttribute($context["loop"], "index", [])]));
                // line 50
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dim'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </div>
              </div>
            ";
        }
        // line 54
        echo "          <div class=\"blockgroup\">
            <!-- todo: the header should be part of the \"vendorspecifics\" input widget -->
            <div id=\"vendorspecific\" class=\"on-off on-off-title\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.vendorspecific.label"), "html", null, true);
        echo "</div>
            <div id=\"vendorspecific-content\" class=\"vendorspecific-content on-off-content hidden\">
                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "vendorspecifics", []), 'widget');
        echo "
            </div>
          </div>
        </div>
        <div class=\"checkboxGroup\">
        <div>
        ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "visible", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "visible", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.visible"), "html", null, true);
        echo "</label>
        </div>
        <div>
        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "basesource", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "basesource", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.basesource"), "html", null, true);
        echo "</label>
        </div>
        <div>
        ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "proxy", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "proxy", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.proxy"), "html", null, true);
        echo "</label>
        </div>
        <div>
        ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "transparency", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "transparency", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.transparency"), "html", null, true);
        echo "</label>
        </div>
        <div>
        ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tiled", []), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "tiled", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.tiled"), "html", null, true);
        echo "</label>
        </div>
        ";
        // line 78
        if ($this->getAttribute(($context["form"] ?? null), "layerOrder", [], "any", true, true)) {
            // line 79
            echo "        <div>
          ";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "layerOrder", []), 'label', ["label" => "mb.wms.wmsloader.repo.instance.label.layerOrder"]);
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "layerOrder", []), 'widget');
            echo "
        </div>
        ";
        }
        // line 83
        echo "      </div>
      <div class=\"clear\"></div>
      </div>
    </div>
    ";
        // line 87
        $context["root"] = $this->getAttribute($this->getAttribute(($context["instance"] ?? null), "source", []), "getRootlayer", [], "method");
        // line 88
        echo "    <table id=\"instanceTable\" class=\"table instanceTable\">
      <thead>
        <tr>
          <th></th>
          <th>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.title"), "html", null, true);
        echo "</th>
          <th>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.minsc"), "html", null, true);
        echo "</th>
          <th>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.maxsc"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.active"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn odd\" colspan=\"2\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.select"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn\" colspan=\"2\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.info"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn odd\" colspan=\"2\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.toggle"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.reorder"), "html", null, true);
        echo "</th>
          <th></th>
        </tr>
        <tr>
          <th colspan=\"5\"></th>
          <th class=\"checkboxColumn smallText odd\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.allow"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn smallText odd\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.on"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn smallText\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.allow"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn smallText\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.on"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn smallText odd\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.allow"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn smallText odd\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.on"), "html", null, true);
        echo "</th>
          <th class=\"checkboxColumn smallText\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.allow"), "html", null, true);
        echo "</th>
          <th></th>
        </tr>
        <tr id=\"instanceTableCheckHead\">
          <th colspan=\"4\"></th>
          <th class=\"checkboxColumn\"><span id=\"checkActive\" class=\"iconCheckbox\"></span></th>
          <th class=\"checkboxColumn odd\"><span id=\"checkSelectAllow\" class=\"iconCheckbox\"></span></th>
          <th class=\"checkboxColumn odd\"><span id=\"checkSelectOn\" class=\"iconCheckbox\"></span></th>
          <th class=\"checkboxColumn\"><span id=\"checkInfoAllow\" class=\"iconCheckbox\"></span></th>
          <th class=\"checkboxColumn\"><span id=\"checkInfoOn\" class=\"iconCheckbox\"></span></th>
          <th class=\"checkboxColumn odd\"><span id=\"checkToggleAllow\" class=\"iconCheckbox\"></span></th>
          <th class=\"checkboxColumn odd\"><span id=\"checkToggleOn\" class=\"iconCheckbox\"></span></th>
          <th class=\"checkboxColumn\"><span id=\"checkRecorderAllow\" class=\"iconCheckbox\"></span></th>
          <th></th>
        </tr>
      </thead>
      <tbody id=\"instanceTableCheckBody\">
        ";
        // line 127
        $this->loadTemplate("MapbenderWmsBundle:Repository:instance-layer-form.html.twig", "@MapbenderWms/Repository/instance.html.twig", 127)->display(twig_array_merge($context, ["form_layers" => $this->getAttribute(($context["form"] ?? null), "layers", []), "layer" => $this->getAttribute(($context["instance"] ?? null), "getrootlayer", []), "level" => 0]));
        // line 128
        echo "        <tr class=\"dummy\">
          <td colspan=\"20\"></td>
        </tr>
      </tbody>
    </table>

    <div class=\"clearContainer\"></div>

    <div class=\"right\">
      <input class=\"button\" type=\"submit\" name=\"save\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.save2"), "html", null, true);
        echo "\" />
      <a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_edit", ["slug" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "slug"], "method")]), "html", null, true);
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.instance.label.cancel2"), "html", null, true);
        echo "</a>
    </div>

    <div class=\"clearContainer\"></div>

    ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", []), 'row');
        echo "
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@MapbenderWms/Repository/instance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 143,  405 => 138,  401 => 137,  390 => 128,  388 => 127,  368 => 110,  364 => 109,  360 => 108,  356 => 107,  352 => 106,  348 => 105,  344 => 104,  336 => 99,  332 => 98,  328 => 97,  324 => 96,  320 => 95,  316 => 94,  312 => 93,  308 => 92,  302 => 88,  300 => 87,  294 => 83,  287 => 80,  284 => 79,  282 => 78,  273 => 76,  263 => 73,  253 => 70,  243 => 67,  233 => 64,  224 => 58,  219 => 56,  215 => 54,  210 => 51,  196 => 50,  193 => 49,  176 => 48,  171 => 46,  167 => 44,  165 => 43,  158 => 39,  154 => 38,  150 => 37,  146 => 36,  142 => 35,  138 => 34,  134 => 33,  122 => 28,  118 => 27,  110 => 24,  106 => 23,  100 => 20,  97 => 19,  94 => 18,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  71 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderWms/Repository/instance.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Repository/instance.html.twig");
    }
}
