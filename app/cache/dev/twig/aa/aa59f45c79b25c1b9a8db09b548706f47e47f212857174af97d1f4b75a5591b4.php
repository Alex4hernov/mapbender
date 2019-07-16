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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_31732aafa507f37cb3bfe42d2dbc2bcf3a535d73a20b80838d4219be522c3465 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? null), "counterrors", []) || $this->getAttribute(($context["collector"] ?? null), "countdeprecations", [])) || $this->getAttribute(($context["collector"] ?? null), "countscreams", []))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? null), "counterrors", [])) ? ("red") : ((($this->getAttribute(($context["collector"] ?? null), "countdeprecations", [])) ? ("yellow") : (""))));
            // line 9
            echo "            ";
            $context["error_count"] = (($this->getAttribute(($context["collector"] ?? null), "counterrors", []) + $this->getAttribute(($context["collector"] ?? null), "countdeprecations", [])) + $this->getAttribute(($context["collector"] ?? null), "countscreams", []));
            // line 10
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 11
            echo twig_escape_filter($this->env, ($context["error_count"] ?? null), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 17
            echo (($this->getAttribute(($context["collector"] ?? null), "counterrors", [])) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "counterrors", []), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecated Calls</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", [])) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", []), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Silenced Errors</b>
                <span class=\"sf-toolbar-status\">";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", []), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 30
            echo "
        ";
            // line 31
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = [])
    {
        // line 36
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? null), "counterrors", [])) ? ("error") : ((($this->getAttribute(($context["collector"] ?? null), "countdeprecations", [])) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "logs", []))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 37
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 39
        if (($this->getAttribute(($context["collector"] ?? null), "counterrors", []) || $this->getAttribute(($context["collector"] ?? null), "countdeprecations", []))) {
            // line 40
            echo "            <span class=\"count\">
                <span>";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", [])) ? ($this->getAttribute(($context["collector"] ?? null), "counterrors", [])) : ($this->getAttribute(($context["collector"] ?? null), "countdeprecations", []))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 44
        echo "    </span>
";
    }

    // line 47
    public function block_panel($context, array $blocks = [])
    {
        // line 48
        echo "    <h2>Log Messages</h2>

    ";
        // line 50
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "logs", []))) {
            // line 51
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 55
            echo "        ";
            // line 56
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             [[], [], [], []];
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "logs", []));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 58
                echo "            ";
                if ((($this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "level", [], "any", true, true) && $this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "type", [], "any", true, true)) && twig_in_filter($this->getAttribute($this->getAttribute($context["log"], "context", []), "type", []), [0 => twig_constant("E_DEPRECATED"), 1 => twig_constant("E_USER_DEPRECATED")]))) {
                    // line 59
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge(($context["deprecation_logs"] ?? null), [0 => $context["log"]]);
                    // line 60
                    echo "            ";
                } elseif (($this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "scream", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["log"], "context", []), "scream", []) == true))) {
                    // line 61
                    echo "                ";
                    $context["silenced_logs"] = twig_array_merge(($context["silenced_logs"] ?? null), [0 => $context["log"]]);
                    // line 62
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "priorityName", []) == "DEBUG")) {
                    // line 63
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge(($context["debug_logs"] ?? null), [0 => $context["log"]]);
                    // line 64
                    echo "            ";
                } else {
                    // line 65
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge(($context["info_and_error_logs"] ?? null), [0 => $context["log"]]);
                    // line 66
                    echo "            ";
                }
                // line 67
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge\">";
            // line 71
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["info_and_error_logs"] ?? null)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 74
            if (twig_test_empty(($context["info_and_error_logs"] ?? null))) {
                // line 75
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 79
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["info_and_error_logs"] ?? null), true);
                echo "
                    ";
            }
            // line 81
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 87
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", []), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 90
            if (twig_test_empty(($context["deprecation_logs"] ?? null))) {
                // line 91
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 95
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["deprecation_logs"] ?? null), false, true);
                echo "
                    ";
            }
            // line 97
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 101
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["debug_logs"] ?? null)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 104
            if (twig_test_empty(($context["debug_logs"] ?? null))) {
                // line 105
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 109
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["debug_logs"] ?? null));
                echo "
                    ";
            }
            // line 111
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced Errors <span class=\"badge\">";
            // line 115
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", []), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 118
            if (twig_test_empty(($context["silenced_logs"] ?? null))) {
                // line 119
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 123
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["silenced_logs"] ?? null));
                echo "
                    ";
            }
            // line 125
            echo "                </div>
            </div>

        </div>
    ";
        }
    }

    // line 132
    public function getrender_table($__logs__ = null, $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "logs" => $__logs__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 133
            echo "    ";
            $context["helper"] = $this;
            // line 134
            echo "    ";
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? null)), "channel", [], "any", true, true);
            // line 135
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 139
            echo ((($context["show_level"] ?? null)) ? ("Level") : ("Time"));
            echo "</th>
                ";
            // line 140
            if (($context["channel_is_defined"] ?? null)) {
                echo "<th>Channel</th>";
            }
            // line 141
            echo "                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 147
                echo "                ";
                $context["css_class"] = ((($context["is_deprecation"] ?? null)) ? ("") : (((twig_in_filter($this->getAttribute(                // line 148
$context["log"], "priorityName", []), [0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"])) ? ("status-error") : (((twig_in_filter($this->getAttribute(                // line 149
$context["log"], "priorityName", []), [0 => "NOTICE", 1 => "WARNING"])) ? ("status-warning") : (""))))));
                // line 151
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\">
                        ";
                // line 153
                if (($context["show_level"] ?? null)) {
                    // line 154
                    echo "                            <span class=\"colored text-bold nowrap\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", []), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 156
                echo "                        <span class=\"text-muted nowrap newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", []), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>

                    ";
                // line 159
                if (($context["channel_is_defined"] ?? null)) {
                    // line 160
                    echo "                        <td class=\"font-normal text-small text-bold nowrap\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", []), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 162
                echo "
                    <td class=\"font-normal\">";
                // line 163
                echo $context["helper"]->getrender_log_message($this->getAttribute($context["loop"], "index", []), $context["log"], ($context["is_deprecation"] ?? null));
                echo "</td>
                </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "        </tbody>
    </table>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 170
    public function getrender_log_message($__log_index__ = null, $__log__ = null, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 171
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? null), "message", []), "html", null, true);
            echo "

    ";
            // line 173
            if (($context["is_deprecation"] ?? null)) {
                // line 174
                echo "        ";
                $context["stack"] = (($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", [], "any", false, true), "stack", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", [], "any", false, true), "stack", []), [])) : ([]));
                // line 175
                echo "        ";
                $context["id"] = ("sf-call-stack-" . ($context["log_index"] ?? null));
                // line 176
                echo "
        ";
                // line 177
                if ($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", [], "any", false, true), "errorCount", [], "any", true, true)) {
                    // line 178
                    echo "            <span class=\"text-small text-bold\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", []), "errorCount", []), "html", null, true);
                    echo " times)</span>
        ";
                }
                // line 180
                echo "
        ";
                // line 181
                if (($context["stack"] ?? null)) {
                    // line 182
                    echo "            <button class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide stack trace\">Show stack trace</button>
        ";
                }
                // line 184
                echo "
        ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stack"] ?? null));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($context["index"] > 1)) {
                        // line 186
                        echo "            ";
                        if (($context["index"] == 2)) {
                            // line 187
                            echo "                <ul class=\"sf-call-stack hidden\" id=\"";
                            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 189
                        echo "
            ";
                        // line 190
                        if ($this->getAttribute($context["call"], "class", [], "any", true, true)) {
                            // line 191
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($context["call"], "class", [])) . "::") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrMethod($this->getAttribute($context["call"], "function", [])));
                            // line 192
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "function", [], "any", true, true)) {
                            // line 193
                            echo "                ";
                            $context["from"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrMethod($this->getAttribute($context["call"], "function", []));
                            // line 194
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "file", [], "any", true, true)) {
                            // line 195
                            echo "                ";
                            $context["from"] = $this->getAttribute($context["call"], "file", []);
                            // line 196
                            echo "            ";
                        } else {
                            // line 197
                            echo "                ";
                            $context["from"] = "-";
                            // line 198
                            echo "            ";
                        }
                        // line 199
                        echo "
            ";
                        // line 200
                        $context["file_name"] = ((($this->getAttribute($context["call"], "file", [], "any", true, true) && $this->getAttribute($context["call"], "line", [], "any", true, true))) ? (twig_last($this->env, twig_split_filter($this->env, twig_replace_filter($this->getAttribute($context["call"], "file", []), ["\\" => "/"]), "/"))) : (""));
                        // line 201
                        echo "
            <li>
                ";
                        // line 203
                        echo ($context["from"] ?? null);
                        echo "
                ";
                        // line 204
                        if (($context["file_name"] ?? null)) {
                            // line 205
                            echo "                    <span class=\"text-small\">(called from ";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute($context["call"], "file", []), $this->getAttribute($context["call"], "line", []), ($context["file_name"] ?? null));
                            echo ")</span>
                ";
                        }
                        // line 207
                        echo "            </li>

            ";
                        // line 209
                        if (($context["index"] == (twig_length_filter($this->env, ($context["stack"] ?? null)) - 1))) {
                            // line 210
                            echo "                </ul>
            ";
                        }
                        // line 212
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "    ";
            } else {
                // line 214
                echo "        ";
                if (($this->getAttribute(($context["log"] ?? null), "context", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? null), "context", [])))) {
                    // line 215
                    echo "            <span class=\"metadata\">
                <strong>Context</strong>: ";
                    // line 216
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_jsonencode_filter($this->getAttribute(($context["log"] ?? null), "context", []), (64 | 256)), ["{\"" => "{ \"", "\"}" => "\" }", "\":{" => "\": {", "\":\"" => "\": \"", "\",\"" => "\", \""]), "html", null, true);
                    // line 218
                    echo "
            </span>
        ";
                }
                // line 221
                echo "    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 221,  590 => 218,  588 => 216,  585 => 215,  582 => 214,  579 => 213,  572 => 212,  568 => 210,  566 => 209,  562 => 207,  556 => 205,  554 => 204,  550 => 203,  546 => 201,  544 => 200,  541 => 199,  538 => 198,  535 => 197,  532 => 196,  529 => 195,  526 => 194,  523 => 193,  520 => 192,  517 => 191,  515 => 190,  512 => 189,  506 => 187,  503 => 186,  498 => 185,  495 => 184,  489 => 182,  487 => 181,  484 => 180,  478 => 178,  476 => 177,  473 => 176,  470 => 175,  467 => 174,  465 => 173,  459 => 171,  445 => 170,  428 => 166,  411 => 163,  408 => 162,  402 => 160,  400 => 159,  393 => 156,  387 => 154,  385 => 153,  379 => 151,  377 => 149,  376 => 148,  374 => 147,  357 => 146,  350 => 141,  346 => 140,  342 => 139,  336 => 135,  333 => 134,  330 => 133,  316 => 132,  307 => 125,  301 => 123,  295 => 119,  293 => 118,  287 => 115,  281 => 111,  275 => 109,  269 => 105,  267 => 104,  261 => 101,  255 => 97,  249 => 95,  243 => 91,  241 => 90,  234 => 87,  228 => 81,  222 => 79,  216 => 75,  214 => 74,  208 => 71,  203 => 68,  197 => 67,  194 => 66,  191 => 65,  188 => 64,  185 => 63,  182 => 62,  179 => 61,  176 => 60,  173 => 59,  170 => 58,  165 => 57,  162 => 56,  160 => 55,  154 => 51,  152 => 50,  148 => 48,  145 => 47,  140 => 44,  134 => 41,  131 => 40,  129 => 39,  124 => 37,  117 => 36,  114 => 35,  107 => 31,  104 => 30,  98 => 27,  88 => 22,  78 => 17,  74 => 15,  72 => 14,  69 => 13,  64 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/logger.html.twig", "/var/www/mapbender/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/logger.html.twig");
    }
}
