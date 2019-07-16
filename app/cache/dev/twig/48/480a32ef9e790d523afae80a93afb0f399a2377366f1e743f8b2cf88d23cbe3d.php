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

/* @MapbenderCore/Login/login.html.twig */
class __TwigTemplate_4a697ddf2ffdf8710fe873995a7e0cc2c69238f544d462d41f4ddb1ff9e7a804 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
            'box_content' => [$this, 'block_box_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "MapbenderCoreBundle:Login:box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("MapbenderCoreBundle:Login:box.html.twig", "@MapbenderCore/Login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        // line 3
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", ["slug" => "mb3-login", "type" => "css"]), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/cookieconsent/build/cookieconsent.min.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.title"), "html", null, true);
    }

    // line 9
    public function block_box_content($context, array $blocks = [])
    {
        // line 10
        echo "  <div class=\"loginBox login\">
    <h2 class=\"contentTitle\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.caption"), "html", null, true);
        echo "</h2>

    <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_login_logincheck");
        echo "\" method=\"post\" id=\"login\" novalidate=\"novalidate\">
      ";
        // line 14
        if (($context["error"] ?? null)) {
            // line 15
            echo "        <div class=\"messageBox error\">
          ";
            // line 16
            if (($this->getAttribute(($context["error"] ?? null), "message", []) == "Bad credentials")) {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.errors.bad-credentials"), "html", null, true);
                echo "
          ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "message", [])), "html", null, true);
                echo "
          ";
            }
            // line 21
            echo "        </div>
      ";
        }
        // line 23
        echo "
      <label class=\"left labelInput\" for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.username"), "html", null, true);
        echo ":</label>
      <input class=\"input\" id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" autofocus />

      <div class=\"clearContainer\"></div>

      <label class=\"left labelInput\" for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.password"), "html", null, true);
        echo ":</label>
      <input class=\"input\" type=\"password\" id=\"password\" name=\"_password\" />

      <div class=\"clearContainer\"></div>

      ";
        // line 34
        if ((($context["selfregister"] ?? null) == true)) {
            // line 35
            echo "      <a class=\"linkButton iconLinkButton left\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_registration_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.register"), "html", null, true);
            echo "</a>
      ";
        }
        // line 37
        echo "      ";
        if ((($context["reset_password"] ?? null) == true)) {
            // line 38
            echo "      <a class=\"linkButton iconLinkButton left\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_password_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.forgot_password"), "html", null, true);
            echo "?</a>
      ";
        }
        // line 40
        echo "
      <input type=\"submit\" class=\"right button\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.login"), "html", null, true);
        echo "\" />
      <div class=\"clearContainer\"></div>
    </form>
  </div>
  <script type=\"text/javascript\">
    if(top != window) {
      top.location.href = location.href;
      top.location.reload();
    }
    var Mapbender = Mapbender || {};
    Mapbender.configuration = {elements:{}};
  </script>
    ";
        // line 53
        $this->loadTemplate("MapbenderCoreBundle::cookieconsent.html.twig", "@MapbenderCore/Login/login.html.twig", 53)->display($context);
    }

    public function getTemplateName()
    {
        return "@MapbenderCore/Login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 53,  145 => 41,  142 => 40,  134 => 38,  131 => 37,  123 => 35,  121 => 34,  113 => 29,  106 => 25,  102 => 24,  99 => 23,  95 => 21,  89 => 19,  83 => 17,  81 => 16,  78 => 15,  76 => 14,  72 => 13,  67 => 11,  64 => 10,  61 => 9,  55 => 7,  49 => 4,  44 => 3,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderCore/Login/login.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/CoreBundle/Resources/views/Login/login.html.twig");
    }
}
