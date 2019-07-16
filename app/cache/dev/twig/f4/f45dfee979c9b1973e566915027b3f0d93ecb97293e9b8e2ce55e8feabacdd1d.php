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
class __TwigTemplate_31f5076638421b8e66ad8d656f057721bac35f795b98b26103160b835bf23666 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOMUser/ACL/index.html.twig"));

        $this->parent = $this->loadTemplate("MapbenderManagerBundle::manager.html.twig", "@FOMUser/ACL/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.access_control_lists"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_manager_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "manager_content"));

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
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["classes"] ?? $this->getContext($context, "classes"))));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  117 => 26,  105 => 22,  100 => 20,  91 => 18,  85 => 16,  81 => 15,  73 => 10,  69 => 9,  64 => 6,  58 => 5,  46 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"MapbenderManagerBundle::manager.html.twig\" %}

{% block title %}{{ 'fom.user.acl.index.access_control_lists' | trans }}{% endblock %}

{% block manager_content %}
<table class=\"table userControlTable\">
  <thead>
    <tr>
      <th>{{ \"fom.user.acl.index.name\" | trans }}</th>
      <th>{{ \"fom.user.acl.index.class\" | trans }}</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    {% for class, name in classes|sort %}
      <tr id=\"app-{{ class|lower }}\">
        <td>
          <a class=\"labelText\" href=\"{{ path('fom_user_acl_edit', {'class': class}) }}\" title=\"{{ 'fom.user.acl.index.edit' | trans }}\">{{ name }}</a>
        </td>
        <td class=\"description\">{{ class }}</td>
        <td class=\"iconColumn\">
          <a class=\"iconEdit iconSmall\" href=\"{{ path('fom_user_acl_edit', {'class': class}) }}\" title=\"{{ 'fom.user.acl.index.edit' | trans }}\"></a>
        </td>
      </tr>
    {% endfor %}
  </tbody>
</table>

{% endblock %}
", "@FOMUser/ACL/index.html.twig", "/var/www/mapbender/fom/src/FOM/UserBundle/Resources/views/ACL/index.html.twig");
    }
}
