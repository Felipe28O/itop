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

/* base/layouts/activity-panel/layout.js.twig */
class __TwigTemplate_52239c5ccc780d441e19179aa52f195a36cd9d8b79bd228d5ba13da73f757159 extends \Twig\Template
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
        echo "\$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').activity_panel({
    datetime_format: ";
        // line 2
        echo twig_jsonencode_filter($this->getAttribute(($context["oUIBlock"] ?? null), "GetDateTimeFormatForJSWidget", [], "method"));
        echo ",
    datetimes_reformat_limit: ";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["activity_panel.datetimes_reformat_limit"]), "html", null, true);
        echo ",
    ";
        // line 4
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasTransactionId", [], "method")) {
            echo "transaction_id: ";
            echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "GetTransactionId", [], "method")), "html", null, true);
            echo ",";
        }
        // line 5
        echo "    lock_enabled: ";
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsLockEnabled", [], "method")), "html", null, true);
        echo ",
    lock_watcher_period: ";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["activity_panel.lock_watcher_period"]), "html", null, true);
        echo ",
    lock_endpoint: ";
        // line 7
        echo var_export($this->getAttribute(($context["oUIBlock"] ?? null), "GetLockEndpoint", [], "method"));
        echo ",
    show_multiple_entries_submit_confirmation: ";
        // line 8
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "GetShowMultipleEntriesSubmitConfirmation", [], "method")), "html", null, true);
        echo ",
    save_state_endpoint: ";
        // line 9
        echo var_export($this->getAttribute(($context["oUIBlock"] ?? null), "GetSaveStateEndpoint", [], "method"));
        echo ",
    last_loaded_entries_ids: ";
        // line 10
        echo twig_jsonencode_filter($this->getAttribute(($context["oUIBlock"] ?? null), "GetLastEntryIds", [], "method"));
        echo ",
    load_more_entries_endpoint: ";
        // line 11
        echo var_export($this->getAttribute(($context["oUIBlock"] ?? null), "GetLoadMoreEntriesEndpoint", [], "method"));
        echo ",
});";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  49 => 5,  43 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/layout.js.twig", "/var/www/html/itop/templates/base/layouts/activity-panel/layout.js.twig");
    }
}
