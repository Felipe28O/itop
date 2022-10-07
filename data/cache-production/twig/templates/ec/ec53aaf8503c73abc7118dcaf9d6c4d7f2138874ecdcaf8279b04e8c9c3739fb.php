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

/* base/components/dashlet/dashlet-header-static.html.twig */
class __TwigTemplate_06f740f54454021fd78fd20fa9b467f4b1ab7d2816020925c0950887fdd1f4fc extends \Twig\Template
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
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" class=\"ibo-dashlet-header-static ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo "ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-dashlet-header-static\">
        <div class=\"ibo-dashlet-header-static--body\">
            ";
        // line 6
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetIconUrl", [], "method"))) {
            // line 7
            echo "                <div class=\"ibo-dashlet-header-static--icon-container\">
                    ";
            // line 9
            echo "                    <img class=\"ibo-dashlet-header-static--icon\" src=\"";
            echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetIconUrl", [], "method");
            echo "\" alt=\"\">
                </div>
            ";
        }
        // line 12
        echo "            ";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetTitle", [], "method"))) {
            // line 13
            echo "                <div class=\"ibo-dashlet-header-static--title\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTitle", [], "method"), "html", null, true);
            echo "</div>
            ";
        }
        // line 15
        echo "        </div>
    </div>
";
        $___internal_4e3931e76c375619a40d34372b82029aaf7e9c1f9b3def996010139c4957f066_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_4e3931e76c375619a40d34372b82029aaf7e9c1f9b3def996010139c4957f066_);
    }

    public function getTemplateName()
    {
        return "base/components/dashlet/dashlet-header-static.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  63 => 15,  57 => 13,  54 => 12,  47 => 9,  44 => 7,  42 => 6,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/dashlet/dashlet-header-static.html.twig", "/var/www/html/templates/base/components/dashlet/dashlet-header-static.html.twig");
    }
}
