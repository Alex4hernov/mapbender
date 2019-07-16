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

/* @MapbenderManager/Repository/index.html.twig */
class __TwigTemplate_ef930b4490c70e5a2a940192d46be6354db1f5b611e265d9c8052a1e7de12ae6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderManager/Repository/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.sources"), "html", null, true);
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_js($context, array $blocks = [])
    {
        // line 10
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/service-list.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 14
    public function block_manager_content($context, array $blocks = [])
    {
        // line 15
        if (($context["create_permission"] ?? null)) {
            // line 16
            echo "<a class=\"iconAdd iconBig right\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_new");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.add"), "html", null, true);
            echo "\"></a>
";
        }
        // line 18
        if ((twig_length_filter($this->env, ($context["sources"] ?? null)) > 0)) {
            // line 19
            echo "  <label for=\"inputFilterServices\" class=\"labelInput\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.filter.source"), "html", null, true);
            echo "</label><input id=\"inputFilterServices\" type=\"text\" class=\"input listFilterInput\">

  <ul id=\"listFilterServices\" class=\"listFilterContainer listFilterBoxes listFilterServiceBoxes\">
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sources"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 23
                echo "      <li class=\"filterItem\">
        <div class=\"col1\">
          <span class=\"smallerText\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "id", []), "html", null, true);
                echo "</span><br>
          <span class=\"smallerText\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "type", []), "html", null, true);
                echo "</span><br>
            ";
                // line 27
                if (($this->getAttribute($context["source"], "valid", []) == true)) {
                    // line 28
                    echo "                <span class=\"iconStarO icon\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.valid"), "html", null, true);
                    echo "\"></span><br>
            ";
                } elseif ( !(null === $this->getAttribute(                // line 29
$context["source"], "valid", []))) {
                    // line 30
                    echo "                <span class=\"iconWarningSmpl icon\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.notvalid"), "html", null, true);
                    echo "\"></span><br>
            ";
                }
                // line 32
                echo "        </div>
        <div class=\"col2 box\">
            <div class=\"buttonGroup\">
              <a class=\"iconView hover-highlight-effect\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_view", ["sourceId" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.show_metadata"), "html", null, true);
                echo "\"></a>
              ";
                // line 36
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["oid"] ?? null)) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["source"]))) {
                    // line 37
                    echo "              <a class=\"iconReset hover-highlight-effect\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_updateform", ["sourceId" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.update"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", []), "html", null, true);
                    echo "\"></a>
              ";
                }
                // line 39
                echo "              ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["oid"] ?? null)) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["source"]))) {
                    // line 40
                    echo "                 <span class=\"iconRemove hover-highlight-effect\"
                  title=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.delete"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", []), "html", null, true);
                    echo "\"
                  data-url=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_confirmdelete", ["sourceId" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
                    echo "\"
                  data-id=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "id", []), "html", null, true);
                    echo "\"></span>
              ";
                }
                // line 45
                echo "            </div>
          <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_view", ["sourceId" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
                echo "\" class=\"title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", []), "html", null, true);
                echo "<span class=\"smallerText\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "alias", []), "html", null, true);
                echo "</span></a>
          <div class=\"description\">";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "description", []), "html", null, true);
                echo "</div>
        </div>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "  </ul>
";
        } else {
            // line 53
            echo "    <span class=\"description\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.no_source"), "html", null, true);
            echo "</span>
";
        }
        // line 55
        echo "
<div class=\"clearContainer\"></div>
";
    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Repository/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 55,  194 => 53,  190 => 51,  180 => 47,  172 => 46,  169 => 45,  164 => 43,  160 => 42,  154 => 41,  151 => 40,  148 => 39,  138 => 37,  136 => 36,  130 => 35,  125 => 32,  119 => 30,  117 => 29,  112 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 23,  94 => 22,  87 => 19,  85 => 18,  77 => 16,  75 => 15,  72 => 14,  66 => 11,  61 => 10,  58 => 9,  51 => 6,  48 => 5,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderManager/Repository/index.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Repository/index.html.twig");
    }
}
