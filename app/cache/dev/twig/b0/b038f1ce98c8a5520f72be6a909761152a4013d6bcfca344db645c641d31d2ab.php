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

/* MapbenderPrintBundle:Element:printclient-settings.html.twig */
class __TwigTemplate_ed24cc3a273394dbae2dd21ce3fcf7f2a94ab8b267609359677b88b444d2cade extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'printclient_form_top' => [$this, 'block_printclient_form_top'],
            'printclient_form_bottom' => [$this, 'block_printclient_form_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute(($context["configuration"] ?? null), "type", []) == "element")) {
            // line 2
            echo "    <input type=\"button\" class=\"button -fn-toggle-frame\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.btn.activate"), "html", null, true);
            echo "\"/>
    <br>
";
        }
        // line 5
        echo "
<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["submitUrl"] ?? null), "html", null, true);
        echo "\" method=\"post\" target=\"";
        echo twig_escape_filter($this->env, ($context["formTarget"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 7
        $this->displayBlock('printclient_form_top', $context, $blocks);
        // line 20
        echo "
    <label class=\"labelInput\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.template"), "html", null, true);
        echo "</label>
    <div class=\"dropdown\">
        <select name=\"template\" class=\"hiddenDropdown\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["configuration"] ?? null), "templates", []));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 25
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "template", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "label", []), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </select>
        <div class=\"dropdownValue iconDown\"></div>
        <ul class=\"dropdownList\"></ul>
    </div>

    <label class=\"labelInput\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.quality"), "html", null, true);
        echo "</label>
    <div class=\"dropdown\">
        <select name=\"quality\" class=\"hiddenDropdown\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["configuration"] ?? null), "quality_levels", []));
        foreach ($context['_seq'] as $context["_key"] => $context["qualityLevel"]) {
            // line 36
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qualityLevel"], "dpi", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qualityLevel"], "label", []), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qualityLevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </select>
        <div class=\"dropdownValue iconDown\"></div>
        <ul class=\"dropdownList\"></ul>
    </div>

    <label class=\"labelInput\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.scale"), "html", null, true);
        echo "</label>
    <div class=\"dropdown\">
        <select name=\"scale_select\" class=\"hiddenDropdown\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["configuration"] ?? null), "scales", []));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 47
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">1:";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </select>
        <div class=\"dropdownValue iconDown\"></div>
        <ul class=\"dropdownList\"></ul>
    </div>

    ";
        // line 54
        if (($this->getAttribute(($context["configuration"] ?? null), "rotatable", [], "any", true, true) && ($this->getAttribute(($context["configuration"] ?? null), "rotatable", []) == 1))) {
            // line 55
            echo "        <label class=\"labelInput\" for=\"rotation\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.rotation"), "html", null, true);
            echo "</label>
        <input class=\"input\" type=\"text\" name=\"rotation\" value=\"0\"/>
 ";
        } else {
            // line 58
            echo "<input class=\"input\" type=\"text\" name=\"rotation\" value=\"0\" style=\"display: none\"/>
    ";
        }
        // line 60
        echo "
    ";
        // line 62
        echo "    ";
        if ($this->getAttribute(($context["configuration"] ?? null), "optional_fields", [], "any", true, true)) {
            // line 63
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["configuration"] ?? null), "optional_fields", [])) ? ($this->getAttribute(($context["configuration"] ?? null), "optional_fields", [])) : ([])));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 64
                echo "            ";
                if ((( !$this->getAttribute(($context["configuration"] ?? null), "required_fields_first", [], "any", true, true) ||  !$this->getAttribute(($context["configuration"] ?? null), "required_fields_first", [])) ||  !$this->getAttribute($this->getAttribute($context["field"], "options", []), "required", []))) {
                    // line 65
                    echo "                <label class=\"labelInput\" for=\"extra[";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "label", []), "html", null, true);
                    echo "
                ";
                    // line 66
                    if ($this->getAttribute($this->getAttribute($context["field"], "options", []), "required", [])) {
                        // line 67
                        echo "                    <span class=\"required\">*</span></label>
                    <input type=\"text\" class=\"input validationInput\" name=\"extra[";
                        // line 68
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "]\" required=\"required\">
                ";
                    } else {
                        // line 70
                        echo "                    </label>
                    <input type=\"text\" class=\"input validationInput\" name=\"extra[";
                        // line 71
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "]\">
                ";
                    }
                    // line 73
                    echo "            ";
                }
                // line 74
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "    ";
        }
        // line 76
        echo "
    ";
        // line 77
        $this->displayBlock('printclient_form_bottom', $context, $blocks);
        // line 89
        echo "
    <div class=\"hidden -fn-hidden-fields\"></div>
    <input type=\"submit\" style=\"display: none\"/>
    <input type=\"button\" class=\"button printSubmit hidden\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.popup.btn.ok"), "html", null, true);
        echo "\"/>
</form>
";
    }

    // line 7
    public function block_printclient_form_top($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        // line 9
        echo "        ";
        if ((($this->getAttribute(($context["configuration"] ?? null), "optional_fields", [], "any", true, true) && $this->getAttribute(($context["configuration"] ?? null), "required_fields_first", [], "any", true, true)) && $this->getAttribute(($context["configuration"] ?? null), "required_fields_first", []))) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["configuration"] ?? null), "optional_fields", [])) ? ($this->getAttribute(($context["configuration"] ?? null), "optional_fields", [])) : ([])));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 11
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["field"], "options", []), "required", [])) {
                    // line 12
                    echo "                <label class=\"labelInput\" for=\"extra[";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "label", []), "html", null, true);
                    echo "
                    <span class=\"required\">*</span>
                </label>
                <input type=\"text\" class=\"input validationInput\" name=\"extra[";
                    // line 15
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\" required=\"required\">
            ";
                }
                // line 17
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
    }

    // line 77
    public function block_printclient_form_bottom($context, array $blocks = [])
    {
        // line 78
        echo "    ";
        if (($this->getAttribute(($context["configuration"] ?? null), "legend", [], "any", true, true) && ($this->getAttribute(($context["configuration"] ?? null), "legend", []) == 1))) {
            // line 79
            echo "        ";
            $context["legend_checked"] = "checked=\"checked\"";
            // line 80
            echo "        ";
            if (($this->getAttribute(($context["configuration"] ?? null), "legend_default_behaviour", [], "any", true, true) && ($this->getAttribute(($context["configuration"] ?? null), "legend_default_behaviour", []) == 0))) {
                // line 81
                echo "            ";
                $context["legend_checked"] = "";
                // line 82
                echo "        ";
            }
            // line 83
            echo "        <div class=\"checkWrapper left iconCheckbox iconCheckboxActive \" data-icon=\"iconCheckbox\">
            <input class=\"checkbox\" type=\"checkbox\" name=\"printLegend\" value=\"1\" ";
            // line 84
            echo ($context["legend_checked"] ?? null);
            echo ">
        </div>
        <label class=\"labelCheck\">";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.legend"), "html", null, true);
            echo "</label>
    ";
        }
        // line 88
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MapbenderPrintBundle:Element:printclient-settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 88,  289 => 86,  284 => 84,  281 => 83,  278 => 82,  275 => 81,  272 => 80,  269 => 79,  266 => 78,  263 => 77,  259 => 19,  256 => 18,  250 => 17,  245 => 15,  236 => 12,  233 => 11,  228 => 10,  225 => 9,  223 => 8,  220 => 7,  213 => 92,  208 => 89,  206 => 77,  203 => 76,  200 => 75,  194 => 74,  191 => 73,  186 => 71,  183 => 70,  178 => 68,  175 => 67,  173 => 66,  166 => 65,  163 => 64,  158 => 63,  155 => 62,  152 => 60,  148 => 58,  141 => 55,  139 => 54,  132 => 49,  121 => 47,  117 => 46,  111 => 43,  104 => 38,  93 => 36,  89 => 35,  83 => 32,  76 => 27,  65 => 25,  61 => 24,  55 => 21,  52 => 20,  50 => 7,  44 => 6,  41 => 5,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderPrintBundle:Element:printclient-settings.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/printclient-settings.html.twig");
    }
}
