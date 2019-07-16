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

/* @MapbenderManager/Element/edit.html.twig */
class __TwigTemplate_b822b3107fe7dd061154a0aa9a16ab3eee1c9031ecade62e35904cb3111b2d47 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'manager_content' => [$this, 'block_manager_content'],
            'form_fields' => [$this, 'block_form_fields'],
            'form_fields_common' => [$this, 'block_form_fields_common'],
            'form_fields_dynamic' => [$this, 'block_form_fields_dynamic'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('manager_content', $context, $blocks);
    }

    public function block_manager_content($context, array $blocks = [])
    {
        // line 2
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', ["action" => ($context["formAction"] ?? null), "method" => "POST", "attr" => ["novalidate" => "novalidate", "id" => "elementForm"]]);
        // line 4
        echo "

    ";
        // line 6
        $this->displayBlock('form_fields', $context, $blocks);
        // line 22
        echo "  ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "

  <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/element-edit.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 6
    public function block_form_fields($context, array $blocks = [])
    {
        // line 7
        echo "        ";
        $this->displayBlock('form_fields_common', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('form_fields_dynamic', $context, $blocks);
        // line 21
        echo "    ";
    }

    // line 7
    public function block_form_fields_common($context, array $blocks = [])
    {
        // line 8
        echo "            ";
        // line 9
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", []), 'row');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "class", []), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region", []), 'row');
        echo "
        ";
    }

    // line 13
    public function block_form_fields_dynamic($context, array $blocks = [])
    {
        // line 14
        echo "            ";
        // line 15
        echo "            ";
        if (((isset($context["theme"]) || array_key_exists("theme", $context)) && (($context["theme"] ?? null) != ""))) {
            // line 16
            echo "                ";
            $this->loadTemplate(($context["theme"] ?? null), "@MapbenderManager/Element/edit.html.twig", 16)->display($context);
            // line 17
            echo "            ";
        } else {
            // line 18
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
            ";
        }
        // line 20
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@MapbenderManager/Element/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 20,  108 => 18,  105 => 17,  102 => 16,  99 => 15,  97 => 14,  94 => 13,  88 => 11,  84 => 10,  79 => 9,  77 => 8,  74 => 7,  70 => 21,  67 => 13,  64 => 7,  61 => 6,  55 => 24,  49 => 22,  47 => 6,  43 => 4,  40 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MapbenderManager/Element/edit.html.twig", "/var/www/mapbender/mapbender/src/Mapbender/ManagerBundle/Resources/views/Element/edit.html.twig");
    }
}
