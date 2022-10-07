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

/* base/components/global-search/layout.js.twig */
class __TwigTemplate_6b0f38a20020ca149ac08ae6479a4c2926ead22c3640e163a59b99b7e57b0338 extends \Twig\Template
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
        echo "\$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').global_search({
\tinit_opened: ";
        // line 2
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "HasQuery", [], "method")), "html", null, true);
        echo "
});";
    }

    public function getTemplateName()
    {
        return "base/components/global-search/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/global-search/layout.js.twig", "/var/www/html/templates/base/components/global-search/layout.js.twig");
    }
}
