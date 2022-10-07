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

/* base/layouts/activity-panel/caselog-entry-form/layout.html.twig */
class __TwigTemplate_71c8117fb3b2f276a248c61043d4b39146bc616aaa3b54b992c1f055e8291c30 extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 2
        echo "<form id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\"
      class=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "IsSubmitAutonomous", [], "method") && (($context["bInitOpened"] ?? null) == false))) {
            echo "ibo-is-closed";
        }
        echo "\"
      data-role=\"ibo-caselog-entry-form\"
      data-object-class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetObjectClass", [], "method"), "html", null, true);
        echo "\"
      data-object-id=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetObjectId", [], "method"), "html", null, true);
        echo "\"
      data-attribute-code=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAttCode", [], "method"), "html", null, true);
        echo "\"
      data-attribute-label=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAttLabel", [], "method"), "html", null, true);
        echo "\"
      data-submit-mode=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetSubmitMode", [], "method"), "html", null, true);
        echo "\"
      method=\"post\">
    <div class=\"ibo-caselog-entry-form--actions\">
        <div class=\"ibo-caselog-entry-form--action-buttons--extra-actions\"
             data-role=\"ibo-caselog-entry-form--action-buttons--extra-actions\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetExtraActionButtons", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["TextInputActionButton"]) {
            // line 15
            echo "                ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["TextInputActionButton"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TextInputActionButton'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>
        <div class=\"ibo-caselog-entry-form--action-buttons--main-actions\" data-role=\"ibo-caselog-entry-form--action-buttons--main-actions\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetMainActionButtons", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["FormActionButton"]) {
            // line 20
            echo "                ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["FormActionButton"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FormActionButton'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
    </div>
    <div class=\"ibo-caselog-entry-form--text-input\" data-role=\"ibo-caselog-entry-form--text-input\">
        ";
        // line 25
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetTextInput", [], "method"), ["aPage" => ($context["aPage"] ?? null)]]);
        echo "
    </div>
    <div class=\"ibo-caselog-entry-form--extra-inputs\" data-role=\"ibo-caselog-entry-form--extra-inputs\">
    </div>
    <div class=\"ibo-caselog-entry-form--lock-indicator ibo-is-hidden\" data-role=\"ibo-caselog-entry-form--lock-indicator\">
        <span class=\"ibo-caselog-entry-form--lock-icon\" data-role=\"ibo-caselog-entry-form--lock-icon\">
            <span class=\"fas fa-lock\"></span>
        </span>
        <span class=\"ibo-caselog-entry-form--lock-message\" data-role=\"ibo-caselog-entry-form--lock-message\"></span>
    </div>
</form>
";
        $___internal_44a313a6c6743780fef37543f086ce27aa9819d43491a666df068541218b64a5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_44a313a6c6743780fef37543f086ce27aa9819d43491a666df068541218b64a5_);
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/caselog-entry-form/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 1,  107 => 25,  102 => 22,  93 => 20,  89 => 19,  85 => 17,  76 => 15,  72 => 14,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/caselog-entry-form/layout.html.twig", "/var/www/html/itop/templates/base/layouts/activity-panel/caselog-entry-form/layout.html.twig");
    }
}
