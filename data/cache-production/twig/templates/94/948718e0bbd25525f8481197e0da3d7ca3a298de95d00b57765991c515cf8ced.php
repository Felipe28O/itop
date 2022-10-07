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

/* base/components/datatable/config/layout.html.twig */
class __TwigTemplate_faff2f419caee2731d7f9f0e615865ed29c6e54a5c2356110e24dcd0eeefb5cc extends \Twig\Template
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
        echo "<div id=\"datatable_dlg_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\" style=\"display: none;\" class=\" ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlockCode", [], "method"), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"action\" value=\"none\">
    <form id=\"form_";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\" onsubmit=\"return false\">
        <p>
            <input id=\"dtbl_dlg_settings_";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\" type=\"radio\" name=\"settings\" ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "bUseCustomSettings"], "method") == false)) {
            echo " checked ";
        }
        echo " value=\"defaults\">
            <label for=\"dtbl_dlg_settings_";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\">&nbsp;";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:UseDefaultSettings"]), "html", null, true);
        echo "</label>
        </p>
        <div class=\"ibo-panel ibo-is-neutral ibo-is-opened\" data-role=\"ibo-panel\">
            <div class=\"ibo-panel--header\">
                <div class=\"ibo-panel--header-left\">
                    <input id=\"dtbl_dlg_specific_";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\" type=\"radio\" class=\"specific_settings\" name=\"settings\" ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "bUseCustomSettings"], "method")) {
            echo " checked ";
        }
        echo " value=\"specific\">
                    <label for=\"dtbl_dlg_specific_";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\">&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:UseSpecificSettings"]), "html", null, true);
        echo "</label>
                </div>
            </div>
            <div class=\"ibo-panel--body ibo-font-ral-nor-100\">
                ";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:ColumnsAndSortOrder"]), "html", null, true);
        echo "<br>
                <div class=\"ibo-multi-column\">
                    <div class=\"ibo-column ibo-without-margin ibo-list-column\" style=\"max-height:150px; overflow-y: scroll;\">
                        <ul class=\"sortable_field_list\" id=\"sfl_";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\">

                        </ul>
                    </div>

                </div>
                <p> ";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Display_X_ItemsPerPage_prefix"]), "html", null, true);
        echo "<input type=\"text\" size=\"4\" name=\"page_size\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Display_X_ItemsPerPage_suffix"]), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"ibo-panel ibo-is-neutral ibo-is-opened\" data-role=\"ibo-panel\">
            <div class=\"ibo-panel--header\">
                <div class=\"ibo-panel--header-left\">
                    <input id=\"dtbl_dlg_save_";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\" type=\"checkbox\" ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sTableId"], "method") != null)) {
            echo "checked";
        }
        echo " name=\"save_settings\">
                    <label for=\"dtbl_dlg_save_";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\">&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:UseSavetheSettings"]), "html", null, true);
        echo "</label>
                </div>
            </div>
            <div class=\"ibo-panel--body .ibo-font-ral-nor-100\">
                <input id=\"dtbl_dlg_this_list_";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\" type=\"radio\" name=\"scope\" ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sTableId"], "method") != null)) {
            echo " checked ";
        } else {
            echo " disabled=\"disabled\" stay-disabled=\"true\"";
        }
        echo " value=\"this_list\">
                <label for=\"dtbl_dlg_this_list_";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\">&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:OnlyForThisList"]), "html", null, true);
        echo "</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input id=\"dtbl_dlg_all_";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\" type=\"radio\" name=\"scope\" ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sTableId"], "method") == null)) {
            echo " checked ";
        }
        echo " value=\"defaults\">
                <label for=\"dtbl_dlg_all_";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "\">&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:ForAllLists"]), "html", null, true);
        echo "</label>
            </div>
        </div>
        <div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
            <div class=\" ui-dialog-buttonset\">
                <button type=\"button\" class=\"ibo-button ibo-is-alternative ibo-is-neutral action cancel\" data-role=\"ibo-button\" onclick=\"\$('#datatable_dlg_";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "').dialog('close')\">&nbsp;";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:Cancel"]), "html", null, true);
        echo "</button>
                <button type=\"submit\" class=\"ibo-button ibo-is-regular ibo-is-primary action\" data-role=\"ibo-button\" onclick=\"\$('#datatable_dlg_";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetTableId", [], "method"), "html", null, true);
        echo "').DataTableSettings('onDlgOk'); \">&nbsp;";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:Ok"]), "html", null, true);
        echo "</button>
            </div>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/config/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 45,  157 => 44,  147 => 39,  139 => 38,  133 => 37,  123 => 36,  114 => 32,  106 => 31,  93 => 25,  84 => 19,  78 => 16,  69 => 12,  61 => 11,  51 => 6,  43 => 5,  38 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/config/layout.html.twig", "/var/www/html/itop/templates/base/components/datatable/config/layout.html.twig");
    }
}
