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
class __TwigTemplate_f729284870569db2dd180d80741f288e41f3ced3f61ed2be76a0c25a7e5bdc59 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle::cookieconsent.html.twig"));

        // line 1
        if (((isset($context["cookieconsent"]) || array_key_exists("cookieconsent", $context)) && ($context["cookieconsent"] ?? $this->getContext($context, "cookieconsent")))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  42 => 5,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if  cookieconsent is defined and cookieconsent %}
    <script src=\"{{ asset('components/cookieconsent/build/cookieconsent.min.js') }}\"></script>
    <script>

        var backgroundColor = {{ cookieconsent.backgroundColor| default(\"#000000\")| json_encode | raw }};
        var backgroundTextColor = {{ cookieconsent.backgroundTextColor| default (\"#FFF\" )| json_encode| raw }};
        var buttonColor = {{ cookieconsent.buttonColor| default (\"#CAD401\" )| json_encode| raw }};
        var buttonTextColor = {{ cookieconsent.buttonTextColor| default (\"#000000\" )| json_encode| raw }};
        var message = {{ cookieconsent.message| default (\"This website uses cookies to ensure you get the best experience on our website. \") | json_encode | raw }};
        var dismissText = {{ cookieconsent.dismissText | default (\"Got it\")| json_encode | raw }};
        var linkText = {{ cookieconsent.linkText| default (\"Learn More\" ) | json_encode | raw }};
        var linkUrl = {{ cookieconsent.linkUrl| default (\"https://cookiesandyou.com/\" ) | json_encode | raw }};
        var theme   = {{ cookieconsent.theme| default (\"classic\" ) | json_encode | raw }};
        var position   = {{ cookieconsent.position| default (\"bottom-right\" ) | json_encode | raw }};

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
{% endif %}
", "MapbenderCoreBundle::cookieconsent.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/cookieconsent.html.twig");
    }
}
