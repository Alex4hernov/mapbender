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

/* @FOMUser/ACL/index.html.twig */
class __TwigTemplate_c0706d278f2c9453a205a220787fad91530d4c22d3e7f660c854c4c04b356227 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'manager_content' => [$this, 'block_manager_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@FOMUser/ACL/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.access_control_lists"), "html", null, true);
    }

    // line 5
    public function block_manager_content($context, array $blocks = [])
    {
        // line 6
        echo "<table class=\"table userControlTable\">
  <thead>
    <tr>
      <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.name"), "html", null, true);
        echo "</th>
      <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.class"), "html", null, true);
        echo "</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["classes"] ?? null)));
        foreach ($context['_seq'] as $context["class"] => $context["name"]) {
            // line 16
            echo "      <tr id=\"app-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["class"]), "html", null, true);
            echo "\">
        <td>
          <a class=\"labelText\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_acl_edit", ["class" => $context["class"]]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.edit"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
        </td>
        <td class=\"description\">";
            // line 20
            echo twig_escape_filter($this->env, $context["class"], "html", null, true);
            echo "</td>
        <td class=\"iconColumn\">
          <a class=\"iconEdit iconSmall\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_acl_edit", ["class" => $context["class"]]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.edit"), "html", null, true);
            echo "\"></a>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['class'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "@FOMUser/ACL/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  90 => 22,  85 => 20,  76 => 18,  70 => 16,  66 => 15,  58 => 10,  54 => 9,  49 => 6,  46 => 5,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@FOMUser/ACL/index.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/ACL/index.html.twig");
    }
}
