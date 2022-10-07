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

/* base/components/input/file-select/layout.html.twig */
class __TwigTemplate_9d6c00caa172fc268490280e96dc0b5817137ee9a62e177fa4948310c4d38068 extends \Twig\Template
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
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "-container\"
         class=\"ibo-input-file-select--container ";
        // line 5
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        }
        // line 6
        echo "                ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo " ibo-is-hidden";
        }
        echo "\">
        <label class=\"ibo-input-file-select\">
            <input id=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" class=\"ibo-input-file-select--file-input\" type=\"file\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetName", [], "method"), "html", null, true);
        echo "\">
            <span class=\"ibo-button ibo-is-regular ibo-is-primary\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetButtonText", [], "method"), "html", null, true);
        echo "</span>
            ";
        // line 10
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetShowFilename", [], "method")) {
            // line 11
            echo "            <span id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "-file-name\" class=\"ibo-input-file-select--file-name\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetFileName", [], "method"), "html", null, true);
            echo "</span>
            ";
        }
        // line 13
        echo "        </label>
    </div>
";
        $___internal_d3cdcef474165e4a6ea68d48f03b8104003a50681106172fcfc53beab5f6f1e3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_d3cdcef474165e4a6ea68d48f03b8104003a50681106172fcfc53beab5f6f1e3_);
    }

    public function getTemplateName()
    {
        return "base/components/input/file-select/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 3,  69 => 13,  61 => 11,  59 => 10,  55 => 9,  49 => 8,  41 => 6,  37 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/file-select/layout.html.twig", "/var/www/html/itop/templates/base/components/input/file-select/layout.html.twig");
    }
}
