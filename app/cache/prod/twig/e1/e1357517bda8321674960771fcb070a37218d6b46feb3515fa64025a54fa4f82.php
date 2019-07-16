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

/* FOMUserBundle:User:basic_profile.html.twig */
class __TwigTemplate_eab0530f17cf1c48d28f3feded48e7fa9a2ea9bfa67fb7e4b9040bda081725a7 extends \Twig\Template
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
        echo "<label class=\"left labelInput\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.firstname"), "html", null, true);
        echo "</label>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.lastName"), "html", null, true);
        echo "</label>
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "lastName", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.notes"), "html", null, true);
        echo "</label>
";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "notes", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.phone"), "html", null, true);
        echo "</label>
";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "phone", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.organizationName"), "html", null, true);
        echo "</label>
";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "organizationName", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.organizationRole"), "html", null, true);
        echo "</label>
";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "organizationRole", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.street"), "html", null, true);
        echo "</label>
";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "street", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.zipCode"), "html", null, true);
        echo "</label>
";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "zipCode", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.city"), "html", null, true);
        echo "</label>
";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "city", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.country"), "html", null, true);
        echo "</label>
";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "profile", []), "country", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>";
    }

    public function getTemplateName()
    {
        return "FOMUserBundle:User:basic_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 29,  130 => 28,  125 => 26,  119 => 25,  114 => 23,  108 => 22,  103 => 20,  97 => 19,  92 => 17,  86 => 16,  81 => 14,  75 => 13,  70 => 11,  64 => 10,  59 => 8,  53 => 7,  48 => 5,  42 => 4,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOMUserBundle:User:basic_profile.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/User/basic_profile.html.twig");
    }
}
