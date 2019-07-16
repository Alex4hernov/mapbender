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

/* MapbenderManagerBundle:Element:map.html.twig */
class __TwigTemplate_3e975eb1c80169d05fd00ae4b75d1d2f8ff8cb9aa6bbeec1a0fa20b2a776512c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"elementFormMap elementForm\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "layersets", []), 'row');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "dpi", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "dpi", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "tileSize", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "tileSize", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "srs", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "srs", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "units", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "units", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    <label class=\"labelInput\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.map.max_extent"), "html", null, true);
        echo "</label>
    <div class=\"singleRow\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_max", []), 0, []), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_max", []), 0, []), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_max", []), 1, []), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_max", []), 1, []), 'widget');
        echo "
    </div>
    <div class=\"clearContainer\"></div>
    <div class=\"singleRow\">
        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_max", []), 2, []), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_max", []), 2, []), 'widget');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_max", []), 3, []), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_max", []), 3, []), 'widget');
        echo "
    </div>
    <div class=\"clearContainer\"></div>
    <label class=\"labelInput\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.map.start_extent"), "html", null, true);
        echo "</label>
    <div class=\"singleRow\">
        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_start", []), 0, []), 'label');
        echo "
        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_start", []), 0, []), 'widget');
        echo "
        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_start", []), 1, []), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_start", []), 1, []), 'widget');
        echo "
    </div>
    <div class=\"clearContainer\"></div>
    <div class=\"singleRow\">
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_start", []), 2, []), 'label');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_start", []), 2, []), 'widget');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_start", []), 3, []), 'label');
        echo "
        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "extent_start", []), 3, []), 'widget');
        echo "
    </div>

    <div class=\"clearContainer\"></div>
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "scales", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "scales", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "otherSrs", []), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "configuration", []), "otherSrs", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>
    <div class=\"clearContainer\"></div>
</div>
<script type=\"text/javascript\">
\$('.elementFormMap .choiceExpandedSortable').sortable({
axis: \"y\"
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Element:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 47,  153 => 45,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  110 => 29,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  68 => 14,  62 => 12,  56 => 10,  50 => 8,  44 => 6,  39 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderManagerBundle:Element:map.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Element/map.html.twig");
    }
}
