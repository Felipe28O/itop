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

/* base/layouts/dashboard/row/layout.html.twig */
class __TwigTemplate_acc2be08d2f31b18cec772068a119c1eb9311c2ce2130bad07159a7ec22b3037 extends \Twig\Template
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
        echo "    <div class=\"ibo-dashboard--grid-row\" data-role=\"ibo-dashboard--grid-row\" data-dashboard-grid-row-index=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetRowIndex", [], "method"), "html", null, true);
        echo "\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 7
            echo "            ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
";
        $___internal_47751608db18a29ec91ca68b3194418f373a52b13512621524ea259fbe29215e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_47751608db18a29ec91ca68b3194418f373a52b13512621524ea259fbe29215e_);
    }

    public function getTemplateName()
    {
        return "base/layouts/dashboard/row/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  50 => 9,  41 => 7,  37 => 6,  32 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/dashboard/row/layout.html.twig", "/var/www/html/itop/templates/base/layouts/dashboard/row/layout.html.twig");
    }
}
