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

/* base/components/dashlet/dashlet-badge.html.twig */
class __TwigTemplate_1af430c04473edead3b365c15e5a61f047adc1c2d541ed76da32690da8d1f0ad extends \Twig\Template
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
        echo "    <div class=\"ibo-dashlet-badge--body";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo " ibo-is-hidden";
        }
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\"
         data-role=\"ibo-dashlet-badge--body\"
         data-tooltip-content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetClassLabel", [], "method"), "html", null, true);
        echo "\">
        <div class=\"ibo-dashlet-badge--icon-container\">
            ";
        // line 9
        echo "            <img class=\"ibo-dashlet-badge--icon\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetClassIconUrl", [], "method"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"ibo-dashlet-badge--actions\">
            <a class=\"ibo-dashlet-badge--action-list\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetHyperlink", [], "method"), "html", null, true);
        echo "\" data-role=\"ibo-dashlet-badge--action-list\">
                <span class=\"ibo-dashlet-badge--action-list-count\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetCount", [], "method"), "html", null, true);
        echo "</span>
                <span class=\"ibo-dashlet-badge--action-list-label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetClassLabel", [], "method"), "html", null, true);
        echo "</span>
            </a>
            ";
        // line 16
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetCreateActionUrl", [], "method"))) {
            // line 17
            echo "                <a class=\"ibo-dashlet-badge--action-create\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetCreateActionUrl", [], "method"), "html", null, true);
            echo "\">
                    <span class=\"ibo-dashlet-badge--action-create-icon fas fa-plus\"></span>
                    <span class=\"ibo-dashlet-badge--action-create-label\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetCreateActionLabel", [], "method"), "html", null, true);
            echo "</span>
                </a>
            ";
        }
        // line 22
        echo "        </div>
    </div>
";
        $___internal_eb99848679cf71c85f150da7c38e28eeb68465706133c5b6c2975212004ab072_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_eb99848679cf71c85f150da7c38e28eeb68465706133c5b6c2975212004ab072_);
    }

    public function getTemplateName()
    {
        return "base/components/dashlet/dashlet-badge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 3,  81 => 22,  75 => 19,  69 => 17,  67 => 16,  62 => 14,  58 => 13,  54 => 12,  47 => 9,  42 => 6,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/dashlet/dashlet-badge.html.twig", "/var/www/html/itop/templates/base/components/dashlet/dashlet-badge.html.twig");
    }
}
