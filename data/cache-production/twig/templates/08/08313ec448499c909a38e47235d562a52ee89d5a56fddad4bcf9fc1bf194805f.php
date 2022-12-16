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

/* base/layouts/content-block/layout.html.twig */
class __TwigTemplate_246c8247fb662f363a899d1f378ebd181293d3ef38a827332ab0bfe5ca4e70ce extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboContentBlockContainer' => [$this, 'block_iboContentBlockContainer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        $context["bHasDiv"] = ((($this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method") || $this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method")) || $this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) || $this->getAttribute(($context["oUIBlock"] ?? null), "HasForcedDiv", [], "method"));
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('iboContentBlockContainer', $context, $blocks);
        $___internal_037544712395c31d897f3b1c61a87b0562308882c463bff708f978e2ecf7ca34_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_037544712395c31d897f3b1c61a87b0562308882c463bff708f978e2ecf7ca34_);
    }

    // line 9
    public function block_iboContentBlockContainer($context, array $blocks = [])
    {
        // line 10
        echo "        ";
        if (($context["bHasDiv"] ?? null)) {
            // line 11
            echo "            <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "\"
            class=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
            echo " ";
            if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
                echo "ibo-is-hidden";
            }
            echo "\"
            ";
            // line 13
            if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method")) {
                // line 14
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method"));
                foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                    // line 15
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
                // line 17
                echo "            ";
            }
            // line 18
            echo "            > ";
        }
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            echo " ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        ";
        if (($context["bHasDiv"] ?? null)) {
            echo " </div> ";
        }
        // line 21
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/content-block/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 21,  106 => 20,  94 => 19,  91 => 18,  88 => 17,  77 => 15,  72 => 14,  70 => 13,  60 => 12,  55 => 11,  52 => 10,  49 => 9,  45 => 4,  42 => 9,  39 => 8,  36 => 7,  33 => 5,  31 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/content-block/layout.html.twig", "/var/www/html/itop/templates/base/layouts/content-block/layout.html.twig");
    }
}
