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

/* base/components/button/buttonjs.html.twig */
class __TwigTemplate_1063e9dee436d651c36b2130da50e49591cb50f65e9945d61004fa6254630e4c extends \Twig\Template
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
        echo "<button id=\"";
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
        echo "        type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetType", [], "method"), "html", null, true);
        echo "\"
        name=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetName", [], "method"), "html", null, true);
        echo "\"
        value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetValue", [], "method"), "html", null, true);
        echo "\"
        ";
        // line 13
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsDisabled", [], "method")) {
            echo " disabled ";
        }
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetTooltip", [], "method"))) {
            // line 16
            echo "            data-tooltip-content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTooltip", [], "method"), "html", null, true);
            echo "\"
        ";
        } else {
            // line 18
            echo "            title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method"), "html", null, true);
            echo "\"
        ";
        }
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        if ( !twig_test_empty(($context["sAriaLabel"] ?? null))) {
            // line 22
            echo "            aria-label=\"";
            echo twig_escape_filter($this->env, ($context["sAriaLabel"] ?? null), "html", null, true);
            echo "\"
        ";
        }
        // line 24
        echo ">
    <span class=\"ibo-button--loading-icon fas fa-spinner fa-pulse\"></span>
    ";
        // line 26
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetIconClass", [], "method"))) {
            // line 27
            echo "        <span class=\"ibo-button--icon ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetIconClass", [], "method"), "html", null, true);
            echo "\"></span>
    ";
        }
        // line 29
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method"))) {
            // line 30
            echo "        <span class=\"ibo-button--label\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method"), "html", null, true);
            echo "</span>
    ";
        }
        // line 32
        echo "</button>";
    }

    public function getTemplateName()
    {
        return "base/components/button/buttonjs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 32,  133 => 30,  130 => 29,  124 => 27,  122 => 26,  118 => 24,  112 => 22,  109 => 21,  107 => 20,  101 => 18,  95 => 16,  92 => 15,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  73 => 10,  70 => 9,  59 => 7,  54 => 6,  52 => 5,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/button/buttonjs.html.twig", "/var/www/html/templates/base/components/button/buttonjs.html.twig");
    }
}
