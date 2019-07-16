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
class __TwigTemplate_63bd97539cf6b9fbaf26a6815f968fcca20d3183f20acf776b941679f1c6bc44 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOMUserBundle:User:basic_profile.html.twig"));

        // line 1
        echo "<label class=\"left labelInput\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.firstname"), "html", null, true);
        echo "</label>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.lastName"), "html", null, true);
        echo "</label>
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "lastName", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.notes"), "html", null, true);
        echo "</label>
";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "notes", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.phone"), "html", null, true);
        echo "</label>
";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "phone", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.organizationName"), "html", null, true);
        echo "</label>
";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "organizationName", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.organizationRole"), "html", null, true);
        echo "</label>
";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "organizationRole", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.street"), "html", null, true);
        echo "</label>
";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "street", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.zipCode"), "html", null, true);
        echo "</label>
";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "zipCode", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.city"), "html", null, true);
        echo "</label>
";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "city", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "firstName", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.profile.basic.country"), "html", null, true);
        echo "</label>
";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "profile", []), "country", []), 'widget');
        echo "
<div class=\"clearContainer\"></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  139 => 29,  133 => 28,  128 => 26,  122 => 25,  117 => 23,  111 => 22,  106 => 20,  100 => 19,  95 => 17,  89 => 16,  84 => 14,  78 => 13,  73 => 11,  67 => 10,  62 => 8,  56 => 7,  51 => 5,  45 => 4,  40 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.firstname\" | trans}}</label>
{{ form_widget(form.profile.firstName) }}
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.lastName\" | trans}}</label>
{{ form_widget(form.profile.lastName) }}
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.notes\" | trans}}</label>
{{ form_widget(form.profile.notes) }}
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.phone\" | trans}}</label>
{{ form_widget(form.profile.phone) }}
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.organizationName\" | trans}}</label>
{{ form_widget(form.profile.organizationName) }}
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.organizationRole\" | trans}}</label>
{{ form_widget(form.profile.organizationRole) }}
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.street\" | trans}}</label>
{{ form_widget(form.profile.street) }}
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.zipCode\" | trans}}</label>
{{ form_widget(form.profile.zipCode) }}
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.city\" | trans}}</label>
{{ form_widget(form.profile.city) }}
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"{{ form.profile.firstName.vars.id }}\">{{\"form.profile.basic.country\" | trans}}</label>
{{ form_widget(form.profile.country) }}
<div class=\"clearContainer\"></div>", "FOMUserBundle:User:basic_profile.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/User/basic_profile.html.twig");
    }
}
