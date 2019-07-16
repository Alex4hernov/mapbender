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
class __TwigTemplate_0efb261dac204765e6859ddb4407624c9ed892dc949d79ba5859bf3dd4499875 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderPrintBundle:Element:printclient-settings.html.twig"));

        // line 1
        if (($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "type", []) == "element")) {
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
        echo twig_escape_filter($this->env, ($context["submitUrl"] ?? $this->getContext($context, "submitUrl")), "html", null, true);
        echo "\" method=\"post\" target=\"";
        echo twig_escape_filter($this->env, ($context["formTarget"] ?? $this->getContext($context, "formTarget")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "templates", []));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "quality_levels", []));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "scales", []));
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
        if (($this->getAttribute(($context["configuration"] ?? null), "rotatable", [], "any", true, true) && ($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "rotatable", []) == 1))) {
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
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "optional_fields", [])) ? ($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "optional_fields", [])) : ([])));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 64
                echo "            ";
                if ((( !$this->getAttribute(($context["configuration"] ?? null), "required_fields_first", [], "any", true, true) ||  !$this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "required_fields_first", [])) ||  !$this->getAttribute($this->getAttribute($context["field"], "options", []), "required", []))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_printclient_form_top($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "printclient_form_top"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        if ((($this->getAttribute(($context["configuration"] ?? null), "optional_fields", [], "any", true, true) && $this->getAttribute(($context["configuration"] ?? null), "required_fields_first", [], "any", true, true)) && $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "required_fields_first", []))) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "optional_fields", [])) ? ($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "optional_fields", [])) : ([])));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_printclient_form_bottom($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "printclient_form_bottom"));

        // line 78
        echo "    ";
        if (($this->getAttribute(($context["configuration"] ?? null), "legend", [], "any", true, true) && ($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "legend", []) == 1))) {
            // line 79
            echo "        ";
            $context["legend_checked"] = "checked=\"checked\"";
            // line 80
            echo "        ";
            if (($this->getAttribute(($context["configuration"] ?? null), "legend_default_behaviour", [], "any", true, true) && ($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "legend_default_behaviour", []) == 0))) {
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
            echo ($context["legend_checked"] ?? $this->getContext($context, "legend_checked"));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  309 => 88,  304 => 86,  299 => 84,  296 => 83,  293 => 82,  290 => 81,  287 => 80,  284 => 79,  281 => 78,  275 => 77,  268 => 19,  265 => 18,  259 => 17,  254 => 15,  245 => 12,  242 => 11,  237 => 10,  234 => 9,  232 => 8,  226 => 7,  216 => 92,  211 => 89,  209 => 77,  206 => 76,  203 => 75,  197 => 74,  194 => 73,  189 => 71,  186 => 70,  181 => 68,  178 => 67,  176 => 66,  169 => 65,  166 => 64,  161 => 63,  158 => 62,  155 => 60,  151 => 58,  144 => 55,  142 => 54,  135 => 49,  124 => 47,  120 => 46,  114 => 43,  107 => 38,  96 => 36,  92 => 35,  86 => 32,  79 => 27,  68 => 25,  64 => 24,  58 => 21,  55 => 20,  53 => 7,  47 => 6,  44 => 5,  37 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if configuration.type == 'element' %}
    <input type=\"button\" class=\"button -fn-toggle-frame\" value=\"{{ 'mb.core.printclient.btn.activate' | trans }}\"/>
    <br>
{% endif %}

<form action=\"{{ submitUrl }}\" method=\"post\" target=\"{{ formTarget }}\">
    {% block printclient_form_top %}
    {# render required extra fields on top of the form if configured #}
        {% if configuration.optional_fields is defined and configuration.required_fields_first is defined and configuration.required_fields_first %}
        {% for key,field in configuration.optional_fields ?: [] %}
            {% if field.options.required %}
                <label class=\"labelInput\" for=\"extra[{{ key }}]\">{{ field.label }}
                    <span class=\"required\">*</span>
                </label>
                <input type=\"text\" class=\"input validationInput\" name=\"extra[{{ key }}]\" required=\"required\">
            {% endif %}
        {% endfor %}
    {% endif %}
    {% endblock printclient_form_top %}

    <label class=\"labelInput\">{{ 'mb.core.printclient.label.template' | trans }}</label>
    <div class=\"dropdown\">
        <select name=\"template\" class=\"hiddenDropdown\">
            {% for template in configuration.templates %}
                <option value=\"{{ template.template }}\">{{ template.label }}</option>
            {% endfor %}
        </select>
        <div class=\"dropdownValue iconDown\"></div>
        <ul class=\"dropdownList\"></ul>
    </div>

    <label class=\"labelInput\">{{ 'mb.core.printclient.label.quality' | trans }}</label>
    <div class=\"dropdown\">
        <select name=\"quality\" class=\"hiddenDropdown\">
            {% for qualityLevel in configuration.quality_levels %}
                <option value=\"{{ qualityLevel.dpi }}\">{{ qualityLevel.label }}</option>
            {% endfor %}
        </select>
        <div class=\"dropdownValue iconDown\"></div>
        <ul class=\"dropdownList\"></ul>
    </div>

    <label class=\"labelInput\">{{ 'mb.core.printclient.label.scale' | trans }}</label>
    <div class=\"dropdown\">
        <select name=\"scale_select\" class=\"hiddenDropdown\">
            {% for key in configuration.scales %}
                <option value=\"{{ key }}\">1:{{ key }}</option>
            {% endfor %}
        </select>
        <div class=\"dropdownValue iconDown\"></div>
        <ul class=\"dropdownList\"></ul>
    </div>

    {% if configuration.rotatable is defined and configuration.rotatable == 1 %}
        <label class=\"labelInput\" for=\"rotation\">{{ 'mb.core.printclient.label.rotation' | trans }}</label>
        <input class=\"input\" type=\"text\" name=\"rotation\" value=\"0\"/>
 {% else %}
<input class=\"input\" type=\"text\" name=\"rotation\" value=\"0\" style=\"display: none\"/>
    {% endif %}

    {# render non-required extra fields here #}
    {% if configuration.optional_fields is defined %}
        {% for key,field in configuration.optional_fields ?: [] %}
            {% if configuration.required_fields_first is not defined or not configuration.required_fields_first or not field.options.required %}
                <label class=\"labelInput\" for=\"extra[{{ key }}]\">{{ field.label }}
                {% if field.options.required %}
                    <span class=\"required\">*</span></label>
                    <input type=\"text\" class=\"input validationInput\" name=\"extra[{{ key }}]\" required=\"required\">
                {% else %}
                    </label>
                    <input type=\"text\" class=\"input validationInput\" name=\"extra[{{ key }}]\">
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endif %}

    {% block printclient_form_bottom %}
    {% if configuration.legend is defined and configuration.legend == 1 %}
        {% set legend_checked = 'checked=\"checked\"' %}
        {% if configuration.legend_default_behaviour is defined and configuration.legend_default_behaviour == 0 %}
            {% set legend_checked = '' %}
        {% endif %}
        <div class=\"checkWrapper left iconCheckbox iconCheckboxActive \" data-icon=\"iconCheckbox\">
            <input class=\"checkbox\" type=\"checkbox\" name=\"printLegend\" value=\"1\" {{ legend_checked | raw}}>
        </div>
        <label class=\"labelCheck\">{{ 'mb.core.printclient.label.legend' | trans }}</label>
    {% endif %}
    {% endblock printclient_form_bottom %}

    <div class=\"hidden -fn-hidden-fields\"></div>
    <input type=\"submit\" style=\"display: none\"/>
    <input type=\"button\" class=\"button printSubmit hidden\" value=\"{{ 'mb.core.printclient.popup.btn.ok' | trans }}\"/>
</form>
", "MapbenderPrintBundle:Element:printclient-settings.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/printclient-settings.html.twig");
    }
}
