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

/* base/components/popover-menu/layout.js.twig */
class __TwigTemplate_5940e6d2fdab839a71c066195919e316233b50161e085a729ebf2f646bdce601 extends \Twig\Template
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
        echo "').popover_menu({
    toggler: ";
        // line 2
        echo twig_jsonencode_filter($this->getAttribute(($context["oUIBlock"] ?? null), "GetTogglerJSSelector", [], "method"));
        echo ",
    container: ";
        // line 3
        echo twig_jsonencode_filter($this->getAttribute(($context["oUIBlock"] ?? null), "GetContainer", [], "method"));
        echo ",
    position: {
        target: ";
        // line 5
        echo twig_jsonencode_filter($this->getAttribute(($context["oUIBlock"] ?? null), "GetTargetForPositionJSSelector", [], "method"));
        echo ",
        vertical: ";
        // line 6
        echo twig_jsonencode_filter($this->getAttribute(($context["oUIBlock"] ?? null), "GetVerticalPosition", [], "method"));
        echo ",
        horizontal: ";
        // line 7
        echo twig_jsonencode_filter($this->getAttribute(($context["oUIBlock"] ?? null), "GetHorizontalPosition", [], "method"));
        echo ",
    },
    add_visual_hint_to_toggler: ";
        // line 9
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "HasVisualHintToAddToToggler", [], "method")), "html", null, true);
        echo "
});";
    }

    public function getTemplateName()
    {
        return "base/components/popover-menu/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  52 => 7,  48 => 6,  44 => 5,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/popover-menu/layout.js.twig", "/var/www/html/templates/base/components/popover-menu/layout.js.twig");
    }
}
