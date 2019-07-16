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

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_9aa82d46d9311c2ba1fcba72499cb78efc10f60e1177e3447543e0d1d94c18b0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'head' => [$this, 'block_head'],
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
        $context["__internal_49708377e811cc79e8fb129b5e15d55c491b58ff567b1dc7834b28fa82549d0d"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "nb_errors", []) > 0) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "forms", [])))) {
            // line 7
            echo "        ";
            $context["status_color"] = (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "nb_errors", [])) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "nb_errors", [])) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "nb_errors", [])) : (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "forms", [])))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo "
        ";
            // line 15
            ob_start();
            // line 16
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "forms", [])), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "nb_errors", []) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "nb_errors", []), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
    }

    // line 30
    public function block_menu($context, array $blocks = [])
    {
        // line 31
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "nb_errors", [])) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "forms", []))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 32
        echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 34
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "nb_errors", []) > 0)) {
            // line 35
            echo "            <span class=\"count\">
                <span>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "nb_errors", []), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 39
        echo "    </span>
";
    }

    // line 42
    public function block_head($context, array $blocks = [])
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 230px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid #DDD;
            margin-left: 250px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;

        }
        .tree .toggle-button {
            /* provide a bigger clickable area than just 10x10px */
            width: 16px;
            height: 16px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 10px;
            height: 10px;
            /* position the icon in the center of the clickable area */
            margin-left: 3px;
            margin-top: 3px;
            background-size: 10px 20px;
            background-color: #AAA;
        }
        .tree .toggle-icon.empty {
            width: 10px;
            height: 10px;
            position: absolute;
            top: 50%;
            margin-top: -5px;
            margin-left: -15px;
            background-size: 10px 10px;
        }
        .tree ul ul .tree-inner {
            padding-left: 37px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 52px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 67px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 82px;
        }
        .tree .tree-inner:hover {
            background: #dfdfdf;
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: #E0E0E0;
            font-weight: bold;
        }
        .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
            background-color: #999;
        }
        .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .form-type {
            color: #999;
        }
        .badge-error {
            float: right;
            background: #B0413E;
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .errors h3 {
            color: #B0413E;
        }
        .errors th {
            background: #B0413E;
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: #B0413E;
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
    }

    // line 183
    public function block_panel($context, array $blocks = [])
    {
        // line 184
        echo "    <h2>Forms</h2>

    ";
        // line 186
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "forms", []))) {
            // line 187
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "forms", []));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 190
                echo "                ";
                echo $context["__internal_49708377e811cc79e8fb129b5e15d55c491b58ff567b1dc7834b28fa82549d0d"]->getform_tree_entry($context["formName"], $context["formData"], true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "forms", []));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 197
                echo "                ";
                echo $context["__internal_49708377e811cc79e8fb129b5e15d55c491b58ff567b1dc7834b28fa82549d0d"]->getform_tree_details($context["formName"], $context["formData"], $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", []), "forms_by_hash", []));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "        </div>
    ";
        } else {
            // line 201
            echo "        <div class=\"empty\">
            <p>No forms were submitted for this request.</p>
        </div>
    ";
        }
        // line 205
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
    }

    // line 425
    public function getform_tree_entry($__name__ = null, $__data__ = null, $__expanded__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "expanded" => $__expanded__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 426
            echo "    ";
            $context["tree"] = $this;
            // line 427
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 428
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
            echo "-details\">
            ";
            // line 429
            if (($this->getAttribute(($context["data"] ?? null), "errors", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", [])) > 0))) {
                // line 430
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", [])), "html", null, true);
                echo "</div>
            ";
            }
            // line 432
            echo "
            ";
            // line 433
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", []))) {
                // line 434
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 436
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 438
            echo "
            ";
            // line 439
            echo twig_escape_filter($this->env, (((isset($context["name"]) || array_key_exists("name", $context))) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if (($this->getAttribute(($context["data"] ?? null), "type_class", [], "any", true, true) && $this->getAttribute(($context["data"] ?? null), "type", [], "any", true, true))) {
                echo "[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type_class", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type", []), "\\")), "html", null, true);
                echo "</abbr>]";
            }
            // line 440
            echo "        </div>

        ";
            // line 442
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", []))) {
                // line 443
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-children\" ";
                if ( !($context["expanded"] ?? null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 444
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", []));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 445
                    echo "                    ";
                    echo $context["tree"]->getform_tree_entry($context["childName"], $context["childData"], false);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 447
                echo "            </ul>
        ";
            }
            // line 449
            echo "    </li>
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

    // line 452
    public function getform_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 453
            echo "    ";
            $context["tree"] = $this;
            // line 454
            echo "    <div class=\"tree-details\" ";
            if ($this->getAttribute(($context["data"] ?? null), "id", [], "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 456
            echo twig_escape_filter($this->env, (((isset($context["name"]) || array_key_exists("name", $context))) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 457
            if (($this->getAttribute(($context["data"] ?? null), "type_class", [], "any", true, true) && $this->getAttribute(($context["data"] ?? null), "type", [], "any", true, true))) {
                // line 458
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type_class", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type", []), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 460
            echo "        </h2>

        ";
            // line 462
            if (($this->getAttribute(($context["data"] ?? null), "errors", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", [])) > 0))) {
                // line 463
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 465
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 470
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-errors\">
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Origin</th>
                        <th>Cause</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 479
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "errors", []));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 480
                    echo "                <tr>
                    <td>";
                    // line 481
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 483
                    if (twig_test_empty($this->getAttribute($context["error"], "origin", []))) {
                        // line 484
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ( !$this->getAttribute(                    // line 485
($context["forms_by_hash"] ?? null), $this->getAttribute($context["error"], "origin", []), [], "array", true, true)) {
                        // line 486
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 488
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["forms_by_hash"] ?? null), $this->getAttribute($context["error"], "origin", []), [], "array"), "name", []), "html", null, true);
                        echo "
                        ";
                    }
                    // line 490
                    echo "                    </td>
                    <td>
                        ";
                    // line 492
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["error"], "trace", []));
                    $context['_iterated'] = false;
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
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 493
                        echo "                            ";
                        if ( !$this->getAttribute($context["loop"], "first", [])) {
                            // line 494
                            echo "                                <span class=\"newline\">Caused by:</span>
                            ";
                        }
                        // line 496
                        echo "
                            ";
                        // line 497
                        if ($this->getAttribute($context["trace"], "root", [], "any", true, true)) {
                            // line 498
                            echo "                                <strong class=\"newline\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", []), "html", null, true);
                            echo "</strong>
                                <pre>";
                            // line 500
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "root", []), "html", null, true);
                            // line 501
                            if ( !twig_test_empty($this->getAttribute($context["trace"], "path", []))) {
                                // line 502
                                if ((twig_first($this->env, $this->getAttribute($context["trace"], "path", [])) != "[")) {
                                    echo ".";
                                }
                                // line 503
                                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", []), "html", null, true);
                            }
                            // line 504
                            echo " = ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "value", []), "html", null, true);
                            // line 505
                            echo "</pre>
                            ";
                        } elseif ($this->getAttribute(                        // line 506
$context["trace"], "message", [], "any", true, true)) {
                            // line 507
                            echo "                                <strong class=\"newline\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", []), "html", null, true);
                            echo "</strong>
                                <pre>";
                            // line 508
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "message", []), "html", null, true);
                            echo "</pre>
                            ";
                        } else {
                            // line 510
                            echo "                                <pre>";
                            echo twig_escape_filter($this->env, $context["trace"], "html", null, true);
                            echo "</pre>
                            ";
                        }
                        // line 512
                        echo "                        ";
                        $context['_iterated'] = true;
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 513
                        echo "                            <em>Unknown.</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 515
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 518
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 522
            echo "
        ";
            // line 523
            if ($this->getAttribute(($context["data"] ?? null), "default_data", [], "any", true, true)) {
                // line 524
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 525
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 530
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-default_data\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                // line 542
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", [], "any", false, true), "model", [], "any", true, true)) {
                    // line 543
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", []), "model", []), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 545
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 547
                echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                // line 551
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", []), "norm", []), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                // line 556
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", [], "any", false, true), "view", [], "any", true, true)) {
                    // line 557
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", []), "view", []), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 559
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 561
                echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        ";
            }
            // line 567
            echo "
        ";
            // line 568
            if ($this->getAttribute(($context["data"] ?? null), "submitted_data", [], "any", true, true)) {
                // line 569
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 570
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 575
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 576
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", [], "any", false, true), "norm", [], "any", true, true)) {
                    // line 577
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                    // line 588
                    if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", [], "any", false, true), "view", [], "any", true, true)) {
                        // line 589
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", []), "view", []), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 591
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 593
                    echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                    // line 597
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", []), "norm", []), "html", null, true);
                    echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                    // line 602
                    if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", [], "any", false, true), "model", [], "any", true, true)) {
                        // line 603
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", []), "model", []), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 605
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 607
                    echo "                        </td>
                    </tr>
                </tbody>
            </table>
        ";
                } else {
                    // line 612
                    echo "            <div class=\"empty\">
                <p>This form was not submitted.</p>
            </div>
        ";
                }
                // line 616
                echo "        </div>
        ";
            }
            // line 618
            echo "
        ";
            // line 619
            if ($this->getAttribute(($context["data"] ?? null), "passed_options", [], "any", true, true)) {
                // line 620
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 621
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 626
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-passed_options\">
            ";
                // line 627
                if (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "passed_options", []))) {
                    // line 628
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Passed Value</th>
                        <th>Resolved Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                    // line 637
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "passed_options", []));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 638
                        echo "                <tr>
                    <th>";
                        // line 639
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                    <td>";
                        // line 640
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</td>
                    <td>
                        ";
                        // line 642
                        if (($this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", []), $context["option"], [], "array") === $context["value"])) {
                            // line 643
                            echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                        } else {
                            // line 645
                            echo "                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", []), $context["option"], [], "array"), "html", null, true);
                            echo "
                        ";
                        }
                        // line 647
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 650
                    echo "                </tbody>
            </table>
            ";
                } else {
                    // line 653
                    echo "                <div class=\"empty\">
                    <p>No options where passed when constructing this form.</p>
                </div>
            ";
                }
                // line 657
                echo "        </div>
        ";
            }
            // line 659
            echo "
        ";
            // line 660
            if ($this->getAttribute(($context["data"] ?? null), "resolved_options", [], "any", true, true)) {
                // line 661
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 662
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 667
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 676
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "resolved_options", []));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 677
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 678
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 679
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 682
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 686
            echo "
        ";
            // line 687
            if ($this->getAttribute(($context["data"] ?? null), "view_vars", [], "any", true, true)) {
                // line 688
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 689
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 694
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Variable</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 703
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "view_vars", []));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 704
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 705
                    echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 706
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 709
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 713
            echo "    </div>

    ";
            // line 715
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 716
                echo "        ";
                echo $context["tree"]->getform_tree_details($context["childName"], $context["childData"], ($context["forms_by_hash"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1241 => 716,  1237 => 715,  1233 => 713,  1227 => 709,  1218 => 706,  1214 => 705,  1211 => 704,  1207 => 703,  1195 => 694,  1187 => 689,  1184 => 688,  1182 => 687,  1179 => 686,  1173 => 682,  1164 => 679,  1160 => 678,  1157 => 677,  1153 => 676,  1141 => 667,  1133 => 662,  1130 => 661,  1128 => 660,  1125 => 659,  1121 => 657,  1115 => 653,  1110 => 650,  1102 => 647,  1096 => 645,  1092 => 643,  1090 => 642,  1085 => 640,  1081 => 639,  1078 => 638,  1074 => 637,  1063 => 628,  1061 => 627,  1057 => 626,  1049 => 621,  1046 => 620,  1044 => 619,  1041 => 618,  1037 => 616,  1031 => 612,  1024 => 607,  1020 => 605,  1014 => 603,  1012 => 602,  1004 => 597,  998 => 593,  994 => 591,  988 => 589,  986 => 588,  973 => 577,  971 => 576,  967 => 575,  959 => 570,  956 => 569,  954 => 568,  951 => 567,  943 => 561,  939 => 559,  933 => 557,  931 => 556,  923 => 551,  917 => 547,  913 => 545,  907 => 543,  905 => 542,  890 => 530,  882 => 525,  879 => 524,  877 => 523,  874 => 522,  868 => 518,  860 => 515,  853 => 513,  840 => 512,  834 => 510,  829 => 508,  824 => 507,  822 => 506,  819 => 505,  816 => 504,  813 => 503,  809 => 502,  807 => 501,  805 => 500,  800 => 498,  798 => 497,  795 => 496,  791 => 494,  788 => 493,  770 => 492,  766 => 490,  760 => 488,  756 => 486,  754 => 485,  751 => 484,  749 => 483,  744 => 481,  741 => 480,  737 => 479,  725 => 470,  717 => 465,  713 => 463,  711 => 462,  707 => 460,  699 => 458,  697 => 457,  693 => 456,  683 => 454,  680 => 453,  666 => 452,  650 => 449,  646 => 447,  637 => 445,  633 => 444,  624 => 443,  622 => 442,  618 => 440,  608 => 439,  605 => 438,  601 => 436,  595 => 434,  593 => 433,  590 => 432,  584 => 430,  582 => 429,  578 => 428,  575 => 427,  572 => 426,  558 => 425,  336 => 205,  330 => 201,  326 => 199,  317 => 197,  313 => 196,  307 => 192,  298 => 190,  294 => 189,  290 => 187,  288 => 186,  284 => 184,  281 => 183,  137 => 43,  134 => 42,  129 => 39,  123 => 36,  120 => 35,  118 => 34,  113 => 32,  106 => 31,  103 => 30,  96 => 26,  93 => 25,  85 => 22,  78 => 18,  74 => 16,  72 => 15,  69 => 14,  63 => 11,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  40 => 1,  38 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/form.html.twig", "/var/www/mapbender/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/form.html.twig");
    }
}
