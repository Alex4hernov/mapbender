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

/* @Security/Collector/security.html.twig */
class __TwigTemplate_d6cf78e82d5f5fb3fa05353165de882801b6492334de4c8227c99106a2fab258 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
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
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        echo "Security";
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "tokenClass", [])) {
            // line 7
            echo "        ";
            $context["is_authenticated"] = ($this->getAttribute(($context["collector"] ?? null), "enabled", []) && $this->getAttribute(($context["collector"] ?? null), "authenticated", []));
            // line 8
            echo "        ";
            $context["color_code"] = ((($context["is_authenticated"] ?? null)) ? ("") : ("yellow"));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["color_code"] = (($this->getAttribute(($context["collector"] ?? null), "enabled", [])) ? ("red") : (""));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "user", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "user", []), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if ($this->getAttribute(($context["collector"] ?? null), "tokenClass", [])) {
            // line 20
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "user", []), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 27
            echo ((($context["is_authenticated"] ?? null)) ? ("green") : ("red"));
            echo "\">";
            echo ((($context["is_authenticated"] ?? null)) ? ("Yes") : ("No"));
            echo "</span>
            </div>

            ";
            // line 30
            if (($this->getAttribute(($context["collector"] ?? null), "tokenClass", []) != null)) {
                // line 31
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                <span>";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["collector"] ?? null), "tokenClass", []));
                echo "</span>
            </div>
            ";
            }
            // line 36
            echo "            ";
            if ($this->getAttribute(($context["collector"] ?? null), "logoutUrl", [])) {
                // line 37
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Actions</b>
                <span><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "logoutUrl", []), "html", null, true);
                echo "\">Logout</a></span>
            </div>
            ";
            }
            // line 42
            echo "        ";
        } elseif ($this->getAttribute(($context["collector"] ?? null), "enabled", [])) {
            // line 43
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>You are not authenticated.</span>
            </div>
        ";
        } else {
            // line 47
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>
        ";
        }
        // line 51
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["color_code"] ?? null)]);
        echo "
";
    }

    // line 56
    public function block_menu($context, array $blocks = [])
    {
        // line 57
        echo "    <span class=\"label ";
        echo ((( !$this->getAttribute(($context["collector"] ?? null), "enabled", []) ||  !$this->getAttribute(($context["collector"] ?? null), "tokenClass", []))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 58
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
    }

    // line 63
    public function block_panel($context, array $blocks = [])
    {
        // line 64
        echo "    <h2>Security Token</h2>

    ";
        // line 66
        if ($this->getAttribute(($context["collector"] ?? null), "tokenClass", [])) {
            // line 67
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            ((($this->getAttribute(($context["collector"] ?? null), "user", []) == "anon.")) ? (print ("Anonymous")) : (print (twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "user", []), "html", null, true))));
            echo "</span>
                <span class=\"label\">Username</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 74
            echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? null), "authenticated", [])) ? ("yes") : ("no"))) . ".svg"));
            echo "</span>
                <span class=\"label\">Authenticated</span>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">Property</th>
                    <th scope=\"col\">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Roles</th>
                    <td>
                        ";
            // line 90
            ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "roles", []))) ? (print ("none")) : (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\YamlExtension')->encode($this->getAttribute(($context["collector"] ?? null), "roles", [])), "html", null, true))));
            echo "

                        ";
            // line 92
            if (( !$this->getAttribute(($context["collector"] ?? null), "authenticated", []) && twig_test_empty($this->getAttribute(($context["collector"] ?? null), "roles", [])))) {
                // line 93
                echo "                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                        ";
            }
            // line 95
            echo "                    </td>
                </tr>

                ";
            // line 98
            if ($this->getAttribute(($context["collector"] ?? null), "supportsRoleHierarchy", [])) {
                // line 99
                echo "                <tr>
                    <th>Inherited Roles</th>
                    <td>";
                // line 101
                ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "inheritedRoles", []))) ? (print ("none")) : (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\YamlExtension')->encode($this->getAttribute(($context["collector"] ?? null), "inheritedRoles", [])), "html", null, true))));
                echo "</td>
                </tr>
                ";
            }
            // line 104
            echo "
                ";
            // line 105
            if ($this->getAttribute(($context["collector"] ?? null), "tokenClass", [])) {
                // line 106
                echo "                <tr>
                    <th>Token class</th>
                    <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "tokenClass", []), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            // line 111
            echo "            </tbody>
        </table>
    ";
        } elseif ($this->getAttribute(        // line 113
($context["collector"] ?? null), "enabled", [])) {
            // line 114
            echo "        <div class=\"empty\">
            <p>There is no security token.</p>
        </div>
    ";
        } else {
            // line 118
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 118,  269 => 114,  267 => 113,  263 => 111,  257 => 108,  253 => 106,  251 => 105,  248 => 104,  242 => 101,  238 => 99,  236 => 98,  231 => 95,  227 => 93,  225 => 92,  220 => 90,  201 => 74,  193 => 69,  189 => 67,  187 => 66,  183 => 64,  180 => 63,  172 => 58,  167 => 57,  164 => 56,  158 => 53,  155 => 52,  152 => 51,  146 => 47,  140 => 43,  137 => 42,  131 => 39,  127 => 37,  124 => 36,  118 => 33,  114 => 31,  112 => 30,  104 => 27,  96 => 22,  92 => 20,  89 => 19,  87 => 18,  84 => 17,  79 => 15,  74 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Security/Collector/security.html.twig", "/var/www/mapbender/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views/Collector/security.html.twig");
    }
}
