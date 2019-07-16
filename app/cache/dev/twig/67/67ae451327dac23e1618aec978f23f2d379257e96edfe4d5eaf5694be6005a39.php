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
class __TwigTemplate_7258c54aa1b0518a62f75ffdbf20b06fe2aefe16693382e224313765dab19e5f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MapbenderCoreBundle/Resources/public/mapbender.trans.js"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MapbenderCoreBundle/Resources/public/mapbender.trans.js";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("var Mapbender = Mapbender || {};
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
", "@MapbenderCoreBundle/Resources/public/mapbender.trans.js", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/public/mapbender.trans.js");
    }
}
