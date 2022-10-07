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

/* base/components/datatable/static/formtable/layout.ready.js.twig */
class __TwigTemplate_c5236d9a5e938cd05738b4b6777f4ffd27e35e1fb3116f3b8ceaabcd29f905fc extends \Twig\Template
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
        $context["sListId"] = $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method");
        // line 2
        $context["sListIDForVarSuffix"] = call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [("" . ($context["sListId"] ?? null)), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]);
        // line 3
        echo "
var oTable";
        // line 4
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo " = \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTable({
    language: {
        emptyTable: \"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Message:EmptyList:UseAdd"]), "html", null, true);
        echo "\"
    },
    scrollX: true,
    scrollCollapse: true,
    paging: false,
    filter: false,
    search: false,
    dom: \"t\",
    \"order\": [],
    ";
        // line 15
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method"))) {
            // line 16
            echo "    ";
            if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method") != "custom")) {
                // line 17
                echo "    select: {
        style: \"";
                // line 18
                if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method") == "multiple")) {
                    echo "multi";
                } else {
                    echo "single";
                }
                echo "\",
        info: false
    },
    ";
            }
            // line 22
            echo "    columnDefs: [
        {orderable: false, targets: 0}
    ],
    ";
        }
        // line 26
        echo "    drawCallback: function (settings) {
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
    },
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
    },
});

";
        // line 56
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "bFullscreen"], "method")) {
            // line 57
            echo "var heightS";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = 0;
var heightD";
            // line 58
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = 0;
if (\$(\"#";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "\").height() > 0)
{
    heightD";
            // line 61
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = \$(\"#ibo-main-content\").height()-\$(\"#ibo-main-content\")[0].scrollHeight+\$(\"#";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "\").height();
    heightS";
            // line 62
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = \$(\"#ibo-main-content\").height();
    if (heightD";
            // line 63
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " > 200)
    {
        \$(\"#";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "_wrapper\").find(\".dataTables_scrollBody\").height(heightD";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ");
    }
}
";
        }
        // line 69
        echo "
if (window.ResizeObserver)
{
    let oFromTable";
        // line 72
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = null;
    const oFromTable";
        // line 73
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize = new ResizeObserver(function () {
        clearTimeout(oFromTable";
        // line 74
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout);
        oFromTable";
        // line 75
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = setTimeout(function () {
            \$('#";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').DataTable().columns.adjust();
        }, 120);
    });
    oFromTable";
        // line 79
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize.observe(\$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "')[0]);

    ";
        // line 81
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "bFullscreen"], "method")) {
            // line 82
            echo "    let heightScreen";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = heightS";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ";
    let heightDatatable";
            // line 83
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = heightD";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ";
    let oFromScreen";
            // line 84
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "ResizeTimeout = null;
    const oFromScreen";
            // line 85
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "Resize = new ResizeObserver(function () {
        clearTimeout(oFromScreen";
            // line 86
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "ResizeTimeout);
        oFromScreen";
            // line 87
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "ResizeTimeout = setTimeout(function () {
            if (\$(\"#";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "_wrapper\").height() > 0)
            {
                if (heightDatatable";
            // line 90
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "> 0)
                {
                    let calcul = \$(\"#ibo-main-content\").height()+heightDatatable";
            // line 92
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "-heightScreen";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ";
                    if (calcul > 200)
                    {
                        \$(\"#";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "_wrapper\").find(\".dataTables_scrollBody\").height(calcul);
                    }
                }
                else
                {
                    heightDatatable";
            // line 100
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = \$(\"#ibo-main-content\").height()-\$(\"#ibo-main-content\")[0].scrollHeight+\$(\"#";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "_wrapper\").height();
                    heightScreen";
            // line 101
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = \$(\"#ibo-main-content\").height();
                    if (heightDatatable";
            // line 102
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " > 200)
                    {
                        \$(\"#";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "_wrapper\").find(\".dataTables_scrollBody\").height(heightDatatable";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ");
                    }
                }

            }
        }, 120);
    });
    oFromScreen";
            // line 111
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "Resize.observe(\$('#ibo-main-content')[0]);

    ";
        }
        // line 114
        echo "
}";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/formtable/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 114,  271 => 111,  259 => 104,  254 => 102,  250 => 101,  244 => 100,  236 => 95,  228 => 92,  223 => 90,  218 => 88,  214 => 87,  210 => 86,  206 => 85,  202 => 84,  196 => 83,  189 => 82,  187 => 81,  180 => 79,  174 => 76,  170 => 75,  166 => 74,  162 => 73,  158 => 72,  153 => 69,  144 => 65,  139 => 63,  135 => 62,  129 => 61,  124 => 59,  120 => 58,  115 => 57,  113 => 56,  81 => 26,  75 => 22,  64 => 18,  61 => 17,  58 => 16,  56 => 15,  44 => 6,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/formtable/layout.ready.js.twig", "/var/www/html/itop/templates/base/components/datatable/static/formtable/layout.ready.js.twig");
    }
}
