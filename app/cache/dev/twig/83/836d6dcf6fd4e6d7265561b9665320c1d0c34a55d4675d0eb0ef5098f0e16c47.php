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

/* MapbenderManagerBundle::manager.html.twig */
class __TwigTemplate_dc5b36ccceb96d72a4adbac35551a3da6d314dbc066f86ea23bb2df2cc457c2a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'favicon' => [$this, 'block_favicon'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'content' => [$this, 'block_content'],
            'manager_content' => [$this, 'block_manager_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderCoreBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderManagerBundle::manager.html.twig"));

        // line 3
        ob_start();
        $this->displayBlock('title', $context, $blocks);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("MapbenderCoreBundle::index.html.twig", "MapbenderManagerBundle::manager.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter(($context["title"] ?? $this->getContext($context, "title")), "")) : ("")), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_favicon($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/workshopdemo/image/favicon.png"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "manager", "type" => "css"]), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/workshopdemo/manager.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 13
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "manager", "type" => "js"]), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "manager", "type" => "trans"]), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "  <div class=\"head\">  </div>
    <div id=\"wrapper\" class=\"page\">

      <div class=\"leftPane\">
        <div class=\"logoContainer\">
          <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_welcome_list");
        echo "\"><img class=\"logo\" alt=\"Mapbender 3 Manager\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["fom"] ?? $this->getContext($context, "fom")), "server_logo", [])), "html", null, true);
        echo "\" /></a>
        </div>
        ";
        // line 26
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != "")) {
            // line 27
            echo "            ";
            $this->loadTemplate("MapbenderManagerBundle:Index:menu.html.twig", "MapbenderManagerBundle::manager.html.twig", 27)->display(twig_array_merge($context, ["menu" => $this->env->getExtension('Mapbender\ManagerBundle\Extension\Twig\MenuExtension')->mapbender_manager_menu_items($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []))]));
            // line 28
            echo "        ";
        }
        // line 29
        echo "      </div>

      <div class=\"rightPane\">
          <div class=\"top\">
              <div class=\"account-bar-wrap\">
                  <div class=\"accountBar\">
                    ";
        // line 35
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) != "")) {
            // line 36
            echo "                      <ul id=\"accountMenu\" class=\"accountMenu\">
                          <li id=\"accountOpen\" class=\"iconDown smallText\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.logged_as"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "<span class=\"openedIcon\"></span></li>
                          ";
            // line 38
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "password", []) != "")) {
                echo " <li><a class=\"linkButton iconSettings\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_edit", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.you_account"), "html", null, true);
                echo "</a></li>";
            }
            // line 39
            echo "                          <li><a class=\"linkButton iconSignOut\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_login_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.btn.logout"), "html", null, true);
            echo "</a></li>
                      </ul>
                    ";
        } else {
            // line 42
            echo "                      <a class=\"linkButton iconSignIn\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_login_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.btn.login"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 44
        echo "                  </div>
              </div>
              <div class=\"slogan_logo\">
                      <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_welcome_list");
        echo "\">Главное архитектурно-планировочное<br>управление Москомархитектуры</a>
              </div>
              ";
        // line 49
        $context["sitelinks"] = $this->env->getExtension('Mapbender\CoreBundle\Extension\SitelinksExtension')->get_sitelinks();
        // line 50
        echo "              ";
        if (($context["sitelinks"] ?? $this->getContext($context, "sitelinks"))) {
            // line 51
            echo "              <ul class=\"sitelinks\">
                ";
            // line 52
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
                // line 53
                echo "                  <li>";
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
            // line 55
            echo "              </ul>
              ";
        }
        // line 57
        echo "
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "bag", [0 => "flashes"], "method"), "all", [], "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 59
            echo "              <div class=\"flashBox ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                ";
            // line 60
            echo twig_escape_filter($this->env, twig_first($this->env, $context["flash"]), "html", null, true);
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
          </div>
        <div class=\"contentPane\">
          <div class=\"content\">
            <h1 class=\"contentTitle\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? $this->getContext($context, "title"))), "html", null, true);
        echo "</h1>

            ";
        // line 69
        $this->displayBlock('manager_content', $context, $blocks);
        // line 70
        echo "          </div>
           
        </div>
      </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_manager_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manager_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle::manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 69,  289 => 70,  287 => 69,  282 => 67,  276 => 63,  267 => 60,  262 => 59,  258 => 58,  255 => 57,  251 => 55,  230 => 53,  213 => 52,  210 => 51,  207 => 50,  205 => 49,  200 => 47,  195 => 44,  187 => 42,  178 => 39,  170 => 38,  164 => 37,  161 => 36,  159 => 35,  151 => 29,  148 => 28,  145 => 27,  143 => 26,  136 => 24,  129 => 19,  123 => 18,  114 => 15,  110 => 14,  105 => 13,  99 => 12,  90 => 9,  85 => 8,  79 => 7,  67 => 5,  55 => 3,  47 => 1,  43 => 3,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"MapbenderCoreBundle::index.html.twig\" %}

{% set title %}{% block title %}{{ title|default('') }}{% endblock %}{% endset %}

{% block favicon %}{{ asset('bundles/workshopdemo/image/favicon.png') }}{% endblock %}

{% block css %}
  <link rel=\"stylesheet\" href=\"{{ path('mapbender_core_application_assets', {'slug': 'manager','type': 'css'}) }}\"/>
  <link rel=\"stylesheet\" href=\"{{ asset('bundles/workshopdemo/manager.css') }}\"/>
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ path('mapbender_core_application_assets', {'slug': 'manager','type': 'js'}) }}\"></script>
  <script type=\"text/javascript\" src=\"{{ path('mapbender_core_application_assets', {'slug': 'manager','type': 'trans'}) }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"head\">  </div>
    <div id=\"wrapper\" class=\"page\">

      <div class=\"leftPane\">
        <div class=\"logoContainer\">
          <a href=\"{{ path('mapbender_core_welcome_list') }}\"><img class=\"logo\" alt=\"Mapbender 3 Manager\" src=\"{{ asset(fom.server_logo)}}\" /></a>
        </div>
        {% if app.user != \"\" %}
            {% include 'MapbenderManagerBundle:Index:menu.html.twig' with {menu: mapbender_manager_menu_items(app.request)} %}
        {% endif %}
      </div>

      <div class=\"rightPane\">
          <div class=\"top\">
              <div class=\"account-bar-wrap\">
                  <div class=\"accountBar\">
                    {% if app.user != \"\" %}
                      <ul id=\"accountMenu\" class=\"accountMenu\">
                          <li id=\"accountOpen\" class=\"iconDown smallText\">{{ \"fom.core.manager.logged_as\"|trans}}: {{ app.user.username }}<span class=\"openedIcon\"></span></li>
                          {% if app.user.password != \"\" %} <li><a class=\"linkButton iconSettings\" href=\"{{ path('fom_user_user_edit', {'id': app.user.id}) }}\">{{ \"fom.core.manager.you_account\"|trans }}</a></li>{% endif %}
                          <li><a class=\"linkButton iconSignOut\" href=\"{{ path('mapbender_core_login_logout') }}\">{{ \"fom.core.manager.btn.logout\"|trans }}</a></li>
                      </ul>
                    {% else %}
                      <a class=\"linkButton iconSignIn\" href=\"{{ path('mapbender_core_login_login') }}\">{{ \"fom.core.manager.btn.login\"|trans}}</a>
                    {% endif %}
                  </div>
              </div>
              <div class=\"slogan_logo\">
                      <a href=\"{{ path('mapbender_core_welcome_list') }}\">Главное архитектурно-планировочное<br>управление Москомархитектуры</a>
              </div>
              {% set sitelinks = get_sitelinks() %}
              {% if sitelinks %}
              <ul class=\"sitelinks\">
                {% for sitelink in sitelinks %}
                  <li>{{ loop.first ? '' : '| ' }}<a href=\"{{ asset(sitelink.link) }}\">{{ sitelink.text | trans }}</a></li>
                {% endfor %}
              </ul>
              {% endif %}

            {% for key, flash in app.session.bag('flashes').all() %}
              <div class=\"flashBox {{ key }}\">
                {{ flash | first }}
              </div>
            {% endfor %}

          </div>
        <div class=\"contentPane\">
          <div class=\"content\">
            <h1 class=\"contentTitle\">{{ title|trans }}</h1>

            {% block manager_content %}{% endblock %}
          </div>
           
        </div>
      </div>
    </div>

{% endblock %}", "MapbenderManagerBundle::manager.html.twig", "/var/www/mapbender/app/Resources/MapbenderManagerBundle/views/manager.html.twig");
    }
}
