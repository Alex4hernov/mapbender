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

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_c981f6f8d91fb0daa92a6f312b8b920ee5dfb4a5fc649daf006786d75a1c0ebd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if (("unknown" == $this->getAttribute(($context["collector"] ?? null), "symfonyState", []))) {
            // line 5
            echo "        ";
            $context["block_status"] = "";
            // line 6
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            echo "    ";
        } elseif (("eol" == $this->getAttribute(($context["collector"] ?? null), "symfonyState", []))) {
            // line 8
            echo "        ";
            $context["block_status"] = "red";
            // line 9
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            echo "    ";
        } elseif (("eom" == $this->getAttribute(($context["collector"] ?? null), "symfonyState", []))) {
            // line 11
            echo "        ";
            $context["block_status"] = "yellow";
            // line 12
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            echo "    ";
        } elseif (("dev" == $this->getAttribute(($context["collector"] ?? null), "symfonyState", []))) {
            // line 14
            echo "        ";
            $context["block_status"] = "yellow";
            // line 15
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["block_status"] = "";
            // line 18
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        ob_start();
        // line 22
        echo "        ";
        if ($this->getAttribute(($context["collector"] ?? null), "applicationname", [])) {
            // line 23
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "applicationname", []), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "applicationversion", []), "html", null, true);
            echo "</span>
        ";
        } elseif ($this->getAttribute(        // line 25
($context["collector"] ?? null), "symfonyState", [], "any", true, true)) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">
                ";
            // line 27
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "symfonyversion", []), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            ";
        // line 35
        if ($this->getAttribute(($context["collector"] ?? null), "applicationname", [])) {
            // line 36
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "applicationname", []), "html", null, true);
            echo "</b>
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "applicationversion", []), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 41
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 45
        if (($context["profiler_url"] ?? null)) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, ($context["profiler_url"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "token", []), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "token", []), "html", null, true);
            echo "
                    ";
        }
        // line 50
        echo "                </span>
            </div>

            ";
        // line 53
        if ( !("n/a" === $this->getAttribute(($context["collector"] ?? null), "appname", []))) {
            // line 54
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "appname", []), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 59
        echo "
            ";
        // line 60
        if ( !("n/a" === $this->getAttribute(($context["collector"] ?? null), "env", []))) {
            // line 61
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "env", []), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 66
        echo "
            ";
        // line 67
        if ( !("n/a" === $this->getAttribute(($context["collector"] ?? null), "debug", []))) {
            // line 68
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 70
            echo (($this->getAttribute(($context["collector"] ?? null), "debug", [])) ? ("green") : ("red"));
            echo "\">";
            echo (($this->getAttribute(($context["collector"] ?? null), "debug", [])) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>
            ";
        }
        // line 73
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "phpversion", []), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 86
        echo (($this->getAttribute(($context["collector"] ?? null), "hasxdebug", [])) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 87
        echo (($this->getAttribute(($context["collector"] ?? null), "hasaccelerator", [])) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "sapiName", []), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
        // line 97
        if ($this->getAttribute(($context["collector"] ?? null), "symfonyversion", [], "any", true, true)) {
            // line 98
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        ";
            // line 101
            if (("Silex" == $this->getAttribute(($context["collector"] ?? null), "applicationname", []))) {
                // line 102
                echo "                            <a href=\"https://silex.symfony.com/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        ";
            } else {
                // line 106
                echo "                            <a href=\"https://symfony.com/doc/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "symfonyversion", []), "html", null, true);
                echo "/index.html\" rel=\"help\">
                                Read Symfony ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "symfonyversion", []), "html", null, true);
                echo " Docs
                            </a>
                        ";
            }
            // line 110
            echo "                    </span>
                </div>
            ";
        }
        // line 113
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        echo "
    ";
        // line 116
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => ($context["block_status"] ?? null), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . ($context["symfony_version_status"] ?? null)) . "\"")]);
        echo "
";
    }

    // line 119
    public function block_menu($context, array $blocks = [])
    {
        // line 120
        echo "    <span class=\"label label-status-";
        echo ((($this->getAttribute(($context["collector"] ?? null), "symfonyState", []) == "eol")) ? ("red") : (((twig_in_filter($this->getAttribute(($context["collector"] ?? null), "symfonyState", []), [0 => "eom", 1 => "dev"])) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 121
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
    }

    // line 126
    public function block_panel($context, array $blocks = [])
    {
        // line 127
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "applicationname", [])) {
            // line 128
            echo "        ";
            // line 129
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "applicationname", []), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "applicationversion", []), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "symfonyversion", []), "html", null, true);
            echo "</a>
        </p>
    ";
        } else {
            // line 147
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "symfonyversion", []), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>

            ";
            // line 155
            if (("n/a" != $this->getAttribute(($context["collector"] ?? null), "appname", []))) {
                // line 156
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "appname", []), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>
            ";
            }
            // line 161
            echo "
            ";
            // line 162
            if (("n/a" != $this->getAttribute(($context["collector"] ?? null), "env", []))) {
                // line 163
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "env", []), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>
            ";
            }
            // line 168
            echo "
            ";
            // line 169
            if (("n/a" != $this->getAttribute(($context["collector"] ?? null), "debug", []))) {
                // line 170
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 171
                echo (($this->getAttribute(($context["collector"] ?? null), "debug", [])) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>
            ";
            }
            // line 175
            echo "        </div>
    ";
        }
        // line 177
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "phpversion", []), "html", null, true);
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 187
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? null), "hasaccelerator", [])) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 192
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? null), "hasxdebug", [])) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 199
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? null), "haszendopcache", [])) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 204
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? null), "hasapc", [])) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 209
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? null), "hasxcache", [])) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 214
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? null), "haseaccelerator", [])) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 223
        if ($this->getAttribute(($context["collector"] ?? null), "bundles", [])) {
            // line 224
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "bundles", [])), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getAttribute(($context["collector"] ?? null), "bundles", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 234
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 235
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "bundles", []), $context["name"], [], "array"), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "            </tbody>
        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 239,  516 => 236,  512 => 235,  509 => 234,  505 => 233,  492 => 224,  490 => 223,  484 => 220,  475 => 214,  467 => 209,  459 => 204,  451 => 199,  441 => 192,  433 => 187,  425 => 182,  418 => 177,  414 => 175,  407 => 171,  404 => 170,  402 => 169,  399 => 168,  392 => 164,  389 => 163,  387 => 162,  384 => 161,  377 => 157,  374 => 156,  372 => 155,  365 => 151,  359 => 147,  353 => 144,  344 => 138,  336 => 133,  330 => 129,  328 => 128,  325 => 127,  322 => 126,  314 => 121,  309 => 120,  306 => 119,  300 => 116,  297 => 115,  293 => 113,  288 => 110,  282 => 107,  277 => 106,  271 => 102,  269 => 101,  264 => 98,  262 => 97,  254 => 92,  246 => 87,  242 => 86,  233 => 80,  229 => 79,  221 => 73,  213 => 70,  209 => 68,  207 => 67,  204 => 66,  198 => 63,  194 => 61,  192 => 60,  189 => 59,  183 => 56,  179 => 54,  177 => 53,  172 => 50,  166 => 48,  158 => 46,  156 => 45,  150 => 41,  144 => 38,  140 => 37,  137 => 36,  135 => 35,  132 => 34,  130 => 33,  127 => 32,  124 => 31,  119 => 29,  114 => 27,  111 => 26,  109 => 25,  105 => 24,  100 => 23,  97 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/config.html.twig", "/var/www/mapbender/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/config.html.twig");
    }
}
