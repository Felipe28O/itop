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

/* base/components/title/layout.html.twig */
class __TwigTemplate_4f5ce2387e97951c69a432719fa5d740cded3572fc9a0187d1bf00cd970fecbe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboPageTitleText' => [$this, 'block_iboPageTitleText'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        ob_start(function () { return ''; });
        // line 2
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasIcon", [], "method")) {
            echo "ibo-has-icon";
        }
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo " ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-title\">
        ";
        // line 3
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasIcon", [], "method")) {
            // line 4
            echo "            <div class=\"ibo-title--icon\">
                <div class=\"ibo-title--icon-background ibo-title--icon-background--must-";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetIconCoverMethod", [], "method"), "html", null, true);
            echo " ibo-title--icon-level-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLevel", [], "method"), "html", null, true);
            echo "\" style=\"background-image: url('";
            echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetIconUrl", [], "method");
            echo "');\"></div>
            </div>
        ";
        }
        // line 8
        echo "        <div class=\"ibo-title--content\">
            ";
        // line 9
        $this->displayBlock('iboPageTitleText', $context, $blocks);
        // line 16
        echo "        </div>
    </div>
";
        $___internal_4796c09bec84399787f99e15979f8569f075fbb37f48a8c5dced135f7cb92e37_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_4796c09bec84399787f99e15979f8569f075fbb37f48a8c5dced135f7cb92e37_);
    }

    // line 9
    public function block_iboPageTitleText($context, array $blocks = [])
    {
        // line 10
        echo "                <h";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLevel", [], "method"), "html", null, true);
        echo " class=\"ibo-title--text is-size-";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["oUIBlock"] ?? null), "GetLevel", [], "method") + 2), "html", null, true);
        echo "\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 12
            echo "                        ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </h";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLevel", [], "method"), "html", null, true);
        echo ">
            ";
    }

    public function getTemplateName()
    {
        return "base/components/title/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 14,  92 => 12,  88 => 11,  81 => 10,  78 => 9,  74 => 1,  69 => 16,  67 => 9,  64 => 8,  54 => 5,  51 => 4,  49 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/title/layout.html.twig", "/var/www/html/itop/templates/base/components/title/layout.html.twig");
    }
}
