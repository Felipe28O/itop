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

/* base/components/global-search/layout.html.twig */
class __TwigTemplate_f77ad7db586efe20be0481baa9a23eba685e821f69c96f03a632faf82cb28023 extends \Twig\Template
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
        echo "\"
\t ";
        // line 3
        echo "\t ";
        // line 4
        echo "     class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasQuery", [], "method")) {
            echo "ibo-is-opened";
        }
        echo "\"
     data-role=\"ibo-global-search\">
\t<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetEndpoint", [], "method"), "html", null, true);
        echo "\" method=\"get\" class=\"ibo-global-search--head\" data-role=\"ibo-global-search--head\">
\t\t<a href=\"#\" class=\"ibo-global-search--icon\" data-role=\"ibo-global-search--icon\"
           aria-label=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:GlobalSearch:Tooltip"]), "html", null, true);
        echo "\"
           data-tooltip-content=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:GlobalSearch:Tooltip"]), "html", null, true);
        echo "\"
           data-tooltip-placement=\"bottom-start\"
           data-tooltip-distance-offset=\"25\"
        >
\t\t\t<span class=\"fas fa-search\"></span>
\t\t</a>
\t\t<input type=\"text\" name=\"text\" class=\"ibo-global-search--input\" data-role=\"ibo-global-search--input\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:GlobalSearch:Input:Placeholder"]), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetQuery", [], "method"), "html", null, true);
        echo "\" autocomplete=\"off\">
\t\t<input type=\"hidden\" name=\"operation\" value=\"full_text\">
\t</form>
\t<div class=\"ibo-global-search--drawer\" data-role=\"ibo-global-search--drawer\">
\t\t<div class=\"ibo-global-search--compartment\">
\t\t\t<div class=\"ibo-global-search--compartment-title\" data-role=\"ibo-global-search--compartment-title\">
\t\t\t\t<span>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:GlobalSearch:Recents:Title"]), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t\t<div class=\"ibo-global-search--compartment-content\" data-role=\"ibo-global-search--compartment-content\">
\t\t\t\t";
        // line 24
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetShowHistory", []) == false)) {
            // line 25
            echo "\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder-hint\">";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:QuickCreate:HistoryDisabled"]), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 28
($context["oUIBlock"] ?? null), "GetLastQueries", [], "method")) > 0)) {
            // line 29
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetLastQueries", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["aQuery"]) {
                // line 30
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aQuery"], "target_url", []), "html", null, true);
                echo "\" class=\"ibo-global-search--compartment-element\" data-role=\"ibo-global-search--compartment-element\" data-query-raw=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aQuery"], "query", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aQuery"], "query", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 31
                if ($this->getAttribute($context["aQuery"], "icon_url", [], "any", true, true)) {
                    // line 32
                    echo "                                ";
                    // line 33
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aQuery"], "icon_url", []), "html", null, true);
                    echo "\" alt=\"\" class=\"ibo-global-search--compartment-element-image\">
\t\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t\t";
                echo $this->getAttribute($context["aQuery"], "label_html", []);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aQuery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder-image ibo-svg-illustration--container\">
\t\t\t\t\t\t\t ";
            // line 41
            echo twig_source($this->env, "illustrations/undraw_search.svg");
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder-hint\">";
            // line 43
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:GlobalSearch:LastQueries:NoQuery:Placeholder"]), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 46
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "base/components/global-search/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 46,  142 => 43,  137 => 41,  133 => 39,  130 => 38,  120 => 35,  114 => 33,  112 => 32,  110 => 31,  101 => 30,  96 => 29,  94 => 28,  89 => 26,  86 => 25,  84 => 24,  78 => 21,  67 => 15,  58 => 9,  54 => 8,  49 => 6,  37 => 4,  35 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/global-search/layout.html.twig", "/var/www/html/itop/templates/base/components/global-search/layout.html.twig");
    }
}
