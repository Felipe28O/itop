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

/* application/display-block/block-list/layout.html.twig */
class __TwigTemplate_371c8356b6bb2f3ff3a42c9f76218a57781814460fcb7aa5fde942b516c9f366 extends \Twig\Template
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
        echo "
    ";
        // line 5
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "bEmptySet", []) || $this->getAttribute(($context["oUIBlock"] ?? null), "bNotAuthorized", []))) {
            // line 6
            echo "        <div class=\"ibo-block-list--empty-text\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:NoObjectToDisplay"]), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "bCreateNew", [])) {
            // line 10
            echo "        <div class=\"ibo-block-list--create-action\">
            <a";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sLinkTarget", []), "html", null, true);
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sAbsoluteUrlAppRoot", []), "html", null, true);
            echo "pages/UI.php?operation=new&class=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sClass", []), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sParams", []), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sDefault", []), "html", null, true);
            echo "\">
                <span class=\"ibo-block-list--create-icon\">
                    <span class=\"fas fa-plus\"></span>
                </span>
                <span class=\"ibo-block-list--create-label\">";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["UI:ClickToCreateNew", $this->getAttribute(($context["oUIBlock"] ?? null), "sClassLabel", [])]), "html", null, true);
            echo "</span>
            </a>
        </div>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 21
            echo "        ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
        $___internal_8126083a87024c6bd6f17c3df9a4764a7a194b352eac09f793a607119900dc52_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_8126083a87024c6bd6f17c3df9a4764a7a194b352eac09f793a607119900dc52_);
    }

    public function getTemplateName()
    {
        return "application/display-block/block-list/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 3,  88 => 23,  79 => 21,  75 => 20,  72 => 19,  65 => 15,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  37 => 6,  35 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-list/layout.html.twig", "/var/www/html/itop/templates/application/display-block/block-list/layout.html.twig");
    }
}
