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

/* pages/backoffice/extension-blocks/banner.html.twig */
class __TwigTemplate_bdb3ebda0b28a0560cb9cfb1065958e314ce67b86a7a91a3bf2023e1afd7afe3 extends \Twig\Template
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
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "\t<div id=\"ibo-page-banner\" data-role=\"ibo-page-banner\">
\t\t";
        // line 5
        if ( !twig_test_empty($this->getAttribute(($context["aLayouts"] ?? null), "sBanner", []))) {
            // line 6
            echo "\t\t\t";
            echo $this->getAttribute(($context["aLayouts"] ?? null), "sBanner", []);
            echo "
\t\t";
        }
        // line 8
        echo "\t\t";
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["aLayouts"] ?? null), "oBanner", []), ["aPage" => ($context["aPage"] ?? null)]]);
        echo "
\t</div>
";
        $___internal_47fdf804abeb614be53ddddaf96bb0f033bc756303b9504ef98d85334b580506_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_47fdf804abeb614be53ddddaf96bb0f033bc756303b9504ef98d85334b580506_);
    }

    public function getTemplateName()
    {
        return "pages/backoffice/extension-blocks/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  43 => 8,  37 => 6,  35 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/extension-blocks/banner.html.twig", "/var/www/html/templates/pages/backoffice/extension-blocks/banner.html.twig");
    }
}
