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

/* base/layouts/top-bar/layout.html.twig */
class __TwigTemplate_c886e13382ed8f2084c1d15f313780db4c8d43558dc3b996eb319e719542a7c8 extends \Twig\Template
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
        echo "<nav id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo "\" data-role=\"ibo-top-bar\">
\t<div class=\"ibo-top-bar--quick-actions\" data-role=\"ibo-top-bar--quick-actions\">
\t\t";
        // line 3
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasQuickCreate", [], "method")) {
            // line 4
            echo "\t\t\t";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetQuickCreate", [], "method"), ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
\t\t";
        }
        // line 6
        echo "\t\t";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasGlobalSearch", [], "method")) {
            // line 7
            echo "\t\t\t";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetGlobalSearch", [], "method"), ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
\t\t";
        }
        // line 9
        echo "\t</div>
\t";
        // line 10
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasBreadcrumbs", [], "method")) {
            // line 11
            echo "\t\t";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetBreadcrumbs", [], "method"), ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
\t";
        }
        // line 13
        echo "\t";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasToolBar", [], "method")) {
            // line 14
            echo "\t\t<div class=\"ibo-top-bar--toolbar\">
\t\t\t";
            // line 15
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetToolBar", [], "method"), ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
\t\t</div>
\t";
        }
        // line 18
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "base/layouts/top-bar/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  74 => 15,  71 => 14,  68 => 13,  62 => 11,  60 => 10,  57 => 9,  51 => 7,  48 => 6,  42 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/top-bar/layout.html.twig", "/var/www/html/templates/base/layouts/top-bar/layout.html.twig");
    }
}
