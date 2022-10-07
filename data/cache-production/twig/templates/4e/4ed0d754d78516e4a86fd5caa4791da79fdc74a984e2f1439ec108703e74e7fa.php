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

/* base/layouts/dashboard/layout.html.twig */
class __TwigTemplate_64abdad1371745e6bd17577b8535cd3fdaa6ea1ddc5bde0691912e030bcb68ff extends \Twig\Template
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
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "    ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "HasTitle", [], "method") || $this->getAttribute(($context["oUIBlock"] ?? null), "HasToolbar", [], "method"))) {
            // line 6
            echo "        <div class=\"ibo-dashboard--top-bar\" data-role=\"ibo-dashboard--top-bar\">
            <div class=\"ibo-dashboard--top-bar-title\" data-role=\"ibo-dashboard--top-bar-title\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTitle", [], "method"), "html", null, true);
            echo "</div>
            ";
            // line 8
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetToolbar", [], "method"), ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
        </div>
    ";
        }
        // line 11
        echo "    <div class=\"ibo-dashboard--grid\" data-role=\"ibo-dashboard--grid\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDashboardRows", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 13
            echo "            ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
";
        $___internal_821314124523532d3f0acfea0e45e796634e80e857d09401bf26ad5aeee53872_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_821314124523532d3f0acfea0e45e796634e80e857d09401bf26ad5aeee53872_);
    }

    public function getTemplateName()
    {
        return "base/layouts/dashboard/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  64 => 15,  55 => 13,  51 => 12,  48 => 11,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/dashboard/layout.html.twig", "/var/www/html/itop/templates/base/layouts/dashboard/layout.html.twig");
    }
}
