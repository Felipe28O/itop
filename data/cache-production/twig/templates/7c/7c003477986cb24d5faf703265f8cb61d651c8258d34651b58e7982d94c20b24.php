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

/* base/components/datatable/layout.ready.js.twig */
class __TwigTemplate_75f06b7a5f62a1e6d5ae025fbeef4be1e4a4b8068c3653f6c539a9cb5b6ee66f extends \Twig\Template
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
        $context["sListId"] = $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method");
        // line 4
        $context["sListIDForVarSuffix"] = call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [("" . ($context["sListId"] ?? null)), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]);
        // line 5
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method"))) {
            // line 6
            echo "    ";
            $context["iPageSize"] = $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method");
        } else {
            // line 8
            echo "    ";
            $context["iPageSize"] = 10;
        }
        // line 10
        echo "
\$('#";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').closest(\"[role=dialog]\").on(\"dialogbeforeclose\", function () {
    \$('#";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTable().clear();
});

\$('#";
        // line 15
        echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
        echo "').data('target', 'ibo-datatables--outer');

if (\$('#";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "') != 'undefined' && \$.fn.dataTable.isDataTable('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "')) {
    \$('#";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTable().destroy(false);
}

var oTable";
        // line 21
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo " = \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTable({
    language: {
        processing: \"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Processing"]), "html", null, true);
        echo "\",
        search: \"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Search"]), "html", null, true);
        echo "\",
        lengthMenu: \"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:LengthMenu"]), "html", null, true);
        echo "\",
        zeroRecords: \"";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:ZeroRecords"]), "html", null, true);
        echo "\",
        info: \"";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Info"]), "html", null, true);
        echo "\",
        infoEmpty: \"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:InfoEmpty"]), "html", null, true);
        echo "\",
        infoFiltered: \"(";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:InfoFiltered"]), "html", null, true);
        echo ")\",
        emptyTable: \"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:EmptyTable"]), "html", null, true);
        echo "\",
        errorMessage: \"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Error"]), "html", null, true);
        echo "\",
        buttonOk: \"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:Ok"]), "html", null, true);
        echo "\",
        paginate: {
            first: \"<i class=\\\"fas fa-angle-double-left\\\"></i>\",
            previous: \"<i class=\\\"fas fa-angle-left\\\"></i>\",
            next: \"<i class=\\\"fas fa-angle-right\\\"></i>\",
            last: \"<i class=\\\"fas fa-angle-double-right\\\"></i>\"
        },
        aria: {
            sortAscending: \": ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Sort:Ascending"]), "html", null, true);
        echo "\",
            sortDescending: \": ";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Sort:Descending"]), "html", null, true);
        echo "\"
        }
    },
    scrollX: true,
    ";
        // line 45
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sMaxHeight"], "method"))) {
            // line 46
            echo "    scrollY: \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sMaxHeight"], "method"), "html", null, true);
            echo "\",
    ";
        }
        // line 48
        echo "    scrollCollapse: true,
    ";
        // line 49
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "printVersion"], "method"))) {
            // line 50
            echo "    paging: false,
    info: false,
    ";
        }
        // line 53
        echo "    lengthMenu: [[ ";
        echo twig_escape_filter($this->env, ($context["iPageSize"] ?? null), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 2), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 3), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 4), "html", null, true);
        echo ", -1], [ ";
        echo twig_escape_filter($this->env, ($context["iPageSize"] ?? null), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 2), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 3), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 4), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:DisplayLength:All"]), "html", null, true);
        echo "\"]],
    dom: \"<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>t<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>\",
    ";
        // line 55
        if ($this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sort"], "method", false, true), 0, [], "array", true, true)) {
            // line 56
            echo "    order: [[";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetOptions", [], "method"), "sort", [], "array"), 0, [], "array"), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetOptions", [], "method"), "sort", [], "array"), 1, [], "array"), "html", null, true);
            echo "']],
    ";
        } else {
            // line 58
            echo "    order: [],
    ";
        }
        // line 60
        echo "    ordering: true,
    ";
        // line 61
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method"))) {
            // line 62
            echo "    select: {
        style: \"";
            // line 63
            if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method") == "multiple")) {
                echo "multi";
            } else {
                echo "single";
            }
            echo "\",
        info: false
    },
    rowCallback: function (oRow, oData) {
        if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
        {
            if (oSelectedItems";
            // line 69
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ".indexOf(oData.id) === -1)
            {
                this.api().row(\$(oRow)).select();
                //   \$(oRow).addClass('selected');
                \$(oRow).find('td:first-child input').prop('checked', true);
            }
        }
        else
        {
            if (oSelectedItems";
            // line 78
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ".indexOf(oData.id) > -1)
            {
                this.api().row(\$(oRow)).select();
                \$(oRow).find('td:first-child input').prop('checked', true);
            }
        }
    },
    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
        {
            \$(this).closest('.dataTables_wrapper').find('.checkAll')[0].checked = true;
        }
        bSelectAllowed";
            // line 94
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = true;

        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }

        \$(this).closest('.dataTables_wrapper').unblock();
        \$(\"#";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo " a\").on('click', function (e) {
            //disable select action when there is a link
            e.stopPropagation();
        });
    },
    ";
        } else {
            // line 113
            echo "    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        \$(this).closest('.dataTables_wrapper').unblock();
        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }
    },
    ";
        }
        // line 130
        echo "    rowId: \"id\",
    filter: false,
    retrieve: true,
    destroy: true,
    processing: true,
    serverSide: true,
    columns: [
        ";
        // line 137
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method"))) {
            // line 138
            echo "        {
            width: \"20px\",
            searchable: false,
            sortable: false,
            orderable: false,
            title:
                    ";
            // line 144
            if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method") != "single")) {
                // line 145
                echo "                '<span class=\"row_input\"><input type=\"checkbox\" onclick=\"checkAllDataTable(\\'";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "\\',this.checked,\\'";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method"), "html", null, true);
                echo "\\');\" class=\"checkAll\" id=\"field_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "_check_all\" name=\"field_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "_check_all\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:SearchValue:CheckAll"]), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:SearchValue:UncheckAll"]), "html", null, true);
                echo "\"/></span>'
            ";
            } else {
                // line 147
                echo "                '<span class=\"row_input\"><input type=\"checkbox\" style=\"display: none;\" onclick=\"checkAllDataTable(\\'";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "\\',this.checked,\\'";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method"), "html", null, true);
                echo "\\');\" class=\"checkAll\" id=\"field_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "_check_all\" name=\"field_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "_check_all\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:SearchValue:CheckAll"]), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:SearchValue:UncheckAll"]), "html", null, true);
                echo "\"/></span>'
            ";
            }
            // line 148
            echo ",
            type: \"html\",
            data: \"id\",
            render: function (data, type, row) {
                let oCheckboxElem =
                ";
            // line 153
            if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method") != "single")) {
                // line 154
                echo "                    \$('<span class=\"row_input\"><input type=\"checkbox\" class=\"selectList";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "\" name=\"selectObject[]\" value=\"'+row.id+'\"></span>');
                ";
            } else {
                // line 156
                echo "                     \$('<span class=\"row_input\"><input type=\"radio\" class=\"selectList";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "\" name=\"selectObject[]\" value=\"'+row.id+'\"></span>');
                ";
            }
            // line 158
            echo "                if (row.limited_access) {
                    oCheckboxElem.html('-');
                } else {
                    oCheckboxElem.find(':input').attr('data-object-id', row.id).attr('data-target-object-id', row.target_id);
                }
                return oCheckboxElem.prop('outerHTML');
            }
        },
        ";
        }
        // line 167
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDisplayColumns", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["aColumn"]) {
            // line 168
            echo "        {
            // width: 100,
            autoWidth: true,
            searchable: false,
            sortable: true,
            title: \"";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_label", [], "array"), "html", null, true);
            echo "\",
            defaultContent: \"\",
            type: \"html\",
            metadata: {
                object_class: \"";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "object_class", [], "array"), "html", null, true);
            echo "\",
                attribute_code: \"";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_code", [], "array"), "html", null, true);
            echo "\",
                attribute_type: \"";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_type", [], "array"), "html", null, true);
            echo "\",
                attribute_label: \"";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_label", [], "array"), "html", null, true);
            echo "\"
            },
            data: \"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "class_alias", [], "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_code", [], "array"), "html", null, true);
            echo "\",
            createdCell: function (td, cellData, rowData, row, col) {
                \$(td).attr('data-object-class', '";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "object_class", [], "array"), "html", null, true);
            echo "');
                \$(td).attr('data-attribute-label', '";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_label", [], "array"), "html", null, true);
            echo "');
                ";
            // line 186
            if (($this->getAttribute($context["aColumn"], "attribute_code", [], "array") != "_key_")) {
                // line 187
                echo "                \$(td).attr('data-attribute-code', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_code", [], "array"), "html", null, true);
                echo "');
                \$(td).attr('data-attribute-type', '";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_type", [], "array"), "html", null, true);
                echo "');
                ";
            }
            // line 190
            echo "                if (rowData[\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "class_alias", [], "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_code", [], "array"), "html", null, true);
            echo "/raw\"]) {
                    \$(td).attr('data-value-raw', rowData[\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "class_alias", [], "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_code", [], "array"), "html", null, true);
            echo "/raw\"]);
                }
            },
            render: {
                display: function (data, type, row) {  ";
            // line 195
            echo $this->getAttribute($context["aColumn"], "render", [], "array");
            echo "},
                _: \"";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "class_alias", [], "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aColumn"], "attribute_code", [], "array"), "html", null, true);
            echo "\"
            }
        },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aColumn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "    ],
    ajax: \$.fn.dataTable.pipeline({
                url: \"";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAjaxUrl", [], "method"), "html", null, true);
        echo "\",
                data: ";
        // line 203
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetJsonAjaxData", [], "method");
        echo ",
                method: \"post\",
                pages: 1
            }, // number of pages to cache
            ";
        // line 207
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetJsonInitDisplayData", [], "method");
        echo "
    ),
    createdRow: function (row, data, dataIndex) {
        if (data['@class'] !== undefined)
        {
            \$(row).addClass(data['@class']);
        }
    },
    initComplete: function () {
        if (this.api().page.info().pages < 2)
        {
            this.closest('.dataTables_wrapper').find('.dataTables_length').hide();
        }
        this.closest('.dataTables_wrapper').unblock();

        ";
        // line 222
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method"))) {
            // line 223
            echo "        updateDataTableSelection('";
            echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "');
        ";
            // line 224
            if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method") != "single")) {
                // line 225
                echo "        this.api().on('select', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 226
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ")
            {
                let aData = oTable";
                // line 228
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".rows(indexes).data().toArray();
                if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
                {
                    // Checking input
                    \$('#";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "  tbody tr.selected td:first-child input').prop('checked', true);
                    // Saving values in temp array
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 237
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) > -1)
                        {
                            oSelectedItems";
                // line 239
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".splice(oSelectedItems";
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId), 1);
                            updateDataTableSelection('";
                // line 240
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "');
                        }
                    }
                }
                else
                {
                    // Checking input
                    \$('#";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo " tbody tr.selected td:first-child input').prop('checked', true);
                    // Saving values in temp array
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 252
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) === -1)
                        {
                            oSelectedItems";
                // line 254
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".push(iItemId);
                            updateDataTableSelection('";
                // line 255
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "');
                        }
                    }
                }
            }
        });

        this.api().off('deselect').on('deselect', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 263
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo " )
            {
                let aData = oTable";
                // line 265
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".rows(indexes).data().toArray();
                // Checking input
                \$('#";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo " tbody tr:not(.selected) td:first-child input').prop('checked', false);
                // Saving values in temp array
                if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
                {
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 274
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) === -1)
                        {
                            oSelectedItems";
                // line 276
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".push(iItemId);
                            updateDataTableSelection('";
                // line 277
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "');
                        }
                    }
                }
                else
                {
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 286
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) > -1)
                        {
                            oSelectedItems";
                // line 288
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".splice(oSelectedItems";
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId), 1);
                            updateDataTableSelection('";
                // line 289
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "');
                        }
                    }
                }
            }
        });
        ";
            } else {
                // line 296
                echo "        this.api().off('select').on('select', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 297
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo " )
            {
                let aData = oTable";
                // line 299
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".rows(indexes).data().toArray();
                // Checking input
                \$('#";
                // line 301
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "  tbody tr.selected td:first-child input').prop('checked', true);
                // Saving values in temp array
                for (let i in aData)
                {
                    let iItemId = aData[i].id;
                    if (oSelectedItems";
                // line 306
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) === -1)
                    {
                        oSelectedItems";
                // line 308
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".push(iItemId);
                        updateDataTableSelection('";
                // line 309
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "');
                    }
                }
            }
        });

        this.api().off('deselect').on('deselect', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 316
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo " )
            {
                let aData = oTable";
                // line 318
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".rows(indexes).data().toArray();

                // Checking input
                \$('#";
                // line 321
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo " tr tbody tr:not(.selected) td:first-child input').prop('checked', false);
                // Saving values in temp array
                for (let i in aData)
                {
                    let iItemId = aData[i].id;
                    if (oSelectedItems";
                // line 326
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) > -1)
                    {
                        oSelectedItems";
                // line 328
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".splice(oSelectedItems";
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId), 1);
                        updateDataTableSelection('";
                // line 329
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                echo "');
                    }
                }
            }
        });
        ";
            }
            // line 335
            echo "
        ";
            // line 336
            if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetDisabledSelect", [], "method"))) {
                // line 337
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetDisabledSelect", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 338
                    echo "        \$('.selectList";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
                    echo "[value=";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]').prop(\"disabled\", \"disabled\");
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                echo "        ";
            }
            // line 341
            echo "        ";
        }
        // line 342
        echo "    }
});

oTable";
        // line 345
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo ".select();



";
        // line 349
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sCountSelector"], "method"))) {
            // line 350
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
            echo " [name=\"selectionCount\"]').bind('change', function () {
    \$('";
            // line 351
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sCountSelector"], "method"), "html", null, true);
            echo "').val(\$('#";
            echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
            echo " [name=\"selectionCount\"]').val());
    \$('";
            // line 352
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sCountSelector"], "method"), "html", null, true);
            echo "').trigger('change');
});
";
        }
        // line 355
        echo "
\$('#datatable_dlg_";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').dialog(
        {
            autoOpen: false,
            title: \"";
        // line 359
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:ListConfigurationTitle"]), "html", null, true);
        echo "\",
            width: 500,
            modal: true,
            open: function () {
                \$('#datatable_dlg_";
        // line 363
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').find('[name=action]').val(\"none\");
            },
            close: function (event, ui) { //save data and refresh
                if (\$('#datatable_dlg_";
        // line 366
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').find('[name=action]').val() === \"none\")
                {
                    \$('#datatable_dlg_";
        // line 368
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTableSettings('onDlgCancel');
                }
            }
        });

var aOptions";
        // line 373
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo " = {
    sListId: '";
        // line 374
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "',
    oColumns: ";
        // line 375
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetResultColumnsAsJson", [], "method");
        echo ",
    sSelectMode: \"";
        // line 376
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method"), "html", null, true);
        echo "\",
    sSelectedItemsName: \"oSelectedItems";
        // line 377
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "\",
    sViewLink: '";
        // line 378
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "bViewLink"], "method"), "html", null, true);
        echo "',
    iPageSize: ' ";
        // line 379
        echo twig_escape_filter($this->env, ($context["iPageSize"] ?? null), "html", null, true);
        echo "',
    oClassAliases: JSON.parse('";
        // line 380
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "oClassAliases"], "method");
        echo "'),
    sTableId: '";
        // line 381
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sTableId"], "method"), "html", null, true);
        echo "',
    sRenderUrl: \"";
        // line 382
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAjaxUrl", [], "method"), "html", null, true);
        echo "\",
    oData: ";
        // line 383
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetJsonAjaxData", [], "method");
        echo ",
    oDefaultSettings: ";
        // line 384
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "oDefaultSettings"], "method");
        echo ",
    oLabels: {moveup: \"";
        // line 385
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:MoveUp"]), "html", null, true);
        echo "\", movedown: \"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:MoveDown"]), "html", null, true);
        echo "\"},
};

if (\$('#datatable_dlg_";
        // line 388
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').hasClass('itop-datatable'))
{
    \$('#datatable_dlg_";
        // line 390
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTableSettings('destroy');
}
\$('#datatable_dlg_";
        // line 392
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTableSettings(aOptions";
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo ");

if(window.ResizeObserver){
        let oTable";
        // line 395
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = null;
        const oTable";
        // line 396
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize = new ResizeObserver(function(){
            clearTimeout(oTable";
        // line 397
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout);
            oTable";
        // line 398
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = setTimeout(function(){
                \$('#";
        // line 399
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTable().columns.adjust();
            }, 120);
        });
        oTable";
        // line 402
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize.observe(\$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "')[0]);
}";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  927 => 402,  921 => 399,  917 => 398,  913 => 397,  909 => 396,  905 => 395,  897 => 392,  892 => 390,  887 => 388,  879 => 385,  875 => 384,  871 => 383,  867 => 382,  863 => 381,  859 => 380,  855 => 379,  851 => 378,  847 => 377,  843 => 376,  839 => 375,  835 => 374,  831 => 373,  823 => 368,  818 => 366,  812 => 363,  805 => 359,  799 => 356,  796 => 355,  790 => 352,  784 => 351,  779 => 350,  777 => 349,  770 => 345,  765 => 342,  762 => 341,  759 => 340,  748 => 338,  743 => 337,  741 => 336,  738 => 335,  727 => 329,  721 => 328,  716 => 326,  708 => 321,  702 => 318,  697 => 316,  685 => 309,  681 => 308,  676 => 306,  668 => 301,  663 => 299,  658 => 297,  655 => 296,  643 => 289,  637 => 288,  632 => 286,  618 => 277,  614 => 276,  609 => 274,  599 => 267,  594 => 265,  589 => 263,  576 => 255,  572 => 254,  567 => 252,  559 => 247,  547 => 240,  541 => 239,  536 => 237,  528 => 232,  521 => 228,  516 => 226,  513 => 225,  511 => 224,  504 => 223,  502 => 222,  484 => 207,  477 => 203,  473 => 202,  469 => 200,  457 => 196,  453 => 195,  444 => 191,  437 => 190,  432 => 188,  427 => 187,  425 => 186,  421 => 185,  417 => 184,  410 => 182,  405 => 180,  401 => 179,  397 => 178,  393 => 177,  386 => 173,  379 => 168,  374 => 167,  363 => 158,  357 => 156,  351 => 154,  349 => 153,  342 => 148,  326 => 147,  310 => 145,  308 => 144,  300 => 138,  298 => 137,  289 => 130,  270 => 113,  261 => 107,  245 => 94,  226 => 78,  214 => 69,  201 => 63,  198 => 62,  196 => 61,  193 => 60,  189 => 58,  181 => 56,  179 => 55,  157 => 53,  152 => 50,  150 => 49,  147 => 48,  141 => 46,  139 => 45,  132 => 41,  128 => 40,  117 => 32,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  74 => 21,  68 => 18,  62 => 17,  57 => 15,  51 => 12,  47 => 11,  44 => 10,  40 => 8,  36 => 6,  34 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/layout.ready.js.twig", "/var/www/html/itop/templates/base/components/datatable/layout.ready.js.twig");
    }
}
