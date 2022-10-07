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

/* base/components/button/buttonurl.html.twig */
class __TwigTemplate_8e9af451596904b24ff218551ccd690e9c07954127a9f9a08f07f612787ef608 extends \Twig\Template
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
        $context["sAriaLabel"] = (( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method"))) ? ($this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method")) : ((( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetTooltip", [], "method"))) ? ($this->getAttribute(($context["oUIBlock"] ?? null), "GetTooltip", [], "method")) : (""))));
        // line 2
        echo "<a id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\"
        class=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ibo-is-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetActionType", [], "method"), "html", null, true);
        echo " ibo-is-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetColor", [], "method"), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo "ibo-is-hidden";
        }
        echo "\"
        data-role=\"ibo-button\"
        ";
        // line 5
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method")) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method"));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 7
                echo "                data-";
                echo twig_escape_filter($this->env, $context["sName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                echo "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sName'], $context['sValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        ";
        }
        // line 10
        echo "        href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetURL", [], "method"), "html", null, true);
        echo "\"
        target=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTarget", [], "method"), "html", null, true);
        echo "\"
        ";
        // line 13
        echo "        ";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetTooltip", [], "method"))) {
            // line 14
            echo "            data-tooltip-content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTooltip", [], "method"), "html", null, true);
            echo "\"
        ";
        } else {
            // line 16
            echo "            title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method"), "html", null, true);
            echo "\"
        ";
        }
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        if ( !twig_test_empty(($context["sAriaLabel"] ?? null))) {
            // line 20
            echo "            aria-label=\"";
            echo twig_escape_filter($this->env, ($context["sAriaLabel"] ?? null), "html", null, true);
            echo "\"
        ";
        }
        // line 22
        echo ">
    <span class=\"ibo-button--loading-icon fas fa-spinner fa-pulse\"></span>
    ";
        // line 24
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetIconClass", [], "method"))) {
            // line 25
            echo "        <span class=\"ibo-button--icon ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetIconClass", [], "method"), "html", null, true);
            echo "\"></span>
    ";
        }
        // line 27
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method"))) {
            // line 28
            echo "        <span class=\"ibo-button--label\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method"), "html", null, true);
            echo "</span>
    ";
        }
        // line 30
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "base/components/button/buttonurl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 30,  123 => 28,  120 => 27,  114 => 25,  112 => 24,  108 => 22,  102 => 20,  99 => 19,  97 => 18,  91 => 16,  85 => 14,  82 => 13,  78 => 11,  73 => 10,  70 => 9,  59 => 7,  54 => 6,  52 => 5,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/button/buttonurl.html.twig", "/var/www/html/itop/templates/base/components/button/buttonurl.html.twig");
    }
}
