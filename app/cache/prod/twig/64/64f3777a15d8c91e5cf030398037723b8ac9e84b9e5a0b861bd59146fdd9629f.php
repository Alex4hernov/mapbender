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
class __TwigTemplate_82445499ee297366f8c8346d64c10c12c5a3762f6935c282d5c3575ef04ba655 extends \Twig\Template
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
        // line 3
        ob_start();
        $this->displayBlock('title', $context, $blocks);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("MapbenderCoreBundle::index.html.twig", "MapbenderManagerBundle::manager.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter(($context["title"] ?? null), "")) : ("")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "manager", "type" => "css"]), "html", null, true);
        echo "\"/>
";
    }

    // line 11
    public function block_js($context, array $blocks = [])
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "manager", "type" => "js"]), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "manager", "type" => "trans"]), "html", null, true);
        echo "\"></script>
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        // line 18
        echo "  <div class=\"head\"><hr class=\"dekoSeperator\"></div>
    <div id=\"wrapper\" class=\"page\">

      <div class=\"leftPane\">
        <div class=\"logoContainer\">
          <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_welcome_list");
        echo "\"><img class=\"logo\" alt=\"Mapbender 3 Manager\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["fom"] ?? null), "server_logo", [])), "html", null, true);
        echo "\" /></a>
        </div>
        ";
        // line 25
        if (($this->getAttribute(($context["app"] ?? null), "user", []) != "")) {
            // line 26
            echo "            ";
            $this->loadTemplate("MapbenderManagerBundle:Index:menu.html.twig", "MapbenderManagerBundle::manager.html.twig", 26)->display(twig_array_merge($context, ["menu" => $this->env->getExtension('Mapbender\ManagerBundle\Extension\Twig\MenuExtension')->mapbender_manager_menu_items($this->getAttribute(($context["app"] ?? null), "request", []))]));
            // line 27
            echo "        ";
        }
        // line 28
        echo "      </div>

      <div class=\"rightPane\">
          <div class=\"top\">
              <div class=\"account-bar-wrap\">
                  <div class=\"accountBar\">
                    ";
        // line 34
        if (($this->getAttribute(($context["app"] ?? null), "user", []) != "")) {
            // line 35
            echo "                      <ul id=\"accountMenu\" class=\"accountMenu\">
                          <li id=\"accountOpen\" class=\"iconDown smallText\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.logged_as"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "username", []), "html", null, true);
            echo "<span class=\"openedIcon\"></span></li>
                          ";
            // line 37
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "password", []) != "")) {
                echo " <li><a class=\"linkButton iconSettings\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_edit", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.you_account"), "html", null, true);
                echo "</a></li>";
            }
            // line 38
            echo "                          <li><a class=\"linkButton iconSignOut\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_login_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.btn.logout"), "html", null, true);
            echo "</a></li>
                      </ul>
                    ";
        } else {
            // line 41
            echo "                      <a class=\"linkButton iconSignIn\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_login_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.btn.login"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                  </div>
              </div>
              ";
        // line 45
        $context["sitelinks"] = $this->env->getExtension('Mapbender\CoreBundle\Extension\SitelinksExtension')->get_sitelinks();
        // line 46
        echo "              ";
        if (($context["sitelinks"] ?? null)) {
            // line 47
            echo "              <ul class=\"sitelinks\">
                ";
            // line 48
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
                // line 49
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
            // line 51
            echo "              </ul>
              ";
        }
        // line 53
        echo "
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "bag", [0 => "flashes"], "method"), "all", [], "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 55
            echo "              <div class=\"flashBox ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                ";
            // line 56
            echo twig_escape_filter($this->env, twig_first($this->env, $context["flash"]), "html", null, true);
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
          </div>
        <div class=\"contentPane\">
          <div id=\"version\" class=\"mapbenderVersion smallText\">v. ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fom"] ?? null), "server_version", []), "html", null, true);
        echo "</div>
          <div class=\"content\">
            <h1 class=\"contentTitle\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        echo "</h1>

            ";
        // line 66
        $this->displayBlock('manager_content', $context, $blocks);
        // line 67
        echo "          </div>
           
        </div>
      </div>
    </div>

";
    }

    // line 66
    public function block_manager_content($context, array $blocks = [])
    {
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
        return array (  260 => 66,  250 => 67,  248 => 66,  243 => 64,  238 => 62,  233 => 59,  224 => 56,  219 => 55,  215 => 54,  212 => 53,  208 => 51,  187 => 49,  170 => 48,  167 => 47,  164 => 46,  162 => 45,  158 => 43,  150 => 41,  141 => 38,  133 => 37,  127 => 36,  124 => 35,  122 => 34,  114 => 28,  111 => 27,  108 => 26,  106 => 25,  99 => 23,  92 => 18,  89 => 17,  83 => 14,  79 => 13,  74 => 12,  71 => 11,  64 => 8,  61 => 7,  55 => 5,  49 => 3,  44 => 1,  40 => 3,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderManagerBundle::manager.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/manager.html.twig");
    }
}
