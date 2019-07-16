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

/* MapbenderCoreBundle::cookieconsent.html.twig */
class __TwigTemplate_cd01c71f0abcd98c06a60e8a20bf4769fe035579c21584167c1c13c2974caac6 extends \Twig\Template
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
        if (((isset($context["cookieconsent"]) || array_key_exists("cookieconsent", $context)) && ($context["cookieconsent"] ?? null))) {
            // line 2
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/cookieconsent/build/cookieconsent.min.js"), "html", null, true);
            echo "\"></script>
    <script>

        var backgroundColor = ";
            // line 5
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "backgroundColor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "backgroundColor", []), "#000000")) : ("#000000")));
            echo ";
        var backgroundTextColor = ";
            // line 6
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "backgroundTextColor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "backgroundTextColor", []), "#FFF")) : ("#FFF")));
            echo ";
        var buttonColor = ";
            // line 7
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "buttonColor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "buttonColor", []), "#CAD401")) : ("#CAD401")));
            echo ";
        var buttonTextColor = ";
            // line 8
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "buttonTextColor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "buttonTextColor", []), "#000000")) : ("#000000")));
            echo ";
        var message = ";
            // line 9
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "message", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "message", []), "This website uses cookies to ensure you get the best experience on our website. ")) : ("This website uses cookies to ensure you get the best experience on our website. ")));
            echo ";
        var dismissText = ";
            // line 10
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "dismissText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "dismissText", []), "Got it")) : ("Got it")));
            echo ";
        var linkText = ";
            // line 11
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "linkText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "linkText", []), "Learn More")) : ("Learn More")));
            echo ";
        var linkUrl = ";
            // line 12
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "linkUrl", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "linkUrl", []), "https://cookiesandyou.com/")) : ("https://cookiesandyou.com/")));
            echo ";
        var theme   = ";
            // line 13
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "theme", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "theme", []), "classic")) : ("classic")));
            echo ";
        var position   = ";
            // line 14
            echo twig_jsonencode_filter((($this->getAttribute(($context["cookieconsent"] ?? null), "position", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cookieconsent"] ?? null), "position", []), "bottom-right")) : ("bottom-right")));
            echo ";

        window.addEventListener(\"load\", function() {

            window.cookieconsent.initialise({
                \"palette\": {
                    \"popup\":  {
                        \"background\": backgroundColor,
                        \"text\": backgroundTextColor
                    },
                    \"button\": {
                        \"background\": buttonColor,
                        \"text\": buttonTextColor
                    }
                },
                \"theme\": theme,
                \"position\": position,
                \"content\": {
                    \"message\": message,
                    \"dismiss\": dismissText,
                    \"link\":    linkText,
                    \"href\":    linkUrl
                }
            })
        });



    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle::cookieconsent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle::cookieconsent.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/cookieconsent.html.twig");
    }
}
