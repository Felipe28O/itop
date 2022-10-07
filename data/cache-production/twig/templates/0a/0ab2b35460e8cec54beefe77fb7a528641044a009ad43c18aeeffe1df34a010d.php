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

/* base/components/button/layout.js.twig */
class __TwigTemplate_0f593e9e5c983ff3a4a12206d2f336d7b81a1b897f6e8bc9ce6eea13c9beea19 extends \Twig\Template
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
        if (( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOnClickJsCode", [], "method")) ||  !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetJsCode", [], "method")))) {
            // line 2
            if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOnClickJsCode", [], "method"))) {
                // line 3
                echo "\$('#";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "').on('click', function () {
    ";
                // line 4
                echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetOnClickJsCode", [], "method");
                echo "
});
";
            }
            // line 7
            if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetJsCode", [], "method"))) {
                // line 8
                echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetJsCode", [], "method");
                echo "
";
            }
        }
    }

    public function getTemplateName()
    {
        return "base/components/button/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  39 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/button/layout.js.twig", "/var/www/html/templates/base/components/button/layout.js.twig");
    }
}
