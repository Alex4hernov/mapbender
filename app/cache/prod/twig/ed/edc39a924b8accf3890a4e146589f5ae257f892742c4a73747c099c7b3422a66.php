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

/* FOMUserBundle:User:container.html.twig */
class __TwigTemplate_a77b7b848323419df8638842843e24b0d1e505fad2d520559afa7fcee774c364 extends \Twig\Template
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
        echo "<div id=\"userGroupTabContainer\" class=\"tabContainer userGroupTabContainer userTabContainer\">
  <ul class=\"tabs\">
    <li id=\"tabBaseData\" class=\"tab active\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.base_data"), "html", null, true);
        echo "</li>
    ";
        // line 4
        if ($this->getAttribute(($context["form"] ?? null), "profile", [], "any", true, true)) {
            // line 5
            echo "      <li id=\"tabProfile\" class=\"tab\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.profile"), "html", null, true);
            echo "</li>
    ";
        }
        // line 7
        echo "    <li id=\"tabGroups\" class=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.groups"), "html", null, true);
        echo "</li>
    <li id=\"tabSecurity\" class=\"tab\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.security"), "html", null, true);
        echo "</li>
  </ul>

  <div id=\"containerBaseData\" class=\"container active containerBaseData\">
    ";
        // line 13
        echo "    <label class=\"left labelInput\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "username", []), "vars", []), "id", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.username"), "html", null, true);
        echo ":<span class=\"required\">*</span></label>
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", []), 'widget', ["disabled" =>  !$this->getAttribute(($context["form"] ?? null), "groups", [], "any", true, true)]);
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", []), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", []), 'widget');
        echo "
    <div class=\"clearContainer\"></div>

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "password", []));
        foreach ($context['_seq'] as $context["_key"] => $context["pw"]) {
            // line 21
            echo "      ";
            if (($this->getAttribute($this->getAttribute($context["pw"], "vars", []), "name", [], "array") == "first")) {
                // line 22
                echo "        <label class=\"left labelInput\" for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pw"], "vars", []), "id", [], "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.choose_password"), "html", null, true);
                echo ":<span class=\"required\">*</span></label>
      ";
            } else {
                // line 24
                echo "        <label class=\"left labelInput\" for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pw"], "vars", []), "id", [], "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.confirm_password"), "html", null, true);
                echo ":<span class=\"required\">*</span></label>
      ";
            }
            // line 26
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["pw"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "activated", [], "any", true, true)) {
            // line 29
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "activated", []), 'widget');
            echo "<label for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "activated", []), "vars", []), "id", []), "html", null, true);
            echo "\" class=\"labelCheck\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.activated"), "html", null, true);
            echo "</label>
    <div class=\"clearContainer\"></div>
    ";
        }
        // line 32
        echo "  </div>
  ";
        // line 33
        if ($this->getAttribute(($context["form"] ?? null), "profile", [], "any", true, true)) {
            // line 34
            echo "  <div id=\"containerProfile\" class=\"container containerProfile\">
      ";
            // line 35
            if (($context["profile_template"] ?? null)) {
                // line 36
                echo "          ";
                $this->loadTemplate(($context["profile_template"] ?? null), "FOMUserBundle:User:container.html.twig", 36)->display($context);
                // line 37
                echo "      ";
            } else {
                // line 38
                echo "          ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "profile", []), 'widget');
                echo "
      ";
            }
            // line 40
            echo "  </div>
  ";
        }
        // line 42
        echo "
  <div id=\"containerGroups\" class=\"container containerGroups\">
  ";
        // line 44
        if ($this->getAttribute(($context["form"] ?? null), "groups", [], "any", true, true)) {
            // line 45
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "groups", [])) > 0)) {
                // line 46
                echo "
      ";
                // line 47
                $context["group_count"] = (("<span>" . twig_length_filter($this->env, $this->getAttribute(($context["user"] ?? null), "groups", []))) . "</span>");
                // line 48
                echo "
      <label for=\"inputFilterUsers\" class=\"labelInput left\">";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.filter"), "html", null, true);
                echo "</label>
      <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>
      <div class=\"clearContainer\"></div>

      <table id=\"listFilterUsers\" class=\"listFilterContainer tableCore tableUserGroups\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
          <tr class=\"doNotFilter\">
            <th>";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.name"), "html", null, true);
                echo "</th>
            <th class=\"description\"><span id=\"selectedUsersGroups\">";
                // line 57
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["user"] ?? null), "groups", [])), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.users_of_selected", ["%users_count%" => twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "groups", []))]), "html", null, true);
                echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "groups", []));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 62
                    echo "            <tr class=\"filterItem\">
              <td colspan=\"2\">
                <div class=\"tdContentWrapper iconGroup\">
                  ";
                    // line 65
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["group"], 'label');
                    echo "
                  ";
                    // line 66
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["group"], 'widget');
                    echo "
                </div>
              </td>
            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </tbody>
      </table>

    ";
            } else {
                // line 75
                echo "      <p class=\"description left\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.no_goups_defined."), "html", null, true);
                echo "</p>
      <div class=\"clearContainer\"></div>
    ";
            }
            // line 78
            echo "  ";
        } else {
            // line 79
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.manage_not_allowed"), "html", null, true);
            echo "</p>
  ";
        }
        // line 81
        echo "  </div>

  <div id=\"containerSecurity\" class=\"container containerSecurity\">
    ";
        // line 84
        if ($this->getAttribute(($context["form"] ?? null), "acl", [], "any", true, true)) {
            // line 85
            echo "    <a id=\"addPermission\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_acl_overview");
            echo "\" class=\"iconAdd iconBig right\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.add_users_groups"), "html", null, true);
            echo "\"></a>
    <div class=\"clearContainer\"></div>
    ";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "acl", []), 'widget');
            echo "
    ";
        } else {
            // line 89
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.manage_not_allowed_security"), "html", null, true);
            echo "</p>
    ";
        }
        // line 91
        echo "  </div>
</div>

<div class=\"clearContainer\"></div>
";
    }

    public function getTemplateName()
    {
        return "FOMUserBundle:User:container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 91,  258 => 89,  253 => 87,  245 => 85,  243 => 84,  238 => 81,  232 => 79,  229 => 78,  222 => 75,  216 => 71,  205 => 66,  201 => 65,  196 => 62,  192 => 61,  183 => 57,  179 => 56,  169 => 49,  166 => 48,  164 => 47,  161 => 46,  158 => 45,  156 => 44,  152 => 42,  148 => 40,  142 => 38,  139 => 37,  136 => 36,  134 => 35,  131 => 34,  129 => 33,  126 => 32,  115 => 29,  112 => 28,  103 => 26,  95 => 24,  87 => 22,  84 => 21,  80 => 20,  74 => 17,  70 => 16,  65 => 14,  58 => 13,  51 => 8,  46 => 7,  40 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOMUserBundle:User:container.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/User/container.html.twig");
    }
}
