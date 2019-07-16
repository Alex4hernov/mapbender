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

/* MapbenderCoreBundle:form:fields.html.twig */
class __TwigTemplate_1bccdd5dc9c503f10fbaa7098a5eaf43d7aff55a9a0c0d91e8a8f1958e266eb7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_expanded_sortable' => [$this, 'block_choice_widget_expanded_sortable'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'form_label' => [$this, 'block_form_label'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form_enctype' => [$this, 'block_form_enctype'],
            'form_rest' => [$this, 'block_form_rest'],
            'acl_widget' => [$this, 'block_acl_widget'],
            'aclElement_widget' => [$this, 'block_aclElement_widget'],
            'tagbox_widget' => [$this, 'block_tagbox_widget'],
            'ace_widget' => [$this, 'block_ace_widget'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'widget_attribute_class' => [$this, 'block_widget_attribute_class'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('form_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('choice_widget_expanded_sortable', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 200
        echo "
";
        // line 201
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 216
        echo "
";
        // line 217
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 224
        echo "
";
        // line 225
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('date_widget', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_widget', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('number_widget', $context, $blocks);
        // line 275
        echo "
";
        // line 276
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 282
        echo "
";
        // line 283
        $this->displayBlock('money_widget', $context, $blocks);
        // line 288
        echo "
";
        // line 289
        $this->displayBlock('url_widget', $context, $blocks);
        // line 295
        echo "
";
        // line 296
        $this->displayBlock('search_widget', $context, $blocks);
        // line 302
        echo "
";
        // line 303
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 309
        echo "
";
        // line 310
        $this->displayBlock('password_widget', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('email_widget', $context, $blocks);
        // line 331
        echo "



";
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('form_label', $context, $blocks);
        // line 359
        echo "



";
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 374
        echo "
";
        // line 375
        $this->displayBlock('form_row', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 395
        echo "
";
        // line 397
        echo "
";
        // line 398
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 403
        echo "
";
        // line 404
        $this->displayBlock('form_rest', $context, $blocks);
        // line 413
        echo "
";
        // line 414
        $this->displayBlock('acl_widget', $context, $blocks);
        // line 448
        echo "
";
        // line 449
        $this->displayBlock('aclElement_widget', $context, $blocks);
        // line 475
        echo "
";
        // line 476
        $this->displayBlock('tagbox_widget', $context, $blocks);
        // line 485
        echo "
";
        // line 486
        $this->displayBlock('ace_widget', $context, $blocks);
        // line 509
        echo "




";
        // line 515
        echo "
";
        // line 516
        $this->displayBlock('form_rows', $context, $blocks);
        // line 524
        echo "
";
        // line 525
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 531
        echo "
";
        // line 532
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 538
        echo "
";
        // line 539
        $this->displayBlock('widget_attribute_class', $context, $blocks);
    }

    // line 7
    public function block_form_widget($context, array $blocks = [])
    {
        // line 8
        echo "  ";
        ob_start();
        // line 9
        echo "    ";
        if (($context["compound"] ?? null)) {
            // line 10
            echo "      ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
    ";
        } else {
            // line 12
            echo "      ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        // line 14
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 18
        echo "  ";
        ob_start();
        // line 19
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 20
        echo "
    ";
        // line 21
        if ((($context["type"] ?? null) != "hidden")) {
            // line 22
            echo "      <div class=\"inputWrapper ";
            $this->displayBlock("widget_attribute_class", $context, $blocks);
            echo "\">
        ";
            // line 23
            ob_start();
            // line 24
            echo "          <input class=\"";
            if ((($context["type"] ?? null) != "file")) {
                echo "input validationInput";
            }
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["value"] ?? null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo "/>

          ";
            // line 26
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 27
                echo "            <span class=\"validationMsgBox smallText\">
              ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 29
                    echo "                ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 30
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 31
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "validators")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 32
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "validators"))), "html", null, true);
                    // line 33
                    echo "
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "            </span>
          ";
            }
            // line 37
            echo "        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 38
            echo "      </div>

    ";
        } else {
            // line 41
            echo "      <input class=\"hidden\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["value"] ?? null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo "/>
    ";
        }
        // line 43
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 46
    public function block_form_widget_compound($context, array $blocks = [])
    {
        // line 47
        echo "  ";
        ob_start();
        // line 48
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
      ";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "prototype", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "allow_add", [], "any", true, true))) {
            // line 50
            echo "      <a href=\"#add\" class=\"collectionAdd iconAdd hover-highlight-effect\"></a>
      ";
        }
        // line 52
        echo "      ";
        if ((($this->getAttribute(($context["form"] ?? null), "parent", []) && twig_in_filter("allow_delete", twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", []), "vars", [])))) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", []), "vars", []), "allow_delete", [], "array"))) {
            // line 53
            echo "        <a href=\"#delete\" class=\"collectionRemove iconRemove hover-highlight-effect\"></a>
      ";
        }
        // line 55
        echo "
      ";
        // line 56
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", []))) {
            // line 57
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
      ";
        }
        // line 59
        echo "      ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
      ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </div>

  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 66
    public function block_collection_widget($context, array $blocks = [])
    {
        // line 67
        echo "  ";
        ob_start();
        // line 68
        echo "    ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 69
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 70
            echo "      ";
        }
        // line 71
        echo "      ";
        if (($context["allow_delete"] ?? null)) {
            // line 72
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-allow-delete" => 1]);
            // line 73
            echo "      ";
        }
        // line 74
        echo "      ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 78
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 79
        echo "  <div class=\"inputWrapper ";
        $this->displayBlock("widget_attribute_class", $context, $blocks);
        echo "\">
    ";
        // line 80
        ob_start();
        // line 81
        echo "      <textarea class=\"input validationInput\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>
      ";
        // line 82
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 83
            echo "        <span class=\"validationMsgBox smallText\">
          ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 85
                echo "            ";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute(                // line 86
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                // line 87
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "validators")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                // line 88
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "validators"))), "html", null, true);
                // line 89
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </span>
      ";
        }
        // line 93
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 94
        echo "  </div>
";
    }

    // line 97
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 98
        echo "  ";
        ob_start();
        // line 99
        echo "    ";
        if (($context["expanded"] ?? null)) {
            // line 100
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "data-sortable", [], "array", true, true))) {
                // line 101
                echo "        ";
                $this->displayBlock("choice_widget_expanded_sortable", $context, $blocks);
                echo "
      ";
            } else {
                // line 103
                echo "        ";
                $this->displayBlock("choice_widget_expanded", $context, $blocks);
                echo "
      ";
            }
            // line 105
            echo "    ";
        } else {
            // line 106
            echo "      ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
        // line 108
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 111
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 112
        echo "  ";
        ob_start();
        // line 113
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 115
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
    ";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "  </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 122
    public function block_choice_widget_expanded_sortable($context, array $blocks = [])
    {
        // line 123
        echo "  ";
        ob_start();
        // line 124
        echo "  <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data-sortable", [], "array"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 126
            echo "      <div class=\"sortableItem\">
        ";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "  </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 136
        echo "  ";
        ob_start();
        // line 137
        echo "    ";
        if (($context["multiple"] ?? null)) {
            // line 138
            echo "      <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " multiple=\"multiple\">
        ";
            // line 139
            if ( !(null === ($context["empty_value"] ?? null))) {
                // line 140
                echo "          <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</option>
        ";
            }
            // line 142
            echo "        ";
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
                // line 143
                echo "          ";
                $context["options"] = ($context["preferred_choices"] ?? null);
                // line 144
                echo "          ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
          ";
                // line 145
                if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                    // line 146
                    echo "            <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                    echo "</option>
          ";
                }
                // line 148
                echo "        ";
            }
            // line 149
            echo "        ";
            $context["options"] = ($context["choices"] ?? null);
            // line 150
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
      </select>
    ";
        } else {
            // line 153
            echo "      <div class=\"dropdown ";
            $this->displayBlock("widget_attribute_class", $context, $blocks);
            echo "\" >
        ";
            // line 154
            $context["selectedValue"] = "";
            // line 155
            echo "        ";
            $context["firstValue"] = "";
            // line 156
            echo "
        <select class=\"hiddenDropdown\" ";
            // line 157
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo ">
          ";
            // line 158
            if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === ($context["empty_value"] ?? null)))) {
                // line 159
                echo "            <option class=\"opt-0\" selected=\"selected\" value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</option>
            ";
                // line 160
                $context["selectedValue"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), [], ($context["translation_domain"] ?? null));
                // line 161
                echo "          ";
            }
            // line 162
            echo "
          ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 164
                echo "
            ";
                // line 165
                if (($this->getAttribute($context["loop"], "index", []) == 1)) {
                    // line 166
                    echo "              ";
                    $context["firstValue"] = $this->getAttribute($context["choice"], "label", []);
                    // line 167
                    echo "            ";
                }
                // line 168
                echo "
            ";
                // line 169
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? null))) {
                    // line 170
                    echo "              ";
                    $context["selectedValue"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["translation_domain"] ?? null));
                    // line 171
                    echo "            ";
                }
                // line 172
                echo "
            <option class=\"opt-";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "\" ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\" ";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</option>
          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </select>

        <div class=\"dropdownValue iconDown\">
          ";
            // line 178
            if ((twig_length_filter($this->env, ($context["selectedValue"] ?? null)) == 0)) {
                // line 179
                echo "            ";
                if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === ($context["empty_value"] ?? null)))) {
                    // line 180
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                    echo "
            ";
                } else {
                    // line 182
                    echo "              ";
                    echo twig_escape_filter($this->env, ($context["firstValue"] ?? null), "html", null, true);
                    echo "
            ";
                }
                // line 184
                echo "          ";
            } else {
                // line 185
                echo "            ";
                echo twig_escape_filter($this->env, ($context["selectedValue"] ?? null), "html", null, true);
                echo "
          ";
            }
            // line 187
            echo "        </div>
        <ul class=\"dropdownList\">
          ";
            // line 189
            if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === ($context["empty_value"] ?? null)))) {
                // line 190
                echo "            <li class=\"item-0\" value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</li>
          ";
            }
            // line 192
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 193
                echo "            <li class=\"item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</li>
          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "        </ul>
      </div>
    ";
        }
        // line 198
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 201
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 202
        echo "  ";
        ob_start();
        // line 203
        echo "    ";
        // line 204
        echo "    ";
        $context["_wrapperClass"] = "checkWrapper iconCheckbox left";
        // line 205
        echo "    ";
        if (($context["checked"] ?? null)) {
            // line 206
            echo "      ";
            $context["_wrapperClass"] = (($context["_wrapperClass"] ?? null) . " iconCheckboxActive");
            // line 207
            echo "    ";
        }
        // line 208
        echo "    ";
        if (($context["disabled"] ?? null)) {
            // line 209
            echo "      ";
            $context["_wrapperClass"] = (($context["_wrapperClass"] ?? null) . " checkboxDisabled");
            // line 210
            echo "    ";
        }
        // line 211
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["_wrapperClass"] ?? null), "html", null, true);
        echo "\" data-icon=\"iconCheckbox\">
      <input class=\"checkbox\" type=\"checkbox\" ";
        // line 212
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 217
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 218
        echo "  ";
        ob_start();
        // line 219
        echo "    <div class=\"radioWrapper left iconRadio";
        if (($context["checked"] ?? null)) {
            echo " iconRadioActive";
        }
        echo " ";
        if (($context["disabled"] ?? null)) {
            echo " radioboxDisabled";
        }
        echo "\" data-icon=\"iconRadio\">
      <input class=\"radiobox\" type=\"radio\" ";
        // line 220
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 225
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 226
        echo "  ";
        ob_start();
        // line 227
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 228
            echo "      ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 230
            echo "      <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            echo "
        ";
            // line 232
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            echo "
        ";
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget');
            echo "
        ";
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget');
            echo "
      </div>
    ";
        }
        // line 237
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 240
    public function block_date_widget($context, array $blocks = [])
    {
        // line 241
        echo "  ";
        ob_start();
        // line 242
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 243
            echo "      ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 245
            echo "      <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 246
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 247
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 248
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 249
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 250
            echo "
      </div>
    ";
        }
        // line 253
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 256
    public function block_time_widget($context, array $blocks = [])
    {
        // line 257
        echo "  ";
        ob_start();
        // line 258
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 259
            echo "      ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 261
            echo "      <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 262
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget', ["attr" => ["size" => "1"]]);
            echo ":";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget', ["attr" => ["size" => "1"]]);
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget', ["attr" => ["size" => "1"]]);
            }
            // line 263
            echo "      </div>
    ";
        }
        // line 265
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 268
    public function block_number_widget($context, array $blocks = [])
    {
        // line 269
        echo "  ";
        ob_start();
        // line 270
        echo "    ";
        // line 271
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 272
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 276
    public function block_integer_widget($context, array $blocks = [])
    {
        // line 277
        echo "  ";
        ob_start();
        // line 278
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 279
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 283
    public function block_money_widget($context, array $blocks = [])
    {
        // line 284
        echo "  ";
        ob_start();
        // line 285
        echo "    ";
        echo twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)]);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 289
    public function block_url_widget($context, array $blocks = [])
    {
        // line 290
        echo "  ";
        ob_start();
        // line 291
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 292
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 296
    public function block_search_widget($context, array $blocks = [])
    {
        // line 297
        echo "  ";
        ob_start();
        // line 298
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "search")) : ("search"));
        // line 299
        echo "      ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 303
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 304
        echo "  ";
        ob_start();
        // line 305
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 306
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 310
    public function block_password_widget($context, array $blocks = [])
    {
        // line 311
        echo "  ";
        ob_start();
        // line 312
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 313
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    <div class=\"clearContainer\"></div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 318
    public function block_hidden_widget($context, array $blocks = [])
    {
        // line 319
        echo "  ";
        ob_start();
        // line 320
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 321
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 325
    public function block_email_widget($context, array $blocks = [])
    {
        // line 326
        echo "  ";
        ob_start();
        // line 327
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 328
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 337
    public function block_form_label($context, array $blocks = [])
    {
        // line 338
        echo "  ";
        ob_start();
        // line 339
        echo "    ";
        if ( !($context["compound"] ?? null)) {
            // line 340
            echo "      ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            // line 341
            echo "    ";
        }
        // line 342
        echo "    ";
        if (($context["required"] ?? null)) {
            // line 343
            echo "      ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            // line 344
            echo "    ";
        }
        // line 345
        echo "    ";
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 346
            echo "      ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
            // line 347
            echo "    ";
        }
        // line 348
        echo "    ";
        if (twig_in_filter("checkbox", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "block_prefixes", []))) {
            // line 349
            echo "      ";
            $context["_labelClass"] = "labelCheck";
            // line 350
            echo "    ";
        } else {
            // line 351
            echo "      ";
            $context["_labelClass"] = "labelInput";
            // line 352
            echo "    ";
        }
        // line 353
        echo "    ";
        if (( !$this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true) ||  !(twig_in_filter(" labelCheck ", ((" " . $this->getAttribute(($context["label_attr"] ?? null), "class", [])) . " ")) || twig_in_filter(" labelInput ", ((" " . $this->getAttribute(($context["label_attr"] ?? null), "class", [])) . " "))))) {
            // line 354
            echo "      ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["_labelClass"] ?? null)))]);
            // line 355
            echo "    ";
        }
        // line 356
        echo "    <label ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
        if (($context["required"] ?? null)) {
            echo "<span class=\"required\">*</span>";
        }
        echo "</label>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 365
    public function block_repeated_row($context, array $blocks = [])
    {
        // line 366
        echo "  ";
        ob_start();
        // line 367
        echo "  ";
        // line 371
        echo "  ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 375
    public function block_form_row($context, array $blocks = [])
    {
        // line 376
        echo "  ";
        ob_start();
        // line 377
        echo "    ";
        $context["_isCollectionItem"] = twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", []), "vars", []), "block_prefixes", [], "array"));
        // line 378
        echo "    <div";
        echo ((($context["_isCollectionItem"] ?? null)) ? (" class=\"collectionItem\"") : (""));
        echo ">
      ";
        // line 379
        if (twig_in_filter("checkbox", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "block_prefixes", []))) {
            // line 380
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        ";
            // line 381
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
      ";
        } else {
            // line 383
            echo "        ";
            if ( !($context["_isCollectionItem"] ?? null)) {
                // line 384
                echo "          ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label');
                echo "
        ";
            }
            // line 386
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
      ";
        }
        // line 388
        echo "    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 392
    public function block_hidden_row($context, array $blocks = [])
    {
        // line 393
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    // line 398
    public function block_form_enctype($context, array $blocks = [])
    {
        // line 399
        echo "  ";
        ob_start();
        // line 400
        echo "    ";
        if (($context["multipart"] ?? null)) {
            echo "enctype=\"multipart/form-data\"";
        }
        // line 401
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 404
    public function block_form_rest($context, array $blocks = [])
    {
        // line 405
        echo "  ";
        ob_start();
        // line 406
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 407
            echo "      ";
            if ( !$this->getAttribute($context["child"], "rendered", [])) {
                // line 408
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
      ";
            }
            // line 410
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 411
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 414
    public function block_acl_widget($context, array $blocks = [])
    {
        // line 415
        echo "  ";
        ob_start();
        // line 416
        echo "
    ";
        // line 417
        $context["prototype"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ace", []), "vars", []), "prototype", []), 'widget');
        // line 418
        echo "    <table id=\"listFilterPermission\" class=\"listFilterContainer clear permissionsTable tableCore ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "ace", [])) == 0)) {
            echo "hidePermissions";
        }
        echo "\">
      <thead id=\"permissionsHead\" data-prototype=\"";
        // line 419
        echo twig_escape_filter($this->env, ($context["prototype"] ?? null), "html", null, true);
        echo "\">
        <tr class=\"doNotFilter\">
          <th>
            <label for=\"inputFilterPermission\" class=\"labelInput left\">";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.fields.filter"), "html", null, true);
        echo "</label>
            <input id=\"inputFilterPermission\" type=\"text\" class=\"input left listFilterInput\"/>
          </th>
          ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ace", []), "vars", []), "prototype", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 426
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) {
                // line 427
                echo "              <th>
                <div id=\"";
                // line 428
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "attr", []), "class", []), "html", null, true);
                echo "\" class=\"headTagWrapper smallText ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "attr", []), "class", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "attr", []), "class", []), "html", null, true);
                echo "</div>
              </th>
            ";
            }
            // line 431
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 432
        echo "          <th></th>
        </tr>
      </thead>
      <tbody id=\"permissionsBody\">
        ";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "ace", []));
        foreach ($context['_seq'] as $context["_key"] => $context["ace"]) {
            // line 437
            echo "          ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["ace"], 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        echo "      </tbody>
    </table>

    ";
        // line 442
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "ace", [])) == 0)) {
            // line 443
            echo "      <p id=\"permissionsDescription\" class=\"description left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.fields.no_user_group_defined"), "html", null, true);
            echo "</p>
    ";
        }
        // line 445
        echo "    <div class=\"clearContainer\"></div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 449
    public function block_aclElement_widget($context, array $blocks = [])
    {
        // line 450
        echo "  ";
        ob_start();
        // line 451
        echo "
    ";
        // line 452
        $context["prototype"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ace", []), "vars", []), "prototype", []), 'widget');
        // line 453
        echo "    <table class=\"clear permissionsElementTable tableCore ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "ace", [])) == 0)) {
            echo "hidePermissions";
        }
        echo "\">
      <thead id=\"permissionsElementHead\" data-prototype=\"";
        // line 454
        echo twig_escape_filter($this->env, ($context["prototype"] ?? null), "html", null, true);
        echo "\">
        <tr>
          ";
        // line 456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ace", []), "vars", []), "prototype", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 457
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) {
                // line 458
                echo "              <th>
                <div id=\"";
                // line 459
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "attr", []), "class", []), "html", null, true);
                echo "\" class=\"headTagWrapper smallText ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "attr", []), "class", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "attr", []), "class", []), "html", null, true);
                echo "</div>
              </th>
            ";
            }
            // line 462
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 463
        echo "          <th></th>
        </tr>
      </thead>
      <tbody id=\"permissionsElementBody\">
        ";
        // line 467
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "ace", []));
        foreach ($context['_seq'] as $context["_key"] => $context["ace"]) {
            // line 468
            echo "          ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["ace"], 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "      </tbody>
    </table>
    <div class=\"clearContainer\"></div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 476
    public function block_tagbox_widget($context, array $blocks = [])
    {
        // line 477
        echo "  ";
        ob_start();
        // line 478
        echo "    <div data-perm-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "class", []), "html", null, true);
        echo "\" class=\"checkWrapper smallText ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "class", []), "html", null, true);
        echo (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "checked", [])) ? (" active") : (""));
        echo "\"
         data-icon-on=\"active\" data-icon-off=\"\" >
      ";
        // line 480
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "class", []), "html", null, true);
        echo "
      <input class=\"checkbox\" type=\"checkbox\" ";
        // line 481
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ((($context["checked"] ?? null)) ? (" checked=\"checked\"") : (""));
        echo " />
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 486
    public function block_ace_widget($context, array $blocks = [])
    {
        // line 487
        echo "  ";
        ob_start();
        // line 488
        echo "    <tr class=\"filterItem\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
      ";
        // line 489
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 490
            echo "        <td>
          ";
            // line 491
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "block_prefixes", []), 1, []) == "text")) {
                // line 492
                echo "              <div class=\"";
                if ((twig_slice($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", []), "value", []), 0, 1) == "u")) {
                    echo "iconUser ";
                } else {
                    echo " iconGroup";
                }
                echo " userType\">
              <span class=\"labelInput\">";
                // line 493
                echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", []), "value", []), 2), ":")), "html", null, true);
                echo "</span>
            </div>
            ";
                // line 495
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
          ";
            } else {
                // line 497
                echo "              ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) {
                    // line 498
                    echo "                ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                    echo "
              ";
                }
                // line 500
                echo "          ";
            }
            // line 501
            echo "        </td>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        echo "      <td class=\"iconColumn\">
        <span class=\"iconRemove removeUserGroup hover-highlight-effect\"></span>
      </td>
    </tr>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 516
    public function block_form_rows($context, array $blocks = [])
    {
        // line 517
        echo "  ";
        ob_start();
        // line 518
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 519
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
     <div class=\"clearContainer\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 525
    public function block_widget_attributes($context, array $blocks = [])
    {
        // line 526
        echo "  ";
        ob_start();
        // line 527
        echo "    id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        if (($context["read_only"] ?? null)) {
            echo " readonly=\"readonly\"";
        }
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        if (($context["max_length"] ?? null)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, ($context["max_length"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["pattern"] ?? null)) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, ($context["pattern"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 528
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], [], ($context["translation_domain"] ?? null)), "html", null, true);
                echo "\" ";
            } else {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 529
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 532
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        // line 533
        echo "  ";
        ob_start();
        // line 534
        echo "    ";
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" ";
        }
        // line 535
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 536
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 539
    public function block_widget_attribute_class($context, array $blocks = [])
    {
        // line 540
        echo "  ";
        $context["cssClass"] = twig_split_filter($this->env,         $this->renderBlock("widget_attributes", $context, $blocks), "class");
        // line 541
        echo "
  ";
        // line 543
        echo "  ";
        if ($this->getAttribute(($context["cssClass"] ?? null), 1, [], "array", true, true)) {
            // line 544
            echo "    ";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["cssClass"] ?? null), 1, [], "array"), ["\"" => "", "=" => ""]), "html", null, true);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1826 => 544,  1823 => 543,  1820 => 541,  1817 => 540,  1814 => 539,  1809 => 536,  1796 => 535,  1789 => 534,  1786 => 533,  1783 => 532,  1778 => 529,  1758 => 528,  1733 => 527,  1730 => 526,  1727 => 525,  1722 => 522,  1712 => 519,  1707 => 518,  1704 => 517,  1701 => 516,  1692 => 503,  1685 => 501,  1682 => 500,  1676 => 498,  1673 => 497,  1668 => 495,  1663 => 493,  1654 => 492,  1652 => 491,  1649 => 490,  1645 => 489,  1640 => 488,  1637 => 487,  1634 => 486,  1620 => 481,  1616 => 480,  1607 => 478,  1604 => 477,  1601 => 476,  1593 => 470,  1584 => 468,  1580 => 467,  1574 => 463,  1568 => 462,  1558 => 459,  1555 => 458,  1552 => 457,  1548 => 456,  1543 => 454,  1536 => 453,  1534 => 452,  1531 => 451,  1528 => 450,  1525 => 449,  1519 => 445,  1513 => 443,  1511 => 442,  1506 => 439,  1497 => 437,  1493 => 436,  1487 => 432,  1481 => 431,  1471 => 428,  1468 => 427,  1465 => 426,  1461 => 425,  1455 => 422,  1449 => 419,  1442 => 418,  1440 => 417,  1437 => 416,  1434 => 415,  1431 => 414,  1426 => 411,  1420 => 410,  1414 => 408,  1411 => 407,  1406 => 406,  1403 => 405,  1400 => 404,  1395 => 401,  1390 => 400,  1387 => 399,  1384 => 398,  1377 => 393,  1374 => 392,  1368 => 388,  1362 => 386,  1356 => 384,  1353 => 383,  1348 => 381,  1343 => 380,  1341 => 379,  1336 => 378,  1333 => 377,  1330 => 376,  1327 => 375,  1319 => 371,  1317 => 367,  1314 => 366,  1311 => 365,  1287 => 356,  1284 => 355,  1281 => 354,  1278 => 353,  1275 => 352,  1272 => 351,  1269 => 350,  1266 => 349,  1263 => 348,  1260 => 347,  1257 => 346,  1254 => 345,  1251 => 344,  1248 => 343,  1245 => 342,  1242 => 341,  1239 => 340,  1236 => 339,  1233 => 338,  1230 => 337,  1222 => 328,  1219 => 327,  1216 => 326,  1213 => 325,  1205 => 321,  1202 => 320,  1199 => 319,  1196 => 318,  1187 => 313,  1184 => 312,  1181 => 311,  1178 => 310,  1170 => 306,  1167 => 305,  1164 => 304,  1161 => 303,  1153 => 299,  1150 => 298,  1147 => 297,  1144 => 296,  1136 => 292,  1133 => 291,  1130 => 290,  1127 => 289,  1119 => 285,  1116 => 284,  1113 => 283,  1105 => 279,  1102 => 278,  1099 => 277,  1096 => 276,  1088 => 272,  1085 => 271,  1083 => 270,  1080 => 269,  1077 => 268,  1072 => 265,  1068 => 263,  1060 => 262,  1055 => 261,  1049 => 259,  1046 => 258,  1043 => 257,  1040 => 256,  1035 => 253,  1030 => 250,  1028 => 249,  1027 => 248,  1026 => 247,  1025 => 246,  1020 => 245,  1014 => 243,  1011 => 242,  1008 => 241,  1005 => 240,  1000 => 237,  994 => 234,  990 => 233,  986 => 232,  982 => 231,  977 => 230,  971 => 228,  968 => 227,  965 => 226,  962 => 225,  946 => 220,  935 => 219,  932 => 218,  929 => 217,  913 => 212,  908 => 211,  905 => 210,  902 => 209,  899 => 208,  896 => 207,  893 => 206,  890 => 205,  887 => 204,  885 => 203,  882 => 202,  879 => 201,  874 => 198,  869 => 195,  850 => 193,  832 => 192,  826 => 190,  824 => 189,  820 => 187,  814 => 185,  811 => 184,  805 => 182,  799 => 180,  796 => 179,  794 => 178,  789 => 175,  765 => 173,  762 => 172,  759 => 171,  756 => 170,  754 => 169,  751 => 168,  748 => 167,  745 => 166,  743 => 165,  740 => 164,  723 => 163,  720 => 162,  717 => 161,  715 => 160,  710 => 159,  708 => 158,  704 => 157,  701 => 156,  698 => 155,  696 => 154,  691 => 153,  684 => 150,  681 => 149,  678 => 148,  672 => 146,  670 => 145,  665 => 144,  662 => 143,  659 => 142,  653 => 140,  651 => 139,  646 => 138,  643 => 137,  640 => 136,  637 => 135,  631 => 131,  622 => 128,  618 => 127,  615 => 126,  611 => 125,  604 => 124,  601 => 123,  598 => 122,  592 => 118,  584 => 116,  579 => 115,  575 => 114,  570 => 113,  567 => 112,  564 => 111,  559 => 108,  553 => 106,  550 => 105,  544 => 103,  538 => 101,  535 => 100,  532 => 99,  529 => 98,  526 => 97,  521 => 94,  518 => 93,  514 => 91,  507 => 89,  505 => 88,  504 => 87,  503 => 86,  501 => 85,  497 => 84,  494 => 83,  492 => 82,  485 => 81,  483 => 80,  478 => 79,  475 => 78,  467 => 74,  464 => 73,  461 => 72,  458 => 71,  455 => 70,  452 => 69,  449 => 68,  446 => 67,  443 => 66,  434 => 60,  429 => 59,  423 => 57,  421 => 56,  418 => 55,  414 => 53,  411 => 52,  407 => 50,  405 => 49,  400 => 48,  397 => 47,  394 => 46,  389 => 43,  375 => 41,  370 => 38,  367 => 37,  363 => 35,  356 => 33,  354 => 32,  353 => 31,  352 => 30,  350 => 29,  346 => 28,  343 => 27,  341 => 26,  323 => 24,  321 => 23,  316 => 22,  314 => 21,  311 => 20,  308 => 19,  305 => 18,  302 => 17,  297 => 14,  291 => 12,  285 => 10,  282 => 9,  279 => 8,  276 => 7,  272 => 539,  269 => 538,  267 => 532,  264 => 531,  262 => 525,  259 => 524,  257 => 516,  254 => 515,  247 => 509,  245 => 486,  242 => 485,  240 => 476,  237 => 475,  235 => 449,  232 => 448,  230 => 414,  227 => 413,  225 => 404,  222 => 403,  220 => 398,  217 => 397,  214 => 395,  212 => 392,  209 => 391,  207 => 375,  204 => 374,  202 => 365,  199 => 364,  193 => 359,  191 => 337,  188 => 336,  182 => 331,  180 => 325,  177 => 324,  175 => 318,  172 => 317,  170 => 310,  167 => 309,  165 => 303,  162 => 302,  160 => 296,  157 => 295,  155 => 289,  152 => 288,  150 => 283,  147 => 282,  145 => 276,  142 => 275,  140 => 268,  137 => 267,  135 => 256,  132 => 255,  130 => 240,  127 => 239,  125 => 225,  122 => 224,  120 => 217,  117 => 216,  115 => 201,  112 => 200,  110 => 135,  107 => 134,  105 => 122,  102 => 121,  100 => 111,  97 => 110,  95 => 97,  92 => 96,  90 => 78,  87 => 77,  85 => 66,  82 => 65,  80 => 46,  77 => 45,  75 => 17,  72 => 16,  70 => 7,  67 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MapbenderCoreBundle:form:fields.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/form/fields.html.twig");
    }
}
