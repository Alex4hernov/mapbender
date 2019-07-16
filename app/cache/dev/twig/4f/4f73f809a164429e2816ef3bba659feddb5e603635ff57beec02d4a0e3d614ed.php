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

/* MapbenderManagerBundle:Application:form-basic.html.twig */
class __TwigTemplate_edc627108d203c9553929144dce8d083437812e7253fedbf0083860a0ab9c448 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderManagerBundle:Application:form-basic.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "slug", []), 'row');
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "screenshotFile", []), 'label');
        echo "

    <div class=\"screenshot_upload\" title=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.upload.tooltip"), "html", null, true);
        echo "\">
        <div class=\"upload\">
            <span class=\"label button upload_button\">
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.upload.button"), "html", null, true);
        echo "
            </span>
            <span class=\"upload_label\">
                ";
        // line 17
        echo twig_escape_filter($this->env, (((isset($context["screenshot_filename"]) || array_key_exists("screenshot_filename", $context))) ? (_twig_default_filter(($context["screenshot_filename"] ?? $this->getContext($context, "screenshot_filename")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.upload.label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.upload.label"))), "html", null, true);
        echo "
            </span>
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "screenshotFile", []), 'widget');
        echo "
            <div class=\"validationMsgBox smallText hidden\"></div>
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maxFileSize", []), 'widget');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "screenshotWidth", []), 'widget');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "screenshotHeight", []), 'widget');
        echo "

        </div>
    </div>
</div>
<div class=\"form-group\">
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'row');
        echo "
</div>
";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "removeScreenShot", []), 'widget');
        echo "
";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uploadScreenShot", []), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:form-basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  98 => 31,  93 => 29,  84 => 23,  80 => 22,  76 => 21,  71 => 19,  66 => 17,  60 => 14,  54 => 11,  49 => 9,  42 => 5,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    {{ form_row(form.title) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.slug) }}
</div>

<div class=\"form-group\">
    {{ form_label(form.screenshotFile) }}

    <div class=\"screenshot_upload\" title=\" {{ 'mb.manager.admin.application.upload.tooltip' | trans }}\">
        <div class=\"upload\">
            <span class=\"label button upload_button\">
                {{ 'mb.manager.admin.application.upload.button' | trans }}
            </span>
            <span class=\"upload_label\">
                {{ screenshot_filename | default('mb.manager.admin.application.upload.label' | trans) }}
            </span>
            {{ form_widget(form.screenshotFile) }}
            <div class=\"validationMsgBox smallText hidden\"></div>
            {{ form_widget(form.maxFileSize) }}
            {{ form_widget(form.screenshotWidth) }}
            {{ form_widget(form.screenshotHeight) }}

        </div>
    </div>
</div>
<div class=\"form-group\">
    {{ form_row(form.description) }}
</div>
{{ form_widget(form.removeScreenShot) }}
{{ form_widget(form.uploadScreenShot) }}
", "MapbenderManagerBundle:Application:form-basic.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/form-basic.html.twig");
    }
}
