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

/* application/display-block/block-chart-ajax-pie/layout.js.twig */
class __TwigTemplate_b19b0b32143201f5b19e42153af9a3a6c31c34d81ffac6ec9ece59aa990843e4 extends \Twig\Template
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
var chart = c3.generate({
    bindto: d3.select('#my_chart_";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sId", []), "html", null, true);
        echo "'),
    data: {
        columns: ";
        // line 7
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "sJSColumns", []);
        echo ",
        type: 'pie',
        names: ";
        // line 9
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "sJSNames", []);
        echo ",
        onclick: function (d) {
            var aURLs = ";
        // line 11
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "sJSURLs", []);
        echo ";
            window.location.href= aURLs[d.index];
        },
        order: null
    },
    legend: {
        show: true,
        position: 'right'
    },
    tooltip: {
        format: {
            value: function (value) { return value; }
        }
    }
});

if (typeof(charts) === \"undefined\")
{
    charts = [];
\trefreshChart = [];
}
var idxChart=charts.length;
charts.push(chart);
var refreshChart";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "sId", []), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]), "html", null, true);
        echo "='\t\$.post(\"";
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "sURLForRefresh", []);
        echo "&refresh='+idxChart+'\",\"\", function (data) {'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'charts['+idxChart+'].unload();'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'setTimeout(function () {eval(data.js);},50);'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'});';

refreshChart.push(refreshChart";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "sId", []), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]), "html", null, true);
        echo ");";
    }

    public function getTemplateName()
    {
        return "application/display-block/block-chart-ajax-pie/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 39,  75 => 34,  49 => 11,  44 => 9,  39 => 7,  34 => 5,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-chart-ajax-pie/layout.js.twig", "/var/www/html/itop/templates/application/display-block/block-chart-ajax-pie/layout.js.twig");
    }
}
