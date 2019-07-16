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

/* MapbenderManagerBundle:Manager:actions.html.twig */
class __TwigTemplate_f6418eb3ff4b97bbd02e52ec1bb56839e8e7f551ff0e8357c3e4a24e0257a142 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderManagerBundle:Manager:actions.html.twig"));

        // line 1
        if ((isset($context["actions"]) || array_key_exists("actions", $context))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 3
                echo "    ";
                if (($this->getAttribute($context["v"], "display", [], "any", true, true) && $this->getAttribute($context["v"], "display", []))) {
                    // line 4
                    echo "    ";
                    ob_start();
                    // line 5
                    echo "    ";
                    if ($this->getAttribute($context["v"], "attr", [], "any", true, true)) {
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["v"], "attr", []));
                        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                            echo " ";
                            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                            echo "=\"";
                            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                            echo "\"";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 6
                    echo "    ";
                    $context["attr"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 7
                    echo "    <a id=\"action-";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "url", []), "html", null, true);
                    echo "\"";
                    echo twig_escape_filter($this->env, ($context["attr"] ?? $this->getContext($context, "attr")), "html", null, true);
                    echo " title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["v"], "title", [])), "html", null, true);
                    echo "\" tabindex=\"-1\"></a>
    ";
                }
                // line 9
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Manager:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 9,  65 => 7,  62 => 6,  46 => 5,  43 => 4,  40 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if actions is defined %}
    {% for k,v in actions %}
    {% if v.display is defined and v.display %}
    {% set attr %}
    {% if v.attr is defined %}{% for k,v in v.attr %} {{k}}=\"{{v}}\"{% endfor %}{% endif %}
    {% endset %}
    <a id=\"action-{{ k }}\" href=\"{{ v.url }}\"{{ attr }} title=\"{{ v.title | trans }}\" tabindex=\"-1\"></a>
    {% endif %}
    {% endfor %}
{% endif %}
", "MapbenderManagerBundle:Manager:actions.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Manager/actions.html.twig");
    }
}
