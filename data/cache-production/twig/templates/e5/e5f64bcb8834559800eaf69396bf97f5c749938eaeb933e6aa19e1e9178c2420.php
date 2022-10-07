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

/* base/layouts/activity-panel/tab-toolbar/layout.html.twig */
class __TwigTemplate_3b28c07bc63659f40b6913336e45f74876fa63427af5702eb22da4d2f23789ba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'bExtraCSSClasses' => [$this, 'block_bExtraCSSClasses'],
            'bDataTabType' => [$this, 'block_bDataTabType'],
            'bExtraDataAttributes' => [$this, 'block_bExtraDataAttributes'],
            'bTabToolbarFirstRow' => [$this, 'block_bTabToolbarFirstRow'],
            'bTabToolbarSecondRow' => [$this, 'block_bTabToolbarSecondRow'],
            'bTabToolbarActions' => [$this, 'block_bTabToolbarActions'],
            'bTabToolbarLeftActions' => [$this, 'block_bTabToolbarLeftActions'],
            'bTabToolbarRightActions' => [$this, 'block_bTabToolbarRightActions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"ibo-activity-panel--tab-toolbar ";
        if ((($context["bIsActive"] ?? null) == true)) {
            echo "ibo-is-active";
        }
        echo " ";
        $this->displayBlock('bExtraCSSClasses', $context, $blocks);
        echo "\"
     data-role=\"ibo-activity-panel--tab-toolbar\"
     data-tab-type=\"";
        // line 3
        $this->displayBlock('bDataTabType', $context, $blocks);
        echo "\"
\t ";
        // line 4
        $this->displayBlock('bExtraDataAttributes', $context, $blocks);
        echo ">
\t";
        // line 5
        $this->displayBlock('bTabToolbarFirstRow', $context, $blocks);
        // line 7
        echo "\t";
        $this->displayBlock('bTabToolbarSecondRow', $context, $blocks);
        // line 89
        echo "</div>";
    }

    // line 1
    public function block_bExtraCSSClasses($context, array $blocks = [])
    {
    }

    // line 3
    public function block_bDataTabType($context, array $blocks = [])
    {
    }

    // line 4
    public function block_bExtraDataAttributes($context, array $blocks = [])
    {
    }

    // line 5
    public function block_bTabToolbarFirstRow($context, array $blocks = [])
    {
        // line 6
        echo "\t";
    }

    // line 7
    public function block_bTabToolbarSecondRow($context, array $blocks = [])
    {
        // line 8
        echo "        <div class=\"ibo-activity-panel--tab-toolbar-actions\">
            ";
        // line 9
        $this->displayBlock('bTabToolbarActions', $context, $blocks);
        // line 87
        echo "        </div>
    ";
    }

    // line 9
    public function block_bTabToolbarActions($context, array $blocks = [])
    {
        // line 10
        echo "                <div class=\"ibo-activity-panel--tab-toolbar-left-actions\">
                    ";
        // line 11
        $this->displayBlock('bTabToolbarLeftActions', $context, $blocks);
        // line 25
        echo "                </div>
                <div class=\"ibo-activity-panel--tab-toolbar-middle-actions\">
                    ";
        // line 27
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasCaseLogTabs", [], "method")) {
            // line 28
            echo "                        <label class=\"ibo-activity-panel--tab-toolbar-action\" data-role=\"ibo-activity-panel--tab-toolbar-action\"
                               data-tooltip-content=\"";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Logs:Tooltip"]), "html", null, true);
            echo "\">
                            <input type=\"checkbox\" name=\"caselogs\" data-role=\"ibo-activity-panel--filter\" data-target-entry-types=\"caselog\"
                                   ";
            // line 31
            if ((( !(isset($context["aFilteredCaseLogsAttCodes"]) || array_key_exists("aFilteredCaseLogsAttCodes", $context)) || twig_test_empty(($context["aFilteredCaseLogsAttCodes"] ?? null))) || (call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["activity_panel.prefilter_only_current_log"]) == false))) {
                echo "checked";
            }
            echo ">
                            ";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Logs:Title"]), "html", null, true);
            echo "
                            ";
            // line 33
            if ((twig_length_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method")) > 0)) {
                // line 34
                echo "                                <a class=\"ibo-activity-panel--filter-options-toggler ibo-is-closed\" href=\"#\"
                                    data-role=\"ibo-activity-panel--filter-options-toggler\"
                                    aria-label=\"";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Logs:Menu:Hint"]), "html", null, true);
                echo "\">
                                    <span class=\"fas fa-caret-up\"></span>
                                </a>
                                <div class=\"ibo-activity-panel--filter-options\" data-role=\"ibo-activity-panel--filter-options\">
                                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method"));
                foreach ($context['_seq'] as $context["sCaseLogAttCode"] => $context["aCaseLogData"]) {
                    // line 41
                    echo "                                        <label class=\"ibo-activity-panel--filter-option\" data-role=\"ibo-activity-panel--filter-option\"
                                               title=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aCaseLogData"], "title", [], "array"), "html", null, true);
                    echo "\">
                                            <input type=\"checkbox\" name=\"caselog\" value=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $context["sCaseLogAttCode"], "html", null, true);
                    echo "\"
                                                   class=\"ibo-activity-panel--filter-option-input\"
                                                   data-role=\"ibo-activity-panel--filter-option-input\"
                                                   ";
                    // line 46
                    if ((( !(isset($context["aFilteredCaseLogsAttCodes"]) || array_key_exists("aFilteredCaseLogsAttCodes", $context)) || twig_in_filter($context["sCaseLogAttCode"], ($context["aFilteredCaseLogsAttCodes"] ?? null))) || (call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["activity_panel.prefilter_only_current_log"]) == false))) {
                        echo "checked";
                    }
                    echo ">
                                            ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aCaseLogData"], "title", [], "array"), "html", null, true);
                    echo "
                                        </label>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sCaseLogAttCode'], $context['aCaseLogData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                                </div>
                            ";
            }
            // line 52
            echo "                        </label>
                    ";
        }
        // line 54
        echo "                    ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasStates", [], "method")) {
            // line 55
            echo "                        <label class=\"ibo-activity-panel--tab-toolbar-action\"
                               data-tooltip-content=\"";
            // line 56
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Transitions:Tooltip"]), "html", null, true);
            echo "\">
                            <input type=\"checkbox\" name=\"transitions\" data-role=\"ibo-activity-panel--filter\"
                                   data-target-entry-types=\"transition\" ";
            // line 58
            if ((((isset($context["bPrefilterStateChanges"]) || array_key_exists("bPrefilterStateChanges", $context)) && (($context["bPrefilterStateChanges"] ?? null) == true)) || (call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["activity_panel.prefilter_state_changes_on_logs"]) == true))) {
                echo "checked";
            }
            echo ">
                            ";
            // line 59
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Transitions:Title"]), "html", null, true);
            echo "
                        </label>
                    ";
        }
        // line 62
        echo "                    <label class=\"ibo-activity-panel--tab-toolbar-action\"
                           data-tooltip-content=\"";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Edits:Tooltip"]), "html", null, true);
        echo "\">
                        <input type=\"checkbox\" name=\"edits\" data-role=\"ibo-activity-panel--filter\" data-target-entry-types=\"edits\" ";
        // line 64
        if ((((isset($context["bPrefilterEdits"]) || array_key_exists("bPrefilterEdits", $context)) && (($context["bPrefilterEdits"] ?? null) == true)) || (call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["activity_panel.prefilter_edits_on_logs"]) == true))) {
            echo "checked";
        }
        echo ">
                        ";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Edits:Title"]), "html", null, true);
        echo "
                    </label>
                </div>
                <div class=\"ibo-activity-panel--tab-toolbar-right-actions\">
                    ";
        // line 69
        $this->displayBlock('bTabToolbarRightActions', $context, $blocks);
        // line 85
        echo "                </div>
            ";
    }

    // line 11
    public function block_bTabToolbarLeftActions($context, array $blocks = [])
    {
        // line 12
        echo "                        <a href=\"#\" class=\"ibo-activity-panel--tab-toolbar-action ibo-activity-panel--tab-toolbar-action-open-all\"
                           data-role=\"ibo-activity-panel--caselog-open-all\"
                           data-tooltip-content=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Action:OpenAll:Tooltip"]), "html", null, true);
        echo "\"
                           aria-label=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Action:OpenAll:Tooltip"]), "html", null, true);
        echo "\">
                            <span class=\"fas fa-book-open\"></span>
                        </a>
                        <a href=\"#\" class=\"ibo-activity-panel--tab-toolbar-action ibo-activity-panel--tab-toolbar-action-close-all\"
                           data-role=\"ibo-activity-panel--caselog-close-all\"
                           data-tooltip-content=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Action:CloseAll:Tooltip"]), "html", null, true);
        echo "\"
                           aria-label=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Action:CloseAll:Tooltip"]), "html", null, true);
        echo "\">
                            <span class=\"fas fa-book\"></span>
                        </a>
                    ";
    }

    // line 69
    public function block_bTabToolbarRightActions($context, array $blocks = [])
    {
        // line 70
        echo "                        <span class=\"ibo-activity-panel--tab-toolbar-info\"
                              data-tooltip-content=\"";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Info:AuthorsCount:Tooltip"]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<span class=\"ibo-activity-panel--tab-toolbar-info-text ibo-activity-panel--tab-toolbar-info-authors-count\"
                                  data-role=\"ibo-activity-panel--tab-toolbar-info-authors-count\">-</span>
\t\t\t\t\t\t\t<span class=\"ibo-activity-panel--tab-toolbar-info-icon fas fa-users\"></span>
\t\t\t\t\t\t</span>
                        ";
        // line 76
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasCaseLogTabs", [], "method")) {
            // line 77
            echo "                            <span class=\"ibo-activity-panel--tab-toolbar-info\"
                                  data-tooltip-content=\"";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Toolbar:Info:MessagesCount:Tooltip"]), "html", null, true);
            echo "\">
                                <span class=\"ibo-activity-panel--tab-toolbar-info-text ibo-activity-panel--tab-toolbar-info-messages-count\"
                                      data-role=\"ibo-activity-panel--tab-toolbar-info-messages-count\">-</span>
                                <span class=\"ibo-activity-panel--tab-toolbar-info-icon fas fa-comment-alt\"></span>
                            </span>
                        ";
        }
        // line 84
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/tab-toolbar/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 84,  285 => 78,  282 => 77,  280 => 76,  272 => 71,  269 => 70,  266 => 69,  258 => 21,  254 => 20,  246 => 15,  242 => 14,  238 => 12,  235 => 11,  230 => 85,  228 => 69,  221 => 65,  215 => 64,  211 => 63,  208 => 62,  202 => 59,  196 => 58,  191 => 56,  188 => 55,  185 => 54,  181 => 52,  177 => 50,  168 => 47,  162 => 46,  156 => 43,  152 => 42,  149 => 41,  145 => 40,  138 => 36,  134 => 34,  132 => 33,  128 => 32,  122 => 31,  117 => 29,  114 => 28,  112 => 27,  108 => 25,  106 => 11,  103 => 10,  100 => 9,  95 => 87,  93 => 9,  90 => 8,  87 => 7,  83 => 6,  80 => 5,  75 => 4,  70 => 3,  65 => 1,  61 => 89,  58 => 7,  56 => 5,  52 => 4,  48 => 3,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/tab-toolbar/layout.html.twig", "/var/www/html/itop/templates/base/layouts/activity-panel/tab-toolbar/layout.html.twig");
    }
}
