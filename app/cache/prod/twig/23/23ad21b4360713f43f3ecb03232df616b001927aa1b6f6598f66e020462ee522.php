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

/* @MapbenderManager/Repository/new.html.twig */
class __TwigTemplate_400a26c9f6189f99f15d737de6cd6ed50ef2cc8d2b00d4cacf8d6f54ab6b33e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
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
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@MapbenderManager/Repository/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.new.add"), "html", null, true);
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
    public function block_manager_content($context, array $blocks = [])
    {
        // line 10
        echo "<div id=\"sourceTabContainer\" class=\"tabContainer sourceTabContainer\">
  <ul class=\"tabs\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["managers"] ?? null));
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
        foreach ($context['_seq'] as $context["name"] => $context["manager"]) {
            // line 13
            echo "    <li id=\"tab";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\" class=\"tab";
            if ($this->getAttribute($context["loop"], "first", [])) {
                echo " active";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["manager"], "label", []), "html", null, true);
            echo "</li>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </ul>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["managers"] ?? null));
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
        foreach ($context['_seq'] as $context["name"] => $context["manager"]) {
            // line 17
            echo "  <div id=\"container";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\" class=\"container containerBaseData";
            if ($this->getAttribute($context["loop"], "first", [])) {
                echo " active";
            }
            echo "\">
    ";
            // line 18
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute($context["manager"], "startAction", [])), []);
            // line 19
            echo "  </div>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Repository/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 21,  135 => 19,  133 => 18,  124 => 17,  107 => 16,  104 => 15,  81 => 13,  64 => 12,  60 => 10,  57 => 9,  50 => 6,  47 => 5,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderManager/Repository/new.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Repository/new.html.twig");
    }
}
