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
class __TwigTemplate_8dcb241afc59360a2c5ed12095a43f8215d6cbd8297567ae1a5f04642cb71df0 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Template:region.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute(($context["application"] ?? null), "elements", [], "any", false, true), ($context["region"] ?? $this->getContext($context, "region")), [], "array", true, true)) {
            // line 2
            echo "  ";
            if ((($this->getAttribute(($context["region_props"] ?? null), ($context["region"] ?? $this->getContext($context, "region")), [], "array", true, true) && ($this->getAttribute($this->getAttribute(($context["region_props"] ?? $this->getContext($context, "region_props")), ($context["region"] ?? $this->getContext($context, "region")), [], "array"), "name", []) == ($context["region"] ?? $this->getContext($context, "region")))) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["region_props"] ?? $this->getContext($context, "region_props")), ($context["region"] ?? $this->getContext($context, "region")), [], "array"), "properties", [])) > 0))) {
                // line 3
                echo "      ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["region_props"] ?? $this->getContext($context, "region_props")), ($context["region"] ?? $this->getContext($context, "region")), [], "array"), "properties", []), "name", [], "array") == "tabs")) {
                    // line 4
                    echo "        <div class=\"tabContainerAlt\">
          <ul class=\"tabs\">
            ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "elements", []), ($context["region"] ?? $this->getContext($context, "region")), [], "array"));
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
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "elements", []), ($context["region"] ?? $this->getContext($context, "region")), [], "array"));
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
($context["region_props"] ?? $this->getContext($context, "region_props")), ($context["region"] ?? $this->getContext($context, "region")), [], "array"), "properties", []), "name", [], "array") == "accordion")) {
                    // line 17
                    echo "        <div class=\"accordionContainer\">
          ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "elements", []), ($context["region"] ?? $this->getContext($context, "region")), [], "array"));
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
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "elements", []), ($context["region"] ?? $this->getContext($context, "region")), [], "array"));
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["application"] ?? $this->getContext($context, "application")), "elements", []), ($context["region"] ?? $this->getContext($context, "region")), [], "array"));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  236 => 39,  227 => 37,  222 => 36,  219 => 35,  217 => 34,  214 => 33,  205 => 31,  200 => 30,  196 => 28,  177 => 23,  167 => 20,  156 => 19,  139 => 18,  136 => 17,  134 => 16,  131 => 15,  114 => 12,  105 => 11,  88 => 10,  85 => 9,  62 => 7,  45 => 6,  41 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if application.elements[region] is defined %}
  {% if region_props[region] is defined and region_props[region].name == region and region_props[region].properties | length > 0 %}
      {% if region_props[region].properties['name'] == 'tabs' %}
        <div class=\"tabContainerAlt\">
          <ul class=\"tabs\">
            {%  for element in application.elements[region] %}
              <li id=\"tab{{loop.index}}\" class=\"tab{% if loop.first %} active{% endif %}\">{{ element.title | trans }}</li>
            {% endfor %}
          </ul>
            {%  for element in application.elements[region] %}
              <div id=\"container{{loop.index}}\" class=\"container{% if loop.first %} active{% endif %}\">
                {{ element.render() | raw }}
              </div>
            {% endfor %}
        </div>
      {% elseif region_props[region].properties['name'] == 'accordion' %}
        <div class=\"accordionContainer\">
          {%  for element in application.elements[region] %}
            <div id=\"accordion{{loop.index}}\" class=\"accordion{% if loop.first %} active{% endif %}\"><div class=\"tablecell\">{{ element.title | trans }}</div></div>
            <div id=\"container{{loop.index}}\" class=\"container-accordion{% if loop.first %} active{% endif %}\">
                <div class=\"accordion-cell\">
                    <div class=\"accordion-wrapper\">
                    {{ element.render() | raw }}
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
      {% else %}
        {% for element in application.elements[region] %}
          {{ element.render() | raw }}
        {% endfor %}
      {% endif %}
    {#% endfor %#}
  {% else %}
    {% for element in application.elements[region] %}
      {{ element.render() | raw }}
    {% endfor %}
  {% endif %}
{% endif %}
", "MapbenderCoreBundle:Template:region.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Template/region.html.twig");
    }
}
