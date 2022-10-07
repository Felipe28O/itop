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

/* base/layouts/page-content/layout.html.twig */
class __TwigTemplate_8f1961cc63e8ad7727444c6fb59e2e171e8fce4066801dc0e97c9528360f808a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboPageCenterContainerExtraClasses' => [$this, 'block_iboPageCenterContainerExtraClasses'],
            'iboPageCenterContainer' => [$this, 'block_iboPageCenterContainer'],
            'iboPageHeader' => [$this, 'block_iboPageHeader'],
            'iboPageMainContent' => [$this, 'block_iboPageMainContent'],
            'iboPageExtraHtml' => [$this, 'block_iboPageExtraHtml'],
            'iboPageFooter' => [$this, 'block_iboPageFooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"ibo-center-container\" class=\"ibo-center-container ";
        $this->displayBlock('iboPageCenterContainerExtraClasses', $context, $blocks);
        echo "\" data-role=\"ibo-center-container\">
\t";
        // line 2
        $this->displayBlock('iboPageCenterContainer', $context, $blocks);
        // line 24
        echo "</div>";
    }

    // line 1
    public function block_iboPageCenterContainerExtraClasses($context, array $blocks = [])
    {
    }

    // line 2
    public function block_iboPageCenterContainer($context, array $blocks = [])
    {
        // line 3
        echo "\t\t<main id=\"ibo-main-content\">
\t\t\t";
        // line 5
        echo "\t\t\t";
        $this->displayBlock('iboPageHeader', $context, $blocks);
        // line 8
        echo "
\t\t\t";
        // line 9
        $this->displayBlock('iboPageMainContent', $context, $blocks);
        // line 14
        echo "\t\t\t";
        $this->displayBlock('iboPageExtraHtml', $context, $blocks);
        // line 17
        echo "
\t\t\t";
        // line 19
        echo "\t\t\t";
        $this->displayBlock('iboPageFooter', $context, $blocks);
        // line 22
        echo "\t\t</main>
\t";
    }

    // line 5
    public function block_iboPageHeader($context, array $blocks = [])
    {
        // line 6
        echo "\t\t\t\t";
        echo twig_include($this->env, $context, "pages/backoffice/extension-blocks/header.html.twig");
        echo "
\t\t\t";
    }

    // line 9
    public function block_iboPageMainContent($context, array $blocks = [])
    {
        // line 10
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetMainBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 11
            echo "\t\t\t\t\t";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t";
    }

    // line 14
    public function block_iboPageExtraHtml($context, array $blocks = [])
    {
        // line 15
        echo "\t\t\t\t";
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetExtraHtmlContent", [], "method");
        echo "
\t\t\t";
    }

    // line 19
    public function block_iboPageFooter($context, array $blocks = [])
    {
        // line 20
        echo "\t\t\t\t";
        echo twig_include($this->env, $context, "pages/backoffice/extension-blocks/footer.html.twig");
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "base/layouts/page-content/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 20,  121 => 19,  114 => 15,  111 => 14,  107 => 13,  98 => 11,  93 => 10,  90 => 9,  83 => 6,  80 => 5,  75 => 22,  72 => 19,  69 => 17,  66 => 14,  64 => 9,  61 => 8,  58 => 5,  55 => 3,  52 => 2,  47 => 1,  43 => 24,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/page-content/layout.html.twig", "/var/www/html/itop/templates/base/layouts/page-content/layout.html.twig");
    }
}
