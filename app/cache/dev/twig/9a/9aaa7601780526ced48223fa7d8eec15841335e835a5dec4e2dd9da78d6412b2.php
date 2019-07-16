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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_83eee24bd3c899eb9c8d3b23d687fa4bcc728d478f3be83ca3dc5efb3b8cd325 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", [], "any", false, true), "class", [], "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "file", []), $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "line", []));
            // line 7
            echo "            ";
            if (($context["link"] ?? null)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "file", []), "html", null, true);
                echo "\">";
            } else {
                echo "<span>";
            }
            // line 8
            echo "
                ";
            // line 9
            echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "class", []))), "html", null, true);
            // line 11
            if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "method", [])) {
                // line 12
                echo "&nbsp;::&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "method", []), "html", null, true);
            }
            // line 15
            if (($context["link"] ?? null)) {
                echo "</a>";
            } else {
                echo "</span>";
            }
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "controller", []), "html", null, true);
            echo "</span>
        ";
        }
        // line 19
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    ";
        // line 21
        $context["request_status_code_color"] = ((($this->getAttribute(($context["collector"] ?? null), "statuscode", []) >= 400)) ? ("red") : (((($this->getAttribute(($context["collector"] ?? null), "statuscode", []) >= 300)) ? ("yellow") : ("green"))));
        // line 22
        echo "
    ";
        // line 23
        ob_start();
        // line 24
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, ($context["request_status_code_color"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "statuscode", []), "html", null, true);
        echo "</span>
        ";
        // line 25
        if ($this->getAttribute(($context["collector"] ?? null), "route", [])) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">@</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "route", []), "html", null, true);
            echo "</span>
        ";
        }
        // line 29
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
    ";
        // line 31
        ob_start();
        // line 32
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>HTTP status</b>
            <span>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "statuscode", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "statustext", []), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Controller</b>
            <span>";
        // line 39
        echo twig_escape_filter($this->env, ($context["request_handler"] ?? null), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", [], "any", false, true), "class", [], "any", true, true)) {
            // line 43
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Controller class</b>
                <span>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "class", []), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 48
        echo "
        <div class=\"sf-toolbar-info-piece\">
            <b>Route name</b>
            <span>";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "route", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "route", []), "NONE")) : ("NONE")), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Has session</b>
            <span>";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "sessionmetadata", []))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "
    ";
        // line 60
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        echo "
";
    }

    // line 63
    public function block_menu($context, array $blocks = [])
    {
        // line 64
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 65
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
    }

    // line 70
    public function block_panel($context, array $blocks = [])
    {
        // line 71
        echo "    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 78
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestquery", []), "all", []))) {
            // line 79
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 83
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => $this->getAttribute(($context["collector"] ?? null), "requestquery", [])], false);
            echo "
                ";
        }
        // line 85
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 88
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestrequest", []), "all", []))) {
            // line 89
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 93
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => $this->getAttribute(($context["collector"] ?? null), "requestrequest", [])], false);
            echo "
                ";
        }
        // line 95
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 98
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestattributes", []), "all", []))) {
            // line 99
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 103
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => $this->getAttribute(($context["collector"] ?? null), "requestattributes", [])], false);
            echo "
                ";
        }
        // line 105
        echo "
                <h3>Cookies</h3>

                ";
        // line 108
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestcookies", []), "all", []))) {
            // line 109
            echo "                    <div class=\"empty\">
                        <p>No cookies</p>
                    </div>
                ";
        } else {
            // line 113
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => $this->getAttribute(($context["collector"] ?? null), "requestcookies", [])], false);
            echo "
                ";
        }
        // line 115
        echo "
                <h3>Request Headers</h3>
                ";
        // line 117
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => $this->getAttribute(($context["collector"] ?? null), "requestheaders", []), "labels" => [0 => "Header", 1 => "Value"]], false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 121
        if (($this->getAttribute(($context["collector"] ?? null), "content", []) == false)) {
            // line 122
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif ($this->getAttribute(        // line 125
($context["collector"] ?? null), "content", [])) {
            // line 126
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "content", []), "html", null, true);
            echo "</pre>
                    </div>
                ";
        } else {
            // line 130
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 134
        echo "
                <h3>Server Parameters</h3>
                ";
        // line 136
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => $this->getAttribute(($context["collector"] ?? null), "requestserver", [])], false);
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 146
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => $this->getAttribute(($context["collector"] ?? null), "responseheaders", []), "labels" => [0 => "Header", 1 => "Value"]], false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 150
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sessionmetadata", []))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 156
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sessionmetadata", []))) {
            // line 157
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 161
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => $this->getAttribute(($context["collector"] ?? null), "sessionmetadata", [])], false);
            echo "
                ";
        }
        // line 163
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 166
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sessionattributes", []))) {
            // line 167
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 171
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => $this->getAttribute(($context["collector"] ?? null), "sessionattributes", []), "labels" => [0 => "Attribute", 1 => "Value"]], false);
            echo "
                ";
        }
        // line 173
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 176
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "flashes", []))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 182
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "flashes", []))) {
            // line 183
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 187
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => $this->getAttribute(($context["collector"] ?? null), "flashes", [])], false);
            echo "
                ";
        }
        // line 189
        echo "            </div>
        </div>

        ";
        // line 192
        if ($this->getAttribute(($context["profile"] ?? null), "parent", [])) {
            // line 193
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", ["token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", []), "token", [])]), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", []), "token", []), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 202
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "parent", []), "getcollector", [0 => "request"], "method"), "requestattributes", [])], false);
            echo "
            </div>
        </div>
        ";
        }
        // line 206
        echo "
        ";
        // line 207
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", []))) {
            // line 208
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 209
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "children", [])), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 213
                echo "                    <h3>
                        <a href=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", ["token" => $this->getAttribute($context["child"], "token", [])]), "html", null, true);
                echo "\">";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", [0 => "request"], "method"), "requestattributes", []), "get", [0 => "_controller"], "method"), "html", null, true);
                // line 216
                echo "</a>
                        <small>(token = ";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", []), "html", null, true);
                echo ")</small>
                    </h3>

                    ";
                // line 220
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", [0 => "request"], "method"), "requestattributes", [])], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "            </div>
        </div>
        ";
        }
        // line 225
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 225,  492 => 222,  484 => 220,  478 => 217,  475 => 216,  473 => 215,  470 => 214,  467 => 213,  463 => 212,  457 => 209,  454 => 208,  452 => 207,  449 => 206,  442 => 202,  436 => 199,  432 => 198,  425 => 193,  423 => 192,  418 => 189,  412 => 187,  406 => 183,  404 => 182,  395 => 176,  390 => 173,  384 => 171,  378 => 167,  376 => 166,  371 => 163,  365 => 161,  359 => 157,  357 => 156,  348 => 150,  341 => 146,  328 => 136,  324 => 134,  318 => 130,  312 => 127,  309 => 126,  307 => 125,  302 => 122,  300 => 121,  293 => 117,  289 => 115,  283 => 113,  277 => 109,  275 => 108,  270 => 105,  264 => 103,  258 => 99,  256 => 98,  251 => 95,  245 => 93,  239 => 89,  237 => 88,  232 => 85,  226 => 83,  220 => 79,  218 => 78,  209 => 71,  206 => 70,  198 => 65,  195 => 64,  192 => 63,  186 => 60,  183 => 59,  173 => 56,  165 => 51,  160 => 48,  154 => 45,  150 => 43,  148 => 42,  142 => 39,  132 => 34,  128 => 32,  126 => 31,  123 => 30,  120 => 29,  115 => 27,  112 => 26,  110 => 25,  103 => 24,  101 => 23,  98 => 22,  96 => 21,  93 => 20,  90 => 19,  84 => 17,  81 => 16,  75 => 15,  71 => 12,  69 => 11,  67 => 9,  64 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/request.html.twig", "/var/www/mapbender/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/request.html.twig");
    }
}
