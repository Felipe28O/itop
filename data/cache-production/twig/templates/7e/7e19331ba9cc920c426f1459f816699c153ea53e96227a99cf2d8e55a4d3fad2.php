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

/* base/components/pill/layout.html.twig */
class __TwigTemplate_c3323c3d14c641317cc4e62a81bb739a006c26cb6fe95eb1e92d9f2f8a11b7b5 extends \Twig\Template
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
        $context["sTagName"] = (($this->getAttribute(($context["oUIBlock"] ?? null), "HasUrl", [], "method")) ? ("a") : ("span"));
        // line 4
        echo "<";
        echo twig_escape_filter($this->env, ($context["sTagName"] ?? null), "html", null, true);
        echo " id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\"
    ";
        // line 5
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasUrl", [], "method")) {
            echo "href=\"";
            echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetUrl", [], "method");
            echo "\"";
        }
        // line 6
        echo "    class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetCSSColorClass", [], "method"), "html", null, true);
        echo "\"
    data-role=\"ibo-pill\"
    ";
        // line 8
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasTooltip", [], "method")) {
            echo "data-tooltip-content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTooltip", [], "method"), "html", null, true);
            echo "\" data-tooltip-show-delay=\"500\"";
        }
        echo ">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 10
            echo "        ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</";
        echo twig_escape_filter($this->env, ($context["sTagName"] ?? null), "html", null, true);
        echo ">";
    }

    public function getTemplateName()
    {
        return "base/components/pill/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  67 => 10,  63 => 9,  55 => 8,  45 => 6,  39 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/pill/layout.html.twig", "/var/www/html/itop/templates/base/components/pill/layout.html.twig");
    }
}
