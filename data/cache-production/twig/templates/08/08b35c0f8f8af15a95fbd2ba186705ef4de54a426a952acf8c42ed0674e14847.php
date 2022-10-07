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

/* base/components/popover-menu/item/mode_separator.html.twig */
class __TwigTemplate_7ca6e96dc964fdf7a2bf9a1c26773e395402250626c8d2869f0a8107f9064c19 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base/components/popover-menu/item/layout.html.twig", "base/components/popover-menu/item/mode_separator.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_iboPopoverMenuItem($context, array $blocks = [])
    {
        // line 3
        echo "    <hr class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo "\" data-role=\"ibo-popover-menu--item ibo-popover-menu--item-separator\"
            ";
        // line 4
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method")) {
            // line 5
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method"));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 6
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
            // line 8
            echo "            ";
        }
        // line 9
        echo "    >
";
    }

    public function getTemplateName()
    {
        return "base/components/popover-menu/item/mode_separator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  67 => 8,  56 => 6,  51 => 5,  49 => 4,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/popover-menu/item/mode_separator.html.twig", "/var/www/html/templates/base/components/popover-menu/item/mode_separator.html.twig");
    }
}
