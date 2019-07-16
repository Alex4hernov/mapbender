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

/* MapbenderCoreBundle:Login:box.html.twig */
class __TwigTemplate_fe5821f666c513e6d62f910c2957a3833c87cf9b0c48fb93d61a4068d8c8c8ad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'favicon' => [$this, 'block_favicon'],
            'css' => [$this, 'block_css'],
            'trans' => [$this, 'block_trans'],
            'js' => [$this, 'block_js'],
            'content' => [$this, 'block_content'],
            'box_content' => [$this, 'block_box_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["application"] = ["slug" => "manager"];
        // line 2
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "html", null, true);
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"description\" content=\"Mapbender 3\">
  <script language=\"JavaScript\">
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;target-densityDpi=240dpi\"/>');
    }
  </script>
  ";
        // line 15
        echo "  <link rel=\"shortcut icon\" href=\"";
        $this->displayBlock('favicon', $context, $blocks);
        echo "\"/>

  ";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 22
        echo "
  ";
        // line 23
        $this->displayBlock('trans', $context, $blocks);
        // line 31
        echo "
  ";
        // line 32
        $this->displayBlock('js', $context, $blocks);
        // line 38
        echo "</head>
<body class=\"";
        // line 39
        if ($this->getAttribute(($context["app"] ?? null), "debug", [])) {
            echo "debug";
        }
        echo "\">
";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
    }

    // line 15
    public function block_favicon($context, array $blocks = [])
    {
    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        // line 18
        echo "    <link rel=\"stylesheet\"
          href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "mb3-login", "type" => "css"]), "html", null, true);
        echo "\"/>

  ";
    }

    // line 23
    public function block_trans($context, array $blocks = [])
    {
        // line 24
        echo "    <script type=\"text/javascript\"
            src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "type" => "trans"]), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      var Mapbender = Mapbender || {};
      Mapbender.configuration = {elements: {}};
    </script>
  ";
    }

    // line 32
    public function block_js($context, array $blocks = [])
    {
        // line 33
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? null), "slug", []), "type" => "js"]), "html", null, true);
        echo "\"></script>
  ";
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        // line 41
        echo "  <div class=\"authWrapper\">
    <div class=\"head\">
      <hr class=\"dekoSeperator\">
    </div>
    <div class=\"login-wrapper\">
      <div class=\"logoContainer\">
        <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_welcome_list");
        echo "\"><img class=\"logo\" alt=\"Mapbender 3\"
                                                                 src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["fom"] ?? null), "server_logo", [])), "html", null, true);
        echo "\"/></a>
      </div>
      ";
        // line 50
        $this->displayBlock('box_content', $context, $blocks);
        // line 51
        echo "      ";
        $context["sitelinks"] = $this->env->getExtension('Mapbender\CoreBundle\Extension\SitelinksExtension')->get_sitelinks();
        // line 52
        echo "      ";
        if (($context["sitelinks"] ?? null)) {
            // line 53
            echo "      <ul class=\"sitelinks\">
        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sitelinks"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["sitelink"]) {
                // line 55
                echo "          <li>";
                echo (($this->getAttribute($context["loop"], "first", [])) ? ("") : ("| "));
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["sitelink"], "link", [])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["sitelink"], "text", [])), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitelink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      </ul>
      ";
        }
        // line 59
        echo "    </div>
  </div>
";
    }

    // line 50
    public function block_box_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Login:box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 50,  224 => 59,  220 => 57,  199 => 55,  182 => 54,  179 => 53,  176 => 52,  173 => 51,  171 => 50,  166 => 48,  162 => 47,  154 => 41,  151 => 40,  145 => 36,  140 => 34,  135 => 33,  132 => 32,  122 => 25,  119 => 24,  116 => 23,  109 => 19,  106 => 18,  103 => 17,  98 => 15,  93 => 7,  88 => 62,  86 => 40,  80 => 39,  77 => 38,  75 => 32,  72 => 31,  70 => 23,  67 => 22,  65 => 17,  59 => 15,  49 => 7,  42 => 3,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Login:box.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Login/box.html.twig");
    }
}
