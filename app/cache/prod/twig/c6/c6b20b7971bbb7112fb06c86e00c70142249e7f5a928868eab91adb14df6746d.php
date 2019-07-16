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

/* OwsProxy3CoreBundle::exception.html.twig */
class __TwigTemplate_f159b00d2b4cef2178f61ffc3a870e7d4f4f329ec5e5796beb756a67a928a6f1 extends \Twig\Template
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
        echo "<html>
    <head>
        <title>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? null), "message", [])), "html", null, true);
        echo "</title>
    </head>
    <body bgcolor=\"white\">
        <center><h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? null), "message", [])), "html", null, true);
        echo "</h1></center>
        <hr>
        <center>Owsproxy 3</center>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "OwsProxy3CoreBundle::exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "OwsProxy3CoreBundle::exception.html.twig", "/var/www/mapbender/owsproxy/src/OwsProxy3/CoreBundle/Resources/views/exception.html.twig");
    }
}
