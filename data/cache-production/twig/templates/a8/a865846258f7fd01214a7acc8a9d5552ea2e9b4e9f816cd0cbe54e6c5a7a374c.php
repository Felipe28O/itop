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

/* base/layouts/page-content/with-side-content.html.twig */
class __TwigTemplate_c6ad2b6d2723e467fa19c8a2712517fdf88fad370586c3d934f9ccf03e10597e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboPageCenterContainerExtraClasses' => [$this, 'block_iboPageCenterContainerExtraClasses'],
            'iboPageCenterContainer' => [$this, 'block_iboPageCenterContainer'],
            'iboPageSideContent' => [$this, 'block_iboPageSideContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/layouts/page-content/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base/layouts/page-content/layout.html.twig", "base/layouts/page-content/with-side-content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_iboPageCenterContainerExtraClasses($context, array $blocks = [])
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("iboPageCenterContainerExtraClasses", $context, $blocks);
        echo "
\t";
        // line 5
        if ( !$this->getAttribute(($context["aPage"] ?? null), "isPrintable", [])) {
            echo " ibo-center-container--with-side-content";
        }
    }

    // line 8
    public function block_iboPageCenterContainer($context, array $blocks = [])
    {
        // line 9
        echo "\t";
        $this->displayParentBlock("iboPageCenterContainer", $context, $blocks);
        echo "
\t<aside id=\"ibo-side-content\" data-role=\"ibo-side-content\">
\t\t";
        // line 11
        $this->displayBlock('iboPageSideContent', $context, $blocks);
        // line 16
        echo "\t</aside>
";
    }

    // line 11
    public function block_iboPageSideContent($context, array $blocks = [])
    {
        // line 12
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSideBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 13
            echo "\t\t\t\t";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "base/layouts/page-content/with-side-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  79 => 13,  74 => 12,  71 => 11,  66 => 16,  64 => 11,  58 => 9,  55 => 8,  49 => 5,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/page-content/with-side-content.html.twig", "/var/www/html/itop/templates/base/layouts/page-content/with-side-content.html.twig");
    }
}
