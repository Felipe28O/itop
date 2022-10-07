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

/* application/display-block/block-chart/layout.html.twig */
class __TwigTemplate_cf588323e4da075073547eb34680eb05517cce8b9baffae81450cbbbf664a39c extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 4
        echo "    <div style=\"height:250px;width:100%\" class=\"dashboard_chart\" id=\"my_chart_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sChartId", []), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "iChartCounter", []), "html", null, true);
        echo "\">
        <div style=\"height:200px;line-height:200px;vertical-align:center;text-align:center;width:100%\">
            <img src=\"../images/indicator.gif\">
        </div>
    </div>
";
        $___internal_1acc1aa7e502fb26fcad5ecd07b5c8c765a52ef9974312c262d85b7076ae38ba_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_1acc1aa7e502fb26fcad5ecd07b5c8c765a52ef9974312c262d85b7076ae38ba_);
    }

    public function getTemplateName()
    {
        return "application/display-block/block-chart/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-chart/layout.html.twig", "/var/www/html/itop/templates/application/display-block/block-chart/layout.html.twig");
    }
}
