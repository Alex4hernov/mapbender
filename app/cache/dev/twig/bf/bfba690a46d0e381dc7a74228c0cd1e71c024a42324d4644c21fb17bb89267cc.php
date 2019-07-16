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

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_8c4c7c710e063204e2641a368972008ddc6887f5e011389d9d41f1f1bca70292 extends \Twig\Template
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
        echo "<script>/*<![CDATA[*/
    ";
        // line 5
        echo "
    Sfjs = (function() {
        \"use strict\";

        var classListIsSupported = 'classList' in document.documentElement;

        if (classListIsSupported) {
            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };
            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };
            var addClass = function(el, cssClass) { el.classList.add(cssClass); };
            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };
        } else {
            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };
            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };
            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };
            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };
        }

        var noop = function() {},

            collectionToArray = function (collection) {
                var length = collection.length || 0,
                    results = new Array(length);

                while (length--) {
                    results[length] = collection[length];
                }

                return results;
            },

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 1000);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            },

            requestStack = [],

            extractHeaders = function(xhr, stackElement) {
                /* Here we avoid to call xhr.getResponseHeader in order to */
                /* prevent polluting the console with CORS security errors */
                var allHeaders = xhr.getAllResponseHeaders();
                var ret;

                if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {
                    stackElement.profile = ret[1];
                }
                if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {
                    stackElement.profilerUrl = ret[1];
                }
            },

            renderAjaxRequests = function() {
                var requestCounter = document.querySelectorAll('.sf-toolbar-ajax-requests');
                if (!requestCounter.length) {
                    return;
                }

                var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');
                var tbodies = document.querySelectorAll('.sf-toolbar-ajax-request-list');
                var state = 'ok';
                if (tbodies.length) {
                    var tbody = tbodies[0];

                    var rows = document.createDocumentFragment();

                    if (requestStack.length) {
                        var nbOfAjaxRequest = tbody.rows.length;
                        if (nbOfAjaxRequest >= 100) {
                            tbody.deleteRow(nbOfAjaxRequest - 1);
                        }

                        for (var i = 0; i < requestStack.length; i++) {
                            var request = requestStack[i];

                            var row = document.createElement('tr');
                            rows.insertBefore(row, rows.firstChild);

                            var methodCell = document.createElement('td');
                            if (request.error) {
                                methodCell.className = 'sf-ajax-request-error';
                            }
                            methodCell.textContent = request.method;
                            row.appendChild(methodCell);

                            var pathCell = document.createElement('td');
                            pathCell.className = 'sf-ajax-request-url';
                            if ('GET' === request.method) {
                                var pathLink = document.createElement('a');
                                pathLink.setAttribute('href', request.url);
                                pathLink.textContent = request.url;
                                pathCell.appendChild(pathLink);
                            } else {
                                pathCell.textContent = request.url;
                            }
                            pathCell.setAttribute('title', request.url);
                            row.appendChild(pathCell);

                            var durationCell = document.createElement('td');
                            durationCell.className = 'sf-ajax-request-duration';

                            if (request.duration) {
                                durationCell.textContent = request.duration + \"ms\";
                            } else {
                                durationCell.textContent = '-';
                            }
                            row.appendChild(durationCell);

                            row.appendChild(document.createTextNode(' '));
                            var profilerCell = document.createElement('td');

                            if (request.profilerUrl) {
                                var profilerLink = document.createElement('a');
                                profilerLink.setAttribute('href', request.profilerUrl);
                                profilerLink.textContent = request.profile;
                                profilerCell.appendChild(profilerLink);
                            } else {
                                profilerCell.textContent = 'n/a';
                            }

                            row.appendChild(profilerCell);

                            var requestState = 'ok';
                            if (request.error) {
                                requestState = 'error';
                                if (state != \"loading\" && i > requestStack.length - 4) {
                                    state = 'error';
                                }
                            } else if (request.loading) {
                                requestState = 'loading';
                                state = 'loading';
                            }
                            row.className = 'sf-ajax-request sf-ajax-request-' + requestState;
                        }

                        var infoSpan = document.querySelectorAll(\".sf-toolbar-ajax-info\")[0];
                        var children = collectionToArray(tbody.children);
                        for (var i = 0; i < children.length; i++) {
                            tbody.removeChild(children[i]);
                        }
                        tbody.appendChild(rows);

                        if (infoSpan) {
                            var text = requestStack.length + ' AJAX request' + (requestStack.length > 1 ? 's' : '');
                            infoSpan.textContent = text;
                        }

                        ajaxToolbarPanel.style.display = 'block';
                    } else {
                        ajaxToolbarPanel.style.display = 'none';
                    }
                }

                requestCounter[0].textContent = requestStack.length;

                var className = 'sf-toolbar-ajax-requests sf-toolbar-value';
                requestCounter[0].className = className;

                if (state == 'ok') {
                    Sfjs.removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                    Sfjs.removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                } else if (state == 'error') {
                    Sfjs.addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                    Sfjs.removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                } else {
                    Sfjs.addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                }
            };

        var addEventListener;

        var el = document.createElement('div');
        if (!('addEventListener' in el)) {
            addEventListener = function (element, eventName, callback) {
                element.attachEvent('on' + eventName, callback);
            };
        } else {
            addEventListener = function (element, eventName, callback) {
                element.addEventListener(eventName, callback, false);
            };
        }

        ";
        // line 229
        if ((isset($context["excluded_ajax_paths"]) || array_key_exists("excluded_ajax_paths", $context))) {
            // line 230
            echo "            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {
                var proxied = XMLHttpRequest.prototype.open;

                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
                    var self = this;

                    /* prevent logging AJAX calls to static and inline files, like templates */
                    var path = url;
                    if (url.substr(0, 1) === '/') {
                        if (0 === url.indexOf('";
            // line 239
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "basePath", []), "js"), "html", null, true);
            echo "')) {
                            path = url.substr(";
            // line 240
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["request"] ?? null), "basePath", [])), "html", null, true);
            echo ");
                        }
                    }
                    else if (0 === url.indexOf('";
            // line 243
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($this->getAttribute(($context["request"] ?? null), "schemeAndHttpHost", []) . $this->getAttribute(($context["request"] ?? null), "basePath", [])), "js"), "html", null, true);
            echo "')) {
                        path = url.substr(";
            // line 244
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($this->getAttribute(($context["request"] ?? null), "schemeAndHttpHost", []) . $this->getAttribute(($context["request"] ?? null), "basePath", []))), "html", null, true);
            echo ");
                    }

                    if (!path.match(new RegExp(";
            // line 247
            echo twig_jsonencode_filter(($context["excluded_ajax_paths"] ?? null));
            echo "))) {
                        var stackElement = {
                            loading: true,
                            error: false,
                            url: url,
                            method: method,
                            start: new Date()
                        };

                        requestStack.push(stackElement);

                        this.addEventListener('readystatechange', function() {
                            if (self.readyState == 4) {
                                stackElement.duration = new Date() - stackElement.start;
                                stackElement.loading = false;
                                stackElement.error = self.status < 200 || self.status >= 400;

                                extractHeaders(self, stackElement);

                                Sfjs.renderAjaxRequests();
                            }
                        }, false);

                        Sfjs.renderAjaxRequests();
                    }

                    proxied.apply(this, Array.prototype.slice.call(arguments));
                };
            }
        ";
        }
        // line 277
        echo "
        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            toggleClass: toggleClass,

            getPreference: getPreference,

            setPreference: setPreference,

            addEventListener: addEventListener,

            request: request,

            renderAjaxRequests: renderAjaxRequests,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            },

            createTabs: function() {
                var tabGroups = document.querySelectorAll('.sf-tabs');

                /* create the tab navigation for each group of tabs */
                for (var i = 0; i < tabGroups.length; i++) {
                    var tabs = tabGroups[i].querySelectorAll('.tab');
                    var tabNavigation = document.createElement('ul');
                    tabNavigation.className = 'tab-navigation';

                    for (var j = 0; j < tabs.length; j++) {
                        var tabId = 'tab-' + i + '-' + j;
                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;

                        var tabNavigationItem = document.createElement('li');
                        tabNavigationItem.setAttribute('data-tab-id', tabId);
                        if (j == 0) { Sfjs.addClass(tabNavigationItem, 'active'); }
                        if (Sfjs.hasClass(tabs[j], 'disabled')) { Sfjs.addClass(tabNavigationItem, 'disabled'); }
                        tabNavigationItem.innerHTML = tabTitle;
                        tabNavigation.appendChild(tabNavigationItem);

                        var tabContent = tabs[j].querySelector('.tab-content');
                        tabContent.parentElement.setAttribute('id', tabId);
                    }

                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);
                }

                /* display the active tab and add the 'click' event listeners */
                for (i = 0; i < tabGroups.length; i++) {
                    tabNavigation = tabGroups[i].querySelectorAll('.tab-navigation li');

                    for (j = 0; j < tabNavigation.length; j++) {
                        tabId = tabNavigation[j].getAttribute('data-tab-id');
                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';

                        if (Sfjs.hasClass(tabNavigation[j], 'active')) {
                            document.getElementById(tabId).className = 'block';
                        } else {
                            document.getElementById(tabId).className = 'hidden';
                        }

                        tabNavigation[j].addEventListener('click', function(e) {
                            var activeTab = e.target || e.srcElement;

                            /* needed because when the tab contains HTML contents, user can click */
                            /* on any of those elements instead of their parent '<li>' element */
                            while (activeTab.tagName.toLowerCase() !== 'li') {
                                activeTab = activeTab.parentNode;
                            }

                            /* get the full list of tabs through the parent of the active tab element */
                            var tabNavigation = activeTab.parentNode.children;
                            for (var k = 0; k < tabNavigation.length; k++) {
                                var tabId = tabNavigation[k].getAttribute('data-tab-id');
                                document.getElementById(tabId).className = 'hidden';
                                Sfjs.removeClass(tabNavigation[k], 'active');
                            }

                            Sfjs.addClass(activeTab, 'active');
                            var activeTabId = activeTab.getAttribute('data-tab-id');
                            document.getElementById(activeTabId).className = 'block';
                        });
                    }
                }
            },

            createToggles: function() {
                var toggles = document.querySelectorAll('.sf-toggle');

                for (var i = 0; i < toggles.length; i++) {
                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');
                    var element = document.querySelector(elementSelector);

                    Sfjs.addClass(element, 'sf-toggle-content');

                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {
                        Sfjs.addClass(element, 'sf-toggle-visible');
                    } else {
                        Sfjs.addClass(element, 'sf-toggle-hidden');
                    }

                    Sfjs.addEventListener(toggles[i], 'click', function(e) {
                        e.preventDefault();

                        var toggle = e.target || e.srcElement;

                        /* needed because when the toggle contains HTML contents, user can click */
                        /* on any of those elements instead of their parent '.sf-toggle' element */
                        while (!Sfjs.hasClass(toggle, 'sf-toggle')) {
                            toggle = toggle.parentNode;
                        }

                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));

                        Sfjs.toggleClass(element, 'sf-toggle-hidden');
                        Sfjs.toggleClass(element, 'sf-toggle-visible');

                        /* the toggle doesn't change its contents when clicking on it */
                        if (!toggle.hasAttribute('data-toggle-alt-content')) {
                            return;
                        }

                        if (!toggle.hasAttribute('data-toggle-original-content')) {
                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);
                        }

                        var currentContent = toggle.innerHTML;
                        var originalContent = toggle.getAttribute('data-toggle-original-content');
                        var altContent = toggle.getAttribute('data-toggle-alt-content');
                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;
                    });
                }
            }
        };
    })();

    Sfjs.addEventListener(window, 'load', function() {
        Sfjs.createTabs();
        Sfjs.createToggles();
    });

/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 277,  292 => 247,  286 => 244,  282 => 243,  276 => 240,  272 => 239,  261 => 230,  259 => 229,  33 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/base_js.html.twig", "/var/www/mapbender/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/base_js.html.twig");
    }
}
