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

/* base/components/input/input-textarea.html.twig */
class __TwigTemplate_0e2804d3a3bbc7c6eb54573948059aabf8a5202436def0365dd7d11322883264 extends \Twig\Template
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
        echo "    <textarea
            id=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetName", [], "method"), "html", null, true);
        echo "\"
            cols=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetCols", [], "method"), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetRows", [], "method"), "html", null, true);
        echo "\"
              ";
        // line 7
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method")) {
            // line 8
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method"));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 9
                echo "                      data-";
                echo twig_escape_filter($this->env, $context["sName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                echo "\"
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sName'], $context['sValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "              ";
        }
        // line 12
        echo "            ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method")) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
            echo "\"";
        }
        // line 13
        echo "            ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method")) {
            echo "  placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method"), "html", null, true);
            echo "\" ";
        }
        // line 14
        echo "            ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsDisabled", [], "method")) {
            echo " disabled ";
        }
        // line 15
        echo "\t>";
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetValue", [], "method");
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "base/components/input/input-textarea.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  98 => 14,  91 => 13,  82 => 12,  79 => 11,  68 => 9,  63 => 8,  61 => 7,  55 => 6,  49 => 5,  46 => 4,  43 => 3,  38 => 1,  34 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/input-textarea.html.twig", "/var/www/html/itop/templates/base/components/input/input-textarea.html.twig");
    }
}
