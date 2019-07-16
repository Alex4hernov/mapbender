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

/* MapbenderCoreBundle:Element:button.html.twig */
class __TwigTemplate_b726683631c0a9faf28e2da4697add217fd0b13e584ae5be153c7f4981fdf9b2 extends \Twig\Template
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
        $context["_haveIcon"] = ($this->getAttribute(($context["configuration"] ?? null), "icon", [], "any", true, true) && $this->getAttribute(($context["configuration"] ?? null), "icon", []));
        // line 2
        if (($this->getAttribute(($context["configuration"] ?? null), "click", [], "any", true, true) && $this->getAttribute(($context["configuration"] ?? null), "click", []))) {
            // line 3
            echo "  <a id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" target=\"_blank\"
     class=\"mb-button\"
     href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? null), "click", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["configuration"] ?? null), "tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "tooltip", []), ($context["title"] ?? null))) : (($context["title"] ?? null)))), "html", null, true);
            echo "\">
    ";
            // line 6
            if (($context["_haveIcon"] ?? null)) {
                // line 7
                echo "      <span class=\"iconBig ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? null), "icon", []), "html", null, true);
                echo "\"></span>
    ";
            }
            // line 9
            echo "    ";
            if ($this->getAttribute(($context["configuration"] ?? null), "label", [])) {
                // line 10
                echo "    <span";
                if (($context["_haveIcon"] ?? null)) {
                    echo " class=\"hidden-sm hidden-xs hidden-md-down\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
                echo "</span>
    ";
            }
            // line 12
            echo "  </a>
";
        } else {
            // line 14
            echo "  <span id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"
        data-group=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? null), "group", []), "html", null, true);
            echo "\"
        title=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["configuration"] ?? null), "tooltip", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configuration"] ?? null), "tooltip", []), ($context["title"] ?? null))) : (($context["title"] ?? null)))), "html", null, true);
            echo "\"
        class=\"mb-button\">
    ";
            // line 18
            if (($context["_haveIcon"] ?? null)) {
                // line 19
                echo "    <span class=\"iconBig ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["configuration"] ?? null), "icon", []), "html", null, true);
                echo "\"></span>
    ";
            }
            // line 21
            echo "    ";
            if ($this->getAttribute(($context["configuration"] ?? null), "label", [])) {
                // line 22
                echo "    <span";
                if (($context["_haveIcon"] ?? null)) {
                    echo " class=\"hidden-sm hidden-xs hidden-md-down\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
                echo "</span>
    ";
            }
            // line 24
            echo "  </span>
";
        }
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  96 => 22,  93 => 21,  87 => 19,  85 => 18,  80 => 16,  76 => 15,  71 => 14,  67 => 12,  57 => 10,  54 => 9,  48 => 7,  46 => 6,  40 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:button.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/button.html.twig");
    }
}
