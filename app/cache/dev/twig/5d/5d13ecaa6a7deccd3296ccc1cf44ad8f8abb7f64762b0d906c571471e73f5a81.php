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

/* MapbenderCoreBundle:Template:region.html.twig */
class __TwigTemplate_6b3bb4ed7f7227c5052a5fa5dd0d28384f46997984b2c0fd72f3e2102e5e8b3c extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", [], "any", false, true), ($context["region"] ?? null), [], "array", true, true)) {
            // line 2
            echo "  ";
            if ((($this->getAttribute(($context["region_props"] ?? null), ($context["region"] ?? null), [], "array", true, true) && ($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), ($context["region"] ?? null), [], "array"), "name", []) == ($context["region"] ?? null))) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["region_props"] ?? null), ($context["region"] ?? null), [], "array"), "properties", [])) > 0))) {
                // line 3
                echo "      ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["region_props"] ?? null), ($context["region"] ?? null), [], "array"), "properties", []), "name", [], "array") == "tabs")) {
                    // line 4
                    echo "        <div class=\"tabContainerAlt\">
          <ul class=\"tabs\">
            ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", []), ($context["region"] ?? null), [], "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 7
                        echo "              <li id=\"tab";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "\" class=\"tab";
                        if ($this->getAttribute($context["loop"], "first", [])) {
                            echo " active";
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["element"], "title", [])), "html", null, true);
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 9
                    echo "          </ul>
            ";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", []), ($context["region"] ?? null), [], "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 11
                        echo "              <div id=\"container";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "\" class=\"container";
                        if ($this->getAttribute($context["loop"], "first", [])) {
                            echo " active";
                        }
                        echo "\">
                ";
                        // line 12
                        echo $this->getAttribute($context["element"], "render", [], "method");
                        echo "
              </div>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "        </div>
      ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 16
($context["region_props"] ?? null), ($context["region"] ?? null), [], "array"), "properties", []), "name", [], "array") == "accordion")) {
                    // line 17
                    echo "        <div class=\"accordionContainer\">
          ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", []), ($context["region"] ?? null), [], "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 19
                        echo "            <div id=\"accordion";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "\" class=\"accordion";
                        if ($this->getAttribute($context["loop"], "first", [])) {
                            echo " active";
                        }
                        echo "\"><div class=\"tablecell\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["element"], "title", [])), "html", null, true);
                        echo "</div></div>
            <div id=\"container";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "\" class=\"container-accordion";
                        if ($this->getAttribute($context["loop"], "first", [])) {
                            echo " active";
                        }
                        echo "\">
                <div class=\"accordion-cell\">
                    <div class=\"accordion-wrapper\">
                    ";
                        // line 23
                        echo $this->getAttribute($context["element"], "render", [], "method");
                        echo "
                    </div>
                </div>
            </div>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "        </div>
      ";
                } else {
                    // line 30
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", []), ($context["region"] ?? null), [], "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 31
                        echo "          ";
                        echo $this->getAttribute($context["element"], "render", [], "method");
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "      ";
                }
                // line 34
                echo "    ";
                // line 35
                echo "  ";
            } else {
                // line 36
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", []), ($context["region"] ?? null), [], "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 37
                    echo "      ";
                    echo $this->getAttribute($context["element"], "render", [], "method");
                    echo "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Template:region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 39,  224 => 37,  219 => 36,  216 => 35,  214 => 34,  211 => 33,  202 => 31,  197 => 30,  193 => 28,  174 => 23,  164 => 20,  153 => 19,  136 => 18,  133 => 17,  131 => 16,  128 => 15,  111 => 12,  102 => 11,  85 => 10,  82 => 9,  59 => 7,  42 => 6,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Template:region.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Template/region.html.twig");
    }
}
