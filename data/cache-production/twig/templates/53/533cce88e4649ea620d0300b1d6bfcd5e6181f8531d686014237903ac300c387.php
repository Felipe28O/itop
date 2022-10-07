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

/* base/layouts/navigation-menu/menu-group.html.twig */
class __TwigTemplate_c975180fecf760804e78d49f5895c9d856040b7c4d491d283f4ee89cbb7a4b7d extends \Twig\Template
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
        echo "<a class=\"ibo-navigation-menu--menu-group\" data-role=\"ibo-navigation-menu--menu-group\" data-menu-group-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuGroup"] ?? null), "sId", []), "html", null, true);
        echo "\" href=\"#\">
\t<span class=\"ibo-navigation-menu--menu-group-icon fa-fw ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuGroup"] ?? null), "sIconCssClasses", []), "html", null, true);
        echo "\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuGroup"] ?? null), "sTitle", []), "html", null, true);
        echo "\" data-tooltip-placement=\"right\" data-tooltip-distance-offset=\"25\">";
        if (twig_test_empty($this->getAttribute(($context["aMenuGroup"] ?? null), "sIconCssClasses", []))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuGroup"] ?? null), "sInitials", []), "html", null, true);
        }
        echo "</span>
\t<span class=\"ibo-navigation-menu--menu-group-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuGroup"] ?? null), "sTitle", []), "html", null, true);
        echo "</span>
</a>";
    }

    public function getTemplateName()
    {
        return "base/layouts/navigation-menu/menu-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/navigation-menu/menu-group.html.twig", "/var/www/html/itop/templates/base/layouts/navigation-menu/menu-group.html.twig");
    }
}
