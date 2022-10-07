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

/* base/components/input/richtext/layout.html.twig */
class __TwigTemplate_8a42e0fc4190f204e7fba13f43cd9d51cb041a7e99103e51b5946dd44829e659 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboInput' => [$this, 'block_iboInput'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/components/input/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base/components/input/layout.html.twig", "base/components/input/richtext/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_iboInput($context, array $blocks = [])
    {
        // line 3
        echo "\t<textarea id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" class=\"htmlEditor ibo-input-richtext-placeholder\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetName", [], "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetValue", [], "method"), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "base/components/input/richtext/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/richtext/layout.html.twig", "/var/www/html/itop/templates/base/components/input/richtext/layout.html.twig");
    }
}
