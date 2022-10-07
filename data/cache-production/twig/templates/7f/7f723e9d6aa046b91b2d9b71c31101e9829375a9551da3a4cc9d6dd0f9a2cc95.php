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

/* base/layouts/navigation-menu/layout.js.twig */
class __TwigTemplate_caf1819d54d1ee309eb95d9dc23eb50be3a70043637c714ebc5aa4e2cdae132f extends \Twig\Template
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
        echo "').navigation_menu({
    display_counts: ";
        // line 2
        if (call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["navigation_menu.show_menus_count"])) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
    org_id: '";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOrgId", [], "method"), "html", null, true);
        echo "'
});

\$('#";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').navigation_menu('refreshCounts', null);

";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetSiloSelection", [], "method"), "js", []);
    }

    public function getTemplateName()
    {
        return "base/layouts/navigation-menu/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 6,  43 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/navigation-menu/layout.js.twig", "/var/www/html/templates/base/layouts/navigation-menu/layout.js.twig");
    }
}
