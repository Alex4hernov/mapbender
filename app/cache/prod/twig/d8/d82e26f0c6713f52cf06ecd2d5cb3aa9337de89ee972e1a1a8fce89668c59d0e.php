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

/* MapbenderCoreBundle:Element:basesourceswitcher.html.twig */
class __TwigTemplate_256d36ce46e6096d8cf93466c00cd70a4923c8f9fc74fbd5f89895907ab2feb3 extends \Twig\Template
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
        echo "<ul id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"mb-element mb-element-basesourceswitcher\"  title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["configuration"] ?? null), "tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "tooltip", []), ($context["title"] ?? null))) : (($context["title"] ?? null)))), "html", null, true);
        echo "\">
";
        // line 2
        if ($this->getAttribute(($context["configuration"] ?? null), "groups", [], "any", true, true)) {
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["configuration"] ?? null), "groups", []));
            foreach ($context['_seq'] as $context["name"] => $context["opts"]) {
                // line 4
                echo "    ";
                if (($this->getAttribute($context["opts"], "type", []) == "item")) {
                    // line 5
                    echo "    <li class=\"basesourcesetswitch notgroup\" ";
                    if (($this->getAttribute($context["opts"], "active", [], "any", true, true) && $this->getAttribute($context["opts"], "active", []))) {
                        echo "data-state=\"active\"";
                    }
                    echo " data-sourceset=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["opts"], "sources", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                        if ( !$this->getAttribute($context["loop"], "first", [])) {
                            echo ",";
                        }
                        ob_start();
                        echo twig_escape_filter($this->env, $context["source"], "html", null, true);
                        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["opts"], "title", [])), "html", null, true);
                    echo "</li>
    ";
                } else {
                    // line 7
                    echo "    <li class=\"basesourcegroup\" ";
                    if (($this->getAttribute($context["opts"], "active", [], "any", true, true) && $this->getAttribute($context["opts"], "active", []))) {
                        echo "data-state=\"active\"";
                    }
                    echo ">
      <!--span-->";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"]), "html", null, true);
                    echo "<!--/span-->
      <ul class=\"basesourcesubswitcher hidden\">
      ";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["opts"], "items", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                        // line 11
                        echo "          <li class=\"basesourcesetswitch\" ";
                        if (($this->getAttribute($context["opt"], "active", [], "any", true, true) && $this->getAttribute($context["opts"], "active", []))) {
                            echo "data-state=\"active\"";
                        }
                        echo " data-sourceset=\"";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["opt"], "sources", []));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                            if ( !$this->getAttribute($context["loop"], "first", [])) {
                                echo ",";
                            }
                            ob_start();
                            echo twig_escape_filter($this->env, $context["source"], "html", null, true);
                            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "\" >";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["opt"], "title", [])), "html", null, true);
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "      </ul>
    </li>
    ";
                }
                // line 16
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['opts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:basesourceswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 18,  161 => 16,  156 => 13,  108 => 11,  104 => 10,  99 => 8,  92 => 7,  47 => 5,  44 => 4,  39 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:basesourceswitcher.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/basesourceswitcher.html.twig");
    }
}
