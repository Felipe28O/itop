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

/* base/components/field/layout.html.twig */
class __TwigTemplate_7a6a4760a0242bdc3796912b80388d3d40b23f7360af515cadb9fab631df2959 extends \Twig\Template
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
        $context["aParams"] = $this->getAttribute(($context["oUIBlock"] ?? null), "GetParams", [], "method");
        // line 2
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\"
     class=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ibo-field-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLayout", [], "method"), "html", null, true);
        echo "
        ";
        // line 4
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo " ibo-is-hidden";
        }
        echo "\"
     data-role=\"ibo-field\"
     data-attribute-code=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAttCode", [], "method"), "html", null, true);
        echo "\"
     data-attribute-type=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAttType", [], "method"), "html", null, true);
        echo "\"
     data-attribute-label=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAttLabel", [], "method"), "html", null, true);
        echo "\"
        ";
        // line 10
        echo "        ";
        // line 11
        echo "        ";
        // line 12
        echo "     data-attribute-flag-hidden=\"";
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")), "html", null, true);
        echo "\"
     data-attribute-flag-read-only=\"";
        // line 13
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsReadOnly", [], "method")), "html", null, true);
        echo "\"
     data-attribute-flag-mandatory=\"";
        // line 14
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsMandatory", [], "method")), "html", null, true);
        echo "\"
     data-attribute-flag-must-change=\"";
        // line 15
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsMustChange", [], "method")), "html", null, true);
        echo "\"
     data-attribute-flag-must-prompt=\"";
        // line 16
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsMustPrompt", [], "method")), "html", null, true);
        echo "\"
     data-attribute-flag-slave=\"";
        // line 17
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsSlave", [], "method")), "html", null, true);
        echo "\"
     data-value-raw=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetValueRaw", [], "method"), "html", null, true);
        echo "\"
        ";
        // line 19
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method")) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method"));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 21
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
            // line 23
            echo "        ";
        }
        // line 24
        echo ">
    <div class=\"ibo-field--label\">";
        // line 25
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method");
        echo "
        ";
        // line 26
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetLayout", [], "method") == twig_constant("Combodo\\iTop\\Application\\UI\\Base\\Component\\Field\\Field::ENUM_FIELD_LAYOUT_LARGE"))) {
            // line 27
            echo "            ";
            if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetComments", [], "method")) {
                // line 28
                echo "                <div class=\"ibo-field--comments\">";
                echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetComments", [], "method");
                echo "</div>
            ";
            }
            // line 30
            echo "        ";
        }
        // line 31
        echo "    </div>
    <div class=\"ibo-field--value\" ";
        // line 32
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetValueId", [], "method")) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetValueId", [], "method"), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 34
            echo "            ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
    ";
        // line 37
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetLayout", [], "method") != twig_constant("Combodo\\iTop\\Application\\UI\\Base\\Component\\Field\\Field::ENUM_FIELD_LAYOUT_LARGE"))) {
            // line 38
            echo "        ";
            if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetComments", [], "method")) {
                // line 39
                echo "            <div class=\"ibo-field--comments\">";
                echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetComments", [], "method");
                echo "</div>
        ";
            }
            // line 41
            echo "    ";
        }
        // line 42
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "base/components/field/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 42,  177 => 41,  171 => 39,  168 => 38,  166 => 37,  163 => 36,  154 => 34,  150 => 33,  142 => 32,  139 => 31,  136 => 30,  130 => 28,  127 => 27,  125 => 26,  121 => 25,  118 => 24,  115 => 23,  104 => 21,  99 => 20,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  68 => 12,  66 => 11,  64 => 10,  60 => 8,  56 => 7,  52 => 6,  45 => 4,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/field/layout.html.twig", "/var/www/html/itop/templates/base/components/field/layout.html.twig");
    }
}
