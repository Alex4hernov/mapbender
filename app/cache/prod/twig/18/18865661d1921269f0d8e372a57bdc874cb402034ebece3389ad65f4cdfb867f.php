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
class __TwigTemplate_030f440e7e94096412e827084ece4896dcab946190cb2682b5733f83c750d27a extends \Twig\Template
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
        return array (  248 => 61,  243 => 59,  239 => 58,  235 => 57,  230 => 55,  226 => 54,  221 => 52,  217 => 51,  213 => 50,  209 => 49,  205 => 48,  201 => 47,  196 => 45,  192 => 44,  188 => 43,  183 => 41,  179 => 40,  175 => 39,  170 => 37,  166 => 36,  162 => 35,  158 => 34,  154 => 33,  150 => 32,  146 => 31,  142 => 30,  138 => 29,  134 => 28,  130 => 27,  126 => 26,  122 => 25,  118 => 24,  114 => 23,  110 => 22,  106 => 21,  102 => 20,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderManagerBundle/Resources/views/translations.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/translations.json.twig");
    }
}
