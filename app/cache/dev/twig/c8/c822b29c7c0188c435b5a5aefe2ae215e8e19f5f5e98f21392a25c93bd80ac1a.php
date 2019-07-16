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

/* MapbenderWmsBundle:Element:wmsloader.json.twig */
class __TwigTemplate_c536e73dd96653f1ca47fdc976186e20ea29e874be7554732cdc3c8dc69053bc extends \Twig\Template
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
\"mb.wms.wmsloader.error.url\": \"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.url");
        echo "\",
\"mb.wms.wmsloader.error.service\": \"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.service");
        echo "\",
\"mb.wms.wmsloader.error.operation\": \"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.operation");
        echo "\",
\"mb.wms.wmsloader.error.version\": \"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.version");
        echo "\",
\"mb.wms.wmsloader.error.load\": \"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.load");
        echo "\",
\"mb.wms.wmsloader.dialog.btn.cancel\": \"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.btn.cancel");
        echo "\",
\"mb.wms.wmsloader.dialog.btn.load\": \"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.btn.load");
        echo "\"
}
";
    }

    public function getTemplateName()
    {
        return "MapbenderWmsBundle:Element:wmsloader.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 7,  49 => 6,  45 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderWmsBundle:Element:wmsloader.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Element/wmsloader.json.twig");
    }
}
