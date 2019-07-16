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

/* __string_template__712742be0466c33b4158fa8702f286aac87bb4d59cf56237be8f3fc2bd4dfa31 */
class __TwigTemplate_60b778573b3c0b07ba672cdf2dd06b0f57b8f1e450517a1356c4afdca7fa91d9 extends \Twig\Template
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
        echo "<p>
Mapbender is an 
</p></br>
<p>
<a href=\"https://www.osgeo.org/projects/mapbender/\" target=\"_blank\"><img src=\"https://mapbender.org/sites/default/files/osgeo-project-cmyk.png\" alt=\"OSGeo Project\"  title=\"OSGeo Project\" width=\"100px\" /></a>
</p></br>
<p>
Find out more about OSGeo at 
</br>
<a href=\"https://osgeo.org\" target=\"_blank\">https://www.osgeo.org</a>
</br>
<a href=\"https://osgeo.org/projects/mapbender/\" target=\"_blank\">https://www.osgeo.org/projects/mapbender/</a>";
    }

    public function getTemplateName()
    {
        return "__string_template__712742be0466c33b4158fa8702f286aac87bb4d59cf56237be8f3fc2bd4dfa31";
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
        return new Source("", "__string_template__712742be0466c33b4158fa8702f286aac87bb4d59cf56237be8f3fc2bd4dfa31", "");
    }
}
