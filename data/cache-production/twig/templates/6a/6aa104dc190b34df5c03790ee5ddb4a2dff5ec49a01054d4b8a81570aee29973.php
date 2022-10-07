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

/* base/components/input/inputwithlabel.html.twig */
class __TwigTemplate_b83d2980b4a5cef18608f580efd906f1e440e2bc77996af8fe80301945a4ff1a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboInputLabel' => [$this, 'block_iboInputLabel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('iboInputLabel', $context, $blocks);
        // line 10
        echo "
";
    }

    // line 1
    public function block_iboInputLabel($context, array $blocks = [])
    {
        // line 2
        echo "    ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsLabelBefore", [], "method")) {
            // line 3
            echo "        <label for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasDescription", [], "method")) {
                echo " class=\"ibo-input-with-label--label ibo-has-description\" data-tooltip-content=\"";
                echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetDescription", [], "method");
                echo "\" data-tooltip-max-width=\"600px\" data-tooltip-html-enabled=\"true\"";
            }
            echo ">";
            echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method");
            echo "</label>
        ";
            // line 4
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetInput", [], "method")]);
            echo "
    ";
        } else {
            // line 6
            echo "        ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetInput", [], "method")]);
            echo "
        <label for=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasDescription", [], "method")) {
                echo " class=\"ibo-input-with-label--label ibo-has-description\" data-tooltip-content=\"";
                echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetDescription", [], "method");
                echo "\" data-tooltip-max-width=\"600px\" data-tooltip-html-enabled=\"true\"";
            }
            echo ">";
            echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetLabel", [], "method");
            echo "</label>
    ";
        }
    }

    public function getTemplateName()
    {
        return "base/components/input/inputwithlabel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  62 => 6,  57 => 4,  44 => 3,  41 => 2,  38 => 1,  33 => 10,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/inputwithlabel.html.twig", "/var/www/html/itop/templates/base/components/input/inputwithlabel.html.twig");
    }
}
