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

/* base/components/input/layout.html.twig */
class __TwigTemplate_1cf801b078df075c745ac4d80cb2e50e0b0b0470c5b814479dbd70672d4fc23f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboInputLabel' => [$this, 'block_iboInputLabel'],
            'iboInput' => [$this, 'block_iboInput'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('iboInputLabel', $context, $blocks);
        // line 3
        $this->displayBlock('iboInput', $context, $blocks);
    }

    // line 1
    public function block_iboInputLabel($context, array $blocks = [])
    {
    }

    // line 3
    public function block_iboInput($context, array $blocks = [])
    {
        // line 4
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetType", [], "method"), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetName", [], "method"), "html", null, true);
        echo "\" value=\"";
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetValue", [], "method");
        echo "\"
           class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo "ibo-is-hidden";
        }
        echo "\"
           data-role=\"ibo-input\"
            ";
        // line 7
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsChecked", [], "method")) {
            echo " checked=\"checked\"";
        }
        // line 8
        echo "            ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsDisabled", [], "method")) {
            echo " disabled";
        }
        // line 9
        echo "            ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsReadonly", [], "method")) {
            echo " readonly";
        }
        // line 10
        echo "            ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method")) {
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method"));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 12
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
            // line 14
            echo "            ";
        }
        // line 15
        echo "            ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method")) {
            echo "  placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method"), "html", null, true);
            echo "\" ";
        }
        // line 16
        echo "    >
    ";
        // line 17
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasLabel", [], "method")) {
            echo "<label for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "\">";
            echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method");
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "base/components/input/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 17,  111 => 16,  104 => 15,  101 => 14,  90 => 12,  85 => 11,  82 => 10,  77 => 9,  72 => 8,  68 => 7,  57 => 5,  46 => 4,  43 => 3,  38 => 1,  34 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/layout.html.twig", "/var/www/html/itop/templates/base/components/input/layout.html.twig");
    }
}
