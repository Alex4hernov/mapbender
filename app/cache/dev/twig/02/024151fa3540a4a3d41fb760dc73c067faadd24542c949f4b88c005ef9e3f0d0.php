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
class __TwigTemplate_372110667953f723811ef00c9b81efc026adabf5dc9994878c04fea5a636e573 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Login:box.html.twig"));

        // line 1
        $context["application"] = ["slug" => "manager"];
        // line 2
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "html", null, true);
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
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", [])) {
            echo "debug";
        }
        echo "\">
";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_favicon($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicon"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "    <link rel=\"stylesheet\"
          href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "mb3-login", "type" => "css"]), "html", null, true);
        echo "\"/>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_trans($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trans"));

        // line 24
        echo "    <script type=\"text/javascript\"
            src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "type" => "trans"]), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      var Mapbender = Mapbender || {};
      Mapbender.configuration = {elements: {}};
    </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "type" => "js"]), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 41
        echo "  <div class=\"authWrapper\">
    <div class=\"head\">
    </div>
    <div class=\"login-wrapper\">
      <div class=\"logoContainer\">
        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_welcome_list");
        echo "\"><img class=\"logo\" alt=\"Mapbender 3\"
                                                                 src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["fom"] ?? $this->getContext($context, "fom")), "server_logo", [])), "html", null, true);
        echo "\"/></a>
      </div>
      ";
        // line 49
        $this->displayBlock('box_content', $context, $blocks);
        // line 50
        echo "      ";
        $context["sitelinks"] = $this->env->getExtension('Mapbender\CoreBundle\Extension\SitelinksExtension')->get_sitelinks();
        // line 51
        echo "      ";
        if (($context["sitelinks"] ?? $this->getContext($context, "sitelinks"))) {
            // line 52
            echo "      <ul class=\"sitelinks\">
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sitelinks"] ?? $this->getContext($context, "sitelinks")));
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
                // line 54
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
            // line 56
            echo "      </ul>
      ";
        }
        // line 58
        echo "    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_box_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  271 => 49,  262 => 58,  258 => 56,  237 => 54,  220 => 53,  217 => 52,  214 => 51,  211 => 50,  209 => 49,  204 => 47,  200 => 46,  193 => 41,  187 => 40,  178 => 36,  173 => 34,  168 => 33,  162 => 32,  149 => 25,  146 => 24,  140 => 23,  130 => 19,  127 => 18,  121 => 17,  110 => 15,  99 => 7,  91 => 61,  89 => 40,  83 => 39,  80 => 38,  78 => 32,  75 => 31,  73 => 23,  70 => 22,  68 => 17,  62 => 15,  52 => 7,  45 => 3,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set application = {'slug': 'manager'} %}
<!DOCTYPE html>
<html class=\"no-js\" lang=\"{{ app.request.locale }}\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <title>{% block title %}{% endblock %}</title>
  <meta name=\"description\" content=\"Mapbender 3\">
  <script language=\"JavaScript\">
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;target-densityDpi=240dpi\"/>');
    }
  </script>
  {##}
  <link rel=\"shortcut icon\" href=\"{% block favicon %}{% endblock %}\"/>

  {% block css %}
    <link rel=\"stylesheet\"
          href=\"{{ path('mapbender_core_application_assets', {'slug': 'mb3-login', 'type': 'css'}) }}\"/>

  {% endblock %}

  {% block trans %}
    <script type=\"text/javascript\"
            src=\"{{ path('mapbender_core_application_assets', {'slug': application.slug, 'type': 'trans'}) }}\"></script>
    <script type=\"text/javascript\">
      var Mapbender = Mapbender || {};
      Mapbender.configuration = {elements: {}};
    </script>
  {% endblock %}

  {% block js %}
    <script src=\"{{ asset('components/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('components/jquery-ui/jquery-ui.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ path('mapbender_core_application_assets', {'slug': application.slug, 'type': 'js'}) }}\"></script>
  {% endblock %}
</head>
<body class=\"{% if app.debug %}debug{% endif %}\">
{% block content %}
  <div class=\"authWrapper\">
    <div class=\"head\">
    </div>
    <div class=\"login-wrapper\">
      <div class=\"logoContainer\">
        <a href=\"{{ path('mapbender_core_welcome_list') }}\"><img class=\"logo\" alt=\"Mapbender 3\"
                                                                 src=\"{{ asset(fom.server_logo) }}\"/></a>
      </div>
      {% block box_content %}{% endblock %}
      {% set sitelinks = get_sitelinks() %}
      {% if sitelinks %}
      <ul class=\"sitelinks\">
        {% for sitelink in sitelinks %}
          <li>{{ loop.first ? '' : '| ' }}<a href=\"{{ asset(sitelink.link) }}\">{{ sitelink.text | trans }}</a></li>
        {% endfor %}
      </ul>
      {% endif %}
    </div>
  </div>
{% endblock %}
</body>
</html>", "MapbenderCoreBundle:Login:box.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Login/box.html.twig");
    }
}
