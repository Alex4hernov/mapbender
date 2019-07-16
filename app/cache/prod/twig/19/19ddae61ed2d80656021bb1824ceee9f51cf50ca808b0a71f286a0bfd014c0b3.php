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
class __TwigTemplate_6afded63ee2e776bee6e0e7f694c2ce930a3aeec7a277717c9e297c19833bcdf extends \Twig\Template
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
        // line 5
        echo "<ul class=\"navLevel1 navigation\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
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
        return array (  139 => 38,  131 => 35,  127 => 33,  118 => 29,  113 => 26,  102 => 23,  95 => 22,  91 => 21,  87 => 19,  85 => 18,  72 => 16,  65 => 15,  61 => 14,  57 => 12,  55 => 11,  48 => 9,  40 => 8,  37 => 7,  33 => 6,  30 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderManagerBundle:Index:menu.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Index/menu.html.twig");
    }
}
