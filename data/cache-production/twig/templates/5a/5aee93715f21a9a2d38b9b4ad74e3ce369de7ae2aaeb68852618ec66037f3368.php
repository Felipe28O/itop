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

/* base/components/collapsible-section/layout.html.twig */
class __TwigTemplate_5e83f81d5d308b9a8103ef1485e778263997fe1b0620cbc98f71dcce9d25a6f3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboPanelBody' => [$this, 'block_iboPanelBody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\"
\t class=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsOpenedByDefault", [], "method")) {
            echo " ibo-is-opened";
        }
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo " ibo-is-hidden";
        }
        echo "\"
     data-role=\"ibo-collapsible-section\">
\t<div class=\"ibo-collapsible-section--header\" data-role=\"ibo-collapsible-section--collapse-toggler\">
\t\t<div class=\"ibo-collapsible-section--action-button ibo-collapsible-section--maximize-button\"><i class=\"fas fa-caret-down\"></i></div>
\t\t<div class=\"ibo-collapsible-section--action-button ibo-collapsible-section--minimize-button\"><i class=\"fas fa-caret-up\"></i></div>
\t\t<div class=\"ibo-collapsible-section--title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTitle", [], "method"), "html", null, true);
        echo "</div>
\t</div>
\t<div class=\"ibo-collapsible-section--body\" data-role=\"ibo-collapsible-section--body\">
\t\t";
        // line 10
        $this->displayBlock('iboPanelBody', $context, $blocks);
        // line 15
        echo "\t</div>
</div>";
    }

    // line 10
    public function block_iboPanelBody($context, array $blocks = [])
    {
        // line 11
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oMainBlock"]) {
            // line 12
            echo "\t\t\t\t";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oMainBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oMainBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "base/components/collapsible-section/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  74 => 12,  69 => 11,  66 => 10,  61 => 15,  59 => 10,  53 => 7,  36 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/collapsible-section/layout.html.twig", "/var/www/html/itop/templates/base/components/collapsible-section/layout.html.twig");
    }
}
