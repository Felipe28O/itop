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

/* base/components/breadcrumbs/layout.html.twig */
class __TwigTemplate_fdb635502285e7319cd6370831944c4046adc6e50d6f9c292f002b426c7d4348 extends \Twig\Template
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
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo "\" data-role=\"ibo-breadcrumbs\">
    <span class=\"ibo-breadcrumbs--previous-items-container ibo-is-hidden\" data-role=\"ibo-breadcrumbs--previous-items-container\">
        <button class=\"ibo-breadcrumbs--previous-items-list-toggler ibo-button ibo-is-alternative ibo-is-neutral\" data-role=\"ibo-breadcrumbs--previous-items-list-toggler\"
           aria-label=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:Breadcrumbs:PreviousItemsListToggler:Label"]), "html", null, true);
        echo "\"
           data-tooltip-content=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Component:Breadcrumbs:PreviousItemsListToggler:Label"]), "html", null, true);
        echo "\"
        >
            <span class=\"fas fa-ellipsis-h\"></span>
        </button>
        <div class=\"ibo-breadcrumbs--previous-items-list ibo-is-hidden\" data-role=\"ibo-breadcrumbs--previous-items-list\"></div>
    </span>
</div>";
    }

    public function getTemplateName()
    {
        return "base/components/breadcrumbs/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  41 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/breadcrumbs/layout.html.twig", "/var/www/html/templates/base/components/breadcrumbs/layout.html.twig");
    }
}
