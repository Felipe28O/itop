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

/* base/components/alert/layout.ready.js.twig */
class __TwigTemplate_6d45a8ce6f1f9d327068457290ba0b4339b4a6fcbfb2282fe8249aeeee9d300d extends \Twig\Template
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
        echo "').alert({
\tbOpenedByDefault: ";
        // line 2
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsOpenedByDefault", [], "method")), "html", null, true);
        echo "
\t";
        // line 3
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsSaveCollapsibleStateEnabled", [], "method")) {
            echo ", collapsibleStateStorageKey: '";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetSessionCollapsibleStateStorageKey", [], "method"), "html", null, true);
            echo "'";
        }
        // line 4
        echo "});";
    }

    public function getTemplateName()
    {
        return "base/components/alert/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/alert/layout.ready.js.twig", "/var/www/html/itop/templates/base/components/alert/layout.ready.js.twig");
    }
}
