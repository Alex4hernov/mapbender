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
class __TwigTemplate_03e7fd78e3cf13dfb7b091e74eb2ec2f0c958991bf4dfb5fd0053c279210ba51 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Template:fullscreen.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderCoreBundle::frontend.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["fom"] ?? $this->getContext($context, "fom")), "server_name", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "title", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_favicon($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "type" => "css"]), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_trans($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trans"));

        // line 12
        echo "  ";
        $this->displayParentBlock("trans", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "type" => "trans"]), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 17
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => $this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "slug", []), "type" => "js"]), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_frontend_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "frontend_content"));

        // line 23
        echo "  ";
        $context["sidePaneClosed"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), "sidepane", [], "any", false, true), "properties", [], "any", false, true), "closed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), "sidepane", [], "any", false, true), "properties", [], "any", false, true), "closed", []), false)) : (false));
        // line 24
        echo "  <div id=\"templateWrapper\" class=\"templateWrapper ";
        if ((($context["sidePaneClosed"] ?? $this->getContext($context, "sidePaneClosed")) == false)) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "elements", [0 => "toolbar"], "method"));
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
        if ($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", [], "any", false, true), ($context["name"] ?? $this->getContext($context, "name")), [], "array", true, true)) {
            // line 44
            echo "      ";
            $context["region"] = $this->getAttribute($this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "elements", []), ($context["name"] ?? $this->getContext($context, "name")), [], "array");
            // line 45
            echo "      ";
            $context["properties"] = (($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), ($context["name"] ?? $this->getContext($context, "name")), [], "array", false, true), "properties", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), ($context["name"] ?? $this->getContext($context, "name")), [], "array", false, true), "properties", []), [])) : ([]));
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
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\"
           data-closed=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["isRegionClosed"] ?? $this->getContext($context, "isRegionClosed")), "html", null, true);
            echo "\"
           class=\"clear sidePane ";
            // line 51
            echo twig_escape_filter($this->env, ($context["align"] ?? $this->getContext($context, "align")), "html", null, true);
            echo "\"
        ";
            // line 52
            if ($this->getAttribute(($context["properties"] ?? null), "width", [], "any", true, true)) {
                echo " style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "width", []), "html", null, true);
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
            $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 58)->display(twig_array_merge($context, ["region_props" => ($context["region_props"] ?? $this->getContext($context, "region_props")), "application" => ($context["application"] ?? $this->getContext($context, "application")), "region" => ($context["name"] ?? $this->getContext($context, "name"))]));
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
        $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 64)->display(twig_array_merge($context, ["region_props" => ($context["region_props"] ?? $this->getContext($context, "region_props")), "application" => ($context["application"] ?? $this->getContext($context, "application")), "region" => "content"]));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "elements", [0 => "footer"], "method"));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_logo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        // line 28
        echo "          <img class=\"logo\" height=\"40\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["fom"] ?? $this->getContext($context, "fom")), "server_logo", [])), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  288 => 28,  282 => 27,  273 => 74,  269 => 72,  260 => 70,  256 => 69,  253 => 68,  251 => 67,  247 => 65,  245 => 64,  241 => 62,  236 => 59,  234 => 58,  227 => 53,  221 => 52,  217 => 51,  213 => 50,  209 => 49,  206 => 48,  203 => 47,  200 => 46,  197 => 45,  194 => 44,  191 => 43,  188 => 42,  185 => 40,  181 => 38,  172 => 36,  168 => 35,  165 => 34,  163 => 33,  160 => 32,  156 => 30,  154 => 27,  151 => 26,  149 => 25,  142 => 24,  139 => 23,  133 => 22,  124 => 18,  119 => 17,  113 => 16,  104 => 13,  99 => 12,  93 => 11,  83 => 8,  77 => 7,  65 => 5,  51 => 3,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"MapbenderCoreBundle::frontend.html.twig\" %}

{% block title %}{{ fom.server_name }} - {{ application.title }}{% endblock %}

{% block favicon %}{{ asset('favicon.png') }}{% endblock %}

{% block css %}
  <link rel=\"stylesheet\" href=\"{{ path('mapbender_core_application_assets', {'slug': application.slug, 'type': 'css'}) }}\"/>
{% endblock %}

{% block trans %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ path('mapbender_core_application_assets', {'slug': application.slug, 'type': 'trans'}) }}\"></script>
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ path('mapbender_core_application_assets', {'slug': application.slug, 'type': 'js'}) }}\"></script>
{% endblock %}


{% block frontend_content %}
  {% set sidePaneClosed = region_props.sidepane.properties.closed|default(false) %}
  <div id=\"templateWrapper\" class=\"templateWrapper {% if sidePaneClosed == false %}sidePaneOpened{% endif %}\">
    {% if fom.server_logo is defined %}
      <div class=\"logoContainer\">
        {% block logo %}
          <img class=\"logo\" height=\"40\" src=\"{{ asset(fom.server_logo) }}\"/>
        {% endblock %}
      </div>
    {% endif %}

    {% if application.elements.toolbar is defined %}
    <ul id=\"toolbar\" class=\"toolBar itemsRight top\">
        {% for element in application.elements('toolbar') %}
          <li class=\"toolBarItem\">{{ element.render() | raw }}</li>
        {% endfor %}
    </ul>
    {% endif %}

    {# Right sidepane definition #}
    {% set name = 'sidepane' %}
    {% if application.elements[name] is defined %}
      {% set region = application.elements[name] %}
      {% set properties = region_props[name].properties|default({}) %}
      {% set align = properties.align|default('left') %}
      {% set isRegionClosed = properties.closed|default('false') %}

      <div id=\"{{ name }}\"
           data-closed=\"{{ isRegionClosed }}\"
           class=\"clear sidePane {{ align }}\"
        {% if properties.width is defined %} style=\"width: {{ properties.width }}\"{% endif %}
      >
        <ul class=\"sidePaneTabs\">
          <li class=\"sidePaneTabItem toggleSideBar\"></li>
        </ul>
        <div class=\"sideContent\">
          {% include \"MapbenderCoreBundle:Template:region.html.twig\"  with {'region_props': region_props, 'application': application, 'region': name } %}
        </div>
      </div>
    {% endif %}

    <div id=\"content\" class=\"contentPane\">
      {% include \"MapbenderCoreBundle:Template:region.html.twig\"  with {'region_props': region_props, 'application': application, 'region': 'content' }%}
    </div>

    {% if application.elements.footer is defined %}
    <ul id=\"footer\" class=\"toolBar itemsRight bottom\">
        {% for element in application.elements('footer')%}
          <li class=\"toolBarItem\">{{ element.render() | raw }}</li>
        {% endfor %}
    </ul>
    {% endif %}
  </div>

{% endblock %}
", "MapbenderCoreBundle:Template:fullscreen.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Template/fullscreen.html.twig");
    }
}
