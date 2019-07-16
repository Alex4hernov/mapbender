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

/* MapbenderCoreBundle:Template:fullscreen.html.twig */
class __TwigTemplate_5901b4c7bc654a13dc47ce99b968c9dc63015d15514fa8603ac217b97f3cd6cb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'favicon' => [$this, 'block_favicon'],
            'css' => [$this, 'block_css'],
            'trans' => [$this, 'block_trans'],
            'js' => [$this, 'block_js'],
            'frontend_content' => [$this, 'block_frontend_content'],
            'logo' => [$this, 'block_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderCoreBundle::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("MapbenderCoreBundle::frontend.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fom"] ?? null), "server_name", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? null), "title", []), "html", null, true);
    }

    // line 5
    public function block_favicon($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
    }

    // line 7
    public function block_css($context, array $blocks = [])
    {
        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "type" => "css"]), "html", null, true);
        echo "\"/>
";
    }

    // line 11
    public function block_trans($context, array $blocks = [])
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("trans", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "type" => "trans"]), "html", null, true);
        echo "\"></script>
";
    }

    // line 16
    public function block_js($context, array $blocks = [])
    {
        // line 17
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "type" => "js"]), "html", null, true);
        echo "\"></script>
";
    }

    // line 22
    public function block_frontend_content($context, array $blocks = [])
    {
        // line 23
        echo "  ";
        $context["sidePaneClosed"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), "sidepane", [], "any", false, true), "properties", [], "any", false, true), "closed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), "sidepane", [], "any", false, true), "properties", [], "any", false, true), "closed", []), false)) : (false));
        // line 24
        echo "  <div id=\"templateWrapper\" class=\"templateWrapper ";
        if ((($context["sidePaneClosed"] ?? null) == false)) {
            echo "sidePaneOpened";
        }
        echo "\">
    ";
        // line 25
        if ($this->getAttribute(($context["fom"] ?? null), "server_logo", [], "any", true, true)) {
            // line 26
            echo "      <div class=\"logoContainer\">
        ";
            // line 27
            $this->displayBlock('logo', $context, $blocks);
            // line 30
            echo "      </div>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", [], "any", false, true), "toolbar", [], "any", true, true)) {
            // line 34
            echo "    <ul id=\"toolbar\" class=\"toolBar itemsRight top\">
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["application"] ?? null), "elements", [0 => "toolbar"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 36
                echo "          <li class=\"toolBarItem\">";
                echo $this->getAttribute($context["element"], "render", [], "method");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    </ul>
    ";
        }
        // line 40
        echo "
    ";
        // line 42
        echo "    ";
        $context["name"] = "sidepane";
        // line 43
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", [], "any", false, true), ($context["name"] ?? null), [], "array", true, true)) {
            // line 44
            echo "      ";
            $context["region"] = $this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", []), ($context["name"] ?? null), [], "array");
            // line 45
            echo "      ";
            $context["properties"] = (($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), ($context["name"] ?? null), [], "array", false, true), "properties", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), ($context["name"] ?? null), [], "array", false, true), "properties", []), [])) : ([]));
            // line 46
            echo "      ";
            $context["align"] = (($this->getAttribute(($context["properties"] ?? null), "align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "align", []), "left")) : ("left"));
            // line 47
            echo "      ";
            $context["isRegionClosed"] = (($this->getAttribute(($context["properties"] ?? null), "closed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["properties"] ?? null), "closed", []), "false")) : ("false"));
            // line 48
            echo "
      <div id=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
           data-closed=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["isRegionClosed"] ?? null), "html", null, true);
            echo "\"
           class=\"clear sidePane ";
            // line 51
            echo twig_escape_filter($this->env, ($context["align"] ?? null), "html", null, true);
            echo "\"
        ";
            // line 52
            if ($this->getAttribute(($context["properties"] ?? null), "width", [], "any", true, true)) {
                echo " style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? null), "width", []), "html", null, true);
                echo "\"";
            }
            // line 53
            echo "      >
        <ul class=\"sidePaneTabs\">
          <li class=\"sidePaneTabItem toggleSideBar\"></li>
        </ul>
        <div class=\"sideContent\">
          ";
            // line 58
            $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 58)->display(twig_array_merge($context, ["region_props" => ($context["region_props"] ?? null), "application" => ($context["application"] ?? null), "region" => ($context["name"] ?? null)]));
            // line 59
            echo "        </div>
      </div>
    ";
        }
        // line 62
        echo "
    <div id=\"content\" class=\"contentPane\">
      ";
        // line 64
        $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 64)->display(twig_array_merge($context, ["region_props" => ($context["region_props"] ?? null), "application" => ($context["application"] ?? null), "region" => "content"]));
        // line 65
        echo "    </div>

    ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", [], "any", false, true), "footer", [], "any", true, true)) {
            // line 68
            echo "    <ul id=\"footer\" class=\"toolBar itemsRight bottom\">
        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["application"] ?? null), "elements", [0 => "footer"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 70
                echo "          <li class=\"toolBarItem\">";
                echo $this->getAttribute($context["element"], "render", [], "method");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    </ul>
    ";
        }
        // line 74
        echo "  </div>

";
    }

    // line 27
    public function block_logo($context, array $blocks = [])
    {
        // line 28
        echo "          <img class=\"logo\" height=\"40\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["fom"] ?? null), "server_logo", [])), "html", null, true);
        echo "\"/>
        ";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Template:fullscreen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 28,  240 => 27,  234 => 74,  230 => 72,  221 => 70,  217 => 69,  214 => 68,  212 => 67,  208 => 65,  206 => 64,  202 => 62,  197 => 59,  195 => 58,  188 => 53,  182 => 52,  178 => 51,  174 => 50,  170 => 49,  167 => 48,  164 => 47,  161 => 46,  158 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 40,  142 => 38,  133 => 36,  129 => 35,  126 => 34,  124 => 33,  121 => 32,  117 => 30,  115 => 27,  112 => 26,  110 => 25,  103 => 24,  100 => 23,  97 => 22,  91 => 18,  86 => 17,  83 => 16,  77 => 13,  72 => 12,  69 => 11,  62 => 8,  59 => 7,  53 => 5,  45 => 3,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Template:fullscreen.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Template/fullscreen.html.twig");
    }
}
