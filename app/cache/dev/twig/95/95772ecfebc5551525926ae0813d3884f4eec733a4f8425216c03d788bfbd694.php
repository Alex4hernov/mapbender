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
class __TwigTemplate_ec65bf96449ded601e085757cdeba9a5a593e600f615d4f39744f0d64b76d185 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle::index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "html", null, true);
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
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", [])) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_mobilejs($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mobilejs"));

        // line 9
        echo "    <script language=\"JavaScript\">
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
        && !(/Firefox/i.test(navigator.userAgent))
        ) {
            var scaleFactor = ";
        // line 13
        echo twig_escape_filter($this->env, (((isset($context["scaleFactor"]) || array_key_exists("scaleFactor", $context))) ? (_twig_default_filter(($context["scaleFactor"] ?? $this->getContext($context, "scaleFactor")), "0.7")) : ("0.7")), "html", null, true);
        echo ";
            var density = \"";
        // line 14
        echo twig_escape_filter($this->env, (((isset($context["density"]) || array_key_exists("density", $context))) ? (_twig_default_filter(($context["density"] ?? $this->getContext($context, "density")), "240dpi")) : ("240dpi")), "html", null, true);
        echo "\";
            document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale='+scaleFactor+'; maximum-scale='+scaleFactor+'; minimum-scale='+scaleFactor+' user-scalable=no;target-densityDpi='+density+'\"/>');
        }
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_favicon($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicon"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_trans($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trans"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  191 => 31,  180 => 30,  169 => 25,  158 => 22,  147 => 21,  135 => 14,  131 => 13,  125 => 9,  119 => 8,  108 => 6,  100 => 32,  98 => 31,  96 => 30,  94 => 29,  90 => 28,  86 => 27,  81 => 26,  79 => 25,  73 => 24,  70 => 23,  68 => 22,  64 => 21,  59 => 20,  57 => 19,  55 => 8,  50 => 6,  43 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"{{ app.request.locale }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>{% block title %}{% endblock %}</title>
    <meta name=\"description\" content=\"Mapbender 3\" />
    {% block mobilejs %}
    <script language=\"JavaScript\">
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
        && !(/Firefox/i.test(navigator.userAgent))
        ) {
            var scaleFactor = {{ scaleFactor|default('0.7') }};
            var density = \"{{ density|default('240dpi') }}\";
            document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale='+scaleFactor+'; maximum-scale='+scaleFactor+'; minimum-scale='+scaleFactor+' user-scalable=no;target-densityDpi='+density+'\"/>');
        }
    </script>
    {% endblock %}
    {##}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('components/cookieconsent/build/cookieconsent.min.css') }}\"/>
    <link rel=\"shortcut icon\" href=\"{% block favicon %}{% endblock %}\" />
    {% block css %}{% endblock %}
</head>
<body class=\"{% if app.debug %}debug{% endif %}\">
{% block content %}{% endblock %}
<script src=\"{{ asset('components/joii/dist/joii.min.js')}}\"></script>
<script src=\"{{ asset('components/jquery/jquery.min.js')}}\"></script>
<script src=\"{{ asset('components/jquery-ui/jquery-ui.min.js')}}\"></script>
{% include 'MapbenderCoreBundle::cookieconsent.html.twig' %}
{% block trans %}{% endblock %}
{% block js %}{% endblock %}
</body>
</html>", "MapbenderCoreBundle::index.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/index.html.twig");
    }
}
