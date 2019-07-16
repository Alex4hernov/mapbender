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

/* MapbenderManagerBundle:Index:menu.html.twig */
class __TwigTemplate_d02046199c122c29e5438f2c9fedfcde3e4bc76de54d5bd1591832119b7d24c1 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderManagerBundle:Index:menu.html.twig"));

        // line 5
        echo "<ul class=\"navLevel1 navigation\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["k"] => $context["item"]) {
            // line 7
            echo "
    <li id=\"manager-";
            // line 8
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" class=\"navItem ";
            if ($this->getAttribute($context["item"], "active", [], "any", true, true)) {
                echo " activeItem ";
            }
            echo "\">
      <a class=\"iconLinkButton\" href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "route", []));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["item"], "title", [])), "html", null, true);
            echo "</a>

    ";
            // line 11
            if (($this->getAttribute($context["item"], "subroutes", [], "any", true, true) && $this->getAttribute($context["item"], "subroutes", []))) {
                // line 12
                echo "      <ul class=\"navLevel2\">

        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "subroutes", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 15
                    echo "          <li class=\"";
                    if (($this->getAttribute($context["item"], "active", [], "any", true, true) && $this->getAttribute($context["item"], "active", []))) {
                        echo " activeItem ";
                    }
                    echo " navItem\">
            <a";
                    // line 16
                    if ($this->getAttribute($context["item"], "idx", [], "any", true, true)) {
                        echo " id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idx", []), "html", null, true);
                        echo "\"";
                    }
                    echo " class=\"iconLinkButton\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "route", []));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo "</a>

            ";
                    // line 18
                    if (($this->getAttribute($context["item"], "subroutes", [], "any", true, true) && $this->getAttribute($context["item"], "subroutes", []))) {
                        // line 19
                        echo "              <ul class=\"navLevel3\">

                ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "subroutes", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 22
                            echo "                  <li class=\"navItem ";
                            if (($this->getAttribute($context["item"], "active", [], "any", true, true) && $this->getAttribute($context["item"], "active", []))) {
                                echo " activeItem ";
                            }
                            echo "\">
                    <a class=\"iconLinkButton\" href=\"";
                            // line 23
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "route", []));
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["item"], "title", [])), "html", null, true);
                            echo "</a>
                  </li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "
              </ul>
            ";
                    }
                    // line 29
                    echo "
          </li>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "      </ul>
    ";
            }
            // line 35
            echo "
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</ul>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Index:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  134 => 35,  130 => 33,  121 => 29,  116 => 26,  105 => 23,  98 => 22,  94 => 21,  90 => 19,  88 => 18,  75 => 16,  68 => 15,  64 => 14,  60 => 12,  58 => 11,  51 => 9,  43 => 8,  40 => 7,  36 => 6,  33 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
  Copied into Mapbender from FOM v3.0.6.3
  see https://github.com/mapbender/fom/blob/v3.0.6.3/src/FOM/ManagerBundle/Resources/views/Manager/menu.html.twig
#}
<ul class=\"navLevel1 navigation\">
  {% for k, item in menu %}

    <li id=\"manager-{{ k }}\" class=\"navItem {% if item.active is defined %} activeItem {% endif %}\">
      <a class=\"iconLinkButton\" href=\"{{ path(item.route) }}\">{{ item.title|trans }}</a>

    {% if item.subroutes is defined and item.subroutes %}
      <ul class=\"navLevel2\">

        {% for item in item.subroutes %}
          <li class=\"{% if item.active is defined and item.active %} activeItem {% endif %} navItem\">
            <a{% if item.idx is defined %} id=\"{{ item.idx }}\"{% endif %} class=\"iconLinkButton\" href=\"{{ path(item.route) }}\">{{ item.title|trans }}</a>

            {% if item.subroutes is defined and item.subroutes %}
              <ul class=\"navLevel3\">

                {% for item in item.subroutes %}
                  <li class=\"navItem {% if item.active is defined and item.active %} activeItem {% endif %}\">
                    <a class=\"iconLinkButton\" href=\"{{ path(item.route) }}\">{{ item.title|trans }}</a>
                  </li>
                {% endfor %}

              </ul>
            {% endif %}

          </li>

        {% endfor %}
      </ul>
    {% endif %}

    </li>
  {% endfor %}
</ul>", "MapbenderManagerBundle:Index:menu.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Index/menu.html.twig");
    }
}
