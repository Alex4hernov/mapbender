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

/* MapbenderMobileBundle:Template:mobile.html.twig */
class __TwigTemplate_61048270f58744e44ca7013cbdcf48964fd58a1da06e232adc48defe7502a42a extends \Twig\Template
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
            'mobilejs' => [$this, 'block_mobilejs'],
            'frontend_content' => [$this, 'block_frontend_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "MapbenderCoreBundle::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["scaleFactor"] = 1;
        // line 2
        $this->parent = $this->loadTemplate("MapbenderCoreBundle::frontend.html.twig", "MapbenderMobileBundle:Template:mobile.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fom"] ?? null), "server_name", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? null), "title", []), "html", null, true);
    }

    // line 6
    public function block_favicon($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        // line 9
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "type" => "css"]), "html", null, true);
        echo "\"/>
";
    }

    // line 12
    public function block_trans($context, array $blocks = [])
    {
        // line 13
        echo "  ";
        $this->displayParentBlock("trans", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "type" => "trans"]), "html", null, true);
        echo "\"></script>
";
    }

    // line 17
    public function block_js($context, array $blocks = [])
    {
        // line 18
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "type" => "js"]), "html", null, true);
        echo "\"></script>
";
    }

    // line 22
    public function block_mobilejs($context, array $blocks = [])
    {
        // line 23
        echo "    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" />
    <script language=\"JavaScript\">
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var scaleFactor = ";
        // line 27
        echo twig_escape_filter($this->env, (((isset($context["scaleFactor"]) || array_key_exists("scaleFactor", $context))) ? (_twig_default_filter(($context["scaleFactor"] ?? null), "0.7")) : ("0.7")), "html", null, true);
        echo ";
            var density = \"";
        // line 28
        echo twig_escape_filter($this->env, (((isset($context["density"]) || array_key_exists("density", $context))) ? (_twig_default_filter(($context["density"] ?? null), "240dpi")) : ("240dpi")), "html", null, true);
        echo "\";
            document.write('<meta name=\"viewport\" content=\"width=device-width, minimal-ui, initial-scale=' + scaleFactor + ', maximum-scale=' + scaleFactor + ', minimum-scale=' + scaleFactor + ', user-scalable=no, ' +
//                    'target-densityDpi=' + density +
                           '\"/>');
        }
    </script>
";
    }

    // line 36
    public function block_frontend_content($context, array $blocks = [])
    {
        // line 37
        echo "  <div id=\"templateWrapper\" class=\"templateWrapper\">
      <div id=\"splash-screen\" class=\"splashScreenWrapper\" data-state=\"active\">
        <div class=\"splashScreen\">
          <img class=\"app-screenshot\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_dir"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["application"] ?? null), "entity", []), "screenshot", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? null), "title", []), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? null), "description", []), "html", null, true);
        echo "\">
          <p class=\"app-title\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? null), "description", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? null), "title", []), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div id=\"content\" class=\"contentPane\">
        ";
        // line 46
        $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderMobileBundle:Template:mobile.html.twig", 46)->display(twig_array_merge($context, ["application" => ($context["application"] ?? null), "region" => "content"]));
        // line 47
        echo "      </div>

      <ul id=\"footer\" class=\"toolBar itemsCenter bottom\">
        ";
        // line 50
        if ($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", [], "any", false, true), "footer", [], "any", true, true)) {
            // line 51
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", []), "footer", []));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 52
                echo "          <li class=\"toolBarItem\">";
                echo $this->getAttribute($context["element"], "render", [], "method");
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        // line 55
        echo "      </ul>

      <div id=\"mobilePane\" class=\"mobilePane\" data-state=\"\">
          <i id=\"mobilePaneClose\" class=\"mobileClose\"></i>
          <h2 class=\"contentTitle\">Feature info</h2>
          <div class=\"mobileContent\">
          ";
        // line 61
        $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderMobileBundle:Template:mobile.html.twig", 61)->display(twig_array_merge($context, ["application" => ($context["application"] ?? null), "region" => "mobilePane"]));
        // line 62
        echo "          </div>
      </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderMobileBundle:Template:mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 62,  184 => 61,  176 => 55,  173 => 54,  164 => 52,  159 => 51,  157 => 50,  152 => 47,  150 => 46,  140 => 41,  132 => 40,  127 => 37,  124 => 36,  113 => 28,  109 => 27,  103 => 23,  100 => 22,  94 => 19,  89 => 18,  86 => 17,  80 => 14,  75 => 13,  72 => 12,  65 => 9,  62 => 8,  56 => 6,  48 => 4,  43 => 2,  41 => 1,  35 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderMobileBundle:Template:mobile.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/MobileBundle/Resources/views/Template/mobile.html.twig");
    }
}
