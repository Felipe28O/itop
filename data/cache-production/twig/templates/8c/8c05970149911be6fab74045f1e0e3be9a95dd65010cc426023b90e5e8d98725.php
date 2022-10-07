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

/* base/components/alert/layout.html.twig */
class __TwigTemplate_b83bddb8071ebeedb549703e7199f359c2b6385cb34f18899a64316060ff1628 extends \Twig\Template
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
        echo "\"
\t class=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ibo-is-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetColor", [], "method"), "html", null, true);
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsOpenedByDefault", [], "method")) {
            echo " ibo-is-opened";
        }
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo " ibo-is-hidden";
        }
        echo "\"
     data-role=\"ibo-alert\">
\t";
        // line 4
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsCollapsible", [], "method")) {
            // line 5
            echo "\t\t<div class=\"ibo-alert--action-button ibo-alert--maximize-button\" data-role=\"ibo-alert--collapse-toggler\">
\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t</div>
\t\t<div class=\"ibo-alert--action-button ibo-alert--minimize-button\" data-role=\"ibo-alert--collapse-toggler\">
\t\t\t<i class=\"fas fa-caret-up\"></i>
\t\t</div>
\t";
        }
        // line 12
        echo "\t";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsClosable", [], "method")) {
            // line 13
            echo "\t\t<div class=\"ibo-alert--action-button ibo-alert--close-button\" data-role=\"ibo-alert--close-button\">
\t\t\t<i class=\"fas fa-times\"></i>
\t\t</div>
\t";
        }
        // line 17
        echo "\t";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetTitle", [], "method"))) {
            // line 18
            echo "\t\t<div class=\"ibo-alert--title\" ";
            if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsCollapsible", [], "method")) {
                echo "data-role=\"ibo-alert--collapse-toggler\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTitle", [], "method"), "html", null, true);
            echo "</div>
\t";
        }
        // line 20
        echo "\t";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"))) {
            // line 21
            echo "\t\t<div class=\"ibo-alert--body\">
\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
                // line 23
                echo "\t\t\t\t";
                echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t</div>
\t";
        }
        // line 27
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "base/components/alert/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  102 => 25,  93 => 23,  89 => 22,  86 => 21,  83 => 20,  73 => 18,  70 => 17,  64 => 13,  61 => 12,  52 => 5,  50 => 4,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/alert/layout.html.twig", "/var/www/html/itop/templates/base/components/alert/layout.html.twig");
    }
}
