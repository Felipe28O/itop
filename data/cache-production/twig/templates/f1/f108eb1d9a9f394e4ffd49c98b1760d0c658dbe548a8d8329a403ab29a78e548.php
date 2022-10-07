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

/* base/components/input/select/select.html.twig */
class __TwigTemplate_2173f3ab3635830e694f371063ce01c20fbf85f0c3c26edfb0ea145858284346 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboInput' => [$this, 'block_iboInput'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $this->displayBlock('iboInput', $context, $blocks);
    }

    public function block_iboInput($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "HasLabel", [], "method") && $this->getAttribute(($context["oUIBlock"] ?? null), "IsLabelBefore", [], "method"))) {
            // line 5
            echo "        ";
            $this->loadTemplate("base/components/input/inputlabel.html.twig", "base/components/input/select/select.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "    <select id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetName", [], "method"), "html", null, true);
        echo "\"
            ";
        // line 8
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubmitOnChange", [], "method")) {
            echo " onChange=\"this.form.submit();\" ";
        }
        // line 9
        echo "            ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsMultiple", [], "method")) {
            echo " multiple ";
        }
        // line 10
        echo "            class=\"";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo "ibo-is-hidden";
        }
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        }
        echo "\"
    >
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
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
        echo "    </select>
    ";
        // line 16
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "HasLabel", [], "method") &&  !$this->getAttribute(($context["oUIBlock"] ?? null), "IsLabelBefore", [], "method"))) {
            // line 17
            echo "        ";
            $this->loadTemplate("base/components/input/inputlabel.html.twig", "base/components/input/select/select.html.twig", 17)->display($context);
            // line 18
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "base/components/input/select/select.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  92 => 17,  90 => 16,  87 => 15,  78 => 13,  74 => 12,  62 => 10,  57 => 9,  53 => 8,  46 => 7,  43 => 6,  40 => 5,  37 => 4,  31 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/select/select.html.twig", "/var/www/html/itop/templates/base/components/input/select/select.html.twig");
    }
}
