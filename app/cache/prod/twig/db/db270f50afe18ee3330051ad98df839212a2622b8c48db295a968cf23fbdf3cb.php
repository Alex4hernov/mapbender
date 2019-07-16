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

/* MapbenderCoreBundle:Element:featureinfo.json.twig */
class __TwigTemplate_fdfb14a2b705f12d418e1837601c5d26020c11e41fd5e35d0c9d121ac0809765 extends \Twig\Template
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
\"mb.core.metadata.popup.title\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.metadata.popup.title"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.popup.btn.ok\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.popup.btn.print\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.popup.btn.print"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.error.nolayer\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.nolayer"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.error.noresult\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.noresult"), "html", null, true);
        echo "\"
}
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:featureinfo.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  45 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:Element:featureinfo.json.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/featureinfo.json.twig");
    }
}
