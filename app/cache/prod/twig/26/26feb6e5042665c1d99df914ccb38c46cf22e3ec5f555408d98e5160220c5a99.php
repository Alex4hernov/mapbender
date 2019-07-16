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

/* @MapbenderCoreBundle/Resources/public/mapbender.trans.js */
class __TwigTemplate_ad2bc6e3850f428a1823d18bf8bf848bf1f6b282245a0182de3aa9f543c0554d extends \Twig\Template
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
        echo "var Mapbender = Mapbender || {};
Mapbender.i18n = Mapbender.i18n || {};
Mapbender.trans = function(key, replacements) {
    if(!Mapbender.i18n[key]){
        return key;
    } else {
        if(!replacements){
            return Mapbender.i18n[key];
        } else {
            var result = Mapbender.i18n[key];
            for(key in replacements){
                result = result.replace('%'+key+'%',replacements[key]);
            }
            return result;
        }
    }
};
";
    }

    public function getTemplateName()
    {
        return "@MapbenderCoreBundle/Resources/public/mapbender.trans.js";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderCoreBundle/Resources/public/mapbender.trans.js", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/public/mapbender.trans.js");
    }
}
