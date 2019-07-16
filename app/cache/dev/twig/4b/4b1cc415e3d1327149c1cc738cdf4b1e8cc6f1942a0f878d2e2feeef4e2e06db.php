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

/* MapbenderPrintBundle:Element:imageexport.html.twig */
class __TwigTemplate_20bf723eb82272c9af289c55ad8b5fda2c3980440d07184110372e76f60633cd extends \Twig\Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"mb-element mb-element-imageexport\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
        echo "\">
  <form action=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["submitUrl"] ?? null), "html", null, true);
        echo "\" method=\"post\" target=\"";
        echo twig_escape_filter($this->env, ($context["formTarget"] ?? null), "html", null, true);
        echo "\">
  <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.imageexport.chooseformat"), "html", null, true);
        echo "</p>
  <input type=\"radio\" value=\"png\" name=\"imageformat\" checked>PNG<br>
  <input type=\"radio\" value=\"jpeg\" name=\"imageformat\">JPG
    <div class=\"hidden -fn-hidden-fields\">
    </div>
    <div class=\"hidden\">
      <input type=\"submit\" class=\"-fn-submit\"/>
    </div>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderPrintBundle:Element:imageexport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderPrintBundle:Element:imageexport.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/imageexport.html.twig");
    }
}
