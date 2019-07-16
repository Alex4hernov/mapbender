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
class __TwigTemplate_871d0ab46b20ab83f9437221aedab9a11ec3a4b44cb92823aa238a8a543f2408 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderWmsBundle:Element:wmsloader.json.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  60 => 8,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  40 => 3,  36 => 2,  33 => 1,);
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
\"mb.wms.wmsloader.error.url\": \"{{ \"mb.wms.wmsloader.error.url\" | trans | raw }}\",
\"mb.wms.wmsloader.error.service\": \"{{ \"mb.wms.wmsloader.error.service\" | trans | raw }}\",
\"mb.wms.wmsloader.error.operation\": \"{{ \"mb.wms.wmsloader.error.operation\" | trans | raw }}\",
\"mb.wms.wmsloader.error.version\": \"{{ \"mb.wms.wmsloader.error.version\" | trans | raw }}\",
\"mb.wms.wmsloader.error.load\": \"{{ \"mb.wms.wmsloader.error.load\" | trans | raw }}\",
\"mb.wms.wmsloader.dialog.btn.cancel\": \"{{ \"mb.wms.wmsloader.dialog.btn.cancel\" | trans | raw }}\",
\"mb.wms.wmsloader.dialog.btn.load\": \"{{ \"mb.wms.wmsloader.dialog.btn.load\" | trans | raw }}\"
}
", "MapbenderWmsBundle:Element:wmsloader.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/WmsBundle/Resources/views/Element/wmsloader.json.twig");
    }
}
