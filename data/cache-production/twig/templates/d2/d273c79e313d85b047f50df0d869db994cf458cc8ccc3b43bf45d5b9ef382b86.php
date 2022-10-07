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

/* base/components/quick-create/layout.html.twig */
class __TwigTemplate_c803d105af1b167bfb0177af2ee0c46d03428fb25666b35a8a327e585a303c1e extends \Twig\Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo "\" data-role=\"ibo-quick-create\">
\t<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetEndpoint", [], "method"), "html", null, true);
        echo "\" method=\"get\" class=\"ibo-quick-create--head\" data-role=\"ibo-quick-create--head\">
\t\t<input type=\"hidden\" name=\"operation\" value=\"new\">
\t\t<a href=\"#\" class=\"ibo-quick-create--icon\" data-role=\"ibo-quick-create--icon\"
           aria-label=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:QuickCreate:Tooltip"]), "html", null, true);
        echo "\"
           data-tooltip-content=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:QuickCreate:Tooltip"]), "html", null, true);
        echo "\"
\t\t   data-tooltip-placement=\"bottom-start\"
           data-tooltip-distance-offset=\"25\"
        >
\t\t\t<span class=\"fas fa-plus\"></span>
\t\t</a>
\t\t<select name=\"class\" class=\"ibo-quick-create--input\" data-role=\"ibo-quick-create--input\">
\t\t\t<option value=\"\">";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:QuickCreate:Input:Placeholder"]), "html", null, true);
        echo "</option>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetAvailableClasses", [], "method"));
        foreach ($context['_seq'] as $context["sClassCode"] => $context["sClassLabel"]) {
            // line 15
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["sClassCode"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["sClassLabel"], "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sClassCode'], $context['sClassLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t</select>
\t</form>
\t<div class=\"ibo-quick-create--drawer\" data-role=\"ibo-quick-create--drawer\">
\t\t<div class=\"ibo-quick-create--compartment\">
\t\t\t<div class=\"ibo-quick-create--compartment-content\" data-role=\"ibo-quick-create--compartment-results\">
\t\t\t</div>
\t\t\t<div class=\"ibo-quick-create--compartment-title\" data-role=\"ibo-quick-create--compartment-title\">
\t\t\t\t<span>";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:QuickCreate:Recents:Title"]), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t\t<div class=\"ibo-quick-create--compartment-content\" data-role=\"ibo-quick-create--compartment-content\">
\t\t\t\t";
        // line 27
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetShowHistory", []) == false)) {
            // line 28
            echo "\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder-hint\">";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:QuickCreate:HistoryDisabled"]), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 31
($context["oUIBlock"] ?? null), "GetLastClasses", [], "method")) > 0)) {
            // line 32
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetLastClasses", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["aClass"]) {
                // line 33
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aClass"], "target_url", []), "html", null, true);
                echo "\" class=\"ibo-quick-create--compartment-element\" data-role=\"ibo-quick-create--compartment-element\" data-class-code=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["aQuery"] ?? null), "class", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 34
                if ($this->getAttribute($context["aClass"], "icon_url", [], "any", true, true)) {
                    // line 35
                    echo "                                ";
                    // line 36
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aClass"], "icon_url", []), "html", null, true);
                    echo "\" alt=\"\" class=\"ibo-quick-create--compartment-element-image\">
\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t\t";
                echo $this->getAttribute($context["aClass"], "label_html", []);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aClass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder-image ibo-svg-illustration--container\">
\t\t\t\t\t\t";
            // line 44
            echo twig_source($this->env, "illustrations/undraw_content.svg");
            echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder-hint\">";
            // line 47
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:QuickCreate:LastClasses:NoClass:Placeholder"]), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "base/components/quick-create/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 50,  150 => 47,  144 => 44,  140 => 42,  137 => 41,  127 => 38,  121 => 36,  119 => 35,  117 => 34,  110 => 33,  105 => 32,  103 => 31,  98 => 29,  95 => 28,  93 => 27,  87 => 24,  78 => 17,  67 => 15,  63 => 14,  59 => 13,  49 => 6,  45 => 5,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/quick-create/layout.html.twig", "/var/www/html/templates/base/components/quick-create/layout.html.twig");
    }
}
