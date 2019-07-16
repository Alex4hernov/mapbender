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

/* MapbenderWmsBundle:Repository:macros.html.twig */
class __TwigTemplate_be937a2ba89de88655498b7210258f7fc0e2c4e82313973e99a7ce38c0bd44a0 extends \Twig\Template
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
    }

    // line 1
    public function getrequestinformation($__requestinformation__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "requestinformation" => $__requestinformation__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  <div class=\"labelText\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " GET:</div>
  <div class=\"metaText\">";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute(($context["requestinformation"] ?? null), "httpGet", []), "html", null, true);
            echo "</div>
  <div class=\"clearContainer\"></div>

  <div class=\"labelText\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " POST:</div>
  <div class=\"metaText\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["requestinformation"] ?? null), "httpPost", []), "html", null, true);
            echo "</div>
  <div class=\"clearContainer\"></div>

  <div class=\"labelText\">";
            // line 10
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.macros.label.formats"), "html", null, true);
            echo ":</div>
  ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["requestinformation"] ?? null), "formats", []));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 12
                echo "    <div class=\"metaText metaFormats\">";
                echo twig_escape_filter($this->env, $context["format"], "html", null, true);
                echo "</div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  <div class=\"clearContainer\"></div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MapbenderWmsBundle:Repository:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  76 => 12,  72 => 11,  66 => 10,  60 => 7,  56 => 6,  50 => 3,  45 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderWmsBundle:Repository:macros.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Repository/macros.html.twig");
    }
}
