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

/* base/components/datatable/layout.html.twig */
class __TwigTemplate_ab8bfed849813515f80cc9636fbb1e12d60c46e1623b25e4fae1b584dfecaacb extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        echo "
";
        // line 3
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOptions", [0 => "select_mode"], "method"))) {
            // line 4
            echo "    <input type=\"hidden\" name=\"selectionMode\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "selectionMode"], "method"), "html", null, true);
            echo "\">
    <input type=\"hidden\" name=\"selectionCount\" value=\"0\">
    <div data-target=\"ibo-datatable--selection\"></div>
    ";
            // line 7
            if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetAjaxData", [0 => "extra_params"], "method"))) {
                // line 8
                echo "        <input type=\"hidden\" name=\"extra_params\" value=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["oUIBlock"] ?? null), "GetAjaxData", [0 => "extra_params"], "method")), "html", null, true);
                echo "\">
    ";
            }
            // line 10
            echo "    ";
            if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetAjaxData", [0 => "filter"], "method"))) {
                // line 11
                echo "        <input type=\"hidden\" name=\"filter\" value=\"";
                echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetAjaxData", [0 => "filter"], "method");
                echo "\">
    ";
            }
        }
        // line 14
        echo "
<table id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" width=\"100%\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo "ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-datatable\">
    <thead>
    ";
        // line 17
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method"))) {
            // line 18
            echo "        <th></th>
    ";
        }
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDisplayColumns", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["aColumn"]) {
            // line 21
            echo "        <th class=\"ibo-datatable-header\" ";
            if ( !twig_test_empty($this->getAttribute($context["aColumn"], "description", [], "array"))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "description", [], "array"), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_label", [], "array"), "html", null, true);
            echo " </th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aColumn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </thead>
</table>";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  96 => 21,  91 => 20,  87 => 18,  85 => 17,  72 => 15,  69 => 14,  62 => 11,  59 => 10,  53 => 8,  51 => 7,  44 => 4,  42 => 3,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/layout.html.twig", "/var/www/html/itop/templates/base/components/datatable/layout.html.twig");
    }
}
