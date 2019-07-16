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
class __TwigTemplate_4c0199c5e9751deac1db0e002bf5a95861e10de38e02a20cb36e7afdf2fab8bd extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:form:fields.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_form_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        // line 8
        echo "  ";
        ob_start();
        // line 9
        echo "    ";
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 18
        echo "  ";
        ob_start();
        // line 19
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 20
        echo "
    ";
        // line 21
        if ((($context["type"] ?? $this->getContext($context, "type")) != "hidden")) {
            // line 22
            echo "      <div class=\"inputWrapper ";
            $this->displayBlock("widget_attribute_class", $context, $blocks);
            echo "\">
        ";
            // line 23
            ob_start();
            // line 24
            echo "          <input class=\"";
            if ((($context["type"] ?? $this->getContext($context, "type")) != "file")) {
                echo "input validationInput";
            }
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>

          ";
            // line 26
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 27
                echo "            <span class=\"validationMsgBox smallText\">
              ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
    ";
        }
        // line 43
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", []) && twig_in_filter("allow_delete", twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", []), "vars", [])))) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", []), "vars", []), "allow_delete", [], "array"))) {
            // line 53
            echo "        <a href=\"#delete\" class=\"collectionRemove iconRemove hover-highlight-effect\"></a>
      ";
        }
        // line 55
        echo "
      ";
        // line 56
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", []))) {
            // line 57
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
      ";
        }
        // line 59
        echo "      ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
      ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </div>

  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_collection_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 67
        echo "  ";
        ob_start();
        // line 68
        echo "    ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 69
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')]);
            // line 70
            echo "      ";
        }
        // line 71
        echo "      ";
        if (($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) {
            // line 72
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["data-allow-delete" => 1]);
            // line 73
            echo "      ";
        }
        // line 74
        echo "      ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_textarea_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

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
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
      ";
        // line 82
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 83
            echo "        <span class=\"validationMsgBox smallText\">
          ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_choice_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 98
        echo "  ";
        ob_start();
        // line 99
        echo "    ";
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 122
    public function block_choice_widget_expanded_sortable($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded_sortable"));

        // line 123
        echo "  ";
        ob_start();
        // line 124
        echo "  <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "attr", []), "data-sortable", [], "array"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        echo "  ";
        ob_start();
        // line 137
        echo "    ";
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 138
            echo "      <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " multiple=\"multiple\">
        ";
            // line 139
            if ( !(null === ($context["empty_value"] ?? $this->getContext($context, "empty_value")))) {
                // line 140
                echo "          <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</option>
        ";
            }
            // line 142
            echo "        ";
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 143
                echo "          ";
                $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
                // line 144
                echo "          ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
          ";
                // line 145
                if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                    // line 146
                    echo "            <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
          ";
                }
                // line 148
                echo "        ";
            }
            // line 149
            echo "        ";
            $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
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
            if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === ($context["empty_value"] ?? $this->getContext($context, "empty_value"))))) {
                // line 159
                echo "            <option class=\"opt-0\" selected=\"selected\" value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</option>
            ";
                // line 160
                $context["selectedValue"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                // line 161
                echo "          ";
            }
            // line 162
            echo "
          ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
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
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    // line 170
                    echo "              ";
                    $context["selectedValue"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                    // line 171
                    echo "            ";
                }
                // line 172
                echo "
            <option class=\"opt-";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "\" ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\" ";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
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
            if ((twig_length_filter($this->env, ($context["selectedValue"] ?? $this->getContext($context, "selectedValue"))) == 0)) {
                // line 179
                echo "            ";
                if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === ($context["empty_value"] ?? $this->getContext($context, "empty_value"))))) {
                    // line 180
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                    echo "
            ";
                } else {
                    // line 182
                    echo "              ";
                    echo twig_escape_filter($this->env, ($context["firstValue"] ?? $this->getContext($context, "firstValue")), "html", null, true);
                    echo "
            ";
                }
                // line 184
                echo "          ";
            } else {
                // line 185
                echo "            ";
                echo twig_escape_filter($this->env, ($context["selectedValue"] ?? $this->getContext($context, "selectedValue")), "html", null, true);
                echo "
          ";
            }
            // line 187
            echo "        </div>
        <ul class=\"dropdownList\">
          ";
            // line 189
            if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === ($context["empty_value"] ?? $this->getContext($context, "empty_value"))))) {
                // line 190
                echo "            <li class=\"item-0\" value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</li>
          ";
            }
            // line 192
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 201
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            // line 206
            echo "      ";
            $context["_wrapperClass"] = (($context["_wrapperClass"] ?? $this->getContext($context, "_wrapperClass")) . " iconCheckboxActive");
            // line 207
            echo "    ";
        }
        // line 208
        echo "    ";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            // line 209
            echo "      ";
            $context["_wrapperClass"] = (($context["_wrapperClass"] ?? $this->getContext($context, "_wrapperClass")) . " checkboxDisabled");
            // line 210
            echo "    ";
        }
        // line 211
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["_wrapperClass"] ?? $this->getContext($context, "_wrapperClass")), "html", null, true);
        echo "\" data-icon=\"iconCheckbox\">
      <input class=\"checkbox\" type=\"checkbox\" ";
        // line 212
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 217
    public function block_radio_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 218
        echo "  ";
        ob_start();
        // line 219
        echo "    <div class=\"radioWrapper left iconRadio";
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " iconRadioActive";
        }
        echo " ";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " radioboxDisabled";
        }
        echo "\" data-icon=\"iconRadio\">
      <input class=\"radiobox\" type=\"radio\" ";
        // line 220
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 225
    public function block_datetime_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 226
        echo "  ";
        ob_start();
        // line 227
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", []), 'errors');
            echo "
        ";
            // line 232
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", []), 'errors');
            echo "
        ";
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", []), 'widget');
            echo "
        ";
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", []), 'widget');
            echo "
      </div>
    ";
        }
        // line 237
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 240
    public function block_date_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 241
        echo "  ";
        ob_start();
        // line 242
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
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
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), ["{{ year }}" =>             // line 247
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", []), 'widget'), "{{ month }}" =>             // line 248
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", []), 'widget'), "{{ day }}" =>             // line 249
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", []), 'widget')]);
            // line 250
            echo "
      </div>
    ";
        }
        // line 253
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 256
    public function block_time_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 257
        echo "  ";
        ob_start();
        // line 258
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", []), 'widget', ["attr" => ["size" => "1"]]);
            echo ":";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", []), 'widget', ["attr" => ["size" => "1"]]);
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", []), 'widget', ["attr" => ["size" => "1"]]);
            }
            // line 263
            echo "      </div>
    ";
        }
        // line 265
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 268
    public function block_number_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_widget"));

        // line 269
        echo "  ";
        ob_start();
        // line 270
        echo "    ";
        // line 271
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 272
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 276
    public function block_integer_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 277
        echo "  ";
        ob_start();
        // line 278
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 279
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 283
    public function block_money_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 284
        echo "  ";
        ob_start();
        // line 285
        echo "    ";
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), ["{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)]);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 289
    public function block_url_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_widget"));

        // line 290
        echo "  ";
        ob_start();
        // line 291
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 292
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 296
    public function block_search_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_widget"));

        // line 297
        echo "  ";
        ob_start();
        // line 298
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 299
        echo "      ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 303
    public function block_percent_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 304
        echo "  ";
        ob_start();
        // line 305
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 306
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 310
    public function block_password_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        // line 311
        echo "  ";
        ob_start();
        // line 312
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 313
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    <div class=\"clearContainer\"></div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 318
    public function block_hidden_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 319
        echo "  ";
        ob_start();
        // line 320
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 321
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 325
    public function block_email_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_widget"));

        // line 326
        echo "  ";
        ob_start();
        // line 327
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 328
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 337
    public function block_form_label($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 338
        echo "  ";
        ob_start();
        // line 339
        echo "    ";
        if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 340
            echo "      ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), ["for" => ($context["id"] ?? $this->getContext($context, "id"))]);
            // line 341
            echo "    ";
        }
        // line 342
        echo "    ";
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 343
            echo "      ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            // line 344
            echo "    ";
        }
        // line 345
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 346
            echo "      ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 347
            echo "    ";
        }
        // line 348
        echo "    ";
        if (twig_in_filter("checkbox", $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "block_prefixes", []))) {
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
        if (( !$this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true) ||  !(twig_in_filter(" labelCheck ", ((" " . $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "class", [])) . " ")) || twig_in_filter(" labelInput ", ((" " . $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "class", [])) . " "))))) {
            // line 354
            echo "      ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["_labelClass"] ?? $this->getContext($context, "_labelClass"))))]);
            // line 355
            echo "    ";
        }
        // line 356
        echo "    <label ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo "<span class=\"required\">*</span>";
        }
        echo "</label>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 365
    public function block_repeated_row($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "repeated_row"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 375
    public function block_form_row($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 376
        echo "  ";
        ob_start();
        // line 377
        echo "    ";
        $context["_isCollectionItem"] = twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", []), "vars", []), "block_prefixes", [], "array"));
        // line 378
        echo "    <div";
        echo ((($context["_isCollectionItem"] ?? $this->getContext($context, "_isCollectionItem"))) ? (" class=\"collectionItem\"") : (""));
        echo ">
      ";
        // line 379
        if (twig_in_filter("checkbox", $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "block_prefixes", []))) {
            // line 380
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        ";
            // line 381
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
      ";
        } else {
            // line 383
            echo "        ";
            if ( !($context["_isCollectionItem"] ?? $this->getContext($context, "_isCollectionItem"))) {
                // line 384
                echo "          ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
                echo "
        ";
            }
            // line 386
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
      ";
        }
        // line 388
        echo "    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 392
    public function block_hidden_row($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 393
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 398
    public function block_form_enctype($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 399
        echo "  ";
        ob_start();
        // line 400
        echo "    ";
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        // line 401
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 404
    public function block_form_rest($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_rest"));

        // line 405
        echo "  ";
        ob_start();
        // line 406
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 414
    public function block_acl_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "acl_widget"));

        // line 415
        echo "  ";
        ob_start();
        // line 416
        echo "
    ";
        // line 417
        $context["prototype"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ace", []), "vars", []), "prototype", []), 'widget');
        // line 418
        echo "    <table id=\"listFilterPermission\" class=\"listFilterContainer clear permissionsTable tableCore ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ace", [])) == 0)) {
            echo "hidePermissions";
        }
        echo "\">
      <thead id=\"permissionsHead\" data-prototype=\"";
        // line 419
        echo twig_escape_filter($this->env, ($context["prototype"] ?? $this->getContext($context, "prototype")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ace", []), "vars", []), "prototype", []));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ace", []));
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
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ace", [])) == 0)) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 449
    public function block_aclElement_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aclElement_widget"));

        // line 450
        echo "  ";
        ob_start();
        // line 451
        echo "
    ";
        // line 452
        $context["prototype"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ace", []), "vars", []), "prototype", []), 'widget');
        // line 453
        echo "    <table class=\"clear permissionsElementTable tableCore ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ace", [])) == 0)) {
            echo "hidePermissions";
        }
        echo "\">
      <thead id=\"permissionsElementHead\" data-prototype=\"";
        // line 454
        echo twig_escape_filter($this->env, ($context["prototype"] ?? $this->getContext($context, "prototype")), "html", null, true);
        echo "\">
        <tr>
          ";
        // line 456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ace", []), "vars", []), "prototype", []));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ace", []));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 476
    public function block_tagbox_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tagbox_widget"));

        // line 477
        echo "  ";
        ob_start();
        // line 478
        echo "    <div data-perm-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "attr", []), "class", []), "html", null, true);
        echo "\" class=\"checkWrapper smallText ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "attr", []), "class", []), "html", null, true);
        echo (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "checked", [])) ? (" active") : (""));
        echo "\"
         data-icon-on=\"active\" data-icon-off=\"\" >
      ";
        // line 480
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "attr", []), "class", []), "html", null, true);
        echo "
      <input class=\"checkbox\" type=\"checkbox\" ";
        // line 481
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        echo ((($context["checked"] ?? $this->getContext($context, "checked"))) ? (" checked=\"checked\"") : (""));
        echo " />
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 486
    public function block_ace_widget($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ace_widget"));

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
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 516
    public function block_form_rows($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_rows"));

        // line 517
        echo "  ";
        ob_start();
        // line 518
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 525
    public function block_widget_attributes($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 526
        echo "  ";
        ob_start();
        // line 527
        echo "    id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["read_only"] ?? $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        if (($context["max_length"] ?? $this->getContext($context, "max_length"))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, ($context["max_length"] ?? $this->getContext($context, "max_length")), "html", null, true);
            echo "\"";
        }
        if (($context["pattern"] ?? $this->getContext($context, "pattern"))) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, ($context["pattern"] ?? $this->getContext($context, "pattern")), "html", null, true);
            echo "\"";
        }
        // line 528
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], [], ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 532
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 533
        echo "  ";
        ob_start();
        // line 534
        echo "    ";
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" ";
        }
        // line 535
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 539
    public function block_widget_attribute_class($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attribute_class"));

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
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["cssClass"] ?? $this->getContext($context, "cssClass")), 1, [], "array"), ["\"" => "", "=" => ""]), "html", null, true);
            echo "
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2051 => 544,  2048 => 543,  2045 => 541,  2042 => 540,  2036 => 539,  2028 => 536,  2015 => 535,  2008 => 534,  2005 => 533,  1999 => 532,  1991 => 529,  1971 => 528,  1946 => 527,  1943 => 526,  1937 => 525,  1929 => 522,  1919 => 519,  1914 => 518,  1911 => 517,  1905 => 516,  1893 => 503,  1886 => 501,  1883 => 500,  1877 => 498,  1874 => 497,  1869 => 495,  1864 => 493,  1855 => 492,  1853 => 491,  1850 => 490,  1846 => 489,  1841 => 488,  1838 => 487,  1832 => 486,  1815 => 481,  1811 => 480,  1802 => 478,  1799 => 477,  1793 => 476,  1782 => 470,  1773 => 468,  1769 => 467,  1763 => 463,  1757 => 462,  1747 => 459,  1744 => 458,  1741 => 457,  1737 => 456,  1732 => 454,  1725 => 453,  1723 => 452,  1720 => 451,  1717 => 450,  1711 => 449,  1702 => 445,  1696 => 443,  1694 => 442,  1689 => 439,  1680 => 437,  1676 => 436,  1670 => 432,  1664 => 431,  1654 => 428,  1651 => 427,  1648 => 426,  1644 => 425,  1638 => 422,  1632 => 419,  1625 => 418,  1623 => 417,  1620 => 416,  1617 => 415,  1611 => 414,  1603 => 411,  1597 => 410,  1591 => 408,  1588 => 407,  1583 => 406,  1580 => 405,  1574 => 404,  1566 => 401,  1561 => 400,  1558 => 399,  1552 => 398,  1542 => 393,  1536 => 392,  1527 => 388,  1521 => 386,  1515 => 384,  1512 => 383,  1507 => 381,  1502 => 380,  1500 => 379,  1495 => 378,  1492 => 377,  1489 => 376,  1483 => 375,  1472 => 371,  1470 => 367,  1467 => 366,  1461 => 365,  1434 => 356,  1431 => 355,  1428 => 354,  1425 => 353,  1422 => 352,  1419 => 351,  1416 => 350,  1413 => 349,  1410 => 348,  1407 => 347,  1404 => 346,  1401 => 345,  1398 => 344,  1395 => 343,  1392 => 342,  1389 => 341,  1386 => 340,  1383 => 339,  1380 => 338,  1374 => 337,  1363 => 328,  1360 => 327,  1357 => 326,  1351 => 325,  1340 => 321,  1337 => 320,  1334 => 319,  1328 => 318,  1316 => 313,  1313 => 312,  1310 => 311,  1304 => 310,  1293 => 306,  1290 => 305,  1287 => 304,  1281 => 303,  1270 => 299,  1267 => 298,  1264 => 297,  1258 => 296,  1247 => 292,  1244 => 291,  1241 => 290,  1235 => 289,  1224 => 285,  1221 => 284,  1215 => 283,  1204 => 279,  1201 => 278,  1198 => 277,  1192 => 276,  1181 => 272,  1178 => 271,  1176 => 270,  1173 => 269,  1167 => 268,  1159 => 265,  1155 => 263,  1147 => 262,  1142 => 261,  1136 => 259,  1133 => 258,  1130 => 257,  1124 => 256,  1116 => 253,  1111 => 250,  1109 => 249,  1108 => 248,  1107 => 247,  1106 => 246,  1101 => 245,  1095 => 243,  1092 => 242,  1089 => 241,  1083 => 240,  1075 => 237,  1069 => 234,  1065 => 233,  1061 => 232,  1057 => 231,  1052 => 230,  1046 => 228,  1043 => 227,  1040 => 226,  1034 => 225,  1015 => 220,  1004 => 219,  1001 => 218,  995 => 217,  976 => 212,  971 => 211,  968 => 210,  965 => 209,  962 => 208,  959 => 207,  956 => 206,  953 => 205,  950 => 204,  948 => 203,  945 => 202,  939 => 201,  931 => 198,  926 => 195,  907 => 193,  889 => 192,  883 => 190,  881 => 189,  877 => 187,  871 => 185,  868 => 184,  862 => 182,  856 => 180,  853 => 179,  851 => 178,  846 => 175,  822 => 173,  819 => 172,  816 => 171,  813 => 170,  811 => 169,  808 => 168,  805 => 167,  802 => 166,  800 => 165,  797 => 164,  780 => 163,  777 => 162,  774 => 161,  772 => 160,  767 => 159,  765 => 158,  761 => 157,  758 => 156,  755 => 155,  753 => 154,  748 => 153,  741 => 150,  738 => 149,  735 => 148,  729 => 146,  727 => 145,  722 => 144,  719 => 143,  716 => 142,  710 => 140,  708 => 139,  703 => 138,  700 => 137,  697 => 136,  691 => 135,  682 => 131,  673 => 128,  669 => 127,  666 => 126,  662 => 125,  655 => 124,  652 => 123,  646 => 122,  637 => 118,  629 => 116,  624 => 115,  620 => 114,  615 => 113,  612 => 112,  606 => 111,  598 => 108,  592 => 106,  589 => 105,  583 => 103,  577 => 101,  574 => 100,  571 => 99,  568 => 98,  562 => 97,  554 => 94,  551 => 93,  547 => 91,  540 => 89,  538 => 88,  537 => 87,  536 => 86,  534 => 85,  530 => 84,  527 => 83,  525 => 82,  518 => 81,  516 => 80,  511 => 79,  505 => 78,  494 => 74,  491 => 73,  488 => 72,  485 => 71,  482 => 70,  479 => 69,  476 => 68,  473 => 67,  467 => 66,  455 => 60,  450 => 59,  444 => 57,  442 => 56,  439 => 55,  435 => 53,  432 => 52,  428 => 50,  426 => 49,  421 => 48,  418 => 47,  412 => 46,  404 => 43,  390 => 41,  385 => 38,  382 => 37,  378 => 35,  371 => 33,  369 => 32,  368 => 31,  367 => 30,  365 => 29,  361 => 28,  358 => 27,  356 => 26,  338 => 24,  336 => 23,  331 => 22,  329 => 21,  326 => 20,  323 => 19,  320 => 18,  314 => 17,  306 => 14,  300 => 12,  294 => 10,  291 => 9,  288 => 8,  282 => 7,  275 => 539,  272 => 538,  270 => 532,  267 => 531,  265 => 525,  262 => 524,  260 => 516,  257 => 515,  250 => 509,  248 => 486,  245 => 485,  243 => 476,  240 => 475,  238 => 449,  235 => 448,  233 => 414,  230 => 413,  228 => 404,  225 => 403,  223 => 398,  220 => 397,  217 => 395,  215 => 392,  212 => 391,  210 => 375,  207 => 374,  205 => 365,  202 => 364,  196 => 359,  194 => 337,  191 => 336,  185 => 331,  183 => 325,  180 => 324,  178 => 318,  175 => 317,  173 => 310,  170 => 309,  168 => 303,  165 => 302,  163 => 296,  160 => 295,  158 => 289,  155 => 288,  153 => 283,  150 => 282,  148 => 276,  145 => 275,  143 => 268,  140 => 267,  138 => 256,  135 => 255,  133 => 240,  130 => 239,  128 => 225,  125 => 224,  123 => 217,  120 => 216,  118 => 201,  115 => 200,  113 => 135,  110 => 134,  108 => 122,  105 => 121,  103 => 111,  100 => 110,  98 => 97,  95 => 96,  93 => 78,  90 => 77,  88 => 66,  85 => 65,  83 => 46,  80 => 45,  78 => 17,  75 => 16,  73 => 7,  70 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
 Default Mapbender form theme
 Migrated to Mapbender from FOM v3.0.6.3
 See https://github.com/mapbender/fom/tree/v3.0.6.3/src/FOM/CoreBundle/Resources/views/Form/
#}

{% block form_widget %}
  {% spaceless %}
    {% if compound %}
      {{ block('form_widget_compound') }}
    {% else %}
      {{ block('form_widget_simple') }}
    {% endif %}
  {% endspaceless %}
{% endblock form_widget %}

{% block form_widget_simple %}
  {% spaceless %}
    {% set type = type|default('text') %}

    {% if type != 'hidden'%}
      <div class=\"inputWrapper {{ block('widget_attribute_class') }}\">
        {% spaceless %}
          <input class=\"{% if type != 'file' %}input validationInput{% endif %}\" {{block('widget_attributes')}} type=\"{{ type }}\" {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>

          {% if errors|length > 0 %}
            <span class=\"validationMsgBox smallText\">
              {% for error in errors %}
                {{
                  error.messagePluralization is null
                  ? error.messageTemplate|trans(error.messageParameters, 'validators')
                  : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')
                }}
              {% endfor %}
            </span>
          {% endif %}
        {% endspaceless %}
      </div>

    {% else %}
      <input class=\"hidden\" {{block('widget_attributes')}} type=\"{{ type }}\" {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    {% endif %}
  {% endspaceless %}
{% endblock form_widget_simple %}

{% block form_widget_compound %}
  {% spaceless %}
    <div {{ block('widget_container_attributes') }}>
      {% if form.vars.prototype is defined  and form.vars.allow_add is defined %}
      <a href=\"#add\" class=\"collectionAdd iconAdd hover-highlight-effect\"></a>
      {% endif %}
      {% if form.parent and 'allow_delete' in form.parent.vars | keys and form.parent.vars['allow_delete'] %}
        <a href=\"#delete\" class=\"collectionRemove iconRemove hover-highlight-effect\"></a>
      {% endif %}

      {% if form.parent is empty %}
      {{ form_errors(form) }}
      {% endif %}
      {{ block('form_rows') }}
      {{ form_rest(form) }}
    </div>

  {% endspaceless %}
{% endblock form_widget_compound %}

{% block collection_widget %}
  {% spaceless %}
    {% if prototype is defined %}
      {% set attr = attr|merge({'data-prototype': form_row(prototype) }) %}
      {% endif %}
      {% if allow_delete %}
      {% set attr = attr|merge({'data-allow-delete': 1 }) %}
      {% endif %}
      {{ block('form_widget') }}
    {% endspaceless %}
{% endblock collection_widget %}

{% block textarea_widget %}
  <div class=\"inputWrapper {{ block('widget_attribute_class') }}\">
    {% spaceless %}
      <textarea class=\"input validationInput\" {{ block('widget_attributes') }}>{{ value }}</textarea>
      {% if errors|length > 0 %}
        <span class=\"validationMsgBox smallText\">
          {% for error in errors %}
            {{
              error.messagePluralization is null
              ? error.messageTemplate|trans(error.messageParameters, 'validators')
              : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')
            }}
          {% endfor %}
        </span>
      {% endif %}
    {% endspaceless %}
  </div>
{% endblock textarea_widget %}

{% block choice_widget %}
  {% spaceless %}
    {% if expanded %}
      {% if form.vars.attr is defined and form.vars.attr['data-sortable'] is defined %}
        {{ block('choice_widget_expanded_sortable') }}
      {% else %}
        {{ block('choice_widget_expanded') }}
      {% endif %}
    {% else %}
      {{ block('choice_widget_collapsed') }}
    {% endif %}
  {% endspaceless %}
{% endblock choice_widget %}

{% block choice_widget_expanded %}
  {% spaceless %}
  <div {{ block('widget_container_attributes') }}>
    {% for child in form %}
    {{ form_widget(child) }}
    {{ form_label(child) }}
    {% endfor %}
  </div>
  {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_expanded_sortable %}
  {% spaceless %}
  <div class=\"{{ form.vars.attr['data-sortable'] }}\" {{ block('widget_container_attributes') }}>
    {% for child in form %}
      <div class=\"sortableItem\">
        {{ form_widget(child) }}
        {{ form_label(child) }}
      </div>
    {% endfor %}
  </div>
  {% endspaceless %}
{% endblock choice_widget_expanded_sortable %}

{% block choice_widget_collapsed %}
  {% spaceless %}
    {% if multiple %}
      <select {{ block('widget_attributes') }} multiple=\"multiple\">
        {% if empty_value is not none %}
          <option value=\"\">{{ empty_value|trans({}, translation_domain) }}</option>
        {% endif %}
        {% if preferred_choices|length > 0 %}
          {% set options = preferred_choices %}
          {{ block('choice_widget_options') }}
          {% if choices|length > 0 and separator is not none %}
            <option disabled=\"disabled\">{{ separator }}</option>
          {% endif %}
        {% endif %}
        {% set options = choices %}
        {{ block('choice_widget_options') }}
      </select>
    {% else %}
      <div class=\"dropdown {{ block('widget_attribute_class') }}\" >
        {% set selectedValue = \"\" %}
        {% set firstValue = \"\" %}

        <select class=\"hiddenDropdown\" {{ block('widget_attributes') }}>
          {% if empty_value is defined and empty_value is not none %}
            <option class=\"opt-0\" selected=\"selected\" value=\"\">{{ empty_value|trans({}, translation_domain) }}</option>
            {% set selectedValue = empty_value|trans({}, translation_domain) %}
          {% endif %}

          {% for choice in choices %}

            {% if loop.index == 1 %}
              {% set firstValue = choice.label %}
            {% endif %}

            {% if choice is selectedchoice(value) %}
              {% set selectedValue = choice.label|trans({}, translation_domain) %}
            {% endif %}

            <option class=\"opt-{{ loop.index }}\" {% if choice is selectedchoice(value) %} selected=\"selected\" {% endif %} value=\"{{ choice.value }}\">{{ choice.label|trans({}, translation_domain) }}</option>
          {% endfor %}
        </select>

        <div class=\"dropdownValue iconDown\">
          {% if selectedValue|length == 0 %}
            {% if empty_value is defined and empty_value is not none %}
              {{ empty_value|trans({}, translation_domain) }}
            {% else %}
              {{ firstValue }}
            {% endif %}
          {% else %}
            {{ selectedValue }}
          {% endif %}
        </div>
        <ul class=\"dropdownList\">
          {% if empty_value is defined and empty_value is not none %}
            <li class=\"item-0\" value=\"\">{{ empty_value|trans({}, translation_domain) }}</li>
          {% endif %}
          {% for choice in choices %}
            <li class=\"item-{{ loop.index }}\">{{ choice.label|trans({}, translation_domain) }}</li>
          {% endfor %}
        </ul>
      </div>
    {% endif %}
  {% endspaceless %}
{% endblock choice_widget_collapsed %}

{% block checkbox_widget %}
  {% spaceless %}
    {# @todo: remove .left (float) if rendered via form_row, keep it if rendered otherwise...? #}
    {% set _wrapperClass = 'checkWrapper iconCheckbox left' %}
    {% if checked %}
      {% set _wrapperClass = _wrapperClass~' iconCheckboxActive' %}
    {% endif %}
    {% if disabled %}
      {% set _wrapperClass = _wrapperClass~' checkboxDisabled' %}
    {% endif %}
    <div class=\"{{ _wrapperClass }}\" data-icon=\"iconCheckbox\">
      <input class=\"checkbox\" type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
    </div>
  {% endspaceless %}
{% endblock checkbox_widget %}

{% block radio_widget %}
  {% spaceless %}
    <div class=\"radioWrapper left iconRadio{% if checked %} iconRadioActive{% endif %} {% if disabled %} radioboxDisabled{% endif %}\" data-icon=\"iconRadio\">
      <input class=\"radiobox\" type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
    </div>
  {% endspaceless %}
{% endblock radio_widget %}

{% block datetime_widget %}
  {% spaceless %}
    {% if widget == 'single_text' %}
      {{ block('form_widget_simple') }}
    {% else %}
      <div {{ block('widget_container_attributes') }}>
        {{ form_errors(form.date) }}
        {{ form_errors(form.time) }}
        {{ form_widget(form.date) }}
        {{ form_widget(form.time) }}
      </div>
    {% endif %}
  {% endspaceless %}
{% endblock datetime_widget %}

{% block date_widget %}
  {% spaceless %}
    {% if widget == 'single_text' %}
      {{ block('form_widget_simple') }}
    {% else %}
      <div {{ block('widget_container_attributes') }}>
        {{ date_pattern|replace({
        '{{ year }}':  form_widget(form.year),
        '{{ month }}': form_widget(form.month),
        '{{ day }}':   form_widget(form.day),
      })|raw }}
      </div>
    {% endif %}
  {% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
  {% spaceless %}
    {% if widget == 'single_text' %}
      {{ block('form_widget_simple') }}
    {% else %}
      <div {{ block('widget_container_attributes') }}>
        {{ form_widget(form.hour, { 'attr': { 'size': '1' } }) }}:{{ form_widget(form.minute, { 'attr': { 'size': '1' } }) }}{% if with_seconds %}:{{ form_widget(form.second, { 'attr': { 'size': '1' } }) }}{% endif %}
      </div>
    {% endif %}
  {% endspaceless %}
{% endblock time_widget %}

{% block number_widget %}
  {% spaceless %}
    {# type=\"number\" doesn't work with floats #}
    {% set type = type|default('text') %}
    {{ block('form_widget_simple') }}
  {% endspaceless %}
{% endblock number_widget %}

{% block integer_widget %}
  {% spaceless %}
    {% set type = type|default('number') %}
    {{ block('form_widget_simple') }}
  {% endspaceless %}
{% endblock integer_widget %}

{% block money_widget %}
  {% spaceless %}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
  {% endspaceless %}
{% endblock money_widget %}

{% block url_widget %}
  {% spaceless %}
    {% set type = type|default('url') %}
    {{ block('form_widget_simple') }}
  {% endspaceless %}
{% endblock url_widget %}

{% block search_widget %}
  {% spaceless %}
    {% set type = type|default('search') %}
      {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock search_widget %}

{% block percent_widget %}
  {% spaceless %}
    {% set type = type|default('text') %}
    {{ block('form_widget_simple') }} %
  {% endspaceless %}
{% endblock percent_widget %}

{% block password_widget %}
  {% spaceless %}
    {% set type = type|default('password') %}
    {{ block('form_widget_simple') }}
    <div class=\"clearContainer\"></div>
  {% endspaceless %}
{% endblock password_widget %}

{% block hidden_widget %}
  {% spaceless %}
    {% set type = type|default('hidden') %}
    {{ block('form_widget_simple') }}
  {% endspaceless %}
{% endblock hidden_widget %}

{% block email_widget %}
  {% spaceless %}
    {% set type = type|default('email') %}
    {{ block('form_widget_simple') }}
  {% endspaceless %}
{% endblock email_widget %}




{# Labels #}

{% block form_label %}
  {% spaceless %}
    {% if not compound %}
      {% set label_attr = label_attr|merge({'for': id}) %}
    {% endif %}
    {% if required %}
      {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if label is empty %}
      {% set label = name|humanize %}
    {% endif %}
    {% if 'checkbox' in form.vars.block_prefixes %}
      {% set _labelClass = 'labelCheck' %}
    {% else %}
      {% set _labelClass = 'labelInput' %}
    {% endif %}
    {% if label_attr.class is not defined or not (' labelCheck ' in (' '~label_attr.class~' ') or ' labelInput ' in (' '~label_attr.class~' ')) %}
      {% set label_attr = label_attr|merge({'class': ((label_attr.class | default('')) ~ ' ' ~_labelClass)|trim}) %}
    {% endif %}
    <label {% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ label|trans({}, translation_domain) }}{% if required %}<span class=\"required\">*</span>{% endif %}</label>
  {% endspaceless %}
{% endblock form_label %}




{# Rows #}

{% block repeated_row %}
  {% spaceless %}
  {#
  No need to render the errors here, as all errors are mapped
  to the first child (see RepeatedTypeValidatorExtension).
  #}
  {{ block('form_rows') }}
  {% endspaceless %}
{% endblock repeated_row %}

{% block form_row %}
  {% spaceless %}
    {% set _isCollectionItem = 'collection' in form.parent.vars['block_prefixes'] %}
    <div{{ _isCollectionItem ? ' class=\"collectionItem\"' : '' }}>
      {% if 'checkbox' in form.vars.block_prefixes %}
        {{ form_widget(form) }}
        {{ form_label(form) }}
      {% else %}
        {% if not _isCollectionItem %}
          {{ form_label(form) }}
        {% endif %}
        {{ form_widget(form) }}
      {% endif %}
    </div>
  {% endspaceless %}
{% endblock form_row %}

{% block hidden_row %}
  {{ form_widget(form) }}
{% endblock hidden_row %}

{# Misc #}

{% block form_enctype %}
  {% spaceless %}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
  {% endspaceless %}
{% endblock form_enctype %}

{% block form_rest %}
  {% spaceless %}
    {% for child in form %}
      {% if not child.rendered %}
        {{ form_row(child) }}
      {% endif %}
    {% endfor %}
  {% endspaceless %}
{% endblock form_rest %}

{% block acl_widget %}
  {% spaceless %}

    {% set prototype = form_widget(form.ace.vars.prototype) %}
    <table id=\"listFilterPermission\" class=\"listFilterContainer clear permissionsTable tableCore {% if form.ace|length == 0 %}hidePermissions{% endif %}\">
      <thead id=\"permissionsHead\" data-prototype=\"{{ prototype }}\">
        <tr class=\"doNotFilter\">
          <th>
            <label for=\"inputFilterPermission\" class=\"labelInput left\">{{\"fom.core.fields.filter\"|trans}}</label>
            <input id=\"inputFilterPermission\" type=\"text\" class=\"input left listFilterInput\"/>
          </th>
          {% for child in form.ace.vars.prototype %}
            {% if child.vars.attr.class is defined %}
              <th>
                <div id=\"{{ child.vars.attr.class }}\" class=\"headTagWrapper smallText {{ child.vars.attr.class }}\">{{ child.vars.attr.class }}</div>
              </th>
            {% endif %}
          {% endfor %}
          <th></th>
        </tr>
      </thead>
      <tbody id=\"permissionsBody\">
        {% for ace in form.ace %}
          {{ form_widget(ace) }}
        {% endfor %}
      </tbody>
    </table>

    {% if form.ace|length == 0 %}
      <p id=\"permissionsDescription\" class=\"description left\">{{\"fom.core.fields.no_user_group_defined\"|trans}}</p>
    {% endif %}
    <div class=\"clearContainer\"></div>
  {% endspaceless %}
{% endblock %}

{% block aclElement_widget %}
  {% spaceless %}

    {% set prototype = form_widget(form.ace.vars.prototype) %}
    <table class=\"clear permissionsElementTable tableCore {% if form.ace|length == 0 %}hidePermissions{% endif %}\">
      <thead id=\"permissionsElementHead\" data-prototype=\"{{ prototype }}\">
        <tr>
          {% for child in form.ace.vars.prototype %}
            {% if child.vars.attr.class is defined %}
              <th>
                <div id=\"{{ child.vars.attr.class }}\" class=\"headTagWrapper smallText {{ child.vars.attr.class }}\">{{ child.vars.attr.class }}</div>
              </th>
            {% endif %}
          {% endfor %}
          <th></th>
        </tr>
      </thead>
      <tbody id=\"permissionsElementBody\">
        {% for ace in form.ace %}
          {{ form_widget(ace) }}
        {% endfor %}
      </tbody>
    </table>
    <div class=\"clearContainer\"></div>
  {% endspaceless %}
{% endblock %}

{% block tagbox_widget %}
  {% spaceless %}
    <div data-perm-type=\"{{ form.vars.attr.class }}\" class=\"checkWrapper smallText {{ form.vars.attr.class }}{{ form.vars.checked ? ' active' : '' }}\"
         data-icon-on=\"active\" data-icon-off=\"\" >
      {{ form.vars.attr.class }}
      <input class=\"checkbox\" type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{{ checked ? ' checked=\"checked\"' : '' }} />
    </div>
  {% endspaceless %}
{% endblock tagbox_widget %}

{% block ace_widget %}
  {% spaceless %}
    <tr class=\"filterItem\" {{ block('widget_container_attributes') }}>
      {% for child in form %}
        <td>
          {% if child.vars.block_prefixes.1 == \"text\" %}
              <div class=\"{% if child.vars.value|slice(0, 1) == \"u\" %}iconUser {% else %} iconGroup{% endif %} userType\">
              <span class=\"labelInput\">{{ child.vars.value|slice(2)|split(':')|first }}</span>
            </div>
            {{ form_widget(child) }}
          {% else %}
              {% if child.vars.attr.class is defined %}
                {{ form_widget(child) }}
              {% endif %}
          {% endif %}
        </td>
      {% endfor %}
      <td class=\"iconColumn\">
        <span class=\"iconRemove removeUserGroup hover-highlight-effect\"></span>
      </td>
    </tr>
  {% endspaceless %}
{% endblock %}





{# Support #}

{% block form_rows %}
  {% spaceless %}
    {% for child in form %}
      {{ form_row(child) }}
     <div class=\"clearContainer\"></div>
    {% endfor %}
  {% endspaceless %}
{% endblock form_rows %}

{% block widget_attributes %}
  {% spaceless %}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if read_only %} readonly=\"readonly\"{% endif %}{% if disabled %} disabled=\"disabled\"{% endif %}{% if required %} required=\"required\"{% endif %}{% if max_length %} maxlength=\"{{ max_length }}\"{% endif %}{% if pattern %} pattern=\"{{ pattern }}\"{% endif %}
    {% for attrname, attrvalue in attr %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\" {% else %}{{ attrname }}=\"{{ attrvalue }}\" {% endif %}{% endfor %}
  {% endspaceless %}
{% endblock widget_attributes %}

{% block widget_container_attributes %}
  {% spaceless %}
    {% if id is not empty %}id=\"{{ id }}\" {% endif %}
    {% for attrname, attrvalue in attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}
  {% endspaceless %}
{% endblock widget_container_attributes %}

{% block widget_attribute_class %}
  {% set cssClass = block('widget_attributes')|split('class') %}

  {# Get the class attribute from widget_attributes #}
  {% if cssClass[1] is defined%}
    {{ cssClass[1]|replace({'\"': '', '=':''}) }}
  {% endif %}
{% endblock widget_attribute_class %}
", "MapbenderCoreBundle:form:fields.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/form/fields.html.twig");
    }
}
