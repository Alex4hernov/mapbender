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
class __TwigTemplate_a402642346e53ffc5a13e6900b3d37a2aca7d62b681c31e9917a8a7c9a68990d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderPrintBundle:Element:imageexport.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-imageexport\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? $this->getContext($context, "title"))), "html", null, true);
        echo "\">
  <form action=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["submitUrl"] ?? $this->getContext($context, "submitUrl")), "html", null, true);
        echo "\" method=\"post\" target=\"";
        echo twig_escape_filter($this->env, ($context["formTarget"] ?? $this->getContext($context, "formTarget")), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  46 => 3,  40 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-imageexport\" title=\"{{ title|trans }}\">
  <form action=\"{{ submitUrl }}\" method=\"post\" target=\"{{ formTarget }}\">
  <p>{{ 'mb.print.imageexport.chooseformat'| trans }}</p>
  <input type=\"radio\" value=\"png\" name=\"imageformat\" checked>PNG<br>
  <input type=\"radio\" value=\"jpeg\" name=\"imageformat\">JPG
    <div class=\"hidden -fn-hidden-fields\">
    </div>
    <div class=\"hidden\">
      <input type=\"submit\" class=\"-fn-submit\"/>
    </div>
  </form>
</div>
", "MapbenderPrintBundle:Element:imageexport.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/imageexport.html.twig");
    }
}
