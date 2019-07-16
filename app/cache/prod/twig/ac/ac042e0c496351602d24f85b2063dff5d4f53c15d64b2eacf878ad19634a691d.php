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
class __TwigTemplate_be8a45b222b5047cb5feb32ea824ddaea4ddaf5b725dd7237881b0afcfd0fe7a extends \Twig\Template
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
        if ((isset($context["actions"]) || array_key_exists("actions", $context))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
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
                    echo twig_escape_filter($this->env, ($context["attr"] ?? null), "html", null, true);
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
        return array (  74 => 9,  62 => 7,  59 => 6,  43 => 5,  40 => 4,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderManagerBundle:Manager:actions.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Manager/actions.html.twig");
    }
}
