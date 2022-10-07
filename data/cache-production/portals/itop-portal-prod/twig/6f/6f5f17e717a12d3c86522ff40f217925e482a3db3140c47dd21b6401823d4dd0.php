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

/* itop-portal-base/portal/templates/bricks/manage/layout-table.html.twig */
class __TwigTemplate_0bffbdeedd4bb7e0a8e20feb45f671f559361571a5d9f7cb9fafa7614580e07f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainContentHolder' => [$this, 'block_pMainContentHolder'],
            'pPageLiveScripts' => [$this, 'block_pPageLiveScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "itop-portal-base/portal/templates/bricks/manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("itop-portal-base/portal/templates/bricks/manage/layout.html.twig", "itop-portal-base/portal/templates/bricks/manage/layout-table.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " page_manage_brick";
    }

    // line 7
    public function block_pMainContentHolder($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        if ((twig_length_filter($this->env, ($context["aGroupingTabsValues"] ?? null)) > 1)) {
            // line 9
            echo "        <ul class=\"nav nav-pills grouping_tabs\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aGroupingTabsValues"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["aGroupingTab"]) {
                // line 11
                echo "                <li";
                if (((isset($context["sGroupingTab"]) || array_key_exists("sGroupingTab", $context)) && (($context["sGroupingTab"] ?? null) == $this->getAttribute($context["aGroupingTab"], "value", [])))) {
                    echo " class=\"active\"";
                }
                echo " data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aGroupingTab"], "value", []), "html", null, true);
                echo "\" data-label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aGroupingTab"], "label", []), "html", null, true);
                echo "\" data-item-count=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aGroupingTab"], "count", []), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_manage_brick_display_as", 1 => ["sBrickId" => ($context["sBrickId"] ?? null), "sDisplayMode" => ($context["sDisplayMode"] ?? null), "sGroupingTab" => $this->getAttribute($context["aGroupingTab"], "value", [])]], "method"), "html", null, true);
                echo "\"
                       id=\"btn_tab_for_";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["aGroupingTab"], "value", []), "html", null, true);
                echo "\">
                        ";
                // line 14
                echo $this->getAttribute($context["aGroupingTab"], "label", []);
                echo "
                        ";
                // line 15
                if ($this->getAttribute(($context["oBrick"] ?? null), "GetShowTabCounts", [], "method")) {
                    // line 16
                    echo "                            <span class=\"badge\">";
                    echo $this->getAttribute($context["aGroupingTab"], "count", []);
                    echo "</span>
                        ";
                }
                // line 18
                echo "                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aGroupingTab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
    ";
        }
        // line 23
        echo "    ";
        $context["iTableCount"] = 0;
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, ($context["aGroupingAreasData"] ?? null)) > 0)) {
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aGroupingAreasData"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["aAreaData"]) {
                // line 26
                echo "            ";
                if (($this->getAttribute($context["aAreaData"], "iItemsCount", []) > 0)) {
                    // line 27
                    echo "                ";
                    $context["iTableCount"] = (($context["iTableCount"] ?? null) + 1);
                    // line 28
                    echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading clearfix\">
                        <h3 class=\"panel-title\" style=\"float: left;\">";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aAreaData"], "sTitle", []), "html", null, true);
                    echo "</h3>
                        ";
                    // line 31
                    if (($context["bCanExport"] ?? null)) {
                        // line 32
                        echo "                            <a href=\"";
                        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_manage_brick_excel_export_start", 1 => ["sBrickId" => ($context["sBrickId"] ?? null), "sGroupingTab" => ($context["sGroupingTab"] ?? null), "sGroupingArea" => $this->getAttribute($context["aAreaData"], "sId", [])]], "method");
                        echo "\"
                               id=\"btn_export_excel_for_";
                        // line 33
                        echo twig_escape_filter($this->env, $this->getAttribute($context["aAreaData"], "sId", []), "html", null, true);
                        echo "\"
                               data-toggle=\"modal\" data-target=\"#modal-for-all\">
                                <span class=\"fas fa-download fa-lg\" style=\"float: right;\"
                                  data-tooltip-content=\"";
                        // line 36
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["ExcelExporter:ExportMenu"]), "html", null, true);
                        echo "\"></span>
                            </a>
                        ";
                    }
                    // line 39
                    echo "                    </div>
                    <div class=\"panel-body\">
                        <table id=\"table-";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aAreaData"], "sId", []), "html", null, true);
                    echo "\" class=\"object-list table table-striped table-bordered responsive\" width=\"100%\"></table>
                    </div>
                </div>
            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAreaData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ((($context["iTableCount"] ?? null) == 0)) {
            // line 49
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <h3 class=\"text-center\">";
            // line 51
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:Manage:Table:NoData"]), "html", null, true);
            echo "</h3>
            </div>
        </div>
    ";
        }
    }

    // line 57
    public function block_pPageLiveScripts($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        $this->displayParentBlock("pPageLiveScripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        var sDataLoading = '";
        // line 61
        echo twig_escape_filter($this->env, ($context["sDataLoading"] ?? null), "html", null, true);
        echo "';
        // Used for ajax throttling
        var iSearchThrottle = 300;
        var oKeyTimeout;
        var aKeyTimeoutFilteredKeys = [16, 17, 18, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40]; // Shift, Ctrl, Alt, Pause, Esc, Page Up/Down, Home, End, Left/Up/Right/Down arrows

        var columnsProperties = {
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aGroupingAreasData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aAreaData"]) {
            // line 69
            echo "                '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aAreaData"], "sId", []), "html", null, true);
            echo "': ";
            echo twig_jsonencode_filter($this->getAttribute($context["aAreaData"], "aColumnsDefinition", []));
            echo ",
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAreaData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        };
        var rawData = {
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aGroupingAreasData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aAreaData"]) {
            // line 74
            echo "                '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aAreaData"], "sId", []), "html", null, true);
            echo "': ";
            echo twig_jsonencode_filter($this->getAttribute($context["aAreaData"], "aItems", []));
            echo ",
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAreaData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        };

        // Show a loader inside the table
        var showTableLoader = function (oElem) {
            oElem.children('tbody').html('<tr><td class=\"datatables_overlay\" colspan=\"100\">' + \$('#page_overlay').html() + '</td></tr>');
        };
        // Columns definition for the table from the columnsProperties
        var getColumnsDefinition = function (tableName) {
            var tableProperties = columnsProperties[tableName];

            if (tableProperties === undefined && window.console) {
                console.log('Could not retrieve columns properties for table \"' + tableName + '\"');
                return false;
            }
            if (rawData[tableName] === undefined && window.console) {
                console.log('Could not retrieve data for table \"' + tableName + '\"');
                return false;
            }

            var columnsDefinition = [];

            for (key in tableProperties) {
                // Regular attribute columns
                if (key !== '_ui_extensions') {
                    columnsDefinition.push({
                        \"width\": \"auto\",
                        \"searchable\": true,
                        \"sortable\": true,
                        \"title\": tableProperties[key].title,
                        \"defaultContent\": \"\",
                        \"type\": \"html\",
                        \"data\": \"attributes.\" + key + \".attribute_code\",
                        \"render\": {
                        \t_: function (attribute_code, type, row) {
\t\t\t\t\t\t\t\tvar cellElem;
\t\t\t\t\t\t\t\tvar itemActions;
\t\t\t\t\t\t\t\tvar itemPrimaryAction;
\t\t\t\t\t\t\t\tvar metadataNames = ['object_class', 'object_id', 'attribute_code', 'attribute_type', 'value_raw'];

\t\t\t\t\t\t\t\t// Preparing action on the cell
\t\t\t\t\t\t\t\t// Note : For now we will use only one action, the secondary actions are therefore not implemented. Only the data structure is done.
\t\t\t\t\t\t\t\titemActions = row.attributes[attribute_code].actions;

\t\t\t\t\t\t\t\t// Preparing the cell data
\t\t\t\t\t\t\t\tcellElem = (itemActions.length > 0) ? \$('<a></a>') : \$('<span></span>');
\t\t\t\t\t\t\t\tfor(var sPropName in row.attributes[attribute_code])
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tvar propValue = row.attributes[attribute_code][sPropName];
\t\t\t\t\t\t\t\t\tif(sPropName === 'value_html')
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tcellElem.html(propValue);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\telse if(metadataNames.indexOf(sPropName) > -1)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tcellElem.attr('data-'+sPropName.replace('_', '-'), propValue)
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Building actions
\t\t\t\t\t\t\t\tif (itemActions.length > 0) {
\t\t\t\t\t\t\t\t\t// - Primary action
\t\t\t\t\t\t\t\t\titemPrimaryAction = itemActions[0];
\t\t\t\t\t\t\t\t\tswitch (itemPrimaryAction.type) {
\t\t\t\t\t\t\t\t\t\tcase '";
        // line 139
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\ManageBrick::ENUM_ACTION_VIEW"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\turl = '";
        // line 140
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_object_view", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, itemPrimaryAction.class).replace(/-objectId-/, itemPrimaryAction.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase '";
        // line 142
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\ManageBrick::ENUM_ACTION_EDIT"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\turl = '";
        // line 143
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_object_edit", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, itemPrimaryAction.class).replace(/-objectId-/, itemPrimaryAction.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t\t\t\turl = '#';
\t\t\t\t\t\t\t\t\t\t\t//console.log('Action \"'+itemPrimaryAction+'\" not implemented');
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tSetActionUrl(cellElem, url);
\t\t\t\t\t\t\t\t\tSetActionOpeningTarget(cellElem, itemPrimaryAction.opening_target);

\t\t\t\t\t\t\t\t\t// - Secondary actions
\t\t\t\t\t\t\t\t\t// Not done for now, only the data structure is ready in case we need it later
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\treturn cellElem.prop('outerHTML');
\t\t\t\t\t\t\t},
\t                        sort: function (attribute_code, type, row) {
\t\t                        return row.attributes[attribute_code].sort_value;
\t\t\t\t\t\t\t},
\t                        filter: function (attribute_code, type, row) {
                        \t\treturn \$.text(\$.parseHTML(row.attributes[attribute_code]['value_html']));
\t                        },
\t\t\t\t\t\t},
                    });
                }
                // UI extensions buttons
                else {
                    columnsDefinition.push({
                        \"width\": \"auto\",
                        \"searchable\": false,
                        \"sortable\": (sDataLoading === '";
        // line 173
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_FULL"), "html", null, true);
        echo "'),
                        \"title\": tableProperties[key].title,
                        \"defaultContent\": \"\",
                        \"type\": \"html\",
                        \"data\": \"attributes.\" + key + \".attribute_code\",
                        \"render\": function (attribute_code, type, row) {
                            var cellElem = \$('<div class=\"group-actions-wrapper\"></div>');
                            var actionsCount = row.actions.length;

                            // Adding menu wrapper in case there are several actions
                            var actionsElem = \$('<div></div>');
                            actionsElem.appendTo(cellElem);
                            if (actionsCount > 1) {
                                actionsElem.addClass('group-actions pull-right');

                                // Adding hamburger icon toggler
                                actionsElem.append(
                                    \$('<a class=\"glyphicon glyphicon-menu-hamburger\" data-toggle=\"collapse\" data-target=\"#item-actions-menu-' + row.id + '\"></a>')
                                );

                                // Adding sub menu
                                var actionsSSMenuElem = \$('<div id=\"item-actions-menu-' + row.id + '\" class=\"item-action-wrapper panel panel-default\"></div>')
                                    .appendTo(actionsElem);
                                var actionsSSMenuContainerElem = \$('<div class=\"panel-body\"></div>')
                                    .appendTo(actionsSSMenuElem);
                            }

                            // Adding actions
                            for (var i in row.actions) {
                                var actionDef = row.actions[i];
                                var actionElem = \$('<a></a>')
                                    .attr('href', actionDef.url)
                                    .append(\$('<span></span>').html(actionDef.label));

                                // Adding css classes to action
                                for (var j in actionDef.css_classes) {
                                    actionElem.addClass(actionDef.css_classes[j]);
                                }

                                // Performing specific treatment regarding the action type
                                if (actionDef.type === 'button') {
                                    // External files
                                    // Note: Not supported yet

                                    // On click callback
                                    actionElem.attr('onclick', actionDef.onclick);
                                }
                                else if (actionDef.type === 'link') {
                                    actionElem.attr('target', actionDef.target);
                                }

                                if (actionsCount > 1) {
                                    actionsSSMenuContainerElem.append(\$('<p></p>').append(actionElem));
                                }
                                else {
                                    actionsElem.append(actionElem);
                                }
                            }

                            return cellElem.prop('outerHTML');
                        }
                    });
                }
            }

            return columnsDefinition;
        };

        \$(document).ready(function () {
            ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aGroupingAreasData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aAreaData"]) {
            // line 243
            echo "                ";
            $context["sAreaId"] = $this->getAttribute($context["aAreaData"], "sId", []);
            // line 244
            echo "
                showTableLoader(\$('#table-";
            // line 245
            echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
            echo "'));
                var oTable";
            // line 246
            echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
            echo " = \$('#table-";
            echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
            echo "').DataTable({
                    \"language\": {
                        \"processing\": \"";
            // line 248
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Processing"]), "html", null, true);
            echo "\",
                        \"search\": \"";
            // line 249
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Search"]), "html", null, true);
            echo "\",
                        \"lengthMenu\": \"";
            // line 250
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:LengthMenu"]), "html", null, true);
            echo "\",
                        \"zeroRecords\": \"";
            // line 251
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:ZeroRecords"]), "html", null, true);
            echo "\",
                        \"info\": \"";
            // line 252
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Info"]), "html", null, true);
            echo "\",
                        \"infoEmpty\": \"";
            // line 253
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:InfoEmpty"]), "html", null, true);
            echo "\",
                        \"infoFiltered\": \"(";
            // line 254
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:InfoFiltered"]), "html", null, true);
            echo ")\",
                        \"emptyTable\": \"";
            // line 255
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:EmptyTable"]), "html", null, true);
            echo "\",
                        \"paginate\": {
                            \"first\": \"";
            // line 257
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:First"]), "html", null, true);
            echo "\",
                            \"previous\": \"";
            // line 258
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Previous"]), "html", null, true);
            echo "\",
                            \"next\": \"";
            // line 259
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Next"]), "html", null, true);
            echo "\",
                            \"last\": \"";
            // line 260
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Last"]), "html", null, true);
            echo "\"
                        },
                        \"aria\": {
                            \"sortAscending\": \": ";
            // line 263
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Sort:Ascending"]), "html", null, true);
            echo "\",
                            \"sortDescending\": \": ";
            // line 264
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Sort:Descending"]), "html", null, true);
            echo "\"
                        }
                    },
                    \"lengthMenu\": [[10, 20, 50, -1], [10, 20, 50, \"";
            // line 267
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:DisplayLength:All"]), "html", null, true);
            echo "\"]],
                    \"displayLength\": ";
            // line 268
            echo twig_escape_filter($this->env, ($context["iDefaultListLength"] ?? null), "html", null, true);
            echo ",
                    \"dom\": '<\"row\"<\"col-sm-6\"l><\"col-sm-6\"<f><\"visible-xs\"p>>>t<\"row\"<\"col-sm-6\"i><\"col-sm-6\"p>>',
                    \"columns\": getColumnsDefinition('";
            // line 270
            echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
            echo "'),
                    \"order\": [],
                    \"rowCallback\": function (oRow, oData) {
                        if (oData.highlight_class !== undefined) {
                            var sHighlightClass = oData.highlight_class;
                            var sBSHiglightClass = '';

                            // Adding classic iTop class
                            \$(oRow).addClass(sHighlightClass);
                            // Adding mapped BS class
                            if (sHighlightClass === '";
            // line 280
            echo twig_escape_filter($this->env, twig_constant("HILIGHT_CLASS_CRITICAL"), "html", null, true);
            echo "') {
                                sBSHiglightClass = 'danger';
                            }
                            else if (sHighlightClass === '";
            // line 283
            echo twig_escape_filter($this->env, twig_constant("HILIGHT_CLASS_WARNING"), "html", null, true);
            echo "') {
                                sBSHiglightClass = 'warning';
                            }
                            else if (sHighlightClass === '";
            // line 286
            echo twig_escape_filter($this->env, twig_constant("HILIGHT_CLASS_OK"), "html", null, true);
            echo "') {
                                sBSHiglightClass = 'success';
                            }
                            \$(oRow).addClass(sBSHiglightClass);
                        }
                    },
                    \"drawCallback\": function (settings) {
                        // Hiding pagination if only one page
                        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2) {
                            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
                        }
                        else {
                            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
                        }
                    },
                    ";
            // line 301
            if ((($context["sDataLoading"] ?? null) == twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_FULL"))) {
                // line 302
                echo "                        \"data\": rawData['";
                echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
                echo "'],
                    ";
            } else {
                // line 304
                echo "                    \"processing\": true,
                    \"serverSide\": true,
                    ";
                // line 307
                echo "                    \"ajax\": {
                        \"url\": \"";
                // line 308
                echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_manage_brick_lazy", 1 => ["sBrickId" => ($context["sBrickId"] ?? null), "sGroupingTab" => ($context["sGroupingTab"] ?? null), "sGroupingArea" => ($context["sAreaId"] ?? null)]], "method");
                echo "\",
                        \"data\": function (d) {
                            d.iPageNumber = Math.floor(d.start / d.length) + 1;
                            d.iListLength = d.length;

                            // Prepare sort params (formatting them for direct use by DBObjectSet)
                            d.aSortParams = {};
                            for (var iSortIdx in d.order) {
                                /* oSortedColumnData {column: index, dir: 'asc'|'desc'} */
                                var oSortedColumnData = d.order[iSortIdx];
                                /* sSortedColumnId (eg. 'attributes.ATT_CODE.attribute_code') */
                                var sSortedColumnId = d.columns[oSortedColumnData.column].data;

                                // Make proper attribute alias for OQL from column ID
                                sSortedColumnId = sSortedColumnId.replace(/^attributes\\./, '').replace(/\\.attribute_code\$/, '');

                                d.aSortParams[sSortedColumnId] = (oSortedColumnData.dir === 'asc');
                            }

                            ";
                // line 327
                if ( !(null === ($context["sSearchValue"] ?? null))) {
                    // line 328
                    echo "                            // Sets default filter value
                            if (d.draw === 1) {
                                \$('#table-";
                    // line 330
                    echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
                    echo "_filter input').val('";
                    echo twig_escape_filter($this->env, ($context["sSearchValue"] ?? null), "html", null, true);
                    echo "');
                                d.search.value = \$('#table-";
                    // line 331
                    echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
                    echo "_filter input').val();
                            }
                            ";
                }
                // line 334
                echo "                            if (d.search.value) {
                                d.sSearchValue = d.search.value;
                            }
                        }
                    }
                    ";
            }
            // line 340
            echo "                });

                // Overrides filter input to apply throttle. Otherwise, an ajax request is send each time a key is pressed
                // Also removes accents from search string
                // Note : The '.off()' call is to unbind event from DataTables that where triggered before we could intercept anything
                \$('#table-";
            // line 345
            echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
            echo "_filter input').off().on('keyup', function () {
                    var me = this;

                    clearTimeout(oKeyTimeout);
                    oKeyTimeout = setTimeout(function () {
                        oTable";
            // line 350
            echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
            echo ".search(me.value.latinise()).draw();
                    }, iSearchThrottle);
                });// Shows a loader in the table when processing
                \$('#table-";
            // line 353
            echo twig_escape_filter($this->env, ($context["sAreaId"] ?? null), "html", null, true);
            echo "').on('processing.dt', function (event, settings, processing) {
                if (processing === true) {
                    showTableLoader(\$(this));
                }
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAreaData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        echo "
            // Auto collapse item actions popup
            \$('body').on('click', function () {
                \$('table .item-action-wrapper.collapse.in').collapse('hide');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/manage/layout-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  655 => 359,  643 => 353,  637 => 350,  629 => 345,  622 => 340,  614 => 334,  608 => 331,  602 => 330,  598 => 328,  596 => 327,  574 => 308,  571 => 307,  567 => 304,  561 => 302,  559 => 301,  541 => 286,  535 => 283,  529 => 280,  516 => 270,  511 => 268,  507 => 267,  501 => 264,  497 => 263,  491 => 260,  487 => 259,  483 => 258,  479 => 257,  474 => 255,  470 => 254,  466 => 253,  462 => 252,  458 => 251,  454 => 250,  450 => 249,  446 => 248,  439 => 246,  435 => 245,  432 => 244,  429 => 243,  425 => 242,  353 => 173,  320 => 143,  316 => 142,  311 => 140,  307 => 139,  242 => 76,  231 => 74,  227 => 73,  223 => 71,  212 => 69,  208 => 68,  198 => 61,  191 => 58,  188 => 57,  179 => 51,  175 => 49,  173 => 48,  170 => 47,  167 => 46,  161 => 45,  154 => 41,  150 => 39,  144 => 36,  138 => 33,  133 => 32,  131 => 31,  127 => 30,  123 => 28,  120 => 27,  117 => 26,  112 => 25,  109 => 24,  106 => 23,  102 => 21,  94 => 18,  88 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  61 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  41 => 5,  31 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/manage/layout-table.html.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/bricks/manage/layout-table.html.twig");
    }
}
