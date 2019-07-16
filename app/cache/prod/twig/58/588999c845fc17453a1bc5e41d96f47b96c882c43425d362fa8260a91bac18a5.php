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

/* @FOMUser/User/index.html.twig */
class __TwigTemplate_ca6b061b4aa99a75c7327a6c4d0a8b0f31697a4ea52321c5bffb2e8b82dab248 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'manager_content' => [$this, 'block_manager_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@FOMUser/User/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.title"), "html", null, true);
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_manager_content($context, array $blocks = [])
    {
        // line 10
        echo "
";
        // line 11
        if (($context["create_permission"] ?? null)) {
            // line 12
            echo "<a class=\"iconAdd iconBig right\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_new");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.add_new_user"), "html", null, true);
            echo "\"></a>
";
        }
        // line 14
        echo "
";
        // line 15
        if ((twig_length_filter($this->env, ($context["users"] ?? null)) > 0)) {
            // line 16
            echo "  <label for=\"inputFilterUsers\" class=\"labelInput left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.filter"), "html", null, true);
            echo "</label>
  <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>

  <div class=\"clearContainer\"></div>
  <table id=\"listFilterUsers\" class=\"table userControlTable listFilterContainer\">
    <thead id=\"usersHead\">
      <tr class=\"doNotFilter\">
        <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.name"), "html", null, true);
            echo "</th>
        <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.email"), "html", null, true);
            echo "</th>
        <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.groups"), "html", null, true);
            echo "</th>
        <th></th>
      </tr>
    </thead>
    <tbody id=\"usersBody\">
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 31
                echo "        <tr id=\"app-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", []), "html", null, true);
                echo "\" class=\"filterItem\">
          <td>
            ";
                // line 33
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["user"])) {
                    // line 34
                    echo "            <a class=\"labelText\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.edit_user"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 36
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "
            ";
                }
                // line 38
                echo "          </td>
          <td><a class=\"linkButton\" href=\"mailto:";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.contact_user"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                echo "</a></td>
          <td>
            <ul>
              ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "groups", []));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 43
                    echo "              <li class='doNotFilter'><a class=\"linkButton\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_edit", ["id" => $this->getAttribute($context["group"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.edit_group"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []), "html", null, true);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            </ul>
          </td>
          <td class=\"iconColumn\">
            ";
                // line 48
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["user"])) {
                    // line 49
                    echo "              <a class=\"iconEdit iconSmall\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_edit", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.edit_user"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "\"></a>
            ";
                }
                // line 51
                echo "            ";
                if ((($this->getAttribute($context["user"], "id", []) != 1) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["user"]))) {
                    // line 52
                    echo "              <span class=\"iconRemove iconSmall\"
                title=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.delete_user"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "\"
                data-url=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_delete", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
                    echo "\"
                data-id=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", []), "html", null, true);
                    echo "\"
              ></span>
            ";
                }
                // line 58
                echo "          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </tbody>
  </table>
";
        } else {
            // line 64
            echo "  <p class=\"description left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.no_users_available"), "html", null, true);
            echo "</p>
";
        }
        // line 66
        echo "<div class=\"clearContainer\"></div>
";
    }

    // line 69
    public function block_js($context, array $blocks = [])
    {
        // line 70
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/user-control.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@FOMUser/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 71,  234 => 70,  231 => 69,  226 => 66,  220 => 64,  215 => 61,  207 => 58,  201 => 55,  197 => 54,  191 => 53,  188 => 52,  185 => 51,  175 => 49,  173 => 48,  168 => 45,  153 => 43,  149 => 42,  139 => 39,  136 => 38,  130 => 36,  118 => 34,  116 => 33,  110 => 31,  106 => 30,  98 => 25,  94 => 24,  90 => 23,  79 => 16,  77 => 15,  74 => 14,  66 => 12,  64 => 11,  61 => 10,  58 => 9,  51 => 6,  48 => 5,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@FOMUser/User/index.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/User/index.html.twig");
    }
}
