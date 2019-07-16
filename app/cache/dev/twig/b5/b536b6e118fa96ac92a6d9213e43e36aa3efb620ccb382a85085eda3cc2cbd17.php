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

/* MapbenderCoreBundle::index.html.twig */
class __TwigTemplate_c88e02688541d74624c1821c62f96dc0868d38aef83b4a5ec589185eaad76d7b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'mobilejs' => [$this, 'block_mobilejs'],
            'favicon' => [$this, 'block_favicon'],
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
            'trans' => [$this, 'block_trans'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Mapbender 3\" />
    ";
        // line 8
        $this->displayBlock('mobilejs', $context, $blocks);
        // line 19
        echo "    ";
        // line 20
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/cookieconsent/build/cookieconsent.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        $this->displayBlock('favicon', $context, $blocks);
        echo "\" />
    ";
        // line 22
        $this->displayBlock('css', $context, $blocks);
        // line 23
        echo "</head>
<body class=\"";
        // line 24
        if ($this->getAttribute(($context["app"] ?? null), "debug", [])) {
            echo "debug";
        }
        echo "\">
";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/joii/dist/joii.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 29
        $this->loadTemplate("MapbenderCoreBundle::cookieconsent.html.twig", "MapbenderCoreBundle::index.html.twig", 29)->display($context);
        // line 30
        $this->displayBlock('trans', $context, $blocks);
        // line 31
        $this->displayBlock('js', $context, $blocks);
        // line 32
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
    }

    // line 8
    public function block_mobilejs($context, array $blocks = [])
    {
        // line 9
        echo "    <script language=\"JavaScript\">
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
        && !(/Firefox/i.test(navigator.userAgent))
        ) {
            var scaleFactor = ";
        // line 13
        echo twig_escape_filter($this->env, (((isset($context["scaleFactor"]) || array_key_exists("scaleFactor", $context))) ? (_twig_default_filter(($context["scaleFactor"] ?? null), "0.7")) : ("0.7")), "html", null, true);
        echo ";
            var density = \"";
        // line 14
        echo twig_escape_filter($this->env, (((isset($context["density"]) || array_key_exists("density", $context))) ? (_twig_default_filter(($context["density"] ?? null), "240dpi")) : ("240dpi")), "html", null, true);
        echo "\";
            document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale='+scaleFactor+'; maximum-scale='+scaleFactor+'; minimum-scale='+scaleFactor+' user-scalable=no;target-densityDpi='+density+'\"/>');
        }
    </script>
    ";
    }

    // line 21
    public function block_favicon($context, array $blocks = [])
    {
    }

    // line 22
    public function block_css($context, array $blocks = [])
    {
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
    }

    // line 30
    public function block_trans($context, array $blocks = [])
    {
    }

    // line 31
    public function block_js($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 31,  144 => 30,  139 => 25,  134 => 22,  129 => 21,  120 => 14,  116 => 13,  110 => 9,  107 => 8,  102 => 6,  97 => 32,  95 => 31,  93 => 30,  91 => 29,  87 => 28,  83 => 27,  78 => 26,  76 => 25,  70 => 24,  67 => 23,  65 => 22,  61 => 21,  56 => 20,  54 => 19,  52 => 8,  47 => 6,  40 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle::index.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/index.html.twig");
    }
}
