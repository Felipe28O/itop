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

/* base/layouts/activity-panel/entry-group.html.twig */
class __TwigTemplate_2c980419a9e510781bca3e542e2295fb3b503fbeb63081d6202b1c99ab667ee6 extends \Twig\Template
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
        $context["oFirstEntry"] = twig_first($this->env, $this->getAttribute(($context["aEntryGroup"] ?? null), "entries", []));
        // line 4
        echo "<div class=\"ibo-activity-panel--entry-group ";
        if ($this->getAttribute(($context["oFirstEntry"] ?? null), "IsFromCurrentUser", [], "method")) {
            echo "ibo-is-current-user";
        }
        echo " ibo-is-hidden\"
     data-role=\"ibo-activity-panel--entry-group\"
     data-entry-group-author-login=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oFirstEntry"] ?? null), "GetAuthorLogin", [], "method"), "html", null, true);
        echo "\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aEntryGroup"] ?? null), "entries", []));
        foreach ($context['_seq'] as $context["_key"] => $context["oEntry"]) {
            // line 8
            echo "\t\t";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oEntry"]]);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oEntry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/entry-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  48 => 8,  44 => 7,  40 => 6,  32 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/entry-group.html.twig", "/var/www/html/itop/templates/base/layouts/activity-panel/entry-group.html.twig");
    }
}
