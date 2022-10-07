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

/* base/components/input/select/selectoption.html.twig */
class __TwigTemplate_30a65d8129a79e2a17ea113a970acaaaa909dbc452ed0dcbfe5d804fdb9dedf9 extends \Twig\Template
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
        echo "<option id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetValue", [], "method"), "html", null, true);
        echo "\" ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsSelected", [], "method")) {
            echo "selected";
        }
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsDisabled", [], "method")) {
            echo "disabled";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method"), "html", null, true);
        echo "</option>
";
    }

    public function getTemplateName()
    {
        return "base/components/input/select/selectoption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/select/selectoption.html.twig", "/var/www/html/itop/templates/base/components/input/select/selectoption.html.twig");
    }
}
