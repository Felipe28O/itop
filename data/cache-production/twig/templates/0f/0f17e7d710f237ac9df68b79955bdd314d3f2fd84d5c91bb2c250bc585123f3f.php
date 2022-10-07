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

/* base/components/popover-menu/item/mode_url.html.twig */
class __TwigTemplate_b4401e8f419a7152106edc083a5b7d12c740ace2a557a07ef31abf016796ca7d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboPopoverMenuItem' => [$this, 'block_iboPopoverMenuItem'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/components/popover-menu/item/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base/components/popover-menu/item/layout.html.twig", "base/components/popover-menu/item/mode_url.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_iboPopoverMenuItem($context, array $blocks = [])
    {
        // line 4
        echo "    <a id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetID", [], "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo "\" data-role=\"ibo-popover-menu--item\" data-resource-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetUID", [], "method"), "html", null, true);
        echo "\" data-uid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetUID", [], "method"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetUrl", [], "method"), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTarget", [], "method"), "html", null, true);
        echo "\"
            ";
        // line 5
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasDataAttributes", [], "method")) {
            // line 6
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method"));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 7
                echo "                    data-";
                echo twig_escape_filter($this->env, $context["sName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                echo "\"
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sName'], $context['sValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            ";
        }
        // line 10
        echo "            ";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetTooltip", [], "method"))) {
            // line 11
            echo "                data-tooltip-content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTooltip", [], "method"), "html", null, true);
            echo "\"
            ";
        }
        // line 13
        echo "    >
        ";
        // line 14
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetIconClass", [], "method"))) {
            // line 15
            echo "            <i class=\"ibo-popover-menu--item--icon fa-fw ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetIconClass", [], "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 17
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method"), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "base/components/popover-menu/item/mode_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  94 => 15,  92 => 14,  89 => 13,  83 => 11,  80 => 10,  77 => 9,  66 => 7,  61 => 6,  59 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/popover-menu/item/mode_url.html.twig", "/var/www/html/templates/base/components/popover-menu/item/mode_url.html.twig");
    }
}
