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

/* base/components/datatable/static/layout.ready.js.twig */
class __TwigTemplate_8bbe9d9ef9a112da19e8ae2fa8f345a9af2df1ef2732c45ed79cc5ba2e70e582 extends \Twig\Template
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
        $context["sListId"] = $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method");
        // line 4
        $context["sListIDForVarSuffix"] = call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [("" . ($context["sListId"] ?? null)), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]);
        // line 5
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method"))) {
            // line 6
            $context["iPageSize"] = $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method");
        } else {
            // line 8
            $context["iPageSize"] = 10;
        }
        // line 10
        echo "
var oTable";
        // line 11
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo " = \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTable({
    language: {
        processing: \"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Processing"]), "html", null, true);
        echo "\",
        search: \"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Search"]), "html", null, true);
        echo "\",
        lengthMenu: \"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:LengthMenu"]), "html", null, true);
        echo "\",
        zeroRecords: \"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:ZeroRecords"]), "html", null, true);
        echo "\",
        info: \"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Info"]), "html", null, true);
        echo "\",
        infoEmpty: \"\",
        infoFiltered: \"(";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:InfoFiltered"]), "html", null, true);
        echo ")\",
        emptyTable: \"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:EmptyTable"]), "html", null, true);
        echo "\",
        paginate: {
            first: \"<i class=\\\"fas fa-angle-double-left\\\"></i>\",
            previous: \"<i class=\\\"fas fa-angle-left\\\"></i>\",
            next: \"<i class=\\\"fas fa-angle-right\\\"></i>\",
            last: \"<i class=\\\"fas fa-angle-double-right\\\"></i>\"
        },
        aria: {
            sortAscending: \": ";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Sort:Ascending"]), "html", null, true);
        echo "\",
            sortDescending: \": ";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Datatables:Language:Sort:Descending"]), "html", null, true);
        echo "\"
        }
    },
    scrollX: true,
    ";
        // line 33
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sMaxHeight"], "method"))) {
            // line 34
            echo "        scrollY: \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sMaxHeight"], "method"), "html", null, true);
            echo "\",
    ";
        }
        // line 36
        echo "    scrollCollapse: true,
    order: [],
    rowId: \"id\",
    filter: false,
    ";
        // line 40
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "pageLength"], "method"))) {
            // line 41
            echo "        pageLength: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "pageLength"], "method"), "html", null, true);
            echo ",
    ";
        }
        // line 43
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "dom"], "method"))) {
            // line 44
            echo "    dom: \"<'ibo-datatable--toolbar'";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "dom"], "method"), "html", null, true);
            echo ">t\",
    ";
        } else {
            // line 46
            echo "    dom: \"<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>t<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>\",
    ";
        }
        // line 48
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
    columns: [
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetColumns", [], "method"));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 51
            echo "        {
            data: \"";
            // line 52
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\",
            width: \"auto\",
            sortable: true
        },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    ],
    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }
        if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
        {
            \$(this).closest('.dataTables_wrapper').find('.checkAll')[0].checked = true;
        }
    },
    initComplete: function () {
        if (this.api().page.info().pages < 2)
        {
            this.closest('.dataTables_wrapper').find('.dataTables_length').hide();
        }
    }
});

if (window.ResizeObserver)
{
    let oStaticTable";
        // line 87
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = null;
    const oStaticTable";
        // line 88
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize = new ResizeObserver(function(){
        clearTimeout(oStaticTable";
        // line 89
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout);
        oStaticTable";
        // line 90
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = setTimeout(function(){
            \$('#";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTable().columns.adjust();
        }, 120);
    });
    oStaticTable";
        // line 94
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize.observe(\$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "')[0]);
}";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 94,  222 => 91,  218 => 90,  214 => 89,  210 => 88,  206 => 87,  174 => 57,  163 => 52,  160 => 51,  156 => 50,  134 => 48,  130 => 46,  124 => 44,  121 => 43,  115 => 41,  113 => 40,  107 => 36,  101 => 34,  99 => 33,  92 => 29,  88 => 28,  77 => 20,  73 => 19,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  45 => 11,  42 => 10,  39 => 8,  36 => 6,  34 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/layout.ready.js.twig", "/var/www/html/itop/templates/base/components/datatable/static/layout.ready.js.twig");
    }
}
