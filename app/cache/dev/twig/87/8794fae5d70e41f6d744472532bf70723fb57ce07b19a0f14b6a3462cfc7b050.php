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

/* @MapbenderManagerBundle/Resources/views/translations.json.twig */
class __TwigTemplate_23d57028fd80173164695b82e813dcf265319907f7dffbe4fe7e0b5c785e4afc extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MapbenderManagerBundle/Resources/views/translations.json.twig"));

        // line 1
        echo "{
  \"fom.core.components.popup.add_user_group.title\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.components.popup.add_user_group.title"), "html", null, true);
        echo "\",
  \"fom.core.components.popup.add_user_group.btn.cancel\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.components.popup.add_user_group.btn.cancel"), "html", null, true);
        echo "\",
  \"fom.core.components.popup.add_user_group.btn.add\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.components.popup.add_user_group.btn.add"), "html", null, true);
        echo "\",
  \"fom.core.components.popup.delete_user_group.title\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.components.popup.delete_user_group.title"), "html", null, true);
        echo "\",
  \"fom.core.components.popup.delete_user_group.content\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.components.popup.delete_user_group.content"), "html", null, true);
        echo "\",
  \"fom.core.components.popup.delete_user_group.btn.cancel\": \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.components.popup.delete_user_group.btn.cancel"), "html", null, true);
        echo "\",
  \"fom.core.components.popup.delete_user_group.btn.ok\": \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.components.popup.delete_user_group.btn.ok"), "html", null, true);
        echo "\",

  \"mb.manager.components.popup.add_element.title\": \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_element.title"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.add_element.btn.ok\": \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_element.btn.ok"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.add_element.btn.cancel\": \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_element.btn.cancel"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.add_element.btn.back\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_element.btn.back"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.edit_element.title\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.edit_element.title"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.edit_element.btn.ok\": \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.edit_element.btn.ok"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.edit_element.btn.cancel\": \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.edit_element.btn.cancel"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_element.subtitle\": \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_element.subtitle"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_element.title\": \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_element.title"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_element.btn.ok\": \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_element.btn.ok"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_element.btn.cancel\": \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_element.btn.cancel"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.add_edit_layerset.title_edit\": \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_edit_layerset.title_edit"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.add_edit_layerset.title_add\": \"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_edit_layerset.title_add"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.add_edit_layerset.btn.ok\": \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_edit_layerset.btn.ok"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.add_edit_layerset.btn.cancel\": \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_edit_layerset.btn.cancel"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_layerset.title\": \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_layerset.title"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_layerset.btn.ok\": \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_layerset.btn.ok"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_layerset.btn.cancel\": \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_layerset.btn.cancel"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.add_instance.title\": \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_instance.title"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.add_instance.btn.cancel\": \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.add_instance.btn.cancel"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_instance.title\": \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_instance.title"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_instance.btn.ok\": \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_instance.btn.ok"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.delete_instance.btn.cancel\": \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.delete_instance.btn.cancel"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.element_acl.btn.cancel\": \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.element_acl.btn.cancel"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.element_acl.btn.ok\": \"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.element_acl.btn.ok"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.element_acl.btn.add\": \"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.element_acl.btn.add"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.element_acl.btn.back\": \"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.element_acl.btn.back"), "html", null, true);
        echo "\",
  \"mb.manager.components.popup.element_acl.btn.remove\": \"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.components.popup.element_acl.btn.remove"), "html", null, true);
        echo "\",

  \"mb.manager.upload.label_delete\": \"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.upload.label_delete"), "html", null, true);
        echo "\",
  \"mb.manager.admin.application.upload.label\": \"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.upload.label"), "html", null, true);
        echo "\",
  \"mb.manager.admin.application.delete\": \"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.delete"), "html", null, true);
        echo "\",

  \"mb.core.entity.app.screenshotfile.error\": \"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.entity.app.screenshotfile.error"), "html", null, true);
        echo "\",
  \"mb.core.entity.app.screenshotfile.format_error\": \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.entity.app.screenshotfile.format_error"), "html", null, true);
        echo "\",
  \"mb.core.entity.app.screenshotfile.resolution.error\":\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.entity.app.screenshotfile.resolution.error"), "html", null, true);
        echo "\",

  \"mb.manager.managerbundle.applications\": \"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.managerbundle.applications"), "html", null, true);
        echo "\",
  \"mb.manager.managerbundle.new_application\": \"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.managerbundle.new_application"), "html", null, true);
        echo "\",
  \"mb.manager.managerbundle.import_application\": \"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.managerbundle.import_application"), "html", null, true);
        echo "\",
  \"mb.manager.managerbundle.export_application\": \"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.managerbundle.export_application"), "html", null, true);
        echo "\",
  \"mb.manager.managerbundle.sources\": \"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.managerbundle.sources"), "html", null, true);
        echo "\",
  \"mb.manager.managerbundle.add_source\": \"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.managerbundle.add_source"), "html", null, true);
        echo "\",

  \"mb.manager.template.region.tabs.label\": \"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.template.region.tabs.label"), "html", null, true);
        echo "\",
  \"mb.manager.template.region.accordion.label\": \"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.template.region.accordion.label"), "html", null, true);
        echo "\",

  \"mb.manager.import.application.failed\": \"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.import.application.failed"), "html", null, true);
        echo "\",
  \"mb.manager.import.acl.failed\": \"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.import.acl.failed"), "html", null, true);
        echo "\",
  \"mb.manager.import.source.failed\": \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.import.source.failed"), "html", null, true);
        echo "\",

  \"mb.application.save.failure.general\": \"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.application.save.failure.general"), "html", null, true);
        echo "\"

}";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MapbenderManagerBundle/Resources/views/translations.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 61,  246 => 59,  242 => 58,  238 => 57,  233 => 55,  229 => 54,  224 => 52,  220 => 51,  216 => 50,  212 => 49,  208 => 48,  204 => 47,  199 => 45,  195 => 44,  191 => 43,  186 => 41,  182 => 40,  178 => 39,  173 => 37,  169 => 36,  165 => 35,  161 => 34,  157 => 33,  153 => 32,  149 => 31,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  125 => 25,  121 => 24,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  40 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{
  \"fom.core.components.popup.add_user_group.title\": \"{{ \"fom.core.components.popup.add_user_group.title\" | trans }}\",
  \"fom.core.components.popup.add_user_group.btn.cancel\": \"{{ \"fom.core.components.popup.add_user_group.btn.cancel\" | trans }}\",
  \"fom.core.components.popup.add_user_group.btn.add\": \"{{ \"fom.core.components.popup.add_user_group.btn.add\" | trans }}\",
  \"fom.core.components.popup.delete_user_group.title\": \"{{ \"fom.core.components.popup.delete_user_group.title\" | trans }}\",
  \"fom.core.components.popup.delete_user_group.content\": \"{{ \"fom.core.components.popup.delete_user_group.content\" | trans }}\",
  \"fom.core.components.popup.delete_user_group.btn.cancel\": \"{{ \"fom.core.components.popup.delete_user_group.btn.cancel\" | trans }}\",
  \"fom.core.components.popup.delete_user_group.btn.ok\": \"{{ \"fom.core.components.popup.delete_user_group.btn.ok\" | trans }}\",

  \"mb.manager.components.popup.add_element.title\": \"{{ \"mb.manager.components.popup.add_element.title\" | trans }}\",
  \"mb.manager.components.popup.add_element.btn.ok\": \"{{ \"mb.manager.components.popup.add_element.btn.ok\" | trans }}\",
  \"mb.manager.components.popup.add_element.btn.cancel\": \"{{ \"mb.manager.components.popup.add_element.btn.cancel\" | trans }}\",
  \"mb.manager.components.popup.add_element.btn.back\": \"{{ \"mb.manager.components.popup.add_element.btn.back\" | trans }}\",
  \"mb.manager.components.popup.edit_element.title\": \"{{ \"mb.manager.components.popup.edit_element.title\" | trans }}\",
  \"mb.manager.components.popup.edit_element.btn.ok\": \"{{ \"mb.manager.components.popup.edit_element.btn.ok\" | trans }}\",
  \"mb.manager.components.popup.edit_element.btn.cancel\": \"{{ \"mb.manager.components.popup.edit_element.btn.cancel\" | trans }}\",
  \"mb.manager.components.popup.delete_element.subtitle\": \"{{ \"mb.manager.components.popup.delete_element.subtitle\" | trans }}\",
  \"mb.manager.components.popup.delete_element.title\": \"{{ \"mb.manager.components.popup.delete_element.title\" | trans }}\",
  \"mb.manager.components.popup.delete_element.btn.ok\": \"{{ \"mb.manager.components.popup.delete_element.btn.ok\" | trans }}\",
  \"mb.manager.components.popup.delete_element.btn.cancel\": \"{{ \"mb.manager.components.popup.delete_element.btn.cancel\" | trans }}\",
  \"mb.manager.components.popup.add_edit_layerset.title_edit\": \"{{ \"mb.manager.components.popup.add_edit_layerset.title_edit\" | trans }}\",
  \"mb.manager.components.popup.add_edit_layerset.title_add\": \"{{ \"mb.manager.components.popup.add_edit_layerset.title_add\" | trans }}\",
  \"mb.manager.components.popup.add_edit_layerset.btn.ok\": \"{{ \"mb.manager.components.popup.add_edit_layerset.btn.ok\" | trans }}\",
  \"mb.manager.components.popup.add_edit_layerset.btn.cancel\": \"{{ \"mb.manager.components.popup.add_edit_layerset.btn.cancel\" | trans }}\",
  \"mb.manager.components.popup.delete_layerset.title\": \"{{ \"mb.manager.components.popup.delete_layerset.title\" | trans }}\",
  \"mb.manager.components.popup.delete_layerset.btn.ok\": \"{{ \"mb.manager.components.popup.delete_layerset.btn.ok\" | trans }}\",
  \"mb.manager.components.popup.delete_layerset.btn.cancel\": \"{{ \"mb.manager.components.popup.delete_layerset.btn.cancel\" | trans }}\",
  \"mb.manager.components.popup.add_instance.title\": \"{{ \"mb.manager.components.popup.add_instance.title\" | trans }}\",
  \"mb.manager.components.popup.add_instance.btn.cancel\": \"{{ \"mb.manager.components.popup.add_instance.btn.cancel\" | trans }}\",
  \"mb.manager.components.popup.delete_instance.title\": \"{{ \"mb.manager.components.popup.delete_instance.title\" | trans }}\",
  \"mb.manager.components.popup.delete_instance.btn.ok\": \"{{ \"mb.manager.components.popup.delete_instance.btn.ok\" | trans }}\",
  \"mb.manager.components.popup.delete_instance.btn.cancel\": \"{{ \"mb.manager.components.popup.delete_instance.btn.cancel\" | trans }}\",
  \"mb.manager.components.popup.element_acl.btn.cancel\": \"{{ \"mb.manager.components.popup.element_acl.btn.cancel\" | trans }}\",
  \"mb.manager.components.popup.element_acl.btn.ok\": \"{{ \"mb.manager.components.popup.element_acl.btn.ok\" | trans }}\",
  \"mb.manager.components.popup.element_acl.btn.add\": \"{{ \"mb.manager.components.popup.element_acl.btn.add\" | trans }}\",
  \"mb.manager.components.popup.element_acl.btn.back\": \"{{ \"mb.manager.components.popup.element_acl.btn.back\" | trans }}\",
  \"mb.manager.components.popup.element_acl.btn.remove\": \"{{ \"mb.manager.components.popup.element_acl.btn.remove\" | trans }}\",

  \"mb.manager.upload.label_delete\": \"{{ \"mb.manager.upload.label_delete\" | trans }}\",
  \"mb.manager.admin.application.upload.label\": \"{{ \"mb.manager.admin.application.upload.label\" | trans }}\",
  \"mb.manager.admin.application.delete\": \"{{ \"mb.manager.admin.application.delete\" | trans }}\",

  \"mb.core.entity.app.screenshotfile.error\": \"{{ \"mb.core.entity.app.screenshotfile.error\" | trans }}\",
  \"mb.core.entity.app.screenshotfile.format_error\": \"{{ \"mb.core.entity.app.screenshotfile.format_error\" | trans }}\",
  \"mb.core.entity.app.screenshotfile.resolution.error\":\"{{ \"mb.core.entity.app.screenshotfile.resolution.error\" | trans}}\",

  \"mb.manager.managerbundle.applications\": \"{{ \"mb.manager.managerbundle.applications\" | trans }}\",
  \"mb.manager.managerbundle.new_application\": \"{{ \"mb.manager.managerbundle.new_application\" | trans }}\",
  \"mb.manager.managerbundle.import_application\": \"{{ \"mb.manager.managerbundle.import_application\" | trans }}\",
  \"mb.manager.managerbundle.export_application\": \"{{ \"mb.manager.managerbundle.export_application\" | trans }}\",
  \"mb.manager.managerbundle.sources\": \"{{ \"mb.manager.managerbundle.sources\" | trans }}\",
  \"mb.manager.managerbundle.add_source\": \"{{ \"mb.manager.managerbundle.add_source\" | trans }}\",

  \"mb.manager.template.region.tabs.label\": \"{{ \"mb.manager.template.region.tabs.label\" | trans }}\",
  \"mb.manager.template.region.accordion.label\": \"{{ \"mb.manager.template.region.accordion.label\" | trans }}\",

  \"mb.manager.import.application.failed\": \"{{ \"mb.manager.import.application.failed\" | trans }}\",
  \"mb.manager.import.acl.failed\": \"{{ \"mb.manager.import.acl.failed\" | trans }}\",
  \"mb.manager.import.source.failed\": \"{{ \"mb.manager.import.source.failed\" | trans }}\",

  \"mb.application.save.failure.general\": \"{{ \"mb.application.save.failure.general\" | trans }}\"

}", "@MapbenderManagerBundle/Resources/views/translations.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/translations.json.twig");
    }
}
