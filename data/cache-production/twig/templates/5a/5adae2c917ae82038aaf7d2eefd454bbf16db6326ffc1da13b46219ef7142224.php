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

/* application/links/indirect/block-object-picker-dialog/layout.ready.js.twig */
class __TwigTemplate_dd528b14cbcb53e3b889b06792fefe11678f2420a0013f53b4a3b73383de926a extends \Twig\Template
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
\$('#dlg_";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sLinkedSetId", []), "html", null, true);
        echo "').dialog({
    width: \$(window).width()*0.8,
    height: \$(window).height()*0.8,
    title:\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["UI:AddObjectsOf_Class_LinkedWith_Class", $this->getAttribute(($context["oUIBlock"] ?? null), "sLinkedClassName", []), $this->getAttribute(($context["oUIBlock"] ?? null), "sClassName", [])]), "html", null, true);
        echo "\" ,
    autoOpen: false,
    modal: true,
    resizeStop: oWidget";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "iInputId", []), "html", null, true);
        echo ".UpdateSizes,
    buttons: [
        { 
            text: \"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:Cancel"]), "html", null, true);
        echo "\",
            class: \"ibo-is-alternative ibo-is-neutral\",
            click: function() {
                \$(this).dialog('close');
            } 
        },
        { 
            text:  \"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:Add"]), "html", null, true);
        echo "\",
            class: \"ibo-is-regular ibo-is-primary\",
            id: \"btn_ok_";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sLinkedSetId", []), "html", null, true);
        echo "\",
            click: function() {
                return oWidget";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "iInputId", []), "html", null, true);
        echo ".DoAddObjects();
            } 
        },
    ],

});

\$('#SearchFormToAdd_";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sLinkedSetId", []), "html", null, true);
        echo " form').bind('submit.uilinksWizard', oWidget";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "iInputId", []), "html", null, true);
        echo ".SearchObjectsToAdd);
\$('#SearchFormToAdd_";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sLinkedSetId", []), "html", null, true);
        echo "').resize(oWidget";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "iInputId", []), "html", null, true);
        echo ".UpdateSizes);

";
        $___internal_23035819969c6e965d90bf150ab3704f70a438882e48a6ae7f635de2d028fd63_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_23035819969c6e965d90bf150ab3704f70a438882e48a6ae7f635de2d028fd63_);
    }

    public function getTemplateName()
    {
        return "application/links/indirect/block-object-picker-dialog/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 3,  89 => 33,  83 => 32,  73 => 25,  68 => 23,  63 => 21,  53 => 14,  47 => 11,  41 => 8,  35 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/links/indirect/block-object-picker-dialog/layout.ready.js.twig", "/var/www/html/itop/templates/application/links/indirect/block-object-picker-dialog/layout.ready.js.twig");
    }
}
