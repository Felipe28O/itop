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

/* base/components/datatable/static/formtable/layout.html.twig */
class __TwigTemplate_606e5e459b2d55520e7018a3146967b8baccc591af0651ec664c56dd9c3c04d8 extends \Twig\Template
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
        echo "
<input type=\"hidden\" name=\"attr_";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetRef", [], "method"), "html", null, true);
        echo "\" value=\"\">

";
        // line 6
        $context["columns"] = $this->getAttribute(($context["oUIBlock"] ?? null), "GetColumns", [], "method");
        // line 7
        echo "<table id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" width=\"100%\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " listResults";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo " ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-datatable\">
    <thead>
    <tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "            <th class=\"ibo-datatable-header\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "description", []), "html", null, true);
            echo "\">";
            echo $this->getAttribute($context["column"], "label", []);
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetRows", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 17
            echo "        ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/formtable/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  79 => 17,  75 => 16,  70 => 13,  59 => 11,  55 => 10,  40 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/formtable/layout.html.twig", "/var/www/html/itop/templates/base/components/datatable/static/formtable/layout.html.twig");
    }
}
