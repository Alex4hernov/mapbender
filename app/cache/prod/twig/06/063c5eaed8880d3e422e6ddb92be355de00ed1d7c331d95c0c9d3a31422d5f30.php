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

/* @FOMUser/User/form.html.twig */
class __TwigTemplate_6f7c8378822ab2d97ad144774933e8374c3d2ffe0347da2568ff737d7c25582d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@FOMUser/User/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "  ";
        if (($context["edit"] ?? null)) {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.edit_user"), "html", null, true);
            echo "
  ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.new_user"), "html", null, true);
            echo "
  ";
        }
    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_js($context, array $blocks = [])
    {
        // line 16
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"application/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fomuser/js/acl-form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"application/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fommanager/js/form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"application/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/user-control.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile_assets"] ?? null), "js", []));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 21
            echo "    <script type=\"application/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["url"]), "html", null, true);
            echo "\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 25
    public function block_manager_content($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        if (($context["edit"] ?? null)) {
            // line 27
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_update", ["id" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "method" => "POST", "attr" => ["novalidate" => "novalidate", "autocomplete" => "off", "name" =>             // line 28
($context["form_name"] ?? null)]]);
            // line 29
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_create"), "method" => "POST", "attr" => ["novalidate" => "novalidate", "autocomplete" => "off", "name" =>             // line 32
($context["form_name"] ?? null)]]);
            // line 33
            echo "
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        $this->loadTemplate("FOMUserBundle:User:container.html.twig", "@FOMUser/User/form.html.twig", 36)->display($context);
        // line 37
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", []), 'row');
        echo "

    <div class=\"right\">
      <input class=\"button\" type=\"submit\" value=\"";
        // line 41
        if (($context["edit"] ?? null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.save"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.create"), "html", null, true);
        }
        echo "\"/>
      <a class=\"button critical\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.cancel"), "html", null, true);
        echo "</a>
    </div>
    ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
<div class=\"clearContainer\"></div>
";
    }

    public function getTemplateName()
    {
        return "@FOMUser/User/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 44,  151 => 42,  143 => 41,  137 => 38,  134 => 37,  132 => 36,  129 => 35,  125 => 33,  123 => 32,  121 => 31,  117 => 29,  115 => 28,  113 => 27,  110 => 26,  107 => 25,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  75 => 16,  72 => 15,  65 => 12,  62 => 11,  54 => 7,  48 => 5,  45 => 4,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@FOMUser/User/form.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/User/form.html.twig");
    }
}
